<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // 🔹 Show all courses
    public function index()
    {
        $courses = Course::latest()->get();
        $totalCourses = Course::count();
        $activeCourses = Course::where('status', 'active')->count();
        $draftCourses  = Course::where('status', 'draft')->count();

        $courses = Course::latest()->get();
        return view('backend.pages.course', compact('courses','totalCourses','activeCourses','draftCourses'));
    }

    public function create()
    {
        return view('backend.pages.addcourse');
    }

    // 🔹 Store data (WITH IMAGE UPLOAD)
    public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $imageName = null;

        // ✅ Image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/courses'), $imageName);
        }

        // ✅ Insert Data
        Course::create([
            'title' => $request->title,
            'category' => $request->category,
            'price' => $request->price,
            'badge' => $request->badge,
            'duration' => $request->duration,
            'mode' => $request->mode,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('courses')->with('success', 'Course Added Successfully');
    }

    // 🔹 Edit
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.pages.editcourse', compact('course'));
    }

    // 🔹 Update
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $imageName = $course->image;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($course->image && file_exists(public_path('uploads/courses/' . $course->image))) {
                unlink(public_path('uploads/courses/' . $course->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/courses'), $imageName);
        }

        $course->update([
            'title' => $request->title,
            'category' => $request->category,
            'price' => $request->price,
            'badge' => $request->badge,
            'duration' => $request->duration,
            'mode' => $request->mode,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('/admin/courses')->with('success', 'Course Updated Successfully');
    }

    // 🔹 Delete
    public function delete($id)
    {
        $course = Course::findOrFail($id);

        // Delete image if exists
        if ($course->image && file_exists(public_path('uploads/courses/' . $course->image))) {
            unlink(public_path('uploads/courses/' . $course->image));
        }

        $course->delete();

        return back()->with('success', 'Course Deleted');
    }
    
}

