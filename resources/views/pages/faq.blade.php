@extends('layouts.app')

@section('title', 'Frequently Asked Questions - ' . config('app.name'))
@section('meta_description', 'Find answers to common questions about our services, process, and pricing.')

@section('content')
<div class="pt-32 pb-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Frequently Asked Questions</h1>
            <p class="text-xl text-gray-600">Everything you need to know about working with us. Can't find the answer you're looking for? Feel free to contact us.</p>
        </div>

        <div class="max-w-3xl mx-auto">
            @if($faqs->count() > 0)
                <div class="space-y-4">
                    @foreach($faqs as $faq)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}">
                            <details class="group">
                                <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                                    <h3 class="text-lg font-bold text-gray-900 pr-4">{{ $faq->question }}</h3>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                    </span>
                                </summary>
                                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                                    {!! $faq->answer !!}
                                </div>
                            </details>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 bg-white rounded-3xl">
                    <i class="fas fa-question-circle text-5xl text-gray-200 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-400">No questions found yet.</h3>
                </div>
            @endif

            <div class="mt-16 bg-primary rounded-3xl p-10 text-center text-white" data-aos="zoom-in">
                <h2 class="text-3xl font-bold mb-4">Still have questions?</h2>
                <p class="text-lg mb-8 opacity-90">Our team is here to help you. Send us a message and we'll get back to you as soon as possible.</p>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-primary font-bold py-4 px-10 rounded-full hover:bg-gray-100 transition shadow-lg">
                    Contact Our Support
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
