@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight uppercase">Site Asset Manager</h2>
            <p class="text-sm text-slate-500 mt-1 uppercase tracking-widest text-[10px] font-bold">Control all static images and content assets by section</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openAssetModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-slate-900 text-white rounded-xl hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Register New Asset
            </button>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center gap-3 animate-slide-in">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span class="text-sm font-bold uppercase tracking-wide">{{ session('success') }}</span>
    </div>
    @endif

    <div class="space-y-12">
        @foreach($assets as $group => $groupAssets)
        <div class="scroll-reveal transition-all">
            <div class="flex items-center gap-4 mb-6">
                <h3 class="text-xl font-black text-slate-900 uppercase tracking-tighter">{{ $group }} Section</h3>
                <div class="h-px flex-grow bg-slate-200"></div>
                <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ $groupAssets->count() }} Assets</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($groupAssets as $asset)
                <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-500 flex flex-col">
                    <div class="relative aspect-video bg-slate-50 overflow-hidden">
                        <img src="{{ $asset->image ? (filter_var($asset->image, FILTER_VALIDATE_URL) ? $asset->image : asset('uploads/assets/'.$asset->image)) : $asset->value }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        
                        <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">
                            <button onclick="editAsset({{ json_encode($asset) }})" class="p-3 bg-white text-slate-900 rounded-full hover:bg-brand-orange hover:text-white transition-all transform hover:scale-110 shadow-xl">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </button>
                            <a href="{{ route('asset.delete', $asset->id) }}" onclick="return confirm('Permanently delete this asset record?')" class="p-3 bg-white text-rose-500 rounded-full hover:bg-rose-500 hover:text-white transition-all transform hover:scale-110 shadow-xl">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </a>
                        </div>

                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-md text-slate-900 text-[10px] font-black rounded uppercase tracking-widest shadow-sm">
                                {{ $asset->key }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h4 class="text-sm font-black text-slate-900 uppercase tracking-tight mb-1">{{ $asset->label }}</h4>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest truncate">{{ $asset->value }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Add/Edit Asset Modal -->
<div id="assetModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-md" onclick="closeAssetModal()"></div>
    <div class="relative w-full max-w-xl bg-white rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="assetModalContent">
        <form id="assetForm" action="{{ route('asset.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-between px-8 py-6 border-b border-slate-50 bg-slate-50/30">
                <div>
                    <h3 id="modalTitle" class="text-2xl font-black text-slate-900 uppercase tracking-tight">Register Asset</h3>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">Direct static content link</p>
                </div>
                <button type="button" onclick="closeAssetModal()" class="text-slate-400 hover:text-rose-500 p-2 rounded-full hover:bg-rose-50 transition-all">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-8 space-y-6">
                <div id="keyFieldContainer">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Unique Key (Technical Name)</label>
                    <input type="text" name="key" id="asset_key" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-brand-orange outline-none transition-all" placeholder="E.G. about_hero_image">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Display Label (Friendly Name)</label>
                    <input type="text" name="label" id="asset_label" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-brand-orange outline-none transition-all" placeholder="E.G. About Us Hero Section Background">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Section Group</label>
                    <select name="group" id="asset_group" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-brand-orange outline-none transition-all">
                        <option value="home">Home Page</option>
                        <option value="about">About Page</option>
                        <option value="course">Course Pages</option>
                        <option value="contact">Contact Page</option>
                        <option value="footer">Footer / Layout</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Current Image / Value</label>
                    <div class="relative w-full h-40 border-2 border-dashed border-slate-200 rounded-2xl overflow-hidden group hover:border-brand-orange transition-all cursor-pointer" onclick="document.getElementById('assetImageInput').click()">
                        <img id="assetPreview" src="https://via.placeholder.com/800x400?text=Click+to+Upload+New+Asset" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-white text-[10px] font-black uppercase tracking-widest">Replace Current Asset</span>
                        </div>
                    </div>
                    <input type="file" name="image" id="assetImageInput" accept="image/*" class="hidden" onchange="previewAssetImage(event)">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Manual URL (Optional if not uploading)</label>
                    <input type="text" name="value" id="asset_value" class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-[10px] font-bold text-slate-500 focus:ring-2 focus:ring-brand-orange outline-none transition-all" placeholder="https://unsplash.com/...">
                </div>
            </div>
            <div class="px-8 py-6 border-t border-slate-50 bg-slate-50/30 flex justify-end gap-4">
                <button type="button" onclick="closeAssetModal()" class="px-6 py-3 text-xs font-black text-slate-400 uppercase tracking-widest hover:text-slate-600 transition-colors">Cancel</button>
                <button type="submit" class="px-8 py-3 bg-slate-900 text-white rounded-2xl text-xs font-black uppercase tracking-[0.2em] shadow-lg hover:bg-brand-orange transform hover:-translate-y-1 transition-all">
                    Synchronize Asset
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openAssetModal() {
        document.getElementById('assetForm').action = "{{ route('asset.store') }}";
        document.getElementById('modalTitle').innerText = "Register Asset";
        document.getElementById('assetForm').reset();
        document.getElementById('keyFieldContainer').style.display = 'block';
        document.getElementById('asset_key').setAttribute('required', 'required');
        document.getElementById('assetPreview').src = "https://via.placeholder.com/800x400?text=Click+to+Upload+New+Asset";
        
        const modal = document.getElementById('assetModal');
        const content = document.getElementById('assetModalContent');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeAssetModal() {
        const modal = document.getElementById('assetModal');
        const content = document.getElementById('assetModalContent');
        modal.classList.add('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
        document.body.style.overflow = 'auto';
    }

    function editAsset(asset) {
        document.getElementById('assetForm').action = "{{ route('assets') }}/update/" + asset.id;
        document.getElementById('modalTitle').innerText = "Update Asset";
        document.getElementById('keyFieldContainer').style.display = 'none';
        document.getElementById('asset_key').removeAttribute('required');
        
        document.getElementById('asset_label').value = asset.label;
        document.getElementById('asset_group').value = asset.group;
        document.getElementById('asset_value').value = asset.value;
        
        let imgSrc = asset.image ? (asset.image.startsWith('http') ? asset.image : `/uploads/assets/${asset.image}`) : asset.value;
        document.getElementById('assetPreview').src = imgSrc;

        const modal = document.getElementById('assetModal');
        const content = document.getElementById('assetModalContent');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function previewAssetImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('assetPreview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    document.getElementById('assetForm').onsubmit = function() {
        const btn = this.querySelector('button[type="submit"]');
        btn.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Synchronizing...';
        btn.disabled = true;
        btn.classList.add('opacity-75', 'cursor-not-allowed');
    };
</script>

@endsection
