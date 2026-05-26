@extends('layouts.app')

@section('title', 'Page Not Found - ' . config('app.name'))

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 pt-20 pb-20">
    <div class="max-w-xl w-full text-center" data-aos="zoom-in">
        <div class="mb-8">
            <span class="text-9xl font-black text-primary/10 select-none">404</span>
        </div>
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Oops! Page not found</h1>
        <p class="text-xl text-gray-600 mb-10">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ url('/') }}" class="w-full sm:w-auto bg-primary text-white font-bold py-4 px-10 rounded-xl hover:bg-primary-dark transition shadow-lg shadow-primary/20">
                Back to Home
            </a>
            <a href="{{ route('contact') }}" class="w-full sm:w-auto bg-white text-gray-700 font-bold py-4 px-10 rounded-xl border border-gray-200 hover:bg-gray-50 transition">
                Contact Support
            </a>
        </div>

        <div class="mt-16">
            <h2 class="text-lg font-bold text-gray-900 mb-6 uppercase tracking-widest">Popular Pages</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('services') }}" class="text-primary hover:underline font-medium">Our Services</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('projects') }}" class="text-primary hover:underline font-medium">Recent Work</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('blog') }}" class="text-primary hover:underline font-medium">Latest News</a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('faq') }}" class="text-primary hover:underline font-medium">FAQ</a>
            </div>
        </div>
    </div>
</div>
@endsection
