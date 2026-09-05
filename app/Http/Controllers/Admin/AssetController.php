<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Setting::whereIn('group', ['home', 'about', 'contact', 'course'])
                        ->orderBy('group', 'asc')
                        ->get()
                        ->groupBy('group');

        return view('backend.pages.assets', compact('assets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:settings,key',
            'label' => 'required',
            'group' => 'required',
        ]);

        $asset = new Setting();
        $asset->key = Str::slug($request->key, '_');
        $asset->label = $request->label;
        $asset->group = $request->group;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $asset->key . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/assets'), $imageName);
            $asset->image = $imageName;
            $asset->value = asset('uploads/assets/' . $imageName);
        } else {
            $asset->value = $request->value;
        }

        $asset->save();

        return back()->with('success', 'New asset created successfully');
    }

    public function update(Request $request, $id)
    {
        $asset = Setting::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($asset->key) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/assets'), $imageName);
            
            // Delete old image if exists and not a URL
            if ($asset->image && !filter_var($asset->image, FILTER_VALIDATE_URL)) {
                $oldPath = public_path('uploads/assets/' . $asset->image);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }
            
            $asset->image = $imageName;
            $asset->value = asset('uploads/assets/' . $imageName);
        } else if ($request->has('value') && !empty($request->value)) {
            $asset->value = $request->value;
        }

        if ($request->has('label')) {
            $asset->label = $request->label;
        }
        
        if ($request->has('group')) {
            $asset->group = $request->group;
        }

        $asset->save();

        return back()->with('success', 'Asset updated successfully');
    }

    public function delete($id)
    {
        $asset = Setting::findOrFail($id);
        
        if ($asset->image && !filter_var($asset->image, FILTER_VALIDATE_URL)) {
            $oldPath = public_path('uploads/assets/' . $asset->image);
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }
        
        $asset->delete();

        return back()->with('success', 'Asset deleted successfully');
    }
}
