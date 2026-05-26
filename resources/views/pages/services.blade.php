@extends('layouts.app')

@section('title', 'Our Services - ' . config('app.name'))

@section('content')
    <section class="py-24 bg-gray-50/50 dark:bg-gray-900/50">
        <div class="container mx-auto px-4 text-center mb-16">
            <h1 class="text-5xl md:text-7xl font-bold mb-6" data-aos="fade-up">Our <span class="text-gradient">Services</span></h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Explore our range of premium digital services designed to scale your business and elevate your brand.
            </p>
        </div>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $index => $service)
                    <div class="bg-white dark:bg-gray-800 p-10 rounded-3xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl hover:shadow-[var(--primary-color)]/5 transition-all duration-500" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ $index * 100 }}">
                        <div class="w-16 h-16 rounded-2xl bg-[var(--primary-color)]/10 flex items-center justify-center text-3xl mb-8">
                            {!! $service->icon ?: '🚀' !!}
                        </div>
                        <h3 class="text-2xl font-bold mb-4">{{ $service->title }}</h3>
                        <p class="text-gray-500 leading-relaxed">
                            {{ $service->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="bg-gray-900 rounded-[3rem] p-12 md:p-20 text-center relative overflow-hidden">
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-6xl font-bold text-white mb-8" data-aos="zoom-in">Ready to start your journey?</h2>
                    <p class="text-gray-400 text-xl mb-12 max-w-2xl mx-auto" data-aos="zoom-in" data-aos-delay="100">
                        Let's collaborate to build something extraordinary together.
                    </p>
                    <a href="{{ route('contact') }}" class="px-10 py-5 rounded-full bg-[var(--primary-color)] text-white text-lg font-bold hover:scale-105 transition-transform inline-block" data-aos="fade-up">
                        Get a Free Consultation
                    </a>
                </div>
                {{-- Decorative background --}}
                <div class="absolute top-0 right-0 w-96 h-96 bg-[var(--primary-color)]/20 rounded-full blur-[100px] -mr-48 -mt-48"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-[var(--secondary-color)]/10 rounded-full blur-[100px] -ml-48 -mb-48"></div>
            </div>
        </div>
    </section>
@endsection
