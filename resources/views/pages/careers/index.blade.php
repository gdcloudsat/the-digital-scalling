@extends('layouts.app')

@section('title', 'Careers - Join Our Team - ' . config('app.name'))
@section('meta_description', 'Explore career opportunities at Digital Scaling. We are always looking for talented individuals to join our creative team.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Grow With Us</h1>
            <p class="text-xl text-gray-600">Join a team of innovators, dreamers, and doers. We're building the future of digital experiences, and we want you to be part of it.</p>
        </div>

        @if($jobs->count() > 0)
            <div class="max-w-4xl mx-auto space-y-6">
                @foreach($jobs as $job)
                    <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="flex flex-wrap items-center justify-between">
                            <div class="w-full md:w-auto mb-6 md:mb-0">
                                <div class="flex items-center mb-2">
                                    <h3 class="text-2xl font-bold text-gray-900 mr-4">{{ $job->title }}</h3>
                                    <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase tracking-wider">{{ $job->type }}</span>
                                </div>
                                <div class="flex flex-wrap gap-4 text-gray-500">
                                    <span class="flex items-center">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        {{ $job->location }}
                                    </span>
                                    @if($job->department)
                                        <span class="flex items-center">
                                            <i class="fas fa-briefcase mr-2"></i>
                                            {{ $job->department }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="w-full md:w-auto">
                                <a href="{{ route('careers.show', $job->slug) }}" class="inline-block bg-primary text-white font-bold py-3 px-8 rounded-xl hover:bg-primary-dark transition shadow-lg shadow-primary/20">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-3xl max-w-4xl mx-auto">
                <div class="inline-block p-6 bg-gray-50 rounded-full mb-6">
                    <i class="fas fa-user-tie text-5xl text-gray-300"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-400">No open positions right now.</h3>
                <p class="text-gray-500 mt-2">But we're always looking for talent! Send your resume to <a href="mailto:careers@example.com" class="text-primary font-bold">careers@example.com</a></p>
            </div>
        @endif

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm text-center" data-aos="fade-up">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl mx-auto mb-6">
                    <i class="fas fa-rocket"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Innovation First</h4>
                <p class="text-gray-600">Work with the latest technologies and methodologies in the industry.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 text-2xl mx-auto mb-6">
                    <i class="fas fa-heart"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Great Culture</h4>
                <p class="text-gray-600">Enjoy a collaborative, inclusive, and supportive work environment.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl mx-auto mb-6">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Work-Life Balance</h4>
                <p class="text-gray-600">We value your time and promote a healthy balance between work and life.</p>
            </div>
        </div>
    </div>
</div>
@endsection
