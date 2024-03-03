@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <div class="container">
        @if($artist)
            <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>
            <div><a href="{{ route('artist.edit' ,$artist->id) }}" >Modifier</a></div>
            <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
        @else
            <p>Aucun artiste trouvé.</p>
            <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
        @endif
    </div>
@endsection

