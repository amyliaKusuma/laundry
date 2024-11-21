<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleany Malang - Laundry Service</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-blue-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="brand-logo flex-shrink-0">
                <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo" class="w-24">
            </div>
            <div class="flex space-x-20">
                <a href="#home" class="{{ request()->is('/') ? 'text-blue-600 font-bold' : 'text-gray-700' }} nav-link">Home</a>
                <a href="#about" class="{{ request()->is('#about') ? 'text-blue-600 font-bold' : 'text-gray-700' }} nav-link">About</a>
                <a href="#informasi" class="{{ request()->is('#informasi') ? 'text-blue-600 font-bold' : 'text-gray-700' }} nav-link">Informasi</a>
                <a href="#saran" class="{{ request()->is('#saran') ? 'text-blue-600 font-bold' : 'text-gray-700' }} nav-link">Saran</a>
                <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-blue-600 font-bold' : 'text-gray-700' }} nav-link">Akun</a>
            </div>            
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-16 flex flex-wrap items-center">
        <div class="w-full md:w-1/2 relative">
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-blue-100 rounded-full z-0"></div>
            <img src="{{ asset('images/washing machine.png') }}" alt="Washing Machine" class="w-full md:w-80 mx-auto relative z-10">
        </div>
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Hi Laundries!</h1>
            <p class="text-gray-600 mb-8">Cleany Malang hadir menyediakan berbagai rekomendasi layanan laundry terbaik di Kota Malang untuk kebutuhan cuci bersih Anda!</p>
            <button class="bg-blue-600 text-white px-6 py-2 rounded-full">Swipe Up! ↑</button>
        </div>
    </section>    

    <!-- About Section -->
    <section id="about" class="bg-blue-100 py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-2">About</h2>
            <h3 class="text-blue-600 text-4xl font-bold mb-8">Cleany Malang</h3>
            <div class="flex flex-wrap items-center space-x-8">
                <img src="{{ asset('images/Young.png') }}" alt="Logo Cleany Malang" class="w-full md:w-64 mb-4 md:mb-0 flex-shrink-0">
                <div class="w-full md:w-2/3 text-left">
                    <h4 class="text-xl font-bold mb-4">Apa Itu Cleany Malang?</h4>
                    <p class="text-gray-700 text-justify">Cleany Malang merupakan platform yang hadir untuk memudahkan Anda menemukan laundry terbaik di Kota Malang. Temukan berbagai pilihan laundry terdekat, paket layanan, ulasan pelanggan, dan panduan harga dalam satu platform. Nikmati kemudahan mencari laundry terpercaya hanya di Cleany Malang!</p>
                </div>
            </div>            
        </div>

            <div class="mt-8">
                <h4 class="text-xl font-bold mb-4">Mengapa Cleany Malang?</h4>
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <img src="{{ asset('images/Soap.png') }}" alt="Washing Machine" class="w-48">
                    </div>
                    <div class="bg-white rounded-lg p-4 flex items-center">
                        <span class="text-blue-600 mr-2">ℹ️</span>
                        Informasi Lengkap
                    </div>
                    <div class="bg-white rounded-lg p-4 flex items-center">
                        <span class="text-blue-600 mr-2">⭐</span>
                        Rating Terpercaya
                    </div>
                    <div class="bg-white rounded-lg p-4 flex items-center">
                        <span class="text-blue-600 mr-2">🚀</span>
                        Akses Mudah
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="informasi" class="py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Informasi Laundry</h2>
            
            <div class="grid grid-cols-4 gap-8">
                <!-- Laundry Card 1 -->
                <div class="laundry-card bg-white shadow-md rounded-lg p-4">
                    <img src="{{ asset('images/le choix.png') }}" alt="Le Choix" class="laundry-logo mx-auto">
                    <h3 class="font-bold text-lg mt-4">Le Choix Laundry</h3>
                    <p class="text-sm text-gray-600">Le Choix Laundry, laundry premium di Malang, menawarkan layanan berkualitas dengan mesin canggih dan tenaga profesional.</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <a href="{{ route('laundry.detail', ['id' => 'le-choix']) }}" class="text-blue-600 mt-4 inline-block">More →</a>
                </div>
                <!-- Laundry Card 2 -->
                <div class="laundry-card bg-white shadow-md rounded-lg p-4">
                    <img src="{{ asset('images/atlantic-prime.png') }}" alt="Atlantic Prime" class="laundry-logo mx-auto">
                    <h3 class="font-bold text-lg mt-4">Atlantic Prime</h3>
                    <p class="text-sm text-gray-600">Pada laundry Malang terbaik satu ini, setiap barang yang akan kamu laundry, akan dicuci menggunakan mesin cuci yang modern.</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <a href="{{ route('laundry.detail', ['id' => 'atlantic-prime']) }}" class="text-blue-600 mt-4 inline-block">More →</a>
                </div>
                <!-- Laundry Card 3 -->
                <div class="laundry-card bg-white shadow-md rounded-lg p-4">
                    <img src="{{ asset('images/wiranas.png') }}" alt="Wiranas" class="laundry-logo mx-auto">
                    <h3 class="font-bold text-lg mt-4">Wiranas Laundry & Dry Cleaning</h3>
                    <p class="text-sm text-gray-600">Tempat laundry Malang yang juga akan memberikan pelayanan terbaik walaupun harganya murah, adalah Wiranas Laundry & Dry Cleaning.</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <a href="{{ route('laundry.detail', ['id' => 'wiranas']) }}" class="text-blue-600 mt-4 inline-block">More →</a>
                </div>
                <!-- Laundry Card 4 -->
                <div class="laundry-card bg-white shadow-md rounded-lg p-4">
                    <img src="{{ asset('images/oxy.png') }}" alt="Oxy Laundry" class="laundry-logo mx-auto">
                    <h3 class="font-bold text-lg mt-4">Oxy CoinLaundry</h3>
                    <p class="text-sm text-gray-600">Tempat laundry bersih, harganya standar, hasil pengerjaannya cepat. Bahkan kamu bisa mengambil hasil cucian 1 hari setelah datang ke tempat laundry.</p>
                    <div class="flex justify-center mt-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <a href="{{ route('laundry.detail', ['id' => 'oxy']) }}" class="text-blue-600 mt-4 inline-block">More →</a>
                </div>
            </div>
        </div>
    </section>
    


    <!-- Saran Section -->
    <section id="saran" class="bg-blue-100 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">Saran</h2>
            
            <div class="max-w-lg mx-auto">
                <form action="https://formspree.io/f/mldelwlg" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="email" name="email" placeholder="Your E-Mail" 
                            class="w-full px-4 py-2 rounded-lg form-input">
                    </div>
                    <div>
                        <textarea name="message" placeholder="Your Message" 
                            class="w-full px-4 py-2 rounded-lg h-32 form-input"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full btn-primary">
                            Send! →
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-4">Made By Team of Cleany Malang</p>
            <p class="text-sm text-gray-600">
                Amylia Kusuma | Shavira Diva | Haris Eka | Frisqy Zistin
            </p>
            <p class="text-sm text-gray-600 mt-4">
                Need Collaboration? <a href="mailto:amyliaazizah@student.ub.ac.id" class="text-blue-600">Contact Us!</a>
            </p>
        </div>
    </footer>
</body>
</html>