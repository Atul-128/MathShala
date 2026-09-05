@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Testimonial Management</h2>
            <p class="text-sm text-slate-500 mt-1">Showcase your students' success stories and achievements.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openTestimonialModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-gradient-to-r from-pink-600 to-rose-600 text-white rounded-xl hover:shadow-[0_0_20px_rgba(225,29,72,0.3)] transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Testimonial
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
            <p class="text-sm font-bold uppercase tracking-tight">Submission Failed</p>
        </div>
        <ul class="list-disc list-inside text-xs font-medium space-y-1 ml-11">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($testimonials as $testimonial)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="p-6">
                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ $testimonial->image ? asset('uploads/testimonials/'.$testimonial->image) : 'https://ui-avatars.com/api/?name='.$testimonial->name }}" class="w-16 h-16 rounded-full object-cover border-2 border-pink-100">
                    <div>
                        <h4 class="font-bold text-slate-900">{{ $testimonial->name }}</h4>
                        <p class="text-xs text-pink-600 font-bold uppercase tracking-wider">{{ $testimonial->rank }} {{ $testimonial->year }}</p>
                    </div>
                </div>
                <p class="text-sm text-slate-500 italic leading-relaxed mb-6">"{{ $testimonial->quote }}"</p>
                
                <div class="flex gap-2 pt-4 border-t border-slate-50">
                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="flex-1 px-4 py-2 bg-pink-50 text-pink-600 rounded-lg text-sm font-bold hover:bg-pink-600 hover:text-white transition-colors text-center">
                        Edit
                    </a>
                    <a href="{{ route('testimonial.delete', $testimonial->id) }}" class="px-4 py-2 bg-rose-50 text-rose-500 rounded-lg hover:bg-rose-500 hover:text-white transition-colors" onclick="return confirm('Are you sure?')">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full py-20 flex flex-col items-center justify-center bg-white rounded-[2rem] border border-dashed border-slate-200">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center text-slate-300 mb-4">
                <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900">No Testimonials Yet</h3>
            <p class="text-sm text-slate-400 mt-1">Start by adding your first student success story.</p>
        </div>
        @endforelse
    </div>
</div>

<!-- Add Testimonial Modal -->
<div id="testimonialModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeTestimonialModal()"></div>
    <div class="relative w-full max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modalContent">
        <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-xl font-extrabold text-slate-900">Add New Testimonial</h3>
                <button type="button" onclick="closeTestimonialModal()" class="text-slate-400 hover:text-rose-500 p-1">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Student Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-pink-500 outline-none">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Rank/Result</label>
                        <input type="text" name="rank" placeholder="e.g. AIR 30" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-pink-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Year/Batch</label>
                        <input type="text" name="year" placeholder="e.g. UPSC 2020" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-pink-500 outline-none">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Testimonial Quote</label>
                    <textarea name="quote" rows="4" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-pink-500 outline-none resize-none"></textarea>
                </div>
                <div class="flex items-center gap-6">
                    <div class="w-20 h-20 rounded-full overflow-hidden bg-slate-50 border-2 border-slate-100 flex-shrink-0">
                        <img id="addPreview" src="https://ui-avatars.com/api/?name=User" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Student Photo</label>
                        <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100 cursor-pointer" onchange="previewAdd(this)">
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-slate-100 bg-slate-50 flex justify-end gap-3">
                <button type="button" onclick="closeTestimonialModal()" class="px-5 py-2 text-sm font-bold text-slate-500">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-pink-600 text-white rounded-xl text-sm font-bold shadow-lg shadow-pink-200">Save Testimonial</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openTestimonialModal() {
        const modal = document.getElementById('testimonialModal');
        const content = document.getElementById('modalContent');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
    }
    function closeTestimonialModal() {
        const modal = document.getElementById('testimonialModal');
        const content = document.getElementById('modalContent');
        modal.classList.add('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
        
        // Reset preview
        document.getElementById('addPreview').src = 'https://ui-avatars.com/api/?name=User';
    }

    function previewAdd(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('addPreview').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.querySelector('form').addEventListener('submit', function(e) {
        const btn = e.target.querySelector('button[type="submit"]');
        if (btn) {
            btn.disabled = true;
            btn.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Saving...';
            btn.classList.add('opacity-70', 'cursor-not-allowed');
        }
    });
</script>

@endsection
