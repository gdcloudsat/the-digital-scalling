@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title . ' - ' . config('app.name'))
@section('meta_description', $post->seo_description ?? $post->excerpt)

@section('content')
<div class="pt-24 pb-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Article Header -->
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="flex items-center justify-center text-sm text-gray-500 mb-6">
                    <span class="flex items-center">
                        <i class="far fa-calendar-alt mr-2"></i>
                        {{ $post->published_at->format('F d, Y') }}
                    </span>
                    @if($post->category)
                        <span class="mx-3 text-gray-300">|</span>
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full font-bold uppercase text-xs tracking-wider">{{ $post->category }}</span>
                    @endif
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-8 leading-tight">{{ $post->title }}</h1>
            </div>

            <!-- Featured Image -->
            @if($post->hasMedia('featured_image'))
                <div class="rounded-3xl overflow-hidden shadow-2xl mb-12" data-aos="zoom-in">
                    {{ $post->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-auto object-cover']) }}
                </div>
            @endif

            <!-- Article Content -->
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-4/5 mx-auto px-4" data-aos="fade-up">
                    <div class="prose prose-lg max-w-none text-gray-600 prose-img:rounded-2xl prose-headings:text-gray-900 prose-a:text-primary">
                        {!! $post->content !!}
                    </div>

                    <!-- Author Info (Optional/Static for now) -->
                    <div class="mt-16 p-8 bg-gray-50 rounded-3xl flex items-center">
                        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center text-primary text-3xl font-bold mr-6">
                            DS
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Digital Scaling Team</h4>
                            <p class="text-gray-600">Experts in digital transformation and innovative agency solutions.</p>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    @if($relatedPosts->count() > 0)
                        <div class="mt-20">
                            <h3 class="text-2xl font-bold mb-10">You Might Also Like</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                @foreach($relatedPosts as $related)
                                    <div class="group">
                                        <a href="{{ route('blog.show', $related->slug) }}" class="block relative aspect-video rounded-xl overflow-hidden mb-4">
                                            @if($related->hasMedia('featured_image'))
                                                {{ $related->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-full object-cover transform group-hover:scale-110 transition duration-500']) }}
                                            @else
                                                <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                                    <i class="fas fa-newspaper text-gray-400"></i>
                                                </div>
                                            @endif
                                        </a>
                                        <h4 class="font-bold text-gray-900 group-hover:text-primary transition leading-snug">
                                            <a href="{{ route('blog.show', $related->slug) }}">{{ $related->title }}</a>
                                        </h4>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
