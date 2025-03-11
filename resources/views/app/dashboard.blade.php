@extends('components.layouts.dashboard')

@section('title', 'Dashboard')

@section('header-title', 'Home')

@section('content')
    <div class="px-6 space-y-6">
        <!-- Welcome Card -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 flex flex-col md:flex-row items-center justify-between animate-fade-in">
            <div>
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800">Welcome back, {{ auth()->user()->name }}!</h2>
                <p class="text-gray-600 mt-1">Ready to boost your English skills today?</p>
            </div>
            <a href="#" class="mt-4 md:mt-0 bg-amber-500 text-white font-medium py-2 px-6 rounded-lg hover:bg-amber-600 transition-all duration-300">
                Start Practicing
            </a>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg p-4 flex items-center gap-4 animate-slide-up animation-delay-200">
                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                    <x-heroicon-o-clock class="w-6 h-6 text-amber-600" />
                </div>
                <div>
                    <p class="text-gray-600">Practice Time</p>
                    <p class="text-lg font-semibold text-gray-800">2h 45m</p>
                </div>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg p-4 flex items-center gap-4 animate-slide-up animation-delay-400">
                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                    <x-heroicon-o-check-circle class="w-6 h-6 text-amber-600" />
                </div>
                <div>
                    <p class="text-gray-600">Exercises Completed</p>
                    <p class="text-lg font-semibold text-gray-800">18</p>
                </div>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg p-4 flex items-center gap-4 animate-slide-up animation-delay-600">
                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                    <x-heroicon-o-star class="w-6 h-6 text-amber-600" />
                </div>
                <div>
                    <p class="text-gray-600">Skill Level</p>
                    <p class="text-lg font-semibold text-gray-800">Intermediate</p>
                </div>
            </div>
        </div>

        <!-- Progress Overview -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 animate-fade-in animation-delay-800">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Your Progress</h3>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                        <span>Vocabulary</span>
                        <span>75%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-500 rounded-full" style="width: 75%;"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                        <span>Grammar</span>
                        <span>60%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-500 rounded-full animate-progress-bar" style="width: 0%;" data-width="60%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                        <span>Listening</span>
                        <span>45%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-500 rounded-full animate-progress-bar" style="width: 0%;" data-width="45%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recommended Practice -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 animate-fade-in animation-delay-1000">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Recommended for You</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-4 p-4 bg-amber-50 rounded-lg hover:bg-amber-100 transition-all duration-300">
                    <x-heroicon-o-book-open class="w-8 h-8 text-amber-600" />
                    <div>
                        <p class="text-gray-700 font-medium">Vocabulary Booster</p>
                        <p class="text-sm text-gray-500">10-minute practice</p>
                        <a href="#" class="text-amber-600 text-sm hover:underline">Start Now</a>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-amber-50 rounded-lg hover:bg-amber-100 transition-all duration-300">
                    <x-heroicon-o-microphone class="w-8 h-8 text-amber-600" />
                    <div>
                        <p class="text-gray-700 font-medium">Listening Practice</p>
                        <p class="text-sm text-gray-500">15-minute exercise</p>
                        <a href="#" class="text-amber-600 text-sm hover:underline">Start Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Tips -->
        <div class="bg-amber-50 border border-amber-200 rounded-lg p-6 animate-slide-up animation-delay-1200">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Tip</h3>
            <p class="text-gray-700">Practice speaking daily to improve fluency! Try repeating sentences from your lessons out loud.</p>
            <button class="mt-4 text-amber-600 font-medium hover:text-amber-700 transition-all duration-300">Dismiss</button>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 animate-fade-in animation-delay-1400">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
            <ul class="space-y-4">
                <li class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-amber-50 rounded-full flex items-center justify-center">
                        <x-heroicon-o-book-open class="w-5 h-5 text-amber-500" />
                    </div>
                    <div>
                        <p class="text-gray-700">Completed "Vocabulary Basics" practice</p>
                        <p class="text-sm text-gray-500">Today, 10:30 AM</p>
                    </div>
                </li>
                <li class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-amber-50 rounded-full flex items-center justify-center">
                        <x-heroicon-o-clipboard class="w-5 h-5 text-amber-500" />
                    </div>
                    <div>
                        <p class="text-gray-700">Scored 85% on Mock Test #3</p>
                        <p class="text-sm text-gray-500">Yesterday, 3:15 PM</p>
                    </div>
                </li>
                <li class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-amber-50 rounded-full flex items-center justify-center">
                        <x-heroicon-o-academic-cap class="w-5 h-5 text-amber-500" />
                    </div>
                    <div>
                        <p class="text-gray-700">Started "Grammar Essentials" lesson</p>
                        <p class="text-sm text-gray-500">2 days ago, 9:00 AM</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Custom Animations -->
    <style>
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes slide-up {
            0% { transform: translateY(20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        @keyframes progress-bar {
            0% { width: 0%; }
            100% { width: var(--width); }
        }
        .animate-fade-in {
            animation: fade-in 0.5s ease forwards;
        }
        .animate-slide-up {
            animation: slide-up 0.5s ease forwards;
        }
        .animate-progress-bar {
            animation: progress-bar 1s ease forwards;
            --width: attr(data-width);
        }
        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-400 { animation-delay: 0.4s; }
        .animation-delay-600 { animation-delay: 0.6s; }
        .animation-delay-800 { animation-delay: 0.8s; }
        .animation-delay-1000 { animation-delay: 1s; }
        .animation-delay-1200 { animation-delay: 1.2s; }
        .animation-delay-1400 { animation-delay: 1.4s; }
    </style>

    <!-- JavaScript to Set Progress Bar Widths -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.animate-progress-bar').forEach(bar => {
                const width = bar.getAttribute('data-width');
                bar.style.setProperty('--width', width);
            });
        });
    </script>
@endsection