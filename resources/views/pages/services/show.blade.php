@extends('layouts.app')

@section('title', $service->seo_title ?? $service->title . ' - ' . config('app.name'))
@section('meta_description', $service->seo_description ?? $service->description)

@section('content')
<div class="pt-24 pb-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                <div class="bg-white rounded-2xl shadow-sm p-8" data-aos="fade-up">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mr-4">
                            @if($service->icon)
                                <i class="{{ $service->icon }} text-3xl text-primary"></i>
                            @else
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            @endif
                        </div>
                        <h1 class="text-4xl font-bold text-gray-900">{{ $service->title }}</h1>
                    </div>

                    @if($service->hasMedia('featured_image'))
                        <div class="mb-8 overflow-hidden rounded-xl">
                            {{ $service->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-auto object-cover transform hover:scale-105 transition duration-500']) }}
                        </div>
                    @endif

                    <div class="prose prose-lg max-w-none text-gray-600">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/3 px-4">
                <div class="sticky top-28">
                    <div class="bg-white rounded-2xl shadow-sm p-6 mb-8" data-aos="fade-left">
                        <h3 class="text-xl font-bold mb-4">Other Services</h3>
                        <ul class="space-y-4">
                            @foreach($relatedServices as $related)
                                <li>
                                    <a href="{{ route('services.show', $related->slug) }}" class="flex items-center p-3 rounded-xl hover:bg-gray-50 transition">
                                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mr-3">
                                            <i class="{{ $related->icon ?? 'fas fa-chevron-right' }} text-primary"></i>
                                        </div>
                                        <span class="font-medium text-gray-700">{{ $related->title }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="bg-primary rounded-2xl shadow-lg p-8 text-white" data-aos="fade-left" data-aos-delay="100">
                        <h3 class="text-2xl font-bold mb-4">Need a similar project?</h3>
                        <p class="mb-6 opacity-90">Ready to take your business to the next level? Contact us today for a free consultation.</p>
                        <a href="{{ route('contact') }}" class="inline-block bg-white text-primary font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
