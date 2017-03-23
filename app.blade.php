<!DOCTYPE html>
<html>
<head>
	<title>La Verdad Christian College</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	@yield('head')
</head>
<body>
@yield('content')

<body background="bg.jpg">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ ('/home') }}">
                        Registration Form
                    </a>
                </li>
                <li>
                    <a href="{{ url('/program') }}">Program</a>
                </li>
                <li>
                    <a href="{{ url('/events') }}">Events</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">About</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <img src="img/logo.png" style="width: 150px; height: 100px;">
                        <h1>La Verdad Christian College</h1>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div>
        </div>
            <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


@yield('foot')
<div class="footer">
            <p class="m-0 text-center text-white">Copyright &copy; La Verdad Christian College <i>Bachelor of Science in Information Systems</i> S.Y 2017</p>
        </div>
</body>
</html>