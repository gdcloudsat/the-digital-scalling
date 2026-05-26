@extends('layouts.app')

@section('title', 'Insights & News - ' . config('app.name'))
@section('meta_description', 'Read our latest articles on technology, design, and digital marketing.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Latest Insights</h1>
            <p class="text-xl text-gray-600">Discover our thoughts on digital trends, industry news, and expert advice for your business.</p>
        </div>

        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <a href="{{ route('blog.show', $post->slug) }}" class="block relative aspect-video overflow-hidden">
                            @if($post->hasMedia('featured_image'))
                                {{ $post->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-full object-cover transform hover:scale-110 transition duration-500']) }}
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-4xl text-gray-400"></i>
                                </div>
                            @endif
                        </a>
                        <div class="p-6 flex-grow flex flex-col">
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <span class="flex items-center">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    {{ $post->published_at->format('M d, Y') }}
                                </span>
                                @if($post->category)
                                    <span class="mx-3 text-gray-300">|</span>
                                    <span class="font-bold text-primary">{{ $post->category }}</span>
                                @endif
                            </div>
                            <h3 class="text-xl font-bold mb-4">
                                <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-primary transition">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 line-clamp-3 mb-6 flex-grow">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center text-primary font-bold hover:translate-x-2 transition-transform">
                                Read More <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="inline-block p-6 bg-white rounded-full mb-6">
                    <i class="fas fa-feather-alt text-5xl text-gray-300"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-400">No blog posts found.</h3>
                <p class="text-gray-500 mt-2">We are currently writing some amazing content. Stay tuned!</p>
            </div>
        @endif
    </div>
</div>
@endsection
