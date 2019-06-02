<?php

$flid=$_GET['id'];
include 'Connect.php';
 $fl= "DELETE FROM tbl_flat WHERE flatid=$flid";
if(mysqli_query($con, $fl))
{
    header('Location:viewflats.php');
    exit;
}
else{
    echo "error in deleting";
}
?>