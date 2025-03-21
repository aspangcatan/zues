<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management</title>
    <link rel="icon" href="/img/zeuslogo.png" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
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

        {{-- Dark Overlay --}}
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        {{-- Left Button (Previous) --}}
        <button @click="currentIndex = (currentIndex - 1 + images.length) % images.length" 
            class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-[#F8E231] text-black px-4 py-2 rounded-full shadow-md hover:bg-yellow-400 transition">
            &#10094;
        </button>

        {{-- Content --}}
        <div class="relative text-center">
            <h1 class="text-5xl font-bold text-[#F8E231] drop-shadow-lg">Unforgettable Events, Timeless Memories</h1>
            <p class="mt-4 text-lg text-[#FFC5C5]">Experience the best concerts & corporate events with us.</p>
            <div class="mt-6 space-x-4">
                <a href="{{ route('services') }}" class="px-6 py-3 text-lg font-semibold bg-[#F8E231] text-black rounded-lg shadow-md hover:bg-yellow-400 transition">Book an Event</a>
                <a href="{{ route('services') }}" class="px-6 py-3 text-lg font-semibold bg-[#FFC5C5] text-black rounded-lg shadow-md hover:bg-pink-300 transition">Learn More</a>
            </div>
        </div>

        {{-- Right Button (Next) --}}
        <button @click="currentIndex = (currentIndex + 1) % images.length" 
            class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-[#F8E231] text-black px-4 py-2 rounded-full shadow-md hover:bg-yellow-400 transition">
            &#10095;
        </button>

    </section>
@include('layouts.footer')
</body>
</html>
