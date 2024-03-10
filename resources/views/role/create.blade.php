@extends('layouts.main')

@section('title', 'Ajouter un role')

@section('content')
    <h2>Ajouter un role</h2>

    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <div>
            <label for="role">Role</label>
            <input type="text" id="role" name="role" 
	       @if(old('role'))
                value="{{ old('role') }}" 
            @endif
	           class="@error('role') is-invalid @enderror">

	@error('role')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>


        <button>Ajouter</button>
   <a href="{{ route('role.index') }}">Annuler</a>
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

    <nav><a href="{{ route('role.index') }}">Retour à l'index</a></nav>
@endsection
