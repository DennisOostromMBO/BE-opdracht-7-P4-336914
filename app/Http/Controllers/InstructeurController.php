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
        $voertuig = DB::select('CALL GetVoertuigById(?)', [$voertuig])[0] ?? abort(404, 'Voertuig not found.');
        $typeVoertuigen = DB::select('CALL GetAllTypeVoertuigen()');
        $instructeurs = DB::select('CALL GetAllInstructeurs()');

        return view('voertuigen.edit', compact('voertuig', 'typeVoertuigen', 'instructeurs'));
    }

    public function updateVoertuig(Request $request, $id, $voertuig)
    {
        // First verify the vehicle exists and belongs to the instructor
        $currentVoertuig = DB::select('CALL GetVoertuigById(?)', [$voertuig])[0] ?? abort(404);

        if ($currentVoertuig->instructeur_id != $id) {
            abort(403, 'This vehicle does not belong to this instructor');
        }

        DB::statement('CALL UpdateVoertuig(?, ?, ?, ?, ?, ?, ?)', [
            $voertuig,
            $request->instructeur_id,
            $request->type_voertuig_id,
            $request->type,
            $request->bouwjaar,
            $request->brandstof,
            $request->kenteken
        ]);

        // Redirect back to the original instructor's page
        return redirect()->route('instructeurs.voertuigen', ['id' => $id])
                         ->with('success', 'Voertuig succesvol bijgewerkt.');
    }
}
