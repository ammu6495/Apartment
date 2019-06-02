<?php
include 'Connect.php';
session_start();
$loginid = $_SESSION['loginid'];
if (!isset($_SESSION["loginid"])) {
    header('location:index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
        <link rel="icon" type="image/png" href="owner/assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>owner area</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="owner/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="owner/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="owner/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="owner/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="owner/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
           

            <ul class="nav">
                <div>
                    <p><b><font color="black">OWNER PROFILE</font></b></p>
                </div>
               
<!--                <li>
                    <a href="owner/user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>-->
                <li>
                    <a href="ownerflat.php">
                        <i class="pe-7s-home"></i>
                        <p>Owned flat</p>
                    </a>
                </li>
                 <li>
                     <a href="employeeinfo.php">
                        <i class="pe-7s-note2"></i>
                        <p>Empoyee info</p>
                    </a>
                </li>
<!--                <li>
                    <a href="owner/typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>-->
<!--                <li>
                    <a href="owner/icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="owner/maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="owner/notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>-->
                 <li>
                     <a href="logout.php">
                        <i class="pe-7s-close-circle"></i>
                        <p>Signout</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div>
                    
                    <?php
        $query=mysqli_query($con,"SELECT username FROM tbl_login where loginid=$loginid");
        while ($row=mysqli_fetch_array($query))
	 {
          ?>   
        <i><h1><font color="violet">Welcome <?php
                        ?><label><?php  echo$row['username']; ?></label>!!!!
                     <?php
                     ?></font></i></h1> 
         <?php
         
         }
         ?>
                </div>
               
                       		

        
            
                                
                                
                                   


               
              


</body>

    <!--   Core JS Files   -->
    <script src="owner/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="owner/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
        <script src="owner/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="owner/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="owner/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
        <script src="owner/assets/js/demo.js"></script>

<!--	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>-->

</html>
