<?php
include 'Connect.php';
session_start();
$loginid = $_SESSION['loginid'];
if (!isset($_SESSION["loginid"])) {
    header('location:renterarea.html');
}

?>
<?php

       include 'Connect.php';
    if(isset($_POST['submit1']))
    {
	$bank=$_POST['banktype'];
 $cardnumber=$_POST['cardnumber'];    
  $month=$_POST['month'];
  $year=$_POST['year'];
 
  $cvv=$_POST['cardCVV'];
  $holdername=$_POST['holdername'];
  $balance=$_POST['balance'];
$sql1="INSERT INTO `tbl_debit`(`renterid`,`bankname`,`cardnumber`,`month`,`year`,`cvv`,`cardholder`,`balance`) VALUES ('$loginid','$bank','$cardnumber','$month','$year','$cvv','$holdername','$balance')";
$result1=mysqli_query($con,$sql1);

         
 if($result1==1)
{
	echo"<script>alert('Debit info Added');</script>";
          
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="icon" href="../../images/images.png" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
<div style="background-image:url(../photos/buying-a-home.jpg)">
<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
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
</style>
</head>
<body background="img/grey.jpg" style="background-repeat:no-repeat;background-size: cover;">

<div class="topnav">
    <a href="logout.php">Signout</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="debitinfo.php">Debit Info</a>
  
  <a class="active" href="renterarea.php">Home</a>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="rentpayment.php">Pay Rent</a>
<!--  <a href="#">Pay Electricity Bill</a>-->
<!--  <a href="#">Book Cab</a>-->
  <a href="complaint.php">Complaint</a>
  <a href="viewcomplaintreply.php">View Complaint Reply</a>
  
</div>

    <div class="aa">
    <span style="font-size:30px;cursor:pointer"  onclick="openNav()">&#9776;</span>
    </div>
<div class="container">
    <img src="img/apar_1.jpg" alt="Snow" style="width:1300px; height: 360px;">
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
  <div class="container" style="padding-top:5%;;padding-bottom:5%">
    <div class="row"  style="padding-left:30%">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-7">


            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box" style="padding:10px">
                <div class="panel-heading display-table" >
                    <div class="row display-tr"  >
                        <h3 class="panel-title display-td" align=left style="font-size:25px"><b>Debit Details</b></h3>
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
               
                <div class="panel-body">
				<?php 
				$id=$_GET['flatid'];	
                               ?>
                    <form role="form" id="payment-form" method="POST" name="form_add">

                      <div class="row">
                          <div class="col-xs-12">
                              <div class="form-group">
                                  <label for="cardNumber">Bank</label>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <select class="form-control" autofocus name="banktype">
                                      <option value="FCC">Federal Bank Credit Card</option>
                                      <option value="FDC">Federal Bank Debit Card</option>
                                      <option value="OCC">Other Bank Creadit Card</option>
                                      <option value="ODC">Other Bank Debit Card</option>
                                    </select>
                                  </div>
                              </div>
                          </div>
                      </div>


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        <input
                                            type="tel"
                                            class="form-control"
                                            name="cardnumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required
                                        />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <div class="col-xs-6 col-md-6">
                                    <select name="month" class="form-control">
                                      <option value="Jan" >Jan</option>
                                      <option value="Feb" >Feb</option>
                                      <option value="Mar" >Mar</option>
                                      <option value="Apr" >Apr</option>
                                      <option value="May" >May</option>
                                      <option value="Jun" >Jun</option>
                                      <option value="Jul" >Jul</option>
                                      <option value="Aug" >Aug</option>
                                      <option value="Sept" >Sept</option>
                                      <option value="Oct" >Oct</option>
                                      <option value="Nov" >Nov</option>
                                      <option value="Dec" >Dec</option>
                                    </select>
                                  </div>
                                  <div class="col-xs-6 col-md-6">
                                  <?php
                                    $earliest_year = 2040;
                                    ?>
                                    <select name="year" class="form-control">
                                    <?Php
                                     foreach (range(date('Y'), $earliest_year) as $x)
                                      { ?>
                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                  <?php } ?>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CVV</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="cardCVV"
                                        placeholder="CVV"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Name</label>
                                    <input type="text" class="form-control" name="holdername" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Card Holder Name" />
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Balance</label>
                                    <input type="text" class="form-control" name="balance" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Balance amount" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <div align=left class="col-xs-6">  <label style="font-size:14px"></label> </div>
                                  <div align=right class="col-xs-6">  <label style="font-size:20px">?2500</label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="hidden" name="price" value="">
                                <input type="hidden" name="flatid" value="<?php echo $flatid;?>" value="">
                                <input class="subscribe btn btn-success btn-lg btn-block" type="submit" name="submit1" value="Payment" onClick="return valid()">
                            </div>
                        </div>
<!--                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>-->
                    </form>
					<script type="text/javascript">
function valid()
{
if(document.form_add.banktype.value=="0")//textbox name=name
{
alert("Select Bank Type");
document.form_add.banktype.focus();
return false;
    }
	if(document.form_add.cardnumber.value=="")//textbox name=name
{
alert("Enter Card Number");
document.form_add.cardnumber.focus();
return false;
    }
	if((isNaN(document.form_add.cardnumber.value)))
{
alert("Only numbers are allowed");
document.form_add.cardnumber.focus();
return false;
}
var phone=document.form_add.cardnumber.value.length;
var max=16;
if((phone<max) || (phone>max))
{
alert("Please Enter  16 digit card Number");

document.form_add.cardnumber.focus();
return false;
}
if(document.form_add.month.value=="0")//textbox name=name
{
alert("Select month");
document.form_add.month.focus();
return false;
    }
	if(document.form_add.year.value=="0")//textbox name=name
{
alert("Select year");
document.form_add.year.focus();
return false;
    }
	if(document.form_add.cardCVV.value=="")//textbox name=name
{
alert("Enter Card CVV");
document.form_add.cardCVV.focus();
return false;
    }
	if((isNaN(document.form_add.cardCVV.value)))
{
alert("Only numbers are allowed");
document.form_add.cardCVV.focus();
return false;
}
var vv=document.form_add.cardCVV.value.length;
var max=3;
if((vv<max) || (vv>max))
{
alert("Please Enter  3 digit cvv Number");

document.form_add.cardCVV.focus();
return false;
}
if(document.form_add.holdername.value=="")//textbox name=name
{
alert("Enter holdername");
document.form_add.holdername.focus();
return false;
    }
	if(!(isNaN(document.form_add.holdername.value)))
{
alert("Only albhabets are allowed");
document.form_add.holdername.focus();
return false;
}
}
</script>

<center><a href="renterarea.php">Back To Homepage</a></center>
                </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->


        </div>
    </div>
  </div>


</body>
</html>


