<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Practice Dashboard')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-amber-50 border-r border-gray-200  p-4 flex flex-col justify-between">
            <div>
                <div class="flex gap-3">
                    <h1 class="text-2xl font-bold text-slate-700">Logo</h1>
                </div>

                <div class="mt-8">
                    <ul class="space-y-2 text-gray-800 text-lg">
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-100 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-squares-2x2 class="w-5 h-5" />
                            Dashboard
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-100 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-book-open class="w-5 h-5" />
                            Practice
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-100 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-chart-bar class="w-5 h-5" />
                            Progress
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-100 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-academic-cap class="w-5 h-5" />
                            Lessions
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-100 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-clipboard class="w-5 h-5" />
                            Mock Tests
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-100 hover:border-amber-400  transition-all duration-300">
                            <x-heroicon-o-folder-open class="w-5 h-5" />
                            Resources
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 bg-amber-100 p-4 flex flex-col gap-2 border border-amber-400 rounded-lg text-center">
                <h2 class="text-lg font-bold">#1 Practice platform</h2>
                <p class="text-sm text-gray-600">Enjoy unlimited practice to boost your skills</p>
                <a href="{{ route('register') }}" class="text-slate-600 mt-2 border border-amber-500 hover:bg-amber-600 px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white font-medium rounded-lg transition-all duration-300">
                    <i class="fa-solid fa-crown mr-2"></i>
                    Upgrade Now
                </a>

            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-2 bg-gray-100">
            <!-- Header -->
            <header class="p-4 mb-6 flex items-center justify-between">
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Streak: 7 days 🔥</span>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1.9-2 2-2s2 .9 2 2-2 4-2 4m0 0c0 1.1-.9 2-2 2s-2-.9-2-2m-6-3a4 4 0 118 0 4 4 0 01-8 0z" />
                        </svg>
                        <span class="font-medium text-gray-700">150 XP</span>
                    </div>
                </div>
            </header>

            @livewire('show-alerts')

            
        </main>

        @livewireScripts
    </body>
</html>