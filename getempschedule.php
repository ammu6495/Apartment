<?php
include 'Connect.php';
session_start();
$loginid=$_SESSION['loginid'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 500px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body background="img/grey.jpg" style="background-repeat:no-repeat;background-size: cover;">


<div class="navbar">
    <a href="logout.php">Signout</a>
    <a href="debitinfo.php">Debit info</a>
<!--  <a href="rentpayment.php">Pay rent</a>-->
  <div class="dropdown">
    <button class="dropbtn">Complaint 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="complaint.php">Add Complaint</a>
        <a href="viewcomplaintreply.php">View Compaint reply</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Maintenance
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="getempschedule.php">Get Employee Schedule</a>
        <a href="viewcomplaintreply.php"></a>
      
    </div>
  </div> 
  <a href="renterarea.php">Home</a>
</div>
<div class="container">
    <img src="img/apar_1.jpg" alt="Snow" style="width:1520px; height: 360px;">
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
 <center>
 <h1> Get Employee schedule</h1>
 <form method="POST" action='#' value="hidden">
   
     <input type="text" name="work" placeholder="enter service" />

 <input type="submit" name="search" value="Search here " />
  </form>
 <br/>
<br/>
<br/>
    <table align="center">
    
  <tr>
    <th>Employee Name</th>
    <th>Work</th>
    <th>Work Start Time</th>
    <th>Work End Time</th>
    <th>Work Shift</th>
    <th>Availability</th>
    <th>Book now</th>
  </tr>
 
  

        <?php
  
include "Connect.php";

//$db= mysqli_select_db($con,'search');
if(isset($_POST['search']))
{
    $work=$_POST['work'];
    
    
    $query="SELECT * FROM tbl_empschedule where work='$work' and status=1";
    $query_run=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($query_run))
    {
        
       ?>
 <tbody>
                                        <tr>
                                            <td><?php echo $row['empname'];  ?></td>
                                        	<td><?php echo $row['work'];  ?></td>
                                        	<td><?php echo $row['workstarttime'];  ?></td>
                                                <td><?php echo $row['workendtime'];  ?></td>

                                                    <td><?php echo $row['workingdays'];  ?></td> 
                                                    <td><?php echo $row['bookavail'];  ?></td>
                                                    <td>
                <a href="bookemployee.php?empid=<?php echo $empid=$row['empid'];?>">
                    <img src="book.png" width="30px" height="30px"></a></td>
                                        </tr>
                                        
                                       <?php  } ?>
                                    </tbody>
 
 
    </table>
 </center>
<br/>
<br/>


<!--<div id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>-->



  
 

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
 
       <?php
    }
    
    ?>

 </center>
</body>




</html>


