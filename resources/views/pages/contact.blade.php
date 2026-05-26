@extends('layouts.app')

@section('title', 'Contact Us - ' . config('app.name'))

@section('content')
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
                    <div>
                        <h1 class="text-5xl md:text-7xl font-bold mb-8" data-aos="fade-right">Let's <span class="text-gradient">Talk</span></h1>
                        <p class="text-xl text-gray-500 mb-12" data-aos="fade-right" data-aos-delay="100">
                            Have a project in mind or just want to say hi? We'd love to hear from you. Fill out the form and our team will get back to you within 24 hours.
                        </p>

                        <div class="space-y-8" data-aos="fade-up" data-aos-delay="200">
                            <div class="flex items-start space-x-6">
                                <div class="w-12 h-12 rounded-xl bg-[var(--primary-color)]/10 flex items-center justify-center text-xl shrink-0 text-[var(--primary-color)]">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold mb-1">Email Us</h4>
                                    <p class="text-gray-500">hello@digitalscaling.com</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-6">
                                <div class="w-12 h-12 rounded-xl bg-[var(--primary-color)]/10 flex items-center justify-center text-xl shrink-0 text-[var(--primary-color)]">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold mb-1">Visit Us</h4>
                                    <p class="text-gray-500">123 Agency Plaza, Tech District, NY 10001</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 md:p-12 rounded-[2rem] border border-gray-100 dark:border-gray-700 shadow-xl shadow-black/5" data-aos="fade-left">
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Name</label>
                                    <input type="text" name="name" required class="w-full px-6 py-4 rounded-2xl bg-gray-50 dark:bg-gray-900 border-none focus:ring-2 focus:ring-[var(--primary-color)] transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Email</label>
                                    <input type="email" name="email" required class="w-full px-6 py-4 rounded-2xl bg-gray-50 dark:bg-gray-900 border-none focus:ring-2 focus:ring-[var(--primary-color)] transition-all">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Subject</label>
                                <input type="text" name="subject" required class="w-full px-6 py-4 rounded-2xl bg-gray-50 dark:bg-gray-900 border-none focus:ring-2 focus:ring-[var(--primary-color)] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Message</label>
                                <textarea name="message" rows="5" required class="w-full px-6 py-4 rounded-2xl bg-gray-50 dark:bg-gray-900 border-none focus:ring-2 focus:ring-[var(--primary-color)] transition-all"></textarea>
                            </div>
                            <button type="submit" class="w-full py-5 rounded-2xl bg-[var(--primary-color)] text-white font-bold hover:opacity-90 transition-opacity">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
