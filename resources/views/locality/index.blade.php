@extends('layouts.main')

@section('title', 'Liste des types d’artistes')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <ul class="list-group">
            @foreach($localities as $locality)
                <li class="list-group-item">
                    <a href="{{ route('locality.show', $locality->id) }}">{{ $locality->locality}}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection