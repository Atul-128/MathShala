    <!-- Floating Navigation -->
    <nav class="fixed top-0 w-full z-50 px-6 py-5 flex justify-between items-center transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto w-full flex justify-between items-center bg-white/95 text-brand-dark backdrop-blur-md border border-black/5 px-6 py-3 rounded-full shadow-lg">
            <a href="{{ route('home') }}" class="text-2xl font-heading font-extrabold tracking-tight flex items-center gap-3">
                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full overflow-hidden shadow-sm shrink-0 border-2 border-brand-orange/20">
                    <img src="{{ asset('images/mathshala.jpeg') }}" class="w-full h-full object-cover scale-110">
                </div>
                <span class="hidden md:inline-block">MathShala</span>
            </a>
            
            <div class="hidden lg:flex space-x-8 text-sm font-semibold text-brand-dark/80">
                <a href="{{ route('home') }}" class="hover:text-brand-orange transition-colors">Home</a>
                <a href="{{ route('about') }}" class="hover:text-brand-orange transition-colors">About</a>
                <div class="relative group">
                    <a href="{{ route('course') }}" class="hover:text-brand-orange transition-colors flex items-center gap-1"> 
                        Courses
                        <!-- <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg> -->
                    </a>
                    <!-- <div class="absolute top-full left-0 mt-4 w-48 bg-white border border-black/5 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 overflow-hidden text-brand-dark">
                        <a href="{{ route('railway') }}" class="block px-6 py-3 text-sm hover:bg-black/5 transition-colors">Mathematics</a>
                        <a href="{{ route('gd') }}" class="block px-6 py-3 text-sm hover:bg-black/5 transition-colors">G.K & G.S</a>
                        <a href="{{ route('cgl') }}" class="block px-6 py-3 text-sm hover:bg-black/5 transition-colors">Science</a>
                        {{-- Add more course routes as needed --}}
                    </div> -->
                </div>
                <a href="{{ route('gallery') }}" class="hover:text-brand-orange transition-colors">Gallery</a>
                <a href="{{ route('contact') }}" class="hover:text-brand-orange transition-colors">Contact</a>
                <div class="relative group">
                    <a href="#" class="hover:text-brand-orange transition-colors flex items-center gap-1"> 
                        Free Trial
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div class="absolute top-full left-0 mt-4 w-48 bg-white border border-black/5 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 overflow-hidden text-brand-dark">
                        <a href="{{ route('free-trial.school') }}" class="block px-6 py-3 text-sm hover:bg-black/5 transition-colors">For School</a>
                        <a href="{{ route('free-trial.home') }}" class="block px-6 py-3 text-sm hover:bg-black/5 transition-colors">For Home</a>
                        {{-- Add more course routes as needed --}}
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('enroll') }}" class="hidden sm:inline-block px-6 py-2.5 bg-brand-dark text-white rounded-full text-sm font-bold hover:bg-brand-orange transition-colors">
                    Enroll Now
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-brand-dark focus:outline-none">
                    <svg id="icon-menu" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="icon-close" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white/95 backdrop-blur-xl hidden flex-col justify-center items-center p-8 transition-all duration-500 opacity-0 translate-y-10">
        <div class="flex flex-col items-center space-y-8 text-2xl font-heading font-black text-brand-dark uppercase tracking-widest">
            <a href="{{ route('home') }}" class="hover:text-brand-orange transition-colors">Home</a>
            <a href="{{ route('about') }}" class="hover:text-brand-orange transition-colors">About</a>
            <a href="{{ route('course') }}" class="hover:text-brand-orange transition-colors">Courses</a>
            <a href="{{ route('gallery') }}" class="hover:text-brand-orange transition-colors">Gallery</a>
            <a href="{{ route('contact') }}" class="hover:text-brand-orange transition-colors">Contact</a>
            
            <div class="flex flex-col items-center w-full">
                <button onclick="document.getElementById('mobile-free-trial-submenu').classList.toggle('hidden'); document.getElementById('mobile-free-trial-submenu').classList.toggle('flex'); this.querySelector('svg').classList.toggle('rotate-180')" class="hover:text-brand-orange transition-colors flex items-center gap-2 focus:outline-none">
                    Free Trial
                    <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div id="mobile-free-trial-submenu" class="hidden flex-col items-center space-y-5 mt-6 text-xl text-slate-500 font-bold">
                    <a href="{{ route('free-trial.school') }}" class="hover:text-brand-orange transition-colors">For School</a>
                    <a href="{{ route('free-trial.home') }}" class="hover:text-brand-orange transition-colors">For Home</a>
                </div>
            </div>

            <a href="{{ route('enroll') }}" class="px-8 py-4 bg-brand-orange text-white rounded-full text-lg font-bold shadow-lg">
                Enroll Now
            </a>
        </div>
    </div>
