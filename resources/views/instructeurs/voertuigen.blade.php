
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Door Instructeur gebruikte voertuigen</h1>
    <p>Naam: {{ $instructeur->voornaam }} {{ $instructeur->tussenvoegsel }} {{ $instructeur->achternaam }}</p>
    <p>Datum in dienst: {{ $instructeur->datum_in_dienst }}</p>
    <p>Aantal sterren: {{ $instructeur->aantal_sterren }}</p>
    <button class="btn btn-primary">Voertuig toevoegen</button>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Type Voertuig</th>
                <th>Type</th>
                <th>Kenteken</th>
                <th>Bouwjaar</th>
                <th>Brandstof</th>
                <th>Rijbewijscategorie</th>
                <th>Wijzigen</th>
            </tr>
        </thead>
        <tbody>
            <!-- Placeholder rows -->
            <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td><button class="btn btn-warning">✏️</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection