@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Request</b> Relief</h2></div>
                    <form class="form-horizontal" method="POST" action="/relief">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('name') }}" required autofocus placeholder="Address">
                          </div>

                        </div>

                        </div>

                        <div class="row" style="margin-left: 0px; margin-right: -57px;">
                          <div class="custom_field form-group col-sm-10">

                                  <select class="form-control" id="sel1" name="cat">
                                  <option>--Relief Item--</option>
                                  @foreach($cats as $cat)
                                    <option> {{$cat->catName}}</option>
                                  @endforeach
                                </select>
                            </div>

                          </div>

                        <div class="custom_field form-group">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-question-sign"></i>
                                <input id="reliefRequested" type="number" class="form-control" name="reliefRequested" required placeholder="No of Items Required">
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="margin-left:-3em;"type="submit" class="btn btn-primary custombtn">
                                    Save
                                </button>
                            </div>
                        </div> 


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
