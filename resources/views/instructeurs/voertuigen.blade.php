<!-- filepath: c:\Users\denni\Herd\be-opdracht-07\resources\views\instructeurs\voertuigen.blade.php -->
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
            @foreach ($voertuigen as $voertuig)
                <tr>
                    <td>{{ $voertuig->TypeVoertuig }}</td>
                    <td>{{ $voertuig->Type }}</td>
                    <td>{{ $voertuig->Kenteken }}</td>
                    <td>{{ $voertuig->Bouwjaar }}</td>
                    <td>{{ $voertuig->Brandstof }}</td>
                    <td>{{ $voertuig->Rijbewijscategorie }}</td>
                    <td><button class="btn btn-warning">✏️</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection