@extends('layouts.app')
@section('content')
    <h1>afficher détail d'un employé</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nom:</th>
            <td>{{ $employe->nom }}</td>
        </tr>
        <tr>
            <th>Prénom:</th>
            <td>{{ $employe->prenom }}</td>
        </tr>
        <tr>
            <th>Société:</th>
            <td>{{ $employe->company }}</td>
        </tr>
        <tr>
            <th>Ville:</th>
            <td>{{ $employe->ville }}</td>
        </tr>
        <tr>
            <th>Salaire:</th>
            <td> {{ $employe->salaire }} DH</td>
        </tr>
    </table>
@endsection
