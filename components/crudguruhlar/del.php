<?php

include '../../connection.php';

if(isset($_GET['xodimid'])) {

	$id = $_GET['xodimid'];
	//echo $id;

	$sql = "delete from xodim where xodimid = $id";

	$result = mysqli_query($con, $sql);
	//var_dump($result);

	if($result)header("location:../../xodim.php");
	else echo "o'chmadi";

}


?>