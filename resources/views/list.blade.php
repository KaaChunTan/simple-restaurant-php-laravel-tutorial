@extends('layout')

@section('content')

<h1>Restaurant list page will be here</h1>
@if(Session::get('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->email}}</td>
      <td>
          <a href="/delete/{{$item->id}}">Delete</a>
          <span><a href="/edit/{{$item->id}}">Edit</a></span> 
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>



@stop