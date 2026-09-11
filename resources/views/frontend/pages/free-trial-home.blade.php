@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section -->
    <section class="relative w-full pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-brand-dark">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0 opacity-20">
            <div class="absolute top-0 left-0 w-96 h-96 bg-brand-cyan rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand-orange rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-cyan/20 text-brand-cyan font-semibold text-sm mb-6 border border-brand-cyan/30">
                Online Interactive Programs
            </span>
            <h1 class="font-heading text-4xl sm:text-6xl font-extrabold text-white mb-6 leading-tight">
                Develop <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-brand-orange">Mathematical Skills</span> From Home
            </h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto font-light leading-relaxed mb-10">
                MathShala brings home a highly interactive,innovative and creative learning programs for your child and all early stage learners. education directly to your child's screen, focusing on core alpha-numerical skills and logical thinking.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#trial-form" class="px-8 py-4 bg-gradient-to-r from-brand-cyan to-brand-orange text-brand-dark font-bold rounded-full hover:shadow-[0_0_30px_rgba(0,180,216,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                    Book Free Online Trial
                </a>
            </div>
        </div>
    </section>

    <!-- Core Philosophy Section -->
    <section class="py-20 bg-white relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center flex-col-reverse lg:flex-row-reverse">
                <div data-aos="fade-left">
                    <h2 class="font-heading text-3xl md:text-5xl font-bold text-brand-dark mb-6">Learning Without <span class="text-brand-cyan">Boundaries</span></h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        MathShala bachho me alpha numerical aur mathematical skills develop karne par kaam karta hai, chahe aap kahin bhi hon. Our online classes are not just video calls—they are interactive, fun, and highly effective.
                    </p>
                    <ul class="space-y-4 text-slate-600">
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-cyan/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span><strong>Live Interactive Whiteboards:</strong> Teachers and students solve math problems together in real-time.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-orange/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span><strong>Engaging Visuals:</strong> Complex math concepts simplified using digital manipulatives and animations.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-cyan/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span><strong>Safe & Convenient:</strong> World-class education from the safety and comfort of your home.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="relative" data-aos="fade-right">
                    <div class="absolute inset-0 bg-gradient-to-tr from-brand-cyan/20 to-brand-orange/20 rounded-3xl transform -translate-x-4 translate-y-4 -z-10"></div>
                    <img src="{{ asset('images/home.jpeg') }}" alt="Children learning online" class="rounded-3xl shadow-2xl object-cover w-full h-[500px]">
                    
                    <!-- Floating badge -->
                    <div class="absolute -top-6 -right-6 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-bounce-slow">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-brand-dark">100% Interactive</p>
                            <p class="text-sm text-slate-500">Live online sessions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Demo Section -->
    <section class="py-20 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-heading text-3xl md:text-5xl font-bold text-brand-dark mb-4">Experience a <span class="text-brand-orange">Digital Class</span></h2>
            <p class="text-slate-600 max-w-2xl mx-auto mb-12">See how our expert educators keep children engaged virtually.</p>
            
            <div class="relative max-w-4xl mx-auto rounded-3xl overflow-hidden shadow-2xl aspect-video border-8 border-white bg-slate-200" data-aos="zoom-in">
                <!-- YouTube Video Embed -->
                <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/UCVBHbox08E?si=wcVYY55ncghWTUy9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Call to Action / Trial Booking -->
    <section id="trial-form" class="py-24 bg-gradient-to-b from-brand-dark to-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-4xl bg-brand-cyan/10 blur-[100px] rounded-full pointer-events-none"></div>
        </div>
        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 class="font-heading text-3xl md:text-5xl font-bold text-white mb-6">Begin Learning From Home</h2>
            <p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">Fill the form below to schedule a free online trial session at a time convenient for you.</p>
            
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-2xl text-left max-w-2xl mx-auto">
                <form action="{{ url('/enroll') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="course" value="Home Online Trial">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Child's Name</label>
                            <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="e.g. Rahul Sharma">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Mobile Number</label>
                            <input type="tel" name="phone" required pattern="[0-9]{10}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="10-digit number">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Email Address</label>
                        <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="email@example.com">
                    </div>
                    
                    <button type="submit" class="w-full py-4 bg-brand-cyan text-white font-bold rounded-xl hover:bg-brand-cyan/90 transition-colors shadow-lg hover:shadow-brand-cyan/30">
                        Book Online Trial
                    </button>
                    <p class="text-xs text-center text-slate-400 mt-4">By booking, you agree to receive communication from our academic counselors.</p>
                </form>
            </div>
        </div>
    </section>

@endsection
