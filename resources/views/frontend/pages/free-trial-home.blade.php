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
                    <img src="{{ asset('images/pic9.jpeg') }}" alt="Children learning online" class="rounded-3xl shadow-2xl object-cover w-full h-[500px]">
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Geometry Curriculum Modules Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="inline-block py-1 px-3 rounded-full bg-brand-cyan/10 text-brand-cyan font-bold text-sm mb-4 border border-brand-cyan/20 uppercase tracking-widest">
                    MathShala Curriculum
                </span>
                <h2 class="font-heading text-3xl md:text-5xl font-extrabold text-brand-dark mb-6">Mastering <span class="text-brand-orange">Geometry & Shapes</span></h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg leading-relaxed">Explore our interactive geometry modules designed to build a strong spatial understanding from basic lines to complex polygons.</p>
            </div>

            <div class="space-y-24 md:space-y-32">
                <!-- Module 1 -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    <div class="lg:w-1/2" data-aos="fade-right">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500 to-green-400 flex items-center justify-center mb-6 shadow-lg shadow-green-500/30 text-white font-black text-2xl">
                            01
                        </div>
                        <h3 class="text-3xl md:text-4xl font-extrabold text-brand-dark mb-6 tracking-tight">Prime Factorization & <br/>Deep Mathematics</h3>
                        <p class="text-slate-600 text-lg leading-relaxed mb-8">
                            Take a deeper dive into the building blocks of mathematics. Through engaging charts and factorization trees, students learn how to logically break down any composite number into its core <strong>Prime Factors</strong>.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Advanced Prime Number Grids
                            </li>
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                The Process of Prime Factorization
                            </li>
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Factor Trees and Divisibility Rules
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full" data-aos="fade-left">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-tr from-green-500/20 to-transparent rounded-[2rem] transform translate-x-4 translate-y-4 -z-10 transition-transform duration-500 group-hover:translate-x-6 group-hover:translate-y-6"></div>
                            <img src="{{ asset('images/material3.jpg') }}" alt="Prime Factorization" class="rounded-[2rem] shadow-2xl w-full object-cover border-8 border-white">
                        </div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
                    <div class="lg:w-1/2" data-aos="fade-left">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-indigo-400 flex items-center justify-center mb-6 shadow-lg shadow-indigo-500/30 text-white font-black text-2xl">
                            02
                        </div>
                        <h3 class="text-3xl md:text-4xl font-extrabold text-brand-dark mb-6 tracking-tight">Understanding Lines & <br/>Geometric Angles</h3>
                        <p class="text-slate-600 text-lg leading-relaxed mb-8">
                            Step into the world of geometry by understanding the fundamental properties of lines. Learn how <strong>Parallel</strong>, non-parallel, and transversal lines interact, and discover how these simple concepts form complex structures like parallelograms.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Parallel vs. Intersecting Lines
                            </li>
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Properties of Transversals
                            </li>
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Drawing Parallel Lines with Precision
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full" data-aos="fade-right">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/20 to-transparent rounded-[2rem] transform -translate-x-4 translate-y-4 -z-10 transition-transform duration-500 group-hover:-translate-x-6 group-hover:translate-y-6"></div>
                            <img src="{{ asset('images/material4.jpg') }}" alt="Lines and Angles" class="rounded-[2rem] shadow-2xl w-full object-cover border-8 border-white">
                        </div>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    <div class="lg:w-1/2" data-aos="fade-right">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-rose-500 to-rose-400 flex items-center justify-center mb-6 shadow-lg shadow-rose-500/30 text-white font-black text-2xl">
                            03
                        </div>
                        <h3 class="text-3xl md:text-4xl font-extrabold text-brand-dark mb-6 tracking-tight">Exploring Complex <br/>Geometric Shapes</h3>
                        <p class="text-slate-600 text-lg leading-relaxed mb-8">
                            From simple lines to complete shapes, students explore the fascinating world of polygons and circles. We break down the defining characteristics of quadrilaterals, triangles, squares, rectangles, and pentagons to build a strong spatial understanding.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Circles and Curved Lines
                            </li>
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Polygons and Interior Angles
                            </li>
                            <li class="flex items-center gap-4 text-slate-700 font-bold bg-white p-4 rounded-2xl shadow-sm border border-slate-100">
                                <div class="w-8 h-8 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                Classification by Number of Sides
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full" data-aos="fade-left">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-tr from-rose-500/20 to-transparent rounded-[2rem] transform translate-x-4 translate-y-4 -z-10 transition-transform duration-500 group-hover:translate-x-6 group-hover:translate-y-6"></div>
                            <img src="{{ asset('images/material5.jpg') }}" alt="Geometric Shapes" class="rounded-[2rem] shadow-2xl w-full object-cover border-8 border-white">
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
                <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/0h6TvKrZ_1g?si=MAOvCAUYL6c7Cvc3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Class</label>
                            <input type="text" name="student_class" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="e.g. 5th Standard">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Age</label>
                            <input type="number" name="age" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="e.g. 10">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">School Name</label>
                            <input type="text" name="school_name" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="e.g. Delhi Public School">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Mobile Number</label>
                            <input type="tel" name="phone" required pattern="[0-9]{10}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="10-digit number">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Email Address</label>
                            <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-cyan/50 focus:border-brand-cyan transition-shadow" placeholder="email@example.com">
                        </div>
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
