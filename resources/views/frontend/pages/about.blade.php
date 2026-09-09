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

    <!-- Core Narrative Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/5 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-cyan/5 rounded-full blur-[80px] translate-y-1/3 -translate-x-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <!-- Image Side -->
                <div class="scroll-reveal opacity-0 -translate-x-12 transition-all duration-1000 relative">
                    <!-- Glowing Background -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-brand-orange/20 to-brand-cyan/20 blur-3xl transform rotate-3 rounded-full scale-90"></div>
                    
                    <div class="relative group">
                        <div class="relative z-10 rounded-[2rem] overflow-hidden shadow-[0_20px_60px_rgb(0,0,0,0.12)] border border-gray-100 transform group-hover:-translate-y-2 transition-all duration-700">
                            <img src="{{ asset('images/pic.png') }}" alt="MathShala Founder" class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        </div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -right-6 lg:-right-12 z-20 bg-white rounded-2xl p-6 shadow-[0_20px_40px_rgb(0,0,0,0.1)] border border-gray-50 flex items-center gap-4 animate-float">
                            <div class="w-12 h-12 rounded-full bg-brand-orange/10 flex items-center justify-center text-brand-orange">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-1">Our Philosophy</p>
                                <p class="text-sm font-black text-brand-dark">Fundamental Understanding</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Side -->
                <div class="scroll-reveal opacity-0 translate-x-12 transition-all duration-1000">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-bg rounded-full text-xs font-bold text-brand-cyan uppercase tracking-widest mb-6 shadow-sm">
                        <span class="w-2 h-2 bg-brand-cyan rounded-full animate-pulse"></span>
                        Who We Are
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-dark leading-tight tracking-tight mb-8">
                        The Most <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Reliable Support</span> for Alpha Numeric Development.
                    </h2>
                    
                    <div class="space-y-6 text-brand-dark/70 text-lg font-medium leading-relaxed">
                        <div class="relative bg-brand-bg/50 border border-gray-100 rounded-2xl p-8 mb-8 group overflow-hidden">
                            <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-brand-orange to-brand-cyan"></div>
                            <svg class="absolute top-4 right-4 w-12 h-12 text-brand-dark/5 transform -rotate-12 group-hover:scale-110 transition-transform duration-500" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="relative z-10 italic text-brand-dark font-medium">
                                "Our academic philosophy and teaching-learning orientation is focused towards the fundamental understanding and core concept building of mathematics."
                            </p>
                        </div>
                        
                        <p>
                            MathShala is an EduTech startup developing Alpha Numerical Skills of young age and early-stage learners. We guide learners to grasp key conceptual points and relevant theorems through practicing creatively designed sums.
                        </p>
                        <p>
                            We provide a highly structured and single-point program to meet all requirements towards building a strong foundation in primary, secondary, and advanced mathematics.
                        </p>
                    </div>
                </div>
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

    <!-- Why Us Section -->
    <section class="py-24 bg-brand-bg relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-white rounded-full text-xs font-bold text-brand-cyan uppercase tracking-widest mb-6 shadow-sm border border-gray-100">
                    <span class="w-2 h-2 bg-brand-cyan rounded-full animate-pulse"></span>
                    The Differentiator
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-brand-dark tracking-tight">
                    Why MathShala <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-[#ff4500]">Stands Ahead</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- Reason 1 -->
                <div class="bg-white rounded-3xl p-8 shadow-[0_10px_40px_rgb(0,0,0,0.05)] border border-gray-100 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgb(0,0,0,0.1)] transition-all duration-500 group scroll-reveal opacity-0 translate-y-8">
                    <div class="w-14 h-14 bg-brand-bg rounded-2xl flex items-center justify-center text-brand-dark mb-6 group-hover:scale-110 group-hover:bg-brand-dark group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="font-black text-xl mb-3 text-brand-dark">Proven Track Record</h4>
                    <p class="text-brand-dark/60 text-sm leading-relaxed font-medium">We take pride in our history of excellence, helping countless students succeed and achieve top percentiles.</p>
                </div>

                <!-- Reason 2 -->
                <div class="bg-brand-orange rounded-3xl p-8 shadow-[0_10px_40px_rgba(255,107,0,0.2)] hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(255,107,0,0.3)] transition-all duration-500 group scroll-reveal opacity-0 translate-y-8 delay-100">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h4 class="font-black text-xl mb-3 text-white">Individual Focus</h4>
                    <p class="text-white/90 text-sm leading-relaxed font-medium">Our programs focus on individual needs, providing a tailored learning curve to master potential.</p>
                </div>

                <!-- Reason 3 -->
                <div class="bg-brand-cyan rounded-3xl p-8 shadow-[0_10px_40px_rgba(0,180,216,0.2)] hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,180,216,0.3)] transition-all duration-500 group scroll-reveal opacity-0 translate-y-8 delay-200">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h4 class="font-black text-xl mb-3 text-white">Measurable Outcomes</h4>
                    <p class="text-white/90 text-sm leading-relaxed font-medium">A structured ecosystem that monitors and regulates learning speed to ensure high grade improvements.</p>
                </div>

                <!-- Reason 4 (Added) -->
                <div class="bg-white rounded-3xl p-8 shadow-[0_10px_40px_rgb(0,0,0,0.05)] border border-gray-100 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgb(0,0,0,0.1)] transition-all duration-500 group scroll-reveal opacity-0 translate-y-8 delay-300">
                    <div class="w-14 h-14 bg-brand-bg rounded-2xl flex items-center justify-center text-brand-dark mb-6 group-hover:scale-110 group-hover:bg-brand-dark group-hover:text-white transition-all duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="font-black text-xl mb-3 text-brand-dark">Advanced Pedagogy</h4>
                    <p class="text-brand-dark/60 text-sm leading-relaxed font-medium">We employ cutting-edge teaching methodologies focusing on logic building and speed calculations.</p>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Final CTA -->
    <!-- <section class="py-24 bg-brand-dark overflow-hidden relative">
        
        <div class="absolute top-1/2 left-0 w-96 h-96 bg-brand-orange/20 rounded-full filter blur-[120px] -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand-cyan/20 rounded-full filter blur-[120px] translate-y-1/4 translate-x-1/4 pointer-events-none"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 scroll-reveal opacity-0 translate-y-8 transition-all duration-1000">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-10 leading-tight tracking-tight">
                Ready to explore your <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-[#ff4500]">full potential?</span>
            </h2>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-6 mt-12">
                <a href="{{ route('enroll') }}" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-brand-orange to-[#ff4500] text-white font-bold rounded-xl shadow-[0_10px_30px_rgba(255,107,0,0.3)] hover:shadow-[0_15px_40px_rgba(255,107,0,0.4)] hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 group">
                    <span>Enroll Now</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white font-bold rounded-xl hover:bg-white hover:text-brand-dark hover:-translate-y-1 transition-all duration-300 flex items-center justify-center">
                    Contact Us
                </a>
            </div>
        </div>
    </section> -->
@endsection
