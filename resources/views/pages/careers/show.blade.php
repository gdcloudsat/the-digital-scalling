@extends('layouts.app')

@section('title', $job->title . ' - Careers - ' . config('app.name'))
@section('meta_description', strip_tags($job->description))

@section('content')
<div class="pt-24 pb-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <a href="{{ route('careers') }}" class="inline-flex items-center text-primary font-bold mb-8 hover:-translate-x-2 transition-transform">
                <i class="fas fa-arrow-left mr-2"></i> Back to Careers
            </a>

            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-12" data-aos="fade-up">
                <div class="flex flex-wrap items-center justify-between mb-10 pb-10 border-b border-gray-100">
                    <div class="w-full md:w-auto mb-6 md:mb-0">
                        <span class="px-4 py-1 bg-primary/10 text-primary rounded-full text-sm font-bold uppercase tracking-wider mb-4 inline-block">{{ $job->department }}</span>
                        <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $job->title }}</h1>
                        <div class="flex flex-wrap gap-6 text-gray-500">
                            <span class="flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                                {{ $job->location }}
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-clock mr-2 text-primary"></i>
                                {{ $job->type }}
                            </span>
                            @if($job->salary_range)
                                <span class="flex items-center">
                                    <i class="fas fa-money-bill-wave mr-2 text-primary"></i>
                                    {{ $job->salary_range }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="prose prose-lg max-w-none text-gray-600 mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">About the Role</h3>
                    {!! $job->description !!}

                    @if($job->requirements)
                        <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Requirements</h3>
                        {!! $job->requirements !!}
                    @endif

                    @if($job->benefits)
                        <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Benefits</h3>
                        {!! $job->benefits !!}
                    @endif
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 md:p-10 border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Apply for this position</h3>
                    <p class="text-gray-600 mb-8">Send your CV and a brief cover letter to our recruitment team. We'll get back to you within 3-5 business days.</p>
                    <a href="mailto:careers@example.com?subject=Application for {{ $job->title }}" class="inline-block bg-primary text-white font-bold py-4 px-10 rounded-xl hover:bg-primary-dark transition shadow-lg shadow-primary/20">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
