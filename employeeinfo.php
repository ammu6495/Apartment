<?php

include 'Connect.php';
//$loginid = $_SESSION['loginid'];
include 'ownerarea.php';
?>


<html>
    <head>
    <title>employeelist</title>
    </head>
    <body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                
                               
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        
                                    	<th>Employee Name</th>
                                        <th>Email</th>
                                    	<th>Address</th>
                                        <th>Mobile number</th>
                                        <th>Experience</th>
                                        <th>Designation</th>
                                    	
                                    </thead>
                                    <?php
                                 //  echo $loginid = $_SESSION['loginid'];
                                    $sql="SELECT * FROM tbl_empregister";
                                    $query=mysqli_query($con,$sql);
                                    $res=($query);
        While($row=mysqli_fetch_array($res))
        {
	 
          ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['empname'];  ?></td>
                                            <td><?php echo $row['email'];  ?></td>
                                        	<td><?php echo $row['address'];  ?></td>
                                        	<td><?php echo $row['mobileno'];  ?></td>
                                                <td><?php echo $row['experience'];  ?></td>
                                                <td><?php echo $row['designation'];  ?></td>
                                        </tr>
                                       <?php  } ?>
                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                    </div>


                   
            </div>
        </div>

        


    </div>
    </body>
</html>

