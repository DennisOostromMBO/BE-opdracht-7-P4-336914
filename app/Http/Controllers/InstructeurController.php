<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructeurController extends Controller
{
    public function index()
    {
        // Fetch all instructors using a stored procedure
        $instructeurs = DB::select('CALL GetAllInstructeurs()');

        return view('instructeurs.index', compact('instructeurs'));
    }

    public function voertuigen($id)
    {
        // Fetch instructor details and vehicles using stored procedures
        $instructeur = DB::select('CALL GetInstructeurById(?)', [$id])[0] ?? abort(404, 'Instructeur not found.');
        $voertuigen = DB::select('CALL GetAllVoertuigen(?)', [$id]);

        return view('instructeurs.voertuigen', compact('instructeur', 'voertuigen'));
    }

    public function editVoertuig($id, $voertuig)
    {
        // Fetch vehicle details and types using stored procedures
        $voertuig = DB::select('CALL GetVoertuigById(?)', [$voertuig])[0] ?? abort(404, 'Voertuig not found.');

        // Ensure instructeur_id matches
        if ($voertuig->instructeur_id != $id) {
            abort(404, 'Voertuig does not belong to this instructeur.');
        }

        $typeVoertuigen = DB::select('CALL GetAllTypeVoertuigen()');

        return view('voertuigen.edit', compact('voertuig', 'typeVoertuigen'));
    }

    public function updateVoertuig(Request $request, $id)
    {
        // Update vehicle details using a stored procedure
        DB::statement('CALL UpdateVoertuig(?, ?, ?, ?, ?, ?)', [
            $id,
            $request->type_voertuig_id,
            $request->type,
            $request->bouwjaar,
            $request->brandstof,
            $request->kenteken
        ]);

        return redirect()->route('instructeurs.voertuigen', ['id' => $request->instructeur_id])
                         ->with('success', 'Voertuig succesvol bijgewerkt.');
    }
}
