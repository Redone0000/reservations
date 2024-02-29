<!-- resources/views/artist/index.blade.php -->

@extends('layouts.app') 

@section('content')
    <h1>Liste des artistes</h1>

    @if(count($artists) > 0)
        <ul>
            @foreach($artists as $artist)
                <li>{{ $artist->id }}: {{ $artist->firstname }} {{ $artist->lastname}}</li>
            @endforeach
        </ul>
    @else
        <p>Aucun artiste trouvé.</p>
    @endif
@endsection
