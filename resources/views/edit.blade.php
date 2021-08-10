@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Edit Restaurant</h1>
    <form method='post' action='/update'>
        @csrf
        <div class="form-group">
            <input type="hidden" name='id' class="form-control" value="{{$data->id}}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label >Name</label>
            <input type="text" name='name' class="form-control" value="{{$data->name}}" placeholder="Enter name">
            <br>
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" name='email' class="form-control" value="{{$data->email}}" placeholder="Enter email">
            <br>
        </div>
        <div class="form-group">
            <label >Address</label>
            <input type="text" name='address' class="form-control" value="{{$data->address}}" placeholder="Enter address">
            <br>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop