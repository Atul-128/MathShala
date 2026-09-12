@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Aesthetic) -->
    <section class="relative w-full h-[60vh] min-h-[400px] overflow-hidden bg-brand-dark">
        <img src="{{ asset('images/ban (1).jpg') }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-40 filter grayscale" alt="About Us Banner" />
        <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/10 via-brand-dark/25 to-brand-dark/50"></div>
            
        <div class="relative z-10 h-full max-w-7xl mx-auto px-6 flex flex-col justify-center items-center text-center">
            <span class="inline-block mb-6 px-4 py-1.5 bg-brand-orange text-white font-bold text-xs tracking-widest uppercase rounded-sm scroll-reveal opacity-0 translate-y-4">
                Our Legacy & Mission
            </span>
            <h1 class="font-heading text-5xl sm:text-7xl lg:text-8xl font-black text-white leading-tight mb-6 tracking-tight scroll-reveal opacity-0 translate-y-8 delay-100">
                The <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">MathShala</span> Way.
            </h1>
            <p class="text-lg sm:text-xl text-white/60 max-w-2xl font-light leading-relaxed scroll-reveal opacity-0 translate-y-8 delay-200">
                Developing Alpha Numerical Skills of young and early-stage learners, where discipline meets strategic excellence.
            </p>
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

        <!-- MathShala Intro Section (Glassmorphic) -->
    <section class="py-24 bg-slate-50 relative overflow-hidden" id="mathshala-section">
        <!-- Abstract Glows -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white rounded-l-[100px] pointer-events-none shadow-[0_0_100px_rgba(0,0,0,0.02)]"></div>
        <div class="absolute top-20 right-20 w-[400px] h-[400px] bg-brand-orange/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-20 left-20 w-[500px] h-[500px] bg-brand-cyan/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
                <!-- Content -->
                <div class="course-reveal opacity-0 translate-y-8 transition-all duration-1000 ease-out">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-10 h-[2px] bg-gradient-to-r from-brand-orange to-brand-cyan rounded-full"></span>
                        <h3 class="text-brand-dark font-bold text-xs tracking-[0.2em] uppercase">Introducing</h3>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-brand-dark leading-tight tracking-tight mb-8">
                        Math<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-[#ff4500]">Shala</span>
                    </h2>
                    
                    <div class="prose prose-lg text-slate-600 font-normal leading-relaxed max-w-none mb-8">
                        <p class="mb-6 text-lg">
                            <strong class="text-brand-dark font-semibold">MathShala</strong> is an EduTech startup developing Alpha Numerical Skills of the young age and early stage learners. Our academic philosophy and teaching-learning orientation is focused towards the fundamental understanding and core concept building of mathematics.
                        </p>
                        <p class="mb-6">
                            The learners are persuaded to grasp the key conceptual points and relevant theorems/formula through practicing creatively designed sums arranged in an interesting and innovative orders of complexity.
                        </p>
                        <p>
                            We work on revising their learnings, removing doubts, and recording the learning process outcomes in a methodical, measurable and monitorable settings. MathShala programs run in hybrid mode with necessary flexibility to support, shape and fully develop the learner's alphanumeric abilities.
                        </p>
                    </div>
                </div>

                <!-- Image/Poster -->
                <div class="relative course-reveal opacity-0 translate-y-8 transition-all duration-1000 delay-200 ease-out lg:pl-10">
                    <div class="max-w-sm mx-auto relative group">
                        <div class="absolute inset-0 bg-gradient-to-tr from-brand-orange to-brand-cyan rounded-3xl transform translate-x-6 translate-y-6 opacity-30 group-hover:translate-x-8 group-hover:translate-y-8 transition-all duration-500 blur-sm"></div>
                        <div class="relative bg-white/60 backdrop-blur-xl p-3 rounded-3xl shadow-[0_20px_60px_rgb(0,0,0,0.08)] border border-white/80 transition-transform duration-500 hover:-translate-y-2">
                            <img src="{{ asset('images/banner.jpeg') }}" alt="MathShala Admission Open" class="w-full h-auto max-h-[500px] rounded-2xl object-cover object-top">
                        </div>
                    </div>
                </div>
            </div>


            <!-- Outcome Alignments & FAQ -->
            <div class="mt-24 pb-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                    
                    <!-- Left: Outcomes & FAQs -->
                    <div class="lg:col-span-7 space-y-12">
                        
                        <div class="course-reveal opacity-0 translate-y-8 transition-all duration-700">
                            <h4 class="text-3xl font-extrabold text-brand-dark mb-6 tracking-tight">
                                MathShala <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-red-500">Outcome Alignments</span>
                            </h4>
                            <div class="prose prose-lg text-slate-600 font-normal leading-relaxed max-w-none">
                                <p>
                                    Each learner is mapped to a course correction path with measurable inputs, outputs and outcomes at every stage. They are supported and encouraged to gain interest and gather momentum in solving easy to moderate sums based on their academic syllabus. Outcomes of the classroom performance are mirrored against the unit tests, periodical tests and mid/end term examinations at their respective schools.
                                </p>
                            </div>
                        </div>

                        <div class="course-reveal opacity-0 translate-y-8 transition-all duration-700 delay-100 space-y-8">
                            <div class="bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100/50">
                                <h5 class="text-lg font-bold text-brand-dark mb-3">What if skills do not improve?</h5>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    Such curiosity and concerns often bother parents during pre-enrollment interactions, however, MathShala welcomes and appreciates them asking such progressive and futuristic queries. Though there is no clear and definite answer to such hypothetical questions, we help them realise the limitations of cognitive sciences, individuals' learning abilities, and scope of curated academic interventions. MathShala considers these limitations as real barriers and humbly accepts that despite making best effort, at times the outcomes do not match the expectations. Without losing hearts, the learning process must continue with more care, rigour and intensity.
                                </p>
                            </div>

                            <div class="bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100/50">
                                <h5 class="text-lg font-bold text-brand-dark mb-3">Is there any guarantee of success?</h5>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    Sorry, we do not have any magical pills of success to prescribe. Learning is a life long journey and alpha numeric skills are developed with practice over a period of time. Continued efforts, consistent practice and coordinated actions will help your wards to be successful. If not today, but surely TOMORROW.
                                </p>
                            </div>

                            <div class="bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-slate-100/50">
                                <h5 class="text-lg font-bold text-brand-dark mb-3">What should a concerned parents do?</h5>
                                <p class="text-slate-500 text-sm leading-relaxed">
                                    MathShala suggests keeping faith and being positive towards your ward's future. MathShala firmly believes that 'Nothing is impossible'. Many learners are late bloomers. Allow them a little more time, pay more attention and continue supporting them with the best of your abilities. They will eventually EXCEL.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image with floating effects -->
                    <div class="lg:col-span-5 relative course-reveal opacity-0 translate-y-8 transition-all duration-700 delay-200 lg:pl-6">
                        <div class="absolute inset-0 bg-gradient-to-tr from-brand-cyan to-blue-500 rounded-[2.5rem] transform translate-x-6 translate-y-6 opacity-20 blur-xl"></div>
                        <div class="relative bg-white/80 backdrop-blur-xl p-3 rounded-[2.5rem] shadow-[0_20px_50px_rgb(0,0,0,0.1)] border border-white transition-transform duration-700 hover:-translate-y-2">
                            <img src="{{ asset('images/img.jpeg') }}" alt="MathShala Activities" class="w-full h-auto rounded-3xl object-cover">
                            
                            <!-- Floating Badge -->
                            <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-bounce" style="animation-duration: 3s;">
                                <div class="bg-brand-orange/10 p-3 rounded-full text-brand-orange">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Expert</p>
                                    <p class="font-extrabold text-brand-dark">Mentorship</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>

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

    <!-- Deep Dive / Potential Section -->
    <section class="py-24 bg-brand-dark text-white relative overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-orange/10 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-brand-cyan/10 rounded-full blur-[150px] translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <div class="scroll-reveal opacity-0 -translate-x-12 transition-all duration-1000">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-tight mb-8">
                        Catering to <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Young Minds.</span>
                    </h2>
                    <p class="text-white/70 text-lg leading-relaxed mb-8 font-medium">
                        MathShala has been instrumental in catering to the needs of young minds through its premier education support system. We offer an integrated curriculum that focuses on individual needs, helping every learner explore their true potential.
                    </p>
                    <p class="text-white/70 text-lg leading-relaxed mb-12 font-medium">
                        We bridge the gap between aspirants and their academic goals with meticulously structured study material and guidance from expert faculty. Our programs provide live classes, text-based learning modules, practice tests, and quizzes.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-lg hover:-translate-y-2 hover:bg-white/10 transition-all duration-500 group">
                            <div class="w-12 h-12 rounded-xl bg-brand-orange/20 text-brand-orange flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h4 class="font-black text-xl mb-3 text-white">Hybrid Learning</h4>
                            <p class="text-white/60 text-sm leading-relaxed">Online & offline modes for maximum flexibility and effective learning.</p>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl shadow-lg hover:-translate-y-2 hover:bg-white/10 transition-all duration-500 group">
                            <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 text-brand-cyan flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <h4 class="font-black text-xl mb-3 text-white">Expert Faculty</h4>
                            <p class="text-white/60 text-sm leading-relaxed">Curated mentorship from experts in mathematics and rigorous curriculums.</p>
                        </div>
                    </div>
                </div>

                <div class="relative scroll-reveal opacity-0 translate-x-12 transition-all duration-1000">
                    <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-[0_30px_60px_rgb(0,0,0,0.4)] group">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-transparent to-transparent z-10 opacity-60"></div>
                        <img src="{{ $site_assets['about_learning_feature_image'] ?? 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}" alt="Learning Environment" class="w-full h-[600px] object-cover transition-transform duration-1000 group-hover:scale-110" />
                        
                        <!-- Floating Glass Card -->
                        <div class="absolute bottom-8 left-8 right-8 z-20 bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-100">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-cyan rounded-full flex items-center justify-center text-white font-black text-lg shadow-lg">
                                    100%
                                </div>
                                <div>
                                    <h5 class="text-white font-black text-lg">Focus on Fundamentals</h5>
                                    <p class="text-white/70 text-sm">Building strong alpha-numeric foundations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Dots -->
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-[radial-gradient(circle,rgba(255,255,255,0.2)_2px,transparent_2px)] bg-[length:16px_16px]"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section (Premium Style) -->
    <section class="py-24 bg-brand-bg relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-white to-gray-50 border border-gray-100 p-10 lg:p-20 rounded-[3rem] shadow-[0_20px_60px_rgb(0,0,0,0.05)] relative overflow-hidden scroll-reveal opacity-0 translate-y-12 transition-all duration-1000">
                
                <!-- Decorative background text -->
                <div class="absolute -top-10 -right-10 text-[10rem] lg:text-[15rem] font-black text-brand-dark/[0.03] pointer-events-none select-none uppercase tracking-tighter">Vision</div>
                
                <div class="relative z-10">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-dark rounded-full text-xs font-bold text-white uppercase tracking-widest mb-8 shadow-sm">
                        <span class="w-2 h-2 bg-brand-orange rounded-full animate-pulse"></span>
                        Our Vision & Purpose
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-dark mb-12 leading-tight tracking-tight max-w-4xl">
                        To build a <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-[#ff4500]">Great EduTech platform</span> that stands ahead.
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-brand-dark/70 text-lg lg:text-xl font-medium leading-relaxed">
                        <div class="relative">
                            <div class="absolute -left-6 top-0 w-1 h-full bg-gradient-to-b from-brand-cyan to-transparent hidden md:block rounded-full"></div>
                            <p>
                                At MathShala, our vision is to build an outstanding learning platform that stands ahead of other available coaching centers in the nation. Our experts believe that given the right exposure and opportunity, every young learner has it within them to master alphanumeric skills.
                            </p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-6 top-0 w-1 h-full bg-gradient-to-b from-brand-orange to-transparent hidden md:block rounded-full"></div>
                            <p>
                                We understand that students need customized guidance to achieve success, and therefore, we have created specific programs like ALP, BLP, and CLP. Every student has potential; we just provide the right spark, environment, and structured curriculum to ignite it.
                            </p>
                        </div>
                    </div>
                </div>
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


@endsection
