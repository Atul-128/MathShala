@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Course Management</h2>
            <p class="text-sm text-slate-500 mt-1">Create, edit, and manage all your institute's courses from here.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openCourseModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-blue-600 text-white rounded-xl hover:shadow-[0_0_20px_rgba(79,70,229,0.3)] transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add New Course
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 mb-8">
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Courses</p>
                <p class="text-2xl font-bold text-slate-900">{{ $totalCourses }}</p></div>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Active</p><p class="text-2xl font-bold text-slate-900">{{ $activeCourses }}</p></div>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Drafts</p><p class="text-2xl font-bold text-slate-900">{{ $draftCourses }}</p></div>
        </div>
        {{-- <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Enrolled</p><p class="text-2xl font-bold text-slate-900">1.2k</p></div>
        </div> --}}
    </div>

    <div class="flex flex-col md:flex-row justify-between gap-4 mb-6">
        <div class="relative w-full md:w-96">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></div>
            <input type="text" class="w-full pl-11 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all outline-none" placeholder="Search courses by name or category...">
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        @foreach($courses as $course)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden 
        hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
            
            <!-- Image -->
            <div class="relative h-48 overflow-hidden">
                <img src="{{ asset('uploads/courses/'.$course->image) }}" 
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                <!-- Status -->
                <div class="absolute top-3 left-3 
                    {{ $course->status == 'active' ? 'bg-emerald-500' : 'bg-amber-500' }} 
                    text-white text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wider shadow-sm">
                    {{ $course->status }}
                </div>


            </div>

            <!-- Content -->
            <div class="p-5 flex-1 flex flex-col">
                
                <!-- Title -->
                <h3 class="text-lg font-bold text-slate-900 leading-tight mb-2 
                group-hover:text-indigo-600 transition-colors">
                    {{ $course->title }}
                </h3>

                <!-- Description -->
                <p class="text-sm text-slate-500 line-clamp-2 mb-4 flex-1">
                    {{ $course->description }}
                </p>

                <!-- Price + Duration -->
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 mb-4">
                    <div>
                        <p class="text-xs text-slate-400 font-medium">Price</p>
                        <p class="text-lg font-extrabold text-slate-800">
                            ₹{{ $course->price }}
                        </p>
                    </div>

                    <div class="text-right">
                        <p class="text-xs text-slate-400 font-medium">Duration</p>
                        <p class="text-sm font-bold text-slate-700">
                            {{ $course->duration }}
                        </p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-2">
                    
                    <!-- Edit -->
                    <a href="{{ route('course.edit', $course->id) }}" 
                    class="flex-1 px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold 
                    hover:bg-indigo-600 hover:text-white transition-colors text-center">
                        Edit
                    </a>

                    <!-- Delete -->
                    <a href="{{ route('course.delete', $course->id) }}" 
                    onclick="return confirm('Confirm deletion of this academic program?')"
                    class="px-4 py-2 bg-rose-50 text-rose-500 rounded-lg 
                    hover:bg-rose-500 hover:text-white transition-colors" title="Delete">
                        
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>

                    </a>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>

<div id="addCourseModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeCourseModal()"></div>
    
    <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modalContent">
        
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/50">
            <h3 class="text-xl font-extrabold text-slate-900">Add New Course</h3>
            <button onclick="closeCourseModal()" class="text-slate-400 hover:text-rose-500 transition-colors p-1 rounded-lg hover:bg-rose-50">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-6 max-h-[75vh] overflow-y-auto custom-scrollbar">
            <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                     <label class="block text-sm font-bold text-slate-700 mb-2">Course Thumbnail</label>

                    <div class="relative w-full h-48 border-2 border-dashed border-slate-300 rounded-2xl overflow-hidden cursor-pointer"
                        onclick="document.getElementById('imageInput').click()">

                        <!-- ✅ Placeholder / Preview -->
                        <img id="previewImage"
                            src="https://via.placeholder.com/800x300?text=Upload+Banner"
                            class="w-full h-full object-cover">

                        <!-- Overlay Text -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/40 text-white text-sm">
                            Click to upload image
                        </div>

                        <!-- Hidden File Input -->
                        <input type="file" name="image" id="imageInput"
                            accept="image/*"
                            class="hidden"
                            required
                            onchange="previewImage(event)">
                            <p class="text-sm font-semibold text-slate-600 group-hover:text-indigo-600">
                            Click to upload or drag and drop
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            SVG, PNG, JPG or GIF
                        </p>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">
                            Course Title <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" name="title" required
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
                            placeholder="e.g. UPSC Prelims Crash Course">
                    </div>



                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">
                            Price (₹) <span class="text-rose-500">*</span>
                        </label>
                        <input type="number" name="price" required
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
                            placeholder="e.g. 15000">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Special Badge</label>
                        <select name="badge"
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                            <option value="">No Badge</option>
                            <option value="BEST SELLER">BEST SELLER</option>
                            <option value="TRENDING">TRENDING</option>
                            <option value="NEW BATCH">NEW BATCH</option>
                            <option value="POPULAR">POPULAR</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Course Duration</label>
                        <input type="text" name="duration"
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all"
                            placeholder="e.g. 6 Months, 1 Year">
                    </div>



                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Status</label>
                        <select name="status"
                            class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                            <option value="active">Active (Published)</option>
                            <option value="draft">Draft (Hidden)</option>
                        </select>
                    </div>

                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Course Description</label>
                    <textarea name="description" rows="4"
                        class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all resize-none"
                        placeholder="Write a detailed description..."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="hidden">
                    <button type="submit" id="hiddenSubmitBtn"></button>
                </div>

                

            </form>
        </div>

            <div class="px-6 py-4 border-t border-slate-100 bg-slate-50 flex items-center justify-end gap-3">
                    <button onclick="closeCourseModal()" class="px-6 py-2.5 rounded-xl font-bold text-slate-600 bg-white border border-slate-200 hover:bg-slate-100 transition-colors shadow-sm text-sm">
                        Cancel
                    </button>
                    <button type="button" onclick="document.getElementById('hiddenSubmitBtn').click()" class="px-6 py-2.5 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-700 transition-colors shadow-md shadow-indigo-500/30 transform hover:-translate-y-0.5 text-sm flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Save Course
                    </button>
                </div>


    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
</style>

<script>
    const modal = document.getElementById('addCourseModal');
    const modalContent = document.getElementById('modalContent');

    function openCourseModal() {
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-95');
        modalContent.classList.add('scale-100');
        // Prevent background scrolling
        document.body.style.overflow = 'hidden';
    }

    function closeCourseModal() {
        modal.classList.add('opacity-0', 'pointer-events-none');
        modalContent.classList.remove('scale-100');
        modalContent.classList.add('scale-95');
        // Restore background scrolling
        document.body.style.overflow = 'auto';
    }
</script>

@endsection