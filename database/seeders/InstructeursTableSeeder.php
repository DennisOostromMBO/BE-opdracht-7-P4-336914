<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructeursTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('instructeurs')->insert([
            ['voornaam' => 'Li', 'tussenvoegsel' => null, 'achternaam' => 'Zhan', 'mobiel' => '06-28493827', 'datum_in_dienst' => '2015-04-17', 'aantal_sterren' => '***'],
            ['voornaam' => 'Leroy', 'tussenvoegsel' => null, 'achternaam' => 'Boerhaven', 'mobiel' => '06-39398734', 'datum_in_dienst' => '2018-06-25', 'aantal_sterren' => '*'],
            ['voornaam' => 'Yoeri', 'tussenvoegsel' => 'Van', 'achternaam' => 'Veen', 'mobiel' => '06-24383291', 'datum_in_dienst' => '2010-05-12', 'aantal_sterren' => '***'],
            ['voornaam' => 'Bert', 'tussenvoegsel' => 'Van', 'achternaam' => 'Sali', 'mobiel' => '06-48293823', 'datum_in_dienst' => '2023-01-10', 'aantal_sterren' => '****'],
            ['voornaam' => 'Mohammed', 'tussenvoegsel' => 'El', 'achternaam' => 'Yassidi', 'mobiel' => '06-34291234', 'datum_in_dienst' => '2010-06-14', 'aantal_sterren' => '*****'],
        ]);
    }
}
