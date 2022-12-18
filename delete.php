<?php
include 'connect.php';
if(isset($_GET['deleteid'])){

	$id=$_GET['deleteid'];

	$sql="DELETE FROM  shalom2 WHERE id=$id";
	$con->query($sql);
	
	}
	header("location:home.php");
	exit;

?>