<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="_nK">
    <link rel="icon" href="{{ asset('asset-admin/assets/_con/images/icon.png') }}">

	<!-- <title>Con - Admin Dashboard with Material Design</title> -->
	<title>@yield('title')</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- nanoScroller -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/bower_components/nanoscroller/bin/css/nanoscroller.css') }}" />

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/bower_components/fontawesome/css/font-awesome.min.css') }}" />

    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/assets/material-design-icons/css/material-design-icons.min.css') }}" />

    <!-- IonIcons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/bower_components/ionicons/css/ionicons.min.css') }}" />

    <!-- WeatherIcons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/bower_components/weather-icons/css/weather-icons.min.css') }}" />


    
    <!-- Main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/assets/_con/css/con-base.css') }}" />

    <!--[if lt IE 9]>
        <script src="{{ asset('asset-admin/bower_components/html5shiv/dist/html5shiv.min.js') }}"></script>
    <![endif]-->


</head>

<!--
  Body
    Options:
      .boxed - boxed layout for content
-->

<body>

    <section id="sign-in">

        <!-- Background Bubbles -->
        <canvas id="bubble-canvas"></canvas>
        <!-- /Background Bubbles -->

        <!-- Sign In Form -->
        <form action="{{ route('/login-admin') }}" method="post">
            <div class="row links">
                <div class="col s6 logo">
                    <img src="assets/_con/images/logo-white.png" alt="">
                </div>
                <div class="col s6 right-align">
                    <strong>Sign In</strong> / <a href="page-sign-up.html">Sign Up</a></div>
            </div>

            <div class="card-panel clearfix">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif

                <div class="row">
                    <div class="col"></div>
                </div>


                {{ csrf_field() }}
                    <!-- Username -->
                    <div class="input-field">
                        <i class="fa fa-user prefix"></i>
                        <input id="username-input" name="usernameinput"type="text" class="validate" required>
                        <label for="username-input">Username</label>
                    </div>
                    <!-- /Username -->

                    <!-- Password -->
                    <div class="input-field">
                        <i class="fa fa-unlock-alt prefix"></i>
                        <input id="password-input" name="passwordinput" type="password" class="validate" required>
                        <label for="password-input">Password</label>
                    </div>
                    <!-- /Password -->

                    <div class="switch">
                        <label>
                            <input type="checkbox" checked />
                            <span class="lever"></span>
                            Remember
                        </label>
                    </div>

                    <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">Sign In</button>
                
            </div>

            <div class="links right-align">
                <a href="page-forgot-password.html">Forgot Password?</a>
            </div>

        </form>
        <!-- /Sign In Form -->

    </section>


    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- jQuery RAF (improved animation performance) -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js') }}"></script>

    <!-- nanoScroller -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js') }}"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/materialize/bin/materialize.js') }}"></script>


    

    <!-- Sortable -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/Sortable/Sortable.min.js') }}"></script>

    <!-- Main -->
    <script type="text/javascript" src="{{ asset('asset-admin/assets/_con/js/_con.js') }}"></script>

    <!-- Google Prettify -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/code-prettify/src/prettify.js') }}"></script>


</body>
</html>
