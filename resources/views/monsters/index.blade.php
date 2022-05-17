<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div>
    <a href="{{ route('monsters.create')}}">Crea un mostro</a>

    <div>
        @foreach ($data as $item)
        <a class="d-block p-2 bg-dark text-white" href="{{ route('monsters.show', $item->id)}}">{{ $item->name }}</a>
        @endforeach
    </div>
</div>
