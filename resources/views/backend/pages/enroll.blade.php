@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
        <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Student Enrollments</h2>
            <p class="text-sm text-slate-500 mt-1">Manage and track all new admission inquiries from the website.</p>
        </div>
        <div class="flex items-center gap-3">
            <span class="px-4 py-2 bg-brand-orange/10 text-brand-orange rounded-xl text-xs font-black uppercase tracking-widest border border-brand-orange/20">
                Total: {{ count($enrollments) }}
            </span>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden">
        
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                
                <thead class="bg-slate-50/80 border-b border-slate-100 text-slate-500 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-5">Student Info</th>
                        <th class="px-8 py-5">Contact Details</th>
                        <th class="px-8 py-5">Interested Course</th>
                        <th class="px-8 py-5">Payment Details</th>
                        <th class="px-8 py-5">Submission Date</th>
                        <th class="px-8 py-5 text-right">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-50">
                    @forelse($enrollments as $item)
                    <tr class="hover:bg-slate-50/50 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-brand-dark text-white flex items-center justify-center font-bold text-sm shadow-sm group-hover:scale-110 transition-transform">
                                    {{ strtoupper(substr($item->school_name ?? $item->name, 0, 1)) }}
                                </div>
                                <div>
                                    <span class="font-bold text-slate-900 block">{{ $item->school_name ?? $item->name }}</span>
                                    @if($item->school_name && $item->principal_name)
                                        <span class="text-xs text-slate-500 block">Principal/Coordinator: {{ $item->principal_name }}</span>
                                    @endif
                                    @if($item->name && $item->school_name)
                                        <span class="text-xs text-slate-500 block">Child: {{ $item->name }}</span>
                                    @endif
                                    @if($item->student_class || $item->age)
                                        <span class="text-xs text-slate-500 block">
                                            @if($item->student_class) Class: {{ $item->student_class }} @endif
                                            @if($item->student_class && $item->age) | @endif
                                            @if($item->age) Age: {{ $item->age }} @endif
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col gap-1">
                                <span class="text-slate-700 font-medium flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                    {{ $item->phone }}
                                </span>
                                <span class="text-slate-400 text-xs flex items-center gap-2">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    {{ $item->email }}
                                </span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <span class="inline-flex items-center px-3 py-1 bg-brand-orange/5 text-brand-orange border border-brand-orange/10 rounded-lg text-[11px] font-black uppercase tracking-tight">
                                {{ $item->course }}
                            </span>
                            @if($item->enrollment_type)
                            <span class="block mt-2 text-xs font-bold {{ $item->enrollment_type == 'demo' ? 'text-blue-500' : 'text-green-500' }}">
                                {{ ucfirst($item->enrollment_type) }}
                            </span>
                            @endif
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col gap-1">
                                <span class="font-bold text-slate-800">₹{{ $item->amount ?? 'N/A' }}</span>
                                @if($item->payment_status === 'completed')
                                    <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-100 inline-block w-fit">Paid</span>
                                    <span class="text-[10px] text-slate-400 font-mono">{{ $item->payment_id }}</span>
                                @else
                                    <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2 py-0.5 rounded border border-amber-100 inline-block w-fit">Pending</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex flex-col">
                                <span class="text-slate-600 font-bold">{{ $item->created_at->format('d M, Y') }}</span>
                                <span class="text-slate-400 text-[10px]">{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <button onclick="openModal({{ $item->id }})" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 hover:bg-brand-cyan hover:text-white text-slate-600 rounded-xl text-[10px] font-black uppercase tracking-widest transition-colors shadow-sm">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                View Details
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-20 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <div class="w-16 h-16 bg-slate-50 text-slate-300 rounded-full flex items-center justify-center text-3xl mb-2">📥</div>
                                <h3 class="text-lg font-bold text-slate-400">No enrollments yet</h3>
                                <p class="text-sm text-slate-400 max-w-xs mx-auto">When students fill out the admission form on your website, they will appear here.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>

<!-- Details Modal -->
<div id="detailsModal" class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal()"></div>
    
    <div class="fixed inset-0 flex items-center justify-center p-4">
        <div class="bg-white rounded-[2rem] shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden flex flex-col relative transform transition-all">
            
            <div class="px-8 py-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <h3 class="text-2xl font-extrabold text-brand-dark tracking-tight" id="modalTitle">Enrollment Details</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-slate-700 bg-white p-2 rounded-xl shadow-sm border border-slate-100 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="p-8 overflow-y-auto custom-scrollbar flex-1 bg-white" id="modalContent">
                <!-- Content injected via JS -->
            </div>
            
            <div class="px-8 py-5 border-t border-slate-100 bg-slate-50/50 flex justify-end">
                <button onclick="closeModal()" class="px-6 py-2.5 bg-white border border-slate-200 text-slate-600 font-bold rounded-xl hover:bg-slate-50 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const enrollmentsData = @json($enrollments->keyBy('id'));

    function openModal(id) {
        const data = enrollmentsData[id];
        document.getElementById('detailsModal').classList.remove('hidden');
        document.getElementById('modalTitle').innerText = data.name ? data.name + ' - Details' : 'Enrollment Details';
        
        let fileLinks = '';
        if(data.school_id_card) {
            fileLinks += `<a href="/storage/${data.school_id_card}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-cyan/10 text-brand-cyan rounded-lg text-xs font-bold hover:bg-brand-cyan/20 transition-colors"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg> View School ID</a>`;
        }
        if(data.report_card) {
            fileLinks += `<a href="/storage/${data.report_card}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-brand-orange/10 text-brand-orange rounded-lg text-xs font-bold hover:bg-brand-orange/20 transition-colors"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg> View Report Card</a>`;
        }

        const html = `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Learner Info -->
                <div>
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Learner Details</h4>
                    <div class="space-y-3 text-sm">
                        <p><span class="font-bold text-slate-700">Name:</span> ${data.name || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Age:</span> ${data.age || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Gender:</span> ${data.gender || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Class:</span> ${data.student_class || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">School:</span> ${data.school_name || 'N/A'}</p>
                    </div>
                </div>

                <!-- Academic Info -->
                <div>
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Academic Info</h4>
                    <div class="space-y-3 text-sm">
                        <p><span class="font-bold text-slate-700">Math Marks:</span> ${data.math_marks || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Overall Marks:</span> ${data.overall_marks || 'N/A'}</p>
                        <div class="pt-2 flex gap-3">
                            ${fileLinks || '<span class="text-slate-400 italic">No files uploaded</span>'}
                        </div>
                    </div>
                </div>

                <!-- Parent 1 -->
                <div>
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Father's Details</h4>
                    <div class="space-y-3 text-sm">
                        <p><span class="font-bold text-slate-700">Name:</span> ${data.father_name || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Qualification:</span> ${data.father_qualification || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Occupation:</span> ${data.father_occupation || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Contact:</span> ${data.father_contact || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Address:</span> ${data.father_address || 'N/A'}</p>
                    </div>
                </div>

                <!-- Parent 2 -->
                <div>
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Mother's Details</h4>
                    <div class="space-y-3 text-sm">
                        <p><span class="font-bold text-slate-700">Name:</span> ${data.mother_name || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Qualification:</span> ${data.mother_qualification || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Occupation:</span> ${data.mother_occupation || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Contact:</span> ${data.mother_contact || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Address:</span> ${data.mother_address || 'N/A'}</p>
                    </div>
                </div>

                <!-- Contact & Program -->
                <div>
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Contact & Program</h4>
                    <div class="space-y-3 text-sm">
                        <p><span class="font-bold text-slate-700">Primary Phone:</span> ${data.phone || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Email:</span> ${data.email || 'N/A'}</p>
                        <p><span class="font-bold text-slate-700">Preferred Program:</span> <span class="px-2 py-1 bg-brand-orange/10 text-brand-orange rounded font-bold uppercase">${data.course || 'N/A'}</span></p>
                    </div>
                </div>

                <!-- Payment Details -->
                <div>
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Payment Details</h4>
                    <div class="space-y-3 text-sm">
                        <p><span class="font-bold text-slate-700">Enrollment Type:</span> <span class="uppercase font-bold ${data.enrollment_type === 'demo' ? 'text-blue-500' : 'text-green-500'}">${data.enrollment_type || 'N/A'}</span></p>
                        <p><span class="font-bold text-slate-700">Amount Paid:</span> ₹${data.amount || '0'}</p>
                        <p><span class="font-bold text-slate-700">Status:</span> ${data.payment_status === 'completed' ? '<span class="text-green-600 font-bold">Completed</span>' : '<span class="text-amber-500 font-bold">Pending/Failed</span>'}</p>
                        <p><span class="font-bold text-slate-700">Transaction ID:</span> <span class="font-mono text-xs bg-slate-100 px-1 py-0.5 rounded">${data.payment_id || 'N/A'}</span></p>
                    </div>
                </div>

                <!-- Observations -->
                <div class="md:col-span-2">
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-4 border-b border-slate-100 pb-2">Observations & Notes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                        <div>
                            <p class="font-bold text-slate-700 mb-1">Math Obs:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.obs_math || 'N/A'}</p>
                        </div>
                        <div>
                            <p class="font-bold text-slate-700 mb-1">Other Subjects Obs:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.obs_other || 'N/A'}</p>
                        </div>
                        <div>
                            <p class="font-bold text-slate-700 mb-1">Overall Obs:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.obs_overall || 'N/A'}</p>
                        </div>
                        <div>
                            <p class="font-bold text-slate-700 mb-1">Why MathShala:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.why_mathshala || 'N/A'}</p>
                        </div>
                        <div>
                            <p class="font-bold text-slate-700 mb-1">Key Expectations:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.key_expectations || 'N/A'}</p>
                        </div>
                        <div>
                            <p class="font-bold text-slate-700 mb-1">Precautions:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.precautions || 'N/A'}</p>
                        </div>
                        <div class="md:col-span-2">
                            <p class="font-bold text-slate-700 mb-1">Other Requests:</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.other_requests || 'N/A'}</p>
                        </div>
                        <div class="md:col-span-2">
                            <p class="font-bold text-slate-700 mb-1">Local Guardian (if any):</p>
                            <p class="text-slate-600 bg-slate-50 p-3 rounded-xl">${data.local_guardian_details || 'N/A'}</p>
                        </div>
                    </div>
                </div>
            </div>
        `;
        document.getElementById('modalContent').innerHTML = html;
        document.body.style.overflow = 'hidden'; // prevent background scrolling
    }

    function closeModal() {
        document.getElementById('detailsModal').classList.add('hidden');
        document.body.style.overflow = ''; 
    }
</script>

@endsection