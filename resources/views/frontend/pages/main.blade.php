@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Modern Slider) -->
    <section class="relative w-full h-[95vh] min-h-[750px] overflow-hidden bg-brand-dark">
        <div id="bannerSlider" class="w-full h-full relative">
            
            <!-- Slide 1 -->
            <div class="banner-slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-100 z-20">
                <img src="{{ asset('images/banner4.webp') }}" 
                     class="absolute inset-0 w-full h-full object-cover scale-105 animate-[kenburns_20s_ease-out_infinite]" alt="Banner 1" />
                <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/50 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-brand-orange/10 to-transparent mix-blend-multiply"></div>
                
                <div class="relative z-20 h-full max-w-7xl mx-auto px-6 flex flex-col justify-center">
                    <div class="max-w-3xl pt-20" data-aos="fade-up" data-aos-duration="1000">
                        <!-- <span class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-xs tracking-widest uppercase rounded-full shadow-lg">
                            <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                            RAILWAY Coaching Institute
                        </span> -->
                        <h1 class="font-heading text-5xl sm:text-7xl lg:text-8xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight drop-shadow-sm">
                            Command your <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">future.</span>
                        </h1>
                        <p class="text-lg sm:text-xl text-white/80 mb-10 max-w-xl font-light leading-relaxed border-l-2 border-brand-orange/50 pl-5">
                           At Mathshala Institute, we transform dedicated aspirants into confident achievers through expert mentorship, concept-focused learning, rigorous practice, and a result-oriented approach designed to help every student move closer to their dream career.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('free-trial.school') }}" class="group relative px-5 py-3 md:px-8 md:py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-brand-dark font-bold uppercase tracking-wider text-xs md:text-sm rounded-full overflow-hidden shadow-[0_8px_30px_rgb(255,255,255,0.2)] hover:shadow-[0_8px_40px_rgb(255,255,255,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                                <span class="relative z-10">Free Trial for School</span>
                                <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-gray-100 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                            <a href="{{ route('free-trial.home') }}" class="group relative px-5 py-3 md:px-8 md:py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-brand-dark font-bold uppercase tracking-wider text-xs md:text-sm rounded-full overflow-hidden shadow-[0_8px_30px_rgb(255,255,255,0.2)] hover:shadow-[0_8px_40px_rgb(255,255,255,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                                <span class="relative z-10">Free Trial for Home</span>
                                <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-gray-100 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="banner-slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0 z-10">
                <img src="{{asset('images/banner5.jpeg')}}" 
                     class="absolute inset-0 w-full h-full object-cover scale-105" alt="Banner 2" />
                <div class="absolute inset-0 bg-gradient-to-l from-brand-dark via-brand-dark/50 to-brand-dark/30"></div>
                
                <div class="relative z-20 h-full max-w-7xl mx-auto px-6 flex flex-col justify-center items-end text-right">
                    <div class="max-w-3xl pt-20">
                        <!-- <span class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-xs tracking-widest uppercase rounded-full shadow-lg">
                            Foundation & Advanced
                        </span> -->
                        <h1 class="font-heading text-5xl sm:text-7xl lg:text-8xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight drop-shadow-sm">
                            Master <span class="text-transparent bg-clip-text bg-gradient-to-l from-brand-cyan to-brand-orange">Math</span> <br/> Optional.
                        </h1>
                        <p class="text-lg sm:text-xl text-white/80 mb-10 max-w-xl ml-auto font-light leading-relaxed border-r-2 border-brand-cyan/50 pr-5">
                            Build a strong foundation with expert guidance, structured learning, and proven preparation strategies. At Mathshala Institute, we empower ambitious aspirants with the knowledge, confidence, and discipline they need to achieve their goals and secure top ranks.
                        </p>
                        <a href="{{ route('course') }}" class="px-5 py-3 md:px-8 md:py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-white font-bold uppercase tracking-wider text-sm rounded-full shadow-[0_8px_30px_rgb(255,94,0,0.3)] hover:shadow-[0_12px_40px_rgb(255,94,0,0.5)] transition-all duration-300 transform hover:-translate-y-1 inline-block">
                            Join Math Batch
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls (Sleek) -->
        <div class="absolute bottom-10 left-6 lg:left-auto lg:right-10 z-30 hidden md:flex gap-4">
            <button onclick="prevSlide()" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white hover:text-brand-dark transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button onclick="nextSlide()" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white hover:text-brand-dark transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </section>

    



    <section class="relative bg-slate-50 py-16 lg:py-24 border-t border-slate-200/50 overflow-hidden">
    <!-- Background Decor -->

    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-cyan/10 to-transparent rounded-full blur-[100px] pointer-events-none transform translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-brand-orange/10 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/3 translate-y-1/3"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-16 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
            <div class="max-w-2xl">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-8 h-[2px] bg-gradient-to-r from-brand-orange to-red-500 rounded-full"></span>
                    <h3 class="text-brand-orange font-bold text-xs tracking-[0.2em] uppercase">Explore Our Programs</h3>
                </div>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-dark leading-tight tracking-tight">
                    Prepare Better. <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">Perform Better.</span>
                </h2>

                <!-- Badges -->
                <div class="flex flex-wrap items-center gap-4 mt-8">
                    <div class="flex items-center gap-2 text-xs font-semibold text-slate-600 bg-white px-4 py-2 rounded-full shadow-sm border border-slate-100">
                        <div class="w-2 h-2 rounded-full bg-brand-orange"></div>
                        Trusted Preparation
                    </div>
                    <div class="flex items-center gap-2 text-xs font-semibold text-slate-600 bg-white px-4 py-2 rounded-full shadow-sm border border-slate-100">
                        <div class="w-2 h-2 rounded-full bg-brand-cyan"></div>
                        Expert Faculty
                    </div>
                    <div class="flex items-center gap-2 text-xs font-semibold text-slate-600 bg-white px-4 py-2 rounded-full shadow-sm border border-slate-100">
                        <div class="w-2 h-2 rounded-full bg-brand-orange"></div>
                        Structured Curriculum
                    </div>
                </div>
            </div>

            <div class="max-w-xs md:text-right flex flex-col md:items-end gap-6">
                <p class="text-sm text-slate-500 leading-relaxed font-medium">
                    Designed by experts. Featuring structured preparation, rigorous mock tests, and dedicated doubt support.
                </p>
                <a href="{{ route('course') }}" class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-brand-dark text-white text-sm font-bold rounded-full hover:bg-gradient-to-r hover:from-brand-orange hover:to-red-500 transition-all duration-300 shadow-lg hover:shadow-brand-orange/30 w-max group">
                    View All Programs
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>

        <!-- Carousel -->
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

    <!-- Premium Batches Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Abstract gradient backgrounds -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-50 via-white to-white pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <!-- Sleek Glass Ticker -->
            <div class="mb-20 max-w-5xl mx-auto rounded-full bg-white/60 backdrop-blur-xl border border-slate-200/60 p-2 flex items-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="bg-gradient-to-r from-brand-cyan to-blue-500 px-6 py-2.5 rounded-full text-white font-bold uppercase text-xs tracking-widest flex items-center gap-2 shadow-md shrink-0">
                    <span class="w-2 h-2 bg-white rounded-full animate-ping"></span> Live
                </div>
                <div class="flex-grow overflow-hidden relative ml-4">
                    <div class="flex whitespace-nowrap animate-marquee-left text-slate-600 font-semibold uppercase text-xs tracking-[0.15em] py-2">
                        @foreach($tickers as $ticker)
                        <span class="mx-8">{{ $ticker->message }} <span class="text-slate-300 mx-4">•</span></span>
                        @endforeach
                        @if($tickers->isEmpty())
                        <span class="mx-8">New Admissions Open for 2026-27 Session <span class="text-slate-300 mx-4">•</span> Scholarship Test this Sunday <span class="text-slate-300 mx-4">•</span> Limited Seats available</span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Header -->
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark tracking-tight mb-4">
                    {{ $batch_settings['batch_main_title'] ?? 'Upcoming Batches' }} 
                </h2>
                <p class="text-lg md:text-xl text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-red-500 font-bold tracking-wide mb-10">
                    {{ $batch_settings['batch_sub_title'] ?? 'FOUNDATION, TEST SERIES & CSAT' }}
                </p>
                <p class="text-slate-500 font-medium text-sm tracking-wide mb-12">{{ $batch_settings['batch_description'] ?? 'ENROLL NOW TO SECURE YOUR SEAT FOR THE UPCOMING SESSIONS' }}</p>
                
                <!-- Pill-shaped Category Tabs -->
                <div class="inline-flex flex-wrap justify-center p-1.5 bg-slate-100 rounded-full shadow-inner border border-slate-200/50" id="batch-tabs">
                    @php
                        $categories = $batches->map(function($b) { return $b->course ? $b->course->title : 'General'; })->unique();
                        $first_cat = $categories->first();
                    @endphp
                    @foreach($categories as $category)
                    <button onclick="filterBatches('{{ $category }}')" class="batch-tab-btn px-6 py-2.5 m-0.5 rounded-full {{ $loop->first ? 'bg-white text-brand-dark shadow-sm font-bold' : 'text-slate-500 hover:text-brand-dark font-medium hover:bg-slate-50' }} text-xs uppercase tracking-widest transition-all duration-300" data-category="{{ $category }}">
                        {{ $category }}
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Premium Modern Table -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_20px_50px_rgb(0,0,0,0.05)] overflow-hidden scroll-reveal opacity-0 translate-y-12 transition-all duration-700">
                <div id="table-scroll-container" class="max-h-[500px] overflow-y-auto overflow-x-auto custom-scrollbar relative">
                    <table class="w-full text-left border-collapse min-w-[900px]">
                        <thead class="sticky top-0 z-20 backdrop-blur-xl bg-white/90 border-b border-slate-100">
                            <tr>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Mode</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Time</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Date</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 text-center whitespace-nowrap">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 bg-white" id="batch-table-body">
                            @forelse($batches as $batch)
                            @php $batch_cat = $batch->course ? $batch->course->title : 'General'; @endphp
                            <tr class="batch-row group hover:bg-slate-50/50 transition-colors duration-300 {{ $batch_cat == $first_cat ? '' : 'hidden' }}" data-category="{{ $batch_cat }}">
                                <td class="px-8 py-6">
                                

                                    <div class="flex items-center gap-3">
                                           <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-white group-hover:text-brand-orange group-hover:shadow-sm transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 100 100"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        </div>
                                        <span class="font-semibold text-brand-dark">{{ $batch->course->title    ?? '' }}</span>

                                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-white group-hover:text-brand-orange group-hover:shadow-sm transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        </div>
                                        <span class="font-semibold text-brand-dark">{{ $batch->mode }}</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6 text-sm text-slate-600 font-medium">{{ $batch->time }}</td>
                                <td class="px-8 py-6">
                                    <span class="inline-block px-3 py-1 bg-brand-cyan/10 text-brand-cyan text-xs font-bold rounded-full">
                                        {{ $batch->date }}
                                    </span>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <a href="{{ route('enroll') }}" class="inline-flex items-center justify-center px-6 py-2.5 bg-brand-dark text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full hover:bg-gradient-to-r hover:from-brand-orange hover:to-red-500 hover:shadow-lg hover:shadow-brand-orange/30 transition-all duration-300 whitespace-nowrap transform hover:-translate-y-0.5">
                                        Enroll Now
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-8 py-24 text-center">
                                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-50 text-slate-300 mb-4">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <p class="uppercase tracking-widest text-xs font-bold text-slate-400">No active batches available</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Expert Faculty Section -->
    <section class="py-24 relative bg-slate-50 overflow-hidden">
        <!-- Dynamic Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-brand-cyan/10 rounded-full blur-[100px] mix-blend-multiply"></div>
            <div class="absolute bottom-[-10%] left-[-5%] w-[600px] h-[600px] bg-brand-orange/10 rounded-full blur-[120px] mix-blend-multiply"></div>
            <div class="absolute top-[40%] left-[20%] w-[300px] h-[300px] bg-blue-400/5 rounded-full blur-[80px] mix-blend-multiply animate-pulse" style="animation-duration: 4s;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20 scroll-reveal opacity-0 translate-y-8 transition-all duration-1000">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white rounded-full text-[10px] font-bold text-brand-dark uppercase tracking-[0.2em] mb-6 shadow-sm border border-slate-100">
                    <span class="w-2 h-2 bg-gradient-to-r from-brand-orange to-brand-cyan rounded-full animate-pulse"></span>
                    Our Educators
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark tracking-tight mb-6">
                    Meet Our <br class="hidden md:block" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange via-red-500 to-brand-cyan">Expert Mentors</span>
                </h2>
                <p class="text-slate-500 text-lg leading-relaxed font-medium">
                    Hamari dedicated team bacchon ki alpha-numerical skills ko mazboot banane par kaam karti hai. Hum padhai ko ek mazedar anubhav banate hain, jisse har baccha maths me excel kar sake.
                </p>
            </div>

            <!-- Faculty Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                @foreach($faculties as $index => $faculty)
                @php
                    $gradients = [
                        'from-brand-orange to-brand-cyan',
                        'from-brand-cyan to-blue-500',
                        'from-red-500 to-brand-orange'
                    ];
                    $currentGradient = $gradients[$index % count($gradients)];
                    $delay = ($index % 3 + 1) * 100;
                @endphp
                
                <!-- Mentor Card -->
                <div class="group relative scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-[{{ $delay }}ms]">
                    <div class="absolute -inset-0.5 bg-gradient-to-br {{ $currentGradient }} rounded-[2.5rem] blur opacity-0 group-hover:opacity-30 transition duration-700"></div>
                    <div class="relative bg-white rounded-[2.5rem] p-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-500 hover:-translate-y-2 border border-slate-100 h-full flex flex-col">
                        <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden mb-6">
                            <img src="{{ asset('uploads/faculty/' . $faculty->image) }}" alt="{{ $faculty->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                            
                            <!-- Floating Tag -->
                            @if($faculty->department)
                            <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20">
                                <span class="text-white text-[10px] font-bold uppercase tracking-wider">{{ $faculty->department }}</span>
                            </div>
                            @endif

                            <!-- Social Links (Hover) -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform scale-90 group-hover:scale-100">
                                <div class="flex gap-3">
                                    <a href="#" class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-brand-orange transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-brand-cyan transition-colors duration-300">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 pb-2 flex-grow flex flex-col justify-between text-center">
                            <div>
                                <h3 class="text-2xl font-extrabold text-brand-dark mb-1">{{ $faculty->name }}</h3>
                                <p class="text-brand-orange text-xs font-bold uppercase tracking-widest">{{ $faculty->designation }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>




      <!-- Elegant Testimonials Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Soft background blur elements -->
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-b from-brand-cyan/5 to-transparent rounded-full -translate-y-1/2 translate-x-1/3 blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-t from-brand-orange/5 to-transparent rounded-full translate-y-1/3 -translate-x-1/4 blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-24 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-slate-50 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-6 shadow-sm border border-slate-100">
                    <span class="w-1.5 h-1.5 bg-brand-orange rounded-full animate-pulse"></span>
                    Voices of Success
                </div>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-brand-dark tracking-tight">
                    What Parents & <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-red-500">Students Say</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-16 gap-x-8 mt-10">
                @forelse($testimonials as $testimonial)
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-{{ ($loop->index + 1) * 100 }}">
                    
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        
                        <!-- Avatar -->
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="{{ asset('uploads/testimonials/'.$testimonial->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $testimonial->name }}">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-orange to-red-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "{{ $testimonial->quote }}"
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">{{ $testimonial->name }}</h4>
                        <p class="text-brand-orange font-bold text-[10px] uppercase tracking-widest mt-1">{{ $testimonial->rank ?? 'Learner' }} {{ $testimonial->year }}</p>
                    </div>
                </div>
                @empty
                <!-- Testimonial 1 (Fallback) -->
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-100">
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Amit Sharma">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-orange to-red-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "MathShala has completely transformed how my son approaches mathematics. The Active Learning Program (ALP) helped him grasp core concepts effortlessly. We are so grateful to the mentors."
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">Amit Sharma</h4>
                        <p class="text-brand-orange font-bold text-[10px] uppercase tracking-widest mt-1">Parent, Class 5</p>
                    </div>
                </div>

                <!-- Testimonial 2 (Fallback) -->
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-200">
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Sneha Verma">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-cyan to-blue-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "The structured curriculum and step-by-step progression at MathShala are exactly what my daughter needed. Her confidence in solving complex sums has skyrocketed within months."
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">Sneha Verma</h4>
                        <p class="text-brand-cyan font-bold text-[10px] uppercase tracking-widest mt-1">Parent, Class 8</p>
                    </div>
                </div>

                <!-- Testimonial 3 (Fallback) -->
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-300">
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Rahul Gupta">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-orange to-red-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "Before joining MathShala, calculations felt like a chore. Now, with their innovative teaching methods, I actually enjoy solving problems and challenging myself every day."
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">Rahul Gupta</h4>
                        <p class="text-brand-orange font-bold text-[10px] uppercase tracking-widest mt-1">ALP Learner</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>



   

    <!-- Modern Premium FAQ Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-slate-50 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-6 shadow-sm border border-slate-100">
                    <span class="w-1.5 h-1.5 bg-brand-orange rounded-full animate-pulse"></span>
                    Have Questions?
                </div>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-brand-dark tracking-tight">
                    Everything you <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-red-500">need to know.</span>
                </h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 overflow-hidden scroll-reveal opacity-0 translate-y-8 transition-all duration-700 hover:shadow-lg hover:shadow-slate-200/50 hover:bg-white transition-colors duration-500">
                    <button class="faq-button w-full text-left p-6 sm:p-8 flex justify-between items-center focus:outline-none group">
                        <span class="text-lg sm:text-xl font-bold text-brand-dark group-hover:text-brand-orange transition-colors pr-8">
                            How do I enroll in the MathShala program?
                        </span>
                        <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center flex-shrink-0 group-hover:bg-brand-orange transition-colors duration-300 border border-slate-100 group-hover:border-transparent">
                            <span class="faq-icon transform transition-transform duration-300 text-slate-400 group-hover:text-white text-2xl font-light">
                                +
                            </span>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="p-6 sm:p-8 pt-0 text-slate-500 font-medium leading-relaxed">
                            You can enroll by filling out the online admission form available on our website. After submission, our mentors will review the application to assign an age and class appropriate learning module (ALP/BLP/CLP).
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 overflow-hidden scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-100 hover:shadow-lg hover:shadow-slate-200/50 hover:bg-white transition-colors duration-500">
                    <button class="faq-button w-full text-left p-6 sm:p-8 flex justify-between items-center focus:outline-none group">
                        <span class="text-lg sm:text-xl font-bold text-brand-dark group-hover:text-brand-cyan transition-colors pr-8">
                            What is the Active Learning Program (ALP)?
                        </span>
                        <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center flex-shrink-0 group-hover:bg-brand-cyan transition-colors duration-300 border border-slate-100 group-hover:border-transparent">
                            <span class="faq-icon transform transition-transform duration-300 text-slate-400 group-hover:text-white text-2xl font-light">
                                +
                            </span>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="p-6 sm:p-8 pt-0 text-slate-500 font-medium leading-relaxed">
                            ALP is designed for fast learners and high performers. It consists of intensive practice sessions, advanced problem-solving, and continuous monitoring to maximize their alpha-numeric skills.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 overflow-hidden scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-200 hover:shadow-lg hover:shadow-slate-200/50 hover:bg-white transition-colors duration-500">
                    <button class="faq-button w-full text-left p-6 sm:p-8 flex justify-between items-center focus:outline-none group">
                        <span class="text-lg sm:text-xl font-bold text-brand-dark group-hover:text-brand-orange transition-colors pr-8">
                            How are the classes conducted?
                        </span>
                        <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center flex-shrink-0 group-hover:bg-brand-orange transition-colors duration-300 border border-slate-100 group-hover:border-transparent">
                            <span class="faq-icon transform transition-transform duration-300 text-slate-400 group-hover:text-white text-2xl font-light">
                                +
                            </span>
                        </div>
                    </button>
                    <div class="faq-answer">
                        <div class="p-6 sm:p-8 pt-0 text-slate-500 font-medium leading-relaxed">
                            MathShala programs run in a hybrid mode, offering necessary flexibility to support, shape, and fully develop the learner's abilities. Both online and offline sessions are carefully structured.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
