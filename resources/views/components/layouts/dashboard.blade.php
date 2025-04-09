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
    <body class="min-h-screen flex bg-gray-100">
        @livewire('show-alerts')
        <!-- Sidebar -->
        <aside class="max-w-64 w-full bg-white border-r border-gray-200  flex flex-col justify-between max-h-screen h-full fixed -left-full lg:left-0 z-99 transition-left duration-300 ease-in-out">
            <div>
                <div class="p-4 flex items-center">
                    <div
                        class="w-10 h-10 rounded-md bg-blue-600 flex items-center justify-center"
                    >
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <span class="logo-text ml-3 text-xl font-bold text-gray-800"
                        >Score Up</span
                    >
                </div>

                <div class="flex-1 overflow-y-auto py-4">
                    <nav>
                        <div class="px-2">
                        <a href="{{ route('dashboard') }}"
                            class="nav-item mb-1 flex items-center px-4 py-3 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600' : 'text-gray-700' }}"
                        >
                            <x-heroicon-o-squares-2x2 class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Dashboard</span>
                        </a>
                        <div
                            class="nav-item mb-1 flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer"
                        >
                            <x-heroicon-o-book-open class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Practice Tests</span>
                        </div>
                        <div
                            class="nav-item mb-1 flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer"
                        >
                            <x-heroicon-o-clipboard-document-check class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Mock Tests</span>
                        </div>
                        <div
                            class="nav-item mb-1 flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer"
                        >
                            <x-heroicon-o-chart-bar class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Progress</span>
                        </div>
                        <div
                            class="nav-item mb-1 flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer"
                        >
                            <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Feedback</span>
                        </div>
                        <div
                            class="nav-item mb-1 flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer"
                        >
                            <x-heroicon-o-cog class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Settings</span>
                        </div>
                        <div
                            class="nav-item mb-1 flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-blue-100 hover:text-blue-600 cursor-pointer"
                        >
                            <x-heroicon-o-user class="w-5 h-5" />
                            <span class="sidebar-text ml-3">Profile</span>

                        </div>

                        <div class="px-4 mt-8">
                        <div
                            class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 sidebar-text"
                        >
                            Subscription
                        </div>
                        <div class="bg-blue-50 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-700 sidebar-text"
                                    >Premium Plan</span
                                >
                                <span
                                    class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded"
                                    >Active</span
                                >
                            </div>
                            <ul class="space-y-1 py-2">
                                <li class="text-xs text-gray-500 mb-1 sidebar-text">
                                    <span class="font-medium">Practice Questions:</span> Unlimited
                                </li>
                                <li class="text-xs text-gray-500 mb-1 sidebar-text">
                                    <span class="font-medium">Mock Tests:</span> 5
                                </li>
                                <li class="text-xs text-gray-500 mb-1 sidebar-text">
                                    <span class="font-medium">Expires On:</span> 15 Aug 2025
                                </li>
                            </ul>
                            <button
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 px-4 rounded-lg transition"
                            >
                            <span class="sidebar-text">Manage</span>
                            </button>
                        </div>
                        </div>
                    </nav>
                </div>

            </div>

            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center">
                    <x-avatar search="{{ auth()->user()->name }}" class="w-10 h-10 border border-gray-300 rounded-full shadow-sm" />
                    <div class="ml-3 sidebar-text">
                        <div class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</div>
                        <div class="text-xs text-gray-500">{{ encryptEmail(auth()->user()->email) }}</div>
                    </div>
                    <button
                    class="ml-auto text-gray-400 hover:text-gray-600 sidebar-text"
                    >
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <x-heroicon-o-arrow-right-on-rectangle class="w-6 h-6"/>
                        </button>
                    </form>
                    </button>
                </div>
            </div>
        </aside>

        <div id="overlay" class="bg-gray-900 opacity-50 fixed inset-0 z-50 hidden w-screen h-screen" onclick="document.querySelector('aside').classList.remove('left-0'), document.querySelector('#overlay').classList.add('hidden'), document.querySelector('body').classList.remove('overflow-hidden')"></div>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 lg:ml-64">
            <!-- Header -->
            <header class="px-4 sm:px-6 py-4 mb-4 flex items-center justify-between sticky top-0 backdrop-blur-3xl bg-white border-b border-gray-200 z-10 overflow-hidden">
                <button onclick="document.querySelector('aside').classList.add('left-0'), document.querySelector('#overlay').classList.remove('hidden'), document.querySelector('body').classList.add('overflow-hidden')" type="button" class="inline-flex lg:hidden items-center justify-center p-1.5 rounded-full text-gray-200 bg-blue-600 hover:bg-blue-700" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open side menu</span>
                    <x-heroicon-s-bars-3 class="w-7 h-7" />
                </button>

                <h1 class="text-xl text-gray-600 font-semibold">@yield('header-title', 'Dashboard')</h1>


                <div class="flex items-center gap-4">
                    <div class="relative bg-blue-100 p-2 rounded-full flex items-center justify-center cursor-pointer">
                        <x-heroicon-o-bell class="w-6 h-6 text-blue-600" />
                        <div class="px-1 py-0.5 bg-blue-500 min-w-5 rounded-full text-center text-white text-xs absolute -top-2 -end-1 translate-x-1/4 text-nowrap">
                            <div class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-blue-200 w-full h-full"></div>
                            3
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            
        </main>

        @livewireScripts
    </body>
</html>
