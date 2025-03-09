<div class="fixed top-10 right-4 space-y-2 z-99">
    @foreach ($alerts as $index => $alert)
        <div
            x-data="{ show: true }"
            x-show="show"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-x-10"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 translate-x-10"
            class="px-4 py-3 border flex items-start justify-between w-full max-w-sm rounded-lg shadow-lg"
            :class="{
                'bg-green-200 border-green-600 text-green-700': '{{ $alert['type'] }}' === 'success',
                'bg-red-200 border-red-600 text-red-700': '{{ $alert['type'] }}' === 'danger',
                'bg-orange-200 border-orange-600 text-orange-700': '{{ $alert['type'] }}' === 'warning',
                'bg-blue-200 border-blue-600 text-blue-700': '{{ $alert['type'] }}' === 'info',
                'bg-gray-200 border-gray-600 text-gray-700': '{{ $alert['type'] }}' === 'light',
            }"
            x-init="setTimeout(() => show = false, 6000)"
        >
            <!-- Icon -->
            <div class="mr-3">
                <i class="text-xl mt-1"
                    :class="{
                        'fas fa-check-circle text-green-600': '{{ $alert['type'] }}' === 'success',
                        'fas fa-exclamation-circle text-red-600': '{{ $alert['type'] }}' === 'danger',
                        'fas fa-exclamation-triangle text-orange-600': '{{ $alert['type'] }}' === 'warning',
                        'fas fa-info-circle text-blue-600': '{{ $alert['type'] }}' === 'info',
                        'fas fa-info-circle text-gray-600': '{{ $alert['type'] }}' === 'light',
                    }"
                ></i>
            </div>

            <!-- Message -->
            <div class="flex-1">
                <p>{{ $alert['message'] }}</p>
            </div>

            <!-- Close Button -->
            <button wire:click="dismissAlert({{ $index }})" class="ml-4 text-gray-600 hover:text-gray-900 p-1 hover:bg-gray-200 rounded cursor-pointer">
                <x-heroicon-o-x-mark class="w-4 h-4" />
            </button>
        </div>
    @endforeach
    @php
        $alertTypes = ['success', 'danger', 'warning', 'info', 'light'];
    @endphp

    @foreach ($alertTypes as $type)
        @if (session()->has($type))
            <div
                x-data="{ show: true }"
                x-show="show"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-x-10"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 translate-x-10"
                class="fixed bottom-4 right-4 px-4 py-3 border flex items-start justify-between w-full max-w-sm rounded-lg shadow-lg"
                :class="{
                    'bg-green-200 border-green-600 text-green-700': '{{ $type }}' === 'success',
                    'bg-red-200 border-red-600 text-red-700': '{{ $type }}' === 'danger',
                    'bg-orange-200 border-orange-600 text-orange-700': '{{ $type }}' === 'warning',
                    'bg-blue-200 border-blue-600 text-blue-700': '{{ $type }}' === 'info',
                    'bg-gray-200 border-gray-600 text-gray-700': '{{ $type }}' === 'light',
                }"
                x-init="setTimeout(() => show = false, 6000)"
            >
                <!-- Icon -->
                <div class="mr-3">
                    <i class="text-xl mt-1"
                        :class="{
                            'fas fa-check-circle text-green-600': '{{ $type }}' === 'success',
                            'fas fa-exclamation-circle text-red-600': '{{ $type }}' === 'danger',
                            'fas fa-exclamation-triangle text-orange-600': '{{ $type }}' === 'warning',
                            'fas fa-info-circle text-blue-600': '{{ $type }}' === 'info',
                            'fas fa-info-circle text-gray-600': '{{ $type }}' === 'light',
                        }"
                    ></i>
                </div>

                <!-- Message -->
                <div class="flex-1">
                    <p>{{ session($type) }}</p>
                </div>

                <!-- Close Button -->
                <button @click="show = false" class="ml-4 text-gray-600 hover:text-gray-900 p-1 hover:bg-gray-200 rounded cursor-pointer">
                    <x-heroicon-o-x-mark class="w-4 h-4" />
                </button>
            </div>
        @endif
    @endforeach

</div>
