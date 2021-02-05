<?php
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "core.php";
switch ($_POST['req']) {
  // onbekend verzoek
  default:
    echo "INVALID REQUEST";
    break;

  // inloggen
  case "in":
    // al ingelogd
    if (isset($_SESSION['user'])) { echo "OK"; }

    // even opnieuw verifieren
    else {
      require PATH_LIB . "lib-users.php";
      $_USR = new Users();
      echo $_USR->verify($_POST['email'], $_POST['password']) ? "OK" : $_USR->error ;
    }
    break;

  // uitloggen
  case "out":
    unset($_SESSION['user']);
    echo "OK";
    break;
}