@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-2xl mx-auto font-sans text-slate-800 relative">

    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('gallery.create') }}" class="w-10 h-10 rounded-full bg-white border border-slate-100 flex items-center justify-center text-slate-400 hover:text-brand-orange hover:border-brand-orange transition-all">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </a>
        <div>
            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Edit Momentum</h2>
            <p class="text-sm text-slate-500 mt-1">Refine your legacy capture.</p>
        </div>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-xl border border-slate-100 overflow-hidden">
        <div class="p-8 sm:p-10">
            <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Current Visual</label>
                    <div class="relative w-full h-64 rounded-3xl overflow-hidden bg-slate-50 border-2 border-slate-100 group">
                        <img id="editImagePreview" src="{{ asset('uploads/gallery/'.$gallery->image) }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-brand-dark/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center pointer-events-none">
                            <p class="text-[10px] font-black text-white uppercase tracking-widest">New Upload Replaces Current</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <input type="file" name="image" id="galleryEditInput" class="hidden" accept="image/*" onchange="previewEditImage(this)">
                        <button type="button" onclick="document.getElementById('galleryEditInput').click()" class="w-full py-4 border-2 border-dashed border-slate-200 rounded-2xl text-[10px] font-black text-slate-400 uppercase tracking-widest hover:border-brand-orange hover:text-brand-orange transition-all">
                            Change Image
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Category</label>
                        <select name="category" required class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all">
                            <option value="classroom" {{ $gallery->category == 'classroom' ? 'selected' : '' }}>Classroom</option>
                            <option value="result" {{ $gallery->category == 'result' ? 'selected' : '' }}>Results</option>
                            <option value="event" {{ $gallery->category == 'event' ? 'selected' : '' }}>Events</option>
                            <option value="activity" {{ $gallery->category == 'activity' ? 'selected' : '' }}>Activities</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Title (Optional)</label>
                        <input type="text" name="title" value="{{ $gallery->title }}" class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all" placeholder="E.G. TOPPER 2024">
                    </div>
                </div>

                <div class="flex gap-4">
                    <a href="{{ route('gallery.create') }}" class="flex-1 py-5 border border-slate-100 text-slate-400 font-black uppercase tracking-widest text-xs rounded-2xl hover:bg-slate-50 transition-all text-center">
                        Cancel
                    </a>
                    <button type="submit" class="flex-[2] py-5 bg-brand-dark text-white font-black uppercase tracking-[0.3em] text-xs rounded-2xl hover:bg-brand-orange shadow-lg transform hover:-translate-y-1 transition-all">
                        Update Momentum
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewEditImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('editImagePreview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection
