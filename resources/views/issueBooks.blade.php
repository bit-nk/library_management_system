@extends('layouts.master')

@section('content')
<body class="hideov">
<div class="row">
  <form class="" action="/issueBooks" method="post">
    {{ csrf_field() }}
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading"></div>
      <div class="panel-body">
        <div class="form-group">
          <label for="RequestId">Request Amount</label>
          <input type="text" class="form-control"name="RequestId" value="" id="bookName" required placeholder="Member ID">
        </div>
        <div class="form-group">
          <label for="bookName">Address</label>
          <input type="text" class="form-control"name="bookName" value="" id="bookName" required placeholder="Book Name">
        </div>
        <div class="form-group">
          <label for="itemName">Item Name</label>
          <input type="text" class="form-control"name="itemName" value="" id="itemName" required placeholder="Item Name">
        </div>
        <div class="form-group">
          <label for="requestDate">Request Date</label>
        <input type="date" class="form-control" name="requestDate" required id="requestDate">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary custombtn" name="button">Issue Books</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  </form>


@endsection
</body>
