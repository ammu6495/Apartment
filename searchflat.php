<html>
    <head>
        
        <title>Search Flat</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <style>
        body{
            background-color: whitesmoke
        }
        input{
            width:300px;
            height:5%;
            border:1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
       
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

</style>
</head>      
<body>
 <center>
 <h1> Search Flat</h1>
 <form method="POST" action='#'>
     <input type="submit" name="search" value="Search Flat " />
   
     <input type="text" name="type" placeholder="eg.2bhk flat" />


  </form>
    
        <?php
  
include "Connect.php";

//$db= mysqli_select_db($con,'search');
if(isset($_POST['search']))
{
    $type=$_POST['type'];
    
    
    $query="SELECT * FROM tbl_flat where type='$type' and status=1";
    $query_run=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($query_run))
    {
        
       ?>
 
 
                               



<!--<div id="btnContainer">
  <button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
  <button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>-->
<br>

<div class="row">
     <div class="column" style="background-color:#ccc;">
    <label style="font-weight:bold;"></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="photo/<?php echo $row['image1'] ?> " width="300px;" height="200px;"/>
                                   
  </div>
  <div class="column" style="background-color:#ddd;">
   <label style="font-weight:bold;"></label>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;
  <img src="photo/<?php echo $row['image2'] ?> " width="300px;" height="200px;"/>
  </div>
  <div class="column" style="background-color:#aaa;">
     <label style="font-weight:bold;">Flat number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" name="flatno" id="flatnumber" disabled value="<?php echo $row['flatno'] ?>"/>
  </div>
    <div class="column" style="background-color:#aaa;">
     <label style="font-weight:bold;">Floor Number</label>
     <input type="text" name="floorno" id="Type" disabled value="<?php echo $row['floorid'] ?>"/>
  </div>
    
  <div class="column" style="background-color:#bbb;">
      <label style="font-weight:bold;">Bedrooms</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="bedrooms" id="Batchno" disabled value="<?php echo $row['bedrooms'] ?>" />
  </div>
    <div class="column" style="background-color:#bbb;">
    <label style="font-weight:bold;">Kitchen</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="kitchen" id="quantity" disabled value="<?php echo $row['kitchen'] ?> "/>
  </div>
</div>

<div class="row">
     <div class="column" style="background-color:#ccc;">
    <label style="font-weight:bold;">Attached Bathrooms</label>
    <input type="mfg_date" name="attachedbathrooms" id="mfg_date"disabled value="<?php echo $row['attachedbathrooms'] ?> " />
  </div>
  <div class="column" style="background-color:#ddd;">
                    <label style="font-weight:bold;">Prayer hall</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="exp_date" name="prayerhall" id="exp_date" disabled value="<?php echo $row['prayerhall'] ?> "/>
  </div>
<!--  <div class="column" style="background-color:#ccc;">
    <label style="font-weight:bold;">Balcony</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;

    <input type="price" name="balcony" id="price" disabled value="<?php echo $row['balcony'] ?> " />
  </div>-->
    <div class="column" style="background-color:#bbb;">
      <label style="font-weight:bold;">Squarefeet</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <input type="text" name="squarefeet" id="Batchno" disabled value="<?php echo $row['squarefeet'] ?>" />
  </div>
    <div class="column" style="background-color:#ddd;">
    <label style="font-weight:bold;">Flat Type</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <input type="price" name="type" id="price"disabled  value="<?php echo $row['type'] ?> " />
  </div>
    
  
    <div class="column" style="background-color:#bbb;">
    <label style="font-weight:bold;">Advance Payment </label>&nbsp;&nbsp;
    <input type="text" name="pay" id="quantity" disabled value="<?php echo $row['adpay'] ?> "/>
  </div>
 <div class="column" style="background-color:#bbb;">
    <label style="font-weight:bold;">Rent per month</label>
    <input type="text" name="price" id="quantity" disabled value="<?php echo $row['price'] ?> "/>
  </div>
</div>


     <div>
                                   <a href="bookflat.php?flatid=<?php echo $row['flatid'];?>">
                                       <img border="1" alt="W3Schools" src="img/b1.jpg" width="500" height="90"></a>
                                    
                                   </div>
</div>

  
 

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
    }
    ?>

 </center>
</body>

</html>