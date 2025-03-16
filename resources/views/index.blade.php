@extends('components.layouts.app') <!-- Assuming the base layout is 'layouts/app.blade.php' -->

@section('title', 'Score Up - Home')

@section('content')
    <!-- Hero Section (unchanged) -->
    <section class="relative bg-amber-50 px-4 sm:px-12 lg:px-20 py-20 sm:pt-42 overflow-hidden flex flex-col justify-center min-h-screen">
        <!-- Subtle Animated Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-amber-100 via-amber-50 to-transparent opacity-70 animate-gradient-shift"></div>

        <div class="max-w-7xl mx-auto flex flex-col items-center text-center md:text-left md:items-start z-10">
            <div class="max-w-2xl text-center mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-800">
                    Boost Your <span class="text-amber-600">English Skills</span> with Score Up
                </h1>
                <p class="mt-4 text-lg text-gray-600 font-serif max-w-2xl">
                    Discover how Score Up empowers you to excel on the Duolingo English Test with comprehensive tools and support tailored to your journey.
                </p>
                <div class="mt-10 space-x-4 flex items-center justify-center">
                    <!-- Amber Gradient Button -->
                    <a href="/register" class="bg-gradient-to-r from-amber-500 to-amber-700 hover:from-amber-600 hover:to-amber-800 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition duration-300 ease-in-out">
                        Start for Free
                    </a>
                    <!-- Amber Button with Border -->
                    <a href="/login" class="bg-transparent hover:bg-amber-100 text-amber-600 font-semibold py-3 px-6 rounded-full border-2 border-amber-800 shadow-lg transition duration-300 ease-in-out">
                        Try a Mock Test
                    </a>
                </div>
            </div>
            <img src="{{ asset('assets/images/dashboard_screenshot.png') }}" alt="Dashboard Screenshot" class="mt-12 sm:w-[90%] mx-auto rounded-lg border-4 border-amber-600">

        </div>

        <!-- Custom Animation for Gradient Shift -->
        <style>
            @keyframes gradient-shift {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            .animate-gradient-shift {
                background-size: 200% 200%;
                animation: gradient-shift 15s ease infinite;
            }
        </style>
    </section>

    <section class="px-4 sm:px-12 lg:px-20 py-20">
        <div>
            <!-- Heading -->
            <div class="text-center mb-16"
                x-data="{ isVisible: false }"
                x-init="$nextTick(() => isVisible = true)"
                x-show="isVisible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter-end="opacity-100 translate-y-0">
                <h2 class="text-3xl md:text-4xl font-sans font-bold text-gray-800">
                    Everything You Need to <span class="text-amber-600">Score Higher</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 font-serif">
                    Explore the powerful tools designed to elevate your DET preparation experience.
                </p>
            </div>

            <!-- Features List (One by One) -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                <!-- Feature 1: Practice Questions -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-8 flex flex-col md:flex-row items-center transform transition-transform duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-amber-200 rounded-full flex items-center justify-center mb-6 md:mb-0 md:mr-6 shrink-0">
                        <x-heroicon-o-book-open class="w-8 h-8 text-amber-600" />
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-sans font-semibold text-gray-800">Practice Questions</h3>
                        <p class="mt-3 text-gray-600 font-serif text-base">
                            Hone your skills with an extensive library of DET-style practice questions. Each question is carefully crafted to mirror the format and difficulty of the actual test, covering reading, writing, listening, and speaking sections. With varying difficulty levels, you can progressively build your confidence and mastery.
                        </p>
                    </div>
                </div>

                <!-- Feature 2: Mock Exams -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-8 flex flex-col md:flex-row items-center transform transition-transform duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-amber-200 rounded-full flex items-center justify-center mb-6 md:mb-0 md:mr-6 shrink-0">
                        <x-heroicon-o-clipboard-document-check class="w-8 h-8 text-amber-600" />
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-sans font-semibold text-gray-800">Mock Exams</h3>
                        <p class="mt-3 text-gray-600 font-serif text-base">
                            Experience the real DET with full-length mock exams designed to replicate test day conditions. Timed and structured like the official exam, these practice tests help you manage time effectively, identify strengths, and address weaknesses before the big day.
                        </p>
                    </div>
                </div>

                <!-- Feature 3: Expert Feedback -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-8 flex flex-col md:flex-row items-center transform transition-transform duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-amber-200 rounded-full flex items-center justify-center mb-6 md:mb-0 md:mr-6 shrink-0">
                        <x-heroicon-o-chat-bubble-oval-left-ellipsis class="w-8 h-8 text-amber-600" />
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-sans font-semibold text-gray-800">Expert Feedback</h3>
                        <p class="mt-3 text-gray-600 font-serif text-base">
                            Receive detailed, personalized feedback from experienced DET instructors. Whether it’s improving your writing structure, refining your speaking fluency, or mastering tricky listening questions, our experts provide actionable advice to boost your scores.
                        </p>
                    </div>
                </div>

                <!-- Feature 4: Advanced Analytics -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-400"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-8 flex flex-col md:flex-row items-center transform transition-transform duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-amber-200 rounded-full flex items-center justify-center mb-6 md:mb-0 md:mr-6 shrink-0">
                        <x-heroicon-o-chart-bar class="w-8 h-8 text-amber-600" />
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-sans font-semibold text-gray-800">Advanced Analytics</h3>
                        <p class="mt-3 text-gray-600 font-serif text-base">
                            Gain deep insights into your performance with comprehensive analytics. Track your progress over time, analyze your accuracy by question type, and receive customized recommendations to focus your efforts where they matter most.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="bg-slate-50 px-4 sm:px-12 lg:px-20 py-20">
        <div>
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
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 content-center items-center gap-8">
                <!-- Free Plan -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-white rounded-xl shadow-md p-6 transform transition-transform duration-500 hover:scale-105 flex-1">
                    <h3 class="text-xl font-sans font-semibold text-gray-800">Free</h3>
                    <p class="mt-2 text-3xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>0<span class="text-md text-gray-600 font-serif">/forever</span></p>
                    <p class="mt-4 text-gray-600 font-serif">Dip your toes into DET prep.</p>
                    <ul class="mt-6 space-y-3 text-gray-600 font-serif text-sm">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            10 DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-x-circle class="w-5 h-5 text-red-500 mr-2" />
                            0 Mock Exam
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-x-circle class="w-5 h-5 text-red-500 mr-2" />
                            No Expert Feedback
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-gray-500 mr-2" />
                            Basic Analytics
                        </li>
                    </ul>
                    <a href="{{ route('dashboard') }}" class="mt-6 inline-block w-full text-center bg-amber-100 text-amber-600 px-4 py-2 rounded-lg font-sans font-semibold hover:bg-amber-200 hover:border-amber-400 transition-colors duration-200 shadow-md">
                        Start Free
                    </a>
                </div>

                <!-- 7-Day Plan (New) -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-white rounded-xl shadow-md p-6 transform transition-transform duration-500 hover:scale-105 flex-1 relative">
                    <span class="absolute top-0 right-0 bg-amber-400 text-white text-xs font-sans font-semibold px-2 py-1 rounded-bl-lg rounded-tr-lg">Quick Start</span>
                    <h3 class="text-xl font-sans font-semibold text-gray-800">3-Day Trial</h3>
                    <p class="mt-2 text-3xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>499<span class="text-md text-gray-600 font-serif">/3 days</span></p>
                    <p class="mt-4 text-gray-600 font-serif">A taste of premium prep.</p>
                    <ul class="mt-6 space-y-3 text-gray-600 font-serif text-sm">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Unlimited DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-x-circle class="w-5 h-5 text-red-500 mr-2" />
                            0 Mock Exams
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-x-circle class="w-5 h-5 text-red-500 mr-2" />
                            0 Expert Feedback Session
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-gray-500 mr-2" />
                            Basic Analytics
                        </li>
                    </ul>
                    <a href="#" class="mt-6 inline-block w-full text-center bg-amber-300 text-white px-4 py-2 rounded-lg font-sans font-semibold hover:bg-amber-400 transition-colors duration-200 shadow-md">
                        Start Trial
                    </a>
                </div>

                <!-- 10-Day Plan -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-white rounded-xl shadow-md p-6 transform transition-transform duration-500 hover:scale-105 flex-1 relative">
                    <span class="absolute top-0 right-0 bg-amber-500 text-white text-xs font-sans font-semibold px-2 py-1 rounded-bl-lg rounded-tr-lg">Best for Quick Prep</span>
                    <h3 class="text-xl font-sans font-semibold text-gray-800">10-Day Sprint</h3>
                    <p class="mt-2 text-3xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>999<span class="text-md text-gray-600 font-serif">/10 days</span></p>
                    <p class="mt-4 text-gray-600 font-serif">A short burst of focused prep.</p>
                    <ul class="mt-6 space-y-3 text-gray-600 font-serif text-sm">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Unlimited DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            1 Mock Exams
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            1 Expert Feedback Session
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Detailed Analytics
                        </li>
                    </ul>
                    <a href="#" class="mt-6 inline-block w-full text-center bg-amber-400 text-white px-4 py-2 rounded-lg font-sans font-semibold hover:bg-amber-500 transition-colors duration-200 shadow-md">
                        Start Sprint
                    </a>
                </div>

                <!-- Monthly Plan -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-400"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-gradient-to-br from-amber-100 to-amber-200 rounded-xl shadow-lg p-6 transform transition-transform duration-500 hover:scale-105 flex-1 relative">
                    <span class="absolute top-0 right-0 bg-amber-600 text-white text-xs font-sans font-semibold px-2 py-1 rounded-bl-lg rounded-tr-lg">Best Value</span>
                    <h3 class="text-xl font-sans font-semibold text-gray-800">Monthly</h3>
                    <p class="mt-2 text-3xl font-mono font-bold text-amber-600"><span class="mr-1">रु</span>2499<span class="text-md text-gray-600 font-serif">/mo</span></p>
                    <p class="mt-4 text-gray-600 font-serif">Full access for ultimate success.</p>
                    <ul class="mt-6 space-y-3 text-gray-600 font-serif text-sm">
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            Unlimited DET Practice Questions
                        </li>
                        <li class="flex items-center">
                            <x-heroicon-o-check-circle class="w-5 h-5 text-green-500 mr-2" />
                            5 Mock Exams
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
                    <a href="#" class="mt-6 inline-block w-full text-center bg-amber-600 text-white px-4 py-2 rounded-lg font-sans font-semibold hover:bg-amber-700 transition-colors duration-200 shadow-md">
                        Go Monthly
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="px-4 sm:px-12 lg:px-20 py-20">
        <div>
            <!-- Section Header -->
            <div class="text-center mb-16"
                x-data="{ isVisible: false }"
                x-init="$nextTick(() => isVisible = true)"
                x-show="isVisible"
                x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 -translate-y-10"
                x-transition:enter-end="opacity-100 translate-y-0">
                <h2 class="text-3xl md:text-4xl font-sans font-bold text-gray-800">
                    What Our <span class="text-amber-600">Students Say</span>
                </h2>
                <p class="mt-4 text-lg text-gray-600 font-serif max-w-2xl mx-auto">
                    Real feedback from students who improved their DET scores with Score Up.
                </p>
            </div>

            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Review Card 1 -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-100"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-6 flex flex-col items-start transform transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-800 font-bold text-xl mr-4 shrink-0">
                            S
                        </div>
                        <div>
                            <h3 class="text-lg font-sans font-semibold text-gray-800">Sarah K.</h3>
                            <div class="flex text-amber-500 text-sm">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 font-serif text-base leading-relaxed">
                        "Score Up helped me boost my DET score by 20 points in just 3 weeks! The practice tests feel exactly like the real thing."
                    </p>
                </div>

                <!-- Review Card 2 -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-200"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-6 flex flex-col items-start transform transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-800 font-bold text-xl mr-4 shrink-0">
                            A
                        </div>
                        <div>
                            <h3 class="text-lg font-sans font-semibold text-gray-800">Ahmed R.</h3>
                            <div class="flex text-amber-500 text-sm">
                                ★★★★☆
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 font-serif text-base leading-relaxed">
                        "The app's interface is super clean, and the instant feedback feature really helped me improve my weak areas."
                    </p>
                </div>

                <!-- Review Card 3 -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-6 flex flex-col items-start transform transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-800 font-bold text-xl mr-4 shrink-0">
                            M
                        </div>
                        <div>
                            <h3 class="text-lg font-sans font-semibold text-gray-800">Maria L.</h3>
                            <div class="flex text-amber-500 text-sm">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 font-serif text-base leading-relaxed">
                        "I love how Score Up tracks my progress. It made preparing for DET so much less stressful!"
                    </p>
                </div>

                <!-- Review Card 4 -->
                <div x-data="{ isVisible: false }"
                    x-init="$nextTick(() => isVisible = true)"
                    x-show="isVisible"
                    x-transition:enter="transition ease-out duration-700 delay-400"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="bg-amber-100 rounded-xl p-6 flex flex-col items-start transform transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center text-amber-800 font-bold text-xl mr-4 shrink-0">
                            J
                        </div>
                        <div>
                            <h3 class="text-lg font-sans font-semibold text-gray-800">James P.</h3>
                            <div class="flex text-amber-500 text-sm">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 font-serif text-base leading-relaxed">
                        "The expert feedback was a game-changer. I finally understood my mistakes and aced the speaking section!"
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection