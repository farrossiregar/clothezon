@extends('Layout-Admin.app')

@section('title', 'Dashboard Admin')

@section('content')
        
        <!-- Breadcrumb -->
        <div class="page-title">

            <div class="row">
                <div class="col s12 m9 l10">
                    <h1>Dashboard v1</h1>

                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-home"></i> Home</a> /
                        </li>

                        <li>
                            <a href="#">Category</a> /
                        </li>

                        <li>
                            <a href='dashboard-v1.html'>Dashboard v1</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m3 l2 right-align">
                    <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
                </div>
            </div>

        </div>
        <!-- /Breadcrumb -->

        <!-- Stats Panels -->
        <div class="row sortable">
            <div class="col l3 m6 s12">
                <a href="#" class="card-panel stats-card red lighten-2 red-text text-lighten-5">
                    <i class="fa fa-comments-o"></i>
                    <span class="count">145</span>
                    <div class="name">Feedbacks</div>
                </a>
            </div>
            <div class="col l3 m6 s12">
                <a href="#" class="card-panel stats-card blue lighten-2 blue-text text-lighten-5">
                    <i class="fa fa-send"></i>
                    <span class="count">342</span>
                    <div class="name">Posts</div>
                </a>
            </div>
            <div class="col l3 m6 s12">
                <a href="#" class="card-panel stats-card amber lighten-2 amber-text text-lighten-5">
                    <i class="fa fa-cloud-upload"></i>
                    <span class="count">58</span>
                    <div class="name">Uploads</div>
                </a>
            </div>
            <div class="col l3 m6 s12">
                <div class="card-panel stats-card green lighten-2 green-text text-lighten-5">
                    <i class="fa fa-spinner"></i>
                    <span class="count">37%</span>
                    <div class="name">Server Load</div>
                </div>
            </div>
        </div>
        <!-- /Stats Panels -->

        <div class="row sortable">
            <!-- Weather -->
            <div class="col l4 s12">
                <div class="card-panel weather-card blue-grey lighten-2 white-text">
                    <p class="center"><i class="fa fa-spinner fa-pulse"></i> Weather</p>
                </div>
            </div>
            <!-- /Weather -->

            <!-- Chart with Visits -->
            <div class="col l8 s12">
                <div class="card-panel" id="chart1" style="height: 191px;"></div>
            </div>
            <!-- /Chart with Visits -->
        </div>

        <div class="row sortable">
            <!-- Orders Card -->
            <div class="col l4 s12">
                <div class="card">
                    <div class="title">
                        <h5>Orders</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content orders-card">

                        <h4>3,729</h4>
                        <div class="row">
                            <div class="col s6">
                                <small>Total Orders</small>
                            </div>
                            <div class="col s6 right-align">
                                77% <i class="fa fa-level-down red-text"></i>
                            </div>
                        </div>
                        <div class="progress small">
                            <div class="determinate" style="width: 77%"></div>
                        </div>

                        <h4>$7,180</h4>
                        <div class="row">
                            <div class="col s6">
                                <small>Total Income</small>
                            </div>
                            <div class="col s6 right-align">
                                43% <i class="fa fa-level-up green-text"></i>
                            </div>
                        </div>
                        <div class="progress small">
                            <div class="determinate" style="width: 43%"></div>
                        </div>

                        <h4>27</h4>
                        <div class="row">
                            <div class="col s6">
                                <small>Total Refunds</small>
                            </div>
                            <div class="col s6 right-align">
                                7%
                            </div>
                        </div>
                        <div class="progress small">
                            <div class="determinate" style="width: 7%"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Orders Card -->

            <!-- ToDo Card -->
            <div class="col l4 s12">
                <div class="card">
                    <div class="title">
                        <h5>Todo</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>


                    <div class="content todo-card">
                        <div class="todo-task">
                            <input type="checkbox" id="checkbox1" checked />
                            <label for="checkbox1">Transfer projects to the Gulp
                                <span class="todo-remove mdi-action-delete"></span>
                            </label>
                        </div>

                        <div class="todo-task">
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2">Make video for Youtube
                                <span class="todo-remove mdi-action-delete"></span>
                            </label>
                        </div>

                        <div class="todo-task">
                            <input type="checkbox" id="checkbox4">
                            <label for="checkbox4">Learn Meteor.js
                                <span class="todo-remove mdi-action-delete"></span>
                            </label>
                        </div>

                        <div class="input-field">
                            <input id="todo-add" type="text">
                            <label for="todo-add">Add New</label>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /ToDo Card -->

            <!-- Mail Card -->
            <div class="col l4 s12">
                <div class="card">
                    <div class="title">
                        <h5>Mail</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content mail-card">

                        <div class="row">
                            <div class="col s8">
                                <a href="mail-view.html">
                                    <strong>Dianne Chambers</strong>
                                </a>
                            </div>
                            <div class="col s4 right-align">
                                <small>9:02 AM</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="mail-view.html">
                Ut feugiat tempus felis, sit amet mattis dolor accumsan quis. Aenean pharetra tempus justo, vitae euismod ipsum congue a.
              </a>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col s8">
                                <a href="mail-view.html">
                                    <strong>Joanne Stephens</strong>
                                </a>
                            </div>
                            <div class="col s4 right-align">
                                <small>Dec 19</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="mail-view.html">
                Proin suscipit lobortis porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.
              </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Mail Card -->
        </div>

        <div class="row sortable">
            <!-- Stacked Area Chart -->
            <div class="col s12 l7">
                <div class="card">
                    <div class="title">
                        <h5>Stacked Area Chart</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content">
                        <div id="chart2" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
            <!-- /Stacked Area Chart -->

            <!-- Pie Chart -->
            <div class="col s12 l5">
                <div class="card">
                    <div class="title">
                        <h5>Pie Chart</h5>
                        <a class="close" href="#">
                            <i class="mdi-content-clear"></i>
                        </a>
                        <a class="minimize" href="#">
                            <i class="mdi-navigation-expand-less"></i>
                        </a>
                    </div>
                    <div class="content">
                        <div id="chart4" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
            <!-- /Pie Chart -->
		</div>
        

@endsection