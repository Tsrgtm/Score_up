@extends('components.layouts.app') <!-- Assuming the base layout is 'layouts/app.blade.php' -->

@section('title', 'Contact Us - Score Up')

@section('content')
    <!-- Your contact form content goes here -->
    <div class="hero-gradient pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Get in Touch
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl text-blue-100">
                    Have questions or need support? Our team is here to help you succeed.
                </p>
            </div>
        </div>
    </div>

    <div class="py-16 bg-white scrollspy">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row-reverse rounded-xl bg-white shadow-lg overflow-hidden min-h-[500px]">
                <!-- Contact Form -->
                <div class="w-full md:w-1/2 p-8 flex flex-col">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                        required>
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                        required>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="5" 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                            required></textarea>
                            </div>
                        </div>

                        <button type="submit" 
                                class="w-full py-3 px-6 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="w-full md:w-1/2 bg-blue-700 p-8 flex flex-col">
                    <div class="space-y-8 text-white">
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-white mt-1 mr-3 text-lg"></i>
                                <div>
                                    <p class="font-semibold text-lg">Our Office</p>
                                    <p class="text-white/80 mt-1">
                                        123 Education Street<br>
                                        Kathmandu, Nepal
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-white mt-1 mr-3 text-lg"></i>
                                <div>
                                    <p class="font-semibold text-lg">Email Support</p>
                                    <p class="text-white/80 mt-1">
                                        support@scoreup.com<br>
                                        info@scoreup.com
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-phone-alt text-white mt-1 mr-3 text-lg"></i>
                                <div>
                                    <p class="font-semibold text-lg">Phone Support</p>
                                    <p class="text-white/80 mt-1">
                                        +977-1-1234567<br>
                                        +977-9801234567
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">
                Frequently Asked Questions
            </h2>
            <div class="space-y-6 max-w-3xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-lg font-medium text-gray-900">How quickly can I expect a response?</h3>
                            <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transform transition"></i>
                        </summary>
                        <p class="mt-4 text-gray-600">
                            Our team typically responds within 24 hours during business days. For urgent inquiries,
                            please call our support number.
                        </p>
                    </details>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-lg font-medium text-gray-900">Do you offer technical support?</h3>
                            <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transform transition"></i>
                        </summary>
                        <p class="mt-4 text-gray-600">
                            Yes! Our technical support team is available 24/7 to help with any platform issues.
                            Contact us via phone or email for immediate assistance.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </div>

@endsection