<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::orderBy('order', 'asc')->get();
        return view('backend.pages.faculty', compact('faculties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'department' => 'nullable',
            'status' => 'required',
            'order' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/faculty'), $imageName);
            $data['image'] = $imageName;
        }

        Faculty::create($data);

        return back()->with('success', 'Faculty member added successfully!');
    }

    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('backend.pages.editfaculty', compact('faculty'));
    }

    public function update(Request $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'department' => 'nullable',
            'status' => 'required',
            'order' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($faculty->image) {
                $oldPath = public_path('uploads/faculty/'.$faculty->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/faculty'), $imageName);
            $data['image'] = $imageName;
        }

        $faculty->update($data);

        return redirect()->route('faculty')->with('success', 'Faculty member updated successfully!');
    }

    public function delete($id)
    {
        $faculty = Faculty::findOrFail($id);
        
        if ($faculty->image) {
            $path = public_path('uploads/faculty/'.$faculty->image);
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $faculty->delete();
        return back()->with('success', 'Faculty member deleted successfully!');
    }
}
