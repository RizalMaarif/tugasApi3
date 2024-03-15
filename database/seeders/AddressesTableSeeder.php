<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesTableSeeder extends Seeder
{
    public function run()
    {
        Address::create([
            'user_id' => 1, // Sesuaikan dengan user_id yang sesuai
            'street' => 'Jalan Contoh 123',
            'city' => 'Contoh Kota',
            'province' => 'Contoh Provinsi',
            'country' => 'Contoh Negara',
            'postal_code' => '12345',
        ]);
    }
}
