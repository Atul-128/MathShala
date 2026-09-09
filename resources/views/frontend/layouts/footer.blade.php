    <!-- Premium Neo-Editorial Footer -->
    <footer id="contact" class="bg-brand-dark pt-20 pb-4 relative overflow-hidden">
        <!-- Background Accents -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-orange/5 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-brand-cyan/5 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Top Section: Brand & Contact -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 pb-8 border-b border-white/5">
                
                <!-- Brand Column -->
                <div class="lg:col-span-5">
                    <div class="flex items-center gap-4 mb-8 group cursor-pointer">
                        <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white p-1 rounded-full rotate-3 group-hover:rotate-0 transition-transform duration-500 shadow-solid-small overflow-hidden shrink-0 border-2 border-white/20">
                            <img src="{{ asset('images/mathshala.jpeg') }}" alt="MathShala Logo" class="w-full h-full object-cover scale-110">
                        </div>
                        <div>
                            <h2 class="text-3xl font-heading font-black text-white tracking-tighter uppercase leading-none">MathShala</h2>
                        </div>
                    </div>
                    <p class="text-white/60 font-medium leading-relaxed max-w-sm mb-10 text-lg">
                        MathShala bachho me <span class="text-white border-b-2 border-brand-orange">alpha numerical</span> aur <span class="text-white border-b-2 border-brand-cyan">mathematical skills</span> develop karne par kaam karta hai.
                    </p>
                    
                    <!-- Newsletter -->
                    <!-- <div class="relative max-w-md group">
                        <label class="block text-[10px] font-black text-white/40 uppercase tracking-[0.2em] mb-4">Join our strategy newsletter</label>
                        <form action="#" method="POST" class="flex p-1 bg-white/5 border border-white/10 rounded-2xl focus-within:border-brand-orange transition-all duration-500">
                            <input type="email" placeholder="Enter your academic email" 
                                class="bg-transparent px-5 py-3 text-white text-sm outline-none w-full placeholder:text-white/20">
                            <button type="submit" 
                                class="bg-brand-orange hover:bg-brand-cyan text-white font-black px-8 py-3 rounded-xl transition-all duration-300 text-xs uppercase tracking-widest shadow-lg active:scale-95">
                                Join
                            </button>
                        </form>
                    </div> -->
                </div>

                <!-- Navigation & Links -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-12 sm:gap-8">
                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8 relative inline-block">
                            Navigation
                            <span class="absolute -bottom-2 left-0 w-8 h-0.5 bg-brand-orange"></span>
                        </h4>
                        <ul class="space-y-4">
                            <li><a href="{{ route('home') }}" class="text-white/50 hover:text-white transition-colors text-sm font-bold flex items-center gap-2 group"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>Home</a></li>
                            <li><a href="{{ route('about') }}" class="text-white/50 hover:text-white transition-colors text-sm font-bold flex items-center gap-2 group"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>Our Mission</a></li>
                            <li><a href="{{ route('course') }}" class="text-white/50 hover:text-white transition-colors text-sm font-bold flex items-center gap-2 group"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>Courses</a></li>
                            <li><a href="{{ route('gallery') }}" class="text-white/50 hover:text-white transition-colors text-sm font-bold flex items-center gap-2 group"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>Gallery</a></li>
                        </ul>
                    </div>

                    <!-- Quick Connect -->
                    <div>
                        <h4 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8 relative inline-block">
                            Social Media
                            <span class="absolute -bottom-2 left-0 w-8 h-0.5 bg-brand-cyan"></span>
                        </h4>
                        <ul class="space-y-4 text-sm font-bold">
                            <li><a href="#" class="text-white/50 hover:text-white transition-colors flex items-center gap-2 group"><i class="fab fa-instagram text-brand-orange"></i> Instagram</a></li>
                            <li><a href="#" class="text-white/50 hover:text-white transition-colors flex items-center gap-2 group"><i class="fab fa-linkedin-in text-brand-orange"></i> LinkedIn</a></li>
                            <li><a href="#" class="text-white/50 hover:text-white transition-colors flex items-center gap-2 group"><i class="fab fa-twitter text-brand-orange"></i> Twitter (X)</a></li>
                            <li><a href="#" class="text-white/50 hover:text-white transition-colors flex items-center gap-2 group"><i class="fab fa-youtube text-brand-orange"></i> YouTube</a></li>
                        </ul>
                    </div>

                    <!-- Official Contact -->
                    <div class="sm:col-span-1">
                        <h4 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8 relative inline-block">
                            Get In Touch
                            <span class="absolute -bottom-2 left-0 w-8 h-0.5 bg-brand-orange"></span>
                        </h4>
                        <div class="space-y-6">
                            <!-- <div>
                                <span class="block text-[10px] text-brand-orange font-black uppercase mb-1">Company Name</span>
                                <p class="text-white font-heading text-lg font-black uppercase tracking-tight">MathShala</p>
                            </div> -->
                            <div>
                                <span class="block text-[10px] text-brand-orange font-black uppercase mb-1">Hotline / Contact</span>
                                <a href="tel:+917827097791" class="text-white font-heading text-xl font-black hover:text-brand-orange transition-colors">
                                    +91 91997 54577
                                </a>
                            </div>
                            <div>
                                <span class="block text-[10px] text-brand-orange font-black uppercase mb-1">Email Support</span>
                                <a href="mailto:info@thevisionclasses.com" class="text-white font-heading text-sm font-black hover:text-brand-orange transition-colors break-words">
                                    info@mathshala.com
                                </a>
                            </div>
                            <div>
                                <span class="block text-[10px] text-brand-orange font-black uppercase mb-1">Visit Us</span>
                                <p class="text-white/60 text-xs font-medium leading-relaxed">
                                    Strategic Learning Hub
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section: Legal & Credits -->
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex flex-col md:flex-row items-center gap-4 md:gap-8 text-[10px] font-black uppercase tracking-[0.3em] text-white/30">
                    <p>&copy; 2026 MathShala. All Rights Reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
                
                <div class="group flex items-center gap-3 py-2 px-6 bg-white/5 border border-white/10 rounded-full">
                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-white/40 group-hover:text-white transition-colors">Built for High Impact</span>
                    <div class="w-1 h-1 bg-brand-orange rounded-full animate-pulse"></div>
                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-white/40">v2.0</span>
                </div>
            </div>
        </div>
    </footer>
