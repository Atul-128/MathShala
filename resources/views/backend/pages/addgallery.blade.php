@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Gallery Management</h2>
            <p class="text-sm text-slate-500 mt-1">Upload, categorize, and manage all photos shown on the website.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openGalleryModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-6 py-3 bg-brand-dark text-white rounded-xl hover:bg-brand-orange transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-black uppercase tracking-widest shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Photo
            </button>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl flex items-center gap-3 animate-in fade-in slide-in-from-top-4 duration-500">
        <div class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center text-white shadow-lg shadow-emerald-200">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <p class="text-sm font-bold uppercase tracking-tight">{{ session('success') }}</p>
    </div>
    @endif

    @if($errors->any())
    <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-700 rounded-2xl animate-in fade-in slide-in-from-top-4 duration-500">
        <div class="flex items-center gap-3 mb-2">
            <div class="w-8 h-8 rounded-full bg-rose-500 flex items-center justify-center text-white shadow-lg shadow-rose-200">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
            </div>
            <p class="text-sm font-bold uppercase tracking-tight">Upload Failed</p>
        </div>
        <ul class="list-disc list-inside text-xs font-medium space-y-1 ml-11">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 sm:gap-6 mb-8">
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Total</p>
            <p class="text-3xl font-black text-brand-dark">{{ count($galleries) }}</p>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex items-center gap-2 mb-1"><span class="w-2 h-2 rounded-full bg-brand-orange"></span><p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Classroom</p></div>
            <p class="text-2xl font-black text-slate-800">{{ $galleries->where('category', 'classroom')->count() }}</p>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex items-center gap-2 mb-1"><span class="w-2 h-2 rounded-full bg-brand-cyan"></span><p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Results</p></div>
            <p class="text-2xl font-black text-slate-800">{{ $galleries->where('category', 'result')->count() }}</p>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex items-center gap-2 mb-1"><span class="w-2 h-2 rounded-full bg-slate-800"></span><p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Events</p></div>
            <p class="text-2xl font-black text-slate-800">{{ $galleries->where('category', 'event')->count() }}</p>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm">
            <div class="flex items-center gap-2 mb-1"><span class="w-2 h-2 rounded-full bg-brand-orange/50"></span><p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Activities</p></div>
            <p class="text-2xl font-black text-slate-800">{{ $galleries->where('category', 'activity')->count() }}</p>
        </div>
    </div>

    <div class="flex flex-wrap gap-2 mb-8" id="gallery-filters">
        <button onclick="filterGallery('all', this)" class="filter-btn active px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest bg-brand-dark text-white shadow-md transition-all">All Photos</button>
        <button onclick="filterGallery('classroom', this)" class="filter-btn px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest bg-white text-slate-500 border border-slate-100 hover:bg-slate-50 transition-all">Classroom</button>
        <button onclick="filterGallery('result', this)" class="filter-btn px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest bg-white text-slate-500 border border-slate-100 hover:bg-slate-50 transition-all">Results</button>
        <button onclick="filterGallery('event', this)" class="filter-btn px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest bg-white text-slate-500 border border-slate-100 hover:bg-slate-50 transition-all">Events</button>
        <button onclick="filterGallery('activity', this)" class="filter-btn px-6 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest bg-white text-slate-500 border border-slate-100 hover:bg-slate-50 transition-all">Activities</button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($galleries as $gallery)
        <div class="gallery-item group relative rounded-[2rem] overflow-hidden bg-white border border-slate-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-xl transition-all duration-500" data-category="{{ $gallery->category }}">
            
            <div class="relative h-60 overflow-hidden bg-slate-50">
                <img src="{{ asset('uploads/gallery/'.$gallery->image) }}" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" 
                     alt="Gallery Image">

                <!-- Hover Overlay -->
                <div class="absolute inset-0 bg-brand-dark/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-between p-6">
                    
                    <div class="flex justify-end">
                        <span class="bg-brand-orange text-white text-[9px] font-black px-3 py-1 rounded uppercase tracking-widest shadow-sm">
                            {{ $gallery->category }}
                        </span>
                    </div>

                    <div class="flex items-center justify-center gap-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <!-- Edit -->
                        <a href="{{ route('gallery.edit', $gallery->id) }}"
                            class="w-12 h-12 bg-white text-brand-orange rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </a>
                        <!-- Delete -->
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-12 h-12 bg-white text-brand-cyan rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bottom Content -->
            <div class="p-5 border-t border-slate-50">
                <h3 class="text-sm font-black text-brand-dark truncate uppercase tracking-tight">
                    {{ $gallery->title ?? 'Untitled Momentum' }}
                </h3>
                <p class="text-[10px] text-slate-400 font-bold mt-1 uppercase tracking-widest">
                    {{ $gallery->created_at->format('d M, Y') }}
                </p>
            </div>

        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div id="addGalleryModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-brand-dark/90 backdrop-blur-md" onclick="closeGalleryModal()"></div>
    
    <div class="relative w-full max-w-lg bg-white rounded-[2.5rem] shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col" id="galleryModalContent">
        
        <div class="flex items-center justify-between px-8 py-6 border-b border-slate-50">
            <div>
                <h3 class="text-2xl font-black text-brand-dark uppercase tracking-tight">New Momentum</h3>
                <p class="text-[10px] text-slate-400 font-black uppercase tracking-[0.2em] mt-1">Capture a legacy</p>
            </div>
            <button onclick="closeGalleryModal()" class="w-10 h-10 rounded-full bg-slate-50 text-slate-400 hover:text-brand-cyan flex items-center justify-center transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-8">
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3">Upload Visual</label>
                    <div class="relative w-full h-48 border-2 border-dashed border-slate-200 rounded-3xl hover:border-brand-orange transition-colors group flex flex-col items-center justify-center cursor-pointer overflow-hidden" id="dropZone">
                        <input type="file" name="image" id="galleryImageInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*" required onchange="previewImage(this)">
                        
                        <!-- Initial State -->
                        <div id="initialState" class="flex flex-col items-center justify-center">
                            <div class="w-12 h-12 bg-slate-50 rounded-full flex items-center justify-center text-slate-400 mb-4 group-hover:bg-brand-orange/10 group-hover:text-brand-orange transition-colors">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            </div>
                            <p class="text-xs font-black text-slate-400 uppercase tracking-widest">Choose Image</p>
                        </div>

                        <!-- Preview State -->
                        <div id="previewContainer" class="hidden absolute inset-0 w-full h-full bg-slate-50">
                            <img id="imagePreview" src="" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <p class="text-[10px] font-black text-white uppercase tracking-widest">Change Image</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Category</label>
                        <select name="category" required class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all">
                            <option value="classroom">Classroom</option>
                            <option value="result">Results</option>
                            <option value="event">Events</option>
                            <option value="activity">Activities</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Title (Optional)</label>
                        <input type="text" name="title" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl text-sm font-bold text-brand-dark focus:ring-2 focus:ring-brand-orange transition-all" placeholder="E.G. TOPPER 2024">
                    </div>
                </div>

                <button type="submit" id="uploadBtn" class="w-full py-5 bg-brand-dark text-white font-black uppercase tracking-[0.3em] text-xs rounded-2xl hover:bg-brand-orange shadow-lg transform hover:-translate-y-1 transition-all flex items-center justify-center gap-3">
                    <span id="btnText">Initialize Upload</span>
                    <div id="btnLoader" class="hidden w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function() {
        const btn = document.getElementById('uploadBtn');
        const text = document.getElementById('btnText');
        const loader = document.getElementById('btnLoader');
        
        if (btn) {
            btn.disabled = true;
            btn.classList.add('opacity-70', 'cursor-not-allowed');
            text.innerText = 'Uploading...';
            loader.classList.remove('hidden');
        }
    });

    function filterGallery(category, btnElement) {
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => {
            btn.classList.remove('bg-brand-dark', 'text-white', 'shadow-md');
            btn.classList.add('bg-white', 'text-slate-500', 'border', 'border-slate-100');
        });
        
        btnElement.classList.remove('bg-white', 'text-slate-500', 'border', 'border-slate-100');
        btnElement.classList.add('bg-brand-dark', 'text-white', 'shadow-md');

        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            if (category === 'all' || item.getAttribute('data-category') === category) {
                item.style.display = 'block';
                setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 50);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => { item.style.display = 'none'; }, 300);
            }
        });
    }

    const galleryModal = document.getElementById('addGalleryModal');
    const galleryModalContent = document.getElementById('galleryModalContent');

    function openGalleryModal() {
        galleryModal.classList.remove('opacity-0', 'pointer-events-none');
        galleryModalContent.classList.remove('scale-95');
        galleryModalContent.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeGalleryModal() {
        galleryModal.classList.add('opacity-0', 'pointer-events-none');
        galleryModalContent.classList.remove('scale-100');
        galleryModalContent.classList.add('scale-95');
        document.body.style.overflow = 'auto';
        
        // Reset preview
        document.getElementById('initialState').classList.remove('hidden');
        document.getElementById('previewContainer').classList.add('hidden');
        document.getElementById('imagePreview').src = '';
    }

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
                document.getElementById('initialState').classList.add('hidden');
                document.getElementById('previewContainer').classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection