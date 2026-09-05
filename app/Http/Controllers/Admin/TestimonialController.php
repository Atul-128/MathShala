<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('backend.pages.testimonials', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quote' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/testimonials'), $imageName);
            $data['image'] = $imageName;
        }

        Testimonial::create($data);

        return back()->with('success', 'Testimonial added successfully!');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.pages.edittestimonial', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'quote' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($testimonial->image) {
                $oldPath = public_path('uploads/testimonials/'.$testimonial->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/testimonials'), $imageName);
            $data['image'] = $imageName;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials')->with('success', 'Testimonial updated successfully!');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        
        if ($testimonial->image) {
            $path = public_path('uploads/testimonials/'.$testimonial->image);
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $testimonial->delete();
        return back()->with('success', 'Testimonial deleted successfully!');
    }
}
