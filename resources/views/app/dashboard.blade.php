@extends('components.layouts.dashboard')

@section('title', 'Dashboard')

@section('header-title', 'Dashboard')

@section('content')
    <div class="px-4 sm:px-6 space-y-6">
        <!-- Welcome Card -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 flex flex-col md:flex-row items-center justify-between animate-fade-in">
            <div>
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800">Welcome back, {{ auth()->user()->name }}!</h2>
                <p class="text-gray-600 mt-1">Ready to boost your English skills today?</p>
            </div>
            <a href="{{ route('dashboard') }}" class="mt-4 md:mt-0 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-300">Start Practicing</a>
        </div>
@endsection