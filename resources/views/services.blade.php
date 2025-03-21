<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management</title>
    <link rel="icon" href="{{ asset('img/zeuslogo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

@include('layouts.header')

<!-- Services Section -->
<section class="pt-40 pb-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold italic text-black">Turning Moments into Memories – Our Event Services</h2>
        
       <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @foreach(['weddingpackage.png', 'debutpackage.png', 'concertpackage.png'] as $serviceImage)
                <div class="border-2 border-black p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg md:text-xl font-bold italic text-black">Service {{ $loop->index + 1 }}</h3>
                    <div class="w-full h-40 md:h-48 border-2 border-black my-4 overflow-hidden">
                        <img src="{{ asset('img/' . $serviceImage) }}" alt="Service Image" class="w-full h-full object-cover">
                    </div>
                    <button class="bg-black text-[#F8E231] px-4 py-2 font-bold rounded-lg shadow-lg hover:bg-[#F8E231] hover:text-black transition">
                        BOOK NOW
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-[#FFC5C5] py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold italic text-black">Why Choose Zeus Events Management?</h2>
        <br>
        <ul class="mt-6 space-y-4 text-lg text-black text-center max-w-3xl mx-auto">
            @for ($i = 0; $i < 4; $i++)
                <li class="flex items-center justify-center space-x-3">
                    <span class="text-black text-2xl">●</span>
                    <span>End-to-End Event Planning – From concept to execution, we handle everything.</span>
                </li>
            @endfor
        </ul>
        <br>
        <br>
        <button class="mt-6 px-6 py-3 bg-black text-[#F8E231] font-bold rounded-lg shadow-lg hover:bg-[#F8E231] hover:text-black transition">
            Let’s Make Your Event Unforgettable – Book a Consultation!
        </button>
    </div>
</section>
@include('layouts.footer')
</body>
</html>
