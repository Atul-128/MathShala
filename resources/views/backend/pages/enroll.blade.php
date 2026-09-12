@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Student Enrollments</h2>
            <p class="text-sm text-slate-500 mt-1">Manage and track all new admission inquiries from the website.</p>
        </div>
        <div class="flex items-center gap-3">
            <span class="px-4 py-2 bg-brand-orange/10 text-brand-orange rounded-xl text-xs font-black uppercase tracking-widest border border-brand-orange/20">
                Total: {{ count($enrollments) }}
            </span>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden">
        
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                
                <thead class="bg-slate-50/80 border-b border-slate-100 text-slate-500 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-5">Student Info</th>
                        <th class="px-8 py-5">Contact Details</th>
                        <th class="px-8 py-5">Interested Course</th>
                        <th class="px-8 py-5">Submission Date</th>
                        <th class="px-8 py-5 text-right">Status</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-50">
                    @forelse($enrollments as $item)
                    <tr class="hover:bg-slate-50/50 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-brand-dark text-white flex items-center justify-center font-bold text-sm shadow-sm group-hover:scale-110 transition-transform">
                                    {{ strtoupper(substr($item->school_name ?? $item->name, 0, 1)) }}
                                </div>
                                <div>
                                    <span class="font-bold text-slate-900 block">{{ $item->school_name ?? $item->name }}</span>
                                    @if($item->school_name && $item->principal_name)
                                        <span class="text-xs text-slate-500 block">Principal/Coordinator: {{ $item->principal_name }}</span>
                                    @endif
                                    @if($item->name && $item->school_name)
                                        <span class="text-xs text-slate-500 block">Child: {{ $item->name }}</span>
                                    @endif
                                    @if($item->student_class || $item->age)
                                        <span class="text-xs text-slate-500 block">
                                            @if($item->student_class) Class: {{ $item->student_class }} @endif
                                            @if($item->student_class && $item->age) | @endif
                                            @if($item->age) Age: {{ $item->age }} @endif
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col gap-1">
                                <span class="text-slate-700 font-medium flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                    {{ $item->phone }}
                                </span>
                                <span class="text-slate-400 text-xs flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    {{ $item->email }}
                                </span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="inline-flex items-center px-3 py-1 bg-brand-orange/5 text-brand-orange border border-brand-orange/10 rounded-lg text-[11px] font-black uppercase tracking-tight">
                                {{ $item->course }}
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col">
                                <span class="text-slate-600 font-bold">{{ $item->created_at->format('d M, Y') }}</span>
                                <span class="text-slate-400 text-[10px]">{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-600 rounded-full text-[10px] font-black uppercase tracking-widest">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                New Lead
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-20 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <div class="w-16 h-16 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center text-3xl mb-2">📥</div>
                                <h3 class="text-lg font-bold text-slate-400">No enrollments yet</h3>
                                <p class="text-sm text-slate-400 max-w-xs mx-auto">When students fill out the admission form on your website, they will appear here.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection