<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan #{{ $booking->id }} - Tropical Hotel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <script>
        // Mengintegrasikan konfigurasi kustom ke Tailwind CDN
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sand': { 100: '#FDF8F0', 200: '#F8EFE4' },
                        'sea': { 500: '#1A5F7A', 600: '#00425A', 800: '#032539' },
                        'sunset': { 400: '#FF7B54', 500: '#FF5F33' },
                        'neutral': { 500: '#A0A0A0', 700: '#4A4A4A' }
                    },
                    fontFamily: {
                        'display': ['Poppins', 'sans-serif'],
                        'sans': ['Lato', 'sans-serif'],
                    },
                    borderRadius: { 'xl': '1rem' },
                    boxShadow: {
                        'subtle': '0 4px 12px rgba(0, 0, 0, 0.05)',
                        'lifted': '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Lato', sans-serif; }
    </style>
</head>

<body class="bg-sand-100 font-sans text-neutral-700 antialiased">

<div class="min-h-screen flex flex-col items-center justify-center p-4">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-lifted overflow-hidden">
        <div class="p-6 border-b border-sand-200">
            <p class="text-sm font-semibold text-sea-500">Booking ID: #{{ $booking->id }}</p>
            <h2 class="font-display text-2xl font-bold text-sea-800 mt-1">Detail Pemesanan</h2>
        </div>

        <div class="p-6">
            <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                <div class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sea-500/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    <div>
                        <dt class="text-sm text-neutral-500">Nama Pemesan</dt>
                        <dd class="font-semibold">{{ $booking->guest_name }}</dd>
                    </div>
                </div>
                
                <div class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sea-500/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4z" /></svg>
                    <div>
                        <dt class="text-sm text-neutral-500">No. Identitas</dt>
                        <dd class="font-semibold">{{ $booking->id_number }}</dd>
                    </div>
                </div>
                
                <div class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sea-500/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14c-2.48 0-4.75.99-6.44 2.69-.62.62-.62 1.63 0 2.24.62.62 1.63.62 2.24 0C9.1 17.65 10.48 17 12 17s2.9.65 4.2 1.93c.62.62 1.63.62 2.24 0 .62-.62.62-1.63 0-2.24C16.75 14.99 14.48 14 12 14zm0-12c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="currentColor"/></svg>
                    <div>
                        <dt class="text-sm text-neutral-500">Jenis Kelamin</dt>
                        <dd class="font-semibold">{{ $booking->gender }}</dd>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sea-500/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    <div>
                        <dt class="text-sm text-neutral-500">Tipe Kamar</dt>
                        <dd class="font-semibold">{{ $booking->room->name }}</dd>
                    </div>
                </div>
                
                <div class="flex items-start gap-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sea-500/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    <div>
                        <dt class="text-sm text-neutral-500">Check-in → Check-out</dt>
                        <dd class="font-semibold">
                            {{ \Carbon\Carbon::parse($booking->date_start)->format('d M Y') }} → {{ \Carbon\Carbon::parse($booking->date_end)->format('d M Y') }}
                        </dd>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sea-500/70 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <div>
                        <dt class="text-sm text-neutral-500">Durasi Menginap</dt>
                        <dd class="font-semibold">{{ $booking->duration }} Malam</dd>
                    </div>
                </div>
            </dl>
        </div>

        <div class="bg-sand-100/60 p-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <span class="text-sm font-semibold {{ $booking->breakfast ? 'text-green-600' : 'text-neutral-500' }}">
                         {{ $booking->breakfast ? 'Termasuk Breakfast' : 'Tanpa Breakfast' }}
                    </span>
                </div>
                <div>
                    <p class="text-sm text-neutral-500 text-right">Total Bayar</p>
                    <p class="font-display text-2xl font-bold text-sea-600">
                        Rp {{ number_format($booking->total, 0, ',', '.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('bookings.index') }}" class="inline-flex items-center gap-2 text-sea-500 hover:text-sea-600 font-semibold transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Kembali ke Daftar Pemesanan
        </a>
    </div>
</div>

</body>
</html>