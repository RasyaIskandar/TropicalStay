<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function rooms()
{
    $rooms = Room::all(); // ambil semua kamar
    return view('rooms.index', compact('rooms'));
}

}
