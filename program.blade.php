<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>La Verdad Christian College</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style> 
body {
    margin-right: 2%;
}
</style>

<body>
<img src="img/lv.jpg" style="position: absolute; width: 100%;">
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
                        <h1 class="one" style="position: absolute; top: 20px; left: 180px;">La Verdad Christian College</h1>
                        <a href="#menu-toggle" class="btn btn-success" id="menu-toggle" style="position: absolute; left: 50px; top: 150px; font-size: 30px;">Get In</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="l" style="position: absolute; background-color: transparent;color: white; top: 250px; font-size: 3em; width: 600px; left: 400px;   "> <q><i>Program</q></i>
</div>

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

</body>

</html>
