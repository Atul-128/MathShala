@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-5xl mx-auto font-sans text-slate-800 relative">

    <div class="mb-8">
        <a href="{{ route('courses') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-indigo-600 transition-colors mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Courses
        </a>
        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Edit Course</h2>
        <p class="text-sm text-slate-500 mt-1">Update details for "{{ $course->title }}"</p>
    </div>

    <div class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
        <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Left: Image Management -->
                <div class="lg:col-span-1">
                    <label class="block text-sm font-bold text-slate-700 mb-3">Course Thumbnail</label>
                    <div class="relative group">
                        <div class="aspect-video rounded-2xl overflow-hidden border-2 border-slate-100 shadow-inner bg-slate-50">
                            <img id="previewImage" 
                                src="{{ asset('uploads/courses/'.$course->image) }}" 
                                class="w-full h-full object-cover">
                        </div>
                        <label for="imageInput" class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer rounded-2xl">
                            <span class="text-white text-xs font-bold uppercase tracking-wider">Change Image</span>
                        </label>
                        <input type="file" name="image" id="imageInput" class="hidden" accept="image/*" onchange="previewFile(event)">
                    </div>
                    <p class="text-[10px] text-slate-400 mt-3 text-center uppercase font-bold tracking-widest">Recommended: 800x450px</p>
                </div>

                <!-- Right: Details -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Course Title</label>
                            <input type="text" name="title" value="{{ $course->title }}" required
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Category</label>
                            <select name="category" required
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                                <option value="upsc" {{ $course->category == 'upsc' ? 'selected' : '' }}>UPSC CSE</option>
                                <option value="jee" {{ $course->category == 'jee' ? 'selected' : '' }}>JEE / NEET</option>
                                <option value="optional" {{ $course->category == 'optional' ? 'selected' : '' }}>Optional Subject</option>
                                <option value="test" {{ $course->category == 'test' ? 'selected' : '' }}>Test Series</option>
                                <option value="foundation" {{ $course->category == 'foundation' ? 'selected' : '' }}>Foundation</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Price (₹)</label>
                            <input type="number" name="price" value="{{ $course->price }}" required
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Duration</label>
                            <input type="text" name="duration" value="{{ $course->duration }}"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Special Badge</label>
                            <select name="badge"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                                <option value="" {{ $course->badge == '' ? 'selected' : '' }}>No Badge</option>
                                <option value="BEST SELLER" {{ $course->badge == 'BEST SELLER' ? 'selected' : '' }}>BEST SELLER</option>
                                <option value="TRENDING" {{ $course->badge == 'TRENDING' ? 'selected' : '' }}>TRENDING</option>
                                <option value="NEW BATCH" {{ $course->badge == 'NEW BATCH' ? 'selected' : '' }}>NEW BATCH</option>
                                <option value="POPULAR" {{ $course->badge == 'POPULAR' ? 'selected' : '' }}>POPULAR</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Delivery Mode</label>
                            <select name="mode"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                                <option value="online" {{ $course->mode == 'online' ? 'selected' : '' }}>Online Live</option>
                                <option value="offline" {{ $course->mode == 'offline' ? 'selected' : '' }}>Offline / Classroom</option>
                                <option value="hybrid" {{ $course->mode == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Status</label>
                            <select name="status"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                                <option value="active" {{ $course->status == 'active' ? 'selected' : '' }}>Active (Published)</option>
                                <option value="draft" {{ $course->status == 'draft' ? 'selected' : '' }}>Draft (Hidden)</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Full Description</label>
                        <textarea name="description" rows="5"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all resize-none">{{ $course->description }}</textarea>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-100 flex items-center justify-end gap-4">
                <a href="{{ route('courses') }}" class="px-8 py-3 rounded-xl font-bold text-slate-500 hover:bg-slate-50 transition-all">
                    Discard Changes
                </a>
                <button type="submit" class="px-10 py-3 bg-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transform hover:-translate-y-0.5 transition-all">
                    Update Course Information
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
