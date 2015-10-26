<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Ad Portal</title>

<!-- Google Font: Open Sans -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{asset('public/bower_components/fontawesome/css/font-awesome.min.css')}}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('public/bower_components/vegas/dist/jquery.vegas.min.css')}}">

<link rel="stylesheet" href="{{asset('public/css/mvpready-launch.css')}}">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="favicon.ico">
</head>

<body class="">

<div class="mask">
  <i class="fa fa-spinner fa-spin mask-loader"></i>
</div>

<div class="countdown-wrapper">

  <header><img src="{{asset('public/img/logo.png')}}" alt="Spatial coming soon template"></header>

  <main>

    <div class="content">

      <div class="intro">
        <h2>
          Our Website Is Almost Ready. Stay Tuned! 
        </h2>

        <h4 class="">Please don't forget to <a href="javascript:;">check out our tweets</a> and to subscribe to be notified!</h4>
      </div>

      <div class="counter">

        <h3 class="text-primary">We are Coming Soon</h3>

        <ul class="countdown list-inline">
          <li>
            <span class="days">00</span>
            <span class="days_ref">days</span>
          </li>
          <li>
            <span class="hours">00</span>
            <span class="hours_ref">hours</span>
          </li>
          <li>
            <span class="minutes">00</span>
            <span class="minutes_ref">minutes</span>
          </li>
          <li>
            <span class="seconds">00</span>
            <span class="seconds_ref">seconds</span>
          </li>
        </ul>

      </div> <!-- /.counter -->

    </div> <!-- /.content -->
      
    <form role="form" class="newsletter" method="post" action="./">
      <h3 class="">We'll let you know when we launch!</h3>

       <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Email Address" required="" value="" name="email_address" id="email_address">
        <span class="input-group-btn">
        <button type="submit" class="btn btn-primary" value="Subscribe" name="subscribe" disabled>Submit</button>
        </span> 
      </div>
    </form> <!-- /.newsletter-form -->

  </main>

  <footer>
    <ul class="list-inline">
      <li>
        <a href="http://facebook.com" class="ui-tooltip" title="Facebook" data-placement="bottom" target="_blank">
          <i class="fa fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="http://twitter.com" class="ui-tooltip" title="Twitter" data-placement="bottom" target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="http://linkedin.com" class="ui-tooltip" title="LinkedIn" data-placement="bottom" target="_blank">
          <i class="fa fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </footer>

</div> <!-- /.wrapper -->

<!-- Core JS -->
<script src="{{asset('public/bower_components/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/bower_components/vegas/dist/jquery.vegas.min.js')}}"></script>
<script src="{{asset('public/bower_components/downcount/jquery.downCount.js')}}"></script>

<script src="{{asset('public/global/js/mvpready-core.js')}}"></script>
<script src="{{asset('public/global/js/mvpready-helpers.js')}}"></script>
<script src="{{asset('public/js/mvpready-launch.js')}}"></script>

</body>
</html>