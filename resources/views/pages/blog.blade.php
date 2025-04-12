@extends('components.layouts.app')

@section('title', 'Blog - Score Up')

@section('content')
<!-- Hero Section -->
<section class="bg-blue-800 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl mb-4">
                ScoreUp Blog
            </h1>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Expert insights, proven strategies, and actionable tips to excel in your DET exam preparation.
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Featured Post -->
    <section class="mb-16">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <img src="https://source.unsplash.com/random/1200x600?study" alt="Featured post" class="w-full h-96 object-cover">
            <div class="p-8">
                <div class="mb-4">
                    <span class="inline-block px-3 py-1 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full">
                        Exam Strategies
                    </span>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Top 10 Strategies for Improving Your DET Speaking Score
                </h2>
                <div class="flex items-center text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <i class="far fa-calendar mr-2"></i>
                        <time datetime="2023-12-14">Dec 14, 2023</time>
                    </div>
                    <div class="flex items-center">
                        <i class="far fa-clock mr-2"></i>
                        5 min read
                    </div>
                </div>
                <p class="text-lg text-gray-600 mb-6">
                    Master the art of effective communication in the DET speaking section with these evidence-based strategies...
                </p>
                <a href="#" class="inline-flex items-center text-blue-700 font-semibold hover:text-blue-800 transition-colors">
                    Read Article
                    <i class="fas fa-arrow-right ml-2 mt-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="mb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 border-l-4 border-blue-700 pl-4">
            Latest Articles
        </h2>
        
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Article 1 -->
            <article class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img src="https://source.unsplash.com/random/800x600?writing" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block mb-3 px-2 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded">
                            Writing Skills
                        </span>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Mastering Academic Vocabulary for the DET
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                            <span>Dec 12, 2023</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <p class="text-gray-600 line-clamp-2">
                            Essential vocabulary lists and memorization techniques to help you excel in the writing section...
                        </p>
                    </div>
                </a>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img src="https://source.unsplash.com/random/800x600?time" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block mb-3 px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded">
                            Time Management
                        </span>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Effective Time Management for DET Success
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                            <span>Dec 10, 2023</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <p class="text-gray-600 line-clamp-2">
                            Learn how to effectively allocate your time during the exam to maximize your score potential...
                        </p>
                    </div>
                </a>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <a href="#">
                    <img src="https://source.unsplash.com/random/800x600?books" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block mb-3 px-2 py-1 text-xs font-semibold text-purple-800 bg-purple-100 rounded">
                            Resources
                        </span>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Best Resources for DET Preparation
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                            <span>Dec 8, 2023</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <p class="text-gray-600 line-clamp-2">
                            Curated list of books, websites, and tools to supplement your DET preparation...
                        </p>
                    </div>
                </a>
            </article>
        </div>
    </section>

    <!-- Pagination -->
    <nav class="flex justify-center border-t border-gray-200 pt-8">
        <div class="flex space-x-2">
            <a href="#" class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-gray-50">
                1
            </a>
            <a href="#" class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-gray-50">
                2
            </a>
            <a href="#" class="px-4 py-2 text-blue-700 hover:text-blue-800 font-medium">
                Next →
            </a>
        </div>
    </nav>
</main>

<!-- Categories Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 border-l-4 border-blue-700 pl-4">
            Explore Categories
        </h2>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <a href="#" class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                        <i class="fas fa-book-open text-blue-700 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Study Tips</h3>
                        <p class="text-sm text-gray-500">12 articles</p>
                    </div>
                </div>
            </a>
            <a href="#" class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                        <i class="fas fa-clock text-green-700 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Time Management</h3>
                        <p class="text-sm text-gray-500">8 articles</p>
                    </div>
                </div>
            </a>
            <a href="#" class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-purple-100 p-3 rounded-lg">
                        <i class="fas fa-trophy text-purple-700 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Success Stories</h3>
                        <p class="text-sm text-gray-500">15 articles</p>
                    </div>
                </div>
            </a>
            <a href="#" class="p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-orange-100 p-3 rounded-lg">
                        <i class="fas fa-bullhorn text-orange-700 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900">Updates</h3>
                        <p class="text-sm text-gray-500">5 articles</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection