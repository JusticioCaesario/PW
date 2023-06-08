<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ajuan;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);

        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);

        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);

        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);

        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);

        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);

        Ajuan::create([
            'namaevent' => 'Apa',
            'deskripsi' => 'Lorem Ipsum',
            'start_date' => '2023-06-08',
            'end_date' => '2023-06-08',
        ]);
    }
}
