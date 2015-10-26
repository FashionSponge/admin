@extends('app')

@section('content')

<br><br>
  <div class="account-wrapper">

    @if (count($errors) > 0)
        <div class="alert alert-danger" style="text-align: left">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="account-body">
      <h3>Welcome back to MVP Ready.</h3>

      <h5>Please sign in to get access.</h5>

      <form class="form account-form" role="form" method="POST" action="{{ url('/auth/login') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Username</label>
          <input type="email" class="form-control" id="login-username" placeholder="Username" tabindex="1"  name="email" value="{{ old('email') }}">
        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="2" name="password">
        </div> <!-- /.form-group -->

        <div class="form-group clearfix">
          <div class="pull-left">
            <label class="checkbox-inline">
            <input type="checkbox" class="" value="" tabindex="3"  name="remember" > <small>Remember me</small>
            </label>
          </div>

          <div class="pull-right">
            <small><a href="{{ url('/password/email') }}">Forgot Password?</a></small>
          </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
            Signin &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>


    </div> <!-- /.account-body -->

    <div class="account-footer">
      <p>
      Don't have an account? &nbsp;
      <a href="{{ url('/register') }}" class="">Create an Account!</a>
      </p>
    </div> <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->

@endsection
