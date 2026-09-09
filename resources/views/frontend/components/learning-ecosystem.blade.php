<!-- resources/views/frontend/components/learning-ecosystem.blade.php -->
<section id="mathshala-ecosystem" class="relative py-20 bg-blue-50 overflow-hidden font-sans border-t border-slate-100">
    <!-- Subtle Background Elements -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-brand-orange/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-amber-400/5 rounded-full blur-[150px]"></div>
        <!-- Subtle dot pattern -->
        <div class="absolute inset-0" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 40px 40px; opacity: 0.3;"></div>
        
        <!-- Floating Math Symbols -->
        <div class="absolute top-[15%] left-[20%] text-brand-orange/20 text-4xl font-bold animate-float delay-100">+</div>
        <div class="absolute top-[25%] right-[15%] text-amber-500/20 text-5xl font-bold animate-float delay-300">×</div>
        <div class="absolute bottom-[35%] left-[10%] text-brand-cyan/20 text-4xl font-bold animate-float delay-500">÷</div>
        <div class="absolute bottom-[20%] right-[25%] text-brand-orange/20 text-6xl font-bold animate-float delay-700">=</div>
        <div class="absolute top-[45%] left-[5%] text-slate-300/30 text-5xl font-serif animate-float delay-200">π</div>
        <div class="absolute top-[10%] right-[35%] text-amber-400/20 text-4xl font-serif animate-float delay-400">√</div>
    </div>

    <div class="w-full max-w-[95%] xl:max-w-[1400px] mx-auto px-4 sm:px-6 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-4xl mx-auto mb-20 eco-reveal opacity-0 translate-y-8 transition-all duration-1000">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-brand-orange/20 text-[11px] font-bold text-brand-orange uppercase tracking-[0.2em] mb-6 shadow-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-orange animate-pulse"></span>
                The MathShala Method
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                Build Strong Concepts. <br class="hidden md:block"/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-amber-500">Think Beyond Numbers.</span>
            </h2>
            <p class="text-lg text-slate-600 font-medium">
                Expert guidance, interactive learning and continuous practice — designed to build strong mathematical and logical skills from the very beginning.
            </p>
        </div>

        <!-- Part 1: Learning Journey / Teaching Ecosystem -->
        <div class="relative w-full max-w-6xl mx-auto mb-16">
            
            <!-- Desktop Connecting Lines using HTML/CSS -->
            <div class="hidden lg:block absolute top-[100px] left-0 w-full h-[150px] z-0 pointer-events-none">
                <!-- Left to Center -->
                <div class="absolute left-[16%] top-[20%] w-[25%] h-[120px] border-t-2 border-r-2 border-dashed border-brand-orange/40 rounded-tr-[3rem] eco-reveal opacity-0 transition-all duration-1000 delay-500">
                    <!-- Arrow head pointing down -->
                    <div class="absolute bottom-[-7px] right-[-7px] text-brand-orange">
                        <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7"></path></svg>
                    </div>
                </div>
                
                <!-- Right to Center -->
                <div class="absolute right-[16%] top-[20%] w-[25%] h-[120px] border-t-2 border-l-2 border-dashed border-amber-500/40 rounded-tl-[3rem] eco-reveal opacity-0 transition-all duration-1000 delay-700">
                    <!-- Arrow head pointing down -->
                    <div class="absolute bottom-[-7px] left-[-7px] text-amber-500">
                        <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 15l7-7 7 7"></path></svg>
                    </div>
                </div>
            </div>

            <!-- Ecosystem Flex Layout -->
            <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between relative z-10">
                
                <!-- Master Teacher (Left) -->
                <div class="w-full lg:w-1/3 flex flex-col items-center text-center eco-reveal-left opacity-0 -translate-x-12 transition-all duration-1000 delay-200">
                    <div class="relative w-40 h-40 mb-6 group">
                        <div class="absolute inset-0 bg-brand-orange/15 rounded-full blur-xl transform group-hover:scale-110 transition-transform duration-500"></div>
                        <div class="relative w-full h-full bg-white rounded-full p-2 shadow-xl border border-white">
                            <div class="w-full h-full rounded-full overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/pic1.jpg') }}" alt="Master Teacher" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-white px-4 py-1.5 rounded-full shadow-md border border-brand-orange/20 whitespace-nowrap">
                                <span class="text-[10px] font-bold text-brand-orange uppercase tracking-wider">Master Teacher</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-800 mb-2">Build Concepts</h3>
                    <p class="text-sm text-slate-500 font-medium px-4">
                        Creates strong mathematical and logical foundations.
                    </p>
                    
                    <!-- Mobile Connecting Arrow -->
                    <div class="lg:hidden mt-8 text-brand-orange/50">
                        <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </div>
                </div>

                <!-- Student (Center) -->
                <div class="w-full lg:w-1/3 flex flex-col items-center text-center eco-reveal-scale opacity-0 scale-90 transition-all duration-1000 delay-500 z-20 mt-8 lg:mt-32">
                    <div class="relative w-48 h-48 mb-6 group">
                        <div class="absolute -inset-2 bg-gradient-to-r from-brand-orange to-amber-400 rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                        <div class="relative w-full h-full bg-white rounded-full p-2 shadow-2xl border-2 border-white">
                            <div class="w-full h-full rounded-full overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/pic4.jpg') }}" alt="Confident Student" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-brand-orange to-amber-500 px-5 py-2 rounded-full shadow-lg border border-white whitespace-nowrap">
                                <span class="text-xs font-bold text-white uppercase tracking-wider">Confident Student</span>
                            </div>
                        </div>
                        
                        <!-- Decorative floating elements around student -->
                        <div class="absolute top-2 -right-2 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center animate-float delay-100">
                            <span class="text-amber-500 font-bold text-lg">A+</span>
                        </div>
                        <div class="absolute bottom-8 -left-4 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center animate-float delay-300">
                            <span class="text-brand-orange font-bold text-lg">100</span>
                        </div>
                    </div>
                </div>

                <!-- Mentor Teacher (Right) -->
                <div class="w-full lg:w-1/3 flex flex-col items-center text-center mt-8 lg:mt-0 eco-reveal-right opacity-0 translate-x-12 transition-all duration-1000 delay-300">
                    <!-- Mobile Connecting Arrow -->
                    <div class="lg:hidden mb-8 text-amber-500/50">
                        <svg class="w-6 h-6 transform rotate-180 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </div>

                    <div class="relative w-40 h-40 mb-6 group">
                        <div class="absolute inset-0 bg-amber-400/15 rounded-full blur-xl transform group-hover:scale-110 transition-transform duration-500"></div>
                        <div class="relative w-full h-full bg-white rounded-full p-2 shadow-xl border border-white">
                            <div class="w-full h-full rounded-full overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/pic2.png') }}" alt="Mentor Teacher" class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-white px-4 py-1.5 rounded-full shadow-md border border-amber-500/20 whitespace-nowrap">
                                <span class="text-[10px] font-bold text-amber-500 uppercase tracking-wider">Mentor Teacher</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-800 mb-2">Guide Every Step</h3>
                    <p class="text-sm text-slate-500 font-medium px-4">
                        Continuous support, practice, and personalized doubt solving.
                    </p>
                </div>
            </div>
        </div>

        <!-- Learning Process Journey -->
        <div class="relative max-w-5xl mx-auto mb-20 bg-white/70 backdrop-blur-xl rounded-3xl p-8 lg:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.03)] border border-white eco-reveal opacity-0 translate-y-8 transition-all duration-1000 delay-500">
            <!-- Connecting Line Desktop -->
            <div class="absolute top-[50px] left-24 right-24 h-0.5 bg-gradient-to-r from-brand-orange/20 via-amber-500/50 to-brand-orange/20 hidden md:block z-0"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-brand-orange font-black text-xl mb-6 border-2 border-brand-orange/20 shadow-md group-hover:border-brand-orange group-hover:scale-110 transition-all duration-300 relative">
                        <span class="relative z-10">01</span>
                        <!-- Mobile connecting line -->
                        <div class="absolute top-14 w-0.5 h-12 bg-slate-200 md:hidden"></div>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-800 mb-2">Prepare</h4>
                    <p class="text-sm text-slate-500 font-medium">Structured courseware designed around strong fundamentals.</p>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-14 h-14 bg-gradient-to-br from-brand-orange to-amber-500 rounded-full flex items-center justify-center text-white font-black text-xl mb-6 shadow-lg shadow-brand-orange/30 group-hover:scale-110 transition-all duration-300 relative">
                        <span class="relative z-10">02</span>
                        <!-- Mobile connecting line -->
                        <div class="absolute top-14 w-0.5 h-12 bg-slate-200 md:hidden"></div>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-800 mb-2">Learn & Practice</h4>
                    <p class="text-sm text-slate-500 font-medium">Interactive teaching with continuous mathematical practice.</p>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-brand-orange font-black text-xl mb-6 border-2 border-brand-orange/20 shadow-md group-hover:border-brand-orange group-hover:scale-110 transition-all duration-300 relative">
                        <span class="relative z-10">03</span>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-800 mb-2">Track & Improve</h4>
                    <p class="text-sm text-slate-500 font-medium">Tests, performance tracking and personalized doubt solving.</p>
                </div>
            </div>
        </div>

        <!-- Part 2: Choose Your Class -->
        <div class="max-w-6xl mx-auto eco-reveal opacity-0 translate-y-8 transition-all duration-1000 delay-200">
            <div class="text-center mb-12">
                <h3 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-4">Choose Your Class</h3>
                <p class="text-slate-600 font-medium max-w-2xl mx-auto">Start building stronger concepts with the right learning path for your grade.</p>
                
                
                <div id="selected-class-display" class="mt-6 text-sm font-bold text-brand-orange bg-white inline-block px-5 py-2 rounded-full border border-brand-orange/20 shadow-sm transition-all duration-300 opacity-0 transform scale-95">
                    Selected: None
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @php
                    $classes = [
                        ['id' => 1, 'name' => 'Class 1', 'available' => true],
                        ['id' => 2, 'name' => 'Class 2', 'available' => true],
                        ['id' => 3, 'name' => 'Class 3', 'available' => true],
                        ['id' => 4, 'name' => 'Class 4', 'available' => true],
                        ['id' => 5, 'name' => 'Class 5', 'available' => true],
                        ['id' => 6, 'name' => 'Class 6', 'available' => true],
                        ['id' => 7, 'name' => 'Class 7', 'available' => true],
                        ['id' => 8, 'name' => 'Class 8', 'available' => true],
                        ['id' => 9, 'name' => 'Class 9', 'available' => true],
                        ['id' => 10, 'name' => 'Class 10', 'available' => false],
                        ['id' => 11, 'name' => 'Class 11', 'available' => false],
                        ['id' => 12, 'name' => 'Class 12', 'available' => false],
                    ];
                @endphp

                @foreach($classes as $class)
                    @if($class['available'])
                        
                        <button class="class-card group relative bg-white rounded-2xl p-6 text-left border border-slate-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgb(249,115,22,0.12)] transition-all duration-300 hover:-translate-y-1.5 overflow-hidden focus:outline-none" data-class="{{ $class['name'] }}">
                            <div class="absolute inset-0 bg-gradient-to-br from-white via-white to-amber-500/5 group-hover:to-amber-500/15 transition-colors duration-300"></div>
                            
                            <div class="relative z-10 flex flex-col h-full justify-between">
                                <div>
                                    <span class="text-[10px] font-bold text-slate-400 tracking-widest uppercase mb-1 block group-hover:text-brand-orange transition-colors">Class {{ str_pad($class['id'], 2, '0', STR_PAD_LEFT) }}</span>
                                    <h4 class="text-2xl font-extrabold text-slate-800 mb-2 group-hover:text-brand-dark transition-colors">{{ $class['name'] }}</h4>
                                </div>
                                <div class="mt-6 flex items-center text-sm font-bold text-brand-orange opacity-80 group-hover:opacity-100 transition-opacity">
                                    <span>Explore</span>
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </div>
                            </div>
                        </button>
                    @else
                        
                        <div class="relative bg-slate-50/50 rounded-2xl p-6 text-left border border-slate-100 overflow-hidden">
                            <div class="relative z-10 flex flex-col h-full justify-between grayscale opacity-60 hover:opacity-80 transition-opacity cursor-not-allowed">
                                <div>
                                    <span class="text-[10px] font-bold text-slate-400 tracking-widest uppercase mb-1 block">Class {{ str_pad($class['id'], 2, '0', STR_PAD_LEFT) }}</span>
                                    <h4 class="text-2xl font-extrabold text-slate-400 mb-2">{{ $class['name'] }}</h4>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <span class="text-[10px] font-bold text-slate-500 bg-slate-200/80 px-3 py-1.5 rounded-md uppercase tracking-wider">Coming Soon</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>

    <!-- Premium Enrollment Modal -->
    <div id="enrollment-modal" class="fixed inset-0 z-[100] hidden items-center justify-center">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0" id="modal-backdrop"></div>
        
        <!-- Modal Content -->
        <div class="relative w-[90%] max-w-md bg-white rounded-3xl shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-300 flex flex-col" id="modal-content">
            <!-- Decorative Header -->
            <div class="relative h-24 bg-gradient-to-r from-brand-orange to-amber-500 px-6 pt-6 pb-4 flex items-start justify-between">
                <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-white via-transparent to-transparent"></div>
                <div class="relative z-10 text-white">
                    <h3 class="text-2xl font-extrabold tracking-tight">MathShala</h3>
                    <p class="text-orange-50 text-sm font-medium mt-1">Premium Enrollment</p>
                </div>
                <button type="button" id="close-modal-btn" class="relative z-10 text-white/80 hover:text-white bg-white/10 hover:bg-white/20 p-1.5 rounded-full backdrop-blur-md transition-colors focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            
            <!-- Floating Badge for Class -->
            <div class="absolute top-20 left-6 bg-white px-4 py-1.5 rounded-full shadow-lg border border-slate-100 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                <span id="modal-class-name" class="text-sm font-bold text-slate-800">Class Select</span>
            </div>

            <!-- Form -->
            <div class="p-6 pt-8 bg-slate-50 flex-grow">
                <p class="text-slate-600 text-sm mb-6 font-medium">Fill in your details below and our academic counselor will contact you shortly to begin your journey.</p>
                
                <form id="enrollment-form" action="{{ url('/enroll') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" id="selected-class-input" name="class">
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Student Name</label>
                        <input type="text" name="name" required class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow shadow-sm" placeholder="e.g. Rahul Sharma">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Mobile Number</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500 font-medium">+91</span>
                            <input type="tel" name="phone" required pattern="[0-9]{10}" class="w-full bg-white border border-slate-200 rounded-xl pl-12 pr-4 py-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow shadow-sm" placeholder="10-digit number">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Email Address</label>
                        <input type="email" name="email" required class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow shadow-sm" placeholder="email@example.com">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Interested Course</label>
                        <select name="course" required class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow shadow-sm appearance-none cursor-pointer">
                            <option value="" disabled selected class="text-slate-400">Select a course...</option>
                            <option value="Careful Learning Program (CLP)">Careful Learning Program (CLP)</option>
                            <option value="Bright Learning Program (BLP)">Bright Learning Program (BLP)</option>
                            <option value="SActive Learning Program ( ALP)">SActive Learning Program ( ALP)</option>
                        </select>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full relative group overflow-hidden rounded-xl p-[1px]">
                            <span class="absolute inset-0 bg-gradient-to-r from-brand-orange via-amber-500 to-yellow-500 opacity-70 group-hover:opacity-100 transition-opacity duration-300"></span>
                            <div class="relative bg-white/10 backdrop-blur-sm px-6 py-3.5 rounded-xl flex items-center justify-center gap-2 transition-all duration-300 group-hover:bg-transparent">
                                <span class="font-bold text-white text-lg tracking-wide">Enroll Now</span>
                                <svg class="w-5 h-5 text-white transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m-7-7H3"></path></svg>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Minimal JS for Interactions and Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Scroll Reveal Animations
            const revealElements = document.querySelectorAll('.eco-reveal, .eco-reveal-left, .eco-reveal-right, .eco-reveal-scale');
            
            if('IntersectionObserver' in window) {
                const revealObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const el = entry.target;
                            
                            if (el.classList.contains('eco-reveal')) {
                                el.classList.remove('opacity-0', 'translate-y-8');
                            } else if (el.classList.contains('eco-reveal-left')) {
                                el.classList.remove('opacity-0', '-translate-x-12');
                            } else if (el.classList.contains('eco-reveal-right')) {
                                el.classList.remove('opacity-0', 'translate-x-12');
                            } else if (el.classList.contains('eco-reveal-scale')) {
                                el.classList.remove('opacity-0', 'scale-90');
                            }
                            
                            observer.unobserve(el);
                        }
                    });
                }, { rootMargin: '0px 0px -50px 0px', threshold: 0.1 });

                revealElements.forEach(el => revealObserver.observe(el));
            } else {
                // Fallback for older browsers
                revealElements.forEach(el => {
                    el.classList.remove('opacity-0', 'translate-y-8', '-translate-x-12', 'translate-x-12', 'scale-90');
                });
            }

            // 2. Class Selection & Modal Interaction
            const classCards = document.querySelectorAll('.class-card');
            const displayBadge = document.getElementById('selected-class-display');
            const modal = document.getElementById('enrollment-modal');
            const modalBackdrop = document.getElementById('modal-backdrop');
            const modalContent = document.getElementById('modal-content');
            const closeModalBtn = document.getElementById('close-modal-btn');
            const modalClassName = document.getElementById('modal-class-name');
            const selectedClassInput = document.getElementById('selected-class-input');

            function openModal(className) {
                modalClassName.textContent = className;
                selectedClassInput.value = className;
                
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                
                // trigger animation slightly after display block
                setTimeout(() => {
                    modalBackdrop.classList.remove('opacity-0');
                    modalBackdrop.classList.add('opacity-100');
                    modalContent.classList.remove('opacity-0', 'scale-95');
                    modalContent.classList.add('opacity-100', 'scale-100');
                }, 10);
            }

            function closeModal() {
                modalBackdrop.classList.remove('opacity-100');
                modalBackdrop.classList.add('opacity-0');
                modalContent.classList.remove('opacity-100', 'scale-100');
                modalContent.classList.add('opacity-0', 'scale-95');
                
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }, 300);
            }

            classCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active state from all
                    classCards.forEach(c => {
                        c.classList.remove('border-brand-orange', 'ring-2', 'ring-brand-orange/20', 'bg-brand-orange/5');
                        c.classList.add('border-slate-100', 'bg-white');
                    });

                    // Add active state to clicked
                    this.classList.remove('border-slate-100', 'bg-white');
                    this.classList.add('border-brand-orange', 'ring-2', 'ring-brand-orange/20', 'bg-brand-orange/5');

                    // Update badge
                    const className = this.getAttribute('data-class');
                    displayBadge.textContent = `Selected: ${className}`;
                    displayBadge.classList.remove('opacity-0', 'scale-95');
                    displayBadge.classList.add('opacity-100', 'scale-100');

                    // Open Modal
                    openModal(className);
                });
            });

            closeModalBtn.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);
            
            // Note: The form will now submit normally to the server via POST
        });
    </script>

    <style>
        /* Custom Keyframes for Subtle Floating Animation */
        @keyframes float-subtle {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(3deg); }
        }
        .animate-float {
            animation: float-subtle 5s ease-in-out infinite;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-700 { animation-delay: 0.7s; }
    </style>
</section>
