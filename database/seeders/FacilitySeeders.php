<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'id' => '7d9cf2fc-3b8e-4f63-aac0-c838231202b1',
            'name' => 'Ac',
            'photo' => 'ac.png'
        ]);
        Facility::create([
            'id' => '7d9cf2fc-3b8e-4f63-aac0-c838231202b2',
            'name' => 'Lemari',
            'photo' => 'lemari.png'
        ]);
        Facility::create([
            'id' => '7d9cf2fc-3b8e-4f63-aac0-c838231202b3',
            'name' => 'Tv',
            'photo' => 'tv.png'
        ]);
        Facility::create([
            'id' => '7d9cf2fc-3b8e-4f63-aac0-c838231202b4',
            'name' => 'wifi',
            'photo' => 'wifi.png'
        ]);
        Facility::create([
            'id' => '7d9cf2fc-3b8e-4f63-aac0-c838231202b5',
            'name' => 'Dispenser',
            'photo' => 'dispenser.png'
        ]);
        Facility::create([
            'id' => '7d9cf2fc-3b8e-4f63-aac0-c838231202b6',
            'name' => 'Listrik',
            'photo' => 'listrik.png'
        ]);
    }
}