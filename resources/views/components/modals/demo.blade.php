<div
  x-show="open"
  x-cloak
  class="fixed z-50 inset-0 overflow-y-auto backdrop-blur-sm"
  aria-labelledby="modal-title"
  role="dialog"
  aria-modal="true"
>
  <div class="flex items-center justify-center min-h-screen px-4 py-20 text-center">
    
    <!-- Background overlay with fade transition -->
    <div
      @click="open = false"
      class="fixed inset-0 bg-gray-950/80 transition-opacity"
      aria-hidden="true"
      x-show="open"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
    ></div>

    <!-- Modal content with scale + fade transition -->
    <div
      class="max-w-3xl transform bg-white rounded-lg shadow-xl text-left overflow-hidden transition-all"
      x-show="open"
      x-transition:enter="ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-95"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95"
    >
      <!-- Video/Thumbnail -->
      <div class="relative w-full aspect-[16/9] bg-gray-200 flex items-center justify-center">
        <div class="h-8 w-8 sm:w-12 sm:h-12 rounded-full bg-blue-600 animate-ping absolute"></div>
        <x-heroicon-s-play-circle class="relative w-14 h-14 sm:w-20 sm:h-20 text-blue-600" />
      </div>

      <!-- Content -->
      <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mt-3 sm:mt-0 sm:ml-4">
            <h3 class="text-lg font-medium text-gray-900">See Score Up in Action</h3>
            <p class="mt-2 text-base text-gray-500">
              Watch our 2-minute demo to see how Score Up can help you achieve your target DET score.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
