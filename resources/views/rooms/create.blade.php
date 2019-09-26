@extends('layout.main')

@section('pageTitle','Add Room')

@section('container')
<div class="container">
  <div class="row">
    <div class="col">
      <div class="col-5">
        <h1>Add Room</h1>

        <form method="post" action="/rooms">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="roomtype">Room Type</label>
                    <input type="text" class="form-control @error('roomtype') is-invalid @enderror" id="roomtype" placeholder="Room Type" name="roomtype" value="{{old('roomtype')}}">
                    @error('roomtype')
                        <div class="invalid-feedback">{{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="status">Available</label>
                    <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                        <option selected value="">Choose...</option>
                        <option value="0">YES</option>
                        <option value="1">NO</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
