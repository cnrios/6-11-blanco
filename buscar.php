
<!DOCTYPE html>
<html>
    <head>

<title>Mi usuario</title>

</head>
<body>




<form  method="post">

<input type="text"   name ="busque">
<input type="submit" name ="buscar"  placeholder="Buscar">

</form>
<?php
include "conexion.php";

 $busqueda = $_POST['busque'];
 $consult  = "SELECT * FROM cursos WHERE Cursos LIKE '%$busqueda%'";
 $result   = mysqli_query($conex,$consult);
?>

<table class = "tabla" >
         <thead>
           <th class = "col">Curso</th>
            <th class = "col">Dias</th>
             <th class = "col">Horarios</th>

         </thead>
           <tbody>
           <?php     while($row = $result->fetch_assoc()){       ?>
             <tr>

               <td class = "fil"><?php  echo $row['Cursos'] ?></td>
                <td class = "fil"><?php  echo $row['dias'] ?></td>
                 <td class = "fil"><?php  echo $row['horario'] ?></td>

           <?php }?>
           </tbody>
       </table>

</body>
</html>
