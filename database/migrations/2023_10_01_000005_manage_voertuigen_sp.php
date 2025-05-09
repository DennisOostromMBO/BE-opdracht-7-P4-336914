<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    public function up(): void
    {
        // Drop the stored procedure if it exists
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllVoertuigen');

        // Load the stored procedure from the SQL file
        $path = database_path('sp/GetAllVoertuigen.sql');
        DB::unprepared(File::get($path));
    }

    public function down(): void
    {
        // Drop the stored procedure
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllVoertuigen');
    }
};
