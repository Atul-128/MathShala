@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Blog Management</h2>
            <p class="text-sm text-slate-500 mt-1">Write, edit, and publish articles, news, and strategies.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openBlogModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-gradient-to-r from-pink-600 to-rose-600 text-white rounded-xl hover:shadow-[0_0_20px_rgba(225,29,72,0.3)] transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                Write New Blog
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 sm:gap-6 mb-8">
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Blogs</p><p class="text-2xl font-bold text-slate-900">42</p></div>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Published</p><p class="text-2xl font-bold text-slate-900">35</p></div>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Drafts</p><p class="text-2xl font-bold text-slate-900">7</p></div>
        </div>
        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center"><svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></div>
            <div><p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Views</p><p class="text-2xl font-bold text-slate-900">12.5k</p></div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between gap-4 mb-6">
        <div class="relative w-full md:w-96">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></div>
            <input type="text" class="w-full pl-11 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all outline-none" placeholder="Search blogs by title or author...">
        </div>
        <div class="flex gap-3 w-full md:w-auto">
            <select class="w-full md:w-40 px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm text-slate-600 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                <option value="">All Categories</option>
                <option value="strategy">Strategy & Tips</option>
                <option value="news">News & Updates</option>
                <option value="motivation">Motivation</option>
            </select>
            <select class="w-full md:w-32 px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm text-slate-600 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                <option value="">All Status</option>
                <option value="published">Published</option>
                <option value="draft">Drafts</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute top-3 left-3 bg-emerald-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wider shadow-sm">Published</div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-indigo-600 text-xs font-bold px-2.5 py-1 rounded-md shadow-sm">Strategy</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
                <p class="text-xs text-slate-400 font-medium mb-2 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Oct 24, 2024 • Admin
                </p>
                <h3 class="text-lg font-bold text-slate-900 leading-tight mb-2 group-hover:text-indigo-600 transition-colors line-clamp-2">How to Master Mathematics Optional for UPSC CSE</h3>
                <p class="text-sm text-slate-500 line-clamp-2 mb-4 flex-1">A comprehensive guide to scoring 300+ in Mathematics optional with proven time management strategies.</p>
                
                <div class="flex gap-2 border-t border-slate-100 pt-4">
                    <button class="flex-1 px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-600 hover:text-white transition-colors text-center">Edit Post</button>
                    <button class="px-4 py-2 bg-rose-50 text-rose-500 rounded-lg hover:bg-rose-500 hover:text-white transition-colors" title="Delete">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute top-3 left-3 bg-emerald-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wider shadow-sm">Published</div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-teal-600 text-xs font-bold px-2.5 py-1 rounded-md shadow-sm">News</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
                <p class="text-xs text-slate-400 font-medium mb-2 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Oct 22, 2024 • Dr. Anjali
                </p>
                <h3 class="text-lg font-bold text-slate-900 leading-tight mb-2 group-hover:text-indigo-600 transition-colors line-clamp-2">NTA Announces New Guidelines for NEET 2025</h3>
                <p class="text-sm text-slate-500 line-clamp-2 mb-4 flex-1">Understand the latest changes in the NEET UG examination pattern and how it affects your preparation.</p>
                
                <div class="flex gap-2 border-t border-slate-100 pt-4">
                    <button class="flex-1 px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-600 hover:text-white transition-colors text-center">Edit Post</button>
                    <button class="px-4 py-2 bg-rose-50 text-rose-500 rounded-lg hover:bg-rose-500 hover:text-white transition-colors" title="Delete">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col opacity-85 hover:opacity-100">
            <div class="relative h-48 overflow-hidden bg-slate-100">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Blog" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 grayscale group-hover:grayscale-0">
                <div class="absolute top-3 left-3 bg-amber-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-md uppercase tracking-wider shadow-sm">Draft</div>
                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-pink-600 text-xs font-bold px-2.5 py-1 rounded-md shadow-sm">Motivation</div>
            </div>
            <div class="p-5 flex-1 flex flex-col">
                <p class="text-xs text-slate-400 font-medium mb-2 flex items-center gap-2">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Unpublished • Faculty
                </p>
                <h3 class="text-lg font-bold text-slate-900 leading-tight mb-2 group-hover:text-indigo-600 transition-colors line-clamp-2">Overcoming Burnout During Preparation</h3>
                <p class="text-sm text-slate-500 line-clamp-2 mb-4 flex-1">Practical mindfulness routines to stay focused and energized during the final months of prep.</p>
                
                <div class="flex gap-2 border-t border-slate-100 pt-4">
                    <button class="flex-1 px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg text-sm font-bold hover:bg-indigo-600 hover:text-white transition-colors text-center">Resume Editing</button>
                    <button class="px-4 py-2 bg-rose-50 text-rose-500 rounded-lg hover:bg-rose-500 hover:text-white transition-colors" title="Delete">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="addBlogModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-sm" onclick="closeBlogModal()"></div>
    
    <div class="relative w-full max-w-5xl bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]" id="blogModalContent">
        
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/80 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-pink-50 text-pink-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <div>
                    <h3 class="text-xl font-extrabold text-slate-900 leading-none">Write New Blog</h3>
                    <p class="text-xs text-slate-500 mt-1">Create engaging content for your students.</p>
                </div>
            </div>
            <button onclick="closeBlogModal()" class="text-slate-400 hover:text-rose-500 transition-colors p-1.5 rounded-lg hover:bg-rose-50">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-6 overflow-y-auto custom-scrollbar flex-1 bg-slate-50/30">
            <form onsubmit="event.preventDefault();" class="space-y-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <div class="lg:col-span-1">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Cover Image <span class="text-rose-500">*</span></label>
                        <div class="w-full h-48 border-2 border-dashed border-slate-300 rounded-xl bg-white hover:bg-indigo-50 hover:border-indigo-300 transition-colors flex flex-col items-center justify-center cursor-pointer group relative overflow-hidden">
                            <div class="w-12 h-12 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-500 mb-2 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            </div>
                            <p class="text-sm font-semibold text-slate-600 group-hover:text-indigo-600">Upload Image</p>
                            <p class="text-xs text-slate-400 mt-1">16:9 Ratio recommended</p>
                            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                        </div>
                    </div>

                    <div class="lg:col-span-2 space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Blog Title <span class="text-rose-500">*</span></label>
                            <input type="text" required class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="Enter an eye-catching title...">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Category <span class="text-rose-500">*</span></label>
                                <select required class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm text-slate-700 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
                                    <option value="" disabled selected>Select Category</option>
                                    <option value="strategy">Strategy & Tips</option>
                                    <option value="news">News & Updates</option>
                                    <option value="motivation">Motivation</option>
                                    <option value="success">Success Stories</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Author Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="e.g. Admin, Dr. Sharma">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">SEO Tags / Keywords</label>
                            <input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all" placeholder="e.g. upsc, strategy, mathematics, tips (comma separated)">
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Blog Content <span class="text-rose-500">*</span></label>
                    <div class="border border-slate-200 rounded-xl overflow-hidden bg-white">
                        <div class="bg-slate-50 border-b border-slate-200 px-4 py-2 flex flex-wrap items-center gap-2">
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 4h12v2H6zm3 6h6v2H9zm-3 6h12v2H6z"/></svg></button>
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded font-bold font-serif">B</button>
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded italic font-serif">I</button>
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded underline font-serif">U</button>
                            <div class="w-px h-5 bg-slate-300 mx-1"></div>
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg></button>
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></button>
                            <button type="button" class="p-1.5 text-slate-600 hover:bg-slate-200 rounded"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg></button>
                        </div>
                        <textarea rows="10" required class="w-full px-4 py-4 text-sm focus:outline-none resize-none" placeholder="Start writing your amazing blog content here..."></textarea>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Short Excerpt (For Card Preview)</label>
                    <textarea rows="2" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all resize-none" placeholder="A brief 2-3 line summary of the blog..."></textarea>
                </div>
                
            </form>
        </div>

        <div class="px-6 py-4 border-t border-slate-100 bg-white flex items-center justify-between shrink-0">
            <div class="flex items-center gap-2">
                <span class="text-sm font-bold text-slate-600">Status:</span>
                <select class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-700 font-semibold focus:outline-none cursor-pointer">
                    <option value="published">Published</option>
                    <option value="draft" selected>Draft</option>
                </select>
            </div>
            <div class="flex items-center gap-3">
                <button onclick="closeBlogModal()" class="px-5 py-2.5 rounded-xl font-bold text-slate-600 bg-white border border-slate-200 hover:bg-slate-50 transition-colors shadow-sm text-sm">
                    Cancel
                </button>
                <button class="px-6 py-2.5 rounded-xl font-bold text-white bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 transition-all shadow-md shadow-indigo-500/30 transform hover:-translate-y-0.5 text-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    Save Blog
                </button>
            </div>
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
    const blogModal = document.getElementById('addBlogModal');
    const blogModalContent = document.getElementById('blogModalContent');

    function openBlogModal() {
        blogModal.classList.remove('opacity-0', 'pointer-events-none');
        blogModalContent.classList.remove('scale-95');
        blogModalContent.classList.add('scale-100');
        // Prevent background scrolling
        document.body.style.overflow = 'hidden';
    }

    function closeBlogModal() {
        blogModal.classList.add('opacity-0', 'pointer-events-none');
        blogModalContent.classList.remove('scale-100');
        blogModalContent.classList.add('scale-95');
        // Restore background scrolling
        document.body.style.overflow = 'auto';
    }
</script>

@endsection