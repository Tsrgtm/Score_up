<?php

namespace App\Livewire\Profile;

use Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;
    public $name;
    public $profile_picture;
    public $password;
    public $new_password;
    public $tab='profile';

    public function mount()
    {
        $this->name = auth()->user()->name;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'image|max:1024', // 1MB Max
        ]);

        $user = auth()->user();
        $user->name = $this->name;

        if ($this->profile_picture) {
            $path = $this->profile_picture->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'Profile updated successfully!'
        ]);
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        $user = auth()->user();
        $user->password = Hash::make($this->new_password);
        $user->save();
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'Password updated successfully!'
        ]);
    }

    public function render()
    {
        return view('livewire.profile.update-profile');
    }
}
