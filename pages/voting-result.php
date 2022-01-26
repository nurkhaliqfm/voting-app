<!DOCTYPE html>
<html lang="en">

<?php
include("../config.php");
$sql_1 = "SELECT * FROM result WHERE pilihan='1'";
$query_1 = mysqli_query($db, $sql_1);
$no_1 = mysqli_num_rows($query_1);

$sql_2 = "SELECT * FROM result WHERE pilihan='2'";
$query_2 = mysqli_query($db, $sql_2);
$no_2 = mysqli_num_rows($query_2);

$sql_3 = "SELECT * FROM result WHERE pilihan='3'";
$query_3 = mysqli_query($db, $sql_3);
$no_3 = mysqli_num_rows($query_3);

$sql_4 = "SELECT * FROM result WHERE pilihan='4'";
$query_4 = mysqli_query($db, $sql_4);
$no_4 = mysqli_num_rows($query_4);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Voting App | by Codebreak;</title>
  <!-- materialize icons, css & js -->
  <link type="text/css" href="../css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="../css/styles.css" rel="stylesheet">
  <link rel="manifest" href="../manifest.json">
  <!-- IOS Support -->
  <link rel="apple-touch-icon" href="../img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
  <meta name="theme-color" content="#FFE1C4">
  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="../img/codebreak.png">
</head>

<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="../index.php">Voting<span>App</span></a>
      <span class="right grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">VOTING<span style="font-weight: 900;">APP</a></li>
    <li><a href="../index.php" class="waves-effect">Home</a></li>
    <li><a href="voting-result.php" class="waves-effect">Hasil Suara</a></li>
    <li><a href="about.html" class="waves-effect">About</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a href="https://www.instagram.com/x000000exp/" class="waves-effect">
        Contact Me</a>
    </li>
  </ul>

  <!-- content -->
  <div class="container grey-text">
    <h5 class="title-scan center">Hasil Voting</h5>
    <div class="d-flex flex-wrap">
      <div class="card-panel candidate white row">
        <img src="../img/1.png" alt="candidate thumb">
        <div class="candidate-details">
          <div class="candidate-title">No. Urut 1</div>
          <div class="candidate-voting">Suara : <?= $no_1; ?></div>
        </div>
      </div>

      <div class="card-panel candidate white row">
        <img src="../img/2.png" alt="candidate thumb">
        <div class="candidate-details">
          <div class="candidate-title">No. Urut 2</div>
          <div class="candidate-voting">Suara : <?= $no_2; ?></div>
        </div>
      </div>

      <div class="card-panel candidate white row">
        <img src="../img/3.png" alt="candidate thumb">
        <div class="candidate-details">
          <div class="candidate-title">No. Urut 3</div>
          <div class="candidate-voting">Suara : <?= $no_3; ?></div>
        </div>
      </div>

      <div class="card-panel candidate white row">
        <img src="../img/4.png" alt="candidate thumb">
        <div class="candidate-details">
          <div class="candidate-title">No. Urut 4</div>
          <div class="candidate-voting">Suara : <?= $no_4; ?></div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script type="text/javascript" src="../js/app.js"></script>
  <script type="text/javascript" src="../js/ui.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
</body>

</html>