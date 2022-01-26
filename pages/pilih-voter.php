<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting App | by Codebreak;</title>
    <!-- materialize icons, css & js -->
    <link type="text/css" href="../css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" href="../css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link rel="manifest" href="../manifest.json">
    <!-- IOS Support -->
    <link rel="apple-touch-icon" href="../img/icons/icon-96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    <meta name="theme-color" content="#FFE1C4">
</head>

<body class="grey lighten-4">

    <!-- top nav -->
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <a href="../index.html">Voting<span>App</span></a>
            <span class="right grey-text text-darken-1">
                <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
            </span>
        </div>
    </nav>

    <!-- side nav -->
    <ul id="side-menu" class="sidenav side-menu">
        <li><a class="subheader">VOTING<span style="font-weight: 900;">APP</a></li>
        <li><a href="../index.html" class="waves-effect">Home</a></li>
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
        <h5 class="title-scan center">Cari Nama Anda</h5>

        <div class="center group-qrcode">
            <video style="display: none;" id="preview" class="preview"></video>
        </div>
        <div class="center-btn">
            <a href="voting.php" class="btn btn-small scan-btn">Mulai Memilih</a>
        </div>
    </div>

    <script src="../js/app.js"></script>
    <script src="../js/ui.js"></script>
    <script src="../js/jquery.min.js"></script>
</body>

</html>