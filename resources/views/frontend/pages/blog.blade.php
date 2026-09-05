@extends('frontend.layouts.base')
@php use Illuminate\Support\Str; @endphp

@push('title')
    <title>MathShala </title>
@endpush

@section('page-content')

<section class="relative py-20 lg:py-28 bg-slate-50 overflow-hidden font-sans">
  
  <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-orange/20 rounded-full mix-blend-multiply filter blur-[100px] animate-[pulse_8s_ease-in-out_infinite]"></div>
    <div class="absolute top-[40%] -right-24 w-96 h-96 bg-brand-cyan/20 rounded-full mix-blend-multiply filter blur-[100px] animate-[pulse_10s_ease-in-out_infinite_reverse]"></div>
    <div class="absolute -bottom-24 left-[20%] w-[40rem] h-[40rem] bg-brand-orange/10 rounded-full mix-blend-multiply filter blur-[120px] animate-[pulse_12s_ease-in-out_infinite]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
      <div class="inline-flex items-center justify-center gap-2 px-4 py-1.5 rounded-full bg-white border border-brand-orange/10 shadow-sm mb-5">
        <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
        <span class="text-xs font-bold uppercase tracking-widest text-brand-orange">Latest Insights</span>
      </div>
      
      <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-6">
        Our Latest <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Blogs & Updates</span>
      </h2>
      
      <p class="text-lg text-slate-600 font-light leading-relaxed">
        Stay ahead of the curve with expert strategies, preparation tips, and the latest updates for RAILWAY,CGL,CHL,GDS examinations from MathShala.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <article class="group flex flex-col bg-white rounded-[2rem] p-2.5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-slate-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 fade-in-up">
        <div class="relative w-full overflow-hidden rounded-[1.5rem] aspect-[16/10]">
          <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="GD Strategy" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-indigo-700 uppercase tracking-wide shadow-sm">
            RAILWAY Strategy
          </span>
        </div>
        
        <div class="flex flex-col flex-1 px-4 py-6">
          <div class="flex items-center gap-3 text-xs text-slate-500 font-medium mb-3">
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Oct 12, 2024</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg> Senior Faculty</span>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-brand-orange transition-colors duration-300 line-clamp-2">
            How to Master GD Optional for RAILWAY exams
          </h3>
          
          <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed mb-6">
            A comprehensive guide to scoring 300+ in GD optional. Discover the best booklist, answer writing techniques, and proven time management strategies used by toppers.
          </p>
          
          <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="#" class="group/link inline-flex items-center gap-2 text-sm font-bold text-brand-orange hover:text-brand-cyan transition-colors">
              Read Full Article 
              <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="group flex flex-col bg-white rounded-[2rem] p-2.5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-slate-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 fade-in-up" style="transition-delay: 100ms;">
        <div class="relative w-full overflow-hidden rounded-[1.5rem] aspect-[16/10]">
          <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="JEE Preparation" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-orange-600 uppercase tracking-wide shadow-sm">
            RAILWAY Prep
          </span>
        </div>
        
        <div class="flex flex-col flex-1 px-4 py-6">
          <div class="flex items-center gap-3 text-xs text-slate-500 font-medium mb-3">
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Oct 10, 2024</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg> Mentorship Cell</span>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300 line-clamp-2">
            5 Proven Study Techniques to Crack CGL,CHSL,GDS in 1st Attempt
          </h3>
          
          <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed mb-6">
            Cracking CGL,CHSL,GDS requires more than just hard work. Learn the scientifically proven study methods, revision tactics, and test-taking strategies used by top rankers to maximize your score.
          </p>
          
          <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="#" class="group/link inline-flex items-center gap-2 text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
              Read Full Article 
              <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="group flex flex-col bg-white rounded-[2rem] p-2.5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-slate-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 fade-in-up" style="transition-delay: 200ms;">
        <div class="relative w-full overflow-hidden rounded-[1.5rem] aspect-[16/10]">
          <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="CGL Guidance" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-teal-600 uppercase tracking-wide shadow-sm">
          GDS Guidance
          </span>
        </div>
        
        <div class="flex flex-col flex-1 px-4 py-6">
          <div class="flex items-center gap-3 text-xs text-slate-500 font-medium mb-3">
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Oct 05, 2024</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg> Dr. Anjali</span>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300 line-clamp-2">
            Balancing 12th Board Exams and GDS  Preparation
          </h3>
          
          <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed mb-6">
            Struggling to manage your board exams along with GDS prep? Here is a structured timetable and priority list to help you maintain balance and excel in both arenas.
          </p>
          
          <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="#" class="group/link inline-flex items-center gap-2 text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
              Read Full Article 
              <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="group flex flex-col bg-white rounded-[2rem] p-2.5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-slate-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 fade-in-up">
        <div class="relative w-full overflow-hidden rounded-[1.5rem] aspect-[16/10]">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Study Tips" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-pink-600 uppercase tracking-wide shadow-sm">
            Study Tips
          </span>
        </div>
        
        <div class="flex flex-col flex-1 px-4 py-6">
          <div class="flex items-center gap-3 text-xs text-slate-500 font-medium mb-3">
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Sep 28, 2024</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg> MathShala</span>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300 line-clamp-2">
            The Art of Making Highly Effective Revision Notes
          </h3>
          
          <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed mb-6">
            Your notes are your best friend during the final weeks of preparation. Learn how to create crisp, visual, and highly effective short notes for quick and efficient revision.
          </p>
          
          <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="#" class="group/link inline-flex items-center gap-2 text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
              Read Full Article 
              <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="group flex flex-col bg-white rounded-[2rem] p-2.5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-slate-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 fade-in-up" style="transition-delay: 100ms;">
        <div class="relative w-full overflow-hidden rounded-[1.5rem] aspect-[16/10]">
          <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Motivation" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-amber-600 uppercase tracking-wide shadow-sm">
            Motivation
          </span>
        </div>
        
        <div class="flex flex-col flex-1 px-4 py-6">
          <div class="flex items-center gap-3 text-xs text-slate-500 font-medium mb-3">
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Sep 15, 2024</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg> Counseling Cell</span>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300 line-clamp-2">
            Overcoming Burnout During Long Preparation Phases
          </h3>
          
          <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed mb-6">
            Continuous study for competitive exams can lead to exhaustion. Understand the early signs of burnout and explore practical mindfulness routines to stay focused and energized.
          </p>
          
          <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="#" class="group/link inline-flex items-center gap-2 text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
              Read Full Article 
              <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </article>

      <article class="group flex flex-col bg-white rounded-[2rem] p-2.5 shadow-[0_8px_30px_rgb(0,0,0,0.04)] ring-1 ring-slate-100 hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-2 transition-all duration-500 fade-in-up" style="transition-delay: 200ms;">
        <div class="relative w-full overflow-hidden rounded-[1.5rem] aspect-[16/10]">
          <img src="https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="RAILWAY Insights" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <span class="absolute top-4 left-4 inline-flex items-center px-3 py-1 rounded-full bg-white/95 backdrop-blur-sm text-xs font-bold text-blue-600 uppercase tracking-wide shadow-sm">
             RAILWAY Insights
          </span>
        </div>
        
        <div class="flex flex-col flex-1 px-4 py-6">
          <div class="flex items-center gap-3 text-xs text-slate-500 font-medium mb-3">
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Sep 02, 2024</span>
            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg> Academic Head</span>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300 line-clamp-2">
            Decoding the Changing Pattern of CGL,CHSL,GDS
          </h3>
          
          <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed mb-6">
            The CGL,CHSL,GDS paradigm is shifting rapidly. Analyze the recent trends, understand the increasing importance of CSAT, and learn how to adapt your preparation strategy accordingly.
          </p>
          
          <div class="mt-auto pt-4 border-t border-slate-100">
            <a href="#" class="group/link inline-flex items-center gap-2 text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
              Read Full Article 
              <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>
      </article>

    </div>

    <div class="mt-20 flex justify-center fade-in-up">
      <a href="#" class="inline-flex items-center gap-3 rounded-full bg-gradient-to-r from-brand-orange to-brand-cyan px-10 py-4 text-base font-bold text-white shadow-lg shadow-brand-orange/30 hover:shadow-brand-orange/50 transition-all duration-300 transform hover:-translate-y-1">
        View All Blogs
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>

  </div>
</section>

<style>
  /* Base state for scroll animation */
  .fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
  }
  /* Active state triggered by JS */
  .fade-in-up.is-visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.fade-in-up');
    
    // Intersection Observer to trigger animations on scroll
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target); // Optional: only animate once
        }
      });
    }, {
      root: null,
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px"
    });

    elements.forEach(el => observer.observe(el));
  });
</script>

@endsection
