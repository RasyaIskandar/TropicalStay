<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan #{{ $booking->id }} - Tropical Hotel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sand': { 100: '#FDF8F0', 200: '#F8EFE4' },
                        'sea': { 500: '#1A5F7A', 600: '#00425A', 800: '#032539' },
                        'sunset': { 400: '#FF7B54', 500: '#FF5F33' },
                        'neutral': { 300: '#D1D5DB', 500: '#6B7280', 700: '#374151', 800: '#1F2937' }
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

        /* Reusable component class for form labels */
        .form-label {
            @apply block text-sm font-semibold text-neutral-700 mb-1.5;
        }

        /* Reusable component class for form inputs and selects */
        .form-input, .form-select {
            @apply w-full px-4 py-2.5 bg-white border border-neutral-300 rounded-lg shadow-sm
                   transition duration-200 ease-in-out
                   focus:ring-2 focus:ring-sea-500 focus:border-transparent;
        }
        
        /* Helper text style for inputs */
        .form-helper {
            @apply text-xs text-neutral-500 mt-1.5;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-sand-100 to-sky-100 font-sans text-neutral-800 antialiased">

<div class="min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-3xl bg-white/80 backdrop-blur-md p-8 md:p-12 rounded-2xl shadow-lifted">

        <div class="text-center mb-10">
            <h2 class="font-display text-3xl font-bold text-sea-800">Edit Pemesanan</h2>
            <p class="text-neutral-500 mt-2">Anda sedang mengubah data untuk booking ID #{{ $booking->id }}</p>
        </div>

        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-8">
                <fieldset class="p-6 border border-sand-200 rounded-xl">
                    <legend class="text-lg font-display font-bold text-sea-800 px-2">Informasi Tamu</legend>
                    <div class="space-y-6 mt-4">
                        <div>
                            <label for="guest_name" class="form-label">Nama Lengkap Tamu</label>
                            <input type="text" id="guest_name" name="guest_name" class="form-input" value="{{ old('guest_name', $booking->guest_name) }}" required placeholder="Contoh: Budi Santoso">
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select id="gender" name="gender" class="form-select" required>
                                    <option value="Laki-laki" {{ old('gender', $booking->gender) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('gender', $booking->gender) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="id_number" class="form-label">Nomor Identitas (KTP)</label>
                                <input type="text" id="id_number" name="id_number" class="form-input" maxlength="16" value="{{ old('id_number', $booking->id_number) }}" required placeholder="16 digit angka">
                                <p class="form-helper">Pastikan nomor identitas sesuai dengan KTP.</p>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="p-6 border border-sand-200 rounded-xl">
                    <legend class="text-lg font-display font-bold text-sea-800 px-2">Detail Penginapan</legend>
                    <div class="space-y-6 mt-4">
                        <div>
                            <label for="room_id" class="form-label">Tipe Kamar</label>
                            <select id="room_id" name="room_id" class="form-select" required>
                                @foreach($rooms as $room)
                                    <option value="{{ $room->id }}" {{ old('room_id', $booking->room_id) == $room->id ? 'selected' : '' }}>
                                        {{ $room->name }} - Rp {{ number_format($room->price, 0, ',', '.') }}/malam
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="date_start" class="form-label">Tanggal Check-in</label>
                                <input type="date" id="date_start" name="date_start" class="form-input" value="{{ old('date_start', $booking->date_start) }}" required>
                            </div>
                            <div>
                                <label for="duration" class="form-label">Durasi Menginap</label>
                                <input type="number" id="duration" name="duration" class="form-input" min="1" value="{{ old('duration', $booking->duration) }}" required placeholder="Contoh: 3">
                                <p class="form-helper">Jumlah malam.</p>
                            </div>
                        </div>
                        <div class="relative flex items-start">
                            <div class="flex h-6 items-center">
                                <input type="checkbox" name="breakfast" id="breakfast" value="1" class="h-5 w-5 rounded border-gray-300 text-sea-500 focus:ring-2 focus:ring-sea-500" {{ old('breakfast', $booking->breakfast) ? 'checked' : '' }}>
                            </div>
                            <div class="ml-3 text-sm leading-6">
                                <label for="breakfast" class="font-medium text-neutral-800">Sertakan Breakfast</label>
                                <p class="text-neutral-500">Tambahan biaya Rp 80.000 per malam.</p>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="mt-10 flex flex-col sm:flex-row-reverse gap-4">
                <button type="submit" class="w-full sm:w-auto flex-grow bg-sea-500 text-white font-bold py-3 px-8 rounded-xl hover:bg-sea-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sea-500 transform hover:-translate-y-1 transition-all duration-300 ease-in-out shadow-subtle hover:shadow-lifted">
                    Simpan Perubahan
                </button>
                <a href="{{ route('bookings.index') }}" class="w-full sm:w-auto text-center bg-neutral-200 text-neutral-700 font-bold py-3 px-8 rounded-xl hover:bg-neutral-300 transition-colors duration-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

</body>
</html>