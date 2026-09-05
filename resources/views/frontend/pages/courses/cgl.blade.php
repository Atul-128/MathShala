@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Glassmorphic) -->
    <section class="relative min-h-[90vh] flex items-center bg-slate-50 overflow-hidden pt-24 pb-32">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-brand-cyan/20 to-blue-500/10 rounded-full blur-[120px] pointer-events-none transform translate-x-1/3 -translate-y-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-brand-orange/10 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px]"></div>
        
        <!-- Subtle Background Text Accents -->
        <div class="absolute top-[15%] right-[10%] text-brand-cyan/5 text-[10rem] font-black select-none pointer-events-none">SSC</div>
        <div class="absolute bottom-[10%] left-[5%] text-brand-orange/5 text-[10rem] font-black select-none pointer-events-none">CGL</div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex flex-col items-center text-center">
            
            <div class="scroll-reveal opacity-0 translate-y-8 transition-all duration-1000">
                <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-100 shadow-sm rounded-full mb-8">
                    <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-slate-500">Staff Selection Commission</span>
                </div>
                
                <h1 class="font-heading text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold text-brand-dark leading-[1.05] mb-6 tracking-tight drop-shadow-sm">
                    Crack <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">CGL</span><br />
                    With Top Rank.
                </h1>
                
                <p class="text-lg md:text-xl text-slate-500 font-medium mb-10 max-w-2xl mx-auto leading-relaxed border-l-4 border-brand-cyan/50 pl-6">
                    India's most trusted coaching institute for SSC CGL entrance exams. Expert faculty, advanced curriculum, and proven results.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    <a href="#enroll" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-white bg-gradient-to-r from-brand-cyan to-blue-500 rounded-full shadow-[0_8px_30px_rgb(0,229,255,0.3)] hover:shadow-[0_12px_40px_rgb(0,229,255,0.4)] hover:-translate-y-1 transition-all uppercase tracking-widest group">
                        Enroll Now
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#syllabus" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-full hover:bg-slate-50 hover:text-brand-dark hover:-translate-y-1 transition-all shadow-sm uppercase tracking-widest">
                        View Curriculum
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Info Bar (Premium Glass Card) -->
    <div class="relative z-20 -mt-16 max-w-6xl mx-auto px-6">
        <div class="bg-white/90 backdrop-blur-xl border border-white rounded-[2.5rem] p-8 lg:p-10 grid grid-cols-2 md:grid-cols-4 gap-8 shadow-[0_20px_50px_rgb(0,0,0,0.06)] scroll-reveal opacity-0 translate-y-8 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-32 h-32 bg-brand-orange/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">⏳</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Duration</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">1-2 Year</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">💻</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Mode</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">Hybrid</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">🏆</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Success Rate</span>
                <span class="font-heading font-extrabold text-xl text-brand-cyan">95%</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-brand-orange/10 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">📅</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Next Batch</span>
                <span class="font-heading font-extrabold text-xl text-brand-orange">Monday</span>
            </div>
        </div>
    </div>

    <!-- Subjects Grid -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8 scroll-reveal opacity-0 translate-y-8">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 text-brand-cyan font-bold tracking-widest uppercase text-sm mb-4">
                        <span class="w-8 h-0.5 bg-brand-cyan rounded-full"></span> Core Curriculum
                    </span>
                    <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark tracking-tight">Master the <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">Subjects</span></h2>
                </div>
                <p class="text-slate-500 text-lg max-w-sm font-medium leading-relaxed">In-depth mastery of core subjects for absolute exam dominance.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Quantitative Aptitude -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 p-8 shadow-[0_10px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8">
                    <div class="w-14 h-14 bg-white shadow-sm flex items-center justify-center text-2xl mb-6 rounded-2xl">🧮</div>
                    <h3 class="text-xl font-extrabold text-brand-dark mb-4 font-heading tracking-tight">Quant</h3>
                    <p class="text-slate-500 text-xs font-medium leading-relaxed">Arithmetic, Advanced Math, Geometry, Algebra, Trigonometry.</p>
                </div>

                <!-- General Intelligence -->
                <div class="bg-gradient-to-br from-brand-cyan to-blue-500 rounded-3xl p-8 shadow-[0_10px_30px_rgb(0,229,255,0.2)] hover:shadow-[0_20px_50px_rgb(0,229,255,0.3)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-100 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md flex items-center justify-center text-2xl mb-6 rounded-2xl">🧠</div>
                    <h3 class="text-xl font-extrabold text-white mb-4 font-heading tracking-tight">Reasoning</h3>
                    <p class="text-white/80 text-xs font-medium leading-relaxed">Logical, Analytical, and Non-Verbal Reasoning strategies.</p>
                </div>

                <!-- English -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 p-8 shadow-[0_10px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-200">
                    <div class="w-14 h-14 bg-white shadow-sm flex items-center justify-center text-2xl mb-6 rounded-2xl">📚</div>
                    <h3 class="text-xl font-extrabold text-brand-dark mb-4 font-heading tracking-tight">English</h3>
                    <p class="text-slate-500 text-xs font-medium leading-relaxed">Grammar, Comprehension, Vocabulary, and precise writing.</p>
                </div>

                <!-- General Awareness -->
                <div class="bg-gradient-to-br from-brand-orange to-red-500 rounded-3xl p-8 shadow-[0_10px_30px_rgb(255,107,0,0.2)] hover:shadow-[0_20px_50px_rgb(255,107,0,0.3)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-300 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md flex items-center justify-center text-2xl mb-6 rounded-2xl">🌍</div>
                    <h3 class="text-xl font-extrabold text-white mb-4 font-heading tracking-tight">General Awareness</h3>
                    <p class="text-white/80 text-xs font-medium leading-relaxed">History, Geography, Polity, Science, and Current Affairs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Syllabus Accordion -->
    <section id="syllabus" class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8">
                <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark mb-6 tracking-tight">Exam Structure</h2>
                <p class="text-slate-500 text-lg font-medium">Detailed breakdown of the SSC CGL examination tiers.</p>
            </div>

            <div class="space-y-4">
                <!-- Tier 1 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-brand-cyan transition-colors">
                            Tier 1 (Preliminary)
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-brand-cyan text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-brand-cyan/30 pl-6 ml-2">
                            <p class="mb-4">Computer Based Examination consisting of objective type multiple choice questions.</p>
                            <ul class="list-disc ml-5 space-y-2">
                                <li>General Intelligence & Reasoning (25 Q, 50 Marks)</li>
                                <li>General Awareness (25 Q, 50 Marks)</li>
                                <li>Quantitative Aptitude (25 Q, 50 Marks)</li>
                                <li>English Comprehension (25 Q, 50 Marks)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tier 2 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 delay-100 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-brand-cyan transition-colors">
                            Tier 2 (Mains)
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-brand-cyan text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-brand-cyan/30 pl-6 ml-2">
                            <p>Comprehensive written test focusing on core competencies.</p>
                            <ul class="list-disc ml-5 space-y-2 mt-2">
                                <li>Paper 1: Mathematical Abilities & Reasoning</li>
                                <li>Paper 2: English Language & General Awareness</li>
                                <li>Paper 3: Statistics (For specific posts)</li>
                                <li>Computer Knowledge Test & Data Entry Speed Test</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-dark to-slate-900"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-cyan/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-orange/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.02] bg-[size:30px_30px]"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center scroll-reveal opacity-0 translate-y-8">
            <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-white mb-8 tracking-tight">
                Secure Your Rank Today.
            </h2>
            <p class="text-white/60 text-lg mb-10 font-medium max-w-2xl mx-auto">
                Join the league of successful candidates. Enroll in the SSC CGL advanced coaching module and start preparing smartly.
            </p>
            <a href="{{ route('enroll', ['course' => 'SSC CGL']) }}" class="inline-flex items-center justify-center px-10 py-5 text-sm font-bold text-white bg-gradient-to-r from-brand-cyan to-blue-500 rounded-full shadow-[0_8px_30px_rgb(0,229,255,0.3)] hover:shadow-[0_12px_40px_rgb(0,229,255,0.5)] hover:-translate-y-1 transition-all uppercase tracking-widest group">
                Enroll in CGL Program
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
            color: #ff6b00; /* brand-orange */
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
