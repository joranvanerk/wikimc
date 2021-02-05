<?php
//redirecten als de persoon niet is ingelogd
$_ADMIN = isset($_SESSION['user']);
if (!$_ADMIN && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="login") {
  header('Location: login.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ADMIN PANEL</title>
    <meta name="robots" content="noindex, nofollow">
    <link href="public/admin.css" rel="stylesheet">
    <script src="public/admin.js"></script>
  </head>
  <body>
    <!-- aan het laden -->
    <div id="page-loader">
      <img id="page-loader-spin" src="public/cube-loader.svg">
    </div>

    <?php if ($_ADMIN) { ?>
    <!-- zijbalk -->
    <nav id="page-sidebar">
      <a href="users.php">
        <span class="fa ico">&#9879;</span> Gebruikersbeheer
      </a>
      <a href="./home.php">
        <span class="fa ico">&#xf0c2;</span> Home
      </a>
      <a href="./gameplay.php">
        <span class="fa ico">&#xf0c2;</span> Gameplay
      </a>
      <a href="./survival.php">
        <span class="fa ico">&#xf0c2;</span> Survival
      </a>
      <a href="./creative.php">
        <span class="fa ico">&#xf0c2;</span> Creative
      </a>
    </nav>
    <?php } ?>

    <!-- content -->
    <div id="page-main">
      <?php if ($_ADMIN) { ?>
      <!-- navigatie zijbalk -->
      <nav id="page-nav">
        <div id="page-button-side" onclick="admin.sidebar();">&#9776;</div>
        <div id="page-button-out" onclick="admin.bye();">&#9747;</div>
      </nav>
      <?php } ?>

      <!-- pagina content -->
      <main id="page-contents">