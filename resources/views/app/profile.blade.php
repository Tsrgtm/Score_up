@extends('components.layouts.dashboard')

@section('title', 'Profile')

@section('header-title', 'My Account')

@section('content')
    <div class="px-4 sm:px-6 space-y-6">
       @livewire('profile.update-profile')
    </div>
@endsection