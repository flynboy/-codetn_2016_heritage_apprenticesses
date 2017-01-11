@extends('layouts.loginn')
<style></style>
@section('content')
<div class="row-md-4" style="background-color:white;">
  <div class="container">
    <div class="row">
  <!--Left border?-->
      <div class="col-md-2" style="background-color: #a7e8c6; height:100%; position:fixed; top:0; left:0; margin:0 0 0 0;"></div>
  <!--Content DIV-->
      <div class="col-md-8 col-offset-8" style="background-color:white; margin-left:16%;" >
        <h1 style="text-align:center; font-size: 8em; color:#88bea2;">Hello</h1>
        <div class="col-md-8 col-md-offset-2" style="position:relative;">
          <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                                                                                 
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label"></label>
 
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="School E-Mail Address" autofocus="true" style="display:inline-block margin-left: auto; mar">

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
                <input type="password" class="form-control" placeholder="Password" name="password">

                    @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember"> Remember Me
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-sign-in"></i> Login
                    </button>
                     <a href="{{ secure_url('/register') }}" class="btn btn-default navbar-btn"><i class="fa fa-btn fa-user"></i> Register</a>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div><br/><br/><br/><br/><br/><br/><br/><br/><br/></br><br/><br/><br/><br/><br/>
        <div style="postion:relative">
         <h1 style="text-align:center; font-size: 2em; color:#666666; padding:10px;">If you are a returning user, go ahead and log in! <br> If you are new to Hooked, please click the "Register" button to get signed up!</h1>
        </div>
      </div>
  <!--Right border?-->
      <div class="col-md-2" style="background-color: #a7e8c6; height:100%; position:fixed; top:0; right:0; margin:0 0 0 0;"></div>
    </div>
  </div>
</div>
@endsection
