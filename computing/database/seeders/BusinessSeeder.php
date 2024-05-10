<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Business;


class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create([
            'name'=> 'TeknikPerú',
            'description'=> 'DEscribir',
            'logo'=> '/image/logo.png',
            'email'=> 'TeknikPerú',
            'address'=> 'direccion N° 670',
            'ruc'=> '20538856674',
            'phone'=> '+51 999 999 999',
            'contact_text'=> 'contactate con nosotros',
            'hours_of_operation'=> 'Lunes - Sábado: 08 AM - 22 PM',
            'latitude'=> '-12.0686357',
            'length'=> '-75.2102976',
            'google_maps_link'=> 'https://goo.gl/maps/f6qPrvtSZUhf9DzS7',

        ]);
    }
}
