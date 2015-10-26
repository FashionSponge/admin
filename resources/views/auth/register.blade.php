@extends('app')

@section('content')

  <div class="account-wrapper">
    @if (count($errors) > 0)
        <div class="alert alert-danger" style="text-align: left;">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="account-body">

      <h3>Get Started with a Free Account.</h3>

      <h5>Sign up in 30 seconds. No credit card required.</h5>

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
        <br>
          <input type="email" class="form-control" id="signup-email" placeholder="Your Email" tabindex="1" name="email" value="{{ old('email') }}">
        </div> <!-- /.form-group -->

        <div class="form-group">
          <input type="text" class="form-control" id="signup-fullname" placeholder="Your Name" tabindex="2" name="name" value="{{ old('name') }}">

        </div> <!-- /.form-group -->

        <div class="form-group">
          <input type="password" class="form-control" id="signup-password" placeholder="Password" tabindex="3" name="password" >

        </div> <!-- /.form-group -->

        <div class="form-group">
          <input type="password" class="form-control" id="signup-confirm-password" placeholder="Confirm Password" tabindex="4" name="password_confirmation">
        </div> <!-- /.form-group -->

        <div class="form-group">
          <label class="checkbox-inline">
          <input type="checkbox" class="" value="" tabindex="5"> I agree to the <a href="javascript:;" target="_blank">Terms of Service</a> &amp; <a href="javascript:;" target="_blank">Privacy Policy</a>
          </label>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="6">
          Create My Account &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>

    </div> <!-- /.account-body -->

    <div class="account-footer">
      <p>
      Already have an account? &nbsp;
      <a href="{{url('/')}}" class="">Login to your Account!</a>
      </p>
    </div> <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->

@endsection
