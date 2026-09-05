@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Glassmorphic) -->
    <section class="relative min-h-[90vh] flex items-center bg-slate-50 overflow-hidden pt-24 pb-32">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-blue-500/20 to-brand-cyan/20 rounded-full blur-[120px] pointer-events-none transform translate-x-1/3 -translate-y-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-brand-orange/10 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px]"></div>
        
        <!-- Mathematical Accents -->
        <div class="absolute top-[20%] left-[10%] text-brand-dark/5 font-serif text-8xl scroll-reveal opacity-0 -translate-y-12 select-none pointer-events-none">∫</div>
        <div class="absolute top-[60%] left-[5%] text-brand-dark/5 font-serif text-7xl scroll-reveal opacity-0 -translate-y-12 delay-100 select-none pointer-events-none">∑</div>
        <div class="absolute top-[30%] right-[15%] text-brand-dark/5 font-serif text-9xl scroll-reveal opacity-0 -translate-y-12 delay-200 select-none pointer-events-none">π</div>
        <div class="absolute bottom-[20%] right-[10%] text-brand-dark/5 font-serif text-7xl scroll-reveal opacity-0 -translate-y-12 delay-300 select-none pointer-events-none">∞</div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 text-center flex flex-col items-center">
            <div class="scroll-reveal opacity-0 translate-y-8 transition-all duration-1000">
                <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-100 shadow-sm rounded-full mb-8">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-slate-500">Analytical Excellence</span>
                </span>
                
                <h1 class="font-heading text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold text-brand-dark tracking-tight leading-[1.05] mb-6 drop-shadow-sm">
                    GD <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-brand-cyan">Foundation</span> Course
                </h1>
                
                <p class="text-lg md:text-xl text-slate-500 font-medium mb-10 max-w-2xl mx-auto leading-relaxed border-l-4 border-blue-500/50 pl-6">
                    Build robust analytical skills and conquer advanced GD from the ground up. Perfect for civil services aspirants targeting top ranks.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    <a href="#enroll" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-white bg-gradient-to-r from-blue-500 to-brand-cyan rounded-full shadow-[0_8px_30px_rgb(59,130,246,0.3)] hover:shadow-[0_12px_40px_rgb(59,130,246,0.4)] hover:-translate-y-1 transition-all uppercase tracking-widest group">
                        Enroll Now
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#syllabus" class="inline-flex items-center justify-center px-8 py-4 text-sm font-bold text-slate-600 bg-white border border-slate-200 rounded-full hover:bg-slate-50 hover:text-brand-dark hover:-translate-y-1 transition-all shadow-sm uppercase tracking-widest">
                        View Syllabus
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Grid (Premium Glass Card) -->
    <div class="relative z-20 -mt-16 max-w-5xl mx-auto px-6">
        <div class="bg-white/90 backdrop-blur-xl border border-white rounded-[2.5rem] p-8 lg:p-10 grid grid-cols-2 md:grid-cols-4 gap-8 shadow-[0_20px_50px_rgb(0,0,0,0.06)] scroll-reveal opacity-0 translate-y-8 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">⏳</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Duration</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">8 Months</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">💻</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Mode</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">Hybrid</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">🗣️</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Language</span>
                <span class="font-heading font-extrabold text-xl text-brand-dark">Eng & Hin</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-4 shadow-sm text-xl">📅</div>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Starts On</span>
                <span class="font-heading font-extrabold text-xl text-brand-cyan">Mon</span>
            </div>
        </div>
    </div>

    <!-- Curriculum Highlights -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8">
                <span class="inline-flex items-center gap-2 text-blue-500 font-bold tracking-widest uppercase text-sm mb-4">
                    What You Will Learn
                </span>
                <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark tracking-tight">Curriculum <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-brand-cyan">Highlights</span></h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 p-10 shadow-[0_10px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8">
                    <div class="w-16 h-16 bg-white shadow-sm text-brand-dark flex items-center justify-center text-3xl mb-8 font-serif rounded-2xl">x²</div>
                    <h3 class="text-2xl font-extrabold text-brand-dark mb-4 font-heading tracking-tight">Abstract Algebra</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">Groups, rings, fields, and vector spaces covered from the absolute basics to theorem proofs.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gradient-to-br from-blue-500 to-brand-cyan rounded-3xl p-10 shadow-[0_10px_30px_rgb(59,130,246,0.2)] hover:shadow-[0_20px_50px_rgb(59,130,246,0.3)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-100 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md flex items-center justify-center text-3xl mb-8 font-serif font-black text-white rounded-2xl">∫</div>
                    <h3 class="text-2xl font-extrabold text-white mb-4 font-heading tracking-tight">Real Analysis</h3>
                    <p class="text-white/80 text-sm leading-relaxed font-medium">Limits, continuity, differentiability, Riemann integral, and advanced calculus techniques.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-slate-50 rounded-3xl border border-slate-100 p-10 shadow-[0_10px_30px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-8 delay-200">
                    <div class="w-16 h-16 bg-white shadow-sm text-brand-dark flex items-center justify-center text-3xl mb-8 font-serif rounded-2xl">∆</div>
                    <h3 class="text-2xl font-extrabold text-brand-dark mb-4 font-heading tracking-tight">3D Geometry</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">Analytical geometry of three dimensions including planes, straight lines, spheres, and cones.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Syllabus Accordion -->
    <section id="syllabus" class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 scroll-reveal opacity-0 translate-y-8">
                <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark mb-6 tracking-tight">Complete Syllabus</h2>
                <p class="text-slate-500 text-lg font-medium">Structured modules designed for absolute clarity and deep understanding.</p>
            </div>

            <div class="space-y-4">
                <!-- Module 1 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-blue-500 transition-colors">
                            Module 1: Algebra & Calculus
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-blue-500 text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-blue-500/30 pl-6 ml-2">
                            <p class="mb-4">Comprehensive coverage of fundamental algebraic structures and calculus.</p>
                            <ul class="list-disc ml-5 space-y-2">
                                <li>Linear Algebra</li>
                                <li>Calculus and Real Analysis</li>
                                <li>Ordinary Differential Equations</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm scroll-reveal opacity-0 translate-y-8 delay-100 overflow-hidden group">
                    <button class="faq-button w-full text-left p-6 md:p-8 flex justify-between items-center focus:outline-none transition-colors hover:bg-slate-50">
                        <span class="font-heading text-xl md:text-2xl font-extrabold text-brand-dark group-hover:text-blue-500 transition-colors">
                            Module 2: Advanced Topics
                        </span>
                        <span class="faq-icon transform transition-transform duration-300 text-blue-500 text-3xl font-light">
                            +
                        </span>
                    </button>
                    <div class="faq-answer px-6 md:px-8 bg-white">
                        <div class="pb-8 text-slate-500 font-medium leading-relaxed border-l-4 border-blue-500/30 pl-6 ml-2">
                            <p>Deep dive into specialized mathematical modeling and numerical analysis.</p>
                            <ul class="list-disc ml-5 space-y-2 mt-2">
                                <li>Vector Analysis & 3D Geometry</li>
                                <li>Statics and Dynamics</li>
                                <li>Numerical Methods and Computer Programming</li>
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
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-cyan/20 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.02] bg-[size:30px_30px]"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-6 text-center scroll-reveal opacity-0 translate-y-8">
            <h2 class="font-heading text-4xl lg:text-5xl font-extrabold text-white mb-8 tracking-tight">
                Master the Complexity.
            </h2>
            <p class="text-white/60 text-lg mb-10 font-medium max-w-2xl mx-auto">
                Take the leap towards analytical brilliance. Join the GD Foundation course today.
            </p>
            <a href="{{ route('enroll', ['course' => 'GD Foundation']) }}" class="inline-flex items-center justify-center px-10 py-5 text-sm font-bold text-white bg-gradient-to-r from-blue-500 to-brand-cyan rounded-full shadow-[0_8px_30px_rgb(59,130,246,0.3)] hover:shadow-[0_12px_40px_rgb(59,130,246,0.5)] hover:-translate-y-1 transition-all uppercase tracking-widest group">
                Enroll in GD Program
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
            color: #3b82f6; /* blue-500 */
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
