<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management</title>
    <link rel="icon" href="{{ asset('img/zeuslogotemporary.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="flex flex-col min-h-screen">

@include('layouts.header')

<main class="flex-grow mt-24">
    <section class="py-16 px-4 sm:px-6 lg:px-20 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                <!-- Contact Info -->
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Contact Us</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">We'd love to hear from you! Reach out through the details below or fill out the form.</p>

                    <div class="space-y-2">
                        <p class="flex items-center space-x-2 text-gray-800 text-lg">
                            <span>📞</span> <span>233-123</span>
                        </p>
                        <p class="flex items-center space-x-2 text-gray-800 text-lg">
                            <span>✉️</span> <span>company.email@gmail.com</span>
                        </p>
                        <p class="flex items-center space-x-2 text-gray-800 text-lg">
                            <span>📍</span> <span>15 West 3rd St., Palawan, 6080</span>
                        </p>
                    </div>

                    <!-- Responsive Map -->
                    <div class="mt-6 w-full h-64 rounded-lg overflow-hidden shadow-lg">
                        <iframe class="w-full h-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?q=Palawan,6080&t=&z=13&ie=UTF8&iwloc=&output=embed">
                        </iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-gray-100 p-6 sm:p-8 rounded-lg shadow-xl">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Get In Touch</h3>
                    <form class="space-y-4">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Full Name">
                        <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Email Address">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Subject">
                        <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                                  placeholder="Your Message" rows="4"></textarea>
                        <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-lg text-lg font-medium hover:bg-gray-800 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

@include('layouts.footer')

</body>
</html>
