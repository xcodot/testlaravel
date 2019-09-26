@extends('layout.main')

@section('pageTitle','Rooms')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="col-10">
        <h1>&nbsp;Rooms</h1>
        <table class="table table-striped">
            <thead>
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Room No</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $vRooms)
                <tr>
                    <th scope="row" align="right">{{$loop->iteration}}</th>
                    <td align="center">{{$vRooms->id}}</td>
                    <td align="center">{{$vRooms->roomtype}}</td>
                    <td align="center">{{$vRooms->status}}</td>
                    <td align="center">
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>

                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
