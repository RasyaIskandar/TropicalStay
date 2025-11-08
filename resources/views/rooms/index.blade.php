<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TropicalStay - Surga Tropis Menanti Anda</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'sea-blue': {
                  DEFAULT: '#0096C7',
                  dark: '#0077B6',
                },
                'sand-beige': '#FDF0E0',
                'sunset-gold': '#FFA500',
                'deep-sea': '#023047',
                'stone-gray': '#6c757d',
                'creamy-sand': '#FCF8F3',
                'coral': '#FF7F50',
              },
              fontFamily: {
                'sans': ['Poppins', 'sans-serif'],
                'body': ['Lato', 'sans-serif'],
              }
            },
          },
          plugins: [],
        }
    </script>

    <style>
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body class="bg-creamy-sand text-deep-sea font-body">

    <header x-data="{ open: false }" class="bg-white/80 backdrop-blur-lg sticky top-0 z-50 shadow-sm border-b border-stone-gray/10">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-deep-sea font-sans tracking-tight">
                TropicalStay
            </a>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="text-deep-sea hover:text-sea-blue transition-colors duration-300">Tentang Kami</a>
                <a href="#rooms" class="text-deep-sea hover:text-sea-blue transition-colors duration-300">Kamar</a>
                <a href="#facilities" class="text-deep-sea hover:text-sea-blue transition-colors duration-300">Fasilitas</a>
                <a href="#gallery" class="text-deep-sea hover:text-sea-blue transition-colors duration-300">Galeri</a>
                <a href="#contact" class="text-deep-sea hover:text-sea-blue transition-colors duration-300">Kontak</a>
            </div>
            <a href="{{ route('bookings.create') }}" 
   class="hidden md:block bg-sunset-gold text-white font-bold py-2.5 px-6 rounded-full hover:bg-opacity-90 hover:scale-105 hover:shadow-lg hover:shadow-sunset-gold/30 transition-all duration-300">
   Booking Sekarang
</a>

            
            <button @click="open = !open" class="md:hidden text-deep-sea p-2 rounded-md hover:bg-stone-gray/10 transition-colors z-50">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                 <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>
        
        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" @click.away="open = false" class="md:hidden absolute top-0 left-0 w-full bg-white shadow-xl py-20 px-6" style="display: none;">
            <div class="flex flex-col items-center space-y-6 text-center">
                <a @click="open = false" href="#about" class="text-lg text-deep-sea hover:text-sea-blue transition-colors duration-300">Tentang Kami</a>
                <a @click="open = false" href="#rooms" class="text-lg text-deep-sea hover:text-sea-blue transition-colors duration-300">Kamar</a>
                <a @click="open = false" href="#facilities" class="text-lg text-deep-sea hover:text-sea-blue transition-colors duration-300">Fasilitas</a>
                <a @click="open = false" href="#gallery" class="text-lg text-deep-sea hover:text-sea-blue transition-colors duration-300">Galeri</a>
                <a @click="open = false" href="#contact" class="text-lg text-deep-sea hover:text-sea-blue transition-colors duration-300">Kontak</a>
                <a @click="open = false" href="#contact" class="mt-4 bg-sunset-gold text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition-all duration-300 w-full">
                    Booking Sekarang
                </a>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1507525428034-b723a9ce6ad9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Tropical Beach" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
            <div class="relative z-10 px-6">
                <h1 class="text-5xl md:text-7xl font-bold font-sans tracking-tight drop-shadow-lg">Surga Tropis Menanti Anda</h1>
                <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto text-white/90 drop-shadow-md">
                    Nikmati keindahan laut biru, pasir putih, dan matahari terbenam yang tak terlupakan di TropicalStay.
                </p>
                <a href="#contact" class="mt-8 inline-block bg-sunset-gold text-white font-bold py-4 px-10 rounded-full hover:bg-opacity-90 hover:scale-105 hover:shadow-xl hover:shadow-sunset-gold/40 transition-all duration-300 text-lg">
                    Pesan Liburan Anda
                </a>
            </div>
        </section>

        <section id="about" class="py-20 lg:py-32">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <div class="rounded-xl overflow-hidden shadow-2xl shadow-sea-blue/20">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Hotel Lobby" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="text-sea-blue font-semibold tracking-wider uppercase">Selamat Datang di TropicalStay</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-deep-sea font-sans mt-3 leading-tight">Tempat di Mana Kenangan Dibuat</h2>
                        <p class="mt-6 text-stone-gray leading-relaxed">
                            Terletak di tepi pantai yang masih alami, TropicalStay menawarkan perpaduan sempurna antara kemewahan modern dan keindahan alam. Kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan, di mana setiap detail dirancang untuk kenyamanan dan relaksasi Anda.
                        </p>
                        <p class="mt-4 text-stone-gray leading-relaxed">
                            Dari kamar dengan pemandangan laut hingga fasilitas kelas dunia, kami adalah destinasi ideal untuk liburan romantis, petualangan keluarga, atau sekadar melepaskan penat.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="rooms" class="bg-white py-20 lg:py-32">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-sea-blue font-semibold tracking-wider uppercase">Akomodasi Kami</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-deep-sea font-sans mt-3 leading-tight">Pilihan Kamar Terbaik</h2>
                    <p class="mt-4 text-lg text-stone-gray leading-relaxed">Temukan kenyamanan tropis yang sempurna untuk liburan Anda, dirancang untuk relaksasi dan kemewahan.</p>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-500 ease-in-out hover:shadow-2xl hover:shadow-sea-blue/20 flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Deluxe Ocean View" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute top-0 right-0 bg-coral text-white text-xs font-bold px-3 py-1.5 m-4 rounded-full shadow-md">Populer</div>
                        </div>
                        <div class="p-6 lg:p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold font-sans text-deep-sea mb-2">Deluxe Ocean View</h3>
                            <p class="text-stone-gray text-base mb-5 flex-grow">Kamar dengan pemandangan laut lepas yang menakjubkan, dilengkapi balkon pribadi.</p>
                            
                            <div class="flex items-center space-x-4 text-stone-gray border-t border-b border-stone-gray/10 py-3 mb-5">
                                <div class="flex items-center space-x-2 text-sm">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg><span>2 Tamu</span>
                                </div>
                                <div class="flex items-center space-x-2 text-sm">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg><span>Balkon</span>
                                </div>
                            </div>
                            
                            <div class="flex justify-between items-center mb-5">
                                <span class="text-2xl font-bold font-sans text-sea-blue">Rp 2.500.000</span>
                                <span class="text-stone-gray text-sm"> / malam</span>
                            </div>
                           <a href="{{ route('bookings.create') }}" 
   class="block w-full text-center bg-sea-blue text-white font-bold py-3 px-4 rounded-lg hover:bg-sea-blue-dark transition-all duration-300 mt-auto transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-sea-blue/30">
   Pesan Sekarang
</a>

                        </div>
                    </div>
        
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-500 ease-in-out hover:shadow-2xl hover:shadow-sea-blue/20 flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Family Garden Suite" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        </div>
                        <div class="p-6 lg:p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold font-sans text-deep-sea mb-2">Family Garden Suite</h3>
                            <p class="text-stone-gray text-base mb-5 flex-grow">Suite luas dengan akses langsung ke taman tropis pribadi, ideal untuk keluarga.</p>
                            <div class="flex items-center space-x-4 text-stone-gray border-t border-b border-stone-gray/10 py-3 mb-5">
                                <div class="flex items-center space-x-2 text-sm">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.124-1.282-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.124-1.282.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg><span>4 Tamu</span>
                                </div>
                                <div class="flex items-center space-x-2 text-sm">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg><span>2 Kamar</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mb-5">
                                <span class="text-2xl font-bold font-sans text-sea-blue">Rp 3.200.000</span>
                                <span class="text-stone-gray text-sm"> / malam</span>
                            </div>
                           <a href="{{ route('bookings.create') }}" 
   class="block w-full text-center bg-sea-blue text-white font-bold py-3 px-4 rounded-lg hover:bg-sea-blue-dark transition-all duration-300 mt-auto transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-sea-blue/30">
   Pesan Sekarang
</a>

                        </div>
                    </div>
        
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-500 ease-in-out hover:shadow-2xl hover:shadow-sea-blue/20 flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Private Pool Villa" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        </div>
                        <div class="p-6 lg:p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold font-sans text-deep-sea mb-2">Private Pool Villa</h3>
                            <p class="text-stone-gray text-base mb-5 flex-grow">Puncak kemewahan dengan kolam renang pribadi dan layanan eksklusif 24 jam.</p>
                            <div class="flex items-center space-x-4 text-stone-gray border-t border-b border-stone-gray/10 py-3 mb-5">
                               <div class="flex items-center space-x-2 text-sm">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg><span>2 Tamu</span>
                                </div>
                                <div class="flex items-center space-x-2 text-sm">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg><span>Kolam Pribadi</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mb-5">
                                <span class="text-2xl font-bold font-sans text-sea-blue">Rp 5.500.000</span>
                                <span class="text-stone-gray text-sm"> / malam</span>
                            </div>
                           <a href="{{ route('bookings.create') }}" 
   class="block w-full text-center bg-sea-blue text-white font-bold py-3 px-4 rounded-lg hover:bg-sea-blue-dark transition-all duration-300 mt-auto transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-sea-blue/30">
   Pesan Sekarang
</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="facilities" class="py-20 lg:py-32">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-sea-blue font-semibold tracking-wider uppercase">Layanan Kami</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-deep-sea font-sans mt-3 leading-tight">Fasilitas Kelas Dunia</h2>
                    <p class="mt-4 text-lg text-stone-gray leading-relaxed">Kami menyediakan segala yang Anda butuhkan untuk pengalaman liburan yang sempurna dan tak terlupakan.</p>
                </div>
        
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-sea-blue/10 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="mx-auto bg-sea-blue/10 h-20 w-20 rounded-full flex items-center justify-center">
                             <svg class="h-10 w-10 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold font-sans text-xl mt-6">Private Beach</h3>
                    </div>
                     <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-sea-blue/10 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="mx-auto bg-sea-blue/10 h-20 w-20 rounded-full flex items-center justify-center">
                            <svg class="h-10 w-10 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.75A.75.75 0 013 4.5h.75m0 0a2.25 2.25 0 012.25 2.25v13.5a2.25 2.25 0 01-2.25 2.25H3.75a2.25 2.25 0 01-2.25-2.25V6.75a2.25 2.25 0 012.25-2.25h.75m12-3V3.75A2.25 2.25 0 0013.5 1.5h-3A2.25 2.25 0 008.25 3.75v.75m12 0c.375 0 .75.112 1.071.322a48.31 48.31 0 013.478 2.025c.341.22.341.722 0 .942a48.17 48.17 0 01-3.478 2.025c-.32.21-.696.322-1.071.322m0 0h-.01M18 15v.75c0 .414.336.75.75.75h.75a.75.75 0 00.75-.75v-.75m0 0a.75.75 0 00-.75-.75h-.75a.75.75 0 00-.75.75z" />
                            </svg>
                        </div>
                        <h3 class="font-bold font-sans text-xl mt-6">Infinity Pool</h3>
                    </div>
                     <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-sea-blue/10 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="mx-auto bg-sea-blue/10 h-20 w-20 rounded-full flex items-center justify-center">
                            <svg class="h-10 w-10 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.898 20.562L16.25 22.5l-.648-1.938a3.375 3.375 0 00-2.672-2.672L11.25 18l1.938-.648a3.375 3.375 0 002.672-2.672L16.25 13.5l.648 1.938a3.375 3.375 0 002.672 2.672L21.75 18l-1.938.648a3.375 3.375 0 00-2.672 2.672z" />
                            </svg>
                        </div>
                        <h3 class="font-bold font-sans text-xl mt-6">Spa & Wellness</h3>
                    </div>
                     <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:shadow-sea-blue/10 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="mx-auto bg-sea-blue/10 h-20 w-20 rounded-full flex items-center justify-center">
                            <svg class="h-10 w-10 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.324h5.385a.563.563 0 01.329.958l-4.484 3.27a.563.563 0 00-.182.557l1.636 5.234a.563.563 0 01-.84.622l-4.483-3.27a.563.563 0 00-.557 0l-4.483 3.27a.563.563 0 01-.84-.622l1.636-5.234a.563.563 0 00-.182-.557l-4.484-3.27a.563.563 0 01.329-.958h5.385a.563.563 0 00.475-.324L11.48 3.5z" />
                            </svg>
                        </div>
                        <h3 class="font-bold font-sans text-xl mt-6">Restaurant</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery" class="bg-white py-20 lg:py-32">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-4xl lg:text-5xl font-bold text-deep-sea font-sans mt-3 leading-tight">Momen Tak Terlupakan</h2>
                    <p class="mt-4 text-lg text-stone-gray leading-relaxed">Jelajahi keindahan setiap sudut TropicalStay dan biarkan imajinasi Anda membawa Anda ke sini.</p>
                </div>
        
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="grid gap-4">
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Pool Area"></div>
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1540541338287-41700207dee6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Poolside Bar"></div>
                    </div>
                    <div class="grid gap-4">
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Beach Sunset"></div>
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Hotel Exterior"></div>
                    </div>
                    <div class="grid gap-4">
                         <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1180&q=80" alt="Hotel Room Detail"></div>
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1498503182468-3b51cbb6cb24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Restaurant View"></div>
                    </div>
                    <div class="grid gap-4">
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Hotel Pool View"></div>
                        <div class="overflow-hidden rounded-xl shadow-lg"><img class="h-auto max-w-full hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1617859047449-42427513337a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Lounge Area"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="py-20 lg:py-32">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-4xl lg:text-5xl font-bold text-deep-sea font-sans mt-3 leading-tight">Apa Kata Tamu Kami</h2>
                    <p class="mt-4 text-lg text-stone-gray leading-relaxed">Pengalaman mereka adalah jaminan kualitas layanan kami. Lihat mengapa para tamu selalu ingin kembali.</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <p class="text-stone-gray mb-6">"Pengalaman terbaik seumur hidup! Pemandangannya luar biasa, kamarnya bersih dan mewah. Stafnya sangat ramah dan membantu. Pasti akan kembali lagi!"</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar of Jane Doe">
                            <div>
                                <p class="font-bold font-sans text-deep-sea">Jane Doe</p>
                                <p class="text-sm text-stone-gray">Traveler & Blogger</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <p class="text-stone-gray mb-6">"Tempat yang sempurna untuk liburan keluarga. Anak-anak suka kolam renangnya dan akses langsung ke pantai. Makanannya juga enak-enak. Sangat direkomendasikan!"</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar of John Smith">
                            <div>
                                <p class="font-bold font-sans text-deep-sea">John Smith</p>
                                <p class="text-sm text-stone-gray">Keluarga dari Jakarta</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <p class="text-stone-gray mb-6">"Saya menginap untuk perjalanan bisnis dan akhirnya memperpanjang untuk liburan. Suasananya sangat menenangkan. Koneksi Wi-Fi cepat dan fasilitasnya lengkap."</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Avatar of Sarah Lee">
                            <div>
                                <p class="font-bold font-sans text-deep-sea">Sarah Lee</p>
                                <p class="text-sm text-stone-gray">Pengusaha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="bg-white py-20 lg:py-32">
            <div class="container mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                     <div>
                        <span class="text-sea-blue font-semibold tracking-wider uppercase">Hubungi Kami</span>
                        <h2 class="text-4xl lg:text-5xl font-bold text-deep-sea font-sans mt-3 leading-tight">Pesan Liburan Impian Anda</h2>
                        <p class="mt-6 text-stone-gray leading-relaxed">
                            Siap untuk merasakan pengalaman tropis terbaik? Isi formulir di samping untuk menanyakan ketersediaan atau memesan kamar Anda. Tim kami akan segera menghubungi Anda.
                        </p>
                        <div class="mt-8 space-y-4">
                            <p class="flex items-center text-stone-gray"><svg class="h-5 w-5 mr-3 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg> Jl. Pantai Indah No. 123, Bali, Indonesia</p>
                            <p class="flex items-center text-stone-gray"><svg class="h-5 w-5 mr-3 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg> (0361) 123-4567</p>
                            <p class="flex items-center text-stone-gray"><svg class="h-5 w-5 mr-3 text-sea-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg> booking@tropicalstay.com</p>
                        </div>
                    </div>
                    
                    <div class="bg-creamy-sand p-8 rounded-xl shadow-2xl shadow-sea-blue/20">
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-deep-sea">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-3 bg-white border border-stone-gray/20 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-sea-blue focus:border-transparent transition">
                            </div>
                             <div>
                                <label for="email" class="block text-sm font-medium text-deep-sea">Alamat Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-3 bg-white border border-stone-gray/20 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-sea-blue focus:border-transparent transition">
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label for="checkin" class="block text-sm font-medium text-deep-sea">Check-in</label>
                                    <input type="date" id="checkin" name="checkin" class="mt-1 block w-full px-4 py-3 bg-white border border-stone-gray/20 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-sea-blue focus:border-transparent transition">
                                </div>
                                 <div>
                                    <label for="checkout" class="block text-sm font-medium text-deep-sea">Check-out</label>
                                    <input type="date" id="checkout" name="checkout" class="mt-1 block w-full px-4 py-3 bg-white border border-stone-gray/20 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-sea-blue focus:border-transparent transition">
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-deep-sea">Pesan Tambahan</label>
                                <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-3 bg-white border border-stone-gray/20 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-sea-blue focus:border-transparent transition"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-sunset-gold text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 hover:shadow-lg hover:shadow-sunset-gold/30 transition-all duration-300">
                                    Kirim Permintaan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-sand-beige border-t border-stone-gray/10">
        <div class="container mx-auto px-6 py-12">
            <div class="text-center">
                 <a href="#" class="text-2xl font-bold text-deep-sea font-sans tracking-tight mb-4 inline-block">
                    TropicalStay
                </a>
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="#" class="text-stone-gray hover:text-sea-blue transition-colors"><span class="sr-only">Facebook</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-stone-gray hover:text-sea-blue transition-colors"><span class="sr-only">Instagram</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.345 2.525c.636-.247 1.363-.416 2.427-.465C9.795 2.013 10.148 2 12.315 2zm-1.161 1.545c-2.43.0-2.734.011-3.71.058a3.42 3.42 0 00-1.713.435 3.42 3.42 0 00-1.22 1.22c-.29.678-.435 1.455-.435 2.518-.047.976-.058 1.28-.058 3.71s.011 2.734.058 3.71c.0 1.063.145 1.84.435 2.518a3.42 3.42 0 001.22 1.22 3.42 3.42 0 001.713.435c.976.047 1.28.058 3.71.058s2.734-.011 3.71-.058a3.42 3.42 0 001.713-.435 3.42 3.42 0 001.22-1.22c.29-.678.435-1.455.435-2.518.047-.976.058-1.28.058-3.71s-.011-2.734-.058-3.71c0-1.063-.145-1.84-.435-2.518a3.42 3.42 0 00-1.22-1.22 3.42 3.42 0 00-1.713-.435c-.976-.047-1.28-.058-3.71-.058zM12 6.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zm0 1.815a3.32 3.32 0 110 6.64 3.32 3.32 0 010-6.64zm5.857-4.48a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-stone-gray hover:text-sea-blue transition-colors"><span class="sr-only">Twitter</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                </div>
                <p class="text-sm text-stone-gray">&copy; 2025 TropicalStay Hotel. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>