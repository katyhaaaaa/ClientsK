<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Lalah',
                'address' => 'Luna',
                'phone' => '0909090909',
                'capitalization' => 20000,
                'loan' => 10000
            ],
            [
                'name' => 'Kamplok',
                'address' => 'Kolpak',
                'phone' => '09090909345',
                'capitalization' => 40000,
                'loan' => 300000
            ],
            [
                'name' => 'kyrie',
                'address' => 'rizon',
                'phone' => '00956565',
                'capitalization' => 50000,
                'loan' => 500000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
