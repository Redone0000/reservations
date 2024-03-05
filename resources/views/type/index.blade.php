@extends('layouts.main')

@section('title', 'Liste des types d’artistes')

@section('content')
    <!-- <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($types as $type)
        <li><a href="{{ route('type.show', $type->id) }}">{{ $type->type}}</a></li>
    @endforeach
    </ul> -->
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <ul class="list-group">
            @foreach($types as $type)
                <li class="list-group-item">
                    <a href="{{ route('type.show', $type->id) }}">{{ $type->type }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
