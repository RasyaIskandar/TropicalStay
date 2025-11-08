<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Menampilkan semua kamar
    public function index()
    {
         $rooms = Room::all(); // ambil semua kamar
        return view('rooms.index', compact('rooms'));
    }

    // Menampilkan detail kamar
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }
}
