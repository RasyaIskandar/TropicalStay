<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    // Form pemesanan
    public function create()
    {
        $rooms = Room::all();
        return view('bookings.create', compact('rooms'));
    }

    // Simpan data pemesanan ke database
 public function store(Request $request)
{
    $request->validate([
        'guest_name' => 'required|string|max:255',
        'gender' => 'required',
        'id_number' => 'required|digits:16',
        'room_id' => 'required|exists:rooms,id',
        'date_start' => 'required|date',
        'duration' => 'required|integer|min:1',
        'price' => 'required|integer',
    ]);

    // Hitung total
    $subtotal = $request->price * $request->duration;
    $discount = $request->duration > 3 ? 0.10 * $subtotal : 0;
    $breakfastCharge = $request->has('breakfast') ? 80000 * $request->duration : 0;
    $total = $subtotal - $discount + $breakfastCharge;

    Booking::create([
        'guest_name' => $request->guest_name,
        'gender' => $request->gender,
        'id_number' => $request->id_number,
        'room_id' => $request->room_id,
        'date_start' => $request->date_start,
        'duration' => $request->duration,
        'breakfast' => $request->has('breakfast'),
        'price' => $request->price,
        'total' => $total, // ✅ WAJIB TAMBAHKAN INI
    ]);

    return redirect()->route('rooms.index')->with('success', 'Pemesanan berhasil dibuat!');

}



    // Daftar semua pesanan
   public function index()
{
    $bookings = Booking::with('room')->latest()->get();
    return view('bookings.index', compact('bookings'));
}

public function show($id)
{
    $booking = Booking::with('room')->findOrFail($id);
    return view('bookings.show', compact('booking'));
}

public function edit($id)
{
    $booking = Booking::findOrFail($id);
    $rooms = Room::all();
    return view('bookings.edit', compact('booking', 'rooms'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'guest_name' => 'required|string|max:255',
        'gender' => 'required|string',
        'id_number' => 'required|digits:16',
        'room_id' => 'required|exists:rooms,id',
        'date_start' => 'required|date',
        'duration' => 'required|integer|min:1',
    ]);

    $booking = Booking::findOrFail($id);
    $room = Room::findOrFail($request->room_id);
    $price = $room->price;
    $duration = (int) $request->duration;

    $subtotal = $price * $duration;
    $discount = $duration > 3 ? 0.10 * $subtotal : 0;
    $breakfastCharge = $request->has('breakfast') ? 80000 * $duration : 0;
    $total = $subtotal - $discount + $breakfastCharge;
    $date_end = \Carbon\Carbon::parse($request->date_start)->addDays($duration);

    $booking->update([
        'guest_name' => $request->guest_name,
        'gender' => $request->gender,
        'id_number' => $request->id_number,
        'room_id' => $request->room_id,
        'date_start' => $request->date_start,
        'date_end' => $date_end,
        'duration' => $duration,
        'breakfast' => $request->has('breakfast'),
        'price' => $price,
        'total_price' => $total,
    ]);

    return redirect()->route('bookings.index')->with('success', 'Pemesanan berhasil diperbarui!');
}

public function destroy($id)
{
    $booking = Booking::findOrFail($id);
    $booking->delete();

    return redirect()->route('bookings.index')->with('success', 'Pemesanan berhasil dihapus!');
}


}
