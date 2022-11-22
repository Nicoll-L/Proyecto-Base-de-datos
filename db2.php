<?php
// conocer y conectar hacia la base de datos 
session_start();
// conexion con la base mi SQL la variable es conn y la conexión se inicia con un mysgli_connect
$conn = mysqli_connect(
  // despues dentro de esta variable ponemos el nombre de donde se encutra nuestro proyecto
  'localhost',
  // por defecto colocamos root
  'root',
  // dado que no tenemos ninguna contraseña en mysql tampoco la ponemos en este
  '',
  // nombre del archivo 
  'php_mysql_crud'
  // mysql_erro nos devuelve un error si no se realiza correctamente la conexión y validación con la base de datos 
) or die(mysqli_error ($mysqli));
// isset para conocer la variable conn, debemos asegurarnos que no sea NULL
if (isset($conn)){
  // Si todo en la conexión salio correctamente se imprime un mensaje por pantalla de que la base se conecto exitosamente
    echo 'La base de datos se conecto exitosamente';
}
?>