<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $banners = \App\Models\Banner::latest()->get();
        return view('backend.pages.banner', compact('banners'));
    }

   // 🔹 Store
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'image' => 'required|image'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/banners'), $imageName);
        }

        Banner::create([
            'image' => $imageName,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'order' => $request->order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Banner Added');
    }

    // 🔹 Edit (data load in form)
        public function edit($id)
        {
            $banner = Banner::findOrFail($id);
            return view('backend.pages.edit-banner', compact('banner'));
        }


        // 🔹 Update
        public function update(Request $request, $id)
        {
            $banner = Banner::findOrFail($id);

            $request->validate([
                'title' => 'required',
                'button_text' => 'required',
                'button_link' => 'required',
                'image' => 'nullable|image'
            ]);

            $imageName = $banner->image;

            // ✅ New Image Upload
            if ($request->hasFile('image')) {

                // Old image delete
                if ($banner->image && file_exists(public_path('uploads/banners/'.$banner->image))) {
                    unlink(public_path('uploads/banners/'.$banner->image));
                }

                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/banners'), $imageName);
            }

            $banner->update([
                'image' => $imageName,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_text' => $request->button_text,
                'button_link' => $request->button_link,
                'order' => $request->order,
                'status' => $request->status,
            ]);

            return redirect()->route('banner')->with('success', 'Banner Updated');
        }


        // 🔹 Delete
        public function delete($id)
        {
            $banner = Banner::findOrFail($id);

            // Image delete
            if ($banner->image && file_exists(public_path('uploads/banners/'.$banner->image))) {
                unlink(public_path('uploads/banners/'.$banner->image));
            }

            $banner->delete();

            return back()->with('success', 'Banner Deleted');
        }
}
