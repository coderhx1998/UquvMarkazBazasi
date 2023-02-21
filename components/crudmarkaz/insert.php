<?php

include '../../connection.php';



if(isset($_POST['submit'])){

$nomi = addslashes($_POST['nomi']);
$manzili = addslashes($_POST['manzili']);
$telefoni = addslashes($_POST['telefoni']);
$direktori = addslashes($_POST['direktori']);

$sql = "insert into `markaz`(`markazNomi`, `markazManzili`, `markazTelefoni`, `markazDirektori`) values ('$nomi','$manzili','$telefoni','$direktori')";

$result = mysqli_query($con, $sql);


if($result) header('location:../../admin.php');

 //header('location:../../admin.php');

}

if(isset($_POST['close'])) header('location:../../admin.php');


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
  		<label for="exampleFormControlInput1" class="form-label">Markaz nomi</label>
  		<input type="text" name="nomi" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Markaz manzili</label>
  		<input type="text" name="manzili" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Markaz telefoni</label>
  		<input type="text" name="telefoni" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Markaz direktori</label>
  		<input type="text" name="direktori" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<input type="submit" value="Yopish" name="close" class="btn btn-secondary btn-sm">

	</form>
</body>
</html>