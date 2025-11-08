<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Kamar - Tropical Hotel</title>
  
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
    /* Mengaplikasikan font dasar ke body */
    body {
      font-family: 'Lato', sans-serif;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-sand-100 to-sky-100 font-sans text-neutral-700 antialiased">

<div class="min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-3xl bg-white/70 backdrop-blur-sm p-8 md:p-10 rounded-2xl shadow-lifted">

    <h2 class="font-display text-3xl md:text-4xl font-bold text-sea-800 mb-2 text-center">Form Pemesanan Kamar</h2>
    <p class="text-center text-neutral-500 mb-8">Nikmati pengalaman menginap terbaik di surga tropis kami.</p>

    @if ($errors->any())
      <div class="bg-sunset-400/20 border-l-4 border-sunset-500 text-sunset-700 p-4 rounded-lg mb-6" role="alert">
        <p class="font-bold">Oops! Ada kesalahan.</p>
        <ul class="mt-2 list-disc list-inside text-sm">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
      @csrf

      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label for="guest_name" class="block text-sm font-medium mb-1">Nama Pemesan</label>
          <input type="text" name="guest_name" id="guest_name" class="form-input" required>
        </div>

        <div>
          <label for="gender" class="block text-sm font-medium mb-1">Jenis Kelamin</label>
          <select name="gender" id="gender" class="form-select" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>

      <div>
        <label for="id_number" class="block text-sm font-medium mb-1">Nomor Identitas (16 digit)</label>
        <input type="text" name="id_number" id="id_number" class="form-input" maxlength="16" required>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label for="room_id" class="block text-sm font-medium mb-1">Tipe Kamar</label>
          <select name="room_id" id="room_id" class="form-select" required>
            @foreach($rooms as $room)
              <option value="{{ $room->id }}" data-price="{{ $room->price }}">
                {{ $room->name }} - Rp {{ number_format($room->price,0,',','.') }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
  <label>Harga per malam</label>
  <!-- ini hanya untuk ditampilkan ke user -->
  <input type="text" id="price_display" class="form-control" readonly>

  <!-- ini yang akan dikirim ke backend -->
  <input type="hidden" name="price" id="price">
</div>

      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <div>
          <label for="date_start" class="block text-sm font-medium mb-1">Tanggal Check-in</label>
          <input type="date" name="date_start" id="date_start" class="form-input" required>
        </div>
        <div>
          <label for="duration" class="block text-sm font-medium mb-1">Durasi (malam)</label>
          <input type="number" name="duration" id="duration" class="form-input" min="1" value="1" required>
        </div>
        <div>
          <label for="date_end" class="block text-sm font-medium mb-1">Tanggal Checkout</label>
          <input type="date" name="date_end" id="date_end" class="form-input bg-sand-200/50 cursor-not-allowed" readonly>
        </div>
      </div>
      
      <div class="flex items-center gap-3 bg-sand-100 p-4 rounded-xl border border-sand-200">
        <input type="checkbox" name="breakfast" id="breakfast" class="h-5 w-5 rounded border-gray-300 text-sea-500 focus:ring-sea-500">
        <label for="breakfast" class="font-medium text-sm text-neutral-700">Termasuk Breakfast (+Rp 80.000 / malam)</label>
      </div>

      <div class="border-t border-sand-200 pt-6 mt-6 flex justify-between items-center">
        <h4 class="font-display text-xl font-bold text-sea-800">Total Bayar:</h4>
        <span id="total_view" class="text-2xl font-bold text-sea-600">Rp 0</span>
        <input type="hidden" name="total_price" id="total_price">
      </div>

      <button type="submit" class="w-full bg-sea-500 text-white font-bold py-3 px-6 rounded-xl hover:bg-sea-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sea-500 transform hover:-translate-y-1 transition-all duration-300 ease-in-out shadow-subtle hover:shadow-lifted">
        Pesan Sekarang
      </button>

    </form>
  </div>
</div>

<style>
  .form-input, .form-select {
    @apply w-full px-4 py-2 bg-white border border-slate-300 rounded-lg shadow-sm
           transition duration-200 ease-in-out
           focus:ring-2 focus:ring-sea-500 focus:border-sea-500;
  }
</style>

<script>
  // Script JavaScript Anda tetap sama dan akan berfungsi dengan baik.
  const roomSelect = document.getElementById('room_id');
  const priceInput = document.getElementById('price');
  const durationInput = document.getElementById('duration');
  const breakfastInput = document.getElementById('breakfast');
  const totalView = document.getElementById('total_view');
  const totalInput = document.getElementById('total_price');
  const dateStartInput = document.getElementById('date_start');
  const dateEndInput = document.getElementById('date_end');

  function setPrice() {
  const raw = Number(roomSelect.selectedOptions[0].dataset.price) || 0;

  // set hidden input untuk dikirim ke server
  document.getElementById('price').value = raw;

  // tampilkan harga yang diformat di input display
  document.getElementById('price_display').value = new Intl.NumberFormat('id-ID').format(raw);
}


  function calcCheckoutDate() {
    if (!dateStartInput.value) return;
    const startDate = new Date(dateStartInput.value);
    const duration = parseInt(durationInput.value);
    if (!isNaN(startDate.getTime()) && duration > 0) {
      let checkout = new Date(startDate);
      checkout.setDate(checkout.getDate() + duration);
      dateEndInput.value = checkout.toISOString().split('T')[0];
    } else {
      dateEndInput.value = '';
    }
  }

  function calcTotal() {
    const price = roomSelect.selectedOptions[0] ? parseInt(roomSelect.selectedOptions[0].dataset.price) : 0;
    const duration = parseInt(durationInput.value) || 1;
    if (duration <= 0) return;

    let subtotal = price * duration;
    let discount = duration > 3 ? Math.round(0.10 * subtotal) : 0;
    let breakfastCharge = breakfastInput.checked ? (80000 * duration) : 0;
    let total = subtotal - discount + breakfastCharge;

    totalView.textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
    totalInput.value = total;
  }

  roomSelect.addEventListener('change', setPrice);
  durationInput.addEventListener('input', () => { calcCheckoutDate(); calcTotal(); });
  breakfastInput.addEventListener('change', calcTotal);
  dateStartInput.addEventListener('change', calcCheckoutDate);
  
  window.addEventListener('load', () => {
    setPrice();
    calcCheckoutDate();
  });
</script>

</body>
</html>