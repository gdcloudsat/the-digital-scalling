@extends('layouts.app')

@section('title', 'Our Projects - ' . config('app.name'))
@section('meta_description', 'Explore our portfolio of successful projects and digital solutions.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Creative Portfolio</h1>
            <p class="text-xl text-gray-600">We help brands thrive in the digital age with innovative solutions and stunning design.</p>
        </div>

        @if($projects->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="relative aspect-video overflow-hidden">
                            @if($project->hasMedia('featured_image'))
                                {{ $project->getFirstMedia('featured_image')->img('', ['class' => 'w-full h-full object-cover transform group-hover:scale-110 transition duration-500']) }}
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-image text-4xl text-gray-400"></i>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                                <a href="{{ route('projects.show', $project->slug) }}" class="text-white font-bold flex items-center">
                                    View Project <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            @if($project->category)
                                <span class="text-primary text-sm font-bold uppercase tracking-wider mb-2 block">{{ $project->category }}</span>
                            @endif
                            <h3 class="text-xl font-bold mb-2">
                                <a href="{{ route('projects.show', $project->slug) }}" class="hover:text-primary transition">
                                    {{ $project->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 line-clamp-2">{{ $project->excerpt }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $projects->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="inline-block p-6 bg-white rounded-full mb-6">
                    <i class="fas fa-folder-open text-5xl text-gray-300"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-400">No projects found.</h3>
                <p class="text-gray-500 mt-2">Check back soon for our latest work!</p>
            </div>
        @endif
    </div>
</div>
@endsection
