<header 
    x-data="{ scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 40 })"
    :class="scrolled ? 'py-4 shadow drop-shadow' : 'py-8'"
    class="flex items-center justify-between px-4 sm:px-12 lg:px-20 fixed w-full top-0 z-50 transition-all duration-300"
>
    <a href="{{ route('home') }}">
        <h1 class="text-2xl font-bold text-slate-700">Logo</h1>
    </a>
    <div class="flex gap-12 items-center">
        <nav>
            <ul class="flex gap-6 text-lg">
                <li><a href="{{ route('home') }}" class="text-slate-600 hover:text-slate-800 hover:underline">Home</a></li>
                <li><a href="#" class="text-slate-600 hover:text-slate-800 hover:underline">Features</a></li>
                <li><a href="#" class="text-slate-600 hover:text-slate-800 hover:underline">Pricing</a></li>
                <li><a href="#" class="text-slate-600 hover:text-slate-800 hover:underline">Courses</a></li>
                <li><a href="#" class="text-slate-600 hover:text-slate-800 hover:underline">Resources</a></li>
            </ul>
        </nav>
        @auth
            <x-dropdown class="relative">
                <x-slot name="trigger">
                    <button class="text-slate-600 flex items-center gap-2 px-3 py-2 hover:bg-amber-100 rounded-lg hover:text-amber-600 transition-all duration-300">
                        <x-heroicon-s-user class="w-4 h-4" />
                        <span>{{ auth()->user()->name }}</span>
                        <x-heroicon-o-chevron-down class="w-4 h-4" />
                    </button>
                </x-slot>
                <div class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                </div>
            </x-dropdown>
        @else
            <div class="flex gap-4 items-center font-medium">
                <a href="{{ route('login') }}" class="text-slate-600 hover:text-slate-800 px-4 py-2 border border-amber-400 hover:bg-amber-100 hover:border-amber-500 rounded-lg transition-all duration-300">Login</a>
                <a href="{{ route('register') }}" class="text-slate-600 border border-amber-500 hover:bg-amber-600 px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg transition-all duration-300">Get Started</a>
            </div>
        @endauth
    </div>
</header>
