<!-- resources/views/artist/index.blade.php -->

@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Liste des artistes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>{{ $artist->firstname }}</td>
                        <td>
                            <a href="{{ route('artist.show', $artist->id) }}">{{ $artist->lastname }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
