@extends('layout.main')

@section('pageTitle','Rooms')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="col-5">
        <h1>&nbsp;Rooms</h1>

        <a href="/rooms/create" class="btn btn-primary my-3">Add Room</a>
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
        @endif

        <ul class="list-group">

          @foreach ($rooms as $room)
            
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Room&nbsp;{{ $room->id }}
            <a href="/rooms/{{$room->id}}" class="badge badge-info">detail</a>
            </li>
          
            @endforeach

        </ul>

      </div>
    </div>
  </div>
</div>
@endsection
