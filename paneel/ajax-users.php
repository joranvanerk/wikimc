<?php
// toegang blokkeren
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "core.php";
if (!isset($_SESSION['user'])) { exit("No permisssion to access"); }

// gebruikers
require PATH_LIB . "lib-users.php";
$_USR = new Users();

// een request behandelen en doorsturen
switch ($_POST['req']) {
  // een request is niet juist
  default:
    echo "INVALID REQUEST";
    break;

  // alle gebruikers
  case "list":
    $users = $_USR->getAll(); ?>
    <h1>MANAGE USERS</h1>
    <input type="button" value="Gebruiker toevoegen" onclick="usr.addEdit()"/>
    <?php
    if (is_array($users)) {
      echo "<table class='zebra'>";
      foreach ($users as $u) {
        printf("<tr><td>%s (%s)</td><td class='right'>"
          . "<input type='button' value='verwijderen' onclick='usr.del(%u)'>"
          . "<input type='button' value='bewerken' onclick='usr.addEdit(%u)'>"
          . "</td></tr>", 
          $u['user_name'], $u['user_email'],
          $u['user_id'], $u['user_id']
        );
      }
      echo "</table>";
    } else { echo "<div>geen gebruikers gevonden.</div>"; }
    break;

  // gebruiker bewerken
  case "addEdit":
    $edit = is_numeric($_POST['id']);
    if ($edit) {$user = $_USR->get($_POST['id']); } ?>
    <h1><?=$edit?"EDIT":"ADD"?> USER</h1>
    <form class="standard" onsubmit="return usr.save()">
      <input type="hidden" id="usr_id" value="<?=isset($user['user_id'])?$user['user_id']:""?>"/>
      <label for="usr_name">Naam:</label>
      <input type="text" id="usr_name" required value="<?=isset($user['user_name'])?$user['user_name']:""?>"/>
      <label for="usr_email">Email:</label>
      <input type="text" id="usr_email" required value="<?=isset($user['user_email'])?$user['user_email']:""?>"/>
      <label for="usr_password">Wachtwoord:</label>
      <input type="password" id="usr_password" required minlength="6"/>
      <input type="submit" value="Save"/>
      <input type="button" value="Cancel" onclick="usr.list()"/>
    </form>
    <?php break;

  // gebruiker toevoegen
  case "add":
    echo $_USR->save($_POST['email'], $_POST['name'], $_POST['password']) ? "OK" : $_USR->error ;
    break;

  // gebruiker bewerken
  case "edit":
    echo $_USR->save($_POST['email'], $_POST['name'], $_POST['password'], $_POST['id']) ? "OK" : $_USR->error ;
    break;

  // gebruiker verwijderen
  case "del":
    echo $_USR->del($_POST['id']) ? "OK" : $_USR->error ;
    break;
}