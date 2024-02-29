@extends('layouts.app')
@section('content')
    <h1>Modifier employé</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ url('employe/' . $employe->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group mb-3">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom"
                value="{{ old('nom',$employe->nom) }}">
        </div>
        <div class="form-group mb-3">
            <label for="prenom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" placeholder="Entrer prénom" name="prenom"
                value="{{ old('prenom',$employe->prenom) }}">
        </div>
        <div class="form-group mb-3">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Entrer Company" name="company"
                value="{{ old('company',$employe->company) }}">
        </div>
        <div class="form-group mb-3">
            <label for="salaire">SALAIRE (DH):</label>
            <input type="number" class="form-control" id="salaire" placeholder="salaire" name="salaire"
                value="{{ old('salaire',$employe->salaire) }}">
        </div>
        <div class="form-group mb-3">
            <label for="ville">Adresse:</label>
            <textarea class="form-control" id="ville" name="ville" rows="10" placeholder="ville">{{ old('ville',$employe->ville) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
