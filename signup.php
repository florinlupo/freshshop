<?php

require_once ("php/conectare.php");

$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$Email = $_POST['Email'];
$Parola = $_POST['Parola'];
$Telefon = $_POST['Telefon'];
$Adresa = $_POST['Adresa'];
$sql = "INSERT INTO conturi (Nume, Prenume, Email, Parola, Telefon, Adresa) VALUES ('$Nume', '$Prenume', '$Email', '$Parola', '$Telefon', '$Adresa' )";
$result = mysqli_query($conectare, $sql);
header("Location: my-account.html");
?>