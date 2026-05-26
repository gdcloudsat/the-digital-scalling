<footer class="bg-gray-950 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2">
                <a href="{{ route('home') }}" class="text-3xl font-bold text-gradient mb-6 block">
                    {{ config('app.name', 'DigitalScaling') }}
                </a>
                <p class="text-gray-400 max-w-md">
                    Transforming digital visions into reality through premium design and cutting-edge development solutions.
                </p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-6">Quick Links</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-6">Connect</h4>
                <div class="flex space-x-4">
                    {{-- Add social icons here --}}
                </div>
            </div>
        </div>
        <div class="mt-20 pt-8 border-t border-gray-900 text-center text-gray-500">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
