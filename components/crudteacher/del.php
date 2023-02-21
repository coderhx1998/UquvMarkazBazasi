<?php

include '../../connection.php';

if(isset($_GET['teacherid'])) {

	$id = $_GET['teacherid'];
	//echo $id;

	$sql = "delete from teachers where teacherid = $id";

	$result = mysqli_query($con, $sql);
	//var_dump($result);

	if($result)header("location:../../teachers.php");
	else echo "o'chmadi";

}


?>