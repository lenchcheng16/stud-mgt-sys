<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    @include('layouts.navigation')

    <!-- MAIN CONTENT -->
    <div class="flex-1 ml-64 flex flex-col">

        <!-- TOP BAR (ONLY USER DROPDOWN SIMPLE) -->
        <header class="h-16 bg-white border-b flex items-center justify-end px-6">
            {{ Auth::user()->name }}
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-6">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>