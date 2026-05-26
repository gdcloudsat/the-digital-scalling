@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
        <div class="container mx-auto px-4 z-10 text-center">
            <h1 class="hero-title text-5xl md:text-8xl font-bold mb-6">
                Elevate Your <span class="text-gradient">Digital Presence</span>
            </h1>
            <p class="hero-subtitle text-xl md:text-2xl text-gray-400 mb-10 max-w-2xl mx-auto">
                We craft high-end digital experiences that combine innovative design with seamless performance.
            </p>
            <div class="hero-cta">
                <a href="{{ route('contact') }}" class="px-8 py-4 rounded-full bg-[var(--primary-color)] text-white text-lg font-semibold hover:opacity-90 transition-all inline-block">
                    Start a Project
                </a>
            </div>
        </div>
        
        {{-- Background Element --}}
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[var(--primary-color)]/10 rounded-full blur-[120px] -z-10"></div>
    </section>

    {{-- Services Section --}}
    <section class="py-24 bg-gray-50/50 dark:bg-gray-900/50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-4xl font-bold mb-4" data-aos="fade-up">Expert Services</h2>
                    <p class="text-gray-500 max-w-lg" data-aos="fade-up" data-aos-delay="100">
                        Tailored solutions to meet your specific digital needs and goals.
                    </p>
                </div>
                <a href="{{ route('services.index') }}" class="text-[var(--primary-color)] font-semibold hover:underline" data-aos="fade-left">View All Services &rarr;</a>
            </div>

            <div class="swiper services-swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    @foreach($services as $service)
                        <div class="swiper-slide h-auto">
                            <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 h-full flex flex-col transition-transform hover:-translate-y-2 duration-300">
                                @if($service->icon)
                                    <div class="text-4xl mb-6">{!! $service->icon !!}</div>
                                @endif
                                <h3 class="text-2xl font-bold mb-4">{{ $service->title }}</h3>
                                <p class="text-gray-500 mb-8 flex-grow">{{ Str::limit($service->description, 120) }}</p>
                                <a href="{{ route('services.index') }}" class="text-[var(--primary-color)] font-medium">Learn More &rarr;</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination !-bottom-12"></div>
            </div>
        </div>
    </section>

    {{-- Projects Grid --}}
    <section class="py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-16 text-center" data-aos="fade-up">Featured Work</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($projects as $project)
                    <div class="group relative overflow-hidden rounded-3xl" data-aos="fade-up">
                        <img src="{{ $project->getFirstMediaUrl('featured_image') ?: 'https://placehold.co/800x600' }}" alt="{{ $project->title }}" class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-10">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                            <p class="text-gray-300 mb-4">{{ $project->client }}</p>
                            <div>
                                <span class="px-4 py-2 rounded-full border border-white text-white text-sm font-medium">View Project</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        window.initSwiper('.services-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
            autoplay: {
                delay: 5000,
            }
        });
    });
</script>
@endpush
