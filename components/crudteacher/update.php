<?php

include '../../connection.php';
	
$id = $_GET['teacherid'];

if(isset($_GET['teacherid'])) {


	$sql = "Select * from teachers where teacherid = $id";
	$result = mysqli_query($con, $sql);
	$massiv = mysqli_fetch_assoc($result);

	$guruh = $massiv['guruhid'];
	$familiya = $massiv['familiya'];
	$ism = $massiv['ism'];
	$tel =  $massiv['tel'];
	$manzil =  $massiv['manzil'];
	$fan =  $massiv['fan'];
	$tulov =  $massiv['maosh'];
}
if(isset($_POST['submit'])){

$guruh = addslashes($_POST['guruh']);
$familiya = addslashes($_POST['familiya']);
$ism = addslashes($_POST['ism']);
$tel = addslashes($_POST['tel']);
$manzil = addslashes($_POST['manzil']);
$fan = addslashes($_POST['fan']);
$tulov = addslashes($_POST['maosh']);

	$sql = "update teachers set guruhid='$guruh',familiya='$familiya',ism='$ism',tel='$tel', manzil='$manzil', fan='$fan', maosh='$tulov' where  teacherid = '$id'";

	$result = mysqli_query($con, $sql);
	//$massiv = mysqli_fetch_assoc($result);

	var_dump($result);

	if($result)header("location:../../teachers.php");
	else echo "yangilanmadi";

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ma'lumot kiritish</title>
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">

	<form method="POST">

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Guruh</label>
  		<input type="text" value="<?php echo $guruh; ?>" name="guruh" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Familiya</label>
  		<input type="text" value="<?php echo $familiya; ?>" name="familiya" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Ism</label>
  		<input type="text" value="<?php echo $ism; ?>" name="ism" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Telefoni</label>
  		<input type="text" value="<?php echo $tel; ?>" name="tel" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Qabul sanasi</label>
  		<input type="text" value="<?php echo $manzil; ?>" name="manzil" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Fan</label>
  		<input type="text" value="<?php echo $fan; ?>" name="fan" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Tulov(so'm)</label>
  		<input type="text" value="<?php echo $tulov; ?>" name="maosh" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<a href="../../peopls.php">
	<input type="button" value="Yopish" name="close" class="btn btn-secondary btn-sm"></a>

	</form>
</body>
</html>
