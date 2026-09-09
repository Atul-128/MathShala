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
                
               
                <a href="{{ route('cgl') }}" class="group relative bg-white rounded-[2.5rem] p-10 text-center border border-slate-100 shadow-[0_10px_40px_rgb(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 delay-100 overflow-hidden">
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

              
                <a href="{{ route('gd') }}" class="group relative bg-white rounded-[2.5rem] p-10 text-center border border-slate-100 shadow-[0_10px_40px_rgb(0,0,0,0.03)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 delay-200 overflow-hidden lg:col-span-1 md:col-span-2 max-w-sm mx-auto w-full lg:max-w-none">
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

    <!-- Course Grid Section -->
    <section id="course-grid" class="py-24 bg-slate-50 scroll-mt-24 relative overflow-hidden">
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

   
@endsection
