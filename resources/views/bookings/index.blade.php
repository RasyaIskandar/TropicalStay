    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Pemesanan - Tropical Hotel</title>

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

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
            <div>
                <h2 class="font-display text-3xl font-bold text-sea-800">Daftar Pemesanan</h2>
                <p class="text-neutral-500 mt-1">Manajemen data pemesanan kamar hotel.</p>
            </div>
            <a href="{{ route('bookings.create') }}" class="w-full sm:w-auto bg-sea-500 text-white font-bold py-2 px-5 rounded-lg hover:bg-sea-600 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out shadow-subtle hover:shadow-md flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Tambah Pemesanan
            </a>
        </div>

        @if(session('success'))
        <div id="success-alert" class="bg-teal-100 border-l-4 border-teal-500 text-teal-700 p-4 rounded-lg mb-6 flex justify-between items-center" role="alert">
            <p>{{ session('success') }}</p>
            <button onclick="document.getElementById('success-alert').style.display='none'" class="text-teal-500 hover:text-teal-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-subtle overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="bg-sea-800 text-white uppercase tracking-wider font-display">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Nama Pemesan</th>
                            <th scope="col" class="px-6 py-3">Tipe Kamar</th>
                            <th scope="col" class="px-6 py-3 text-center">Check-in</th>
                            <th scope="col" class="px-6 py-3 text-center">Durasi</th>
                            <th scope="col" class="px-6 py-3">Total Harga</th>
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                        <tr class="bg-white border-b hover:bg-sand-100/50 transition-colors duration-200">
                            <td class="px-6 py-4 font-bold text-sea-800">{{ $booking->id }}</td>
                            <td class="px-6 py-4 font-semibold text-neutral-700">{{ $booking->guest_name }}</td>
                            <td class="px-6 py-4">{{ $booking->room->name }}</td>
                            <td class="px-6 py-4 text-center">{{ \Carbon\Carbon::parse($booking->date_start)->format('d M Y') }}</td>
                            <td class="px-6 py-4 text-center">{{ $booking->duration }} Malam</td>
                            <td class="px-6 py-4 font-semibold text-sea-600">Rp {{ number_format($booking->total, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-center">
                               <div class="flex w-full flex-col items-stretch justify-center gap-3 sm:w-auto sm:flex-row sm:items-center">

    <a href="{{ route('bookings.show', $booking->id) }}"
       class="inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-cyan-100 px-4 py-2 text-sm font-semibold text-cyan-800 shadow-sm transition-all hover:bg-cyan-200 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
        Detail
    </a>

    <a href="{{ route('bookings.edit', $booking->id) }}"
       class="inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-amber-100 px-4 py-2 text-sm font-semibold text-amber-800 shadow-sm transition-all hover:bg-amber-200 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
        Edit
    </a>

    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="w-full sm:w-auto">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-rose-100 px-4 py-2 text-sm font-semibold text-rose-800 shadow-sm transition-all hover:bg-rose-200 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
            Hapus
        </button>
    </form>
</div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-10 text-neutral-500">
                                <div class="flex flex-col items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-neutral-300 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <p class="font-semibold">Belum ada data pemesanan.</p>
                                    <p class="text-sm">Silakan tambahkan pemesanan baru.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .btn-action {
            @apply font-bold py-1 px-3 rounded-md text-xs transition-all duration-200;
        }
    </style>

    </body>
    </html>