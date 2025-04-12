<div 
    x-show="open"
    x-cloak
    @click.away="open = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="p-2 max-w-48 w-48 absolute top-16 right-4 lg:hidden bg-white border border-gray-200 rounded-md shadow-lg origin-top-right transform transition-all"
    role="menu"
    aria-orientation="vertical"
    aria-labelledby="mobile-menu-button"
>
    <div class="space-y-1">
        <!-- Menu Items (keep your existing items here) -->
        <a href="#features" class="border-transparent text-gray-500 block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200 mobile-nav-link">
            Features
        </a>
        <a href="#how-it-works" class="border-transparent text-gray-500 block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200 mobile-nav-link">
            How It Works
        </a>
        <a href="#pricing" class="border-transparent text-gray-500 block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200 mobile-nav-link">
            Pricing
        </a>
        <a href="{{ route('blog') }}" 
            class="border-transparent text-gray-500 block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition-colors duration-200 @if (request()->routeIs('blog'))
                mobile-nav-link mobile-active
            @endif">
            Blog
        </a>
        <div class="border-t border-gray-200">
            <div class="mt-3 space-y-2">
                @guest
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-base text-center font-medium text-blue-600 border border-blue-600 rounded-md hover:text-gray-800 hover:bg-gray-100 transition-colors duration-200">
                        Log In
                    </a>
                    <a href="{{ route('register') }}" class="block sm:hidden w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                        Get Started
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-base text-center font-medium text-blue-600 border border-blue-600 rounded-md hover:text-gray-800 hover:bg-gray-100 transition-colors duration-200">
                        Go to app
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 transition-colors duration-200">
                            Logout
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>