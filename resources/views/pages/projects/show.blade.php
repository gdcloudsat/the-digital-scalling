@extends('layouts.app')

@section('title', $project->seo_title ?? $project->title . ' - ' . config('app.name'))
@section('meta_description', $project->seo_description ?? $project->excerpt)

@section('content')
<div class="pt-24 pb-20">
    <div class="container mx-auto px-4">
        <!-- Project Header -->
        <div class="max-w-4xl mx-auto mb-12 text-center" data-aos="fade-up">
            @if($project->category)
                <span class="inline-block px-4 py-1 bg-primary/10 text-primary rounded-full text-sm font-bold uppercase tracking-wider mb-4">{{ $project->category }}</span>
            @endif
            <h1 class="text-4xl md:text-6xl font-bold mb-6">{{ $project->title }}</h1>
            <p class="text-xl text-gray-600 leading-relaxed">{{ $project->excerpt }}</p>
        </div>

        <!-- Featured Image -->
        @if($project->hasMedia('featured_image'))
            <div class="rounded-3xl overflow-hidden shadow-2xl mb-16" data-aos="zoom-in">
                {{ $project->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-auto object-cover']) }}
            </div>
        @endif

        <div class="flex flex-wrap -mx-4">
            <!-- Project Content -->
            <div class="w-full lg:w-2/3 px-4 mb-12 lg:mb-0" data-aos="fade-up">
                <div class="prose prose-lg max-w-none text-gray-600">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">About this project</h2>
                    {!! $project->content !!}
                </div>

                <!-- Gallery -->
                @if($project->hasMedia('gallery'))
                    <div class="mt-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Project Gallery</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($project->getMedia('gallery') as $media)
                                <div class="rounded-2xl overflow-hidden group cursor-pointer">
                                    {{ $media->img('', ['class' => 'w-full h-64 object-cover transform group-hover:scale-105 transition duration-500']) }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Project Details Sidebar -->
            <div class="w-full lg:w-1/3 px-4">
                <div class="sticky top-28">
                    <div class="bg-gray-50 rounded-3xl p-8 mb-8" data-aos="fade-left">
                        <h3 class="text-xl font-bold mb-6 pb-4 border-bottom border-gray-200">Project Details</h3>
                        <div class="space-y-6">
                            @if($project->client)
                                <div>
                                    <span class="block text-sm text-gray-500 uppercase font-bold tracking-wider">Client</span>
                                    <span class="text-lg font-medium text-gray-900">{{ $project->client }}</span>
                                </div>
                            @endif
                            @if($project->completed_at)
                                <div>
                                    <span class="block text-sm text-gray-500 uppercase font-bold tracking-wider">Date</span>
                                    <span class="text-lg font-medium text-gray-900">{{ $project->completed_at->format('F Y') }}</span>
                                </div>
                            @endif
                            @if($project->url)
                                <div>
                                    <span class="block text-sm text-gray-500 uppercase font-bold tracking-wider">Website</span>
                                    <a href="{{ $project->url }}" target="_blank" class="text-lg font-medium text-primary hover:underline flex items-center">
                                        Visit Live Site <i class="fas fa-external-link-alt ml-2 text-sm"></i>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if($relatedProjects->count() > 0)
                        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8" data-aos="fade-left" data-aos-delay="100">
                            <h3 class="text-xl font-bold mb-6">Related Work</h3>
                            <div class="space-y-6">
                                @foreach($relatedProjects as $related)
                                    <a href="{{ route('projects.show', $related->slug) }}" class="group flex items-center">
                                        <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 mr-4">
                                            @if($related->hasMedia('featured_image'))
                                                {{ $related->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-full object-cover group-hover:scale-110 transition duration-300']) }}
                                            @else
                                                <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                                    <i class="fas fa-image text-gray-400"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-900 group-hover:text-primary transition">{{ $related->title }}</h4>
                                            <span class="text-sm text-gray-500">{{ $related->category }}</span>
                                        </div>
                                    </a>
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
