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
<section class="pt-20 pb-16 bg-white mt-24">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">We'd love to hear from you! Reach out to us through the details below or fill in the form.</p>
                <p class="text-gray-800 text-lg font-medium">📞 233-123</p>
                <p class="text-gray-800 text-lg font-medium">✉️ company.email@gmail.com</p>
                <p class="text-gray-800 text-lg font-medium">📍 15 West 3rd St., Palawan, 6080</p>

                <!-- Map -->
                <div class="mt-6 w-full h-64 rounded-lg overflow-hidden shadow-lg">
                    <iframe
                        class="w-full h-full"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?q=Palawan,6080&t=&z=13&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-100 p-8 rounded-lg shadow-xl">
                <h3 class="text-2xl font-semibold text-gray-900 mb-6">Get In Touch</h3>
                <form class="space-y-4">
                    <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none" placeholder="Full Name">
                    <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none" placeholder="Email Address">
                    <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none" placeholder="Subject">
                    <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none" placeholder="Your Message" rows="4"></textarea>
                    <button type="submit" class="w-full bg-black text-white py-3 rounded-lg text-lg font-medium hover:bg-gray-800 transition duration-300">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Links -->
<section class="bg-gray-900 text-white py-8">
    <div class="container mx-auto text-center">
        <h3 class="text-xl font-semibold mb-6">Follow Us On</h3>
        <div class="flex justify-center space-x-6">
            <a href="#" class="w-12 h-12 flex items-center justify-center bg-gray-700 rounded-full hover:bg-gray-600 transition duration-300">
                <img src="{{ asset('img/icon_fb.png') }}" alt="Facebook" class="w-6 h-6">
            </a>
            <a href="#" class="w-12 h-12 flex items-center justify-center bg-gray-700 rounded-full hover:bg-gray-600 transition duration-300">
                <img src="{{ asset('img/icon_twitter.png') }}" alt="Twitter" class="w-6 h-6">
            </a>
            <a href="#" class="w-12 h-12 flex items-center justify-center bg-gray-700 rounded-full hover:bg-gray-600 transition duration-300">
                <img src="{{ asset('img/icon_instagram.png') }}" alt="Instagram" class="w-6 h-6">
            </a>
        </div>
    </div>
</section>

@include('layouts.footer')
</body>
</html>
