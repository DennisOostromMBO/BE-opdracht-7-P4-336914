@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Instructeurs in dienst</h1>
    <p>Aantal instructeurs: {{ count($instructeurs) }}</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Mobiel</th>
                <th>Datum in dienst</th>
                <th>Aantal sterren</th>
                <th>Voertuigen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instructeurs as $instructeur)
                <tr>
                    <td>{{ $instructeur->naam }}</td>
                    <td>{{ $instructeur->mobiel }}</td>
                    <td>{{ $instructeur->datum_in_dienst }}</td>
                    <td>{{ $instructeur->aantal_sterren }}</td>
                    <td>
                        <a href="{{ route('instructeurs.voertuigen', $instructeur->id) }}">🚗</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
