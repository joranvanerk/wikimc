<?php

include ("./connect_db.php");

$titel = $_POST["titel"];
$tekst = $_POST["tekst"];
$plaatje = $_POST["plaatje"];

$sql = "UPDATE teksten SET titel='$titel', tekst='$tekst', plaatje='$plaatje' WHERE id=3";

mysqli_query($conn, $sql);

header("Location: ./creative_frame.php")

?>