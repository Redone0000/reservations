@extends('layouts.main')

@section('title', 'Fiche d\'un type')

@section('content')
    <h1>{{ ucfirst($role->role) }}</h1>
    <div><a href="{{ route('role.edit' ,$role->id) }}" >Modifier</a></div>
    <nav><a href="{{ route('role.index') }}">Retour à l'index</a></nav>
@endsection
