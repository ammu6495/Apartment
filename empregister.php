

<?php
 
include 'Connect.php';

if (isset($_POST['submit1'])) {

    
    $name = $_POST['empname'];
     
    $gender = $_POST['empgender'];
   // $dob= $_POST['empdob'];

    $email = $_POST['empemail'];
    $address = $_POST['empaddress'];
    $mobileno = $_POST['empmobileno'];
    $experience= $_POST['empexperience'];
    $designation= $_POST['empdesignation'];
    $joiningdate= $_POST['empjoiningdate'];
    $salary= $_POST['empsalary'];

    $username = $_POST['empusername'];
    $password = $_POST['emppassword'];
    
    $p = md5($password);

    $sql1 = "INSERT INTO `tbl_login`(`role`, `username`, `password`, `status`) VALUES (2,'$username','$password','approved')";
    $result1 = mysqli_query($con, $sql1) or die(mysqli_error($con));

    $loginid = "SELECT `loginid` FROM `tbl_login` WHERE `username`='$username'";
    $result2 = mysqli_query($con, $loginid);
    while ($row = mysqli_fetch_array($result2)) {
        $a = $row["loginid"];
        $sql = "INSERT INTO `tbl_empregister`(`loginid`,`empname`,`gender`,`email`,`address`,`mobileno`,`experience`,`designation`,`joiningdate`,`salary`,`status`) VALUES($a,'$name','$gender','$email','$address','$mobileno','$experience','$designation','$joiningdate','$salary','approved')";
        $result3 = mysqli_query($con, $sql);
    }
if ($result3) {
        ?>
        <script> alert('Registration Successful,pls check ur mail for password');
            window.location.href = 'index.php';
        </script>
        <?php
    }
    require 'PHPMailerAutoload.php';
    require 'credential.php';
    
    
    $mail = new PHPMailer;
    
    $mail->SMTPDebug = 4;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom(EMAIL, 'ammuandrews06');
    $mail->addAddress($_POST['empemail']);     // Add a recipient
                   // Name is optional
    $mail->addReplyTo(EMAIL);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'This is a mail from admin.';
    $mail->Body    ="<i>USERNAME:Your Firstname<br/>PASSWORD: password:</i>  $password";
   
    $mail->AltBody ="";
     
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

}
    
    ?>



<?php

include 'adminarea.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="jsval/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="jsval/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="jsval/oh-autoval-script.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 300px;
  height:8px;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 200px;
  
}

/* Add padding to container elements */
.container {
  padding: 5px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

<script>
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
    function ad()
        {

            var x = document.getElementById('add').value;
            if ((x === null) || (x.length <= 1))
            {

                $("#address_l").html('Enter Valid address..!').fadeIn().delay(3000).fadeOut();
                document.getElementById('add').value = "";
                add.focus();

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
       
</script>
    
    </head>
<body>

    <form action="#" method="POST" id="empregister" style="border:1px solid #ccc; padding-right: 20%; padding-left: 20%" class="oh-autoval-form" enctype="multipart/form-data">
  <div class="container">
      <h1><font color="pink">Employee Registration</font></h1>
    
    <hr>

    <label for="empname"><b><font color="white">Employee name</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
    <input class="av-name" type="text" placeholder="Enter name" name="empname"  required="">

    <br/>
    
<!--<label for="image"><b><font color="white">Photo</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			
<input type="file" name="image" id="image" color="white" onChange="image();"/><br/>-->
																

									

    <label for="empgender" required/><b><font color="white">Gender</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="av-gender" type="radio" name="empgender"  value="male" required="required" /><font color="white"> Male</font>
    <input class="av-gender" type="radio" name="empgender"  value="female" required="required" /><font color="white"> Female</font>
    <br>
    


    <label for="email"><b><font color="white">Emailid</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
   <input class="av-email" type="text" placeholder="Enter email" name="empemail" id="email" onchange=" emil();" required="">
</br>
    
    
    <label for="address"><b><font color="white">Address</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="av-address" type="text" placeholder="Enter address" name="empaddress" id="add" onchange=" ad();" required=""></br>
<!--    <label style="display:none; color:red" id="address_1"></label>-->
   
    
    <label for="mobileno"><b><font color="white">Mobileno</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input class="av-mobile" type="text" placeholder="Enter mobileno" name="empmobileno" id="phoneno" onchange=" mob();" required=""/>
   <label style="display:none; color:red" id="mobiles_1"></label></br>
    
    
    <label for="experience"><b><font color="white">Experience</font></b></label>&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="year of experience" name="empexperience" required />
     <br/>
    
    
    <label for="designation"><b><font color="white">Designation</font></b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="empdesignation">
        <option value=""  selected="selected" required />Select</option>
    <option value="Electrician">Electrician</option>
    <option value="Plumber">Plumber</option>
     <option value="Security">Security</option>
      <option value="Security">Cleaner</option>
       <option value="Security"></option>
</select><br/>

    
    
    <label for="joiningdate" ><b><font color="white">Joining Date</font></b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date"  place holder="select dob" name="empjoiningdate" required /><br/>

    
    
    <label for="salary"><b><font color="white">Salary</font></b></label>&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter salary" name="empsalary" required /><br/>
    
    <label for="username"><b><font color="white">Username</font></b></label>
    &nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="enter username" name="empusername" required><br/>
    
    
    <label for="password"><b><font color="white">Password</font></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" placeholder="enter password" name="emppassword" value="<?php echo generatekey($con);?>" required/><br/>
    <?php

                      function checkKeys($con,$randstr)

{
$sql="SELECT * FROM tbl_uniqueid ";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
    if($row['keystring']==$randstr){
        $keyExists=true;
        break;
    }
    else{
        $keyExists=false;
    }
}
return $keyExists;
}


function generatekey($con){
        $keylength=8;
        $str ="1234567890abcdefghijklmnopqrstuvwxyz()@#!%&/$";
        $randstr= substr(str_shuffle($str),0,$keylength);
        $checkKey=checkKeys($con,$randstr);
        while($checkKey==true){
            $randstr=substr(str_shuffle($str),0,$keylength);
            $checkKey=checkKeys($con,$randstr);
        }
        return $randstr;
    }
	?> 
    
    

    <div class="clearfix">
      
        <button type="submit" class="signupbtn" value="submit" name="submit1">Register</button>
    </div>
  </div>
</form>
<!--  <script src="js/main_1.js"></script>
  <script src="js/jquery.validate.min.js"></script>-->
    
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
</body>
</html>

