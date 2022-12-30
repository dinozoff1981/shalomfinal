<?php


//$con=new mysqli("db4free.net","shalom","@Jerry304870","shalomdb");


//if(!$con){
  //die('Connection Failed'. mysqli_connect_error($con));
//}


//$con=new mysqli("remotemysql.com","d62tD0p7cf","JMYHTSKunI","fd62tD0p7cf");


//if(!$con){
  //die('Connection Failed'. mysqli_connect_error($con));
//}


$con=new mysqli("localhost","root","","shalomdb");

if(!$con){
   die('Connection Failed'. mysqli_connect_error($con));
}

?>