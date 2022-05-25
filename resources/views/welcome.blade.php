@extends('layouts.app')

{{-- @extends('title') --}}

@section('content')
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <div class="mx-auto" style="width: 200px;">
        <a href="{{ route('admin.monsters.index')}}">Vai alla sezione Monsters</a><br>
        <a href="{{ route('admin.monsters.create')}}">Crea un mostro</a>
    </div>

@endsection

