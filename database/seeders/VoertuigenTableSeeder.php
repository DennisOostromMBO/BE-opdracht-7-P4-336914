<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoertuigenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('voertuigen')->insert([
            ['kenteken' => 'AU-67-IO', 'type' => 'Golf', 'bouwjaar' => '2017-06-12', 'brandstof' => 'Diesel', 'type_voertuig_id' => 1],
            ['kenteken' => 'TR-24-OP', 'type' => 'DAF', 'bouwjaar' => '2019-05-23', 'brandstof' => 'Diesel', 'type_voertuig_id' => 2],
            ['kenteken' => 'TH-78-KL', 'type' => 'Mercedes', 'bouwjaar' => '2023-01-01', 'brandstof' => 'Benzine', 'type_voertuig_id' => 1],
            ['kenteken' => '90-KL-TR', 'type' => 'Fiat 500', 'bouwjaar' => '2021-09-12', 'brandstof' => 'Benzine', 'type_voertuig_id' => 1],
            ['kenteken' => '34-TK-LP', 'type' => 'Scania', 'bouwjaar' => '2015-03-13', 'brandstof' => 'Diesel', 'type_voertuig_id' => 2],
            ['kenteken' => 'YY-OP-78', 'type' => 'BMW M5', 'bouwjaar' => '2022-05-13', 'brandstof' => 'Diesel', 'type_voertuig_id' => 1],
            ['kenteken' => 'UU-HH-JK', 'type' => 'M.A.N', 'bouwjaar' => '2017-12-03', 'brandstof' => 'Diesel', 'type_voertuig_id' => 2],
            ['kenteken' => 'ST-FZ-28', 'type' => 'Citroën', 'bouwjaar' => '2018-01-20', 'brandstof' => 'Elektrisch', 'type_voertuig_id' => 1],
            ['kenteken' => '123-FR-T', 'type' => 'Piaggio ZIP', 'bouwjaar' => '2021-02-01', 'brandstof' => 'Benzine', 'type_voertuig_id' => 4],
            ['kenteken' => 'DRS-52-P', 'type' => 'Vespa', 'bouwjaar' => '2022-03-21', 'brandstof' => 'Benzine', 'type_voertuig_id' => 4],
            ['kenteken' => 'STP-12-U', 'type' => 'Kymco', 'bouwjaar' => '2022-07-02', 'brandstof' => 'Benzine', 'type_voertuig_id' => 4],
            ['kenteken' => '45-SD-23', 'type' => 'Renault', 'bouwjaar' => '2023-01-01', 'brandstof' => 'Diesel', 'type_voertuig_id' => 3],
        ]);
    }
}
