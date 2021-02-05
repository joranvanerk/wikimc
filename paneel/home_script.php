<?php

include ("./connect_db.php");

$titel = $_POST["titel"];
$tekst = $_POST["tekst"];
$plaatje = $_POST["plaatje"];

$sql = "UPDATE teksten SET titel='$titel', tekst='$tekst', plaatje='$plaatje' WHERE id=0";

mysqli_query($conn, $sql);

header("Location: ./home_frame.php")

?>