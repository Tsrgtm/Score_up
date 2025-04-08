@extends('components.layouts.app') <!-- Assuming the base layout is 'layouts/app.blade.php' -->

@section('title', 'Score Up - Home')

@section('content')
    <div x-data="{ open: false }" 
        x-init="$watch('open', value => document.body.style.overflow = value ? 'hidden' : 'auto')" 
        class="hero-gradient scrollspy">
        <div class="max-w-7xl mx-auto pt-28 pb-16 px-4 sm:pb-24 sm:pt-44 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Ace Your DET Exam with Confidence
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl text-blue-100">
                    Personalized practice tests, instant feedback, and progress tracking to help you achieve your target score.
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-blue-700 bg-white hover:bg-blue-50">
                        Start Free Trial
                    </a>
                    <button @click="open = true" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 bg-opacity-60 hover:bg-opacity-70">
                        <i class="fas fa-play mr-2 text-sm"></i> Watch Demo
                    </button>
                </div>
            </div>
            <img src="{{ asset('assets/images/app ss.png') }}" alt="" class="mt-10 mx-auto w-full rounded-lg shadow-lg">
        </div>
        @include('components.modals.demo')
    </div>

    <div id="features" class="py-16 bg-white scrollspy">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Everything you need to succeed
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Our platform provides comprehensive tools to help you master the DET exam.
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
                    <div class="feature-card bg-white p-8 rounded-xl shadow-md transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-clipboard-check text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Authentic Practice Tests</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Access 100+ full-length tests that mirror the actual DET exam format and difficulty.
                            </p>
                        </div>
                    </div>

                    <div class="feature-card bg-white p-8 rounded-xl shadow-md transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                            <i class="fas fa-robot text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">AI-Powered Feedback</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Get instant, detailed feedback on your speaking and writing responses with our advanced AI.
                            </p>
                        </div>
                    </div>

                    <div class="feature-card bg-white p-8 rounded-xl shadow-md transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-500 text-white">
                            <i class="fas fa-chart-pie text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Progress Analytics</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Track your improvement over time with detailed performance reports and analytics.
                            </p>
                        </div>
                    </div>

                    <div class="feature-card bg-white p-8 rounded-xl shadow-md transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                            <i class="fas fa-stopwatch text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Timed Practice Mode</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Simulate real exam conditions with our timed practice mode and adaptive test engine.
                            </p>
                        </div>
                    </div>

                    <div class="feature-card bg-white p-8 rounded-xl shadow-md transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                            <i class="fas fa-book-open text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Study Resources</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Access vocabulary lists, grammar guides, and strategy tips from DET experts.
                            </p>
                        </div>
                    </div>

                    <div class="feature-card bg-white p-8 rounded-xl shadow-md transition duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-mobile-alt text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-gray-900">Mobile Friendly</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Practice anytime, anywhere with our fully responsive platform and mobile app.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="how-it-works" class="py-16 bg-gray-50 scrollspy">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Process</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    How Score Up Works
                </p>
            </div>

            <div class="mt-16">
                <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                    <div class="relative">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <span class="text-white font-bold">1</span>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Take a Diagnostic Test</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Start with our adaptive diagnostic test to identify your strengths and weaknesses.
                        </p>
                    </div>

                    <div class="mt-10 lg:mt-0 relative">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <span class="text-white font-bold">2</span>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Get Personalized Recommendations</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Our system creates a customized study plan based on your diagnostic results.
                        </p>
                    </div>

                    <div class="mt-10 lg:mt-0 relative">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <span class="text-white font-bold">3</span>
                        </div>
                        <h3 class="mt-6 text-lg font-medium text-gray-900">Practice & Improve</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Complete practice tests, review detailed feedback, and track your progress.
                        </p>
                    </div>
                </div>

                <div class="mt-16 flex justify-center">
                    <div class="w-full max-w-3xl rounded-lg overflow-hidden shadow-lg">
                        <div class="relative w-full aspect-[16/9] bg-gray-200 flex items-center justify-center">
                            <div class="h-8 w-8 sm:w-12 sm:h-12 rounded-full bg-blue-600 animate-ping absolute"></div>
                            <x-heroicon-s-play-circle class="relative w-14 h-14 sm:w-20 sm:h-20 text-blue-600" />
                        </div>
                        <div class="bg-white p-6">
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

    <div id="testimonials" class="py-16 bg-white scrollspy">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h2
            class="text-base text-blue-600 font-semibold tracking-wide uppercase"
          >
            Testimonials
          </h2>
          <p
            class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"
          >
            What our students say
          </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
          <div class="testimonial-card p-8 rounded-xl shadow-sm">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img
                  class="h-12 w-12 rounded-full"
                  src="https://randomuser.me/api/portraits/women/32.jpg"
                  alt="Emily"
                />
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-900">Emily R.</h3>
                <p class="text-blue-600">Improved from 75 to 95 in 3 weeks</p>
              </div>
            </div>
            <div class="mt-4">
              <p class="text-gray-600 italic">
                "Score Up's practice tests were incredibly similar to the actual
                DET exam. The detailed feedback helped me identify exactly where
                I needed improvement."
              </p>
            </div>
            <div class="mt-4 flex">
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
            </div>
          </div>

          <div class="testimonial-card p-8 rounded-xl shadow-sm">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img
                  class="h-12 w-12 rounded-full"
                  src="https://randomuser.me/api/portraits/men/45.jpg"
                  alt="Carlos"
                />
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-900">Carlos M.</h3>
                <p class="text-blue-600">Scored 120 on first attempt</p>
              </div>
            </div>
            <div class="mt-4">
              <p class="text-gray-600 italic">
                "The speaking practice with instant feedback was a game-changer.
                I could practice anytime and get detailed analysis of my
                pronunciation and fluency."
              </p>
            </div>
            <div class="mt-4 flex">
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
            </div>
          </div>

          <div class="testimonial-card p-8 rounded-xl shadow-sm">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img
                  class="h-12 w-12 rounded-full"
                  src="https://randomuser.me/api/portraits/women/68.jpg"
                  alt="Priya"
                />
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-medium text-gray-900">Priya K.</h3>
                <p class="text-blue-600">Achieved target score in 1 month</p>
              </div>
            </div>
            <div class="mt-4">
              <p class="text-gray-600 italic">
                "The progress tracking showed me exactly which areas I was
                improving in and which needed more work. It kept me motivated
                throughout my preparation."
              </p>
            </div>
            <div class="mt-4 flex">
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star text-yellow-400"></i>
              <i class="fas fa-star-half-alt text-yellow-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="pricing" class="bg-gray-50 py-16 scrollspy">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Pricing</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Simple, transparent pricing
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Choose the plan that fits your goals. All paid plans include a 7-day free trial.
                </p>
            </div>

            <div class="mt-16 grid sm:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- Free Plan -->
                <div class="pricing-card relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col transition duration-300">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900">Free</h3>
                        <p class="mt-4 flex items-baseline text-gray-900">
                            <span class="text-4xl font-extrabold tracking-tight">रु 0</span>
                            <span class="ml-1 text-xl font-semibold">/forever</span>
                        </p>
                        <p class="mt-6 text-gray-500">Basic access to get started</p>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">5 practice questions daily</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Basic Analytics</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-times text-gray-400 mt-1 mr-2"></i>
                                <span class="text-gray-400">No Expert feedback</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-times text-gray-400 mt-1 mr-2"></i>
                                <span class="text-gray-400">No full-length mock tests</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="/signup" class="block w-full py-3 px-6 border border-gray-300 rounded-md text-center font-medium bg-white text-gray-700 hover:bg-gray-50">
                            Sign Up Free
                        </a>
                    </div>
                </div>

                <!-- 3-Day Plan -->
                <div class="pricing-card relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col transition duration-300">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900">3-Day Intensive</h3>
                        <p class="mt-4 flex items-baseline text-gray-900">
                            <span class="text-4xl font-extrabold tracking-tight">रु 499</span>
                            <span class="ml-1 text-xl font-semibold">/3 days</span>
                        </p>
                        <p class="mt-6 text-gray-500">Short-term intensive practice</p>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Unlimited practice questions</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Basic Analytics</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-times text-gray-400 mt-1 mr-2"></i>
                                <span class="text-gray-400">No Expert feedback</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-times text-gray-400 mt-1 mr-2"></i>
                                <span class="text-gray-400">No full-length mock tests</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium bg-blue-600 text-white hover:bg-blue-700">
                            Purchase Now
                        </a>
                    </div>
                </div>

                <!-- 10-Day Plan -->
                <div class="pricing-card relative p-8 bg-white border-2 border-blue-500 rounded-2xl shadow-sm flex flex-col transition duration-300">
                    <div class="absolute -top-3 right-0 left-0 mx-auto w-max">
                        <div class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Most Popular
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900">10-Day Boost</h3>
                        <p class="mt-4 flex items-baseline text-gray-900">
                            <span class="text-4xl font-extrabold tracking-tight">रु 999</span>
                            <span class="ml-1 text-xl font-semibold">/10 days</span>
                        </p>
                        <p class="mt-6 text-gray-500">Best value for preparation</p>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Everything in 3-Day</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">1 full-length mock tests</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Advanced analytics</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Premium study resources</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium bg-blue-600 text-white hover:bg-blue-700">
                            Purchase Now
                        </a>
                    </div>
                </div>

                <!-- 1-Month Plan -->
                <div class="pricing-card relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col transition duration-300">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900">1-Month Mastery</h3>
                        <p class="mt-4 flex items-baseline text-gray-900">
                            <span class="text-4xl font-extrabold tracking-tight">रु 2,499</span>
                            <span class="ml-1 text-xl font-semibold">/month</span>
                        </p>
                        <p class="mt-6 text-gray-500">Comprehensive preparation</p>
                        <ul role="list" class="mt-6 space-y-4">
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Everything in 10-Day</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">5 full-length mock tests</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Personalized coaching</span>
                            </li>
                            <li class="flex">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Exclusive webinars</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <a href="#" class="block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium bg-blue-600 text-white hover:bg-blue-700">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-700 scrollspy">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Ready to improve your DET score?</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-blue-200">
                Join thousands of students who have successfully achieved their target scores with Score Up and taken a confident step toward their academic and career goals.
            </p>
            <a href="{{ route('dashboard') }}" class="mt-8 inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 w-auto">
                Get Started Now
            </a>
        </div>
    </div>
@endsection