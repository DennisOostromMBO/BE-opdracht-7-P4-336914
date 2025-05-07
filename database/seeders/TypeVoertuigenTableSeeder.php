<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVoertuigenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_voertuigen')->insert([
            ['type_voertuig' => 'Personenauto', 'rijbewijscategorie' => 'B'],
            ['type_voertuig' => 'Vrachtwagen', 'rijbewijscategorie' => 'C'],
            ['type_voertuig' => 'Bus', 'rijbewijscategorie' => 'D'],
            ['type_voertuig' => 'Bromfiets', 'rijbewijscategorie' => 'AM'],
        ]);
    }
}
