<?php 

    // het database bestand ophalen
    include("./connect_db.php");

    // alle variabelen die binnenkomen schoonmaken
    function cleaning($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // de variabelen een naam geven en schoonmaken
    $naam = cleaning($_POST["naam"]);
    $bericht = cleaning($_POST["bericht"]);

    // comment invoeren
    $sql = "INSERT INTO `comments` (`id`, `naam`, `bericht`, `herken`) VALUES (NULL, '$naam', '$bericht', '3');";

    mysqli_query($conn, $sql);

    header("Location: ./zenden.php");

?>