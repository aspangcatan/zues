<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
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
                    <p class="text-lg text-gray-600 leading-relaxed">We'd love to hear from you! Reach out through the
                        details below or fill out the form.</p>

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
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Get in Touch – Contact Us for Inquiries & Bookings</h3>
                    <p class="text-gray-700 mb-6">Have questions or want to book our services? We’re here to help! Whether you're planning an event, need more details about our offerings, or have any other inquiries, feel free to reach out. Fill out the form below, and we’ll get back to you as soon as possible.</p>
                    <form id="contactForm" action="{{ route('sendContactEmail') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="full_name"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Full Name" required>
                        <input type="email" name="email"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Email" required>
                        <input type="text" name="phone"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Contact Number" required>
                        <textarea name="address"
                                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                                  placeholder="Address" rows="4" required></textarea>
                        <input type="text" name="subject"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                               placeholder="Subject" required>
                        <textarea name="message"
                                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:outline-none"
                                  placeholder="Your Message" rows="4" required></textarea>
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

<!-- Loading Overlay -->
<div id="loadingOverlay" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="flex flex-col items-center">
        <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-white"></div>
        <p class="text-white mt-2">Sending...</p>
    </div>
</div>

<!-- Success Modal (Ensuring It Stays in Front) -->
<div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <h2 class="text-lg font-semibold text-green-600">Message Sent Successfully!</h2>
        <p class="text-gray-600 mt-2">Thank you for reaching out. We will get back to you soon.</p>
        <button id="closeModal" class="mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
            OK
        </button>
    </div>
</div>

@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const $contactForm = $('#contactForm');
        const $successModal = $('#successModal');
        const $loadingOverlay = $('#loadingOverlay');

        // ✅ AJAX Contact Form Submission (Fetch API + Loading Indicator)
        $contactForm.on('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);

            // Show loading overlay
            $loadingOverlay.removeClass('hidden');

            fetch("{{ url('/contact') }}", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                }
            })
                .then(response => response.json())
                .then(data => {
                    $loadingOverlay.addClass('hidden'); // Hide loading
                    if (data.success) {
                        $successModal.removeClass('hidden'); // Show success modal
                        $successModal.css('z-index', '9999'); // Ensure modal is in front
                        $contactForm[0].reset(); // Clear form fields
                    } else {
                        alert("Error sending message. Please try again.");
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    $loadingOverlay.addClass('hidden'); // Hide loading
                    alert("An error occurred. Please try again later.");
                });
        });

        // ✅ Close Success Modal
        $('#closeModal').on('click', function () {
            $successModal.addClass('hidden');
        });
    });
</script>
</body>
</html>
