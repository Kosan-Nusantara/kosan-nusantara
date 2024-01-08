<?php

namespace Database\Seeders;

use App\Models\Boarding;
use App\Models\BoardingFacility;
use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardingSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Basic Room 
        Boarding::create([
            'id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a8',
            'name' => 'Basic Room',
            'room_numbers' => 1,
            'floor' => 1,
            'description' => 'This is Basic Room Kosan Nusantara',
            'price' => 800000,
            'photo' => 'basic.png'
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12112',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a8',
            'name' => 'Lemari',
            'photo' => 'lemari.png',
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12113',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a8',
            'name' => 'Listrik',
            'photo' => 'listrik.png',
        ]);
        Gallery::create([
            'id' => '3e698e08-8e42-4d19-852c-30a393a146d1',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a8',
            'photo' => 'basic1.png'
        ]);
        Gallery::create([
            'id' => '3e698e08-8e42-4d19-852c-30a393a146d2',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a8',
            'photo' => 'basic2.png'
        ]);
        Gallery::create([
            'id' => '3e698e08-8e42-4d19-852c-30a393a146d3',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a8',
            'photo' => 'basic3.png'
        ]);
        // Basic Room 

        // Standar Room 
        Boarding::create([
            'id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'name' => 'Standar Room',
            'room_numbers' => 1,
            'floor' => 1,
            'description' => 'This is Standar Room Kosan Nusantara',
            'price' => 1500000,
            'photo' => 'standar.png'
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12121',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'name' => 'Lemari',
            'photo' => 'lemari.png',
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12122',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'name' => 'Listrik',
            'photo' => 'listrik.png',
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12123',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'name' => 'Dispenser',
            'photo' => 'dispenser.png',
        ]);
        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12124',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'name' => 'TV',
            'photo' => 'tv.png',
        ]);
        Gallery::create([
            'id' => 'a07f1dc9-7927-402d-a0a5-cc5fe6715b91',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'photo' => 'standar1.png'
        ]);
        Gallery::create([
            'id' => 'a07f1dc9-7927-402d-a0a5-cc5fe6715b92',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'photo' => 'standar2.png'
        ]);
        Gallery::create([
            'id' => 'a07f1dc9-7927-402d-a0a5-cc5fe6715b93',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'photo' => 'standar3.png'
        ]);
        Gallery::create([
            'id' => 'a07f1dc9-7927-402d-a0a5-cc5fe6715b94',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'photo' => 'standar4.png'
        ]);
        Gallery::create([
            'id' => 'a07f1dc9-7927-402d-a0a5-cc5fe6715b95',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'photo' => 'standar5.png'
        ]);
        Gallery::create([
            'id' => 'a07f1dc9-7927-402d-a0a5-cc5fe6715b96',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a1',
            'photo' => 'standar6.png'
        ]);
        // Standar Room

        // Premium Room
        Boarding::create([
            'id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'Premium Room',
            'room_numbers' => 1,
            'floor' => 1,
            'description' => 'This is Premium Room Kosan Nusantara',
            'price' => 3000000,
            'photo' => 'premium.png'
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12131',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'Lemari',
            'photo' => 'lemari.png',
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12132',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'Listrik',
            'photo' => 'listrik.png',
        ]);

        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12133',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'Dispenser',
            'photo' => 'dispenser.png',
        ]);
        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12134',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'TV',
            'photo' => 'tv.png',
        ]);
        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12135',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'AC',
            'photo' => 'ac.png',
        ]);
        BoardingFacility::create([
            'id' => '3a431c03-59e2-4e76-868d-40574df12136',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'name' => 'Wifi',
            'photo' => 'wifi.png',
        ]);
        Gallery::create([
            'id' => 'e592d805-35ef-4d94-88d8-c0f28cd868f1',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'photo' => 'premium1.png'
        ]);
        Gallery::create([
            'id' => 'e592d805-35ef-4d94-88d8-c0f28cd868f2',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'photo' => 'premium2.png'
        ]);
        Gallery::create([
            'id' => 'e592d805-35ef-4d94-88d8-c0f28cd868f3',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'photo' => 'premium3.png'
        ]);
        Gallery::create([
            'id' => 'e592d805-35ef-4d94-88d8-c0f28cd868f4',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'photo' => 'premium4.png'
        ]);
        Gallery::create([
            'id' => 'e592d805-35ef-4d94-88d8-c0f28cd868f5',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'photo' => 'premium5.png'
        ]);
        Gallery::create([
            'id' => 'e592d805-35ef-4d94-88d8-c0f28cd868f6',
            'boarding_id' => 'd4081c1b-81a3-47eb-9487-14f3b7e7c6a4',
            'photo' => 'premium6.png'
        ]);
        // Premium Room
    }
}