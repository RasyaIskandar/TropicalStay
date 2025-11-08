<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'name' => 'Standar',
                'description' => 'Kamar standar nyaman untuk 2 orang',
                'price' => 250000,
                'image' => null,
                'video' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Deluxe',
                'description' => 'Kamar deluxe dengan fasilitas lebih baik',
                'price' => 400000,
                'image' => null,
                'video' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Family',
                'description' => 'Kamar family untuk 4 orang',
                'price' => 600000,
                'image' => null,
                'video' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
