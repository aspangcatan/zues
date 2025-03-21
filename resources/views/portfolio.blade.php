<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management - Portfolio</title>
    <link rel="icon" href="{{ asset('img/zeuslogo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">

@include('layouts.header')
<section class="mx-auto px-6 py-24 mt-24 text-center">
    <div class="inline-block px-4 py-1 text-xl text-gray-500 font-semibold uppercase rounded">Zeus 808 Productions and Events Management Inc.</div>
    <h2 class="text-5xl font-semibold mt-4">Visionary Designer. Event Innovator. Artistic Creator.</h2>
    <p class="mt-10 text-lg text-gray-600 uppercase tracking-widest">
        With acclaimed projects spanning Jakarta, New York, Hong Kong, Bahrain, London, and Las Vegas,<br>
        our designs transform spaces into breathtaking experiences and unforgettable masterpieces.
    </p>
</section>
<section class="mx-auto px-6 py-16 bg-gray-100">
    <div class="grid grid-cols-2 gap-12">
        <div>
            <h2 class="text-5xl">Portfolio</h2>
            <p class="mt-4 text-xl text-gray-600">We welcome you to view our design portfolio. From New York to Bahrain, extravagant destination events and productions are our forte.</p>
        </div>
        <div class="space-y-12">
            <div class="flex items-center gap-6 border-b pb-6">
                <img src="{{ asset('img/bg-ceremonies.jpeg') }}" alt="Ceremonies" class="w-72 h-48 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-3xl font-semibold">Ceremonies</h3>
                    <p class="text-gray-600 text-base">Multicultural, Indian, American, & Custom Wedding Ceremonies</p>
                    <a href="#" class="mt-2 inline-block text-gold font-semibold">View More →</a>
                </div>
            </div>
            <div class="flex items-center gap-6 border-b pb-6">
                <img src="{{ asset('img/bg-receptions.jpeg') }}" alt="Receptions" class="w-72 h-48 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-3xl font-semibold">Receptions</h3>
                    <p class="text-gray-600 text-base">Evening entertainment, after-parties, & stunning reception experiences</p>
                    <a href="#" class="mt-2 inline-block text-gold font-semibold">View More →</a>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <img src="{{ asset('img/bg-corporate.jpeg') }}" alt="Corporate Events" class="w-72 h-48 object-cover rounded-lg shadow-lg">
                <div>
                    <h3 class="text-3xl font-semibold">Corporate Events</h3>
                    <p class="text-gray-600 text-base">Company celebrations & networking events of every scale</p>
                    <a href="#" class="mt-2 inline-block text-gold font-semibold">View More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="border-gray-300 my-16">

<section class="relative bg-gold text-black h-[400px] flex flex-col items-center justify-center text-center px-6">
    <h1 class="text-5xl font-bold">Case Studies Search</h1>
    <p class="text-lg mt-4">Find case studies relevant to your interests</p>
    <div class="mt-6 w-full max-w-lg flex items-center space-x-4">
        <select class="px-4 py-3 rounded-lg border border-black bg-white text-black focus:outline-none focus:ring-2 focus:ring-pink">
            <option>View all</option>
            <option>Luxury Weddings</option>
            <option>Corporate Events</option>
            <option>Concert Productions</option>
        </select>
        <div class="relative flex-grow">
            <input type="text" placeholder="Search Case Studies" class="w-full px-4 py-3 rounded-lg border border-black focus:outline-none focus:ring-2 focus:ring-pink">
            <button class="absolute right-4 top-3 text-black"><i class="fas fa-search"></i></button>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-16">
    <div class="grid grid-cols-3 gap-8">
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/bg-case-1.jpeg') }}" alt="Luxury Wedding" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-2xl font-semibold mt-4">Luxury Wedding in New York</h3>
            <p class="text-gray-600 mt-2">A grand celebration featuring opulent decor, live entertainment, and seamless execution.</p>
            <a href="#" class="mt-2 inline-block text-gold font-semibold">Read More →</a>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/bg-case-2.jpeg') }}" alt="Corporate Gala" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-2xl font-semibold mt-4">Corporate Gala in Dubai</h3>
            <p class="text-gray-600 mt-2">An exclusive corporate event featuring networking sessions and high-end catering.</p>
            <a href="#" class="mt-2 inline-block text-gold font-semibold">Read More →</a>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/bg-case-3.jpeg') }}" alt="Concert Production" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-2xl font-semibold mt-4">Concert Production in Bahrain</h3>
            <p class="text-gray-600 mt-2">A large-scale concert featuring international artists and state-of-the-art production.</p>
            <a href="#" class="mt-2 inline-block text-gold font-semibold">Read More →</a>
        </div>
    </div>
</section>

@include('layouts.footer')
</body>
</html>
