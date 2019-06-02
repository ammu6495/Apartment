<?php
 
include("Connect.php");

session_start();

if (isset($_POST['submit1'])) {

    $ownername = $_POST['ownername'];
    
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
//        $image1=$_FILES['image1']['name'];
//	move_uploaded_file($_FILES['image1']['tmp_name'],"photo/".$image1);
    $address = $_POST['address'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $phoneno = $_POST['phoneno'];
    $flatno = $_POST['flatno'];
    $aadhaar = $_POST['adno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $p = md5($password);

    $sql1 = "INSERT INTO `tbl_login`(`role`, `username`, `password`, `status`) VALUES (3,'$username','$p','pending')";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

    $loginid = "SELECT `loginid` FROM `tbl_login` WHERE `username`='$username'";
    $result2 = mysqli_query($con, $loginid);
    if($row = mysqli_fetch_array($result2)) {
        $a = $row["loginid"];


        echo $sql = "INSERT INTO `tbl_register`(`loginid`,`name`,`dob`,`gender`,`address`,`email`,`stateid`,`districtid`,`cityid`,`phoneno`,`flatno`,`aadhaar`,`status`) VALUES($a,'$ownername','$dob','$gender','$address','$email','$state','$district','$city','$phoneno','$flatno','$aadhaar','pending')";
        $result3 = mysqli_query($con, $sql);
    }

    if ($result3) {
        ?>
        <script> alert('Registration Successful,Please Login');
            window.location.href = 'index.php';
        </script>
        <?php
    }
    }
    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Owner register</title>

    <!-- Icons font CSS-->
    <link href="register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="register/css/main.css" rel="stylesheet" media="all">
    <!-- Adding oh-autoVal css style -->

<!-- Adding jQuery script. It must be before other script files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<style>
    img{
  max-width:80px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}
</style>
   
</head>
<script> 
      var myInput = document.getElementById("password");
      function validate(){
    if (document.getElementById("state").selectedIndex == 0){
       alert("Select State");
    }
    else {
       alert(document.getElementById("state").options[document.getElementById("state").selectedIndex].value);
    }
}
function nm()
        {
            var val = document.getElementById('name').value;
            if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
            {
                $("#name_l").html(' Only Alphabets allowed..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('name').value = "";
                name.focus();

                return true;
            }
        }
	function mob()
        {
            var val = document.getElementById('phoneno').value;
            if (!val.match(/^[6-9][0-9]{9,9}$/))
            {
                $("#mobiles_l").html('Only Numbers are allowed and must contain 10 number..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('phoneno').value = "";
                phoneno.focus();
                return false;
            }
            return true;
        }
//        function aadhaar()
//        {
//            var val = document.getElementById('adr').value;
//            if (!val.match(/^[6-9][0-9]{9,9}$/))
//            {
//                $("#ad_l").html('Only Numbers are allowed and must contain 10 number..!').fadeIn().delay(3000).fadeOut();
//                document.getElementById('adr').value = "";
//                adr.focus();
//                return false;
//            }
//            return true;
//        }
	function emil()
	 {
 
     		var email = document.getElementById('email');
   		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

   		 if (!filter.test(email.value)) {
                     email.value= "";
    		$("#email_1").html('Please provide a valid email address').fadeIn().delay(3000).fadeOut();
   		 email.focus();
   		 return false;
	 }
     }
    
function unm()
        {
            var val = document.getElementById('username').value;
            if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
            {
                $("#uname_l").html(' should be ur first name..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('username').value = "";
                username.focus();

                return true;
            }
        }
        

        function ad()
        {

            var x = document.getElementById('address').value;
            if ((x === null) || (x.length <= 1))
            {

                $("#address_l").html('Enter Valid address..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('address').value = "";
                address.focus();

                return true;
            }
        }
        
	function CheckPass()
        {


            var p = document.getElementById('password').value;
            var passw = /^[A-Za-z]\w{7,14}$/;
            var error = "";
            var illegalChars = /[\W_]/; // allow only letters and numbers

            if (p == "") {
                $("#pswrd_l").html('Please provide a password').fadeIn().delay(3000).fadeOut();
                password.focus();

                return false;
            } else if ((p.length < 7) || (p.value.length > 15) && (p.search(/[a-zA-Z]+/) == -1) || (p.search(/[0-9]+/) == -1)) {
                $("#pswrd_l").html('Please provide a password with atleast 7 characters and digits').fadeIn().delay(3000).fadeOut();


                password.value = "";
                password.focus();
                return false;

            } else if ((p.search(/[a-zA-Z]+/) == -1) || (p.search(/[0-9]+/) == -1)) {
                $("#pswrd_l").html('Please provide a password with atleast 1 numeric digit').fadeIn().delay(3000).fadeOut();
                password.value = "";
                password.focus();

                return false;

            } else {
                p.style.background = 'White';
            }
            return true;
        }
        function pwdChek() 
		{														
			if(document.getElementById("conpass").value == document.getElementById("password").value)
			{	
				return true;										
			}
			else
			{
				alert("***Password Mismatch***");
                                conpass.value="";
                                conpass.focus();
			  
					return false;
			}
		}
                 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> 
 	
     
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                
                <div class="card-body">
                    <h2 class="title">Owner Registration</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3 " type="text" placeholder="Owner Name" name="ownername" id="name" onchange=" nm();" required="">
                        <label style="display:none; color:red" id="name_l"></label>
                        </div>
<!--                          <div class="input-group">
                                                                    <input class="input--style-3"><font color="white">Profile photo</font>
									<div class="controls">
                                                                           <input type="file" name="image1" id="image" onChange="image();"/>
		                                                                     <span class="error" id="fname_error"></span>
                                                                                  </div>
								</div>-->
                                       
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="dob">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender" required/>
                                    <option disabled="disabled" selected="selected" width="100px;">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 " type="textarea" placeholder="Address"  name="address" id="address" onchange=" ad();" required="">
                        <label style="display:none; color:red" id="address_l"></label>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" id="email"  onchange=" emil();" required="">
                            <label style="display:none; color:red" id="email_1"></label>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 " type="text" placeholder="Phone" name="phoneno" id="phoneno" onchange=" mob();" required="">
                       <label style="display:none; color:red" id="mobiles_l"></label>
                        
                        </div>
                                              

                       
                         <div class="input-group">
                             <div class="input--style-3">state
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                            <select  name="state" id="state"  style="width: 700px; height: 30px;" required/>
                  <option value="">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT stateid,statename FROM tbl_state where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['stateid'] . '>' . $row['statename'] . '</option>';
            }
            ?>
              </select>
                                                                        </div>
									</div>
								</div>
                                                           <div class="input-group">
                             <div class="input--style-3">District
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                                                            <select name="district" id="district"  style="width: 700px; height: 30px;" required />
                                                                        <option value="">select</option></select>
                                                                        </div>
								</div>
                                                           </div>
                                                               <div class="input-group">
                             <div class="input--style-3">City
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your district" id="district" name="district" class="input-xlarge" required/>-->
									<select  name="city" id="city"  style="width: 700px; height: 30px;" required/>
                        <option value="">select</option></select>
                                                                        </div>
                                                                </div>
                                                               </div>
                        <div class="input-group">
                             <div class="input--style-3">Owner Flat
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                            <select  name="flatno" id="flatno"  style="width: 700px; height: 30px;" required/>
                  <option value="">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT flatid,flatno FROM tbl_flat where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['flatid'] . '>' . $row['flatno'] . '</option>';
            }
            ?>
              </select>
                                                                        </div>
									</div>
								</div>
                                           <div class="input-group">
                            <input class="input--style-3 " type="text" placeholder="Owner Aadhaar number" name="adno" required />
                        
                        </div>
                        <div class="input-group">
                        <input class="input--style-3 " type="text" placeholder="Username" name="username" id="un" onchange=" unm();" required="">
                        <label style="display:none; color:red" id="uname_l"></label>
                        </div>                        
<div class="input-group">
                            <input class="input--style-3 " type="password" placeholder="Password" name="password" id="password"  onchange="CheckPass();" required="">
<label style="display:none; color:red" id="pswrd_l"></label>                        
</div>
                        <div class="input-group">
                            <input class="input--style-3 " type="password" placeholder="Confirm Password" name="confirmpassword" id="conpass" onchange="pwdChek();" required="">
                        <label style="display:none; color:red" id="conpass"></label>  
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="submit1" value="submit">Register</button>
                        </div>
                        <div class="text-center p-t-115">
                            <span class="txt1"style="color:white; ">
						Already have an account???
						</span>

            <a class="txt2" href="login.php">
							Sign in
						</a>
        </div>
                        
                    </form>

                                                           </div>
       
        
        </div>
					</div>
                         </div>

    
        

    <!-- Jquery JS-->
    <script src="register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="register/vendor/select2/select2.min.js"></script>
    <script src="register/vendor/datepicker/moment.min.js"></script>
    <script src="register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="register/js/global.js"></script>
    <script src="themes/js/common.js"></script>
                <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="js/sregistration.js"></script>
    <script>
			$(document).ready(function() {

                            $("#state").on("change", function(){
                                 $state = $('#state').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$state},
                                     url:'getdistrict.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT DISTRICT--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#district").html($html);
                                     }
                                 });
                            });
                            
                            
                            $("#district").on("change", function(){
                                 $district = $('#district').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$district},
                                     url:'getcity.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT CITY--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#city").html($html);
                                     }
                                 });
                            });
                            
			});
                              
                        
                        
		</script>
                         
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
 