<div class="max-w-md mx-auto w-full">
    @php
        if ($action == 'login') {
            $title = "Welcome Back!";
            $desc = "Access your personalized DET preparation dashboard";
        } elseif ($action == 'register') {
            $title = "Start Your Journey";
            $desc = "Create your account to unlock full access to our platform.";
        }
    @endphp

@section('auth-title', $title)
    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center justify-center mb-5">
        <div class="w-10 h-10 rounded-md bg-blue-600 flex items-center justify-center">
            <i class="fas fa-chart-line text-white text-xl"></i>
        </div>
        <span class="ml-3 text-xl font-bold text-gray-100">Score Up</span>
    </a>
    <div class="form-card bg-white p-5 sm:p-6 md:p-8 lg:p-10 rounded-2xl w-full space-y-8 transition-all duration-300 shadow-lg">
        <div>
            <h2 class="text-3xl font-extrabold text-gray-900">
                {{ $title }}
            </h2>
            <p class="mt-2 text-sm text-gray-700">
                {{ $desc }}
            </p>
        </div>

        <div class="mt-8 space-y-6">
            <div class="space-y-5">
                @if ($action == 'register')
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" required
                            name="name"
                            id="name"
                            wire:model="name"
                            class="input-field w-full px-4 py-2 rounded-lg border border-gray-300"
                            placeholder="John Doe">
                        @error('name') <span class="text-red-500 mt-1">{{ $message }}</span> @enderror
                    </div>
                @endif
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" required
                        name="email"
                        id="email"
                        wire:model="email"
                        class="input-field w-full px-4 py-2 rounded-lg border border-gray-300"
                        placeholder="student@example.com">
                    @error('email') <span class="text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>

                <div x-data="{ showPassword: false, showIcon: false }">
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        @if ($action == 'login')
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot?</a>
                        @endif
                    </div>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" required
                            wire:model="password"
                            class="input-field w-full px-4 py-2 rounded-lg border border-gray-300"
                            placeholder="••••••••">
                        <i @click="showPassword = !showPassword" :class="showPassword ? 'fas fa-eye' : 'fas fa-eye-slash'" class="absolute right-3 top-3 text-gray-400"></i>
                    </div>
                    @error('password') <span class="text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>

                @if ($action == 'login')
                    <label class="text-sm text-gray-900 inline-flex items-center gap-2">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300">
                        Remember me
                    </label>
                @elseif ($action == 'register')
                    <p class="text-sm text-gray-900">
                        By signing up, you agree to the 
                        <a href="#" class="text-blue-600 hover:text-blue-500">terms and conditions</a>
                        and
                        <a href="#" class="text-blue-600 hover:text-blue-500">privacy policy</a>.
                    </p>
                @endif
            </div>

            <button type="submit" 
                wire:click="{{ $action }}"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
                <span wire:loading.remove>
                    @if ($action == 'login')
                        Login
                    @elseif ($action == 'register')
                        Sign Up
                    @elseif ($action == 'resetPassword')
                        Send Reset Password
                    @elseif ($action == 'updatePassword')
                        Update Password
                    @endif
                </span>
                <span wire:loading>
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </span>
            </button>

            @if ($action == 'login' || $action == 'register')
                <div class="relative mt-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">OR</span>
                    </div>
                </div>

                <div class="flex gap-3 items-center">
                    <a href="{{ route('socialite.redirect', 'google') }}"
                        class="w-full bg-white border border-gray-300 text-black p-2 rounded-lg flex items-center justify-center gap-3 hover:bg-gray-100 transition-all duration-300 cursor-pointer">
                        <img src="{{ asset('assets/icons/google.png') }}" alt="Google Logo" class="w-4 h-4">
                        Google
                    </a>
                    <a href="{{ route('socialite.redirect', 'github') }}"
                        class="w-full bg-black border border-black text-white p-2 rounded-lg flex items-center justify-center gap-3 hover:bg-gray-800 transition-all duration-300 cursor-pointer">
                        <i class="fab fa-github h-full"></i>
                        Github
                    </a>
                </div>
            
            @endif

            <p class="mt-8 text-center text-sm text-gray-600">
                @if ($action == 'login') 
                    New to Score Up? 
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Sign Up</a>
                @elseif ($action == 'register') 
                    Already have an account? 
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Log In</a>
                @else
                    Remembered your password? 
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 transition-colors">Log In</a>
                @endif
            </p>
        </div>
    </div>
    <div class="mt-4 text-center">
        <p class="text-sm text-gray-300">
            &copy; {{ date('Y') }} Score Up. All rights reserved.
        </p>
    </div>
</div>
