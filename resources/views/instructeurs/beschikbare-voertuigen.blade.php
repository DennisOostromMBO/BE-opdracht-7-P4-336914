@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Beschikbare voertuigen</h1>
    <p>Voor instructeur: {{ $instructeur->voornaam }} {{ $instructeur->tussenvoegsel }} {{ $instructeur->achternaam }}</p>
    
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Type Voertuig</th>
                <th>Type</th>
                <th>Kenteken</th>
                <th>Bouwjaar</th>
                <th>Brandstof</th>
                <th>Rijbewijscategorie</th>
                <th>Toevoegen</th>
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
                    <td>
                        <form action="{{ route('voertuigen.assign', ['id' => $instructeur->id, 'voertuig' => $voertuig->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">➕ Toevoegen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('instructeurs.voertuigen', $instructeur->id) }}" class="btn btn-primary">Terug</a>
</div>
@endsection
