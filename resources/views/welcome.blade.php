<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-out both;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-100 min-h-screen font-sans flex flex-col">

<!-- HEADER -->
<header class="flex items-center justify-between px-8 py-6 fade-in bg-white/80 backdrop-blur border-b shadow-sm">
    <h1 class="text-2xl font-bold text-indigo-600">
        📘 StudentMS
    </h1>

    <div class="space-x-4">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-4 py-2 text-indigo-600 font-semibold hover:underline">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Register
                    </a>
                @endif
            @endauth
        @endif
    </div>
</header>

<!-- MAIN -->
<main class="flex-1">

    <!-- HERO -->
    <section class="flex flex-col items-center justify-center text-center mt-20 px-6 fade-in">

        <div class="float text-6xl mb-4">🎓</div>

        <h2 class="text-4xl md:text-5xl font-bold text-gray-800">
            Student Management System
        </h2>

        <p class="mt-4 text-gray-600 max-w-xl">
            A simple, fast, and secure system to manage student records,
            built with Laravel, Tailwind, and Livewire.
        </p>

        <div class="mt-8 flex gap-4">
            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-indigo-600 text-white rounded-xl shadow hover:scale-105 transition">
                Get Started
            </a>

            <a href="#features"
               class="px-6 py-3 bg-white border rounded-xl hover:shadow transition">
                Learn More
            </a>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="mt-24 px-8 grid md:grid-cols-3 gap-6 fade-in">

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="text-3xl">👨‍💼</div>
            <h3 class="font-semibold text-lg mt-2">Admin Control</h3>
            <p class="text-gray-600 text-sm mt-2">
                Manage all student records easily with full control.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="text-3xl">📊</div>
            <h3 class="font-semibold text-lg mt-2">Organized Data</h3>
            <p class="text-gray-600 text-sm mt-2">
                Keep student information clean and structured.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <div class="text-3xl">⚡</div>
            <h3 class="font-semibold text-lg mt-2">Fast & Simple</h3>
            <p class="text-gray-600 text-sm mt-2">
                Lightweight system built for speed and simplicity.
            </p>
        </div>

    </section>

</main>

<!-- FOOTER -->
<footer class="mt-auto text-center py-6 text-gray-500 text-sm bg-white/80 border-t shadow-inner fade-in">
    © {{ date('Y') }} Student Management System. All rights reserved.
</footer>

</body>
</html>
