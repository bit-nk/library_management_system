@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Members List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach($members as $mem)
        <tr>
          <td>{{$mem->reqId}}</td>
          <td>{{$mem->memName}}</td>
          <td>{{$mem->email}}</td>
          <td>{{$mem->contact}}</td>
          <td>{{$mem->address}}</td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
