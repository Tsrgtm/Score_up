<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Test Practice - Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-white font-sans antialiased">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div x-data="{ open: false, practiceOpen: false, analyticsOpen: false, communityOpen: false, accountOpen: false }" 
             class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-100 transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0" 
             :class="{ '-translate-x-full': !open }">
            <div class="flex items-center justify-between p-4 border-b border-gray-100">
                <h2 class="text-xl font-semibold text-amber-800">TestMaster</h2>
                <button @click="open = false" class="md:hidden">
                    <x-heroicon-o-x-mark class="w-6 h-6 text-gray-500" />
                </button>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <!-- Dashboard -->
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <x-heroicon-o-home class="w-5 h-5 mr-3" />
                            Dashboard
                        </a>
                    </li>

                    <!-- Practice Dropdown -->
                    <li x-data="{ open: false }">
                        <button @click="practiceOpen = !practiceOpen" class="flex items-center justify-between w-full p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <div class="flex items-center">
                                <x-heroicon-o-book-open class="w-5 h-5 mr-3" />
                                Practice
                            </div>
                            <x-heroicon-o-chevron-down class="w-4 h-4" />
                        </button>
                        <div x-show="practiceOpen" class="pl-8 mt-1 space-y-1">
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Tests</a>
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Lessons</a>
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Quizzes</a>
                        </div>
                    </li>

                    <!-- Analytics Dropdown -->
                    <li x-data="{ open: false }">
                        <button @click="analyticsOpen = !analyticsOpen" class="flex items-center justify-between w-full p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <div class="flex items-center">
                                <x-heroicon-o-chart-bar class="w-5 h-5 mr-3" />
                                Analytics
                            </div>
                            <x-heroicon-o-chevron-down class="w-4 h-4" />
                        </button>
                        <div x-show="analyticsOpen" class="pl-8 mt-1 space-y-1">
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Results</a>
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Progress</a>
                        </div>
                    </li>

                    <!-- Community Dropdown -->
                    <li x-data="{ open: false }">
                        <button @click="communityOpen = !communityOpen" class="flex items-center justify-between w-full p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <div class="flex items-center">
                                <x-heroicon-o-users class="w-5 h-5 mr-3" />
                                Community
                            </div>
                            <x-heroicon-o-chevron-down class="w-4 h-4" />
                        </button>
                        <div x-show="communityOpen" class="pl-8 mt-1 space-y-1">
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Community</a>
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Forums</a>
                        </div>
                    </li>

                    <!-- Account Dropdown -->
                    <li x-data="{ open: false }">
                        <button @click="accountOpen = !accountOpen" class="flex items-center justify-between w-full p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <div class="flex items-center">
                                <x-heroicon-o-user class="w-5 h-5 mr-3" />
                                Account
                            </div>
                            <x-heroicon-o-chevron-down class="w-4 h-4"/>
                        </button>
                        <div x-show="accountOpen" class="pl-8 mt-1 space-y-1">
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Profile</a>
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Settings</a>
                            <a href="#" class="block p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded">Subscription</a>
                        </div>
                    </li>

                    <!-- Support -->
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <x-heroicon-o-lifebuoy class="w-5 h-5 mr-3" />
                            Support
                        </a>
                    </li>
                    <!-- Logout -->
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50 rounded">
                            <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5 mr-3" />
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white border-b border-gray-100 flex items-center justify-between p-4">
                <div class="flex items-center">
                    <button @click="open = true" class="md:hidden mr-4">
                        <x-heroicon-o-bars-3 class="w-6 h-6 text-gray-500" />
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <x-heroicon-o-bell class="w-6 h-6 text-gray-500" />
                        <span class="absolute top-0 right-0 w-2 h-2 bg-amber-500 rounded-full"></span>
                    </div>
                    <div x-data="{ profileOpen: false }" class="relative">
                        <button @click="profileOpen = !profileOpen" class="flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="w-8 h-8 rounded-full">
                            <span class="text-gray-700 hidden md:block">Student Name</span>
                            <x-heroicon-o-chevron-down class="w-4 h-4 text-gray-500" />
                        </button>
                        <div x-show="profileOpen" @click.away="profileOpen = false" 
                             class="absolute right-0 mt-2 w-48 bg-white border border-gray-100 rounded-lg shadow-lg">
                            <a href="#" class="block p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50">Profile</a>
                            <a href="#" class="block p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50">Settings</a>
                            <a href="#" class="block p-2 text-gray-700 hover:text-amber-600 hover:bg-amber-50">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <x-heroicon-o-book-open class="w-6 h-6 text-amber-500 mb-2" />
                        <p class="text-sm text-gray-600">Tests Completed</p>
                        <p class="text-xl font-semibold text-gray-800">12</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <x-heroicon-o-star class="w-6 h-6 text-amber-500 mb-2" />
                        <p class="text-sm text-gray-600">Average Score</p>
                        <p class="text-xl font-semibold text-gray-800">85%</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <x-heroicon-o-clock class="w-6 h-6 text-amber-500 mb-2" />
                        <p class="text-sm text-gray-600">Time Spent</p>
                        <p class="text-xl font-semibold text-gray-800">24h</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <x-heroicon-o-trophy class="w-6 h-6 text-amber-500 mb-2" />
                        <p class="text-sm text-gray-600">Streak</p>
                        <p class="text-xl font-semibold text-gray-800">7 days</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white p-6 rounded-lg border border-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">Recent Activity</h2>
                        <a href="#" class="text-amber-600 hover:text-amber-700 text-sm">View All</a>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <x-heroicon-o-book-open class="w-5 h-5 text-amber-500 mr-3" />
                                <span class="text-gray-700">Completed Practice Test 1</span>
                            </div>
                            <span class="text-sm text-gray-500">Mar 8, 2025</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <x-heroicon-o-academic-cap class="w-5 h-5 text-amber-500 mr-3" />
                                <span class="text-gray-700">Finished Lesson: Grammar Basics</span>
                            </div>
                            <span class="text-sm text-gray-500">Mar 7, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <button class="bg-amber-500 text-white p-4 rounded-lg hover:bg-amber-600 transition flex items-center justify-center">
                        <x-heroicon-o-play class="w-5 h-5 mr-2" />
                        Start Practice Test
                    </button>
                    <button class="bg-white border border-amber-500 text-amber-600 p-4 rounded-lg hover:bg-amber-50 transition flex items-center justify-center">
                        <x-heroicon-o-chart-bar class="w-5 h-5 mr-2" />
                        View Results
                    </button>
                </div>
            </main>
        </div>
    </div>
</body>
</html>