@extends('layouts.main')

@section('title', 'Liste des types d’artistes')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>
        <div class="mb-3">
            <a href="{{ route('role.create') }}" class="btn btn-primary">Ajouter</a>
        </div>
        <ul class="list-group">
            @foreach($roles as $role)
                <li class="list-group-item">
                    <a href="{{ route('role.show', $role->id) }}">{{ $role->role}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection