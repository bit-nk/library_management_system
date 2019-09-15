<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Become</b> a Donor</h2></div>
                    <form class="form-horizontal" method="POST" action="/addMembers">

                      {{ csrf_field() }}

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-user"></i>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
                          </div>

                        </div>

                        <div class=" custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                          </div>

                        </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-earphone"></i>
                                <input id="contact_no" type="text" class="form-control" name="contact"   required placeholder="Contact">
                          </div>
                        </div>


                        <div class="custom_field form-group">
                          <div class="inner-addon right-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                                <input id="address" type="text" class="form-control" name="address"  required placeholder="Address">
                          </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="margin-left:-3em;" type="submit" class="btn btn-primary custombtn">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</script>
@endsection
