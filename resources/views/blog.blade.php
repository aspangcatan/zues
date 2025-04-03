<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management - Blog</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="text-white">

@include('layouts.header')
<section class="relative bg-gold text-black h-[400px] flex flex-col items-center justify-center text-center px-6 mt-24">
    <h1 class="text-5xl font-bold">The Event Experience Blog</h1>
    <p class="text-lg mt-4">Sign up to stay ahead of the industry</p>
    <div class="mt-6 w-full max-w-lg flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
        <div class="relative w-full md:w-auto flex-grow">
            <input type="text" placeholder="Search"
                   class="w-full px-4 py-3 rounded-lg border border-black focus:outline-none focus:ring-2 focus:ring-pink"
                   id="search">
            <button class="absolute right-4 top-3 text-black"><i class="fas fa-search"></i></button>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 pb-16 bg-white text-black">
    <h2 class="text-3xl font-bold text-center text-gold">Mastering the Art of the Event</h2>
    <p class="text-lg text-center mt-2 text-gray-700">Expert insights for planning perfect events.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6 border-gray-300 pt-6" id="planning_blogs"></div>
</section>

<section class="container mx-auto px-6 pb-16 bg-white text-black border-t-2 border-gray-300 pt-6">
    <h2 class="text-3xl font-bold text-center text-gold">Memorable Moments</h2>
    <p class="text-lg text-center mt-2 text-gray-700">Behind the scenes of our most successful events.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6" id="moments_blogs"></div>
</section>

@include('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Call the function when the page loads
    $(document).ready(function () {
        fetchBlogs("");

        $("#search").on("input", function () {
            let query = $(this).val().trim();
            if (query === "") {
                fetchBlogs(query);
            }
        });

        $("#search").on("keypress", function (event) {
            if (event.which === 13) {  // 13 is the Enter key
                event.preventDefault();
                fetchBlogs($(this).val().trim());
            }
        });

        // Optional: Add a click event for the search button
        $(".fa-search").parent().on("click", function () {
            let searchQuery = $("input[placeholder='Search']").val().trim();
            fetchBlogs(searchQuery);
        });

    });

    function fetchBlogs(search) {
        // Display a shimmering loader while waiting for the data
        const loader = `
            <div class="bg-gray-100 p-10 rounded-lg shadow-lg animate-pulse">
                <div class="h-8 bg-gray-300 rounded w-4/5 mb-6"></div>
                <div class="h-6 bg-gray-300 rounded mb-4"></div>
                <div class="h-6 bg-gray-300 rounded w-3/4"></div>
            </div>
            <div class="bg-gray-100 p-10 rounded-lg shadow-lg animate-pulse">
                <div class="h-8 bg-gray-300 rounded w-4/5 mb-6"></div>
                <div class="h-6 bg-gray-300 rounded mb-4"></div>
                <div class="h-6 bg-gray-300 rounded w-3/4"></div>
            </div>
            <div class="bg-gray-100 p-10 rounded-lg shadow-lg animate-pulse">
                <div class="h-8 bg-gray-300 rounded w-4/5 mb-6"></div>
                <div class="h-6 bg-gray-300 rounded mb-4"></div>
                <div class="h-6 bg-gray-300 rounded w-3/4"></div>
            </div>
    `;

        // Show the loader before making the API call
        $("#planning_blogs").html(loader);
        $("#moments_blogs").html(loader);

        // Simulate loading time for testing with setTimeout

        fetch('{{ route('blogs.planning') }}?q_=' + search)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Server Error: ${response.status} ${response.statusText}`);
                }

                return response.json();
            })
            .then(blogs => {
                let plannings = '';
                let moments = '';

                const planningBlogs = blogs.filter(blog => blog.type === 1);
                const momentsBlogs = blogs.filter(blog => blog.type === 2);

                if (planningBlogs.length === 0) {
                    plannings = `
                        <div class="col-span-full flex flex-col justify-center items-center h-40 w-full text-gray-500 font-semibold text-xl text-center">
                            <p>No planning blogs available right now. Please check back later.</p>
                        </div>
                        `;
                } else {
                    planningBlogs.forEach(blog => {
                        plannings += `
                            <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                                <h3 class="text-xl font-semibold text-gold">${blog.title}</h3>
                                <p class="text-gray-700 mt-2">${blog.description}</p>
                                <a href="${blog.link}" target="_blank"
                                   class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">
                                   Read More
                                </a>
                            </div>
                        `;
                    });
                }

                if (momentsBlogs.length === 0) {
                    moments = `
                        <div class="col-span-full flex flex-col justify-center items-center h-40 w-full text-gray-500 font-semibold text-xl text-center">
                            <p>No moments blogs available right now. Please check back later.</p>
                        </div>
                        `;
                } else {
                    momentsBlogs.forEach(blog => {
                        moments += `
                            <div class="bg-gray-100 p-8 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                                <h3 class="text-xl font-semibold text-gold">${blog.title}</h3>
                                <p class="text-gray-700 mt-2">${blog.description}</p>
                                <a href="${blog.link}" target="_blank"
                                   class="mt-4 inline-block text-black bg-gold hover:bg-pink transition-colors px-6 py-3 rounded-full shadow-md font-semibold">
                                   Read More
                                </a>
                            </div>
                        `;
                    });
                }

                // Hide the loader and display the actual content
                $("#planning_blogs").html(plannings);
                $("#moments_blogs").html(moments);
            })
            .catch(error => {
                console.error("Error fetching blogs:", error);
                $("#planning_blogs").html(`
                    <div class="text-center text-red-500 font-semibold text-xl">
                        <p>⚠️ Failed to load blogs. Please try again later.</p>
                    </div>
                `);
                $("#moments_blogs").html(`
                    <div class="text-center text-red-500 font-semibold text-xl">
                        <p>⚠️ Failed to load blogs. Please try again later.</p>
                    </div>
                `);
            });
    }

</script>
</body>
</html>
