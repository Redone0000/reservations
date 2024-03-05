@extends('layouts.main')

@section('title', 'Liste des types d’artistes')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <ul class="list-group">
            @foreach($roles as $role)
                <li class="list-group-item">
                    <a href="{{ route('role.show', $role->id) }}">{{ $role->role}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection