@extends('layout.main')

@section('pageTitle','Customers')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="col-10">
        <h1>&nbsp;Customers</h1>
        <table class="table table-sm table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $vCust)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$vCust->name}}</td>
                    <td>{{$vCust->phone}}</td>
                    <td>{{$vCust->email}}</td>
                    <td>
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
