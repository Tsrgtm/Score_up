@extends('components.layouts.app')

@section('title', 'Blog - Score Up')

@section('content')
<!-- Hero Section -->
<div class="hero-gradient pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Score Up Blog
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-xl text-blue-100">
                Your go-to resource for tips, strategies, and insights to ace the DET exam.
            </p>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Blog Grid -->
    <div class="my-16">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Article 1 -->
            <article class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-shadow duration-300">
                <a href="#">
                    <img src="https://picsum.photos/800/600?random" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-4">
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
            <article class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-shadow duration-300">
                <a href="#">
                    <img src="https://picsum.photos/800/600?random=2" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-4">
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
            <article class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-shadow duration-300">
                <a href="#">
                    <img src="https://picsum.photos/800/600?random=3" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-4">
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

            <article class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-shadow duration-300">
                <a href="#">
                    <img src="https://picsum.photos/800/600?random=4" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <span class="inline-block mb-3 px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded">
                            Tips & Tricks
                        </span>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Top 10 Tips for the DET Exam Day
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                            <span>Dec 8, 2023</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <p class="text-gray-600 line-clamp-2">
                            Essential tips to keep in mind on the day of the exam to ensure a smooth experience...
                        </p>
                    </div>
                </a>
            </article>

            <article class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-shadow duration-300">
                <a href="#">
                    <img src="https://picsum.photos/800/600?random=5" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <span class="inline-block mb-3 px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded">
                            Updates
                        </span>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            DET Exam Format Changes in 2024
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                            <span>Dec 8, 2023</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <p class="text-gray-600 line-clamp-2">
                            Important updates regarding the changes in the DET exam format for the upcoming year...
                        </p>
                    </div>
                </a>
            </article>

            <article class="bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-shadow duration-300">
                <a href="#">
                    <img src="https://picsum.photos/800/600?random=6" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <span class="inline-block mb-3 px-2 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded">
                            Success Stories
                        </span>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Success Story: How I Scored 120 on the DET
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 space-x-4 mb-4">
                            <span>Dec 8, 2023</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <p class="text-gray-600 line-clamp-2">
                            My experience and tips for success in the DET exam...
                        </p>
                    </div>
                </a>
            </article>
        </div>
    </div>

</div>

@include('components.layouts.partials.cta')


@endsection