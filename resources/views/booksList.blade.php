@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">ReliefId</th>
          <th scope="col">Title</th>
          <th scope="col">Relief Item</th>
          <th scope="col">No of items required</th>
      </thead>
      <tbody>

        @foreach($books as $book)
        <tr>
          <td>{{$book->ReliefId}}</td>
          <td>{{$book->bookTitle}}</td>
          <td>{{$book->catName}}</td>
          <td>{{$book->totalAvail}}</td>

        </tr>
        @endforeach
  </div>
</div>


@endsection
