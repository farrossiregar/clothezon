
<html lang="en">

<head>
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



    <!-- nvd3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-admin/bower_components/nvd3/build/nv.d3.min.css') }}" />










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

    <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
    <nav class="navbar-top">
        <div class="nav-wrapper">

            <!-- Sidebar toggle -->
            <a href="#" class="yay-toggle">
                <div class="burg1"></div>
                <div class="burg2"></div>
                <div class="burg3"></div>
            </a>
            <!-- Sidebar toggle -->

            <!-- Logo -->
            <a href="index.html" class="brand-logo">
                <img src="{{ asset('asset-admin/assets/_con/images/logo.png') }}" alt="Con">
            </a>
            <!-- /Logo -->

            <!-- Menu -->
            <ul>
                <li>
                    <a href="#!" class="search-bar-toggle">
                        <i class="mdi-action-search"></i>
                    </a>
                </li>
                <li>
                    <a class="dropdown-button" data-activates="test-dropdown" href="#!">
                        <i class="mdi-communication-email"></i>
                        <span class="badge new">2</span>
                    </a>
                    <div id="test-dropdown" class="dropdown-content dropdown-media">
                        <div class="card-panel">

                            <div class="media-heading">Messages <a href="mail-compose.html"><i class="mdi-content-add-circle-outline"></i></a></div>

                            <div class="media-footer"><a href="mail-inbox.html"><i class="mdi-hardware-keyboard-control"></i></a></div>

                            <div class="row mt-0">
                                <div class="col s2">
                                    <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="" class="circle responsive-img">
                                </div>
                                <div class="col s10">
                                    <span class="media-date">9:02 AM</span>
                                    <a href="#" class="media-title">Dianne Chambers</a>
                                    <span>
                                        Ut feugiat tempus felis, sit amet mattis dolor accumsan quis...
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s2">
                                    <img src="{{ asset('asset-admin/assets/_con/images/user3.jpg') }}" alt="" class="circle responsive-img">
                                </div>
                                <div class="col s10">
                                    <span class="media-date">Dec 19</span>
                                    <a href="#" class="media-title">Joanne Stephens</a>
                                    <span>
                                        Proin suscipit lobortis porta. Interdum et malesuada fames ac ante ipsum primis in faucibus...
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="user">
                    <a class="dropdown-button" data-activates="user-dropdown" href="#!">
                        <img src="{{ asset('asset-admin/assets/_con/images/user.jpg') }}" alt="John Doe" class="circle"> John Doe <i class="mdi-navigation-expand-more right"></i>
                    </a>

                    <ul id="user-dropdown" class="dropdown-content">
                        <li>
                            <a href="page-profile.html">
                                <i class="fa fa-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="mail-inbox.html">
                                <i class="fa fa-envelope"></i> Messages
                                <span class="badge new">2 new</span>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fa fa-cogs"></i> Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="page-sign-in.html">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Menu -->

        </div>
    </nav>
    <!-- /Top Navbar -->

    <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
    <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

        <div class="top">
            <div>
                <!-- Sidebar toggle -->
                <a href="#" class="yay-toggle">
                    <div class="burg1"></div>
                    <div class="burg2"></div>
                    <div class="burg3"></div>
                </a>
                <!-- Sidebar toggle -->

                <!-- Logo -->
                <a href="#!" class="brand-logo">
                    <img src="{{ asset('asset-admin/assets/_con/images/logo-white.png') }}" alt="Con">
                </a>
                <!-- /Logo -->
            </div>
        </div>

        <div class="nano">
            @include('Layout-Admin.nav')
        </div>
    </aside>
    <!-- /Yay Sidebar -->

    <!-- Main Content -->
    
	
		@yield('section')

		
    <!-- /Main Content -->

    <!-- Search Bar -->
    <div class="search-bar">
        <div class="layer-overlay"></div>
        <div class="layer-content">
            <form action="#!">
                <!-- Header -->
                <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>

                <!-- Search Input -->
                <div class="input-field">
                    <i class="mdi-action-search prefix"></i>
                    <input type="text" name="con-search" placeholder="Search...">
                </div>

                <!-- Search Results -->
                <div class="search-results">

                    <div class="row">
                        <div class="col s12 l4">
                            <h4>Users</h4>

                            <div class="each-result">
                                <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="Felecia Castro" class="circle photo">
                                <div class="title">Felecia Castro</div>
                                <div class="label">Content Manager</div>
                            </div>

                            <div class="each-result">
                                <img src="{{ asset('asset-admin/assets/_con/images/user3.jpg') }}" alt="Max Brooks" class="circle photo">
                                <div class="title">Max Brooks</div>
                                <div class="label">Programmer</div>
                            </div>

                            <div class="each-result">
                                <img src="{{ asset('asset-admin/assets/_con/images/user4.jpg') }}" alt="Patsy Griffin" class="circle photo">
                                <div class="title">Patsy Griffin</div>
                                <div class="label">Support</div>
                            </div>

                            <div class="each-result">
                                <img src="{{ asset('asset-admin/assets/_con/images/user6.jpg') }}" alt="Vernon Garrett" class="circle photo">
                                <div class="title">Vernon Garrett</div>
                                <div class="label">Photographer</div>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <h4>Articles</h4>

                            <div class="each-result">
                                <div class="icon circle blue white-text">MD</div>
                                <div class="title">Material Design</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>

                            <div class="each-result">
                                <div class="icon circle teal white-text">
                                    <i class="fa fa-dashboard"></i>
                                </div>
                                <div class="title">Admin Dashboard</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>

                            <div class="each-result">
                                <div class="icon circle orange white-text">RD</div>
                                <div class="title">Responsive Design</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>

                            <div class="each-result">
                                <div class="icon circle red white-text">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="title">Mobile First</div>
                                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <h4>Posts</h4>

                            <div class="no-result">No results were found ;(</div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
    <!-- /Search Bar -->

    <!--
  Chat
    .chat-light - light color scheme
-->
    <div class="chat">
        <div class="layer-overlay"></div>

        <div class="layer-content">

            <!-- Contacts -->
            <div class="contacts">
                <!-- Top Bar -->
                <div class="topbar">
                    <a href="#!" class="text">Chat</a>
                    <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
                </div>
                <!-- /Top Bar -->

                <div class="nano">
                    <div class="nano-content">

                        <span class="label">Online</span>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="Felecia Castro" class="circle photo">

                            <div class="name">Felecia Castro</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user3.jpg') }}" alt="Max Brooks" class="circle photo">

                            <div class="name">Max Brooks</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user4.jpg') }}" alt="Patsy Griffin" class="circle photo">

                            <div class="name">Patsy Griffin</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user5.jpg') }}" alt="Chloe Morgan" class="circle photo">

                            <div class="name">Chloe Morgan</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="green-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user6.jpg') }}" alt="Vernon Garrett" class="circle photo">

                            <div class="name">Vernon Garrett</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="yellow-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user7.jpg') }}" alt="Greg Mcdonalid" class="circle photo">

                            <div class="name">Greg Mcdonalid</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="yellow-text fa fa-circle"></i></div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user8.jpg') }}" alt="Christian Jackson" class="circle photo">

                            <div class="name">Christian Jackson</div>
                            <div class="status">Lorem status</div>

                            <div class="online"><i class="yellow-text fa fa-circle"></i></div>
                        </div>


                        <span class="label">Offline</span>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user9.jpg') }}" alt="Willie Kelly" class="circle photo">

                            <div class="name">Willie Kelly</div>
                            <div class="status">Lorem status</div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user10.jpg') }}" alt="Jenny Phillips" class="circle photo">

                            <div class="name">Jenny Phillips</div>
                            <div class="status">Lorem status</div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user11.jpg') }}" alt="Darren Cunningham" class="circle photo">

                            <div class="name">Darren Cunningham</div>
                            <div class="status">Lorem status</div>
                        </div>

                        <div class="user">
                            <img src="{{ asset('asset-admin/assets/_con/images/user12.jpg') }}" alt="Sandra Cole" class="circle photo">

                            <div class="name">Sandra Cole</div>
                            <div class="status">Lorem status</div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Contacts -->

            <!-- Messages -->
            <div class="messages">

                <!-- Top Bar with back link -->
                <div class="topbar">
                    <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
                    <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Back</a>
                </div>
                <!-- /Top Bar with back link -->

                <!-- All messages list -->
                <div class="list">
                    <div class="nano scroll-bottom">
                        <div class="nano-content">

                            <div class="date">Monday, Feb 23, 8:23 pm</div>

                            <div class="from-me">
                                Hi, Felicia.
                                <br> How are you?
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> Hi! I am good!
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                Glad to see you :)
                                <br> This long text is intended to show how the chat will display it.
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> Also, we will send the longest word to show how it will fit in the chat window:
                                <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
                            </div>

                            <div class="date">Friday, Mar 10, 5:07 pm</div>

                            <div class="from-me">
                                Hi again!
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> Hi! Glad to see you.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                I want to add you in my Facebook.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                Can you give me your page?
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> I do not use Facebook. But you can follow me in Twitter.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                It's good idea!
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('asset-admin/assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> You can find me here - <a href="https://twitter.com/nkdevv">https://twitter.com/nkdevv</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /All messages list -->

                <!-- Send message -->
                <div class="send">
                    <form action="#!">
                        <div class="input-field">
                            <input id="chat-message" type="text" name="chat-message">
                        </div>

                        <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i></button>
                    </form>
                </div>
                <!-- /Send message -->

            </div>
            <!-- /Messages -->
        </div>

    </div>
    <!-- /Chat -->
    <footer>&copy; 2015
        <strong>nK</strong>. All rights reserved. <a href="http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=_nK">Purchase</a></footer>

    <!-- DEMO [REMOVE IT ON PRODUCTION] -->
    <script type="text/javascript" src="{{ asset('asset-admin/assets/_con/js/_demo.js') }}"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- jQuery RAF (improved animation performance) -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js') }}"></script>

    <!-- nanoScroller -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js') }}"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/materialize/bin/materialize.js') }}"></script>

    <!-- Simple Weather -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>





    <!-- d3 -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/d3/d3.min.js') }}"></script>

    <!-- nvd3 -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/nvd3/build/nv.d3.min.js') }}"></script>










    <!-- Sortable -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/Sortable/Sortable.min.js') }}"></script>

    <!-- Main -->
    <script type="text/javascript" src="{{ asset('asset-admin/assets/_con/js/_con.js') }}"></script>

    <!-- Google Prettify -->
    <script type="text/javascript" src="{{ asset('asset-admin/bower_components/code-prettify/src/prettify.js') }}"></script>


    <script>
    /*
     * Stacked Bar Chart
     */
    (function() {
        nv.addGraph(function() {
            var chart = nv.models.multiBarChart()
                .color(["#64B5F6", "#42A5F5"])
                .margin({
                    left: 20,
                    bottom: 20,
                    right: 20
                })
                .reduceXTicks(true) //If 'false', every single x-axis tick label will be rendered.
                .rotateLabels(0) //Angle to rotate x-axis labels.
                .showControls(true) //Allow user to switch between 'Grouped' and 'Stacked' mode.
                .groupSpacing(0.1) //Distance between each group of bars.
            ;

            chart.xAxis
                .tickFormat(d3.format(',f'));

            chart.yAxis
                .tickFormat(d3.format(',.1f'));

            d3.select('#chart1').append('svg')
                .datum(exampleData())
                .call(chart);

            return chart;
        });


        /* Inspired by Lee Byron's test data generator. */
        function stream_layers(n, m, o) {
            if (arguments.length < 3) o = 0;

            function bump(a) {
                var x = 1 / (.1 + Math.random()),
                    y = 2 * Math.random() - .5,
                    z = 10 / (.1 + Math.random());
                for (var i = 0; i < m; i++) {
                    var w = (i / m - y) * z;
                    a[i] += x * Math.exp(-w * w);
                }
            }
            return d3.range(n).map(function() {
                var a = [],
                    i;
                for (i = 0; i < m; i++) a[i] = o + o * Math.random();
                for (i = 0; i < 5; i++) bump(a);
                return a.map(stream_index);
            });
        }

        function stream_index(d, i) {
            return {
                x: i,
                y: Math.max(0, d)
            };
        }


        //Generate some nice data.
        function exampleData() {
            return stream_layers(2, 30, 50).map(function(data, i) {
                return {
                    key: i ? 'Visitors' : 'New Posts',
                    values: data
                };
            });
        }
    }());



    /*
     * Stacked Area Chart
     */
    (function() {
        /*Data sample:
        { 
              "key" : "North America" , 
              "values" : [ [ 1025409600000 , 23.041422681023] , [ 1028088000000 , 19.854291255832],
               [ 1030766400000 , 21.02286281168], 
               [ 1033358400000 , 22.093608385173],
               [ 1036040400000 , 25.108079299458],
               [ 1038632400000 , 26.982389242348]
               ...

        */
        d3.js') }}on('assets/_con/nvd3/stackedAreaData.js') }}on', function(data) {
            nv.addGraph(function() {
                var chart = nv.models.stackedAreaChart()
                    .margin({
                        bottom: 20
                    })
                    .color(["#E27272", "#64B5F6", "#FFD83C", "#81C784"])
                    .margin({
                        right: 40,
                        left: 40
                    })
                    .x(function(d) {
                        return d[0]
                    }) //We can modify the data accessor functions...
                    .y(function(d) {
                        return d[1]
                    }) //...in case your data is formatted differently.
                    .useInteractiveGuideline(true) //Tooltips which show all data points. Very nice!
                    .rightAlignYAxis(true) //Let's move the y-axis to the right side.
                    .showControls(true) //Allow user to choose 'Stacked', 'Stream', 'Expanded' mode.
                    .clipEdge(true);

                //Format x-axis labels with custom function.
                chart.xAxis
                    .tickFormat(function(d) {
                        return d3.time.format('%x')(new Date(d))
                    });

                chart.yAxis
                    .tickFormat(d3.format(',.2f'));

                d3.select('#chart2').append('svg')
                    .datum(data)
                    .call(chart);

                nv.utils.windowResize(chart.update);

                return chart;
            });
        })
    }());


    /*
     * Pie Chart
     */
    (function() {
        //Donut chart example
        nv.addGraph(function() {
            var chart = nv.models.pieChart()
                .color(["#E27272", "#64B5F6", "#FFD83C", "#81C784"])
                .x(function(d) {
                    return d.label
                })
                .y(function(d) {
                    return d.value
                })
                .showLabels(true) //Display pie labels
                .labelThreshold(.05) //Configure the minimum slice size for labels to show up
                .labelType("percent") //Configure what type of data to show in the label. Can be "key", "value" or "percent"
                .donutRatio(0.35) //Configure how big you want the donut hole size to be.
            ;

            d3.select('#chart4').append('svg')
                .datum(exampleData())
                .transition().duration(350)
                .call(chart);

            return chart;
        });

        //Pie chart example data. Note how there is only a single array of key-value pairs.
        function exampleData() {
            return [{
                "label": "India",
                "value": 29.765957771107
            }, {
                "label": "USA",
                "value": 13.4783623743534
            }, {
                "label": "Russia",
                "value": 32.807804682612
            }, {
                "label": "Turkey",
                "value": 56.45946739256
            }];
        }
    }());


    // setTimeout(function() {
    //   toast('Welcome to Con!', 2000);
    // }, 1000);
    </script>

</body>

</html>