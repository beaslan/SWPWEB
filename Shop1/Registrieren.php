<?php
 // Lesen der Parameter
$email = $_REQUEST["email"];
$passwort =  $_REQUEST["passwort"];
$vorname =  $_REQUEST["vorname"];
$nachname =  $_REQUEST["nachname"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into Benutzer values(null,'$email','$vorname','$nachname','$passwort')";
$result = $conn->query($sql);

$conn->close();

// Seite datenholen.php anzeigen
header("Location: Registrieren.html");
?>