@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Liste des employés</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('employe/create') }}">Ajouter</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Company</th>
            <th>Ville</th>
            <th>Salaire</th>
            <th>Actions</th>
        </tr>
        @foreach ($employes as $index => $employe)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $employe->nom }}</td>
                <td>{{ $employe->prenom }}</td>
                <td>{{ $employe->company }}</td>
                <td>{{ $employe->ville }}</td>
                <td>{{ $employe->salaire }}</td>
                <td>
                    <form action="{{ url('employe/' . $employe->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <a class="btn btn-info" href="{{ url('employe/' . $employe->id) }}">Voir</a>
                    <a class="btn btn-primary" href="{{ url('employe/' . $employe->id . '/edit') }}">Modifier</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
