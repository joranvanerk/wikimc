<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- core css inladen van mdbootstrap -->
    <?php include_once("..//..//..//core/style.html"); ?>
  </head>
  <!-- body met zwarte achtergrond -->
  <body class="bg-dark">
  <!-- de container waar het comment invoeren formulier instaat -->
  <main class="container">
        <div class="col6">
        <!-- naam laden en invoeren -->
          <form action="./create.php" method="POST">
            <div class="form-group">
              <label for="naam" style="color: white;">Naam</label>
              <input type="text" name="naam" class="form-control" id="naam" aria-describedby="firstnameHelp" placeholder="naam">
            </div>
            <!-- bericht laden en invoeren -->
            <div class="form-group">
              <label for="bericht" style="color: white;">Bericht</label>
              <input type="text" name="bericht" class="form-control" id="bericht" aria-describedby="lastnameHelp" placeholder="bericht">
            </div>
            <!-- comment versturen naar database via create.php bestand -->
            <button type="submit" class="btn btn-primary">Versturen</button>
          </form>
        <div class="col6"></div>
    </div>
    <div class="row">
        <div class="col12"></div>
    </div>
  </main>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="./js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>