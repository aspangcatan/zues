<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEUS 808 PRODUCTION AND EVENTS MANAGEMENT, INC.</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('layouts.header')

<!-- Types of Events Managed Section -->
<section class="pt-40 pb-16 bg-black">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold italic text-[#D99D07]">Crafting Unforgettable Experiences – Events We Manage</h2>
        <p class="text-lg text-[#C34793] mt-4">From corporate gatherings to elegant social celebrations, we bring your vision to life with precision and creativity.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <!-- Corporate Events -->
            <div class="border-2 border-[#F8E231] p-6 rounded-lg shadow-lg bg-white">
                <h3 class="text-lg md:text-xl font-bold italic text-black">Corporate Events</h3>
                <p class="text-black mt-2">Conferences, product launches, and team-building activities designed for success.</p>

                <!-- Swiper for Corporate Events -->
                <div class="swiper corporate-slider mt-6">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/conference.jpg') }}" alt="Conference" class="w-full h-80 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/productlaunch.jpg') }}" alt="Product Launch" class="w-full h-80 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/teambuilding.jpg') }}" alt="Team Building" class="w-full h-80 object-cover rounded-lg">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Social Events -->
            <div class="border-2 border-[#FFC5C5] p-6 rounded-lg shadow-lg bg-white">
                <h3 class="text-lg md:text-xl font-bold italic text-black">Social Events</h3>
                <p class="text-black mt-2">Weddings, anniversaries, celebrations, and private parties crafted with elegance and joy.</p>
                
                <!-- Swiper for Social Events -->
                <div class="swiper social-slider mt-6">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/weddingreception.jpg') }}" alt="Wedding" class="w-full h-80 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/romanticanniversary.jpg') }}" class="w-full h-80 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/privateparty.jpg') }}" alt="Private Party" class="w-full h-80 object-cover rounded-lg">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="pt-40 pb-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold italic text-black">Turning Moments into Memories – Our Event Services</h2>
        
        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            @php
                $services = [
                    ['image' => 'eventplanning.jpg', 'name' => 'Event Planning', 'description' => 'Concept development, venue selection, budgeting, and timeline creation.'],
                    ['image' => 'logisticsmanagement.jpg', 'name' => 'Logistics Management', 'description' => 'Coordinating transportation, accommodations, catering, and technical requirements (like lighting and sound).'],
                    ['image' => 'vendorcoordination.jpg', 'name' => 'Vendor Coordination', 'description' => 'Sourcing and managing suppliers such as caterers, decorators, and audio-visual technicians.'],
                    ['image' => 'marketingpromotion.jpg', 'name' => 'Marketing and Promotion', 'description' => 'Creating promotional materials, managing social media campaigns, and working on public relations.'],
                    ['image' => 'onsitemanagement.jpg', 'name' => 'On-Site Management', 'description' => 'Overseeing the event on the day, ensuring that everything runs smoothly and addressing any unforeseen issues.'],
                    ['image' => 'posteventevaluation.jpg', 'name' => 'Post-Event Evaluation', 'description' => 'Gathering feedback, analyzing event success, and providing reports to clients.'],
                ];
            @endphp

            @foreach($services as $service)
                <div class="border-2 border-black p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg md:text-xl font-bold italic text-black">{{ $service['name'] }}</h3>
                    <div class="w-full h-40 md:h-48 border-2 border-black my-4 overflow-hidden">
                        <img src="{{ asset('img/' . $service['image']) }}" alt="{{ $service['name'] }}" class="w-full h-full object-cover">
                    </div>
                    <p class="text-sm text-gray-700 mt-2">{{ $service['description'] }}</p>
                    <!-- <button href="{{ route('contact') }}" class="bg-black text-[#F8E231] px-4 py-2 font-bold rounded-lg shadow-lg hover:bg-[#FBC646] hover:text-black transition mt-4">
                        BOOK NOW
                    </button> -->
                    <a href="{{ route('contact') }}" class="inline-block bg-black text-[#F8E231] px-4 py-2 font-bold rounded-lg shadow-lg hover:bg-[#FBC646] hover:text-black transition mt-4">
                        BOOK NOW
                    </a>

                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-[#FF66C4] py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold italic text-black">Why Choose Zeus Events Management?</h2>
        <br>
        <ul class="mt-6 space-y-4 text-lg text-black text-center max-w-3xl mx-auto">
            <li class="flex items-start space-x-3">
                <span class="text-black text-2xl">●</span>
                <span class="text-left">End-to-End Event Planning – From concept to execution, we handle everything.</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-black text-2xl">●</span>
                <span class="text-left">Tailored Experiences – We customize every event to match your unique vision and preferences.</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-black text-2xl">●</span>
                <span class="text-left">Reliable & Stress-Free Execution – Our team ensures a seamless experience, so you can enjoy your event without worry.</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-black text-2xl">●</span>
                <span class="text-left">Innovative & Trend-Forward Designs – We bring fresh, creative ideas to make your event unforgettable.</span>
            </li>
        </ul>


        <br>
        <br>
        <a href="{{ route('contact') }}" class="mt-6 px-6 py-3 bg-black text-[#FBC646] font-bold rounded-lg shadow-lg hover:bg-[#FBC646] hover:text-black transition inline-block">
            Let’s Make Your Event Unforgettable – Book a Consultation!
        </a>
    </div>
</section>
@include('layouts.footer')

<!-- Swiper Initialization Script -->
<!-- Swiper Initialization Script -->
<script>
    var corporateSwiper = new Swiper('.corporate-slider', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var socialSwiper = new Swiper('.social-slider', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
</body>
</html>
