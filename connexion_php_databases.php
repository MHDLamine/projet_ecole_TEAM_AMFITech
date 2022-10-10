<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gestion_ecole";
try {
  $conn = new PDO("mysql:host=$servername;dbname=Gestion_ecole", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection à la BD échouée: " . $e->getMessage();
}
?>

  

