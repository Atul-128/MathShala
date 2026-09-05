<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
      public function index()
    {
        // Total enrollments
        $totalEnrollments = Enrollment::count();
        $totalCourses = Course::count();
         $totalBanners = Banner::count();
         $totalTestimonials = \App\Models\Testimonial::count();
         $totalFaculty = \App\Models\Faculty::count();
         $totalPerformers = \App\Models\Performer::count();

         $enrollments = Enrollment::latest()->get(); // latest first

        return view('backend.pages.dashboard', compact(
            'totalEnrollments',
            'totalCourses',
            'totalBanners',
            'totalTestimonials',
            'totalFaculty',
            'totalPerformers',
            'enrollments',
        ));
       

    }
}
