<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KASIRKU</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>
@section('sidebar')
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    
                </button>
                <a class="navbar-brand" href="{{url('index')}}"><i class="fa fa-home"></i> <strong>KASIRKU</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                
                        <li class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="{{url('allmenu')}}"><i class="fa fa-bars"></i> All Menu</a>
                    </li>
                    <li>
                        <a href="{{url('order')}}"><i class="fa fa-desktop"></i> Order</a>
                    </li>
                    <li>
                        <a href="{{url('detail')}}"><i class="fa fa-fw fa-file"></i> Detail Order</a>
                    </li>
					<li>
                        <a href="{{url('transaction')}}"><i class="fa fa-bar-chart-o"></i> Transaction </a>
                    </li>
                </ul>

            </div>

        </nav>
        <div class="container">
        @yield('content')
        </div>

        @show
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                </div>
				
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/morris/morris.js')}}"></script>
	
	
	<script src="{{asset('assets/js/easypiechart.js')}}"></script>
	<script src="{{asset('assets/js/easypiechart-data.js')}}"></script>
	
	 <script src="{{asset('assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{asset('assets/js/custom-scripts.js')}}"></script>
 

</body>

</html>