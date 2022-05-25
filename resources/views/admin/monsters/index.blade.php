@extends('layouts.app')

@section('content')
    

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">NAME</th>
            <th scope="col">TYPE</th>
            <th scope="col">ORIENTAMENTO</th>
            <th scope="col">STAZZA</th>
            <th scope="col">DANNO</th>
            <th scope="col">ACTIONS</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($data as $item)
          {{-- <a href="{{ route('admin.monsters.show', $item->id)}}"> --}}
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td class="col-1">{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->alignment }}</td>
                <td>{{ $item->size }}</td>
                <td>{{ $item->hit_dice }}</td>
                <td>
                    <a class="btn btn-info" id="show-a" href="{{ route('admin.monsters.show', $item->id)}}">VIEW</a>
                </td>
              </tr>
          @endforeach
        </tbody>
    </table>


@endsection

