<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- MDBootstrap css -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <style>
    </style>
  </head>
<body>
  <div class="container-fluid" style="padding-top: 5%; padding-left: 12.5%; padding-right: 12.5%; padding-bottom: 1%">
    <div class="card bg-dark">
      <div class="card-body">
      <h2 class="card-title" id="white">
      <!-- de card titel van de database -->
        <?php
            include("./database/connect_db.php");
            mysqli_query($conn, $sql);
            $sql = "SELECT titel from teksten WHERE id='1'";
            $results = $conn-> query($sql);
            if ($results->num_rows > 0) {
              while ($row = $results-> fetch_assoc())
            {
              echo "<tr><td>" . $row["titel"] . "</td></tr>";
            }
          }
          $conn->close();
        ?>
      </h2>
    <p style="font-size: large; padding-bottom: 2.5%;" id="white" class="card-text">
    <!-- de card tekst uit de database -->
      <?php
        include("./database/connect_db.php");
        mysqli_query($conn, $sql);
        $sql = "SELECT tekst from teksten WHERE id='1'";
        $results = $conn-> query($sql);
        if ($results->num_rows > 0) {
          while ($row = $results-> fetch_assoc())
        {
          echo "<tr><td>" . $row["tekst"] . "</td></tr>";
        }
      }
      $conn->close();
        ?>
    </p>
    <!-- de afbeelding inladen vanuit de -->
    <?php
        include("./database/connect_db.php");
        mysqli_query($conn, $sql);
        $sql = "SELECT plaatje from teksten WHERE id='1'";
        $results = $conn-> query($sql);
        if ($results->num_rows > 0) {
          while ($row = $results-> fetch_assoc())
        {
          echo '<img style="padding-bottom: 2.5%;" src="' . $row["plaatje"] . '" alt="afbeelding">';
        }
      }
      $conn->close();
      ?>
      </div>
    </div>
  </div>
<!-- container voor comments te laden -->
<div class="container-fluid" style="padding-left: 12.5%; padding-right: 12.5%; padding-bottom: 4%">
  <div class="card bg-dark">
    <div class="card-body">
      <h2 class="card-title" style="color: white;">
      <!-- de card titel voor boven de comments laden -->
      Reacties
      </h2>
      <iframe src="https://online.samensocial.nl/prefabs/content/content1/zenden.php" frameborder="0" height="240" width="1000"></iframe>
        <!-- de ingevoerde comments laden -->
        <?php
          include("./database/connect_db.php");
          mysqli_query($conn, $sql);
          $sql = "SELECT naam, bericht from comments WHERE herken='1'";
          $results = $conn-> query($sql);
          if ($results->num_rows > 0) {
            while ($row = $results-> fetch_assoc())
          {
            echo '<div style="padding-left: 3%; padding-right: 5%;">
            <hr style="background-color: white;">
              <h5 style="color: white;" class="card-title">'
              . $row["naam"] .
              '</h5>
              <p style="color: white;" class="card-text">'
              . $row["bericht"] .
              '</p> </div>
            ';
          }
        }
        // connectie sluiten
        $conn->close();
        ?>
      </div>
    </div>
  </div>
</div>
  <!-- MD Bootstrap Javascripts -->
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  </body>
</html>