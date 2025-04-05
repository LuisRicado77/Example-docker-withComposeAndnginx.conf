<?php 
date_default_timezone_set('America/Bogota'); // Conexión a MySQL


 $host = 'db';
 $db = 'reloj_db';
 $user = 'user';
 $pass = 'password';
 $conn = new mysqli($host, $user, $pass, $db); 
  if ($conn->connect_error) { 
    die("Error de conexión: " . $conn->connect_error);
  } 

  // Obtener hora y fecha actual
$hora = date('H:i:s'); $fecha = date('Y-m-d');
       // Insertar en la tabla
$stmt = $conn->prepare("INSERT INTO horas (hora, fecha) VALUES (?, ?)");
$stmt->bind_param("ss", $hora, $fecha);
$stmt->execute();
 $stmt->close();

echo $hora;


$conn->close();

?>