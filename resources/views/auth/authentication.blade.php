@extends('auth.form-template')

@section('title', 'Login')

@section('auth-title', "Welcome Back, Let's Dive In!")

@section('content')
    @livewire('authentication')
@endsection