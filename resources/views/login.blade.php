<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management - Login</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
<div class="relative w-96 bg-gray-800 p-8 rounded-lg shadow-lg">
    <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-24 h-24 bg-gray-800 rounded-full flex items-center justify-center border-4 border-gray-800">
        <img src="{{ asset('img/Zeus808Logo.png') }}" alt="Logo" class="w-24 h-24">
    </div>
    <h2 class="text-2xl font-bold text-center text-white mt-12 mb-6">Login</h2>

    <!-- Display error messages -->
    @if($errors->any())
        <div class="mb-4 bg-red-500 text-white text-center py-2 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-400 text-sm mb-2" for="username">Username</label>
            <input type="text" id="username" name="username" class="w-full px-4 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500" value="ExpertEase" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-400 text-sm mb-2" for="password">Password</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        </div>
        <button type="submit" class="w-full bg-yellow-500 text-gray-900 py-2 rounded font-bold hover:bg-yellow-400 transition">Login</button>
    </form>
</div>
</body>
</html>
