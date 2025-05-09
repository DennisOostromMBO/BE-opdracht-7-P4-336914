<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructeurController extends Controller
{
    public function index()
    {
        // Call the stored procedure
        $instructeurs = DB::select('CALL GetAllInstructeurs()');

        // Pass the data to the view
        return view('instructeurs.index', compact('instructeurs'));
    }

    public function voertuigen($id)
    {
        // Fetch the instructor's details
        $instructeur = DB::table('instructeurs')->where('id', $id)->first();

        // Fetch the vehicles assigned to the instructor using the stored procedure
        $voertuigen = DB::select('CALL GetAllVoertuigen(?)', [$id]);

        // Pass the data to the view
        return view('instructeurs.voertuigen', [
            'instructeur' => $instructeur,
            'voertuigen' => $voertuigen
        ]);
    }
}
