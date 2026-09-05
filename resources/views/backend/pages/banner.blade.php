@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Banner Management</h2>
            <p class="text-sm text-slate-500 mt-1">Manage hero section sliders, promotional banners, and CTAs.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openBannerModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-6 py-3 bg-brand-dark text-white rounded-xl hover:bg-brand-orange transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-black uppercase tracking-widest shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Banner
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        @foreach($banners as $key => $banner)

            <div class="bg-white rounded-[2rem] shadow-[0_4px_25px_rgb(0,0,0,0.03)] border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-500 group flex flex-col">

                <div class="relative h-64 overflow-hidden bg-brand-dark">
                    
                    <img src="{{ asset('uploads/banners/'.$banner->image) }}" 
                        class="w-full h-full object-cover opacity-60 group-hover:scale-110 transition-transform duration-700 filter grayscale group-hover:grayscale-0">

                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/40 to-transparent"></div>
                    
                    <div class="absolute bottom-0 left-0 w-full p-8">
                        <span class="inline-block px-3 py-1 bg-brand-orange text-white rounded text-[9px] font-black uppercase tracking-widest mb-3">
                            Slide {{ $key + 1 }}
                        </span>

                        <h3 class="text-2xl font-black text-white mb-2 uppercase tracking-tight">
                            {{ $banner->title }}
                        </h3>

                        <p class="text-sm text-white/60 font-medium line-clamp-1">
                            {{ $banner->subtitle }}
                        </p>
                    </div>

                    <div class="absolute top-6 right-6 flex gap-2">
                        <span class="text-[10px] font-black px-3 py-1 rounded uppercase tracking-widest shadow-lg
                            {{ $banner->status == 'active' ? 'bg-brand-orange text-white' : 'bg-slate-400 text-white' }}">
                            {{ $banner->status }}
                        </span>
                    </div>
                </div>

                <div class="p-6 flex items-center justify-between bg-white border-t border-slate-50">
                    
                    <div class="flex items-center gap-6">
                        <div>
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Button CTA</p>
                            <p class="text-sm font-black text-brand-dark uppercase tracking-tight">
                                {{ $banner->button_text }}
                            </p>
                        </div>
                        <div class="w-px h-8 bg-slate-100"></div>
                        <div>
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Status</p>
                            <p class="text-sm font-black text-emerald-500 uppercase tracking-tight">
                                {{ ucfirst($banner->status) }}
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <a href="{{ route('banner.edit', $banner->id) }}"
                            class="w-10 h-10 bg-slate-50 text-slate-400 rounded-full flex items-center justify-center hover:bg-brand-orange hover:text-white transition-all shadow-sm">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        
                        <a href="{{ route('banner.delete', $banner->id) }}"
                        onclick="return confirm('Confirm deletion of this visual component?')"
                        class="w-10 h-10 bg-slate-50 text-slate-400 rounded-full flex items-center justify-center hover:bg-brand-cyan hover:text-white transition-all shadow-sm">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </a>
                    </div>
                </div>

            </div>

            @endforeach  

    </div>
</div>

<div id="addBannerModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-brand-dark/90 backdrop-blur-md" onclick="closeBannerModal()"></div>
    
    <div class="relative w-full max-w-2xl bg-white rounded-[2.5rem] shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col" id="bannerModalContent">
        
        <div class="flex items-center justify-between px-8 py-6 border-b border-slate-50">
            <div>
                <h3 class="text-2xl font-black text-brand-dark uppercase tracking-tight">New Vision</h3>
                <p class="text-[10px] text-slate-400 font-black uppercase tracking-[0.2em] mt-1">Hero slide creation</p>
            </div>
            <button onclick="closeBannerModal()" class="w-10 h-10 rounded-full bg-slate-50 text-slate-400 hover:text-brand-cyan flex items-center justify-center transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-8 max-h-[70vh] overflow-y-auto custom-scrollbar">
            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3">Hero Image</label>
                    <div class="relative w-full h-56 border-2 border-dashed border-slate-200 rounded-[2rem] overflow-hidden cursor-pointer hover:border-brand-orange transition-colors group"
                        onclick="document.getElementById('imageInput').click()">
                        <img id="previewImage" src="https://via.placeholder.com/800x400?text=MathShala+Visual" class="w-full h-full object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-brand-dark/40 opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-white text-xs font-black uppercase tracking-widest">Swap Visual</span>
                        </div>
                        <input type="file" name="image" id="imageInput" accept="image/*" class="hidden" required onchange="previewImage(event)">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Headline</label>
                        <input type="text" name="title" required class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all" placeholder="E.G. CONQUER UPSC 2024">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Detailed Narrative</label>
                        <textarea name="subtitle" rows="2" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all" placeholder="E.G. JOIN INDIA'S MOST DEDICATED CIVIL SERVICES MENTORSHIP"></textarea>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Action Label</label>
                        <input type="text" name="button_text" required class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all" placeholder="E.G. ENROLL NOW">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Destination URL</label>
                        <input type="text" name="button_link" required class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all" placeholder="/enroll">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Sequence</label>
                        <input type="number" name="order" value="1" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Status</label>
                        <select name="status" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all">
                            <option value="active">Active</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="w-full py-5 bg-brand-dark text-white font-black uppercase tracking-[0.3em] text-xs rounded-2xl hover:bg-brand-orange shadow-lg transform hover:-translate-y-1 transition-all">
                    Finalize Vision
                </button>
            </form>
        </div>
    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 6px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }
</style>

<script>
    const bannerModal = document.getElementById('addBannerModal');
    const bannerModalContent = document.getElementById('bannerModalContent');

    function openBannerModal() {
        bannerModal.classList.remove('opacity-0', 'pointer-events-none');
        bannerModalContent.classList.remove('scale-95');
        bannerModalContent.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeBannerModal() {
        bannerModal.classList.add('opacity-0', 'pointer-events-none');
        bannerModalContent.classList.remove('scale-100');
        bannerModalContent.classList.add('scale-95');
        document.body.style.overflow = 'auto';
    }

    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('previewImage');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection