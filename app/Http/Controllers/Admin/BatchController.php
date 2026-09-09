<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Ticker;
use App\Models\Setting;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::orderBy('order', 'asc')->get();
        $tickers = Ticker::orderBy('order', 'asc')->get();
        
        // Ensure settings exist
        $batch_title = Setting::firstOrCreate(['key' => 'batch_main_title'], ['value' => 'Upcoming 2026 Batches', 'group' => 'batch']);
        $batch_subtitle = Setting::firstOrCreate(['key' => 'batch_sub_title'], ['value' => 'at Delhi Centre with Fees', 'group' => 'batch']);
        $batch_description = Setting::firstOrCreate(['key' => 'batch_description'], ['value' => 'GS Pre cum Main Foundation Course for CSE 2027', 'group' => 'batch']);

        return view('backend.pages.batches', compact('batches', 'tickers', 'batch_title', 'batch_subtitle', 'batch_description'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'venue' => 'required',
            'time' => 'required',
            'date' => 'required',
            'fee' => 'required',
        ]);

        Batch::create($request->except('_token'));

        return back()->with('success', 'Batch added successfully');
    }

    public function edit($id)
    {
        $batch = Batch::findOrFail($id);
        return response()->json($batch);
    }

    public function update(Request $request, $id)
    {
        $batch = Batch::findOrFail($id);
        $batch->update($request->except('_token'));

        return back()->with('success', 'Batch updated successfully');
    }

    public function delete($id)
    {
        $batch = Batch::findOrFail($id);
        $batch->delete();

        return back()->with('success', 'Batch deleted successfully');
    }

    public function storeTicker(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        Ticker::create($request->except('_token'));

        return back()->with('success', 'Ticker added successfully');
    }

    public function deleteTicker($id)
    {
        $ticker = Ticker::findOrFail($id);
        $ticker->delete();

        return back()->with('success', 'Ticker deleted successfully');
    }

    public function updateSettings(Request $request)
    {
        if($request->has('batch_main_title')) {
            Setting::updateOrCreate(['key' => 'batch_main_title'], ['value' => $request->batch_main_title, 'group' => 'batch']);
        }
        if($request->has('batch_sub_title')) {
            Setting::updateOrCreate(['key' => 'batch_sub_title'], ['value' => $request->batch_sub_title, 'group' => 'batch']);
        }
        if($request->has('batch_description')) {
            Setting::updateOrCreate(['key' => 'batch_description'], ['value' => $request->batch_description, 'group' => 'batch']);
        }

        return back()->with('success', 'Batch settings updated successfully');
    }
}
