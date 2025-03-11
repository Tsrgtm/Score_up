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
        @livewire('show-alerts')
        <!-- Sidebar -->
        <aside class="w-64 bg-amber-100/90 backdrop-blur-3xl border-r border-gray-200  p-4 flex flex-col justify-between max-h-screen h-full fixed">
            <div>
                <div class="flex gap-3">
                    <h1 class="text-2xl font-bold text-slate-700">Logo</h1>
                </div>

                <div class="mt-8">
                    <ul class="space-y-2 text-gray-800 text-lg">
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md
                            {{ request()->routeIs('dashboard') ? 'bg-amber-200 border-amber-400 text-amber-600 border border-amber-400' : 'hover:bg-gray-200 hover:border hover:border-gray-400 hover:text-gray-600 ' }}
                            transition-all duration-300">
                            <x-heroicon-o-squares-2x2 class="w-5 h-5" />
                            Dashboard
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-200 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-book-open class="w-5 h-5" />
                            Practice
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-200 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-chart-bar class="w-5 h-5" />
                            Progress
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-200 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-academic-cap class="w-5 h-5" />
                            Lessions
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-200 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-clipboard class="w-5 h-5" />
                            Mock Tests
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 py-2 px-4 rounded-md border border-transparent hover:bg-amber-200 hover:border-amber-400 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-folder-open class="w-5 h-5" />
                            Resources
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 bg-amber-200/80 p-4 flex flex-col gap-2 border border-amber-400 rounded-lg text-center">
                <h2 class="text-lg font-bold">#1 Practice platform</h2>
                <p class="text-md text-gray-600">Enjoy unlimited practice to boost your skills</p>
                <a href="{{ route('register') }}" class="text-slate-600 mt-2 border border-amber-500 hover:bg-amber-600 px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white font-medium rounded-lg transition-all duration-300">
                    <i class="fa-solid fa-crown mr-2"></i>
                    Upgrade Now
                </a>

            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 ml-64">
            <!-- Header -->
            <header class="px-6 py-4 mb-4 flex items-center justify-between sticky top-0 backdrop-blur-3xl z-50">
                <h1 class="text-xl text-gray-600 font-semibold">@yield('header-title', 'Dashboard')</h1>
                <x-dropdown class="relative">
                    <x-slot name="trigger">
                        <button class="text-slate-600 flex items-center hover:bg-gray-200 rounded-md shadow-none transition-all duration-300 group">
                            <x-avatar search="{{ auth()->user()->name }}" class="w-8 h-8 border border-gray-300 rounded-md" />
                            <div class="flex items-center gap-2 py-2 px-1 group-hover:border-gray-300 max-h-8">
                                <p class="font-medium text-gray-600 turnicate">{{ auth()->user()->name }}</p>
                                <x-heroicon-o-chevron-down class="w-4 h-4" />
                            </div>
                        </button>
                    </x-slot>
                    <div x-cloak class="absolute right-0 mt-2 w-48 bg-amber-100 border border-gray-200 rounded-lg overflow-hidden z-50">
                        <div class="p-2">
                            <div class="flex items-center gap-2">
                                <x-avatar search="{{ auth()->user()->name }}" class="w-10 h-10 border border-gray-200 rounded-full" />
                                <div>
                                    <p class="font-medium text-gray-700 turnicate">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-600 turnicate">{{ encryptEmail(auth()->user()->email) }}</p>
                                </div>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <a href="{{ route('home') }}" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-amber-200 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-globe-alt class="w-5 h-5" />
                            Go to site
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-amber-200 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-user class="w-5 h-5" />
                            My profile
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-amber-200 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-credit-card class="w-5 h-5" />
                            Subscriptions
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-amber-200 hover:text-amber-600 transition-all duration-300">
                            <x-heroicon-o-cog class="w-5 h-5" />
                            Settings
                        </a>
                        <hr class="border-gray-300">
                        <form action="{{ route('logout') }}" method="POST" class="p-2">
                            @csrf
                            <button type="submit" class="flex items-center justify-center rounded-lg px-4 py-2 w-full bg-red-500 hover:bg-red-600 text-gray-100 transition-all duration-300 cursor-pointer">
                                Logout
                            </button>
                        </form>
                    </div>
                </x-dropdown>
            </header>

            @yield('content')

            
        </main>

        @livewireScripts
    </body>
</html>