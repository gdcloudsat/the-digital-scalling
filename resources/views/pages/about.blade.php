@extends('layouts.app')

@section('title', 'About Us - ' . config('app.name'))

@section('content')
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-20">
                <h1 class="text-5xl md:text-7xl font-bold mb-8" data-aos="fade-up">Driven by Design, <br>Powered by <span class="text-gradient">Technology</span></h1>
                <p class="text-xl text-gray-500" data-aos="fade-up" data-aos-delay="100">
                    We are a team of passionate creators, thinkers, and builders dedicated to redefining the digital landscape through exceptional design and innovative engineering.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <img src="https://placehold.co/600x800" alt="About Us" class="rounded-3xl">
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-[var(--primary-color)]/20 rounded-full blur-3xl -z-10"></div>
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-6">Our Mission</h2>
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        In a world that's constantly evolving, we strive to create digital solutions that are not just functional but also inspiring. Our mission is to empower brands with the tools they need to thrive in the digital age, combining aesthetics with efficiency.
                    </p>
                    <h2 class="text-3xl font-bold mb-6">Our Approach</h2>
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        We believe in a collaborative approach, working closely with our clients to understand their unique challenges and goals. Every project is a journey, and we're here to guide you every step of the way, from concept to launch and beyond.
                    </p>
                    <div class="grid grid-cols-2 gap-8 mt-12">
                        <div>
                            <div class="text-4xl font-bold text-[var(--primary-color)] mb-2">100+</div>
                            <div class="text-gray-500">Projects Completed</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-[var(--primary-color)] mb-2">50+</div>
                            <div class="text-gray-500">Happy Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
