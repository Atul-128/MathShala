<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnrollController extends Controller
{
    // Save data
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'course' => 'required',
        ]);

        // save data
        Enrollment::create($request->all());

        // Prepare message
        $messageBody = "New Enrollment Received:\n\n"
            . "Name: " . $request->name . "\n"
            . "Phone: " . $request->phone . "\n"
            . "Email: " . $request->email . "\n"
            . "Course: " . $request->course;

        // Send Email to Admin
        try {
            // Replace with actual admin email if needed.
            $adminEmail = 'admin@thevisionclasses.com';
            Mail::raw($messageBody, function ($message) use ($adminEmail, $request) {
                $message->to($adminEmail)
                        ->subject('New Enrollment: ' . $request->name);
            });
        } catch (\Exception $e) {
            // If email fails (e.g. not configured), continue to whatsapp
            \Illuminate\Support\Facades\Log::error('Email failed: ' . $e->getMessage());
        }

        // Redirect user back with success message
        return redirect()->back()->with('success', 'Your admission form has been submitted successfully! We will contact you soon.');
    }

    // Show data in admin
    public function index()
    {
        $enrollments = Enrollment::latest()->get();

        return view('backend.pages.enroll', compact('enrollments'));
    }
}
