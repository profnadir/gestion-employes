@extends('layouts.app')
@section('content')
    <h1>Ajouter un employé</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('employe') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>
        <div class="form-group mb-3">
            <label for="nom">Prénom :</label>
            <input type="text" class="form-control" id="prénom" placeholder="Entrez un prénom" name="prenom">
        </div>
        <div class="form-group mb-3">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Company" name="company">
        </div>
        <div class="form-group mb-3">
            <label for="Salaire">Salaire (DH):</label>
            <input type="number" class="form-control" id="Salaire" placeholder="Salaire" name="salaire">
        </div>
        <div class="form-group mb-3">
            <label for="detail">Ville:</label>
            <textarea class="form-control" id="Ville" name="ville" rows="10" placeholder="Adresse"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
