<!-- filepath: c:\Users\Acer\Desktop\Score_up\resources\views\livewire\profile\update-profile.blade.php -->
<div class="mb-4 flex flex-col md:flex-row gap-5">
    <div class="w-full flex flex-col gap-10 md:gap-16">
        <!-- Personal Information Section -->
        <div class="personal-info w-full flex flex-col lg:flex-row gap-5">
            <div class="flex flex-col w-full lg:w-2/5 gap-3">
                <h3 class="text-xl text-gray-700 font-semibold">Personal Information</h3>
                <p class="text-gray-500 text-md">
                    Keep your profile up to date! You can change your name, email address, bio, and profile picture to
                    ensure your account reflects your current information.
                </p>
            </div>

            <div>
                <!-- Profile Picture -->
                <div class="flex flex-col items-center mb-4">
                    <label for="profile_picture" class="relative cursor-pointer z-10">
                        <!-- Profile Image Preview -->
                        <img id="profilePreview" src="{{ $profile_picture ? $profile_picture->temporaryUrl() : asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="w-24 h-24 bg-white rounded-full border-2 border-gray-300 dark:border-gray-600 object-cover">

                        <!-- Hidden Input for File Upload -->
                        <input wire:model="profile_picture" id="profile_picture" name="profile_picture" type="file" accept="image/*" class="hidden">

                        <!-- Overlay Icon -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30 rounded-full opacity-0 hover:opacity-100 transition duration-200">
                            <i class="fa-solid fa-camera text-white text-lg"></i>
                        </div>
                    </label>

                    <!-- Hint Text -->
                    <p class="text-sm text-gray-500 mt-2">Click on the image to change your profile picture</p>
                    @error('profile_picture')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name & Email -->
                <div class="flex flex-col gap-3">
                    <!-- Email (Read-only) -->
                    <label for="email">
                        <h5 class="text-gray-700 font-semibold text-md">Email</h5>
                        <div class="relative">
                            <input type="email" name="email" value="{{ auth()->user()->email }}"
                                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none pr-5"
                                readonly>
                            @if (auth()->user()->provider == 'google')
                                <img src="{{ asset('assets/icons/google.png') }}" alt="Google Logo"
                                    class="absolute w-5 h-5 right-2 top-1/2 transform -translate-y-1/2">
                            @endif
                        </div>
                    </label>

                    <!-- Name (Editable) -->
                    <label for="name">
                        <h5 class="text-gray-700 font-semibold text-md">Name</h5>
                        <div>
                            <input wire:model="name" type="text" name="name" value="{{ auth()->user()->name }}"
                                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none">
                        </div>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <!-- Save Button -->
                <button type="submit"
                    wire:click="updateProfile"
                    wire:loading.attr="disabled"
                    wire:loading.class="opacity-50 cursor-not-allowed"
                    class="mt-5 bg-gray-900 hover:bg-gray-950 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Save Changes
                </button>
            </div>
        </div>

        <!-- Session Manager Section -->
        <div class="session-manager w-full flex flex-col lg:flex-row gap-5">
            <div class="flex flex-col w-full lg:w-2/5 gap-3">
                <h3 class="text-xl text-gray-700 font-semibold">Change Password</h3>
                <p class="text-gray-500 text-md">
                    Keeping track of your active sessions is essential for your account's security.
                    Review your current active sessions and log out from any that you no longer recognize or use.
                </p>
            </div>
        </div>
    </div>
</div>