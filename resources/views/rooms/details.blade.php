@extends('layout.main')

@section('pageTitle','Rooms')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="col-5">
        <h1>Rooms</h1>
        <?php
            $vStatus = $room->status == '0' ? "YES" : "NO";
        ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">No &nbsp;{{$room->id}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Type :&nbsp;{{$room->roomtype}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Available :&nbsp;{{$vStatus}}</h6>
                <p class="card-text">The Room are </p>
                <button type="submit" class="btn btn-primary">Edit</button>
                <form action="{{$room->id}}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="delete" class="btn btn-danger" >Delete</button>
                </form>
                <a href="/rooms" class="card-link">Kembali</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
