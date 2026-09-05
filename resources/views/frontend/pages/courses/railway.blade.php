@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Glassmorphic) -->
    <section class="relative min-h-[90vh] flex items-center bg-slate-50 overflow-hidden pt-24 pb-32">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-brand-orange/20 to-brand-cyan/20 rounded-full blur-[120px] pointer-events-none transform translate-x-1/3 -translate-y-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-brand-cyan/10 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px]"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="scroll-reveal opacity-0 -translate-x-12 transition-all duration-1000">
                <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-100 shadow-sm rounded-full mb-8">
                    <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-slate-500">Admissions Open 2026</span>
                </div>
                
                <h1 class="font-heading text-5xl md:text-6xl lg:text-7xl font-extrabold text-brand-dark leading-[1.05] mb-6 tracking-tight drop-shadow-sm">
                    Master the <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Railway</span><br />
                    With the Best.
                </h1>
                
                <p class="text-lg md:text-xl text-slate-500 font-medium mb-10 max-w-xl leading-relaxed border-l-4 border-brand-orange/50 pl-6">
                    India's premier coaching institute for Railway Exams. Comprehensive coverage, elite faculty, and a proven track record of producing top rankers.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="#enroll" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-white bg-gradient-to-r from-brand-orange to-brand-cyan rounded-full shadow-[0_8px_30px_rgb(255,107,0,0.3)] hover:shadow-[0_12px_40px_rgb(255,107,0,0.4)] hover:-translate-y-1 transition-all uppercase tracking-widest group">
                        Enroll Now
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#syllabus" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-full hover:bg-slate-50 hover:text-brand-dark hover:-translate-y-1 transition-all shadow-sm uppercase tracking-widest">
                        View Syllabus
                    </a>
                </div>
            </div>
            
            <div class="hidden lg:block scroll-reveal opacity-0 translate-x-12 transition-all duration-1000 relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-brand-orange to-brand-cyan rounded-[3rem] blur-xl opacity-30 animate-pulse"></div>
                <div class="relative z-10 bg-white p-3 rounded-[3rem] shadow-[0_20px_50px_rgb(0,0,0,0.1)] border border-slate-100 overflow-hidden">
                    <img src="{{ $site_assets['course_upsc_success_image'] ?? 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}" alt="Success" class="w-full h-[550px] object-cover rounded-[2.5rem] group-hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Info Bar (Premium Glass Card) -->
    <div class="relative z-20 -mt-16 max-w-6xl mx-auto px-6">
        <div class="bg-white/90 backdrop-blur-xl border border-white rounded-[2.5rem] p-8 lg:p-10 grid grid-cols-2 md:grid-cols-4 gap-8 shadow-[0_20px_50px_rgb(0,0,0,0.06)] scroll-reveal opacity-0 translate-y-8 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-brand-cyan/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">⏳</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Duration</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">12 Months</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">💻</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Learning Mode</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">Hybrid</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">🗣️</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Language</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">Eng & Hin</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-brand-orange/10 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">📅</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Next Batch</span>
                <span class="font-heading font-extrabold text-xl text-brand-cyan">15 Oct</span>
            </div>
        </div>
    </div>

    <!-- Course Highlights -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8 scroll-reveal opacity-0 translate-y-8">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 text-brand-cyan font-bold tracking-widest uppercase text-sm mb-4">
                        <span class="w-8 h-0.5 bg-brand-cyan rounded-full"></span> Course Value
                    </span>
                    <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark tracking-tight">Everything You Need <br/> to <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Clear Railway</span></h2>
                </div>
                <p class="text-slate-500 text-lg max-w-sm font-medium leading-relaxed">Our Foundation Course is meticulously designed from scratch to advanced levels.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Highlight 1 -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 p-10 shadow-[0_10px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8">
                    <div class="w-16 h-16 bg-white shadow-sm flex items-center justify-center text-3xl mb-8 rounded-2xl">🎓</div>
                    <h3 class="text-2xl font-extrabold text-brand-dark mb-4 font-heading tracking-tight">Expert Faculty</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">Learn from India's top educators, ex-bureaucrats, and subject matter experts with decades of experience.</p>
                </div>

                <!-- Highlight 2 -->
                <div class="bg-gradient-to-br from-brand-orange to-red-500 rounded-3xl p-10 shadow-[0_10px_30px_rgb(255,107,0,0.2)] hover:shadow-[0_20px_50px_rgb(255,107,0,0.3)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-100 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md flex items-center justify-center text-3xl mb-8 rounded-2xl">📖</div>
                    <h3 class="text-2xl font-extrabold text-white mb-4 font-heading tracking-tight">Complete Coverage</h3>
                    <p class="text-white/80 text-sm leading-relaxed font-medium">360-degree coverage of GS Prelims, Mains, CSAT, and Current Affairs mapped precisely to the Railway syllabus.</p>
                </div>

                <!-- Highlight 3 -->
                <div class="bg-gradient-to-br from-brand-cyan to-blue-500 rounded-3xl p-10 shadow-[0_10px_30px_rgb(0,229,255,0.2)] hover:shadow-[0_20px_50px_rgb(0,229,255,0.3)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-200 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md flex items-center justify-center text-3xl mb-8 rounded-2xl">✍️</div>
                    <h3 class="text-2xl font-extrabold text-white mb-4 font-heading tracking-tight">Daily Practice</h3>
                    <p class="text-white/80 text-sm leading-relaxed font-medium">Daily MCQ practice for Prelims and structured Answer Writing practice for Mains with expert evaluation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Syllabus Accordion -->
    <section id="syllabus" class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8">
                <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark mb-6 tracking-tight">Detailed Syllabus</h2>
                <p class="text-slate-500 text-lg font-medium">Structured modules aligned exactly with the Railway pattern.</p>
            </div>

            <div class="space-y-4">
                <!-- Phase 1 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-brand-orange transition-colors">
                            Phase 1: Prelims (GS + CSAT)
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-brand-orange text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-brand-cyan/30 pl-6 ml-2">
                            <p class="mb-4"><strong>GS Paper I:</strong> History, Geography, Polity, Economy, Environment, and General Science.</p>
                            <p><strong>GS Paper II (CSAT):</strong> Comprehension, Logical Reasoning, Analytical Ability, Basic Numeracy.</p>
                        </div>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 delay-100 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-brand-orange transition-colors">
                            Phase 2: Mains (GS I-IV + Essay)
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-brand-orange text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-brand-cyan/30 pl-6 ml-2">
                            <p>Complete coverage of all 4 General Studies papers along with dedicated sessions for Essay writing and current issues.</p>
                        </div>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 delay-200 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-brand-orange transition-colors">
                            Phase 3: Interview Guidance
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-brand-orange text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-brand-cyan/30 pl-6 ml-2">
                            <p>Mock interviews with retired bureaucrats, personalized DAF analysis, and personality development sessions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section (Premium Gradient) -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-dark to-slate-900"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-cyan/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.02] bg-[size:30px_30px]"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center scroll-reveal opacity-0 translate-y-8">
            <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-white mb-8 tracking-tight">
                Ready to Begin Your Journey?
            </h2>
            <p class="text-white/60 text-lg mb-10 font-medium max-w-2xl mx-auto">
                Seats are filling fast for the upcoming batch. Secure your admission today and start your preparation.
            </p>
            <a href="{{ route('enroll', ['course' => 'Railway GS Foundation']) }}" class="inline-flex items-center justify-center px-10 py-5 text-sm font-bold text-white bg-gradient-to-r from-brand-orange to-brand-cyan rounded-full shadow-[0_8px_30px_rgb(255,107,0,0.3)] hover:shadow-[0_12px_40px_rgb(255,107,0,0.5)] hover:-translate-y-1 transition-all uppercase tracking-widest group">
                Enroll in Railway Foundation
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </section>

    <style>
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }
        .faq-button.active .faq-icon {
            transform: rotate(45deg);
            color: #00e5ff; /* brand-cyan */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.faq-button');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const answer = button.nextElementSibling;
                    const isActive = button.classList.contains('active');
                    
                    // Close all
                    document.querySelectorAll('.faq-answer').forEach(el => el.style.maxHeight = null);
                    document.querySelectorAll('.faq-button').forEach(btn => btn.classList.remove('active'));
                    
                    // Open if it wasn't active
                    if(!isActive) {
                        button.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    }
                });
            });
        });
    </script>
@endsection
