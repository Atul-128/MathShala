<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'category' => 'required',
            'title' => 'nullable|string'
        ]);

        // image upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/gallery'), $imageName);

        // save
        Gallery::create([
            'image' => $imageName,
            'category' => $request->category,
            'title' => $request->title,
        ]);

        return back()->with('success', 'Image uploaded successfully');
    }
    public function create()
    {
        $galleries = Gallery::latest()->get(); // gallery show ke liye
        return view('backend.pages.addgallery', compact('galleries'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.pages.editgallery', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'category' => 'required',
            'title' => 'nullable|string'
        ]);

        // image update (optional)
        if ($request->hasFile('image')) {

            // old image delete
            if ($gallery->image && file_exists(public_path('uploads/gallery/'.$gallery->image))) {
                unlink(public_path('uploads/gallery/'.$gallery->image));
            }

            // new image upload
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/gallery'), $imageName);

            $gallery->image = $imageName;
        }

        $gallery->category = $request->category;
        $gallery->title = $request->title;
        $gallery->save();

        return redirect()->route('gallery.create')->with('success', 'Gallery updated successfully');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // image delete
        if ($gallery->image && file_exists(public_path('uploads/gallery/'.$gallery->image))) {
            unlink(public_path('uploads/gallery/'.$gallery->image));
        }

        $gallery->delete();

        return back()->with('success', 'Gallery deleted successfully');
    }
}
