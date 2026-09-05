<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | MathShala</title>
    <link rel="icon" type="image/png" href="{{ asset('images/the-vision-classes-logo.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Outfit', 'sans-serif'], heading: ['Outfit', 'sans-serif'] },
                    colors: {
                        brand: {
                            orange: '#ff6b00', cyan: '#00e5ff', dark: '#0f172a'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 5px; height: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background-color: #e2e8f0; border-radius: 10px; }
        .custom-scrollbar:hover::-webkit-scrollbar-thumb { background-color: #cbd5e1; }
        
        /* Dark scrollbar for sidebar */
        #sidebar-menu::-webkit-scrollbar-thumb { background-color: #334155; }
        #sidebar-menu:hover::-webkit-scrollbar-thumb { background-color: #475569; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex min-h-screen">

    <!-- Mobile Overlay -->
    <div class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-40 lg:hidden hidden transition-opacity" id="mobile-overlay"></div>

    <!-- Premium Dark Sidebar -->
    <aside class="fixed inset-y-0 left-0 z-50 w-72 bg-brand-dark text-white border-r border-slate-800 flex flex-col transition-transform duration-300 lg:translate-x-0 -translate-x-full shadow-2xl" id="sidebar">
        
        <!-- Sidebar Header (Brand) -->
        <div class="flex items-center justify-center h-24 border-b border-white/5 px-6 relative">
            <div class="absolute inset-0 bg-gradient-to-br from-brand-orange/10 to-brand-cyan/10 opacity-50"></div>
            <div class="flex items-center gap-3 relative z-10">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-brand-orange to-brand-cyan flex items-center justify-center shadow-[0_8px_20px_rgb(255,107,0,0.3)]">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="text-xl font-black tracking-tight text-white uppercase">Math<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-cyan">Shala</span></span>
            </div>
            <button class="lg:hidden ml-auto text-slate-400 hover:text-white relative z-10" onclick="document.getElementById('sidebar').classList.add('-translate-x-full'); document.getElementById('mobile-overlay').classList.add('hidden');">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-1.5 custom-scrollbar" id="sidebar-menu">
            <p class="px-4 text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3 mt-2">Main Menu</p>
            
            <a href="{{ route('dashboard') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-orange transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </div>
                Dashboard
            </a>
            
            <a href="{{ route('courses') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-brand-cyan transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                Courses
            </a>

            <a href="{{ route('banner') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-blue-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                Banners
            </a>

            <a href="{{ route('gallery.create') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-teal-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                Gallery
            </a>

            <a href="{{ route('testimonials') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-pink-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                Testimonials
            </a>

            <a href="{{ route('faculty') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-indigo-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                Faculty
            </a>

            <a href="{{ route('performers') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-amber-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                Performers
            </a>

            <a href="{{ route('batches') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-orange-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                Batches
            </a>

            <a href="{{ route('assets') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-emerald-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                Site Assets
            </a>
            
            <p class="px-4 text-[10px] font-black text-slate-500 uppercase tracking-widest mt-8 mb-3">Communications</p>

            <a href="{{ route('enrollments') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group relative">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-amber-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </div>
                Enroll Inquiries
            </a>

            <a href="{{ route('settings') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-2xl text-slate-400 font-semibold hover:text-white hover:bg-white/5 transition-all group">
                <div class="w-8 h-8 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-white/10 transition-all icon-container">
                    <svg class="w-4 h-4 text-slate-400 group-hover:text-rose-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                Settings
            </a>
        </nav>
        
        <form method="POST" action="{{ route('admin.logout') }}" class="p-4 border-t border-white/5 bg-black/10">
            @csrf
            <button type="submit"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-rose-400 font-bold hover:text-white hover:bg-rose-500 transition-all group shadow-sm bg-white/5 border border-white/10">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col lg:ml-72 min-h-screen transition-all duration-300 relative">
        
        <!-- Premium Header -->
        <header class="sticky top-0 z-30 bg-white/80 backdrop-blur-2xl border-b border-slate-100 h-24 px-8 flex items-center justify-between shadow-[0_4px_30px_rgb(0,0,0,0.02)]">
            <div class="flex items-center gap-4">
                <button class="lg:hidden p-2 rounded-xl text-slate-500 hover:bg-slate-100 transition-colors border border-transparent hover:border-slate-200" onclick="document.getElementById('sidebar').classList.remove('-translate-x-full'); document.getElementById('mobile-overlay').classList.remove('hidden');">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div>
                    <h1 class="text-2xl font-extrabold text-brand-dark tracking-tight">Dashboard</h1>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest hidden sm:block">MathShala Management System</p>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <button class="relative p-2.5 text-slate-400 hover:text-brand-orange transition-colors rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-rose-500 rounded-full ring-4 ring-white animate-pulse"></span>
                </button>

                <div class="h-10 w-px bg-slate-200 hidden sm:block"></div>

                <div class="flex items-center gap-4 cursor-pointer group">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-brand-dark leading-none">Admin User</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Super Admin</p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=ff6b00&color=fff" alt="Admin" class="w-11 h-11 rounded-2xl shadow-sm ring-2 ring-slate-100 group-hover:ring-brand-orange transition-all">
                    <svg class="w-4 h-4 text-slate-300 hidden sm:block group-hover:text-brand-orange transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>
        </header>
        
        <!-- Main Body Area -->
        <div class="flex-1 overflow-hidden relative">
            <div class="absolute inset-0 bg-grid-slate-100/[0.04] bg-[size:40px_40px] z-0"></div>
            @yield('content')
        </div>

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const navItems = document.querySelectorAll('.nav-item');
        
        // Premium Active Classes for Sidebar Menu
        const activeClasses = [
            'bg-gradient-to-r', 'from-brand-orange', 'to-brand-cyan', 
            'text-white', 'shadow-[0_8px_30px_rgb(255,107,0,0.3)]', 'font-bold'
        ];
        const inactiveClasses = [
            'text-slate-400', 'hover:text-white', 'hover:bg-white/5', 'font-semibold', 'group'
        ];

        function setActiveLink(activeElement) {
            navItems.forEach(item => {
                item.classList.remove(...activeClasses);
                item.classList.add(...inactiveClasses);
                
                // Reset icon containers
                const iconContainer = item.querySelector('.icon-container');
                if(iconContainer) {
                    iconContainer.classList.remove('bg-white/20');
                    iconContainer.classList.add('bg-white/5', 'group-hover:bg-white/10');
                }
                
                // Reset SVG color classes
                const svg = item.querySelector('svg');
                if(svg) {
                    svg.classList.remove('text-white');
                    svg.classList.add('text-slate-400');
                }
            });

            activeElement.classList.remove(...inactiveClasses);
            activeElement.classList.add(...activeClasses);
            
            // Set active icon container
            const activeIconContainer = activeElement.querySelector('.icon-container');
            if(activeIconContainer) {
                activeIconContainer.classList.remove('bg-white/5', 'group-hover:bg-white/10');
                activeIconContainer.classList.add('bg-white/20');
            }
            
            // Set active SVG color
            const activeSvg = activeElement.querySelector('svg');
            if(activeSvg) {
                activeSvg.classList.remove('text-slate-400', 'group-hover:text-brand-orange', 'group-hover:text-brand-cyan', 'group-hover:text-blue-500', 'group-hover:text-teal-500', 'group-hover:text-pink-500', 'group-hover:text-indigo-500', 'group-hover:text-amber-500', 'group-hover:text-orange-500', 'group-hover:text-emerald-500', 'group-hover:text-rose-500');
                activeSvg.classList.add('text-white');
            }
        }

        const currentUrl = window.location.href;
        let isAnyActive = false;

        navItems.forEach(item => {
            if (item.href === currentUrl || currentUrl.startsWith(item.href + '/')) {
                setActiveLink(item);
                isAnyActive = true;
            }

            item.addEventListener('click', function() {
                setActiveLink(this);
            });
        });

        if (!isAnyActive && navItems.length > 0) {
            setActiveLink(navItems[0]);
        }
    });
    </script>
</body>
</html>