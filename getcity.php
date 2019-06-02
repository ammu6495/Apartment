<?php

include_once 'Connect.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT cityid,cityname FROM tbl_city where districtid='" . $index . "' and status=1");
    //var_dump($q);
    
     if($q){
        $data = json_encode(mysqli_fetch_all($q));
        echo $data;
    }else{
        echo 'err';
    }

}
?>
