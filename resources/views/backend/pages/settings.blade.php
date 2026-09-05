@extends('backend.layouts.app')

@section('content')

<div class="p-6 sm:p-8 w-full max-w-7xl mx-auto font-sans text-slate-800 relative">

    <div class="mb-8">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Site Settings</h2>
        <p class="text-sm text-slate-500 mt-1">Configure global website parameters, contact information, and branding.</p>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center gap-3">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- General Settings -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 sm:p-8">
                    <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        Institute Information
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Institute Name</label>
                            <input type="text" name="site_name" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'site_name')->first()->value ?? 'MathShala') : 'MathShala' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Contact Email</label>
                                <input type="email" name="contact_email" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'contact_email')->first()->value ?? 'info@thevisionclasses.com') : 'info@thevisionclasses.com' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Phone Number</label>
                                <input type="text" name="contact_phone" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'contact_phone')->first()->value ?? '+91 98765 43210') : '+91 98765 43210' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Office Address</label>
                            <textarea name="contact_address" rows="3" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none resize-none">{{ isset($settings['general']) ? ($settings['general']->where('key', 'contact_address')->first()->value ?? ' Mukherjee Nagar, Delhi, 110009') : ' Mukherjee Nagar, Delhi, 110009' }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 sm:p-8">
                    <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        Social Media Links
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Facebook URL</label>
                            <input type="text" name="facebook_url" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'facebook_url')->first()->value ?? '#') : '#' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Instagram URL</label>
                            <input type="text" name="instagram_url" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'instagram_url')->first()->value ?? '#') : '#' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Youtube URL</label>
                            <input type="text" name="youtube_url" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'youtube_url')->first()->value ?? '#') : '#' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Twitter / X URL</label>
                            <input type="text" name="twitter_url" value="{{ isset($settings['general']) ? ($settings['general']->where('key', 'twitter_url')->first()->value ?? '#') : '#' }}" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500 outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Actions -->
            <div class="space-y-6">
                <div class="bg-brand-dark rounded-2xl shadow-xl p-6 sm:p-8 text-white relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                    <h3 class="text-lg font-bold mb-4 relative z-10">Save Changes</h3>
                    <p class="text-sm text-white/60 mb-6 relative z-10">Update these settings to reflect across the entire website instantly.</p>
                    <button type="submit" class="w-full py-3 bg-white text-brand-dark font-extrabold rounded-xl hover:bg-brand-orange hover:text-white transition-all shadow-lg transform hover:-translate-y-1">
                        Publish Settings
                    </button>
                </div>
                
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 border-l-4 border-l-amber-500">
                    <h4 class="font-bold text-slate-900 mb-2">Pro Tip</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Changes made here are global. Ensure that all URLs start with <code>https://</code> for security.</p>
                </div>
            </div>

        </div>
    </form>
</div>

@endsection
