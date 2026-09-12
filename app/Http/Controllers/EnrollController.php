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
            'name' => 'nullable',
            'student_class' => 'nullable',
            'age' => 'nullable',
            'school_name' => 'nullable',
            'principal_name' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
            'course' => 'required',
        ]);

        // save data
        Enrollment::create($request->all());

        // Prepare message
        $messageBody = "New Enrollment Received:\n\n";
        
        if ($request->filled('school_name')) {
            $messageBody .= "School Name: " . $request->school_name . "\n";
            if ($request->filled('principal_name')) {
                $messageBody .= "Principal & Coordinator Name: " . $request->principal_name . "\n";
            }
        }
        
        if ($request->filled('name')) {
            $messageBody .= "Name: " . $request->name . "\n";
        }
        if ($request->filled('student_class')) {
            $messageBody .= "Class: " . $request->student_class . "\n";
        }
        if ($request->filled('age')) {
            $messageBody .= "Age: " . $request->age . "\n";
        }

        $messageBody .= "Phone: " . $request->phone . "\n"
            . "Email: " . $request->email . "\n"
            . "Course: " . $request->course;

        // Send Email to Admin
        try {
            // Replace with actual admin email if needed.
            $adminEmail = 'admin@mathshala.com';
            Mail::raw($messageBody, function ($message) use ($adminEmail, $request) {
                $nameForSubject = $request->filled('school_name') ? $request->school_name : $request->name;
                $message->to($adminEmail)
                        ->subject('New Enrollment: ' . $nameForSubject);
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
