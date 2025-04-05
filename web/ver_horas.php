<?php 
$host = 'db';
$db = 'reloj_db';
$user = 'user';
$pass = 'password';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { 
 die("Error de conexión: " . $conn->connect_error);

  }

 $result = $conn->query("SELECT * FROM horas ORDER BY id DESC LIMIT 10");
  echo "<h2>Últimas horas registradas:</h2>";
   echo "<table border='1'><tr><th>ID</th><th>Hora</th><th>Fecha</th></tr>";
    while ($row = $result->fetch_assoc()) {
     echo "<tr><td>{$row['id']}</td><td>{$row['hora']}</td><td>{$row['fecha']}</td></tr>"; 
 } echo "</table>";
  $conn->close();
   ?>