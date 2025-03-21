<header id="main-header" style="background-color: black;" class="fixed top-0 left-0 w-full z-50 bg-black shadow-lg transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="{{ asset('img/zeusevents.png') }}" alt="ZEUS"
                class="h-16 md:h-20 filter brightness-0 invert sepia saturate-200 hue-rotate-15">
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('index') }}" class="text-[#F8E231] hover:text-[#FFC5C5] font-bold transition">Home</a>
            <a href="{{ route('aboutus') }}" class="text-[#F8E231] hover:text-[#FFC5C5] font-bold transition">About Us</a>
            <a href="{{ route('services') }}" class="text-[#F8E231] hover:text-[#FFC5C5] font-bold transition">Services</a>
            <a href="{{ route('portfolio') }}" class="text-[#F8E231] hover:text-[#FFC5C5] font-bold transition">Portfolio</a>
            <a href="{{ route('blog') }}" class="text-[#F8E231] hover:text-[#FFC5C5] font-bold transition">Blog</a>
            <a href="{{ route('contact') }}" class="text-[#F8E231] hover:text-[#FFC5C5] font-bold transition">Contact</a>
        </nav>

        <!-- Mobile Menu Button (Hamburger Icon) -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none z-50 relative">
            <span class="w-6 h-0.5 bg-[#F8E231] transition-transform" id="bar1"></span>
            <span class="w-6 h-0.5 bg-[#F8E231] transition-transform" id="bar2"></span>
            <span class="w-6 h-0.5 bg-[#F8E231] transition-transform" id="bar3"></span>
        </button>
    </div>

    <!-- Fullscreen Mobile Menu (Hidden by default) -->
    <nav id="mobile-menu" class="fixed inset-0 bg-black text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
        <a href="{{ route('index') }}" class="text-xl text-[#F8E231] hover:text-[#FFC5C5] font-medium transition">Home</a>
        <a href="{{ route('aboutus') }}" class="text-xl text-[#F8E231] hover:text-[#FFC5C5] font-medium transition">About Us</a>
        <a href="{{ route('services') }}" class="text-xl text-[#F8E231] hover:text-[#FFC5C5] font-medium transition">Services</a>
        <a href="{{ route('portfolio') }}" class="text-xl text-[#F8E231] hover:text-[#FFC5C5] font-medium transition">Portfolio</a>
        <a href="{{ route('blog') }}" class="text-xl text-[#F8E231] hover:text-[#FFC5C5] font-medium transition">Blog</a>
        <a href="{{ route('contact') }}" class="text-xl text-[#F8E231] hover:text-[#FFC5C5] font-medium transition">Contact</a>
    </nav>
</header>
