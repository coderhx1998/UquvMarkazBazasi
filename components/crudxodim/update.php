<?php

include '../../connection.php';
	
$id = $_GET['xodimid'];

if(isset($_GET['xodimid'])) {


	$sql = "Select * from xodim where xodimid = $id";
	$result = mysqli_query($con, $sql);
	$massiv = mysqli_fetch_assoc($result);

	$familiya = $massiv['familiya'];
	$ism = $massiv['ism'];
	$tel =  $massiv['tel'];
	$manzil =  $massiv['manzil'];
	$lavozim =  $massiv['lavozim'];
	$tulov =  $massiv['maosh'];
}
if(isset($_POST['submit'])){

$familiya = addslashes($_POST['familiya']);
$ism = addslashes($_POST['ism']);
$tel = addslashes($_POST['tel']);
$manzil = addslashes($_POST['manzil']);
$lavozim = addslashes($_POST['lavozim']);
$tulov = addslashes($_POST['maosh']);

	$sql = "update xodim set familiya='$familiya',ism='$ism',tel='$tel', manzil='$manzil', lavozim='$lavozim', maosh='$tulov' where  xodimid = '$id'";

	$result = mysqli_query($con, $sql);
	//$massiv = mysqli_fetch_assoc($result);

	var_dump($result);

	if($result)header("location:../../xodim.php");
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
  		<label for="exampleFormControlInput1" class="form-label">Manzili</label>
  		<input type="text" value="<?php echo $manzil; ?>" name="manzil" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Lavozimi</label>
  		<input type="text" value="<?php echo $lavozim; ?>" name="lavozim" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Tulov(so'm)</label>
  		<input type="text" value="<?php echo $tulov; ?>" name="maosh" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<a href="../../xodim.php">
	<input type="button" value="Yopish" name="close" class="btn btn-secondary btn-sm"></a>

	</form>
</body>
</html>
