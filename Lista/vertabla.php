<!DOCTYPE html>
<html lang="en">
<head>	
</head>
<body>
<?php
$inc = include("db.php");

if ($inc) {
    $id     = trim($_POST['id']);
	$consulta = "SELECT * FROM `usuarios` WHERE  id = '$id'";
	$resultado = mysqli_query($mysql,$consulta);
}


     ?>
     <br>
		 <table class = "tabla2" >
			 <thead>

                 <th class = "col-id">id</th>
				 <th class = "col">Nombre</th>
				 <th class = "col">Email</th>
                 <th class = "col">created_ad</th>
				 <th class = "col">updated_ad</th>

			 </thead>
				 <tbody>
				 <?php while($row = $resultado->fetch_assoc()){    ?>
					 <tr>
						 <td class = "fil"><?php  echo $row['id'] ?></td>
             <br>

						 <td class = "fil"><?php  echo $row['usuario'] ?></td>
                         <td class = "fil"><?php  echo $row['email'] ?></td>
						 <td class = "fil"><?php  echo $row['created_at'] ?></td>
                         <td class = "fil"><?php  echo $row['updated_at'] ?></td>
				 <?php }?>
				 </tbody>
		 </table>



</body>
</html>