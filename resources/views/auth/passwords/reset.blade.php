<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Inter Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-image {
            background-image: url('https://placehold.co/1920x1080/C6D2E0/4A5568?text=Industrial+Background');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Kontainer utama dengan latar belakang gambar -->
    <div class="absolute inset-0 bg-image"></div>
    
    <!-- Kartu reset password dengan dua panel -->
    <div class="relative flex flex-col md:flex-row bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-4xl m-4 md:m-8">
        <!-- Panel Kiri (Informasi Proyek) -->
        <div class="relative w-full md:w-2/5 bg-blue-500 text-white p-8 flex flex-col items-center justify-center rounded-b-2xl md:rounded-r-none md:rounded-l-2xl">
            <!-- Overlay untuk semi-transparansi -->
            <div class="absolute inset-0 bg-blue-500 opacity-90 rounded-b-2xl md:rounded-r-none md:rounded-l-2xl"></div>
            <div class="relative z-10 text-center">
                <!-- Ikon atau Logo -->
                <div class="bg-white p-4 rounded-full inline-block mb-4">
                    <svg class="h-16 w-16 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 16V9c0-.55.45-1 1-1h8c.55 0 1 .45 1 1v7h1V9c0-1.65-1.35-3-3-3h-2V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H5c-1.65 0-3 1.35-3 3v7h1V9c0-.55.45-1 1-1h2v8zM19 8c-1.1 0-2 .9-2 2v1h-2V9c0-1.1-.9-2-2-2h-2c-1.1 0-2 .9-2 2v2H7V9c0-1.1-.9-2-2-2H3c-1.65 0-3 1.35-3 3v8h24v-8c0-1.65-1.35-3-3-3zm-5-3c0-.55-.45-1-1-1h-2c-.55 0-1 .45-1 1v1h4V5zm-4 7h4v2h-4v-2zM9 16c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2h2v2z"/>
                        <path d="M19 8c-1.1 0-2 .9-2 2v1h-2V9c0-1.1-.9-2-2-2h-2c-1.1 0-2 .9-2 2v2H7V9c0-1.1-.9-2-2-2H3c-1.65 0-3 1.35-3 3v8h24v-8c0-1.65-1.35-3-3-3zm-5-3c0-.55-.45-1-1-1h-2c-.55 0-1 .45-1 1v1h4V5zm-4 7h4v2h-4v-2zM9 16c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2h2v2zM19 8c-1.1 0-2 .9-2 2v1h-2V9c0-1.1-.9-2-2-2h-2c-1.1 0-2 .9-2 2v2H7V9c0-1.1-.9-2-2-2H3c-1.65 0-3 1.35-3 3v8h24v-8c0-1.65-1.35-3-3-3zm-5-3c0-.55-.45-1-1-1h-2c-.55 0-1 .45-1 1v1h4V5zm-4 7h4v2h-4v-2zM9 16c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-2h2v2z"/>
                    </svg>
                </div>
                <!-- Nama Proyek -->
                <h1 class="text-3xl font-bold mb-2">Gudang Sparepart</h1>
            </div>
        </div>

        <!-- Panel Kanan (Form Reset Password) -->
        <div class="w-full md:w-3/5 p-8 md:p-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-2">Reset Password</h2>
            <p class="text-gray-500 text-sm mb-6">Enter your new password to continue</p>
            
            <form method="POST" action="{{ route('password.update') }}">
                <!-- @csrf -->
                <input type="hidden" name="token" value="{{ 'your_token_here' }}">
                
                <!-- Input Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="email" value="{{ 'email@example.com' ?? 'old_email' }}" required autocomplete="email" autofocus>
                </div>

                <!-- Input Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <input id="password" type="password" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="password" required autocomplete="new-password">
                </div>
                
                <!-- Input Confirm Password -->
                <div class="mb-6">
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="password_confirmation" required autocomplete="new-password">
                </div>
                
                <!-- Tombol Reset Password -->
                <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                    {{ __('Reset Password') }}
                </button>
            </form>
        </div>
    </div>
</body>
</html>
