@extends('layouts.registerr')

@section('content')
<style>
  .btn-primary {
    background-color: #dbbd9b;
    border-color: #dbbd9b;
  }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #dbbd9b;
    border-color: #dbbd9b; }
  .btn-primary:hover {
    color: #fff;
    background-color: #ccb192;/*MAKE SLIGHTLY DARKER FOR HOVER EFFECT*/
    border-color: #ccb192; }/*MAKE SLIGHTLY DARKER FOR HOVER EFFECT*/
  .btn-primary:active, .btn-primary.active,
  .open > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #dbbd9b;
    border-color: #dbbd9b; }
</style>
<div class="row-md-4" style="background-color:white;">
  <div class="container">
      <div class="row">
        <div class="col-md-2" style="background-color: #f7d5af; height:100%; position:fixed; top:0; left:0; margin:0 0 0 0;"></div>
        <div class="col-md-8" style="background-color: white; top:0; position:fixed; top:0; left:16.68%;">
  <h1 style="text-align:center; color: #dbbd9b; font-size: 8em;">Welcome</h1>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label"></label>

              <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" autofocus="true">

                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label"></label>

              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="School E-mail">

                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label"></label>

              <div class="col-md-6">
                <input type="password" class="form-control" name="password" placeholder="Password">

                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label"></label>

              <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">

                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i> Register
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <h1 style="font-sixe: 2em; text-align:center; color: #dbbd9b; padding-left: 10px; padding-right: 10px;">Please enter some basic information to <br/> get started with HOOKED.</h1>
</div>
        <div class="col-md-2" style="background-color: #f7d5af; height:100%; position:fixed; top:0; right:0; margin:0 0 0 0;"></div>
      </div>
  </div>
</div>
@endsection
