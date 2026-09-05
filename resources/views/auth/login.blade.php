<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Vision Classes Institute - Admin Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-100">

<div class="min-h-screen flex">

    <!-- LEFT SIDE -->
    <div class="hidden lg:flex w-1/2 relative items-center justify-center text-white">

        <img src="{{ asset('images/school-bg.jpg') }}"
             class="absolute inset-0 w-full h-full object-cover" />

        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 to-indigo-900/80"></div>

        <div class="relative z-10 px-12 text-center max-w-xl">
            <h1 class="text-4xl font-extrabold mb-4 leading-tight">
                The Vision Classes Institute
            </h1>

            <p class="text-lg text-blue-100 mb-6">
                Empowering students with knowledge, discipline, and excellence.
                Join us in shaping a brighter future through quality education.
            </p>

            <div class="flex justify-center gap-4">
                <div class="bg-white/10 px-5 py-3 rounded-xl backdrop-blur-md">
                    🎓 Quality Education
                </div>
                <div class="bg-white/10 px-5 py-3 rounded-xl backdrop-blur-md">
                    🏫 Smart Classes
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="w-full lg:w-1/2 flex items-center justify-center px-6">

        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-slate-900">
                    Admin Login
                </h2>
                <p class="text-sm text-slate-500 mt-2">
                    Login to manage your institute dashboard
                </p>
            </div>

            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">
                        Email Address
                    </label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none"
                        placeholder="admin@gmail.com">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">
                        Password
                    </label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" class="rounded border-slate-300">
                        Remember me
                    </label>

                    <a href="#" class="text-indigo-600 hover:underline">
                        Forgot Password?
                    </a>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-3 rounded-xl font-bold hover:shadow-lg transition">
                    Login
                </button>

            </form>

            <p class="text-center text-xs text-slate-400 mt-6">
                © {{ date('Y') }} The Vision Classes Institute
            </p>

        </div>

    </div>

</div>

</body>
</html>