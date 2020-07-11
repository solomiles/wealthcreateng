<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project') }}</title>

    <!-- Styles -->
    

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <!-- <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/> -->

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>

    <!-- Datatables core css -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" >


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'> -->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <style>
        .well {
            background-color: #fff;
        }
        .form-control[readonly]{
            color:red;
        }
        .form-control {
            background-color: #fff;
            border: 1px solid #e0b160;
        }
        .id > input {
            border: 1px solid #e0b160;
            width:80px !important;
        }
      
        #topheader .nav li > a {
            text-transform: capitalize;
            /* color: #333; */
            transition: background-color .2s, color .2s;
            
            &:hover,
            &:focus {
                background-color: #333;
                color: #fff;
            }
        }
        .alert-succes {
            background-color: #19b36d;
            color: #ffffff;
        }
        .badge-success {
            background-color: #27b727;
        }
        .badge-warning {
            background-color: #de9518;
        }
        .dropdown-menu   {

            background-color: transparent;
        }
        .dropdown-menu >li > a:hover , .dropdown-menu > li > a:focus {

            background-color: #fff;
            color : #EB5E28
            
        } 
        .drop > .dropdown-menu   {

            /* background-color: #fff;
             */
             margin-top : 0;
             margin-left : 60px;
             border-radius : 0;
             box-shadow : none;
        }

        /* #topheader .nav li.active > a {
            background-color: #333;
            color: #fff;
        } */
    </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper" id="topheader">
            <div class="logo">
                <a href="{{ url('/home') }}" class="simple-text" data-toggle="tooltip" title="{{ config('app.name')}}" data-placement="bottom" >
                {{ config('app.name', 'Project') }}
                </a>
            </div>
            <nav>
                <ul class="nav">
                    <li class="active">
                        <a active href="{{ url('/dashboard')}}" data-toggle="tooltip" title="Dashboard" data-placement="bottom" >
                            <i class="ti-panel"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a href=" {{ url('/user')}} " data-toggle="tooltip" title="User Profile" data-placement="bottom" >
                            <i class="ti-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href=" {{ url('referrals') }}" data-toggle="tooltip" title="My Down Line" data-placement="bottom" >
                            <i class="ti-view-list-alt"></i>
                            <p>My Down Line</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('support') }}" data-toggle="tooltip" title="Support" data-placement="bottom" >
                            <i class="ti-text"></i>
                            <p>Support</p>
                        </a>
                    </li>
                    @if( Auth::user()->admin )
                    <li class="dropdown drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="ti-eye"></i>
                            <p>Back-office Menu</p>
                        </a>
                        <ul class="dropdown-menu ">
                            <li>
                                <a href="{{ url('backoffice')}}" data-toggle="tooltip" title="Back-Office" data-placement="bottom" >
                                <i class="ti-pencil"></i>
                                <p>matching</p>
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="{{ url('open-tickets')}}" data-toggle="tooltip" title="open tickets" data-placement="bottom" >
                                <i class="ti-check"></i>
                                <p>Open-Tickets</p>
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="{{ url('active-users')}}" data-toggle="tooltip" title="all members" data-placement="bottom" >
                                <i class="ti-user"></i>
                                <p>Members</p>
                                </a>
                            </li>
                            <hr>
                            <li>
                                <a href="{{ url('regfee')}}" data-toggle="tooltip" title="all members" data-placement="bottom" >
                                <i class="ti-check"></i>
                                <p>Reg Fee Uploads</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
    	</div>
    </div>

    <div class="main-panel"><div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" data-toggle="tooltip" title="{{ config('app.name', 'Project')}}" data-placement="right" href="#">{{ config('app.name', 'Project')}}</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li> -->
                        <li>
                           
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" data-toggle="tooltip" title=" {{ Auth::user()->name }} " data-placement="bottom" >
								<i class="ti-user"></i>
								<p>{{ Auth::user()->name }}</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href=""
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
						
                    </ul>

                </div>
            </div>
        </nav>
    </div>
        @yield('content')


       

        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="#">
                                {{ config('app.name', 'Project')  }} Design
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy & Terms
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="{{ url('/home') }}">{{ config('app.name','WealthCreateNG') }}</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('assets/js/bootstrap-checkbox-radio.js') }}"></script>

    

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9xG7RZSiG3QFB40FbQAqXhCqtAIvYXS0&callback=initMap"
        type="text/javascript"></script> -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('assets/js/paper-dashboard.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
    <!-- DataTable Js -->
    <script src="{{ asset('assets/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
       $(document).ready(function () {
           $('#dataTables-example').dataTable();
       });
       $(document).ready(function () {
           $('#dataTables-example3').dataTable();
       });
    </script>
	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<!-- <script src="assets/js/demo.js"></script> -->

	<!-- <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script> -->
    <script>
        // $('#topheader .nav a' ).click( function () {
        //     $( '#topheader .nav' ).find( 'li.active' ).removeClass( 'active' );
        //     $(this).parent( 'li' ).addClass( 'active' );
        // });
        
        $('.nav a').on('click', function (e) {

            // e.preventDefault();
            // $(document).ready( function(){
            
            $(this).parent('li').addClass('active');
            $(this).parent().siblings().removeClass('active');
            
            // target = $(this).attr('href');

            // $('.tab-content > div').not(target).hide();
            
            // $(target).fadeIn(1000);
        
        // });

        
        });
        visible = false;

        $('#ph_hide_button').click( function(e) {
            e.preventDefault();

            if (visible){
                $('section > div').hide();
                visible = false;
            }else{
                $('section > div').show();
                visible = true;
            }

        });

        $('#gh_hide_button').click( function(e) {
            e.preventDefault();
            if(visible){
                $('aside > div').hide();
                visible = false;
            }else{
                $('aside > div').show();
                visible = true;
            }
        });

        $("#newButton").click( function(e) {
            e.preventDefault();
            if(visible){
                $("#newForm").hide();
                visible = false;
            }else{
                $("#newForm").show();
                visible = true;
            }
        });
   
        
    </script>
    <script>
            
        //    code to generate random string
        function generate(lent = "0123456789", e = 4 ){
            random = lent.trim('').split('');
            randomLength = random.length;
            var randomString = "";

            for (let i = 0; i < e; i++) {

               randomString += Math.floor(Math.random() * randomLength);
                
            }
            return document.getElementById("random").value = randomString;
        }
    </script>

</html>
