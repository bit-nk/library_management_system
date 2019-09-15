@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Request Amount</th>
          <th scope="col">Request Date</th>
          <th scope="col">Address</th>
          <th scope="col">Item Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($books as $book)
          <td>{{$book->issueId}}</td>
          <td>{{$book->requestDate}}</td>
          <td>{{$book->itemName}}</td>
          <td>{{$book->reqId}}</td>
          <td> <a  class="btn btn-danger"href="#">Edit</a> </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
