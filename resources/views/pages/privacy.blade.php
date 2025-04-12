@extends('components.layouts.app')

@section('title', 'Privacy Policy - Score Up')

@section('content')
<div class="hero-gradient pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                Privacy Policy
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-xl text-blue-100">
                Your privacy is important to us. Learn how we protect and manage your data.
            </p>
        </div>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose max-w-4xl mx-auto">
            <!-- Introduction -->
            <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Introduction</h2>
                <p class="text-gray-600">
                    Score Up ("we", "our", or "us") is committed to protecting your privacy. This Privacy Policy 
                    explains how we collect, use, and safeguard your information when you use our services.
                </p>
            </div>

            <!-- Data Collection -->
            <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information We Collect</h2>
                <p class="text-gray-600 mb-4">We may collect and process the following data:</p>
                <ul class="list-disc pl-6 space-y-3 text-gray-600">
                    <li>Personal identification information (Name, email address, phone number)</li>
                    <li>Academic information and test results</li>
                    <li>Technical data (IP address, browser type, device information)</li>
                    <li>Usage data (pages visited, features used, time spent)</li>
                </ul>
            </div>

            <!-- Data Usage -->
            <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">How We Use Your Information</h2>
                <div class="grid gap-4 md:grid-cols-2">
                    <div class="flex items-start">
                        <i class="fas fa-chart-line text-blue-600 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-medium text-gray-900">Service Improvement</h3>
                            <p class="text-gray-600 text-sm">Enhance our platform and develop new features</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-comments text-blue-600 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-medium text-gray-900">Communication</h3>
                            <p class="text-gray-600 text-sm">Respond to inquiries and provide support</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Sharing -->
            <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Sharing</h2>
                <p class="text-gray-600">
                    We do not sell or rent your personal information to third parties. We may share data with:
                </p>
                <ul class="list-disc pl-6 space-y-3 text-gray-600 mt-4">
                    <li>Service providers (payment processors, hosting services)</li>
                    <li>Educational institutions (with your consent)</li>
                    <li>Legal authorities when required by law</li>
                </ul>
            </div>

            <!-- Security -->
            <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Security</h2>
                <div class="flex items-start bg-blue-50 p-4 rounded-lg">
                    <i class="fas fa-shield-alt text-blue-600 mt-1 mr-3"></i>
                    <div>
                        <p class="text-gray-600">
                            We implement industry-standard security measures including encryption, 
                            secure servers, and regular security audits to protect your data.
                        </p>
                    </div>
                </div>
            </div>

            <!-- User Rights -->
            <div class="bg-white p-8 rounded-xl shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Rights</h2>
                <div class="grid gap-4 md:grid-cols-2">
                    <div class="flex items-start">
                        <i class="fas fa-eye text-blue-600 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-medium text-gray-900">Access</h3>
                            <p class="text-gray-600 text-sm">Request copies of your personal data</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-edit text-blue-600 mt-1 mr-3"></i>
                        <div>
                            <h3 class="font-medium text-gray-900">Rectification</h3>
                            <p class="text-gray-600 text-sm">Update or correct inaccurate information</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="bg-blue-50 p-8 rounded-xl shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-gray-600">
                    For privacy-related inquiries, contact our Data Protection Officer:
                </p>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-blue-600 mr-2"></i>
                        <a href="mailto:privacy@scoreup.com" class="text-blue-600 hover:underline">
                            privacy@scoreup.com
                        </a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone-alt text-blue-600 mr-2"></i>
                        <a href="tel:+977-9801234567" class="text-blue-600 hover:underline">
                            +977-980-1234567
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection