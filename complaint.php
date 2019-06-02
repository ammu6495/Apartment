<?php
include 'Connect.php';
session_start();
$loginid = $_SESSION['loginid'];
if (!isset($_SESSION["loginid"])) {
    header('location:index.php');
}

?>
<?php


if(isset($_POST['submit1']))
{
      $title=$_POST['title'];
 $description=$_POST['description'];    
  
         
$sql1="INSERT INTO `tbl_complaint`(`renterid`,`title`,`description`,`date`,`status`) VALUES ('$loginid','$title','$description',CURDATE(),'approval pending')";
$result1=mysqli_query($con,$sql1);


 if($result1)
{
	echo"<script>alert('Complaint registered!!');</script>";
          
}
}
 
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style>
    body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  margin-left: 1280px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.sidenav a:hover {
  color:#88efef;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50%;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 40px;
  font-style: italic;
  color: #7f6295;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
  font-style: bold;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:brown;
  font-style:italic;
  font-size: 50px;
  font-stretch: 30px;
  
}
.aa{
    margin-left: 1490px;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body background="img/grey.jpg" style="background-repeat:no-repeat;background-size: cover;">

<div class="navbar">
     <a href="logout.php">Signout</a>
    <a href="debitinfo.php">Debit info</a>
<!--  <a href="rentpayment.php">Pay rent</a>-->
  <a href="complaint.php">Complaint</a>
  <a href="viewcomplaintreply.php">View Complaint Reply</a>
<!--  <div class="dropdown">
    <button class="dropbtn">Complaint 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="complaint.php">Add Complaint</a>
        <a href="viewcomplaintreply.php">View Complaint reply</a>
      
    </div>
  </div> -->
  <a href="renterarea.php">Home</a>
</div>
<div class="container">
    <img src="img/apar_1.jpg" alt="Snow" style="width:1700px; height: 360px;">
<!--  <div class="bottom-left">Bottom Left</div>-->
  <div class="top-left">OAK DALE APARTMENT</div>
  <div class="top-right">Contact:9605021409</div>
<!--  <div class="bottom-right">Bottom Right</div>-->
  <div class="centered">"Step into your dream home"</div>
</div>
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

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  <body>
      <b><h3><center><font color="blue">Add Complaint</font></center></h3></b>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>title</label>
                            <input type="text" name="title" class="form-control" placeholder="Complaint title" autocomplete="off" required />
                        </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Complaint description" autocomplete="off" required />
                        </div>
                                
                                   
                                    <button type="submit" name="submit1" class="btn btn-primary btn-flat m-b-30 m-t-30">Register Complaint</button>
                                    <div class="social-login-content">
                                        
                                    </div>
                                    
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/main.js"></script>





</body>
</html>











