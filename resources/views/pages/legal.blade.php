@extends('layouts.app')

@section('title', $page->title . ' - ' . config('app.name'))
@section('meta_description', $page->seo_description ?? 'Legal information regarding ' . config('app.name'))

@section('content')
<div class="pt-32 pb-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-sm p-8 md:p-16" data-aos="fade-up">
                <h1 class="text-4xl font-bold text-gray-900 mb-8">{{ $page->title }}</h1>
                <div class="text-sm text-gray-400 mb-10 pb-6 border-b border-gray-100">
                    Last updated: {{ $page->updated_at->format('F d, Y') }}
                </div>

                <div class="prose prose-lg max-w-none text-gray-600 prose-headings:text-gray-900 prose-a:text-primary">
                    {!! $page->content !!}
                </div>
            </div>

            <div class="mt-12 text-center text-gray-500">
                <p>If you have any questions about our {{ strtolower($page->title) }}, please contact us at <a href="mailto:legal@example.com" class="text-primary font-bold">legal@example.com</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
