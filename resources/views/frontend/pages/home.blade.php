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
                        <span class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-xs tracking-widest uppercase rounded-full shadow-lg">
                            <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                            RAILWAY Coaching Institute
                        </span>
                        <h1 class="font-heading text-5xl sm:text-7xl lg:text-8xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight drop-shadow-sm">
                            Command your <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">future.</span>
                        </h1>
                        <p class="text-lg sm:text-xl text-white/80 mb-10 max-w-xl font-light leading-relaxed border-l-2 border-brand-orange/50 pl-5">
                           At Mathshala Institute, we transform dedicated aspirants into confident achievers through expert mentorship, concept-focused learning, rigorous practice, and a result-oriented approach designed to help every student move closer to their dream career.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('free-trial.school') }}" class="group relative px-8 py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-brand-dark font-bold uppercase tracking-wider text-sm rounded-full overflow-hidden shadow-[0_8px_30px_rgb(255,255,255,0.2)] hover:shadow-[0_8px_40px_rgb(255,255,255,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                                <span class="relative z-10">Free Trial for School</span>
                                <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-gray-100 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                            <a href="{{ route('free-trial.home') }}" class="group relative px-8 py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-brand-dark font-bold uppercase tracking-wider text-sm rounded-full overflow-hidden shadow-[0_8px_30px_rgb(255,255,255,0.2)] hover:shadow-[0_8px_40px_rgb(255,255,255,0.4)] transition-all duration-300 transform hover:-translate-y-1">
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
                        <span class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-xs tracking-widest uppercase rounded-full shadow-lg">
                            Foundation & Advanced
                        </span>
                        <h1 class="font-heading text-5xl sm:text-7xl lg:text-8xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight drop-shadow-sm">
                            Master <span class="text-transparent bg-clip-text bg-gradient-to-l from-brand-cyan to-brand-orange">Math</span> <br/> Optional.
                        </h1>
                        <p class="text-lg sm:text-xl text-white/80 mb-10 max-w-xl ml-auto font-light leading-relaxed border-r-2 border-brand-cyan/50 pr-5">
                            Build a strong foundation with expert guidance, structured learning, and proven preparation strategies. At Mathshala Institute, we empower ambitious aspirants with the knowledge, confidence, and discipline they need to achieve their goals and secure top ranks.
                        </p>
                        <a href="{{ route('course') }}" class="px-8 py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-white font-bold uppercase tracking-wider text-sm rounded-full shadow-[0_8px_30px_rgb(255,94,0,0.3)] hover:shadow-[0_12px_40px_rgb(255,94,0,0.5)] transition-all duration-300 transform hover:-translate-y-1 inline-block">
                            Join Math Batch
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls (Sleek) -->
        <div class="absolute bottom-10 left-6 lg:left-auto lg:right-10 z-30 flex gap-4">
            <button onclick="prevSlide()" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white hover:text-brand-dark transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button onclick="nextSlide()" class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white hover:text-brand-dark transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </section>

    <!-- Premium Skill Development Section -->
    <section class="relative py-20 bg-white overflow-hidden border-b border-slate-100">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-gradient-to-br from-brand-orange/10 to-transparent rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-brand-cyan/5 to-transparent rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
            
            <!-- Math Instruments / Background Components -->
            <!-- Calculator -->
            <svg class="absolute top-10 left-10 w-24 h-24 text-slate-900 opacity-10 -rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
            <!-- Ruler -->
            <svg class="absolute top-1/4 right-10 w-32 h-32 text-slate-900 opacity-10 rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z M6 6v4 M10 6v4 M14 6v4 M18 6v4 M8 6v2 M12 6v2 M16 6v2"></path>
            </svg>
            <!-- Protractor / Compass -->
            <svg class="absolute bottom-10 left-1/3 w-28 h-28 text-slate-900 opacity-10 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3L4 21h16L12 3z M12 3v18 M8 13h8"></path>
                <circle cx="12" cy="18" r="1" fill="currentColor"></circle>
            </svg>
            <!-- Pi / Formula -->
            <svg class="absolute top-1/2 right-1/4 w-20 h-20 text-slate-900 opacity-10 rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h8 M9 7v10 M15 7v10 M6 7c.5-1 1-2 2-2 M17 7c-1-1-2-2-3-2"></path>
            </svg>

            <!-- Floating Math Symbols -->
            <div class="absolute top-1/3 left-1/4 text-6xl font-black text-slate-900 opacity-10 rotate-12 select-none">+</div>
            <div class="absolute bottom-1/4 right-20 text-7xl font-black text-slate-900 opacity-10 -rotate-12 select-none">÷</div>
            <div class="absolute top-20 right-1/3 text-5xl font-black text-slate-900 opacity-10 rotate-45 select-none">×</div>
            <div class="absolute bottom-1/3 left-10 text-6xl font-black text-slate-900 opacity-10 -rotate-45 select-none">=</div>

            <!-- Gaming / Playful Logic Components -->
            <!-- Gamepad -->
            <svg class="absolute top-32 left-[45%] w-24 h-24 text-slate-900 opacity-10 rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11h.01M15 15h.01M18 13h.01M12 13h.01M7 13h2M8 12v2M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <!-- Dice -->
            <svg class="absolute bottom-12 left-1/2 w-20 h-20 text-slate-900 opacity-10 -rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <rect x="4" y="4" width="16" height="16" rx="2" stroke-width="1.5"></rect>
                <circle cx="8.5" cy="8.5" r="1.5" fill="currentColor"></circle>
                <circle cx="15.5" cy="15.5" r="1.5" fill="currentColor"></circle>
                <circle cx="12" cy="12" r="1.5" fill="currentColor"></circle>
            </svg>
            <!-- Puzzle Piece -->
            <svg class="absolute top-[40%] right-[30%] w-20 h-20 text-slate-900 opacity-10 rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 5a2 2 0 114 0v1h2a2 2 0 012 2v2h1a2 2 0 110 4h-1v2a2 2 0 01-2 2h-2v1a2 2 0 11-4 0v-1H8a2 2 0 01-2-2v-2H5a2 2 0 110-4h1V8a2 2 0 012-2h2V5z"></path>
            </svg>
            <!-- Strategy / Target -->
            <svg class="absolute bottom-1/3 right-1/4 w-16 h-16 text-slate-900 opacity-10 -rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9" stroke-width="1.5"></circle>
                <circle cx="12" cy="12" r="5" stroke-width="1.5"></circle>
                <circle cx="12" cy="12" r="1" fill="currentColor"></circle>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Image Side -->
                <div class="relative course-reveal opacity-0 translate-y-8 transition-all duration-1000 ease-out">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-[0_20px_60px_rgb(0,0,0,0.1)] group">
                        <!-- Glass Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/50 via-transparent to-transparent opacity-80 z-10 mix-blend-multiply"></div>
                        
                        <img src="{{ asset('images/pic2.png') }}" alt="Children developing numerical skills" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out" />
                        
                        <!-- Floating Trust Badge -->
                        <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-20 bg-white/95 backdrop-blur-xl p-4 md:p-5 rounded-2xl shadow-2xl border border-white/60 flex items-center gap-4 animate-bounce" style="animation-duration: 3s;">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-br from-brand-cyan to-blue-500 flex items-center justify-center text-white shrink-0 shadow-lg shadow-brand-cyan/30">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] md:text-xs font-bold text-slate-500 uppercase tracking-widest mb-0.5">Trusted By</p>
                                <p class="text-sm md:text-base font-extrabold text-brand-dark">Caring Parents</p>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Dots -->
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-[radial-gradient(circle,_#cbd5e1_2px,_transparent_2px)] [background-size:16px_16px] -z-10 opacity-60"></div>
                    <div class="absolute -bottom-8 -right-8 w-40 h-40 bg-brand-orange/5 rounded-full blur-2xl -z-10"></div>
                </div>

                <!-- Content Side -->
                <div class="course-reveal opacity-0 translate-y-8 transition-all duration-1000 delay-200 ease-out lg:pl-6">
                    <div class="inline-flex items-center gap-3 mb-6 px-4 py-2 bg-gradient-to-r from-brand-cyan/10 to-transparent border border-brand-cyan/20 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse shadow-[0_0_8px_rgba(255,94,0,0.6)]"></span>
                        <span class="text-xs font-bold text-brand-dark uppercase tracking-widest">Nurturing Young Minds</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-brand-dark leading-tight tracking-tight mb-6">
                        Elevating Your Child's <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Alpha-Numerical Skills</span>
                    </h2>

                    <div class="prose prose-lg text-slate-600 font-normal leading-relaxed mb-8 border-l-4 border-brand-orange/40 pl-6 bg-gradient-to-r from-brand-orange/5 to-transparent py-2 rounded-r-2xl">
                        <p class="text-lg text-slate-700 font-medium">
                            MathShala focuses on developing alpha-numerical and mathematical skills in children. Our goal is to strengthen their foundation and make them future-ready.
                        </p>
                    </div>

                    <p class="text-base text-slate-500 mb-10 leading-relaxed">
                        As parents, your dream is to provide a better future for your child. MathShala offers an educational approach that aligns with the school curriculum, boosting their confidence and emphasizing 'understanding' mathematics rather than just 'memorizing' it.
                    </p>

                    <!-- <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-4 bg-white p-4 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-orange/10 to-transparent flex items-center justify-center text-brand-orange shrink-0 border border-brand-orange/10">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </div>
                            <span class="font-semibold text-brand-dark text-sm">Boosts Logical & Analytical Thinking</span>
                        </li>
                        <li class="flex items-center gap-4 bg-white p-4 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-cyan/10 to-transparent flex items-center justify-center text-brand-cyan shrink-0 border border-brand-cyan/10">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="font-semibold text-brand-dark text-sm">Concept-Focused Learning Framework</span>
                        </li>
                    </ul> -->

                    <!-- <a href="{{ route('course') }}" class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-brand-dark to-slate-800 text-white font-bold text-sm tracking-wider uppercase rounded-full overflow-hidden shadow-[0_10px_20px_rgb(0,0,0,0.1)] hover:shadow-[0_15px_30px_rgb(0,0,0,0.2)] transition-all duration-300">
                        <span class="relative z-10">Start Their Journey</span>
                        <svg class="w-4 h-4 relative z-10 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-brand-orange to-brand-cyan opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </a> -->
                </div>
            </div>
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
                    View All Courses
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>

        <!-- Carousel -->
        <div class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar gap-8 pb-12 pt-4 -mx-4 px-4 sm:mx-0 sm:px-0">
            @foreach($courses as $course)
            <div class="group relative flex-none w-[85vw] sm:w-[320px] lg:w-[360px] bg-white rounded-[2.5rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgb(0,0,0,0.08)] transition-all duration-500 ease-out hover:-translate-y-3 flex flex-col snap-start overflow-hidden">
                    
                <div class="relative h-56 w-full overflow-hidden bg-slate-100 rounded-t-[2.5rem]">
                    <img src="{{ asset('uploads/courses/'.$course->image) }}" alt="{{ $course->title }}" class="w-full h-full object-cover transition-transform duration-1000 ease-in-out group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                    
                    @if($course->badge)
                    <div class="absolute top-5 left-5">
                        <span class="px-4 py-1.5 bg-white/20 backdrop-blur-md border border-white/30 text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full shadow-lg">
                            {{ $course->badge }}
                        </span>
                    </div>
                    @endif
                    
                    <div class="absolute bottom-5 left-5 right-5 flex justify-between items-center text-white">
                        <span class="inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-widest bg-white/20 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20 shadow-sm">
                            {{ $course->mode }}
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs font-semibold bg-brand-dark/40 backdrop-blur-md px-3 py-1.5 rounded-full">
                            <svg class="w-3.5 h-3.5 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{ $course->duration }}
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col flex-grow relative bg-white">
                    <h3 class="text-xl font-bold text-brand-dark mb-3 leading-snug group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-brand-orange group-hover:to-red-500 transition-all duration-300 line-clamp-2">
                        {{ $course->title }}
                    </h3>
                    <p class="text-sm text-slate-500 font-normal leading-relaxed line-clamp-2 mb-8 flex-grow">
                        {{ $course->description }}
                    </p>

                    <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-[10px] text-slate-400 font-semibold uppercase tracking-[0.2em] mb-1">Program Fee</p>
                            <p class="text-2xl font-extrabold text-brand-dark">₹{{ number_format($course->price) }}</p>
                        </div>
                        
                        <a href="{{ route('course') }}" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-dark group-hover:bg-gradient-to-br group-hover:from-brand-orange group-hover:to-red-500 group-hover:text-white group-hover:border-transparent transition-all duration-500 shadow-sm group-hover:shadow-lg group-hover:shadow-brand-orange/30">
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14M12 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</section>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.course-reveal, .scroll-reveal').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

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
                        $categories = $batches->pluck('category')->unique();
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
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Venue</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Time</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Date</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 whitespace-nowrap">Fee (One Time)</th>
                                <th class="px-8 py-6 font-semibold uppercase tracking-widest text-[10px] text-slate-400 text-center whitespace-nowrap">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 bg-white" id="batch-table-body">
                            @forelse($batches as $batch)
                            <tr class="batch-row group hover:bg-slate-50/50 transition-colors duration-300 {{ $batch->category == $first_cat ? '' : 'hidden' }}" data-category="{{ $batch->category }}">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-white group-hover:text-brand-orange group-hover:shadow-sm transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        </div>
                                        <span class="font-semibold text-brand-dark">{{ $batch->venue }}</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6 text-sm text-slate-600 font-medium">{{ $batch->time }}</td>
                                <td class="px-8 py-6">
                                    <span class="inline-block px-3 py-1 bg-brand-cyan/10 text-brand-cyan text-xs font-bold rounded-full">
                                        {{ $batch->date }}
                                    </span>
                                </td>
                                <td class="px-8 py-6 font-bold text-brand-dark">₹{{ $batch->fee }}</td>
                                <td class="px-8 py-6 text-center">
                                    <a href="{{ route('enroll') }}" class="inline-flex items-center justify-center px-6 py-2.5 bg-brand-dark text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full hover:bg-gradient-to-r hover:from-brand-orange hover:to-red-500 hover:shadow-lg hover:shadow-brand-orange/30 transition-all duration-300 whitespace-nowrap transform hover:-translate-y-0.5">
                                        Enroll Now
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-8 py-24 text-center">
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

    <style>
        /* Sleek custom scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #cbd5e1;
        }
    </style>

    <script>
        function filterBatches(category) {
            // Update buttons
            const btns = document.querySelectorAll('.batch-tab-btn');
            btns.forEach(btn => {
                if(btn.getAttribute('data-category') === category) {
                    btn.classList.remove('text-slate-500', 'hover:text-brand-dark', 'hover:bg-slate-50', 'font-medium');
                    btn.classList.add('bg-white', 'text-brand-dark', 'shadow-sm', 'font-bold');
                } else {
                    btn.classList.add('text-slate-500', 'hover:text-brand-dark', 'hover:bg-slate-50', 'font-medium');
                    btn.classList.remove('bg-white', 'text-brand-dark', 'shadow-sm', 'font-bold');
                }
            });

            // Update rows with fade animation
            const rows = document.querySelectorAll('.batch-row');
            const tbody = document.getElementById('batch-table-body');
            
            tbody.style.opacity = '0';
            
            setTimeout(() => {
                rows.forEach(row => {
                    if(row.getAttribute('data-category') === category) {
                        row.classList.remove('hidden');
                    } else {
                        row.classList.add('hidden');
                    }
                });
                tbody.style.opacity = '1';
                tbody.style.transition = 'opacity 0.3s ease';
            }, 150);
            
            // Reset scroll position when tab changes
            const container = document.getElementById('table-scroll-container');
            if (container) {
                container.scrollTop = 0;
            }
        }
    </script>

    <!-- Learning Ecosystem Section -->
    @include('frontend.components.learning-ecosystem')

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



    <!-- About / Why Choose Us (Sleek Bento Grid) -->
    <section id="about" class="py-24 bg-slate-50 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="mb-16 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-6 shadow-sm border border-slate-100">
                    <span class="w-1.5 h-1.5 bg-brand-cyan rounded-full animate-pulse"></span>
                    The MathShala Advantage
                </div>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-brand-dark tracking-tight">
                    Why Choose <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">MathShala?</span>
                </h2>
            </div>

            <!-- Bento Box Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[280px]">
                
                <!-- Main Feature (2x2) -->
                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden bg-slate-900 rounded-[2.5rem] shadow-[0_20px_50px_rgb(0,0,0,0.1)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-30 group-hover:scale-110 transition-all duration-700" alt="Building Mathematical Foundations">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 sm:p-12">
                        <div class="w-14 h-14 bg-gradient-to-br from-brand-orange to-red-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-brand-orange/20">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-bold text-white mb-4 tracking-tight">Alpha-Numerical Mastery</h3>
                        <p class="text-slate-300 font-medium leading-relaxed max-w-md">Hum bacchon mein numbers aur alphabets ke prati ek gahri samajh viksit karte hain, jisse unki early logic aur problem-solving skills majboot banti hain.</p>
                    </div>
                </div>

                <!-- Small Box 1 -->
                <div class="bg-white border border-slate-100 rounded-[2.5rem] p-8 flex flex-col justify-center shadow-[0_8px_30px_rgb(0,0,0,0.03)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-100 hover:-translate-y-2 group hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)]">
                    <div class="w-14 h-14 bg-gradient-to-br from-brand-cyan/10 to-transparent text-brand-cyan flex items-center justify-center text-xl font-bold mb-6 rounded-2xl group-hover:scale-110 transition-transform border border-brand-cyan/10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h4 class="font-bold text-2xl text-brand-dark mb-3">Logical Reasoning</h4>
                    <p class="text-slate-500 font-medium text-sm leading-relaxed">Bachho ki analytical aur logical thinking ko nikharna, jo unki har field mein madad karti hai.</p>
                </div>

                <!-- Image Box 1 -->
                <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.05)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-200 group hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1596461404969-9ae70f2830c1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Interactive Learning">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-orange mb-1">Engaging</p>
                        <h4 class="font-bold text-xl">Interactive Play</h4>
                    </div>
                </div>

                <!-- Image Box 2 -->
                <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.05)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-300 group hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Mental Math">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-cyan mb-1">Speed & Accuracy</p>
                        <h4 class="font-bold text-xl">Mental Math</h4>
                    </div>
                </div>

                <!-- Small Box 2 -->
                <div class="bg-gradient-to-br from-brand-orange to-red-500 text-white p-8 rounded-[2.5rem] flex flex-col justify-center scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-400 hover:-translate-y-2 shadow-[0_20px_50px_rgb(255,94,0,0.2)] relative overflow-hidden group">
                    <div class="absolute -right-12 -top-12 w-40 h-40 bg-white/20 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xl font-bold mb-6 rounded-2xl relative z-10 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <h4 class="font-bold text-2xl mb-3 relative z-10">Future-Ready Skills</h4>
                    <p class="text-white/90 font-medium text-sm leading-relaxed relative z-10">Maths ko dar nahi, balki ek mazedar khel banakar baccho ko har challenge ke liye taiyar karna.</p>
                </div>

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
