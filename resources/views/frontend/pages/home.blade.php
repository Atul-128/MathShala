@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Modern Slider) -->
    <section class="relative w-full h-[95vh] min-h-[750px] overflow-hidden bg-brand-dark">
        <div id="bannerSlider" class="w-full h-full relative">
            
            <!-- Slide 1 -->
            <div class="banner-slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-100 z-20">
                <img src="{{ asset('images/banner4.jpg') }}" 
                     class="absolute inset-0 w-full h-full object-cover scale-105 animate-[kenburns_20s_ease-out_infinite]" alt="Banner 1" />
                <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/80 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-brand-orange/20 to-transparent mix-blend-multiply"></div>
                
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
                            <a href="{{ route('course') }}" class="group relative px-8 py-4 bg-white text-brand-dark font-bold uppercase tracking-wider text-sm rounded-full overflow-hidden shadow-[0_8px_30px_rgb(255,255,255,0.2)] hover:shadow-[0_8px_40px_rgb(255,255,255,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                                <span class="relative z-10">Explore Programs</span>
                                <div class="absolute inset-0 h-full w-full bg-gradient-to-r from-gray-100 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="banner-slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0 z-10">
                <img src="{{asset('images/banner7.jpg')}}" 
                     class="absolute inset-0 w-full h-full object-cover scale-105" alt="Banner 2" />
                <div class="absolute inset-0 bg-gradient-to-l from-brand-dark via-brand-dark/90 to-brand-dark/40"></div>
                
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

            <!-- Program Highlights Cards -->
            <div class="mb-24">
                <div class="text-center max-w-3xl mx-auto mb-16 course-reveal opacity-0 translate-y-8 transition-all duration-700 ease-out">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-dark mb-4 tracking-tight">Learning Programs</h3>
                    <p class="text-slate-500 font-medium">Parents can select age and class appropriate learning modules based on the course design and intensity of learning outcomes.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- ALP -->
                    <div class="bg-white/80 backdrop-blur-xl rounded-[2rem] p-8 border border-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.1)] transition-all duration-500 group course-reveal opacity-0 translate-y-8 flex flex-col hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-orange/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-16 h-16 bg-gradient-to-br from-brand-orange/20 to-brand-orange/5 text-brand-orange rounded-2xl flex items-center justify-center font-bold text-xl mb-6 shadow-sm group-hover:scale-110 transition-transform relative z-10">ALP</div>
                        <h4 class="text-xl lg:text-2xl font-bold text-brand-dark mb-4 relative z-10">Active Learning Program</h4>
                        <p class="text-sm text-slate-500 leading-relaxed flex-grow relative z-10">
                            For fast learners and high performers consistently securing A and A+ grades (~above 80%). Active-paced program recommended for strong numerical abilities needing guided syllabus coverage.
                        </p>
                    </div>
                    
                    <!-- BLP -->
                    <div class="bg-gradient-to-br from-brand-dark to-slate-900 rounded-[2rem] p-8 shadow-[0_20px_50px_rgb(0,0,0,0.15)] transform md:-translate-y-6 course-reveal opacity-0 translate-y-8 delay-100 flex flex-col border border-slate-700/50 hover:-translate-y-8 transition-all duration-500 group relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-brand-cyan/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-16 h-16 bg-white/10 text-brand-cyan rounded-2xl flex items-center justify-center font-bold text-xl mb-6 backdrop-blur-md shadow-inner group-hover:scale-110 transition-transform relative z-10">BLP</div>
                        <h4 class="text-xl lg:text-2xl font-bold text-white mb-4 relative z-10">Bright Learning Program</h4>
                        <p class="text-sm text-slate-400 leading-relaxed flex-grow relative z-10">
                            For good learners but inconsistent performers securing B and B+ grades (~above 55%). Gradual-paced program for adequate numerical abilities needing detailed coverage.
                        </p>
                    </div>

                    <!-- CLP -->
                    <div class="bg-white/80 backdrop-blur-xl rounded-[2rem] p-8 border border-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.1)] transition-all duration-500 group course-reveal opacity-0 translate-y-8 delay-200 flex flex-col hover:-translate-y-2 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-cyan/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-16 h-16 bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/5 text-brand-cyan rounded-2xl flex items-center justify-center font-bold text-xl mb-6 shadow-sm group-hover:scale-110 transition-transform relative z-10">CLP</div>
                        <h4 class="text-xl lg:text-2xl font-bold text-brand-dark mb-4 relative z-10">Careful Learning Program</h4>
                        <p class="text-sm text-slate-500 leading-relaxed flex-grow relative z-10">
                            For laid back learners and below average performers securing C and D grades (~above 35%). Low-paced program needing very detailed coverage to solve exam level sums.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pedagogy & Improvements -->
            <div class="bg-white rounded-[3rem] p-8 md:p-12 lg:p-16 border border-slate-100/60 shadow-[0_20px_60px_rgb(0,0,0,0.03)] relative overflow-hidden course-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-cyan/10 to-transparent rounded-full blur-[80px] pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-brand-orange/10 to-transparent rounded-full blur-[80px] pointer-events-none"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 relative z-10">
                    <!-- Left: Pedagogy -->
                    <div>
                        <h4 class="text-2xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-brand-orange to-red-500 text-white flex items-center justify-center shrink-0 shadow-lg shadow-brand-orange/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253"></path></svg>
                            </div>
                            Learning Pedagogy
                        </h4>
                        <p class="text-slate-600 text-sm leading-relaxed mb-8">
                            Only a few and very selective learners are enrolled in the MathShala Programs. Priority is assigned to induct low performing students who are willing to focus more on their studies and practice solving sums. The role of their parents is to encourage and support the child while cooperating in effective delivery of the program.
                        </p>
                        
                        <h5 class="font-semibold text-brand-dark mb-4 text-sm uppercase tracking-wider text-brand-dark/70">Hybrid classes covering three stages:</h5>
                        <div class="flex flex-wrap gap-3 mb-12">
                            <span class="px-4 py-2 bg-slate-50 rounded-full text-xs font-semibold text-slate-600 border border-slate-200/60 shadow-sm">Primary Mathematics</span>
                            <span class="px-4 py-2 bg-slate-50 rounded-full text-xs font-semibold text-slate-600 border border-slate-200/60 shadow-sm">Secondary Mathematics</span>
                            <span class="px-4 py-2 bg-slate-50 rounded-full text-xs font-semibold text-slate-600 border border-slate-200/60 shadow-sm">Advanced Mathematics</span>
                        </div>

                        <h4 class="text-2xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-brand-cyan to-blue-500 text-white flex items-center justify-center shrink-0 shadow-lg shadow-brand-cyan/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                            </div>
                            Teaching Methodology
                        </h4>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Enrolled learners are oriented towards basics of alpha numeric skills and assigned a customised structure of advancements. They are put to a progress pathway with a step to step progression chart. Monitoring, evaluation and programmatic impact assessments are carried at regular intervals.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-brand-orange/10 p-1 rounded-full"><svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                <span class="text-sm font-medium text-slate-600">Curated mentorship under CBSE/ICSE board curriculums.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-brand-orange/10 p-1 rounded-full"><svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                <span class="text-sm font-medium text-slate-600">Alignment with the school's lesson plans and coverage of the syllabus.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-brand-orange/10 p-1 rounded-full"><svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                <span class="text-sm font-medium text-slate-600">Core concepts, key points and critical steps to solve easy, moderate and difficult sums.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-brand-orange/10 p-1 rounded-full"><svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                <span class="text-sm font-medium text-slate-600">Revision of the previous lessons learnt and important sums solved before moving ahead.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-brand-orange/10 p-1 rounded-full"><svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                <span class="text-sm font-medium text-slate-600">Proper understanding of theorems and application of formulas aligning complexity of sums.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-1 bg-brand-orange/10 p-1 rounded-full"><svg class="w-3 h-3 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div>
                                <span class="text-sm font-medium text-slate-600">Advance preparation of the mid/end term examination with revised lesson plans.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Right: Assured Improvements & Location -->
                    <div class="flex flex-col gap-8">
                        <div class="bg-slate-50/50 backdrop-blur-lg rounded-[2rem] p-8 border border-white shadow-[0_8px_30px_rgb(0,0,0,0.03)]">
                            <h4 class="text-xl font-bold text-brand-dark mb-6">Assured Improvements In:</h4>
                            <ul class="space-y-4">
                                <li class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-slate-100/50 transition-all hover:shadow-md hover:-translate-y-1">
                                    <div class="w-12 h-12 bg-gradient-to-br from-brand-cyan/10 to-transparent text-brand-cyan rounded-xl flex items-center justify-center shrink-0 border border-brand-cyan/10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    </div>
                                    <span class="font-semibold text-slate-700 text-sm">Subject Knowledge & Understanding</span>
                                </li>
                                <li class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-slate-100/50 transition-all hover:shadow-md hover:-translate-y-1">
                                    <div class="w-12 h-12 bg-gradient-to-br from-brand-orange/10 to-transparent text-brand-orange rounded-xl flex items-center justify-center shrink-0 border border-brand-orange/10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                    </div>
                                    <span class="font-semibold text-slate-700 text-sm">Theorem & Formula Applications</span>
                                </li>
                                <li class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-slate-100/50 transition-all hover:shadow-md hover:-translate-y-1">
                                    <div class="w-12 h-12 bg-gradient-to-br from-brand-cyan/10 to-transparent text-brand-cyan rounded-xl flex items-center justify-center shrink-0 border border-brand-cyan/10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                                    </div>
                                    <span class="font-semibold text-slate-700 text-sm">Analytical & Logical Thinking</span>
                                </li>
                                <li class="flex items-center gap-4 bg-white p-4 rounded-2xl shadow-sm border border-slate-100/50 transition-all hover:shadow-md hover:-translate-y-1">
                                    <div class="w-12 h-12 bg-gradient-to-br from-brand-orange/10 to-transparent text-brand-orange rounded-xl flex items-center justify-center shrink-0 border border-brand-orange/10">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                                    </div>
                                    <span class="font-semibold text-slate-700 text-sm">Problem & Sums Solving Ability</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Location Card (Glassmorphic Dark) -->
                        <div class="bg-gradient-to-br from-slate-800 to-brand-dark text-white rounded-[2rem] p-8 shadow-xl mt-auto relative overflow-hidden group">
                            <div class="absolute inset-0 bg-brand-cyan/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                            <div class="flex items-start gap-5 relative z-10">
                                <div class="bg-white/10 p-3 rounded-xl backdrop-blur-sm border border-white/10 shrink-0">
                                    <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h5 class="font-bold text-lg mb-2">Campus Location</h5>
                                    <p class="text-sm text-slate-300 leading-relaxed font-light">
                                        602, Signature Tower, Maurya Path, <br>
                                        Khagaul Danapur Road, Patna - 801501
                                    </p>
                                </div>
                            </div>
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

    <!-- Script for Reveal Animation -->
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
                <a href="#" class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-brand-dark text-white text-sm font-bold rounded-full hover:bg-gradient-to-r hover:from-brand-orange hover:to-red-500 transition-all duration-300 shadow-lg hover:shadow-brand-orange/30 w-max group">
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
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-30 group-hover:scale-110 transition-all duration-700" alt="Fundamental Understanding">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 sm:p-12">
                        <div class="w-14 h-14 bg-gradient-to-br from-brand-orange to-red-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-brand-orange/20">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-bold text-white mb-4 tracking-tight">Fundamental Understanding</h3>
                        <p class="text-slate-300 font-medium leading-relaxed max-w-md">We persuade learners to grasp key conceptual points and theorems through creatively designed sums arranged in an innovative order of complexity.</p>
                    </div>
                </div>

                <!-- Small Box 1 -->
                <div class="bg-white border border-slate-100 rounded-[2.5rem] p-8 flex flex-col justify-center shadow-[0_8px_30px_rgb(0,0,0,0.03)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-100 hover:-translate-y-2 group hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)]">
                    <div class="w-14 h-14 bg-gradient-to-br from-brand-cyan/10 to-transparent text-brand-cyan flex items-center justify-center text-xl font-bold mb-6 rounded-2xl group-hover:scale-110 transition-transform border border-brand-cyan/10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253"></path></svg>
                    </div>
                    <h4 class="font-bold text-2xl text-brand-dark mb-3">Hybrid Mode</h4>
                    <p class="text-slate-500 font-medium text-sm leading-relaxed">Flexible learning modules designed to shape and develop your child's abilities.</p>
                </div>

                <!-- Image Box 1 -->
                <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.05)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-200 group hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Doubt Clearing">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-orange mb-1">Support</p>
                        <h4 class="font-bold text-xl">Doubt Clearing</h4>
                    </div>
                </div>

                <!-- Image Box 2 -->
                <div class="relative overflow-hidden rounded-[2.5rem] shadow-[0_8px_30px_rgb(0,0,0,0.05)] scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-300 group hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Active Learning">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-cyan mb-1">Pedagogy</p>
                        <h4 class="font-bold text-xl">Active Practice</h4>
                    </div>
                </div>

                <!-- Small Box 2 -->
                <div class="bg-gradient-to-br from-brand-orange to-red-500 text-white p-8 rounded-[2.5rem] flex flex-col justify-center scroll-reveal opacity-0 translate-y-8 transition-all duration-700 delay-400 hover:-translate-y-2 shadow-[0_20px_50px_rgb(255,94,0,0.2)] relative overflow-hidden group">
                    <div class="absolute -right-12 -top-12 w-40 h-40 bg-white/20 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xl font-bold mb-6 rounded-2xl relative z-10 shadow-inner">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h4 class="font-bold text-2xl mb-3 relative z-10">Measurable Outcomes</h4>
                    <p class="text-white/90 font-medium text-sm leading-relaxed relative z-10">Recording the learning process in methodical, measurable, and monitorable settings.</p>
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
