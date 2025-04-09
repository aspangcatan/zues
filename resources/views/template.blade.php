<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management - Blog</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

<!-- Hero Section -->
<section class="relative h-72 md:h-96 bg-cover bg-center" style="background-position: center;background-image: url('{{ asset('storage/' . $blog->photo) }}');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white text-center"></h1>
    </div>
</section>

<!-- Blog Content -->
<section class="bg-white text-gray-800 px-4 md:px-20 py-10 md:py-16">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-semibold mb-6 text-[#F8E231]">
            {{ $blog->title }}
        </h2>
        <p class="blog-description text-lg leading-relaxed mb-6">
            {{ $blog->description }}
        </p>
    </div>
</section>
</body>
</html>
