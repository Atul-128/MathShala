@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-4xl mx-auto font-sans text-slate-800 relative">

    <div class="mb-8">
        <a href="{{ route('faculty') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-brand-600 transition-colors mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Faculty
        </a>
        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Edit Faculty Member</h2>
        <p class="text-sm text-slate-500 mt-1">Update profile for {{ $faculty->name }}</p>
    </div>

    <div class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
        <form action="{{ route('faculty.update', $faculty->id) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="md:col-span-1">
                    <label class="block text-sm font-bold text-slate-700 mb-3">Profile Photo</label>
                    <div class="relative group aspect-square">
                        <div class="w-full h-full rounded-2xl overflow-hidden border-2 border-slate-100 shadow-inner bg-slate-50">
                            <img id="previewImage" 
                                src="{{ $faculty->image ? asset('uploads/faculty/'.$faculty->image) : 'https://ui-avatars.com/api/?name='.$faculty->name }}" 
                                class="w-full h-full object-contain">
                        </div>
                        <label for="imageInput" class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer rounded-2xl">
                            <span class="text-white text-xs font-bold uppercase tracking-wider">Change Photo</span>
                        </label>
                        <input type="file" name="image" id="imageInput" class="hidden" accept="image/*" onchange="previewFile(event)">
                    </div>
                </div>

                <div class="md:col-span-2 space-y-6">
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Full Name</label>
                            <input type="text" name="name" value="{{ $faculty->name }}" required
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Designation</label>
                            <input type="text" name="designation" value="{{ $faculty->designation }}" required
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Department / Subject</label>
                            <input type="text" name="department" value="{{ $faculty->department }}"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none transition-all">
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Display Order</label>
                                <input type="number" name="order" value="{{ $faculty->order }}"
                                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Status</label>
                                <select name="status" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none transition-all">
                                    <option value="active" {{ $faculty->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="draft" {{ $faculty->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-100 flex items-center justify-end gap-4">
                <a href="{{ route('faculty') }}" class="px-8 py-3 rounded-xl font-bold text-slate-500 hover:bg-slate-50 transition-all">
                    Discard Changes
                </a>
                <button type="submit" class="px-10 py-3 bg-brand-600 text-white rounded-xl font-bold shadow-lg shadow-brand-100 hover:bg-brand-700 transform hover:-translate-y-0.5 transition-all">
                    Update Profile
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
