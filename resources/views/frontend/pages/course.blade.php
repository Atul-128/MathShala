@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Aesthetic) -->
    <section class="relative w-full min-h-[60vh] flex items-center justify-center overflow-hidden bg-slate-50 pt-24 pb-20">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full z-0">
            <img src="{{ asset('images/pic5.png') }}" alt="Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-white/5 via-slate-20/10 to-slate-10"></div>
        </div>

        <!-- Glowing Accents -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gradient-to-bl from-brand-cyan/20 to-transparent rounded-full blur-[100px] pointer-events-none transform translate-x-1/4 -translate-y-1/4 z-0"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-brand-orange/20 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/4 translate-y-1/4 z-0"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px] z-0"></div>

        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 text-center">
            <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-white shadow-sm border border-slate-100 text-slate-600 font-bold text-[10px] tracking-[0.3em] uppercase rounded-full mb-8 scroll-reveal opacity-0 translate-y-4">
                <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                Academic Programs
            </span>
            <h1 class="font-heading text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold text-brand-dark leading-[1.05] tracking-tight scroll-reveal opacity-0 translate-y-8 delay-100 drop-shadow-sm max-w-4xl mx-auto">
                Explore Our <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Curriculum.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-500 font-medium mt-8 max-w-2xl mx-auto scroll-reveal opacity-0 translate-y-8 delay-200">
                Premium coaching modules designed for ultimate success. Select your preferred path below.
            </p>
        </div>
    </section>

    <!-- Category Selection Section -->
    <!-- <section class="py-24 bg-white border-b border-slate-100 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8">
                <p class="text-brand-cyan font-bold uppercase tracking-widest text-xs mb-3">Select Your Path</p>
                <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark tracking-tight">Academic Tracks</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
                
                <a href="#course-grid" class="group relative bg-white rounded-[2.5rem] p-10 text-center border border-slate-100 shadow-[0_10px_40px_rgb(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-brand-orange/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute -top-4 right-8 bg-brand-orange text-white text-[10px] font-black px-4 py-1.5 rounded-b-xl uppercase tracking-widest shadow-md">
                        Flagship
                    </div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-slate-50 border border-slate-100 text-brand-dark flex items-center justify-center text-4xl mb-6 mx-auto rounded-2xl group-hover:bg-brand-orange group-hover:text-white group-hover:border-transparent transition-all shadow-sm">
                            🏛️
                        </div>
                        <h3 class="font-heading text-3xl font-extrabold text-brand-dark mb-4 group-hover:text-brand-orange transition-colors">RAILWAY</h3>
                        <p class="text-slate-500 text-sm mb-8 leading-relaxed font-medium">Complete railway preparation with foundation and advanced modules.</p>
                        <span class="inline-flex items-center gap-2 font-bold text-brand-dark uppercase tracking-wider text-xs group-hover:text-brand-orange transition-colors">
                            View Courses 
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </span>
                    </div>
                </a>
                
               
                <a href="{{ route('free-trial.home') }}" class="group relative bg-white rounded-[2.5rem] p-10 text-center border border-slate-100 shadow-[0_10px_40px_rgb(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 delay-100 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-brand-cyan/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-slate-50 border border-slate-100 text-brand-dark flex items-center justify-center text-4xl mb-6 mx-auto rounded-2xl group-hover:bg-brand-cyan group-hover:text-white group-hover:border-transparent transition-all shadow-sm">
                            🎯
                        </div>
                        <h3 class="font-heading text-3xl font-extrabold text-brand-dark mb-4 group-hover:text-brand-cyan transition-colors">SSC CGL</h3>
                        <p class="text-slate-500 text-sm mb-8 leading-relaxed font-medium">Targeted curriculum to crack the Staff Selection Commission exams.</p>
                        <span class="inline-flex items-center gap-2 font-bold text-brand-dark uppercase tracking-wider text-xs group-hover:text-brand-cyan transition-colors">
                            View Course
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </span>
                    </div>
                </a>

              
                <a href="{{ route('free-trial.school') }}" class="group relative bg-white rounded-[2.5rem] p-10 text-center border border-slate-100 shadow-[0_10px_40px_rgb(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 delay-200 overflow-hidden lg:col-span-1 md:col-span-2 max-w-sm mx-auto w-full lg:max-w-none">
                    <div class="absolute inset-0 bg-gradient-to-b from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-slate-50 border border-slate-100 text-brand-dark flex items-center justify-center text-4xl mb-6 mx-auto rounded-2xl group-hover:bg-blue-500 group-hover:text-white group-hover:border-transparent transition-all shadow-sm">
                            📚
                        </div>
                        <h3 class="font-heading text-3xl font-extrabold text-brand-dark mb-4 group-hover:text-blue-500 transition-colors">GD Optional</h3>
                        <p class="text-slate-500 text-sm mb-8 leading-relaxed font-medium">Specialized coaching for Group Discussion and optional subjects.</p>
                        <span class="inline-flex items-center gap-2 font-bold text-brand-dark uppercase tracking-wider text-xs group-hover:text-blue-500 transition-colors">
                            View Course
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section> -->

    <!-- Premium Experience Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-cyan/5 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-orange/5 rounded-full blur-[80px] translate-y-1/3 -translate-x-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Content Side -->
                <div class="scroll-reveal opacity-0 translate-y-8">
                    <span class="inline-flex items-center gap-2 text-brand-orange font-bold tracking-widest uppercase text-xs mb-6 bg-brand-orange/10 px-4 py-2 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                        Premium Experience
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark leading-[1.1] mb-6 tracking-tight">
                        Transform Your <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Learning Journey</span>
                    </h2>
                    <p class="text-lg text-slate-500 mb-8 leading-relaxed font-medium">
                        At MathShala, we provide an unparalleled educational environment. Our expert-crafted modules and interactive sessions are designed to nurture alpha-numerical excellence and build lifelong confidence.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#course-grid" class="inline-flex justify-center items-center px-8 py-4 bg-brand-dark text-white rounded-full font-bold uppercase tracking-widest text-xs hover:bg-gradient-to-r hover:from-brand-orange hover:to-brand-cyan hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            Explore Courses
                        </a>
                    </div>
                </div>

                <!-- Image Collage Side -->
                <div class="relative h-[500px] w-full hidden lg:block scroll-reveal opacity-0 translate-y-8 delay-200">
                    <!-- Image 1 -->
                    <div class="absolute top-0 right-0 w-3/4 h-[70%] rounded-3xl overflow-hidden shadow-[0_20px_50px_rgb(0,0,0,0.15)] border-4 border-white z-10 transform hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-brand-cyan/10 mix-blend-overlay z-10"></div>
                        <img src="{{ asset('images/img1.jpeg') }}" class="w-full h-full object-cover" alt="Premium Learning">
                    </div>
                    
                    <!-- Image 2 -->
                    <div class="absolute bottom-0 left-0 w-2/3 h-[60%] rounded-3xl overflow-hidden shadow-[0_20px_50px_rgb(0,0,0,0.15)] border-4 border-white z-20 transform hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-brand-orange/10 mix-blend-overlay z-10"></div>
                        <img src="{{ asset('images/img2.jpeg') }}" class="w-full h-full object-cover" alt="Interactive Sessions">
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute top-1/2 left-[15%] -translate-x-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-xl p-6 rounded-3xl shadow-2xl border border-white z-30 animate-bounce-slow">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-brand-orange to-brand-cyan rounded-2xl flex items-center justify-center text-white font-bold text-xl shadow-inner transform rotate-3">
                                🌟
                            </div>
                            <div>
                                <p class="text-brand-dark font-black tracking-tight text-lg leading-none mb-1">Excellence</p>
                                <p class="text-slate-500 text-[10px] font-bold uppercase tracking-widest">Guaranteed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile & Tablet Image Fallback -->
                <div class="lg:hidden flex flex-col sm:flex-row gap-6 scroll-reveal opacity-0 translate-y-8 delay-200">
                    <div class="relative w-full rounded-3xl overflow-hidden shadow-xl border-4 border-white">
                        <img src="{{ asset('images/img1.jpeg') }}" class="w-full h-64 object-cover" alt="Premium Learning">
                    </div>
                    <div class="relative w-full rounded-3xl overflow-hidden shadow-xl border-4 border-white sm:mt-12">
                        <img src="{{ asset('images/img2.jpeg') }}" class="w-full h-64 object-cover" alt="Interactive Sessions">
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Course Grid Section -->
    <section id="course-grid" class="py-24 bg-white scroll-mt-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8 scroll-reveal opacity-0 translate-y-8">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 text-brand-cyan font-bold tracking-widest uppercase text-sm mb-4">
                        <span class="w-8 h-0.5 bg-brand-cyan rounded-full"></span> Available Batches
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-brand-dark tracking-tight">
                        Alpha Numerical aur <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Mathematical skills Development </span>
                    </h2>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase tracking-widest bg-white px-4 py-2 rounded-full shadow-sm border border-slate-100">
                    Showing {{ $courses->count() }} Results
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($courses as $course)
                <div class="bg-white rounded-3xl border border-slate-100 group cursor-pointer scroll-reveal opacity-0 translate-y-12 transition-all duration-500 flex flex-col h-full shadow-[0_10px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 overflow-hidden">
                    <div class="relative h-56 w-full overflow-hidden rounded-t-3xl">
                        <img src="{{ Str::startsWith($course->image, ['http://', 'https://']) ? $course->image : asset('uploads/courses/'.$course->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $course->title }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-transparent to-transparent opacity-60"></div>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md text-brand-dark text-[9px] font-black px-3 py-1.5 rounded-full uppercase tracking-widest shadow-sm">
                            {{ $course->status ?? 'Active' }}
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow relative">
                        <h3 class="font-heading text-2xl font-extrabold text-brand-dark mb-3 leading-tight group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-brand-orange group-hover:to-brand-cyan transition-colors tracking-tight">
                            {{ $course->title }}
                        </h3>
                        <p class="text-slate-500 text-sm mb-6 flex-grow leading-relaxed font-medium line-clamp-3">
                            {{ $course->description }}
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-8">
                            <div class="bg-slate-50 px-4 py-2 rounded-xl text-[10px] font-bold text-slate-600 border border-slate-100 uppercase tracking-wider flex items-center justify-center">
                                ⏱️ {{ $course->duration }}
                            </div>
                            <div class="bg-slate-50 px-4 py-2 rounded-xl text-[10px] font-bold text-slate-600 border border-slate-100 uppercase tracking-wider flex items-center justify-center">
                                📈 {{ $course->level ?? 'Foundation' }}
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center pt-6 border-t border-slate-100 mt-auto">
                            <div class="flex flex-col">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Course Fee</span>
                                <span class="font-heading font-black text-2xl text-brand-dark">₹{{ number_format($course->price) }}</span>
                            </div>
                            <a href="{{ route('enroll', $course->id) }}" class="px-6 py-3 bg-brand-dark text-white font-bold uppercase tracking-widest text-[10px] rounded-full hover:bg-gradient-to-r hover:from-brand-orange hover:to-brand-cyan hover:shadow-[0_8px_20px_rgb(255,107,0,0.3)] transition-all duration-300 transform group-hover:scale-105">
                                Enroll Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

        <!-- Guarantee & Mission Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <div class="text-center mb-20 scroll-reveal opacity-0 translate-y-8">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-cyan/10 text-brand-cyan font-bold tracking-widest uppercase text-xs mb-4">
                    <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                    Our Promise
                </span>
                <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark tracking-tight">
                    Shaping <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Future Leaders</span>
                </h2>
            </div>

            <!-- Feature 1: The Guarantee (Img3) -->
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20 mb-24 scroll-reveal opacity-0 translate-y-8">
                <div class="w-full lg:w-1/2 relative group">
                    <div class="absolute inset-0 bg-brand-orange/20 rounded-[3rem] transform -rotate-3 scale-105 -z-10 transition-transform duration-500 group-hover:rotate-0"></div>
                    <img src="{{ asset('images/img3.jpeg') }}" class="w-full h-auto object-cover rounded-[3rem] shadow-[0_20px_50px_rgb(0,0,0,0.1)] border-4 border-white transition-transform duration-500 group-hover:-translate-y-2" alt="100% Guaranteed Result">
                    <!-- Floating Element -->
                    <div class="absolute -bottom-6 -right-6 bg-white p-5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-bounce-slow">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                            <span class="text-2xl">💯</span>
                        </div>
                        <div>
                            <p class="font-bold text-brand-dark text-sm">Money Back</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest mt-0.5">Guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="font-heading text-3xl md:text-4xl font-extrabold text-brand-dark mb-6 leading-tight">
                        100% Guaranteed Results in <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Skill Development</span>
                    </h3>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed font-medium">
                        We are absolutely confident in our curriculum. We promise 100% guaranteed results in your child's Alpha-Numerical and Mathematical skills development, or you get your entire money back!
                    </p>
                    <div class="flex flex-col gap-4 mb-10">
                        <div class="flex items-center gap-4 bg-white p-4 rounded-2xl border border-slate-100 shadow-sm">
                            <div class="w-12 h-12 rounded-xl bg-brand-cyan/10 flex items-center justify-center text-brand-cyan shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-brand-dark font-bold">Registrations are OPEN</p>
                                <p class="text-sm text-slate-500">Secure your child's future today.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('free-trial.school') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-brand-dark text-white rounded-full font-bold uppercase tracking-widest text-sm hover:bg-brand-orange transition-colors shadow-[0_10px_20px_rgba(0,0,0,0.1)] hover:shadow-brand-orange/30 hover:-translate-y-1 transform duration-300">
                        Book Free Demo Class
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Feature 2: The Mission (Img4) -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20 scroll-reveal opacity-0 translate-y-8 delay-100">
                <div class="w-full lg:w-1/2 relative group">
                    <div class="absolute inset-0 bg-brand-cyan/20 rounded-[3rem] transform rotate-3 scale-105 -z-10 transition-transform duration-500 group-hover:rotate-0"></div>
                    <img src="{{ asset('images/img4.jpeg') }}" class="w-full h-auto object-cover rounded-[3rem] shadow-[0_20px_50px_rgb(0,0,0,0.1)] border-4 border-white transition-transform duration-500 group-hover:-translate-y-2" alt="Alpha-Numerical Skills Development">
                    <!-- Floating Element -->
                    <div class="absolute -top-6 -left-6 bg-white p-5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-bounce-slow" style="animation-delay: 1s;">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="text-2xl">🚀</span>
                        </div>
                        <div>
                            <p class="font-bold text-brand-dark text-sm">Future Ready</p>
                            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest mt-0.5">Strong Foundation</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="font-heading text-3xl md:text-4xl font-extrabold text-brand-dark mb-6 leading-tight">
                        Elevating Your Child's <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Alpha-Numerical Skills</span>
                    </h3>
                    <div class="border-l-4 border-brand-cyan/40 pl-6 bg-gradient-to-r from-brand-cyan/5 to-transparent py-4 rounded-r-2xl mb-8">
                        <p class="text-lg text-slate-700 font-medium leading-relaxed">
                            MathShala is dedicated to developing crucial alpha-numerical and mathematical skills in children. Our core mission is to strengthen their foundation.
                        </p>
                    </div>
                    <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                        By focusing on comprehensive understanding and practical application, we ensure that every student is equipped and entirely ready for the challenges of the future.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('free-trial.home') }}" class="inline-flex items-center justify-center px-8 py-4 bg-brand-cyan text-white rounded-full font-bold uppercase tracking-widest text-sm hover:bg-brand-dark transition-colors shadow-lg hover:-translate-y-1 transform duration-300">
                            Book Free Demo
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
   
@endsection
