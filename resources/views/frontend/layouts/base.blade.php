<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathShala - High-Impact Railway Coaching</title>
    <link rel="icon" type="image/png" href="{{ asset('images/the-vision-classes-logo.png') }}">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            bg: '#f8fafc', // Light modern background
                            dark: '#273a66', // Deep navy blue from the logo
                            orange: '#f5aa33', // Accent yellow/orange
                            cyan: '#55c4db', // Light blue from the logo
                        }
                    },
                    animation: {
                        'marquee-left': 'marquee-left 25s linear infinite',
                        'marquee-right': 'marquee-right 25s linear infinite',
                    },
                    keyframes: {
                        'marquee-left': {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' }
                        },
                        'marquee-right': {
                            '0%': { transform: 'translateX(-50%)' },
                            '100%': { transform: 'translateX(0%)' }
                        }
                    }
                }
            }
        }
    </script>
    @include('frontend.layouts.style')
</head>
<body class="antialiased bg-[#273a66] text-white">

    {{-- model --}}

        {{-- @include('frontend.layout.popup') --}}


      {{-- header --}}
        @include('frontend.layouts.header')



        <!--**********************************
            Content body start
        ***********************************-->
        @yield('page-content')
        <!--**********************************
            Content body end
        ***********************************-->
        {{-- @include('frontend.layouts.icons') --}}
   
        {{-- footer --}}
        @include('frontend.layouts.footer')
        <div>
            <a href="tel:+919199754577" 
            class="fixed bottom-24 right-8 z-50 bg-gradient-to-tr from-blue-400 to-blue-600 p-4 rounded-full shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:shadow-[0_0_30px_rgba(59,130,246,0.6)] hover:scale-110 transition-all duration-300 group">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
            </a>
       
            <a href="https://wa.me/919199754577" target="_blank" class="fixed bottom-8 right-8 z-50 bg-gradient-to-tr from-green-400 to-green-600 p-4 rounded-full shadow-[0_0_20px_rgba(74,222,128,0.4)] hover:shadow-[0_0_30px_rgba(74,222,128,0.6)] hover:scale-110 transition-all duration-300 group">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/>
                </svg>
            </a>
        </div>
    </div>
    @if(session('success'))
<div id="toast"
     class="fixed top-5 right-5 z-50 bg-white border-l-4 border-green-500 shadow-xl px-5 py-4 rounded-xl flex items-center gap-3 transition-all duration-500">

    <div class="text-green-500">
        ✔
    </div>

    <div>
        <p class="font-semibold text-slate-800">Success</p>
        <p class="text-sm text-slate-500">{{ session('success') }}</p>
    </div>
</div>

<script>
    setTimeout(() => {
        document.getElementById('toast').style.opacity = '0';
        document.getElementById('toast').style.transform = 'translateX(100px)';
        setTimeout(() => {
            document.getElementById('toast').remove();
        }, 500);
    }, 3000);
</script>
@endif
    {{-- js code --}}
    @include('frontend.layouts.script')

</body>
</html>
