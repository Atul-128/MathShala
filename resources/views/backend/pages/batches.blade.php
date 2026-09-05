@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight uppercase">Batch & Ticker Management</h2>
            <p class="text-sm text-slate-500 mt-1 uppercase tracking-widest text-[10px] font-bold">Configure upcoming batches and live notifications</p>
        </div>
        <div class="flex items-center gap-3 w-full sm:w-auto">
            <button onclick="openBatchModal()" class="w-full sm:w-auto flex items-center justify-center gap-2 px-5 py-2.5 bg-slate-900 text-white rounded-xl hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 text-sm font-bold shadow-md">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add New Batch
            </button>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center gap-3 animate-slide-in">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span class="text-sm font-bold uppercase tracking-wide">{{ session('success') }}</span>
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left: Batch Settings & Tickers -->
        <div class="lg:col-span-4 space-y-8">
            <!-- Section Titles -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8">
                <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight mb-6 flex items-center gap-2">
                    <span class="w-2 h-6 bg-orange-500 rounded-full"></span>
                    Section Display
                </h3>
                <form action="{{ route('batch.settings.update') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Main Title</label>
                        <input type="text" name="batch_main_title" value="{{ $batch_title->value }}" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Sub Title</label>
                        <input type="text" name="batch_sub_title" value="{{ $batch_subtitle->value }}" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Description / Group Title</label>
                        <textarea name="batch_description" rows="2" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all">{{ $batch_description->value }}</textarea>
                    </div>
                    <button type="submit" class="w-full py-3 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase tracking-[0.2em] hover:bg-orange-600 transition-all active:scale-95 shadow-lg">
                        Update Titles
                    </button>
                </form>
            </div>

            <!-- Live Tickers -->
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-8">
                <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight mb-6 flex items-center gap-2">
                    <span class="w-2 h-6 bg-rose-500 rounded-full"></span>
                    Live Tickers
                </h3>
                
                <form action="{{ route('ticker.store') }}" method="POST" class="mb-6">
                    @csrf
                    <div class="flex gap-2">
                        <input type="text" name="message" placeholder="NEW ANNOUNCEMENT..." required class="flex-grow px-4 py-3 bg-slate-50 border-none rounded-xl text-xs font-bold text-slate-900 focus:ring-2 focus:ring-rose-500 outline-none transition-all">
                        <button type="submit" class="px-4 bg-rose-500 text-white rounded-xl hover:bg-slate-900 transition-all active:scale-95">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        </button>
                    </div>
                </form>

                <div class="space-y-3">
                    @foreach($tickers as $ticker)
                    <div class="p-4 bg-slate-50 rounded-2xl flex items-center justify-between group transition-all hover:bg-white hover:shadow-md border border-transparent hover:border-slate-100">
                        <div class="flex items-center gap-3 overflow-hidden">
                            <span class="w-2 h-2 bg-rose-500 rounded-full animate-pulse shrink-0"></span>
                            <p class="text-[11px] font-bold text-slate-600 truncate uppercase tracking-tight">{{ $ticker->message }}</p>
                        </div>
                        <a href="{{ route('ticker.delete', $ticker->id) }}" onclick="return confirm('Delete this ticker?')" class="p-1.5 text-slate-300 hover:text-rose-500 transition-colors">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Right: Batch Table -->
        <div class="lg:col-span-8">
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 border-b border-slate-50 flex items-center justify-between bg-slate-50/30">
                    <h3 class="text-lg font-black text-slate-900 uppercase tracking-tight">Active Batches</h3>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-orange-500/10 text-orange-600 text-[10px] font-black uppercase rounded-full tracking-widest">{{ $batches->count() }} TOTAL</span>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Category</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Venue</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Date / Time</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Fee</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach($batches as $batch)
                            <tr class="hover:bg-slate-50/30 transition-colors group">
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-slate-900 text-white text-[10px] font-black rounded uppercase tracking-widest shadow-lg">{{ $batch->category }}</span>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-900 uppercase tracking-tight">{{ $batch->venue }}</p>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-xs font-black text-slate-900 mb-1">{{ $batch->date }}</p>
                                    <p class="text-[10px] font-bold text-slate-400">{{ $batch->time }}</p>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-xs font-black text-rose-600">{{ $batch->fee }}</p>
                                </td>
                                <td class="px-8 py-5">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="editBatch({{ $batch->id }})" class="p-2 text-slate-400 hover:text-orange-500 transition-colors">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                        </button>
                                        <a href="{{ route('batch.delete', $batch->id) }}" onclick="return confirm('Delete this batch?')" class="p-2 text-slate-400 hover:text-rose-500 transition-colors">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Batch Modal -->
<div id="batchModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-md" onclick="closeBatchModal()"></div>
    <div class="relative w-full max-w-xl bg-white rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="batchModalContent">
        <form id="batchForm" action="{{ route('batch.store') }}" method="POST">
            @csrf
            <div class="flex items-center justify-between px-8 py-6 border-b border-slate-50 bg-slate-50/30">
                <div>
                    <h3 id="modalTitle" class="text-2xl font-black text-slate-900 uppercase tracking-tight">New Batch</h3>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-widest mt-1">Direct admin entry</p>
                </div>
                <button type="button" onclick="closeBatchModal()" class="text-slate-400 hover:text-rose-500 p-2 rounded-full hover:bg-rose-50 transition-all">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-8 space-y-6">
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Batch Category (Tab Name)</label>
                    <input type="text" name="category" id="batch_category" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="E.G. GS, GS + CSAT">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Venue / Location</label>
                    <input type="text" name="venue" id="batch_venue" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="E.G. OLD RAJINDER NAGAR">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Start Date</label>
                        <input type="text" name="date" id="batch_date" placeholder="E.G. 14th MAY, 2026" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Timings</label>
                        <input type="text" name="time" id="batch_time" placeholder="E.G. 8:00 AM - 11:00 AM" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all">
                    </div>
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Fee Structure</label>
                    <input type="text" name="fee" id="batch_fee" required class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all" placeholder="E.G. RS. 1,47,457 + GST">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Priority Order</label>
                        <input type="number" name="order" id="batch_order" value="0" class="w-full px-5 py-3.5 bg-slate-50 border-none rounded-2xl text-sm font-bold text-slate-900 focus:ring-2 focus:ring-orange-500 outline-none transition-all">
                    </div>
                </div>
            </div>
            <div class="px-8 py-6 border-t border-slate-50 bg-slate-50/30 flex justify-end gap-4">
                <button type="button" onclick="closeBatchModal()" class="px-6 py-3 text-xs font-black text-slate-400 uppercase tracking-widest hover:text-slate-600 transition-colors">Cancel</button>
                <button type="submit" class="px-8 py-3 bg-slate-900 text-white rounded-2xl text-xs font-black uppercase tracking-[0.2em] shadow-lg hover:bg-orange-600 transform hover:-translate-y-1 transition-all">
                    Save Batch Details
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openBatchModal() {
        document.getElementById('batchForm').action = "{{ route('batch.store') }}";
        document.getElementById('modalTitle').innerText = "New Batch";
        document.getElementById('batchForm').reset();
        
        const modal = document.getElementById('batchModal');
        const content = document.getElementById('batchModalContent');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeBatchModal() {
        const modal = document.getElementById('batchModal');
        const content = document.getElementById('batchModalContent');
        modal.classList.add('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
        document.body.style.overflow = 'auto';
    }

    function editBatch(id) {
        fetch(`/admin/batches/edit/${id}`)
            .then(res => res.json())
            .then(data => {
                document.getElementById('batchForm').action = `/admin/batches/update/${id}`;
                document.getElementById('modalTitle').innerText = "Edit Batch";
                
                document.getElementById('batch_category').value = data.category;
                document.getElementById('batch_venue').value = data.venue;
                document.getElementById('batch_date').value = data.date;
                document.getElementById('batch_time').value = data.time;
                document.getElementById('batch_fee').value = data.fee;
                document.getElementById('batch_order').value = data.order;

                const modal = document.getElementById('batchModal');
                const content = document.getElementById('batchModalContent');
                modal.classList.remove('opacity-0', 'pointer-events-none');
                content.classList.remove('scale-95');
                content.classList.add('scale-100');
                document.body.style.overflow = 'hidden';
            });
    }
</script>

@endsection
