@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Contact) -->
    <section class="relative w-full h-[50vh] min-h-[400px] overflow-hidden bg-brand-dark">
        <img src="{{ $site_assets['contact_hero_banner'] ?? 'https://images.unsplash.com/photo-1423666639041-f56000c27a9a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80' }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-30 filter grayscale" alt="Contact Banner" />
        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/80 to-transparent"></div>
        
        <div class="relative z-10 h-full max-w-7xl mx-auto px-6 flex flex-col justify-center items-center text-center">
            <span class="inline-block mb-4 px-4 py-1.5 bg-brand-cyan text-white font-bold text-xs tracking-[0.3em] rounded-sm scroll-reveal opacity-0 translate-y-4">
                Get in Touch
            </span>
            <h1 class="font-heading text-5xl md:text-7xl font-black text-white leading-tight tracking-tight scroll-reveal opacity-0 translate-y-8 delay-100">
                Connect with <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Excellence.</span>
            </h1>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-24 bg-brand-bg relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-32">
                <!-- Location -->
                <div class="bg-white rounded-[2rem] p-8 sm:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 group">
                    <div class="w-16 h-16 bg-brand-cyan/10 text-brand-cyan rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-brand-cyan group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="font-black text-2xl text-brand-dark mb-4 tracking-tight">Visit Campus</h3>
                    <p class="text-brand-dark/60 font-medium leading-relaxed">
                        74, Ground Floor, Near Batra Medical, Old Rajinder Nagar, New Delhi
                    </p>
                </div>

                <!-- Call -->
                <div class="bg-gradient-to-br from-brand-orange to-[#ff4500] rounded-[2rem] p-8 sm:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 delay-100 group relative overflow-hidden">
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md text-white rounded-2xl flex items-center justify-center mb-8 relative z-10 group-hover:scale-110 transition-transform duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h3 class="font-black text-2xl text-white mb-4 tracking-tight relative z-10">Call Us</h3>
                    <p class="text-white/90 font-medium leading-relaxed mb-6 relative z-10">
                        <a href="tel:+919199754577" class="hover:text-white transition-colors text-xl">+91 91997 54577</a>
                    </p>
                    <span class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-md text-white text-xs font-bold uppercase tracking-widest rounded-full relative z-10">Mon-Sat, 9AM-6PM</span>
                </div>

                <!-- Email -->
                <div class="bg-white rounded-[2rem] p-8 sm:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 scroll-reveal opacity-0 translate-y-12 delay-200 group">
                    <div class="w-16 h-16 bg-brand-cyan/10 text-brand-cyan rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-brand-cyan group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-black text-2xl text-brand-dark mb-4 tracking-tight">Send Email</h3>
                    <p class="text-brand-dark/60 font-medium leading-relaxed break-words mb-6">
                        <a href="mailto:info@mathshala.com" class="hover:text-brand-cyan transition-colors text-lg">info@mathshala.com</a>
                    </p>
                    <span class="inline-block px-4 py-1.5 bg-brand-cyan/10 text-brand-cyan text-xs font-bold uppercase tracking-widest rounded-full">Typical reply: 2 hours</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-1/2 left-0 w-64 h-64 bg-brand-orange/5 rounded-full blur-[80px] -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand-cyan/5 rounded-full blur-[100px] translate-y-1/3 translate-x-1/3 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Content -->
                <div class="scroll-reveal opacity-0 -translate-x-12 transition-all duration-1000">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-bg rounded-full text-xs font-bold text-brand-cyan uppercase tracking-widest mb-6 shadow-sm">
                        <span class="w-2 h-2 bg-brand-cyan rounded-full animate-pulse"></span>
                        Message Us
                    </div>
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-brand-dark mb-8 leading-tight tracking-tight">
                        Have a Question? <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-[#ff4500]">Ask Away.</span>
                    </h2>
                    <p class="text-brand-dark/60 text-lg sm:text-xl font-medium mb-12 leading-relaxed max-w-lg">
                        Have specific questions about our methodology, learning modules, or the enrollment process? Fill out the form, and our mentors will guide you immediately.
                    </p>
                    
                    <div class="relative w-full h-56 rounded-[2rem] bg-gradient-to-br from-brand-bg to-white border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden flex items-center justify-center group">
                        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03]"></div>
                        <!-- Animated glowing orb -->
                        <div class="absolute w-32 h-32 bg-brand-orange/20 rounded-full blur-3xl group-hover:scale-150 group-hover:bg-brand-cyan/20 transition-all duration-1000"></div>
                        <span class="font-black text-5xl sm:text-6xl text-transparent bg-clip-text bg-gradient-to-r from-brand-dark/10 to-brand-dark/5 uppercase tracking-[0.3em] select-none relative z-10 transition-all duration-700 group-hover:from-brand-dark/20 group-hover:to-brand-dark/10">MathShala</span>
                    </div>
                </div>

                <!-- Form -->
                <div class="bg-white rounded-[2rem] p-8 sm:p-10 lg:p-12 shadow-[0_20px_60px_rgb(0,0,0,0.08)] border border-gray-100 scroll-reveal opacity-0 translate-x-12 transition-all duration-1000 relative overflow-hidden">
                    <!-- Form Header Accent -->
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-brand-orange to-brand-cyan"></div>
                    
                    <h3 class="font-black text-2xl sm:text-3xl text-brand-dark mb-8 tracking-tight">Send Message</h3>
                    
                    <form action="{{ route('enroll.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-brand-dark/60 uppercase tracking-wider mb-2 ml-1">Full Name</label>
                                <input type="text" name="name" required placeholder="John Doe" class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-brand-orange focus:ring-4 focus:ring-brand-orange/10 outline-none font-medium text-brand-dark transition-all placeholder:text-gray-400">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-brand-dark/60 uppercase tracking-wider mb-2 ml-1">Phone Number</label>
                                <input type="tel" name="phone" required placeholder="+91 98765 43210" class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-brand-orange focus:ring-4 focus:ring-brand-orange/10 outline-none font-medium text-brand-dark transition-all placeholder:text-gray-400">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand-dark/60 uppercase tracking-wider mb-2 ml-1">Email Address</label>
                            <input type="email" name="email" required placeholder="john@example.com" class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-brand-orange focus:ring-4 focus:ring-brand-orange/10 outline-none font-medium text-brand-dark transition-all placeholder:text-gray-400">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand-dark/60 uppercase tracking-wider mb-2 ml-1">Interested Module</label>
                            <div class="relative">
                                <select name="course" required class="w-full px-5 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:border-brand-orange focus:ring-4 focus:ring-brand-orange/10 outline-none font-medium text-brand-dark transition-all appearance-none cursor-pointer">
                                    <option value="" disabled selected>Select a learning module</option>
                                    <option value="Primary Mathematics (CLP)">Primary Mathematics (CLP)</option>
                                    <option value="Secondary Mathematics (BLP)">Secondary Mathematics (BLP)</option>
                                    <option value="Advanced Mathematics (ALP)">Advanced Mathematics (ALP)</option>
                                    <option value="Demo Class">Request Demo Class</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full py-4 mt-4 bg-brand-dark text-white font-bold rounded-xl shadow-[0_8px_20px_rgb(0,0,0,0.15)] hover:shadow-[0_8px_25px_rgb(0,0,0,0.25)] hover:-translate-y-1 transition-all duration-300 flex justify-center items-center gap-2 group">
                            <span>Submit Message</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-24 bg-brand-bg overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-reveal opacity-0 translate-y-12">
            <div class="relative w-full h-[500px] sm:h-[600px] rounded-[2rem] border border-gray-100 shadow-[0_20px_60px_rgb(0,0,0,0.08)] overflow-hidden group">
                <!-- Location Ping (Highlighting the marked area) -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-30 pointer-events-none">
                    <div class="relative flex items-center justify-center">
                        <div class="absolute w-12 h-12 bg-brand-orange/40 rounded-full animate-ping"></div>
                        <div class="absolute w-8 h-8 bg-brand-orange/60 rounded-full animate-pulse"></div>
                        <div class="w-4 h-4 bg-brand-orange border-2 border-white rounded-full shadow-lg"></div>
                        
                        <!-- Floating Tooltip -->
                        <div class="absolute bottom-full mb-4 left-1/2 -translate-x-1/2 whitespace-nowrap bg-brand-dark text-white text-xs font-bold px-4 py-2 uppercase tracking-widest rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.15)] transform -translate-y-2 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                            MathShala
                        </div>
                    </div>
                </div>

                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.114827184288!2d77.178357!3d28.64366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d029c5f402ed3%3A0x9eaee8b64e832070!2sOld%20Rajinder%20Nagar%2C%20Rajinder%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110060!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                    width="100%" 
                    height="100%" 
                    style="border:0; filter: grayscale(0.8) contrast(1.1) brightness(0.95);" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="group-hover:filter-none transition-all duration-1000 scale-[1.02] group-hover:scale-100">
                </iframe>
                
                <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm text-brand-dark px-6 py-4 rounded-xl shadow-lg font-black uppercase tracking-widest text-xs z-20">
                    Campus Location
                </div>
            </div>
        </div>
    </section>
@endsection
