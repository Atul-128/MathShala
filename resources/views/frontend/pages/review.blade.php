@extends('frontend.layouts.base')
@push('title')
    <title>MathShala - Review</title>
@endpush
@section('page-content')

     <!-- Elegant Testimonials Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Soft background blur elements -->
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-b from-brand-cyan/5 to-transparent rounded-full -translate-y-1/2 translate-x-1/3 blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-t from-brand-orange/5 to-transparent rounded-full translate-y-1/3 -translate-x-1/4 blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-24 scroll-reveal opacity-0 translate-y-8 transition-all duration-700">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-slate-50 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-6 shadow-sm border border-slate-100">
                    <span class="w-1.5 h-1.5 bg-brand-orange rounded-full animate-pulse"></span>
                    Voices of Success
                </div>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-brand-dark tracking-tight">
                    What Parents & <br/> <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-red-500">Students Say</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-16 gap-x-8 mt-10">
                @forelse($testimonials as $testimonial)
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-{{ ($loop->index + 1) * 100 }}">
                    
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        
                        <!-- Avatar -->
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="{{ asset('uploads/testimonials/'.$testimonial->image) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $testimonial->name }}">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-orange to-red-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "{{ $testimonial->quote }}"
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">{{ $testimonial->name }}</h4>
                        <p class="text-brand-orange font-bold text-[10px] uppercase tracking-widest mt-1">{{ $testimonial->rank ?? 'Learner' }} {{ $testimonial->year }}</p>
                    </div>
                </div>
                @empty
                <!-- Testimonial 1 (Fallback) -->
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-100">
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Amit Sharma">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-orange to-red-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "MathShala has completely transformed how my son approaches mathematics. The Active Learning Program (ALP) helped him grasp core concepts effortlessly. We are so grateful to the mentors."
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">Amit Sharma</h4>
                        <p class="text-brand-orange font-bold text-[10px] uppercase tracking-widest mt-1">Parent, Class 5</p>
                    </div>
                </div>

                <!-- Testimonial 2 (Fallback) -->
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-200">
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Sneha Verma">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-cyan to-blue-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "The structured curriculum and step-by-step progression at MathShala are exactly what my daughter needed. Her confidence in solving complex sums has skyrocketed within months."
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">Sneha Verma</h4>
                        <p class="text-brand-cyan font-bold text-[10px] uppercase tracking-widest mt-1">Parent, Class 8</p>
                    </div>
                </div>

                <!-- Testimonial 3 (Fallback) -->
                <div class="relative group scroll-reveal opacity-0 translate-y-12 transition-all duration-700 delay-300">
                    <div class="relative bg-white border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] group-hover:shadow-[0_20px_50px_rgb(0,0,0,0.08)] rounded-[2.5rem] p-8 pt-16 flex flex-col items-center text-center h-full transition-all duration-500 hover:-translate-y-3">
                        <div class="absolute -top-12 left-1/2 -translate-x-1/2">
                            <div class="w-24 h-24 rounded-full border-[6px] border-white shadow-xl overflow-hidden bg-slate-50 relative z-10">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Rahul Gupta">
                            </div>
                            <div class="absolute -bottom-2 right-0 w-8 h-8 bg-gradient-to-br from-brand-orange to-red-500 text-white rounded-full flex items-center justify-center shadow-lg z-20">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/></svg>
                            </div>
                        </div>
                        
                        <p class="text-slate-500 font-normal leading-relaxed mb-8 mt-4 flex-grow">
                            "Before joining MathShala, calculations felt like a chore. Now, with their innovative teaching methods, I actually enjoy solving problems and challenging myself every day."
                        </p>
                        
                        <h4 class="font-bold text-brand-dark text-lg tracking-tight">Rahul Gupta</h4>
                        <p class="text-brand-orange font-bold text-[10px] uppercase tracking-widest mt-1">ALP Learner</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>



@endsection