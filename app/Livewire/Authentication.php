<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class Authentication extends Component
{
    public $email, $password, $name, $terms = true;
    public $remember = false;
    public $action;

    public function mount()
    {
        $this->updateAction();
    }

    // Update action based on current route
    public function updateAction()
    {
        if (request()->routeIs('login')) {
            $this->action = 'login';
        } elseif (request()->routeIs('register')) {
            $this->action = 'register';
        } elseif (request()->routeIs('password.request')) {
            $this->action = 'sendResetLink';
        } elseif (request()->routeIs('password.reset')) {
            $this->action = 'updatePassword';
        }
    }

    // Call updateAction on every route change
    public function updated($propertyName)
    {
        // Check if the property updated is related to routing (e.g., email)
        if (in_array($propertyName, ['email', 'password', 'name'])) {
            $this->updateAction();
        }
    }

     protected function throttleKey()
    {
        return strtolower($this->email) . '|' . request()->ip();
    }


    public function login()
    {

        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Check if the user has exceeded the rate limit
        if (RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            $this->dispatch('showAlert', [
                'message' => 'Too many login attempts. Please try again in ' . RateLimiter::availableIn($this->throttleKey) . ' seconds.',
                'type' => 'warning',
            ]);
            return;
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::clear($this->throttleKey());
            return redirect()->route('home');
        }

        RateLimiter::hit($this->throttleKey(), 60);

        $this->dispatch('showAlert', [
            'message' => 'Invalid credentials. Please try again.',
            'type' => 'danger',
        ]);

        // Clear input fields
        $this->reset(['email', 'password']);

    }

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'terms' => 'accepted',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Registration successful! You can now log in.');
        return redirect()->route('login');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to authenticate with ' . ucfirst($provider) . '. Please try again.');
            return redirect()->route('login');
        }

        $user = User::where('email', $socialUser->getEmail())->first();

        if ($user && !$user->provider) {
            session()->flash('error', 'This email is already registered but has not connected a login method.');
            return redirect()->route('login');
        }

        if (!$user) {
            $user = User::create([
                'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                'email' => $socialUser->getEmail(),
                'password' => Hash::make(uniqid()),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
            ]);
        }

        Auth::login($user);
        return redirect()->route('home');
    }



    public function render()
    {
        return view('livewire.authentication');
    }
}
