<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEUS 808 PRODUCTION AND EVENTS MANAGEMENT, INC.</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('layouts.header')
{{-- Hero Section with Next/Previous --}}
    <section x-data="{ images: [
        '{{ asset('img/event1.jpg') }}', 
        '{{ asset('img/event2.jpg') }}', 
        '{{ asset('img/event3.jpg') }}'
    ], currentIndex: 0 }" 
    class="relative w-full h-screen flex items-center justify-center bg-cover bg-center transition-all duration-500"
    :style="'background-image: url(' + images[currentIndex] + ')'">

    <!-- Overlay with Opacity -->
    <div class="absolute inset-0 bg-black bg-opacity-10"></div>

        {{-- Dark Overlay --}}
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        {{-- Left Button (Previous) --}}
        <button @click="currentIndex = (currentIndex - 1 + images.length) % images.length" 
            class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-[#FF66C4] text-black px-4 py-2 rounded-full shadow-md hover:bg-yellow-400 transition">
            &#10094;
        </button>

        {{-- Content --}}
        <div class="relative text-center px-4 md:px-0">
            <h1 class="text-3xl md:text-5xl font-bold text-[#D99D07] drop-shadow-lg leading-tight">
                Unforgettable Events, Timeless Memories
            </h1>
            <p class="mt-4 text-base md:text-lg text-[#FF66C4]">
                Experience the best concerts & corporate events with us.
            </p>
            <div class="mt-6 flex flex-col md:flex-row items-center justify-center md:space-x-4 space-y-4 md:space-y-0">
                <a href="{{ route('contact') }}" class="px-6 py-3 text-lg font-semibold bg-[#D99D07] text-black rounded-lg shadow-md hover:bg-yellow-400 transition w-full md:w-auto text-center">
                    Book an Event
                </a>
                <a href="{{ route('services') }}" class="px-6 py-3 text-lg font-semibold bg-[#D99D07] text-black rounded-lg shadow-md hover:bg-yellow-400 transition w-full md:w-auto text-center">
                    View Our Packages
                </a>
            </div>
        </div>


        {{-- Right Button (Next) --}}
        <button @click="currentIndex = (currentIndex + 1) % images.length" 
            class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-[#FF66C4] text-black px-4 py-2 rounded-full shadow-md hover:bg-yellow-400 transition">
            &#10095;
        </button>

    </section>
@include('layouts.footer')
</body>
</html>
