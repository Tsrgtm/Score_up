<div>
    @if ($action == 'register')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                wire:model="name" 
                placeholder="John Doe"
                class="mt-1 block w-full border bg-transparent border-gray-400 rounded-md px-3 py-2 focus:border-amber-400 focus:border-2 focus:outline-none">
            @error('name') <span class="text-red-500 mt-1">{{ $message }}</span> @enderror
        </div>
    @endif
    <div>
        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
        <input 
            type="email" 
            name="email" 
            id="email" 
            wire:model="email" 
            placeholder="johndoe@scoreup.com"
            class="mt-1 block w-full border bg-transparent border-gray-400 rounded-md px-3 py-2 focus:border-amber-400 focus:border-2 focus:outline-none">
        @error('email') <span class="text-red-500 mt-1">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <div class="flex justify-between gap-3 items-center">
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-800 hover:underline">Forgot Password?</a>
            @endif
        </div>
        <div x-data="{ showPassword: false }" class="relative">
            <input 
                :type="showPassword ? 'text' : 'password'" 
                name="password" 
                id="password" 
                wire:model="password" 
                placeholder="Password"
                class="mt-1 block w-full border bg-transparent border-gray-400 rounded-md px-3 py-2 focus:border-amber-400 focus:border-2 focus:outline-none">
            
            <x-heroicon-o-eye 
                x-show="showPassword"
                @click="showPassword = !showPassword" 
                class="absolute top-0 h-full w-5 right-3 text-amber-400 cursor-pointer"/>

            <x-heroicon-o-eye-slash 
                x-show="!showPassword"
                @click="showPassword = !showPassword" 
                class="absolute top-0 h-full w-5 right-3 hover:text-amber-400 cursor-pointer text-gray-500"/>
        </div>
        @error('password') <span class="text-red-500 mt-1">{{ $message }}</span> @enderror
    </div>

    @if ($action == 'login')
        <div class="mt-4 flex gap-4 justify-between items-center">
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember" id="remember" wire:model="remember" class="w-4 h-4 p-1 rounded border-gray-300 bg-transparent accent-amber-400">
                <label for="remember" class="text-sm text-gray-600">Remember me</label>
            </div>

            {{-- @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-800 hover:underline">Forgot Password?</a>
            @endif --}}
        </div> 
    @endif

    <div class="mt-8">
        <button 
            type="submit"
            wire:loading.attr="disabled"
            wire:click="{{ $action }}"
            class="w-full bg-amber-200 text-amber-950 px-3 py-2 rounded-lg hover:bg-amber-300/90 transition font-semibold cursor-pointer flex justify-center items-center">
            <span wire:loading.remove>
                @if ($action == 'login')
                    Login
                @elseif ($action == 'register')
                    Register
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
    </div>

    <div class="mt-4">
        <p class="text-sm text-gray-600 text-center">
            @if ($action == 'login') 
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-amber-600 hover:text-amber-800 hover:underline">Register</a>
            @elseif ($action == 'register') 
                Already have an account? 
                <a href="{{ route('login') }}" class="text-amber-600 hover:text-amber-800 hover:underline">Login</a>
            @else
                Remembered your password? 
                <a href="{{ route('login') }}" class="text-amber-600 hover:text-amber-800 hover:underline">Login</a>
            @endif
        </p>
    </div>

    <div class="my-6 flex items-center">
        <div class="flex-grow border-t border-gray-300"></div>
        <span class="mx-2 text-gray-600">or</span>
        <div class="flex-grow border-t border-gray-300"></div>
    </div>

    <!-- Login with Facebook Button -->
    <div class="flex gap-3 items-center">
        <button 
            type="button" 
            class="w-full bg-blue-600 text-white p-2 rounded-lg flex items-center justify-center gap-3 hover:bg-blue-700 transition cursor-pointer">
            <i class="fab fa-facebook-f h-full"></i>
            Facebook
        </button>
        <button 
            type="button" 
            class="w-full bg-red-600 text-white p-2 rounded-lg flex items-center justify-center gap-3 hover:bg-red-700 transition cursor-pointer">
            <i class="fab fa-google h-full"></i>
            Google
        </button>
    </div>

</div>
