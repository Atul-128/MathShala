@extends('frontend.layouts.base')

@section('page-content')
    <!-- Hero Section (Premium Gallery) -->
    <section class="relative w-full h-[50vh] min-h-[400px] overflow-hidden bg-slate-900">
        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
             class="absolute inset-0 w-full h-full object-cover opacity-40 scale-105 animate-[kenburns_20s_ease-out_infinite]" alt="Gallery Banner" />
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-orange/20 to-brand-cyan/20 mix-blend-overlay"></div>
        
        <div class="relative z-10 h-full max-w-7xl mx-auto px-6 flex flex-col justify-center items-center text-center">
            <span class="inline-flex items-center gap-2 mb-6 px-5 py-2.5 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold text-[10px] tracking-[0.3em] uppercase rounded-full shadow-lg scroll-reveal opacity-0 translate-y-4">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-cyan animate-pulse"></span>
                Visual Journey
            </span>
            <h1 class="font-heading text-5xl md:text-7xl font-extrabold text-white leading-tight tracking-tight scroll-reveal opacity-0 translate-y-8 delay-100 drop-shadow-lg">
                Life at <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">MathShala.</span>
            </h1>
        </div>
    </section>

    <!-- Premium Hall of Fame Marquee -->
    <section class="py-16 bg-white overflow-hidden relative">
        <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px]"></div>

        <div class="max-w-7xl mx-auto px-6 mb-12 flex justify-between items-end relative z-10">
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-slate-50 rounded-full text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4 shadow-sm border border-slate-100">
                    <span class="w-1.5 h-1.5 bg-brand-cyan rounded-full"></span>
                    Our Pride
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-dark tracking-tight">Hall of <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan to-blue-500">Fame</span></h2>
            </div>
            <div class="hidden md:block h-px flex-grow mx-8 bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
        </div>

        <div class="relative flex overflow-x-hidden group py-4">
            <!-- Fade overlays for edges -->
            <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-white to-transparent z-10"></div>
            <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-white to-transparent z-10"></div>

            <!-- Marquee Container -->
            <div class="animate-marquee-left flex w-max whitespace-nowrap items-center hover:[animation-play-state:paused]">
                @foreach($performers->merge($performers) as $performer)
                <!-- Premium Result Item -->
                <div class="mx-6 flex shrink-0 min-w-[300px] items-center gap-6 group/item bg-slate-50 rounded-[2rem] p-4 pr-8 border border-slate-100 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.06)] hover:bg-white transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                    <div class="w-24 h-24 rounded-[1.5rem] p-1 bg-gradient-to-br from-brand-orange to-brand-cyan shadow-md overflow-hidden relative">
                        <div class="w-full h-full rounded-[1.25rem] bg-white overflow-hidden">
                            <img src="{{ asset('uploads/performers/'.$performer->image) }}" class="w-full h-full object-cover scale-100 group-hover/item:scale-110 transition-transform duration-700" alt="{{ $performer->name }}">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-xl text-brand-dark group-hover/item:text-brand-orange transition-colors tracking-tight">{{ $performer->name }}</span>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="px-3 py-1 bg-brand-cyan/10 text-brand-cyan font-bold text-[10px] uppercase tracking-widest rounded-full">{{ $performer->rank }}</span>
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-widest">{{ $performer->year }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Repeated for seamlessness -->
            <div class="animate-marquee-left flex w-max whitespace-nowrap items-center hover:[animation-play-state:paused]" aria-hidden="true">
                @foreach($performers->merge($performers) as $performer)
                <div class="mx-6 flex shrink-0 min-w-[300px] items-center gap-6 group/item bg-slate-50 rounded-[2rem] p-4 pr-8 border border-slate-100 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.06)] hover:bg-white transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                    <div class="w-24 h-24 rounded-[1.5rem] p-1 bg-gradient-to-br from-brand-orange to-brand-cyan shadow-md overflow-hidden relative">
                        <div class="w-full h-full rounded-[1.25rem] bg-white overflow-hidden">
                            <img src="{{ asset('uploads/performers/'.$performer->image) }}" class="w-full h-full object-cover scale-100 group-hover/item:scale-110 transition-transform duration-700" alt="{{ $performer->name }}">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-xl text-brand-dark group-hover/item:text-brand-cyan transition-colors tracking-tight">{{ $performer->name }}</span>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="px-3 py-1 bg-brand-orange/10 text-brand-orange font-bold text-[10px] uppercase tracking-widest rounded-full">{{ $performer->rank }}</span>
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-widest">{{ $performer->year }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Main Gallery Section -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-bl from-brand-cyan/5 to-transparent rounded-full blur-[100px] pointer-events-none transform translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-brand-orange/5 to-transparent rounded-full blur-[100px] pointer-events-none transform -translate-x-1/3 translate-y-1/3"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <!-- Filters -->
            <div class="flex flex-wrap justify-center p-2 bg-white rounded-full shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 w-max mx-auto mb-16 scroll-reveal opacity-0 translate-y-8">
                <button data-filter="all" class="gallery-filter px-6 py-2.5 m-0.5 rounded-full bg-brand-dark text-white font-bold text-xs uppercase tracking-widest shadow-sm transition-all duration-300">
                    All
                </button>
                <button data-filter="classrooms" class="gallery-filter px-6 py-2.5 m-0.5 rounded-full text-slate-500 hover:text-brand-dark font-medium hover:bg-slate-50 text-xs uppercase tracking-widest transition-all duration-300">
                    Classrooms
                </button>
                <button data-filter="events" class="gallery-filter px-6 py-2.5 m-0.5 rounded-full text-slate-500 hover:text-brand-dark font-medium hover:bg-slate-50 text-xs uppercase tracking-widest transition-all duration-300">
                    Events
                </button>
                <button data-filter="activities" class="gallery-filter px-6 py-2.5 m-0.5 rounded-full text-slate-500 hover:text-brand-dark font-medium hover:bg-slate-50 text-xs uppercase tracking-widest transition-all duration-300">
                    Activities
                </button>
            </div>

            <!-- Gallery Grid -->
            <div id="gallery-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($galleries as $gallery)
                <div class="gallery-card group bg-white rounded-[2rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_50px_rgb(0,0,0,0.1)] transition-all duration-500 scroll-reveal opacity-0 translate-y-12 overflow-hidden hover:-translate-y-2"
                     data-category="{{ $gallery->category }}">
                    
                    <div class="relative h-72 overflow-hidden bg-slate-100">
                        <img src="{{ asset('uploads/gallery/'.$gallery->image) }}" 
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
                             alt="{{ $gallery->title }}">
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                        
                        <!-- Premium Badge -->
                        <div class="absolute top-5 left-5 bg-white/20 backdrop-blur-md text-white border border-white/20 text-[10px] font-bold px-4 py-1.5 uppercase tracking-widest z-10 rounded-full shadow-lg">
                            {{ $gallery->category }}
                        </div>

                        <!-- Hover Icon -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-md text-white rounded-full flex items-center justify-center text-2xl shadow-xl border border-white/40 transform scale-50 group-hover:scale-100 transition-transform duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                        </div>

                        <!-- Title on image instead of separate bottom block -->
                        <div class="absolute bottom-6 left-6 right-6 z-10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="font-bold text-xl text-white tracking-tight drop-shadow-md">
                                {{ $gallery->title ?? 'Institute Life' }}
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.gallery-filter');
            const galleryCards = document.querySelectorAll('.gallery-card');

            // Set up reveal animation for gallery cards
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-12', 'translate-y-8', 'translate-y-4');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-reveal').forEach(el => {
                observer.observe(el);
            });

            // Filtering logic
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.getAttribute('data-filter');

                    // Update UI for buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-brand-dark', 'text-white', 'shadow-sm', 'font-bold');
                        btn.classList.add('text-slate-500', 'hover:text-brand-dark', 'hover:bg-slate-50', 'font-medium');
                    });
                    
                    button.classList.add('bg-brand-dark', 'text-white', 'shadow-sm', 'font-bold');
                    button.classList.remove('text-slate-500', 'hover:text-brand-dark', 'hover:bg-slate-50', 'font-medium');

                    // Filter Logic with smooth fade
                    galleryCards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        
                        card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.95)';
                        
                        setTimeout(() => {
                            if (filter === 'all' || category === filter) {
                                card.style.display = 'block';
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'scale(1)';
                                }, 50);
                            } else {
                                card.style.display = 'none';
                            }
                        }, 400);
                    });
                });
            });
        });
    </script>
@endsection
