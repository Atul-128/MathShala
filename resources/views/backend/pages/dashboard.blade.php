@extends('backend.layouts.app')

@section('content')

    <main class="flex-1 overflow-y-auto p-6 sm:p-8 md:p-12 custom-scrollbar relative bg-transparent z-10">
        
        <div class="absolute top-0 left-0 w-full h-72 bg-gradient-to-b from-brand-cyan/5 to-transparent -z-10 pointer-events-none"></div>

        <div class="mb-12 flex justify-between items-end">
            <div>
                <h2 class="text-4xl font-extrabold text-brand-dark tracking-tight">Command Center</h2>
                <p class="text-slate-400 text-[10px] mt-2 font-bold uppercase tracking-widest">MathShala Management System</p>
            </div>
            <div class="hidden md:block">
                <span class="px-4 py-2 bg-white border border-slate-100 rounded-xl text-xs font-black text-brand-dark shadow-sm uppercase tracking-widest">
                    {{ date('D, d M Y') }}
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            
            <!-- Enrollments -->
            <div class="bg-white rounded-[2.5rem] p-8 border border-slate-50 shadow-[0_4px_30px_rgb(0,0,0,0.02)] transform hover:-translate-y-1 transition-all duration-500 group">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 mb-2 uppercase tracking-[0.2em]">Inquiries</p>
                        <h3 class="text-4xl font-black text-brand-dark"> {{ number_format($totalEnrollments) }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-brand-orange/10 text-brand-orange rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-brand-orange group-hover:text-white transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                    </div>
                </div>
                <div class="mt-6 flex items-center gap-2">
                    <span class="text-[10px] font-black text-emerald-500 bg-emerald-50 px-2 py-0.5 rounded uppercase tracking-widest">Active</span>
                </div>
            </div>

            <!-- Courses -->
            <div class="bg-white rounded-[2.5rem] p-8 border border-slate-50 shadow-[0_4px_30px_rgb(0,0,0,0.02)] transform hover:-translate-y-1 transition-all duration-500 group">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 mb-2 uppercase tracking-[0.2em]">Curriculum</p>
                        <h3 class="text-4xl font-black text-brand-dark">{{ number_format($totalCourses ?? 0) }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-brand-cyan/10 text-brand-cyan rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-brand-cyan group-hover:text-white transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                </div>
                <div class="mt-6 flex items-center gap-2">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest italic">Live Content</span>
                </div>
            </div>

            <!-- Faculty -->
            <div class="bg-white rounded-[2.5rem] p-8 border border-slate-50 shadow-[0_4px_30px_rgb(0,0,0,0.02)] transform hover:-translate-y-1 transition-all duration-500 group">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 mb-2 uppercase tracking-[0.2em]">Mentors</p>
                        <h3 class="text-4xl font-black text-brand-dark">{{ number_format($totalFaculty ?? 0) }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-brand-dark/5 text-brand-dark rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-brand-dark group-hover:text-white transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
                <div class="mt-6 flex items-center gap-2">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest italic">Expert Team</span>
                </div>
            </div>

            <!-- Banners -->
            <div class="bg-white rounded-[2.5rem] p-8 border border-slate-50 shadow-[0_4px_30px_rgb(0,0,0,0.02)] transform hover:-translate-y-1 transition-all duration-500 group">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 mb-2 uppercase tracking-[0.2em]">Visuals</p>
                        <h3 class="text-4xl font-black text-brand-dark"> {{ number_format($totalBanners ?? 0) }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-brand-orange/10 text-brand-orange rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-brand-orange group-hover:text-white transition-all duration-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <div class="mt-6 flex items-center gap-2">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest italic">Hero Slides</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-[0_8px_40px_rgb(0,0,0,0.03)] border border-slate-50 overflow-hidden mb-8">
            
            <div class="p-8 border-b border-slate-50 flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white">
                <div>
                    <h3 class="text-xl font-black text-brand-dark uppercase tracking-tight">Recent Inquiries</h3>
                    <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest mt-1">Real-time student leads</p>
                </div>
                <div class="relative w-full md:w-80">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-brand-orange">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="w-full pl-10 pr-4 py-3.5 bg-slate-50 border-none rounded-2xl text-[10px] font-black uppercase tracking-widest focus:ring-2 focus:ring-brand-orange focus:bg-white transition-all placeholder-slate-400" placeholder="Search Momentum...">
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-slate-50/50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <tr>
                            <th class="px-8 py-5">Student Identity</th>
                            <th class="px-8 py-5">Communication</th>
                            <th class="px-8 py-5">Target Course</th>
                            <th class="px-8 py-5 text-right">Timestamp</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-50">
                        @forelse($enrollments->take(5) as $item)
                        <tr class="hover:bg-slate-50/50 transition-all group">
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-brand-dark text-white flex items-center justify-center font-black text-xs group-hover:scale-110 transition-transform">
                                        {{ strtoupper(substr($item->name, 0, 1)) }}
                                    </div>
                                    <span class="font-black text-brand-dark uppercase tracking-tight">{{ $item->name }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex flex-col">
                                    <span class="text-slate-600 font-bold text-xs">{{ $item->phone }}</span>
                                    <span class="text-slate-400 text-[9px] font-black uppercase tracking-widest">{{ $item->email }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <span class="px-3 py-1 bg-brand-orange/5 text-brand-orange border border-brand-orange/10 rounded-lg text-[9px] font-black uppercase tracking-widest">
                                    {{ $item->course }}
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex flex-col items-end">
                                    <span class="text-slate-600 font-black text-[10px] uppercase tracking-widest">{{ $item->created_at->format('d M') }}</span>
                                    <span class="text-slate-400 text-[8px] uppercase tracking-widest">{{ $item->created_at->diffForHumans() }}</span>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-20 text-center">
                                <div class="flex flex-col items-center gap-3">
                                    <div class="w-16 h-16 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center text-3xl mb-2">📥</div>
                                    <h3 class="text-lg font-black text-slate-400 uppercase tracking-widest">Awaiting Leads</h3>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="p-6 bg-slate-50/50 border-t border-slate-50 flex justify-center">
                <a href="{{ route('enrollments') }}" class="text-[10px] font-black text-brand-dark uppercase tracking-[0.3em] hover:text-brand-orange transition-all flex items-center gap-3 group">
                    Enter Lead Management 
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
        
        <footer class="mt-16 text-center text-[10px] font-bold text-slate-400 uppercase tracking-widest">
            &copy; 2026 MATHSHALA ADMINISTRATIVE CORE
        </footer>

    </main>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }
    </style>

@endsection