<?php
session_start();
include 'header.php';

$loginid = $_SESSION['loginid'];
?>
<?php
 
include("Connect.php");



if (isset($_POST['submit1'])) {

    $rentername = $_POST['rentername'];
    
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
 $email = $_POST['email'];
    $address = $_POST['address'];
   
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $mobileno = $_POST['mobileno'];


    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $p = md5($password);

    $sql1 = "INSERT INTO `tbl_login`(`role`, `username`, `password`, `status`) VALUES (4,'$username','$p','approved')";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

    $loginid = "SELECT `loginid` FROM `tbl_login` WHERE `username`='$username'";
    $result2 = mysqli_query($con, $loginid);
    while ($row = mysqli_fetch_array($result2)) {
        $a = $row["loginid"];


        $sql = "INSERT INTO `tbl_renterregister`(`loginid`,`rentername`,`gender`,`dob`,`email`,`address`,`stateid`,`districtid`,`cityid`,`mobile`,`status`) VALUES($a,'$rentername','$gender','$dob','$email','$address','$state','$district','$city','$mobileno','approved')";
       
        $result3 = mysqli_query($con, $sql);
        
    }

    if ($result3) {
        ?>
        <script> alert('Registered Successfully!!!');
            window.location.href = 'index.php';
        </script>
        <?php
    }
    }
    ?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 500px;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
 
</style>

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
            var val = document.getElementById('rentername').value;
            if (!val.match(/^[A-Za-z][A-Za-z" "]{0,}$/))
            {
                $("#name_l").html(' Only Alphabets allowed..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('rentername').value = "";
                rentername.focus();

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
                $("#pswrd_l").html('Please provide a password with atleast 8 characters and digits').fadeIn().delay(3000).fadeOut();


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
 	

</head>
<body>
    <br/><br/>
    <br/> <br/> <br/><br/>
    <br/>
 
    <form  method="POST" style="max-width:500px;margin:auto">
  <h2>Renter Registeration Form</h2>
  
  
  <font color="violet">Aready have an Account,</font><a href="login.php"><u>Sign in</u>
							
						</a>
        
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Name" name="rentername" id="rentername" onchange=" nm();" required="">
    <label style="display:none; color:red" id="name_l"></label>
  </div>
  <div class="input-container">
      <b><font color="blue">GENDER</font></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input  type="radio" name="gender" value="male"> Male<br/>
  <input type="radio" name="gender" value="female"> Female<br/>
  
  </div>
<div>
    <b><font color="blue">DOB</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" name="dob"style="width: 400px;">
  
</div><br/>
  
<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" id="email"  onchange=" emil();" required="">
    <label style="display:none; color:red" id="email_1"></label>
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="textarea" placeholder="Address" name="address" id="address" onchange=" ad();" required="">
    <label style="display:none; color:red" id="address_l"></label>
  </div>
  
<div class="input-group">
                            
    <font color="blue"><b>STATE</b></font><div class="controls">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
       <select  name="state" id="state"  style="width: 400px; height: 30px;" required/>
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
 <div class="input-group">
                             
     <font color="blue"><b>DISTRICT</b></font><div class="controls">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                   <select name="district" id="district"  style="width: 400px; height: 30px;" required /><option value="">select</option></select>
		</div>
								
                  </div>
 <div class="input-group">
     <font color="blue"><b>CITY<font></b><div class="controls">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!--<input type="text" placeholder="Enter your district" id="district" name="district" class="input-xlarge" required/>-->
<select  name="city" id="city"  style="width: 400px; height: 30px;" required/>
 <option value="">select</option></select>
              </div>
                                                                
           </div><br/>
<div class="input-container">
    <i class="fa fa-mobile icon"></i>
    <input class="input-field" type="text" placeholder="Mobile number" name="mobileno" id="phoneno" onchange=" mob();" required="">
    <label style="display:none; color:red" id="mobiles_l"></label>
  </div>

<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="username" id="username" onchange=" unm();" required="">
    <label style="display:none; color:red" id="uname_l"></label>
  </div>


  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="password"  onchange="CheckPass();" required="">
    <label style="display:none; color:red" id="pswrd_l"></label>
  </div>
           <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="confirmpassword" id="conpass" onchange="pwdChek();" required="">
    <label style="display:none; color:red" id="conpass"></label> 
  </div>
    
   
  <button type="submit" class="btn" value="submit" name="submit1" >Register</button>
  

    </form>
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
   
</body>

</html>
             
                
                
                
                
                
           