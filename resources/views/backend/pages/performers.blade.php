@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Performer Management</h2>
            <p class="text-sm text-slate-500 mt-1">Manage student achievers and their performance highlights.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openPerformerModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-gradient-to-r from-amber-600 to-orange-600 text-white rounded-xl hover:shadow-[0_0_20px_rgba(245,158,11,0.3)] transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add New Performer
            </button>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center gap-3">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        {{ session('success') }}
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($performers as $performer)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="relative aspect-square overflow-hidden bg-slate-50">
                <img src="{{ asset('uploads/performers/'.$performer->image) }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                
                <div class="absolute top-3 right-3 flex gap-2">
                    <a href="{{ route('performer.edit', $performer->id) }}" class="p-2 bg-white/90 backdrop-blur-sm text-amber-600 rounded-lg shadow-sm hover:bg-amber-600 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </a>
                    <a href="{{ route('performer.delete', $performer->id) }}" class="p-2 bg-white/90 backdrop-blur-sm text-rose-500 rounded-lg shadow-sm hover:bg-rose-500 hover:text-white transition-all" onclick="return confirm('Are you sure?')">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </a>
                </div>

                <div class="absolute bottom-0 left-0 w-full p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <span class="px-2 py-1 bg-amber-500 text-white text-[10px] font-bold rounded uppercase tracking-widest shadow-lg">
                        {{ $performer->year }}
                    </span>
                </div>
            </div>
            <div class="p-5 text-center">
                <h4 class="font-bold text-slate-900 mb-1 uppercase tracking-tight">{{ $performer->name }}</h4>
                <p class="text-xs text-amber-600 font-black uppercase tracking-[0.2em]">{{ $performer->rank }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Add Performer Modal -->
<div id="performerModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-md" onclick="closePerformerModal()"></div>
    <div class="relative w-full max-w-xl bg-white rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modalContent">
        <form action="{{ route('performer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-between px-8 py-6 border-b border-slate-50 bg-slate-50/30">
                <div>
                    <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tight">New Performer</h3>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">Direct admin entry</p>
                </div>
                <button type="button" onclick="closePerformerModal()" class="text-slate-400 hover:text-rose-500 p-2 rounded-full hover:bg-rose-50 transition-all">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-8 space-y-6">
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Student Name</label>
                    <input type="text" name="name" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all" placeholder="E.G. RAHUL SHARMA">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Achievement/Rank</label>
                        <input type="text" name="rank" placeholder="E.G. AIR 15" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Academic Year</label>
                        <input type="text" name="year" placeholder="E.G. 2024" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Identity Photo</label>
                    <div class="relative w-full h-40 border-2 border-dashed border-slate-200 rounded-2xl overflow-hidden group hover:border-amber-500 transition-all cursor-pointer" onclick="document.getElementById('performerImageInput').click()">
                        <img id="performerAddPreview" src="https://via.placeholder.com/400x400?text=Upload+Student+Photo" class="w-full h-full object-contain">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-white text-[10px] font-black uppercase tracking-widest">Click to upload</span>
                        </div>
                    </div>
                    <input type="file" name="image" id="performerImageInput" accept="image/*" required class="hidden" onchange="previewPerformerImage(event)">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Display Priority</label>
                        <input type="number" name="order" value="0" class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Status</label>
                        <select name="status" class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-amber-500 outline-none transition-all">
                            <option value="active">Active</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="px-8 py-6 border-t border-slate-50 bg-slate-50/30 flex justify-end gap-4">
                <button type="button" onclick="closePerformerModal()" class="px-6 py-3 text-xs font-black text-slate-400 uppercase tracking-widest hover:text-slate-600 transition-colors">Cancel</button>
                <button type="submit" id="performerSubmitBtn" class="px-8 py-3 bg-amber-600 text-white rounded-2xl text-xs font-black uppercase tracking-[0.2em] shadow-lg shadow-amber-200 hover:bg-amber-700 transform hover:-translate-y-1 transition-all flex items-center gap-2">
                    <span id="performerBtnText">Finalize Performer</span>
                    <div id="performerBtnLoader" class="hidden w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openPerformerModal() {
        const modal = document.getElementById('performerModal');
        const content = document.getElementById('modalContent');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }
    function closePerformerModal() {
        const modal = document.getElementById('performerModal');
        const content = document.getElementById('modalContent');
        modal.classList.add('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
        document.body.style.overflow = 'auto';
    }

    function previewPerformerImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('performerAddPreview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    document.querySelector('#performerModal form').addEventListener('submit', function() {
        const btn = document.getElementById('performerSubmitBtn');
        const text = document.getElementById('performerBtnText');
        const loader = document.getElementById('performerBtnLoader');
        
        btn.disabled = true;
        btn.classList.add('opacity-80', 'cursor-not-allowed');
        text.innerText = 'Processing...';
        loader.classList.remove('hidden');
    });
</script>

@endsection
