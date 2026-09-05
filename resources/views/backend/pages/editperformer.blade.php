@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-4xl mx-auto font-sans text-slate-800 relative">

    <div class="mb-8">
        <a href="{{ route('performers') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-amber-600 transition-colors mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Performers
        </a>
        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight uppercase">Update Achievement</h2>
        <p class="text-sm text-slate-500 mt-1 font-bold uppercase tracking-widest">Adjusting profile for {{ $performer->name }}</p>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-xl border border-slate-50 overflow-hidden">
        <form action="{{ route('performer.update', $performer->id) }}" method="POST" enctype="multipart/form-data" class="p-10 space-y-10">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <div class="md:col-span-1">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Identity Visual</label>
                    <div class="relative group aspect-square">
                        <div class="w-full h-full rounded-[2rem] overflow-hidden border border-slate-100 shadow-inner bg-slate-50">
                            <img id="previewImage" 
                                src="{{ asset('uploads/performers/'.$performer->image) }}" 
                                class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <label for="imageInput" class="absolute inset-0 flex items-center justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer rounded-[2rem]">
                            <span class="text-white text-xs font-black uppercase tracking-widest">Swap Identity</span>
                        </label>
                        <input type="file" name="image" id="imageInput" class="hidden" accept="image/*" onchange="previewFile(event)">
                    </div>
                    <p class="text-[9px] text-slate-400 mt-4 text-center font-black uppercase tracking-[0.2em]">Aspect Ratio 1:1 Recommended</p>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div class="grid grid-cols-1 gap-8">
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Student Name</label>
                            <input type="text" name="name" value="{{ $performer->name }}" required
                                class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all" placeholder="E.G. ARJUN KAPOOR">
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Achievement/Rank</label>
                                <input type="text" name="rank" value="{{ $performer->rank }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Academic Year</label>
                                <input type="text" name="year" value="{{ $performer->year }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Display Priority</label>
                                <input type="number" name="order" value="{{ $performer->order }}"
                                    class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Status</label>
                                <select name="status" class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                                    <option value="active" {{ $performer->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="draft" {{ $performer->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-10 border-t border-slate-50 flex items-center justify-end gap-6">
                <a href="{{ route('performers') }}" class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] hover:text-slate-600 transition-colors">
                    Discard Changes
                </a>
                <button type="submit" class="px-10 py-4 bg-amber-600 text-white rounded-2xl text-xs font-black uppercase tracking-[0.3em] shadow-lg shadow-amber-100 hover:bg-amber-700 transform hover:-translate-y-1 transition-all">
                    Update Achievement
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewFile(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('previewImage');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
