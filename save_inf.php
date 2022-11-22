<?php
// inclumos la conexión a la base de datos 
include('db2.php');

if (isset($_POST['save_inf'])) {
  // con el metodo post nos guarda los datos en nuestra base de datos y con los corchetes y las comillas les indicamos en el columna se debe ubicar cada uno
  $Nombre = $_POST['Nombre'];
  $Telefono = $_POST['Telefono'];
  $Email = $_POST['Email'];
  $Mensaje = $_POST['Mensaje'];
  // Insert es un metodo de SQL para insertar en la tabla de la base de datos
  $query = "INSERT INTO informacion(Nombre,Telefono,Email,Mensaje) VALUES ('$Nombre', '$Telefono','$Email','$Mensaje')";
  $result = mysqli_query($conn, $query);
  // Si algo en la parte anterior nos da un error el resultado sera fallido
  if(!$result) {
    die("Fallido");
  }
  // Se imprime como mensaje que guardamos correctamente los datos 
  $_SESSION['message'] = 'Se guardo exitosamente los datos';
  $_SESSION['message_type'] = 'success';
  // especificamos la localizacion del index de php
  header('Location: index.php');

}
