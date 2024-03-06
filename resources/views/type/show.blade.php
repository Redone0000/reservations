@extends('layouts.main')

@section('title', 'Fiche d\'un type')

@section('content')
    <h1>{{ ucfirst($type->type) }}</h1>
    <h2>Liste des artistes</h2>
    <ul class="list-group">
    @foreach($type->artists as $artist)    
        <li class="list-group-item">{{ $artist->firstname }} {{ $artist->lastname }}</li>
    @endforeach
    </ul>
    <nav><a href="{{ route('type.index') }}">Retour à l'index</a></nav>
@endsection