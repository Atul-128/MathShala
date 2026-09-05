<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Performer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PerformerController extends Controller
{
    public function index()
    {
        $performers = Performer::orderBy('order', 'asc')->latest()->get();
        return view('backend.pages.performers', compact('performers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rank' => 'required',
            'year' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/performers'), $imageName);
            $data['image'] = $imageName;
        }

        Performer::create($data);

        return back()->with('success', 'Performer added successfully!');
    }

    public function edit($id)
    {
        $performer = Performer::findOrFail($id);
        return view('backend.pages.editperformer', compact('performer'));
    }

    public function update(Request $request, $id)
    {
        $performer = Performer::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'rank' => 'required',
            'year' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($performer->image) {
                $oldPath = public_path('uploads/performers/'.$performer->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/performers'), $imageName);
            $data['image'] = $imageName;
        }

        $performer->update($data);

        return redirect()->route('performers')->with('success', 'Performer updated successfully!');
    }

    public function delete($id)
    {
        $performer = Performer::findOrFail($id);
        
        if ($performer->image) {
            $path = public_path('uploads/performers/'.$performer->image);
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $performer->delete();
        return back()->with('success', 'Performer deleted successfully!');
    }
}
