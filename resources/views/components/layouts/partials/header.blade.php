<header 
    x-data="{ scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 40 })"
    :class="scrolled ? 'py-4 shadow drop-shadow' : 'py-6 sm:py-12'"
    class="flex items-center justify-between px-4 sm:px-12 lg:px-20 fixed w-full top-0 z-50 transition-all duration-300"
>
    <a href="{{ route('home') }}">
        <h1 class="text-2xl font-bold text-slate-700">Logo</h1>
    </a>
    <div class="hidden lg:flex gap-12 items-center">
        <nav>
            <ul class="flex gap-6 text-xl">
                <li><a href="#" class="text-slate-500 hover:text-slate-800 hover:underline">Features</a></li>
                <li><a href="#" class="text-slate-500 hover:text-slate-800 hover:underline">Pricing</a></li>
                <li><a href="#" class="text-slate-500 hover:text-slate-800 hover:underline">Courses</a></li>
                <li><a href="#" class="text-slate-500 hover:text-slate-800 hover:underline">Resources</a></li>
            </ul>
        </nav>
        @auth
            <x-dropdown class="relative">
                <x-slot name="trigger">
                    <button class="text-slate-600 flex items-center hover:bg-gray-100 rounded-md shadow-none transition-all duration-300 group">
                        <x-avatar search="{{ auth()->user()->name }}" class="w-8 h-8 border border-gray-200 rounded-md" />
                        <div class="flex items-center py-2 px-1 group-hover:border-gray-200">
                            <x-heroicon-o-chevron-down class="w-4 h-4" />
                        </div>
                    </button>
                </x-slot>
                <div class="absolute right-0 mt-2 w-max bg-white border border-gray-200 rounded-md shadow overflow-hidden">
                    <a href="#" class="flex gap-3 px-4 py-2 text-gray-700 hover:bg-amber-100 hover:text-amber-600 transition-all duration-300">
                        <x-heroicon-o-squares-2x2 class="w-5 h-5" />
                        Go to app
                    </a>
                    <a href="#" class="flex gap-3 px-4 py-2 text-gray-700 hover:bg-amber-100 hover:text-amber-600 transition-all duration-300">
                        <x-heroicon-o-user class="w-5 h-5" />
                        Profile
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex gap-3 px-4 py-2 w-full text-gray-700 hover:bg-red-500 hover:text-gray-100 transition-all duration-300 cursor-pointer">
                            <x-heroicon-o-arrow-left-start-on-rectangle class="w-5 h-5" />
                            Logout
                        </button>
                    </form>
                </div>
            </x-dropdown>
        @else
            <div class="flex gap-4 items-center font-medium">
                <a href="{{ route('login') }}" class="text-slate-600 hover:text-slate-800 px-4 py-2 border border-amber-400 hover:bg-amber-100 hover:border-amber-500 rounded-lg transition-all duration-300">Login</a>
                <a href="{{ route('register') }}" class="text-slate-600 border border-amber-500 hover:bg-amber-600 px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg transition-all duration-300">Get Started</a>
            </div>
        @endauth
    </div>

    <div class="lg:hidden flex gap-4 font-medium">
        @guest
        <a href="{{ route('login') }}" class="text-slate-600 hover:text-slate-800 px-4 py-1 border border-amber-400 hover:bg-amber-100 hover:border-amber-500 rounded-lg transition-all duration-300">Login</a>
        @endguest
        <div class="p-1 bg-amber-500 hover:bg-amber-600 text-white rounded-lg">
            <x-heroicon-s-bars-3 class="w-7 h-7" />
        </div>
    </div>
</header>
