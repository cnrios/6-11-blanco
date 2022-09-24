<?php

include 'db.php';

if (!isset($_POST['save'])) {

  $id = $_POST['id_usuarios'];

  $Created_at = $_POST['created_at'];
  $updated_at = $_POST['updated_at'];
  $estado = $_POST['estado'];
  $usuarios = $_POST['usuarios'];
  $password = $_POST['password'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];





  $query = "INSERT INTO customers (id_usuarios,created_at,updated_at,)
  VALUES ('$id','$Createdat','$email')";

  if (mysqli_query($dbCon, $query)) {
    echo "Html form data has been inserted successfully !";
  } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
