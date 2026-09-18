@extends('frontend.layouts.base')

@section('page-content')
@php
    $courses = \App\Models\Course::where('status', 'active')->get();
@endphp
    <!-- Enroll Page Hero & Form -->
    <section class="relative py-24 lg:py-32 bg-slate-50 overflow-hidden min-h-screen flex items-center">
        <!-- Premium Background Accents -->
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-brand-cyan/10 to-transparent rounded-full blur-[120px] pointer-events-none transform translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-brand-orange/10 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px]"></div>

        <div class="relative z-10 max-w-[1400px] mx-auto px-6 sm:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-5 scroll-reveal opacity-0 -translate-x-12 transition-all duration-1000">
                    <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-white shadow-sm border border-slate-100 text-slate-600 font-bold text-[10px] tracking-[0.3em] uppercase rounded-full mb-8">
                        <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                        Admissions Open 2026
                    </span>
                    
                    <h1 class="font-heading text-5xl md:text-7xl lg:text-7xl font-extrabold text-brand-dark leading-[1.05] mb-8 tracking-tight drop-shadow-sm">
                        Forge Your <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Success Path.</span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-slate-500 font-medium mb-12 leading-relaxed border-l-4 border-brand-orange/50 pl-6">
                        Join MathShala. We don't just provide lessons; we build the analytical minds of tomorrow.
                    </p>

                    <div class="space-y-6 mb-12">
                        <div class="flex items-center gap-5 group">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-100 group-hover:scale-110 group-hover:shadow-md transition-all duration-300">
                                <span class="text-2xl drop-shadow-sm">🎖️</span>
                            </div>
                            <span class="font-bold text-brand-dark tracking-tight text-lg group-hover:text-brand-orange transition-colors">Expert Faculty Mentorship</span>
                        </div>
                        <div class="flex items-center gap-5 group">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-100 group-hover:scale-110 group-hover:shadow-md transition-all duration-300">
                                <span class="text-2xl drop-shadow-sm">📝</span>
                            </div>
                            <span class="font-bold text-brand-dark tracking-tight text-lg group-hover:text-brand-cyan transition-colors">Rigorous Conceptual Training</span>
                        </div>
                        <div class="flex items-center gap-5 group">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-100 group-hover:scale-110 group-hover:shadow-md transition-all duration-300">
                                <span class="text-2xl drop-shadow-sm">📈</span>
                            </div>
                            <span class="font-bold text-brand-dark tracking-tight text-lg group-hover:text-blue-500 transition-colors">Personalized Growth Tracking</span>
                        </div>
                    </div>
                </div>

                <!-- Right Form (Premium Glass Card) -->
                <div class="lg:col-span-7 scroll-reveal opacity-0 translate-x-12 transition-all duration-1000 delay-100">
                    <div class="relative bg-white/90 backdrop-blur-2xl rounded-[3rem] p-8 md:p-14 shadow-[0_20px_60px_rgb(0,0,0,0.08)] border border-white">
                        
                        <!-- Floating Accent -->
                        <div class="absolute -top-8 -right-8 w-32 h-32 bg-gradient-to-br from-brand-orange to-brand-cyan rounded-full blur-[50px] opacity-40 z-0"></div>

                        <div class="relative z-10">
                            <h3 class="text-4xl font-extrabold text-brand-dark mb-2 tracking-tight">Admission <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">Form</span></h3>
                            <p class="text-slate-400 text-xs font-bold mb-10 uppercase tracking-widest">Start your transformation today</p>

                            @if(session('success'))
                            <div class="mb-8 bg-green-50 border-l-4 border-green-500 text-green-700 px-6 py-4 rounded-xl text-sm font-semibold flex items-center gap-3">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session('success') }}
                            </div>
                            @endif
                            @if ($errors->any())
                                <div class="mb-8 bg-red-50 border-l-4 border-red-500 text-red-700 px-6 py-4 rounded-xl text-sm font-semibold flex flex-col gap-2">
                                    @foreach ($errors->all() as $error)
                                        <p class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> {{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Step Indicators -->
                            <div class="flex items-center justify-between mb-12 relative px-4">
                                <div class="absolute left-8 right-8 top-1/2 -translate-y-1/2 h-1.5 bg-slate-100 rounded-full z-0"></div>
                                <div id="progress-bar" class="absolute left-8 top-1/2 -translate-y-1/2 h-1.5 bg-gradient-to-r from-brand-orange to-brand-cyan rounded-full z-0 transition-all duration-500" style="width: 0%;"></div>
                                
                                <div class="relative z-10 flex flex-col items-center gap-3">
                                    <div id="step-1-indicator" class="w-12 h-12 rounded-full bg-brand-orange text-white flex items-center justify-center font-bold text-lg shadow-lg shadow-brand-orange/30 transition-all duration-500 scale-110">1</div>
                                    <span class="text-[10px] font-bold text-brand-orange uppercase tracking-widest transition-colors duration-500" id="step-1-text">Learner Info</span>
                                </div>
                                <div class="relative z-10 flex flex-col items-center gap-3">
                                    <div id="step-2-indicator" class="w-12 h-12 rounded-full bg-white border-4 border-slate-100 text-slate-400 flex items-center justify-center font-bold text-lg transition-all duration-500">2</div>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest transition-colors duration-500" id="step-2-text">Parent Details</span>
                                </div>
                                <div class="relative z-10 flex flex-col items-center gap-3">
                                    <div id="step-3-indicator" class="w-12 h-12 rounded-full bg-white border-4 border-slate-100 text-slate-400 flex items-center justify-center font-bold text-lg transition-all duration-500">3</div>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest transition-colors duration-500" id="step-3-text">Plan & Payment</span>
                                </div>
                            </div>

                            <form action="{{ route('enroll.store') }}" method="POST" enctype="multipart/form-data" id="enrollForm">
                                @csrf
                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                                <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                
                                <!-- STEP 1: Learner Details -->
                                <div id="step-1" class="space-y-6 animate-fade-in">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">Learner's Name *</label>
                                            <input type="text" name="name" required value="{{ old('name') }}" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all">
                                        </div>
                                        <div class="grid grid-cols-2 gap-5">
                                            <div>
                                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">Age *</label>
                                                <input type="number" name="age" required value="{{ old('age') }}" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all">
                                            </div>
                                            <div>
                                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">Gender *</label>
                                                <select name="gender" required class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all appearance-none cursor-pointer">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">Class *</label>
                                            <input type="text" name="student_class" required value="{{ old('student_class') }}" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">School *</label>
                                            <input type="text" name="school_name" required value="{{ old('school_name') }}" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all">
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                        <div>
                                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">Primary Phone *</label>
                                            <input type="tel" name="phone" required class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-1.5 ml-1">Email Address *</label>
                                            <input type="email" id="user_email" name="email" required class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:border-brand-cyan focus:ring-2 focus:ring-brand-cyan/20 outline-none text-sm font-medium text-slate-700 transition-all">
                                        </div>
                                    </div>

                                    <div class="flex justify-end mt-10">
                                        <button type="button" onclick="goToStep(2)" class="px-10 py-4 bg-brand-dark text-white font-bold rounded-full hover:bg-slate-800 transition-all hover:scale-105 flex items-center gap-3 shadow-xl">
                                            Next Step
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- STEP 2: Parent Details -->
                                <div id="step-2" class="space-y-6 hidden animate-fade-in">
                                    <div class="max-h-[50vh] overflow-y-auto pr-4 custom-scrollbar space-y-8">
                                        
                                        <!-- Father -->
                                        <div>
                                            <h4 class="text-sm font-bold text-brand-dark mb-3 flex items-center gap-2"><span class="w-8 h-px bg-slate-200"></span> Father's Details</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <input type="text" name="father_name" placeholder="Name" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 outline-none transition-all">
                                                <input type="text" name="father_occupation" placeholder="Occupation" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 outline-none transition-all">
                                            </div>
                                        </div>

                                        <!-- Mother -->
                                        <div>
                                            <h4 class="text-sm font-bold text-brand-dark mb-3 flex items-center gap-2"><span class="w-8 h-px bg-slate-200"></span> Mother's Details</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <input type="text" name="mother_name" placeholder="Name" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 outline-none transition-all">
                                                <input type="text" name="mother_occupation" placeholder="Occupation" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 outline-none transition-all">
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="text-sm font-bold text-brand-dark mb-3 flex items-center gap-2"><span class="w-8 h-px bg-slate-200"></span> Observations (Optional)</h4>
                                            <div class="space-y-4">
                                                <input type="text" name="obs_math" placeholder="Observations on Mathematics" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 outline-none transition-all">
                                                <input type="text" name="key_expectations" placeholder="Key expectations from MathShala" class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 outline-none transition-all">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-between mt-10 pt-6 border-t border-slate-100">
                                        <button type="button" onclick="goToStep(1)" class="px-8 py-4 bg-white border-2 border-slate-200 text-slate-600 font-bold rounded-full hover:bg-slate-50 transition-colors flex items-center gap-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                                            Back
                                        </button>
                                        <button type="button" onclick="goToStep(3)" class="px-10 py-4 bg-brand-dark text-white font-bold rounded-full hover:bg-slate-800 transition-all hover:scale-105 flex items-center gap-3 shadow-xl">
                                            Next Step
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- STEP 3: Plan & Payment -->
                                <div id="step-3" class="space-y-8 hidden animate-fade-in">
                                    
                                    <div>
                                        <label class="block text-sm font-bold text-brand-dark mb-4">Select Program *</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            @foreach($courses as $course)
                                                <label class="cursor-pointer">
                                                    <input type="radio" name="course" value="{{ $course->title }}" class="peer sr-only" required onchange="updatePrice('{{ $course->price }}')">
                                                    <div class="p-5 border-2 border-slate-200 rounded-2xl peer-checked:border-brand-cyan peer-checked:bg-brand-cyan/5 hover:border-brand-cyan/50 transition-all">
                                                        <p class="font-bold text-slate-800">{{ $course->title }}</p>
                                                        <p class="text-sm font-semibold text-brand-orange mt-1">₹{{ $course->price }}</p>
                                                    </div>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-bold text-brand-dark mb-4">Select Enrollment Type *</label>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            <label class="cursor-pointer relative">
                                                <input type="radio" name="enrollment_type" value="demo" class="peer sr-only" required onchange="calculateFinalAmount()">
                                                <div class="p-6 border-2 border-slate-200 rounded-2xl peer-checked:border-brand-orange peer-checked:bg-brand-orange/5 hover:border-brand-orange/50 transition-all h-full">
                                                    <div class="flex justify-between items-start mb-2">
                                                        <h5 class="font-bold text-lg text-slate-800">Demo Class</h5>
                                                        <span class="px-3 py-1 bg-brand-orange text-white text-xs font-bold rounded-full">₹ 1</span>
                                                    </div>
                                                    <p class="text-sm text-slate-500">Experience our teaching methodology before committing.</p>
                                                </div>
                                            </label>

                                            <label class="cursor-pointer relative">
                                                <input type="radio" name="enrollment_type" value="class" class="peer sr-only" required onchange="calculateFinalAmount()">
                                                <div class="p-6 border-2 border-slate-200 rounded-2xl peer-checked:border-brand-cyan peer-checked:bg-brand-cyan/5 hover:border-brand-cyan/50 transition-all h-full">
                                                    <div class="flex justify-between items-start mb-2">
                                                        <h5 class="font-bold text-lg text-slate-800">Full Class</h5>
                                                        <span class="px-3 py-1 bg-brand-cyan text-white text-xs font-bold rounded-full">Full Price</span>
                                                    </div>
                                                    <p class="text-sm text-slate-500">Enroll for the complete program and start learning immediately.</p>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="amount" id="final_amount" value="">
                                    
                                    <div class="bg-slate-900 rounded-3xl p-8 text-white shadow-xl relative overflow-hidden">
                                        <div class="absolute top-0 right-0 w-32 h-32 bg-brand-orange/20 blur-[30px] rounded-full"></div>
                                        <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-6">
                                            <div>
                                                <p class="text-slate-400 font-bold text-xs uppercase tracking-widest mb-1">Total Payable Amount</p>
                                                <p class="text-4xl font-extrabold flex items-baseline gap-1">
                                                    <span>₹</span>
                                                    <span id="display_amount">0</span>
                                                </p>
                                            </div>
                                            
                                            <button type="button" id="payBtn" onclick="initiatePayment()" class="w-full md:w-auto px-10 py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-white font-bold text-lg rounded-full shadow-lg hover:shadow-brand-orange/30 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3">
                                                Pay Securely
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex justify-start mt-6">
                                        <button type="button" onclick="goToStep(2)" class="px-8 py-4 bg-white border-2 border-slate-200 text-slate-600 font-bold rounded-full hover:bg-slate-50 transition-colors flex items-center gap-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                                            Back
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-8 flex items-center justify-center gap-2">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                                    Secured by Razorpay • 256-bit Encryption
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f8fafc; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <!-- Razorpay SDK -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        let currentCoursePrice = 0;

        function goToStep(step) {
            // Validation before leaving step 1
            if(step === 2) {
                const name = document.querySelector('input[name="name"]').value;
                const age = document.querySelector('input[name="age"]').value;
                const phone = document.querySelector('input[name="phone"]').value;
                const email = document.querySelector('input[name="email"]').value;

                if(!name || !age || !phone || !email) {
                    alert('Please fill all required fields in Step 1 (*)');
                    return;
                }
            }

            // Hide all steps
            document.getElementById('step-1').classList.add('hidden');
            document.getElementById('step-2').classList.add('hidden');
            document.getElementById('step-3').classList.add('hidden');
            
            // Show target step
            document.getElementById(`step-${step}`).classList.remove('hidden');

            // Update Progress Bar
            const progress = step === 1 ? '0%' : step === 2 ? '50%' : '100%';
            document.getElementById('progress-bar').style.width = progress;

            // Update Indicators
            for(let i=1; i<=3; i++) {
                const indicator = document.getElementById(`step-${i}-indicator`);
                const text = document.getElementById(`step-${i}-text`);
                
                if(i < step) {
                    // Completed steps
                    indicator.className = 'w-12 h-12 rounded-full bg-brand-cyan text-white flex items-center justify-center font-bold text-lg transition-all duration-500';
                    text.className = 'text-[10px] font-bold text-brand-cyan uppercase tracking-widest transition-colors duration-500';
                    indicator.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>';
                } else if(i === step) {
                    // Current step
                    indicator.className = 'w-12 h-12 rounded-full bg-brand-orange text-white flex items-center justify-center font-bold text-lg shadow-lg shadow-brand-orange/30 transition-all duration-500 scale-110';
                    text.className = 'text-[10px] font-bold text-brand-orange uppercase tracking-widest transition-colors duration-500';
                    indicator.innerHTML = i;
                } else {
                    // Future steps
                    indicator.className = 'w-12 h-12 rounded-full bg-white border-4 border-slate-100 text-slate-400 flex items-center justify-center font-bold text-lg transition-all duration-500';
                    text.className = 'text-[10px] font-bold text-slate-400 uppercase tracking-widest transition-colors duration-500';
                    indicator.innerHTML = i;
                }
            }
        }

        function updatePrice(price) {
            currentCoursePrice = parseFloat(price);
            calculateFinalAmount();
        }

        function calculateFinalAmount() {
            const type = document.querySelector('input[name="enrollment_type"]:checked')?.value;
            let amount = 0;
            
            if(type === 'demo') {
                amount = 1; // 1 Rupee for demo
            } else if (type === 'class') {
                amount = currentCoursePrice;
            }

            document.getElementById('final_amount').value = amount;
            document.getElementById('display_amount').innerText = amount;
        }

        function initiatePayment() {
            // Validate Step 3
            const course = document.querySelector('input[name="course"]:checked');
            const type = document.querySelector('input[name="enrollment_type"]:checked');
            
            if(!course || !type) {
                alert('Please select a program and enrollment type.');
                return;
            }

            const amount = document.getElementById('final_amount').value;
            const name = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const phone = document.querySelector('input[name="phone"]').value;

            // Change button state
            const btn = document.getElementById('payBtn');
            btn.innerHTML = 'Processing...';
            btn.disabled = true;

            // Fetch order ID from backend
            fetch('{{ route("enroll.createOrder") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ amount: amount })
            })
            .then(response => response.json())
            .then(data => {
                if(data.order_id) {
                    var options = {
                        "key": "{{ env('RAZORPAY_KEY') }}", 
                        "amount": amount * 100, // Amount in paise
                        "currency": "INR",
                        "name": "MathShala",
                        "description": "Enrollment Payment",
                        "image": "{{ asset('images/logo.png') }}",
                        "order_id": data.order_id,
                        "handler": function (response){
                            // Payment success
                            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                            document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                            document.getElementById('razorpay_signature').value = response.razorpay_signature;
                            
                            // Submit the main form
                            document.getElementById('enrollForm').submit();
                        },
                        "prefill": {
                            "name": name,
                            "email": email,
                            "contact": phone
                        },
                        "theme": {
                            "color": "#f97316" // brand-orange
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.on('payment.failed', function (response){
                        alert('Payment Failed! Reason: ' + response.error.description);
                        btn.innerHTML = 'Pay Securely';
                        btn.disabled = false;
                    });
                    rzp1.open();
                } else {
                    alert('Could not initiate payment. Please try again.');
                    btn.innerHTML = 'Pay Securely';
                    btn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                btn.innerHTML = 'Pay Securely';
                btn.disabled = false;
            });
        }
    </script>
@endsection
