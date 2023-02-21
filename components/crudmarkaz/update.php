<?php

include '../../connection.php';
	
$id = $_GET['markazid'];

if(isset($_GET['markazid'])) {

	$id = $_GET['markazid'];

	$sql = "Select * from markaz where markazid = $id";
	$result = mysqli_query($con, $sql);
	$massiv = mysqli_fetch_assoc($result);

	$nomi = $massiv['markazNomi'];
	$manzili = $massiv['markazManzili'];
	$telefoni = $massiv['markazTelefoni'];
	$derektori =  $massiv['markazDirektori'];
}
if(isset($_POST['submit'])){

	$nomi = addslashes($_POST['nomi']);
	$manzili = addslashes($_POST['manzili']);
	$telefoni = addslashes($_POST['telefoni']);
	$derektori = addslashes( $_POST['direktori']);

	$sql = "update markaz set markazNomi='$nomi',markazManzili='$manzili',markazTelefoni='$telefoni',markazDirektori='$derektori' where  markazid= '$id'";

	$result = mysqli_query($con, $sql);
	//$massiv = mysqli_fetch_assoc($result);

	var_dump($result);

	if($result)header("location:../../admin.php");
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
  		<label for="exampleFormControlInput1" class="form-label">Markaz nomi</label>
  		<input type="text" value="<?php echo $nomi; ?>" name="nomi" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Markaz manzili</label>
  		<input type="text" value="<?php echo $manzili; ?>" name="manzili" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Markaz telefoni</label>
  		<input type="text" value="<?php echo $telefoni; ?>" name="telefoni" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Markaz direktori</label>
  		<input type="text" value="<?php echo $derektori; ?>" name="direktori" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<a href="../../admin.php">
	<input type="button" value="Yopish" name="close" class="btn btn-secondary btn-sm"></a>

	</form>
</body>
</html>
