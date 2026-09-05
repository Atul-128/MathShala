@extends('frontend.layouts.base')

@section('page-content')
    <!-- Enroll Page Hero & Form -->
    <section class="relative py-24 lg:py-32 bg-slate-50 overflow-hidden min-h-screen flex items-center">
        <!-- Premium Background Accents -->
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-bl from-brand-cyan/10 to-transparent rounded-full blur-[120px] pointer-events-none transform translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-brand-orange/10 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px]"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <!-- Left Content -->
                <div class="scroll-reveal opacity-0 -translate-x-12 transition-all duration-1000">
                    <span class="inline-flex items-center gap-2 px-5 py-2.5 bg-white shadow-sm border border-slate-100 text-slate-600 font-bold text-[10px] tracking-[0.3em] uppercase rounded-full mb-8">
                        <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                        Admissions Open 2026
                    </span>
                    
                    <h1 class="font-heading text-5xl md:text-7xl lg:text-[5rem] font-extrabold text-brand-dark leading-[1.05] mb-8 tracking-tight drop-shadow-sm">
                        Forge Your <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Success Path.</span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-slate-500 font-medium mb-12 max-w-lg leading-relaxed border-l-4 border-brand-orange/50 pl-6">
                        Join India's most dedicated Railway coaching institute. We don't just provide lessons; we build the officers of tomorrow.
                    </p>

                    <div class="space-y-6 mb-12">
                        <div class="flex items-center gap-5 group">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-100 group-hover:scale-110 group-hover:shadow-md transition-all duration-300">
                                <span class="text-2xl drop-shadow-sm">🎖️</span>
                            </div>
                            <span class="font-bold text-brand-dark tracking-tight text-lg group-hover:text-brand-orange transition-colors">Expert Faculty Mentorship</span>
                        </div>
                        <div class="flex items-center gap-5 group">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-100 group-hover:scale-110 group-hover:shadow-md transition-all duration-300">
                                <span class="text-2xl drop-shadow-sm">📝</span>
                            </div>
                            <span class="font-bold text-brand-dark tracking-tight text-lg group-hover:text-brand-cyan transition-colors">Rigorous Answer Writing</span>
                        </div>
                        <div class="flex items-center gap-5 group">
                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-slate-100 group-hover:scale-110 group-hover:shadow-md transition-all duration-300">
                                <span class="text-2xl drop-shadow-sm">📈</span>
                            </div>
                            <span class="font-bold text-brand-dark tracking-tight text-lg group-hover:text-blue-500 transition-colors">Personalized Growth Tracking</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-8 pt-10 border-t border-slate-200">
                        <div>
                            <p class="font-heading text-4xl lg:text-5xl font-extrabold text-brand-dark tracking-tight"><span class="counter" data-target="500">0</span>+</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-2">Total Selections</p>
                        </div>
                        <div>
                            <p class="font-heading text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-red-500 tracking-tight"><span class="counter" data-target="100">0</span>+</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-2">AIR Top 100</p>
                        </div>
                    </div>
                </div>

                <!-- Right Form (Premium Glass Card) -->
                <div class="scroll-reveal opacity-0 translate-x-12 transition-all duration-1000 delay-100">
                    <div class="relative bg-white/80 backdrop-blur-xl rounded-[2.5rem] p-8 md:p-12 shadow-[0_20px_50px_rgb(0,0,0,0.06)] border border-white">
                        
                        <!-- Floating Accent -->
                        <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-brand-orange to-brand-cyan rounded-full blur-[40px] opacity-50 z-0"></div>

                        <div class="relative z-10">
                            <h3 class="text-3xl font-extrabold text-brand-dark mb-2 tracking-tight">Admission <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">Form</span></h3>
                            <p class="text-slate-400 text-[10px] font-bold mb-8 uppercase tracking-widest">Start your transformation today</p>

                            @if(session('success'))
                            <div class="mb-8 bg-green-50/50 border border-green-100 text-green-700 px-6 py-4 rounded-2xl text-sm font-semibold flex items-center gap-3 backdrop-blur-sm">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session('success') }}
                            </div>
                            @endif

                            <form action="{{ route('enroll.store') }}" method="POST" class="space-y-6">
                                @csrf
                                
                                <div>
                                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Full Name</label>
                                    <input type="text" name="name" required class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:border-transparent focus:ring-2 focus:ring-brand-cyan/40 focus:bg-white outline-none font-semibold text-brand-dark transition-all shadow-sm placeholder:text-slate-300 placeholder:font-medium" placeholder="e.g. Rahul Verma">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Phone Number</label>
                                        <input type="tel" name="phone" required class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:border-transparent focus:ring-2 focus:ring-brand-cyan/40 focus:bg-white outline-none font-semibold text-brand-dark transition-all shadow-sm placeholder:text-slate-300 placeholder:font-medium" placeholder="+91 00000 00000">
                                    </div>
                                    <div>
                                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Email Address</label>
                                        <input type="email" name="email" required class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:border-transparent focus:ring-2 focus:ring-brand-orange/40 focus:bg-white outline-none font-semibold text-brand-dark transition-all shadow-sm placeholder:text-slate-300 placeholder:font-medium" placeholder="email@example.com">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Interested Course</label>
                                    <div class="relative">
                                        <select name="course" required class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:border-transparent focus:ring-2 focus:ring-brand-cyan/40 focus:bg-white outline-none font-semibold text-brand-dark transition-all shadow-sm appearance-none cursor-pointer">
                                            <option value="" disabled selected class="text-slate-400">Select a course...</option>
                                            <option value="Math Foundation">Math Foundation</option>
                                            <option value="GK GS Foundation">GK GS Foundation</option>
                                            <option value="Science foundation">Science foundation</option>
                                            <option value="Test Series / Mentorship">Test Series / Mentorship</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="w-full py-5 bg-gradient-to-r from-brand-orange to-brand-cyan text-white font-bold uppercase tracking-widest text-sm rounded-full shadow-[0_8px_30px_rgb(255,94,0,0.3)] hover:shadow-[0_12px_40px_rgb(255,94,0,0.5)] transition-all duration-300 transform hover:-translate-y-1 mt-6 relative overflow-hidden group">
                                    <span class="relative z-10 flex items-center justify-center gap-2">
                                        Secure Admission
                                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </span>
                                </button>
                            </form>

                            <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-center gap-2">
                                <svg class="w-4 h-4 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                                    Your information is 100% secure
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Counter Script (if needed for this page specifically) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            
            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const duration = 2000; 
                const step = target / (duration / 16); 
                let current = 0;

                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                updateCounter();
            };

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        
                        if (entry.target.classList.contains('scroll-reveal')) {
                            entry.target.classList.remove('opacity-0', '-translate-x-12', 'translate-x-12');
                        }
                        
                        const counter = entry.target.querySelector('.counter');
                        if (counter && !counter.classList.contains('animated')) {
                            animateCounter(counter);
                            counter.classList.add('animated');
                        }

                        if (!entry.target.querySelector('.counter')) {
                             observer.unobserve(entry.target);
                        }
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-reveal, .counter-container').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
@endsection
