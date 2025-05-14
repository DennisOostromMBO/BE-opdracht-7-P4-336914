<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    public function up(): void
    {
        // Drop the stored procedures if they exist
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllVoertuigen');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetVoertuigById');
        DB::unprepared('DROP PROCEDURE IF EXISTS UpdateVoertuig');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetInstructeurById');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllTypeVoertuigen');

        // Load the stored procedures from the SQL files
        $pathGetAllVoertuigen = database_path('sp/GetAllVoertuigen.sql');
        DB::unprepared(File::get($pathGetAllVoertuigen));

        $pathGetVoertuigById = database_path('sp/GetVoertuigById.sql');
        DB::unprepared(File::get($pathGetVoertuigById));

        $pathUpdateVoertuig = database_path('sp/UpdateVoertuig.sql');
        DB::unprepared(File::get($pathUpdateVoertuig));

        $pathGetInstructeurById = database_path('sp/GetInstructeurById.sql');
        DB::unprepared(File::get($pathGetInstructeurById));

        $pathGetAllTypeVoertuigen = database_path('sp/GetAllTypeVoertuigen.sql');
        DB::unprepared(File::get($pathGetAllTypeVoertuigen));
    }

    public function down(): void
    {
        // Drop the stored procedures
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllVoertuigen');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetVoertuigById');
        DB::unprepared('DROP PROCEDURE IF EXISTS UpdateVoertuig');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetInstructeurById');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllTypeVoertuigen');
    }
};
