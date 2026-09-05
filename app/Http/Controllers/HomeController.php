<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status', 'active')
                    ->orderBy('order', 'asc')
                    ->get();

        $courses = Course::latest()->take(3)->get(); // recent 3

        $testimonials = \App\Models\Testimonial::where('status', 'active')->orderBy('order', 'asc')->get();
        $faculties = \App\Models\Faculty::where('status', 'active')->orderBy('order', 'asc')->get();
        $performers = \App\Models\Performer::where('status', 'active')->orderBy('order', 'asc')->get();
        
        $batches = \App\Models\Batch::where('status', 'active')->orderBy('order', 'asc')->get();
        $tickers = \App\Models\Ticker::where('status', 'active')->orderBy('order', 'asc')->get();
        $batch_settings = \App\Models\Setting::where('group', 'batch')->pluck('value', 'key');
        
        $site_assets = \App\Models\Setting::whereIn('group', ['home', 'about', 'contact', 'course', 'footer'])
                        ->pluck('value', 'key');

        return view('frontend.pages.home', compact('banners', 'courses', 'testimonials', 'faculties', 'performers', 'batches', 'tickers', 'batch_settings', 'site_assets'));
    }

    public function course()
    {
        $courses = Course::latest()->get(); // ya paginate(6)

        return view('frontend.pages.course', compact('courses'));
    }

    public function galleryPage()
    {
        $galleries = Gallery::latest()->get();
        $performers = \App\Models\Performer::where('status', 'active')->orderBy('order', 'asc')->get();
        return view('frontend.pages.gallery', compact('galleries', 'performers'));
    }
}
