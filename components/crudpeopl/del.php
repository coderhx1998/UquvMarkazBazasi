<?php

include '../../connection.php';

if(isset($_GET['peopleid'])) {

	$id = $_GET['peopleid'];
	echo $id;

	$sql = "delete from people where peopleid = $id";

	$result = mysqli_query($con, $sql);
	//var_dump($result);

	if($result)header("location:../../peopls.php");
	else echo "o'chmadi";

}


?>