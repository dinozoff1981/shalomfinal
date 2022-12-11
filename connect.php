<?php


$con=new mysqli("sql.freedb.tech","freedb_tensae","m%wFa#8hNwgpY6z","freedb_shalomdb");


if(!$con){
    die('Connection Failed'. mysqli_connect_error($con));
}


//$con=new mysqli("localhost","root","","shalomdb");

//if(!$con){
   //die('Connection Failed'. mysqli_connect_error($con));
//}

?>