<nav class="fixed top-0 w-full z-50 transition-all duration-300 glass" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-gradient">
                    {{ config('app.name', 'DigitalScaling') }}
                </a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-[var(--primary-color)] transition-colors {{ request()->routeIs('home') ? 'text-[var(--primary-color)]' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-[var(--primary-color)] transition-colors {{ request()->routeIs('about') ? 'text-[var(--primary-color)]' : '' }}">About</a>
                    <a href="{{ route('services.index') }}" class="hover:text-[var(--primary-color)] transition-colors {{ request()->routeIs('services.index') ? 'text-[var(--primary-color)]' : '' }}">Services</a>
                    <a href="{{ route('contact') }}" class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white hover:opacity-90 transition-opacity">Contact Us</a>
                </div>
            </div>
            <div class="md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="text-gray-400 hover:text-white" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<div class="h-20"></div> {{-- Spacer for fixed navbar --}}
