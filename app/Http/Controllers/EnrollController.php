<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentSuccessMail;
use Razorpay\Api\Api;

class EnrollController extends Controller
{
    public function createOrder(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric'
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
        $order = $api->order->create([
            'receipt'         => 'order_rcptid_' . time(),
            'amount'          => $request->amount * 100, // amount in the smallest currency unit (paise)
            'currency'        => 'INR',
        ]);

        return response()->json(['order_id' => $order['id']]);
    }

    // Save data
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|numeric',
            'gender' => 'required|string',
            'student_class' => 'required|string',
            'school_name' => 'required|string|max:255',
            'math_marks' => 'nullable|string',
            'overall_marks' => 'nullable|string',
            'school_id_card' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'report_card' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'father_name' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'course' => 'required|string',
            'enrollment_type' => 'required|in:demo,class',
            'amount' => 'required|numeric',
            'razorpay_payment_id' => 'required|string',
            'razorpay_order_id' => 'required|string',
            'razorpay_signature' => 'required|string',
        ]);

        // Verify Razorpay Signature
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];
            $api->utility->verifyPaymentSignature($attributes);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Payment verification failed. Please try again or contact support.']);
        }

        $data = $request->except(['school_id_card', 'report_card', 'razorpay_payment_id', 'razorpay_order_id', 'razorpay_signature']);
        $data['payment_id'] = $request->razorpay_payment_id;
        $data['payment_status'] = 'completed';

        // Handle File Uploads
        if ($request->hasFile('school_id_card')) {
            $data['school_id_card'] = $request->file('school_id_card')->store('enrollments', 'public');
        }
        if ($request->hasFile('report_card')) {
            $data['report_card'] = $request->file('report_card')->store('enrollments', 'public');
        }

        // save data
        $enrollment = Enrollment::create($data);

        // Prepare message
        $messageBody = "New Enrollment Received:\n\n";
        $messageBody .= "Name: " . $request->name . "\n";
        $messageBody .= "Class: " . $request->student_class . "\n";
        $messageBody .= "Phone: " . $request->phone . "\n";
        $messageBody .= "Email: " . $request->email . "\n";
        $messageBody .= "Course: " . $request->course . "\n";
        $messageBody .= "\nPlease check the admin dashboard for full details including parent information, marks, and uploaded documents.";

        // Send Email to Admin
        try {
            $adminEmail = 'admin@mathshala.com';
            Mail::raw($messageBody, function ($message) use ($adminEmail, $request) {
                $message->to($adminEmail)
                        ->subject('New Enrollment (Paid): ' . $request->name);
            });

            // Send Confirmation Email to User
            Mail::to($request->email)->send(new EnrollmentSuccessMail($enrollment));

        } catch (\Exception $e) {
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
