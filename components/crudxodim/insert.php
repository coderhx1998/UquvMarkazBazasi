<?php

include '../../connection.php';



if(isset($_POST['submit'])){

$familiya = addslashes($_POST['familiya']);
$ism = addslashes($_POST['ism']);
$tel = addslashes($_POST['tel']);
$manzil = addslashes($_POST['manzil']);
$lavozim = addslashes($_POST['lavozim']);
$tulov = addslashes($_POST['maosh']);

$sql = "insert into xodim ( familiya, ism, tel, manzil, lavozim, maosh) values ('$familiya','$ism','$tel','$manzil','$lavozim','$tulov')";

$result = mysqli_query($con, $sql);

if($result) header('location:../../xodim.php');

 //header('location:../../admin.php');

}

if(isset($_POST['close'])) header('location:../../xodim.php');


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
  		<label for="exampleFormControlInput1" class="form-label">Familiya</label>
  		<input type="text" name="familiya" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Ism</label>
  		<input type="text" name="ism" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Tel</label>
  		<input type="text" name="tel" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Manzili</label>
  		<input type="text" name="manzil" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Lavozim</label>
  		<input type="text" name="lavozim" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Maosh</label>
  		<input type="text" name="maosh" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<input type="submit" value="Yopish" name="close" class="btn btn-secondary btn-sm">

	</form>
</body>
</html>