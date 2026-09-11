@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section -->
    <section class="relative w-full pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden bg-brand-dark">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0 opacity-20">
            <div class="absolute top-0 right-0 w-96 h-96 bg-brand-orange rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-cyan rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-orange/20 text-brand-orange font-semibold text-sm mb-6 border border-brand-orange/30">
                Offline Center Programs
            </span>
            <h1 class="font-heading text-4xl sm:text-6xl font-extrabold text-white mb-6 leading-tight">
                Unlock Your School Student's <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Alpha-Numerical</span> Potential
            </h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto font-light leading-relaxed mb-10">
                Experience MathShala's creative classroom methodology that develops strong mathematical intelliegence and analytical skills in young minds.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#trial-form" class="px-8 py-4 bg-gradient-to-r from-brand-orange to-brand-cyan text-brand-dark font-bold rounded-full hover:shadow-[0_0_30px_rgba(255,107,0,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                    Register for a Demo Class
                </a>
            </div>
        </div>
    </section>

    <!-- Core Philosophy Section -->
    <section class="py-20 bg-white relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="font-heading text-3xl md:text-5xl font-bold text-brand-dark mb-6">Building <span class="text-brand-orange">Mathematical Skills</span> Early</h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        MathShala bachho me alpha numerical aur mathematical skills develop karta hai. Our Hybrid learning programs are designed to provide a highly interactive and engaging environment where children learn by doing.
                    </p>
                    <ul class="space-y-4 text-slate-600">
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-orange/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span><strong>Innovative Activities:</strong> Creative teaching learing matterial that make Mathematical Calculations easy, clear and  understandable.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-cyan/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span><strong>Peer Group Interaction:</strong> Collaborative problem-solving that improves confidence and participate learning skills.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-brand-orange/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span><strong>Personalized Attention:</strong> Small group settings ensure all participating learners gets the desered attention and hand-on support.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-gradient-to-tr from-brand-orange/20 to-brand-cyan/20 rounded-3xl transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="{{ asset('images/school.jpeg') }}" alt="Children learning math" class="rounded-3xl shadow-2xl object-cover w-full h-[500px]">
                    
                    <!-- Floating badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4 animate-bounce-slow">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-brand-dark">100% Focus</p>
                            <p class="text-sm text-slate-500">On core fundamentals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Demo Section -->
    <section class="py-20 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-heading text-3xl md:text-5xl font-bold text-brand-dark mb-4">See Our Classrooms in <span class="text-brand-cyan">Action</span></h2>
            <p class="text-slate-600 max-w-2xl mx-auto mb-12">Watch how we make numbers come alive for young learners.</p>
            
            <div class="relative max-w-4xl mx-auto rounded-3xl overflow-hidden shadow-2xl aspect-video border-8 border-white bg-slate-200" data-aos="zoom-in">
                <!-- YouTube Video Embed -->
                <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/71W1AfhfeUM?si=vJ5qd3qM9YikGVsm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-heading text-3xl md:text-5xl font-bold text-brand-dark mb-4">Happy <span class="text-brand-orange">Learners</span></h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Glimpses of our vibrant offline ecosystem.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-2xl overflow-hidden shadow-lg h-64 group" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/pic2.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Student learning">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg h-64 group" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/pic4.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Classroom activity">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg h-64 group" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/pic1.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Math practice">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action / Trial Booking -->
    <section id="trial-form" class="py-24 bg-gradient-to-b from-brand-dark to-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-4xl bg-brand-orange/10 blur-[100px] rounded-full pointer-events-none"></div>
        </div>
        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 class="font-heading text-3xl md:text-5xl font-bold text-white mb-6">Ready to Start learning in MathShala way?</h2>
            <p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">Register for a DEMO session to experience MathShala creative pedogogy.</p>
            
            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-2xl text-left max-w-2xl mx-auto">
                <form action="{{ url('/enroll') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="course" value="School Offline Trial">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Child's Name</label>
                            <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow" placeholder="e.g. Rahul Sharma">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Mobile Number</label>
                            <input type="tel" name="phone" required pattern="[0-9]{10}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow" placeholder="10-digit number">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Email Address</label>
                        <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-slate-800 focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange transition-shadow" placeholder="email@example.com">
                    </div>
                    
                    <button type="submit" class="w-full py-4 bg-brand-orange text-white font-bold rounded-xl hover:bg-brand-orange/90 transition-colors shadow-lg hover:shadow-brand-orange/30">
                        DEMO CLASS
                    </button>
                    <p class="text-xs text-center text-slate-400 mt-4">By booking, you agree to receive communication from our academic counselors.</p>
                </form>
            </div>
        </div>
    </section>

@endsection
