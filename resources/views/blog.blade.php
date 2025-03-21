<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management - Blog</title>
    <link rel="icon" href="{{ asset('img/zeuslogo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-white">

@include('layouts.header')
<section class="relative bg-gold text-black h-[400px] flex flex-col items-center justify-center text-center px-6 mt-24">
    <h1 class="text-5xl font-bold">The Event Experience Blog</h1>
    <p class="text-lg mt-4">Sign up to stay ahead of the industry</p>
    <div class="mt-6 w-full max-w-lg flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
        <select class="w-full md:w-auto px-4 py-3 rounded-lg border border-black bg-white text-black focus:outline-none focus:ring-2 focus:ring-pink">
            <option>View all</option>
            <option>Event Planning</option>
            <option>Industry Trends</option>
            <option>Success Stories</option>
        </select>
        <div class="relative w-full md:w-auto flex-grow">
            <input type="text" placeholder="Search" class="w-full px-4 py-3 rounded-lg border border-black focus:outline-none focus:ring-2 focus:ring-pink">
            <button class="absolute right-4 top-3 text-black"><i class="fas fa-search"></i></button>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 pb-16 bg-white text-black">
    <h2 class="text-3xl font-bold text-center text-gold">Mastering the Art of the Event</h2>
    <p class="text-lg text-center mt-2 text-gray-700">Expert insights for planning perfect events.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6 border-gray-300 pt-6">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-semibold text-gold">The Ultimate Guide to Flawless Event Planning</h3>
            <p class="text-gray-700 mt-2">Event planning is an art, but mastering it requires a strategic approach. Learn the latest industry insights, budgeting tips, and expert strategies to ensure every event runs seamlessly.</p>
            <a href="#" class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">Read More</a>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-semibold text-gold">10 Creative Event Ideas to Wow Your Audience</h3>
            <p class="text-gray-700 mt-2">Standing out in the event industry requires creativity and innovation. Discover fresh ideas that captivate attendees and leave a lasting impression.</p>
            <a href="#" class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">Read More</a>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-semibold text-gold">Event Planning Mistakes to Avoid & How to Fix Them</h3>
            <p class="text-gray-700 mt-2">Avoid common pitfalls and save time, money, and stress. Get actionable solutions to keep your event on track.</p>
            <a href="#" class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">Read More</a>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 pb-16 bg-white text-black border-t-2 border-gray-300 pt-6">
    <h2 class="text-3xl font-bold text-center text-gold">Memorable Moments</h2>
    <p class="text-lg text-center mt-2 text-gray-700">Behind the scenes of our most successful events.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-semibold text-gold">Celebrating Our Clients' Happiest Moments</h3>
            <p class="text-gray-700 mt-2">Take a look at the highlights from some of our most cherished events.</p>
            <a href="#" class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">Read More</a>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-semibold text-gold">Stories from Our Most Unforgettable Events</h3>
            <p class="text-gray-700 mt-2">Every event tells a unique story. Discover the details that made these experiences exceptional.</p>
            <a href="#" class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">Read More</a>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
            <h3 class="text-xl font-semibold text-gold">How We Bring Dreams to Life Through Events</h3>
            <p class="text-gray-700 mt-2">Creating magical moments is at the heart of what we do. See how we transform ideas into reality.</p>
            <a href="#" class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">Read More</a>
        </div>
    </div>
</section>

@include('layouts.footer')
</body>
</html>
