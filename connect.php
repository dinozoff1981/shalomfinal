<?php


$con=new mysqli("sql.freedb.tech","freedb_dinos","6Ssqn7ab#T%7PeH","freedb_shalomdb");


if(!$con){
   die('Connection Failed'. mysqli_connect_error($con));
}


//$con=new mysqli("localhost","root","","shalomdb");

//if(!$con){
   //die('Connection Failed'. mysqli_connect_error($con));
//}

?>