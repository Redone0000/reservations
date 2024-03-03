@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <div class="container">
        @if($artist)
            <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>
            <nav><a href="{{ route('artists.index') }}">Retour à l'index</a></nav>
        @else
            <p>Aucun artiste trouvé.</p>
            <nav><a href="{{ route('artists.index') }}">Retour à l'index</a></nav>
        @endif
    </div>
@endsection

