@extends('layouts.app')

@section('content')

<div class="card-body">
    <h1 class="card-title">Nome: {{ $monster->name }}</h1>
    <h2 class="card-text">Lingua: {{ $monster->languages }}</h2>
    <h2 class="card-text">Tipo: {{ $monster->type }}</h2>
    <h2 class="card-text">Orientamento / Allineamento:{{ $monster->alignment }}</h2>
    <h2 class="card-text">Classe armatura: {{ $monster->armor_class }}</h2>
    <h2 class="card-text">Punti vita: {{ $monster->hit_points }}</h2>
    <h2 class="card-text">Stazza: {{ $monster->size }}</h2>
    <h2 class="card-text">Forza: {{ $monster->strength }}</h2>
    <h2 class="card-text">Destrezza: {{ $monster->dexterity }}</h2>
    <h2 class="card-text">Costituzione: {{ $monster->constitution }}</h2>
    <h2 class="card-text">Intelligenza: {{ $monster->intelligence }}</h2>
    <h2 class="card-text">Saggezza: {{ $monster->wisdom }}</h2>
    <h2 class="card-text">Carisma: {{ $monster->charisma }}</h2>
    <h2 class="card-text">Punti exp se sconfitto: {{ $monster->xp }}</h2>
    <h2 class="card-text">Punteggio difficoltà: {{ $monster->challenge_rating }}</h2>
    <h2 class="card-text">Qualcosa che non so: {{ $monster->hit_dice }}</h2>
    
    <form action="{{ route('admin.monsters.edit', $monster->id)}}">
        <button class="btn btn-primary">MODIFICA</button>
    </form>
    
    <form action="{{ route('admin.monsters.destroy', $monster->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">CANCELLA</button>
    </form>
</div>

@endsection