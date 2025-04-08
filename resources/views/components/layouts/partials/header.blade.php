<nav class="bg-white shadow-sm fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <div class="w-10 h-10 rounded-md bg-blue-600 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <span class="ml-3 text-xl font-bold text-gray-800">Score Up</span>
                </a>
                <div id="main-menu"
                    class="hidden lg:ml-8 lg:flex lg:space-x-6">
                    <a href="#features" 
                        class="nav-link inline-flex flex-col justify-center px-1 pt-1 text-sm font-medium group text-gray-500 hover:text-gray-700">
                        Features
                        <span class="h-0.5 w-full bg-blue-500 rounded transition-width duration-300"></span>
                    </a>
                    <a href="#how-it-works" 
                        class="nav-link inline-flex flex-col justify-center px-1 pt-1 text-sm font-medium group text-gray-500 hover:text-gray-700">
                        How It Works
                        <span class="h-0.5 w-full bg-blue-500 rounded transition-width duration-300"></span>
                    </a>
                    <a href="#pricing" 
                        class="nav-link inline-flex flex-col justify-center px-1 pt-1 text-sm font-medium group text-gray-500 hover:text-gray-700">
                        Pricing
                        <span class="h-0.5 w-full bg-blue-500 rounded transition-width duration-300"></span>
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex flex-col justify-center px-1 pt-1 text-sm font-medium group">
                        Resources
                        <span class="h-0.5 w-0 group-hover:w-full bg-blue-500 rounded transition-width duration-300"></span>
                    </a>                
                </div>
            </div>
            <div class="hidden lg:ml-6 lg:flex lg:items-center space-x-4">
                @auth
                <!-- Logged in version -->
                <div x-data="{ Open: false }" @click="Open = !Open" class="relative flex-shrink-0 cursor-pointer">
                    <x-avatar search="{{ auth()->user()->name }}" class="w-10 h-10 border border-gray-300 rounded-full shadow-sm" />

                    <div
                        x-show="Open"
                        x-cloak
                        @click.away="Open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-48 bg-white border border-blue-100 rounded-lg overflow-hidden shadow-lg origin-top-right z-50"
                    >
                        <div class="p-2">
                            <div class="flex items-center gap-2">
                                <x-avatar search="{{ auth()->user()->name }}" class="w-10 h-10 border border-blue-200 rounded-full" />
                                <div>
                                    <p class="font-medium text-gray-800 truncate">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500 truncate">{{ encryptEmail(auth()->user()->email) }}</p>
                                </div>
                            </div>
                        </div>
                        <hr class="border-blue-100">

                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 transition-all duration-200">
                            <x-heroicon-o-squares-2x2 class="w-5 h-5" />
                            Go to app
                        </a>

                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 transition-all duration-200">
                            <x-heroicon-o-user class="w-5 h-5" />
                            My profile
                        </a>

                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 transition-all duration-200">
                            <x-heroicon-o-credit-card class="w-5 h-5" />
                            Subscriptions
                        </a>

                        <a href="#" class="flex items-center gap-3 px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-600 transition-all duration-200">
                            <x-heroicon-o-cog class="w-5 h-5" />
                            Settings
                        </a>

                        <hr class="border-blue-100">

                        <form action="{{ route('logout') }}" method="POST" class="p-2">
                            @csrf
                            <button type="submit" class="flex items-center justify-center rounded-lg px-4 py-2 w-full bg-red-500 hover:bg-red-600 text-white transition-all duration-300 cursor-pointer">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

                <a href="{{ route('dashboard') }}" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Get Started</a>
                @endauth
                

                @guest
                    <!-- Logged out version -->
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700 px-3 py-2 text-sm font-medium">log In</a>
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Get Started</a>
                @endguest
            </div>
            <div class="-mr-2 flex items-center gap-4 lg:hidden">
                <a href="{{ route('register') }}" class="hidden sm:flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Get Started</a>
                <button type="button" class="inline-flex items-center justify-center p-1.5 rounded-full text-gray-200 bg-blue-600 hover:bg-blue-700" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <x-heroicon-s-bars-3 class="w-7 h-7" />
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#features" class="bg-blue-50 border-blue-500 text-blue-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                Features
            </a>
            <a href="#how-it-works" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">How It Works</a>
            <a href="#pricing" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Pricing</a>
            <a href="#testimonials" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Testimonials</a>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="mt-3 space-y-1">
                    <a href="/login" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Sign In</a>
                    <a href="#pricing" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</nav>
