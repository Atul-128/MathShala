@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Faculty Management</h2>
            <p class="text-sm text-slate-500 mt-1">Manage your team of expert educators and coordinators.</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openFacultyModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-brand-600 text-white rounded-xl hover:shadow-[0_0_20px_rgba(37,99,235,0.3)] transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Faculty Member
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
        @forelse($faculties as $faculty)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="relative aspect-square overflow-hidden bg-slate-50">
                <img src="{{ $faculty->image ? asset('uploads/faculty/'.$faculty->image) : 'https://ui-avatars.com/api/?name='.$faculty->name }}" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                
                <div class="absolute top-3 left-3">
                    @if($faculty->status == 'active')
                    <span class="px-2 py-1 bg-emerald-500 text-white text-[10px] font-bold rounded uppercase tracking-widest shadow-lg">Active</span>
                    @else
                    <span class="px-2 py-1 bg-slate-500 text-white text-[10px] font-bold rounded uppercase tracking-widest shadow-lg">Draft</span>
                    @endif
                </div>

                <div class="absolute top-3 right-3 flex gap-2">
                    <a href="{{ route('faculty.edit', $faculty->id) }}" class="p-2 bg-white/90 backdrop-blur-sm text-brand-600 rounded-lg shadow-sm hover:bg-brand-600 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </a>
                    <a href="{{ route('faculty.delete', $faculty->id) }}" class="p-2 bg-white/90 backdrop-blur-sm text-rose-500 rounded-lg shadow-sm hover:bg-rose-500 hover:text-white transition-all" onclick="return confirm('Are you sure?')">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </a>
                </div>
            </div>
            <div class="p-5 text-center">
                <h4 class="font-bold text-slate-900 mb-1">{{ $faculty->name }}</h4>
                <p class="text-xs text-brand-600 font-bold uppercase tracking-widest">{{ $faculty->designation }}</p>
                @if($faculty->department)
                <p class="text-[10px] text-slate-400 mt-1 uppercase">{{ $faculty->department }}</p>
                @endif
            </div>
        </div>
        @empty
        <div class="col-span-full py-20 text-center bg-white rounded-3xl border-2 border-dashed border-slate-200">
            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-10 h-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900">No Faculty Members Found</h3>
            <p class="text-sm text-slate-500 mt-1">Start by adding your team members using the button above.</p>
        </div>
        @endforelse
    </div>
</div>

<!-- Add Faculty Modal -->
<div id="facultyModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeFacultyModal()"></div>
    <div class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modalContent">
        <form action="{{ route('faculty.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/50">
                <h3 class="text-xl font-extrabold text-slate-900">Add Faculty Member</h3>
                <button type="button" onclick="closeFacultyModal()" class="text-slate-400 hover:text-rose-500 p-1">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Designation</label>
                    <input type="text" name="designation" placeholder="e.g. Senior Faculty" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Department / Subject</label>
                    <input type="text" name="department" placeholder="e.g. Mathematics" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Profile Image</label>
                    <input type="file" name="image" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-brand-50 file:text-brand-700 hover:file:bg-brand-100">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Display Order</label>
                        <input type="number" name="order" value="0" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Status</label>
                        <select name="status" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                            <option value="active">Active</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-slate-100 bg-slate-50 flex justify-end gap-3">
                <button type="button" onclick="closeFacultyModal()" class="px-5 py-2 text-sm font-bold text-slate-500">Cancel</button>
                <button type="submit" class="px-6 py-2 bg-brand-600 text-white rounded-xl text-sm font-bold shadow-lg shadow-brand-200">Save Faculty</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openFacultyModal() {
        const modal = document.getElementById('facultyModal');
        const content = document.getElementById('modalContent');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
    }
    function closeFacultyModal() {
        const modal = document.getElementById('facultyModal');
        const content = document.getElementById('modalContent');
        modal.classList.add('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
    }
</script>

@endsection
