<?php

$flid=$_GET['id'];
include 'Connect.php';
 $fl= "DELETE FROM tbl_floor WHERE floorid=$flid";
if(mysqli_query($con, $fl))
{
    header('Location:floor.php');
    exit;
}
else{
    echo "error in deleting";
}
?>
