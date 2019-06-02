<?php
include 'Connect.php';
session_start();
$loginid = $_SESSION['loginid'];


if (!isset($_SESSION["loginid"])) {
    header('location:renterarea.php');
}

?>
<?php

 $id=$_GET['flatid'];
 $qry="select * from tbl_flat where flatid='$id'";
 $query_run=mysqli_query($con,$qry);
    while($roww=mysqli_fetch_assoc($query_run))
    {
        
       ?>

<?php
include 'Connect.php';
if(isset($_POST['submit1']))
{
//        $flatid=$_POST['flatid'];
//        $bookingid=$_POST['bookingid'];
//        $renterid=$_POST['renterid'];
//        

     $tenant=$_POST['tenant'];
//      $price=$_POST['price'];
         
$sql1="insert into `tbl_booking`(`renterid`,`flatid`,`CURDATE()`,`totaltenants`,`status`) VALUES ('$loginid','$id','$bookdate','$tenant','book')";
$result1=mysqli_query($con,$sql1);

$update="update `tbl_flat` set `status`=0 where flatid=$id";
$res=mysqli_query($con,$update);
 if($result1==1)
{
	?>

       <script> alert('Flat booked!!!');
            window.location.href = 'advancepayment.php';
        </script>
      <?php    
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
h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
   text-align: left;
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 2px solid navy
}
table.inner{
  border: 0px
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
<script>
    <script>
document.getElementById("date").innerHTML = Date();
</script>
    </script>
</head>
<body background="img/grey.jpg" style="background-repeat:no-repeat;background-size: cover;">

<div class="navbar">
    <a href="debitinfo.php">Debit info</a>
  <a href="rentpayment.php">Pay rent</a>
  <div class="dropdown">
    <button class="dropbtn">Complaint 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="complaint.php">Add Complaint</a>
        <a href="viewcomplaintreply.php">View Compaint reply</a>
     
    </div>
  </div> 
  <a href="renterarea.php">Home</a>
</div><div class="container">
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
<h3>BOOKING FORM</h3>

 
<table align="center" cellpadding = "10" >
 
<!----- First Name ---------------------------------------------------------->
<tr><td>
<center><b><font color="pink"><u>FLAT DETAILS</u></font></b></center></td></tr>
 
<tr>
<td>FLAT TYPE</td>
<td><input type="text" name="Pin_Code" maxlength="6" disabled value="<?php echo $roww['type'] ?> " />

</td>
</tr>
<tr>
<td>FLAT NAME</td>
<td><input type="text" name="Pin_Code" maxlength="6" disabled value="<?php echo $roww['flatno'] ?> "  />

</td>
</tr>
<!--<tr>
<td>BOOKING DATE</td>

<td><input type="date" id="date" name="bookingdate"style="width: 160px;">
</td>
</tr>-->
<tr>
<td>TOTAL NO OF TENANTS LIVING</td>
<td><input type="text" name="tenant" maxlength="6" />

</td>
</tr>
<tr>
<td>Advance payment</td>
<td><input type="text" name="" maxlength="6" disabled value="<?php echo $roww['adpay'] ?> "  />

</td>
</tr>
<?php
    }
    ?>
<!----- Date Of Birth -------------------------------------------------------->
<!--<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 

 -->

 


 
<!----- State ---------------------------------------------------------->
<!--<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>-->
 
<!----- Country ---------------------------------------------------------->
<!--<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>-->
 
<!----- Hobbies ---------------------------------------------------------->
 
<!--<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Dancing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby_Cooking" value="Cooking" />
<br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr>
 
--- Qualification--------------------------------------------------------
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board" maxlength="30" /></td>
<td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
<td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 -->
<!----- Course ---------------------------------------------------------->
<!--<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
BCA
<input type="radio" name="Course_BCA" value="BCA">
B.Com
<input type="radio" name="Course_BCom" value="B.Com">
B.Sc
<input type="radio" name="Course_BSc" value="B.Sc">
B.A
<input type="radio" name="Course_BA" value="B.A">
</td>
</tr>-->
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">

    <a href="advancepayment.php?flatid=<?php echo $id=$_GET['flatid'];?>">
                                       <img border="1" alt="W3Schools" src="book.png" width="100" height="90"></a>
</td>
</tr>

</table>
<br/><br/><br/>
 
</form>
 
 

        
        </body>
        </html>
        