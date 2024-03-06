@extends('layouts.main')

@section('title', 'Liste des location')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <ul class="list-group">
            @foreach($locations as $location)
            <li class="list-group-item"><a href="{{ route('location_show', $location->id) }}">{{ $location->designation }}</a>
                @if($location->website)
                - <a href="{{ $location->website }}">{{ $location->website }}</a>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
@endsection