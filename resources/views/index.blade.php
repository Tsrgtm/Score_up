@extends('components.layouts.app') <!-- Assuming the base layout is 'layouts/app.blade.php' -->

@section('title', 'Score Up - Home')

@section('content')
    <!-- Hero Section (unchanged) -->
    <section class="relative bg-amber-50 pt-16 pb-24 overflow-hidden flex items-center min-h-screen">
        <div class="max-w-6xl mx-auto px-6 flex flex-col items-center text-center md:flex-row md:text-left md:items-start">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-sans font-bold text-gray-800 leading-tight">
                    Boost Your <span class="text-amber-600">DET Score</span> Today
                </h1>
                <p class="mt-4 text-lg text-gray-600 font-serif">
                    Master the Duolingo English Test with tailored practice, mock exams, and expert feedback. Your path to success starts here! 🌟
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center items-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="bg-amber-500 text-white px-6 py-3 rounded-lg font-sans font-semibold hover:bg-amber-600 transition-colors duration-200 transform hover:-translate-y-1 shadow-md">
                        Start Practicing
                    </a>
                    <a href="#" class="bg-transparent border-2 border-amber-300 text-amber-700 px-6 py-3 rounded-lg font-sans font-semibold hover:border-amber-500 hover:text-amber-800 transition-colors duration-200">
                        Try a Mock Test
                    </a>
                </div>
            </div>
            <div class="mt-12 md:mt-0 md:w-1/2 flex justify-center relative">
                <div class="w-72 h-72 bg-gradient-to-br from-amber-200 via-amber-400 to-amber-600 rounded-full flex items-center justify-center shadow-xl">
                    <div class="w-64 h-64 bg-white rounded-full flex flex-col items-center justify-center relative shadow-inner">
                        <span class="text-6xl font-mono font-medium text-amber-600">135</span>
                        <span class="text-xl font-sans font-semibold text-gray-700 mt-2">DET Score</span>
                        <div class="absolute -bottom-6 bg-amber-500 text-white px-6 py-2 rounded-full shadow-md">
                            <span class="text-sm font-sans font-semibold">Target Achieved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Features Section (unchanged from static version) -->
    <section class="bg-amber-50 py-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-sans font-bold text-gray-800">
                    Everything You Need to <span class="text-amber-600">Score Higher</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 font-serif max-w-2xl mx-auto">
                    Discover how Score Up empowers you to excel on the Duolingo English Test with comprehensive tools and support tailored to your journey.
                </p>
            </div>
            <div class="space-y-16">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 relative">
                        <div class="p-8">
                            <div class="w-20 h-20 bg-amber-200 rounded-full flex items-center justify-center mb-6 mx-auto md:mx-0 shadow-lg">
                                <svg class="w-10 h-10 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-sans font-semibold text-gray-800 text-center md:text-left">Tailored Practice</h3>
                            <p class="mt-4 text-gray-600 font-serif">
                                Get access to a vast library of DET-style questions designed to match your skill level. Whether you’re struggling with speaking, writing, or listening, our adaptive system identifies your weaknesses and provides targeted exercises to improve them. Track your progress with detailed analytics and watch your confidence soar!
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="bg-amber-100 rounded-full w-48 h-48 mx-auto flex items-center justify-center transform transition-transform duration-500 hover:rotate-6">
                            <svg class="w-24 h-24 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                    <div class="md:w-1/2 relative">
                        <div class="p-8">
                            <div class="w-20 h-20 bg-amber-200 rounded-full flex items-center justify-center mb-6 mx-auto md:mx-0 shadow-lg">
                                <svg class="w-10 h-10 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-sans font-semibold text-gray-800 text-center md:text-left">Mock Exams</h3>
                            <p class="mt-4 text-gray-600 font-serif">
                                Experience the DET exactly as it will be on test day with our full-length mock exams. Timed and structured to mimic the real test, these simulations help you build stamina and familiarity. After each exam, receive a detailed score breakdown and tips to improve your performance across all sections.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="bg-amber-100 rounded-lg w-48 h-48 mx-auto flex items-center justify-center transform transition-transform duration-500 hover:-rotate-6">
                            <svg class="w-20 h-20 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 relative">
                        <div class="p-8">
                            <div class="w-20 h-20 bg-amber-200 rounded-full flex items-center justify-center mb-6 mx-auto md:mx-0 shadow-lg">
                                <svg class="w-10 h-10 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-sans font-semibold text-gray-800 text-center md:text-left">Expert Feedback</h3>
                            <p class="mt-4 text-gray-600 font-serif">
                                Elevate your preparation with personalized feedback from DET experts. Submit your practice responses and get in-depth critiques on speaking fluency, writing coherence, and more. Our pros provide actionable advice to fine-tune your skills and maximize your score potential.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="bg-amber-100 rounded-full w-48 h-48 mx-auto flex items-center justify-center transform transition-transform duration-500 hover:rotate-6">
                            <svg class="w-24 h-24 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="bg-amber-50 py-20">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center mb-16" 
                x-data="{ isVisible: false }"
                x-init="$nextTick(() => isVisible = true)"
                x-show="isVisible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter-end="opacity-100 translate-y-0">
                <h2 class="text-3xl md:text-4xl font-sans font-bold text-gray-800">
                    Choose Your <span class="text-amber-600">Perfect Plan</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 font-serif max-w-2xl mx-auto">
                    Flexible pricing to suit your DET preparation needs. Start free, try a short sprint, or go all-in for maximum success!
                </p>
            </div>

            <!-- Pricing Cards -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <!-- Free Plan -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-white rounded-xl shadow-md p-8 transform transition-transform duration-500 hover:scale-105 flex-1">
                    <h3 class="text-2xl font-sans font-semibold text-gray-800">Free</h3>
                    <p class="mt-2 text-4xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>0<span class="text-lg text-gray-600 font-serif">/forever</span></p>
                    <p class="mt-4 text-gray-600 font-serif">Dip your toes into DET prep.</p>
                    <ul class="mt-6 space-y-4 text-gray-600 font-serif">
                        <li class="flex items-center">
                            <x-heroicon-o-check class="w-5 h-5 text-green-500 mr-2" />
                            5 DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check class="w-5 h-5 text-green-500 mr-2" />
                            1 Mock Exam
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-x-mark class="w-5 h-5 text-red-500 mr-2" />
                            No Expert Feedback
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-x-mark class="w-5 h-5 text-red-500 mr-2" />
                            Basic Analytics
                        </li>
                    </ul>
                    <a href="#" class="mt-8 inline-block w-full text-center bg-amber-100 border-2 border-amber-300 text-amber-600 px-6 py-3 rounded-lg font-sans font-semibold hover:bg-amber-200 hover:border-amber-400 transition-colors duration-200 shadow-md">
                        Start Free
                    </a>
                </div>

                <!-- 10-Day Plan -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-white rounded-xl shadow-md p-8 transform transition-transform duration-500 hover:scale-105 flex-1 relative">
                    <span class="absolute top-0 right-0 bg-amber-500 text-white text-sm font-sans font-semibold px-3 py-1 rounded-bl-lg rounded-tr-lg">Best for Quick Prep</span>
                    <h3 class="text-2xl font-sans font-semibold text-gray-800">10-Day Sprint</h3>
                    <p class="mt-2 text-4xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>999<span class="text-lg text-gray-600 font-serif">/10 days</span></p>
                    <p class="mt-4 text-gray-600 font-serif">A short burst of focused prep.</p>
                    <ul class="mt-6 space-y-4 text-gray-600 font-serif">
                        <li class="flex items-center">
                            <x-heroicon-o-check class="w-5 h-5 text-green-500 mr-2" />
                            20 DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check class="w-5 h-5 text-green-500 mr-2" />
                            3 Mock Exams
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check class="w-5 h-5 text-green-500 mr-2" />
                            1 Expert Feedback Session
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check class="w-5 h-5 text-green-500 mr-2" />
                            Detailed Analytics
                        </li>
                    </ul>
                    <a href="#" class="mt-8 inline-block w-full text-center bg-amber-400 text-white px-6 py-3 rounded-lg font-sans font-semibold hover:bg-amber-500 transition-colors duration-200 shadow-md">
                        Start Sprint
                    </a>
                </div>

                <!-- Monthly Plan -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-gradient-to-br from-amber-100 to-amber-200 rounded-xl shadow-lg p-8 transform transition-transform duration-500 hover:scale-105 flex-1 relative">
                    <span class="absolute top-0 right-0 bg-amber-600 text-white text-sm font-sans font-semibold px-3 py-1 rounded-bl-lg rounded-tr-lg">Best Value</span>
                    <h3 class="text-2xl font-sans font-semibold text-gray-800">Monthly</h3>
                    <p class="mt-2 text-4xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>2499<span class="text-lg text-gray-600 font-serif">/mo</span></p>
                    <p class="mt-4 text-gray-600 font-serif">Full access for ultimate success.</p>
                    <ul class="mt-6 space-y-4 text-gray-600 font-serif">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Unlimited DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Unlimited Mock Exams
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Unlimited Expert Feedback
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Advanced Analytics
                        </li>
                    </ul>
                    <a href="#" class="mt-8 inline-block w-full text-center bg-amber-600 text-white px-6 py-3 rounded-lg font-sans font-semibold hover:bg-amber-700 transition-colors duration-200 shadow-md">
                        Go Monthly
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection