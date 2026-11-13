<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuegoStar - Videojuegos y Tarjetas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#2e1065] text-white font-sans">

    <!-- 1. NAVBAR -->
    <nav class="bg-[#1e1b4b] py-4 border-b border-purple-800">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <div class="flex items-center space-x-6">
                <a href="#" class="text-2xl font-black text-white">Juego<span class="text-purple-400">Star</span></a>
                <ul class="hidden md:flex space-x-4 text-sm font-semibold">
                    <li><a href="#" class="hover:text-purple-300">Categorías</a></li>
                    <li><a href="#" class="hover:text-purple-300">Juegos Baratos</a></li>
                    <li><a href="#" class="hover:text-purple-300">Software</a></li>
                    <li><a href="#" class="hover:text-purple-300">eTarjetas</a></li>
                </ul>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="bg-purple-600 hover:bg-purple-500 px-4 py-2 rounded font-bold text-sm">GTA 6</a>
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (Banner) -->
    <header class="container mx-auto mt-6 px-4">
        <div class="relative bg-gradient-to-r from-purple-600 to-pink-500 rounded-xl overflow-hidden flex items-center justify-between p-8 h-64 md:h-96">
            <!-- Texto del Banner -->
            <div class="z-10 md:w-1/2">
                <h1 class="text-4xl md:text-6xl font-black italic text-white drop-shadow-lg leading-tight mb-4">
                    ¡Ya llega!<br>Grand Theft Auto VI
                </h1>
                <a href="#" class="inline-block bg-blue-600 hover:bg-blue-500 px-6 py-3 rounded font-bold uppercase tracking-wide text-white">
                    Comprar Tarjetas
                </a>
            </div>
            <!-- Imagen simulada (puedes poner una imagen real aquí) -->
            <div class="absolute right-0 bottom-0 h-full opacity-30 md:opacity-100">
                <img src="https://via.placeholder.com/600x400/000000/ffffff?text=GTA+6+Characters" alt="GTA VI" class="h-full object-cover">
            </div>
        </div>
    </header>

    <!-- 3. MENÚ DE ICONOS (Categorías) -->
    <section class="container mx-auto mt-8 px-4">
        <div class="bg-[#3b0764] rounded-lg p-4 flex overflow-x-auto space-x-8 justify-start md:justify-center border border-purple-800">
            <!-- Item -->
            <a href="#" class="flex flex-col items-center text-gray-300 hover:text-white min-w-[70px]">
                <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="text-xs font-bold">Juegos</span>
            </a>
            <!-- Item -->
            <a href="#" class="flex flex-col items-center text-gray-300 hover:text-white min-w-[70px]">
                <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                <span class="text-xs font-bold">eCards</span>
            </a>
            <!-- Item -->
            <a href="#" class="flex flex-col items-center text-gray-300 hover:text-white min-w-[70px]">
                <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="text-xs font-bold">Dinero</span>
            </a>
             <!-- Item -->
             <a href="#" class="flex flex-col items-center text-gray-300 hover:text-white min-w-[70px]">
                <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                <span class="text-xs font-bold">Steam</span>
            </a>
             <!-- Item -->
             <a href="#" class="flex flex-col items-center text-gray-300 hover:text-white min-w-[70px]">
                <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="text-xs font-bold">PSN</span>
            </a>
        </div>
    </section>

    <!-- 4. PRODUCTOS RECOMENDADOS -->
    <section class="container mx-auto mt-10 px-4 pb-20">
        <h2 class="text-2xl font-bold mb-6 flex items-center">
            Lo que te recomendamos
            <svg class="w-4 h-4 ml-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($recommended as $product)
            <div class="bg-[#1e1b4b] rounded-lg overflow-hidden hover:scale-105 transition transform duration-200 shadow-lg border border-purple-900 group">
                <div class="relative">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                    <!-- Badge de Plataforma -->
                    <span class="absolute top-2 right-2 bg-black/70 text-xs px-2 py-1 rounded text-white font-bold">
                        {{ $product->platform }}
                    </span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-sm mb-2 truncate">{{ $product->name }}</h3>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-black text-green-400">${{ $product->price }}</span>
                        <button class="bg-purple-600 hover:bg-purple-500 text-white p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</body>
</html>