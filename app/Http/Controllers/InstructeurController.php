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
        $instructeur = DB::table('instructeurs')->where('id', $id)->first();

        return view('instructeurs.voertuigen', ['instructeur' => $instructeur]);
    }
}
