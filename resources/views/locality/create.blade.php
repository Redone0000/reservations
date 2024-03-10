@extends('layouts.main')

@section('title', 'Ajouter une localité')

@section('content')
    <h2>Ajouter une localité</h2>

    <form action="{{ route('locality.store') }}" method="post">
        @csrf
        <div>
            <label for="postal_code">Code postal</label>
            <input type="text" id="postal_code" name="postal_code" 
	       @if(old('postal_code'))
                value="{{ old('postal_code') }}" 
            @endif
	           class="@error('postal_code') is-invalid @enderror">

	@error('postal_code')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>
        
        <div>
            <label for="locality">Localité</label>
            <input type="text" id="locality" name="locality" 
	       @if(old('locality'))
                value="{{ old('locality') }}" 
            @endif
	           class="@error('locality') is-invalid @enderror">

	@error('locality')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>


        <button>Ajouter</button>
   <a href="{{ route('locality.index') }}">Annuler</a>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav><a href="{{ route('locality.index') }}">Retour à l'index</a></nav>
@endsection
