<?php

include "connection.php";
include 'menu.php';


if(isset($_POST['saqlash'])){

//echo $_POST['nomi'].$_POST['manzili'];
echo "<p>ishladi</p>";
}

        
if($con){

    $query = "SELECT * FROM markaz";
    $result = mysqli_query($con,$query);
    //$fetch = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">

<!-- dropdown-->



<div class="container-fluid my-3">
  <h4>Markaz ma'lumotlari</h4>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <a href="./components/crudmarkaz/insert.php" class="text-light">
  Yangi ma'lumot kiritish
</a>
</button>


</div>

<!-- jadval-->
<div class=" container-fluid" style="overflow-y: scroll hidden;">
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Markaz nomi</th>
      <th scope="col">Markaz manzili</th>
      <th scope="col">Markaz telefoni</th>
      <th scope="col">Markaz direktori</th>
      <th scope="col">amallar</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php

    while ($fetch = mysqli_fetch_assoc($result)){

    echo '<tr>
      <td scope="row">'.$fetch["markazid"].'</th>
      <td scope="row">'.$fetch["markazNomi"].'</th>
      <td>'.$fetch["markazManzili"].'</td>
      <td>'.$fetch["markazTelefoni"].'</td>
      <td>'.$fetch["markazDirektori"].'</td>
      <td style="padding: 6px 6px 0 0;">

<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius:10px; padding:0; margin-right:10px;"><a href="./components/crudmarkaz/update.php?markazid='.$fetch['markazid'].'">
  <img src="./images/edit.png" width="20" style="margin: 0;"></a>
</button>

<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius: 10px;padding:0; margin: 0;"><a href="./components/crudmarkaz/del.php?markazid='.$fetch['markazid'].'">
  <img src="./images/remove.png" width="20" style="margin: 0;"></a>
</button>

</td>
</tr>';
}
    ?>
  </tbody>
</table>
</div>




</div>

</body>
</html>

<?php

}
else echo "Bog'lanmadi";

?>