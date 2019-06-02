<?php

include 'Connect.php';
//$loginid = $_SESSION['loginid'];
include 'adminarea.php';
?>





<html>
    <head>
    <title>viewcomplaints</title>
    </head>
    <body>
        <form action="" method="post">
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
                                        
                                    	<th>Renter Name</th>
                                    	<th>Title</th>
                                        <th>Description</th>
                                    	<th>Date</th>
                                        <th>Complaint Reply</th>
                                    </thead>
                                    <?php
                                 //  echo $loginid = $_SESSION['loginid'];
                                    $sql="SELECT * FROM tbl_complaint as c,tbl_renterregister as rt where c.renterid=rt.loginid";
                                    $query=mysqli_query($con,$sql);
                                    $res=($query);
        While($row=mysqli_fetch_array($res))
        {
	 
          ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['rentername'];  ?></td>
                                        	<td><?php echo $row['title'];  ?></td>
                                        	<td><?php echo $row['description'];  ?></td>
                                                <td><?php echo $row['date'];  ?></td>
                                                <td><a href="complaintreply.php?complaintid=<?php echo $row['complaintid'];?>">
                                                        <img src="reply.jpg" width="50px" height="40px"></td>
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
        </form>
    </body>
</html>
