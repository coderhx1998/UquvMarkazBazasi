<?php

include '../../connection.php';

if(isset($_GET['markazid'])) {

	$id = $_GET['markazid'];
	echo $id;

	$sql = "delete from markaz where markazid = $id";

	$result = mysqli_query($con, $sql);
	var_dump($result);

	if($result)header("location:../../admin.php");
	else echo "o'chmadi";

}


?>