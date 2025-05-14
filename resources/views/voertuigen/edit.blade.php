<!-- filepath: c:\Users\denni\Herd\be-opdracht-07\resources\views\voertuigen\edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Wijzigen voertuiggegevens</h1>
    @if(isset($voertuig->instructeur_id))
        <form action="{{ route('voertuigen.update', ['id' => $voertuig->instructeur_id, 'voertuig' => $voertuig->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="instructeur_id" value="{{ $voertuig->instructeur_id }}">
            <div class="mb-3">
                <label for="type_voertuig_id" class="form-label">Type Voertuig</label>
                <select name="type_voertuig_id" id="type_voertuig_id" class="form-select">
                    @foreach ($typeVoertuigen as $typeVoertuig)
                        <option value="{{ $typeVoertuig->id }}" {{ $typeVoertuig->id == $voertuig->type_voertuig_id ? 'selected' : '' }}>
                            {{ $typeVoertuig->type_voertuig }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $voertuig->type }}">
            </div>
            <div class="mb-3">
                <label for="bouwjaar" class="form-label">Bouwjaar</label>
                <input type="date" name="bouwjaar" id="bouwjaar" class="form-control" value="{{ $voertuig->bouwjaar }}">
            </div>
            <div class="mb-3">
                <label for="brandstof" class="form-label">Brandstof</label>
                <div>
                    <label><input type="radio" name="brandstof" value="Diesel" {{ $voertuig->brandstof == 'Diesel' ? 'checked' : '' }}> Diesel</label>
                    <label><input type="radio" name="brandstof" value="Benzine" {{ $voertuig->brandstof == 'Benzine' ? 'checked' : '' }}> Benzine</label>
                    <label><input type="radio" name="brandstof" value="Elektrisch" {{ $voertuig->brandstof == 'Elektrisch' ? 'checked' : '' }}> Elektrisch</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="kenteken" class="form-label">Kenteken</label>
                <input type="text" name="kenteken" id="kenteken" class="form-control" value="{{ $voertuig->kenteken }}">
            </div>
            <button type="submit" class="btn btn-primary">Wijzig</button>
        </form>
    @else
        <p>Instructeur ID ontbreekt. Controleer of het voertuig correct is gekoppeld aan een instructeur.</p>
    @endif
</div>
@endsection