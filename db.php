<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "gestion_ecole";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
$conn->set_charset("utf8");

?>
