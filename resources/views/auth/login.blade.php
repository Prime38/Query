<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Query</title>

    <!-- core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
 <header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/questions') }}">Questions</a></li>
                    <li><a href="{{ url('/') }}/users">Users</a></li>
                    <li><a href="{{ url('/') }}/badges">Badges</a></li>
                  
                        <li class="actve"><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                       
                </ul>
            </div>

        </div><!--/.container-->
    </nav><!--/nav-->
    
</header><!--/header-->


<div class="container">
    <div class="status alert alert-success" style="display: none"></div>
    <div class="center">
        <h4>Log in</h4>
        <p>Enjoy the full privilege of your favourite web application.</p>
    </div> 
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <!--================ this is doing nothing ==============-->
                <div class="panel-heading"></div>
                <div class="panel-heading"></div>
                <!--================ this is doing nothing ==============-->

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            </div>

                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>

                    <!--================ this is doing nothing ==============-->
                    <div class="panel-body"></div>
                    <div class="panel-body"></div>
                    <!--================ this is doing nothing ==============-->

                </div>
            </div>
        </div>
    </div>
</div>

@include('part.bottom')