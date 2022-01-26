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
    <h5 style="display: none;" class="title-scan center">Silahkan Scan Barcode</h5>
    <div class="center group-qrcode">
      <video style="display: none;" id="preview" class="preview"></video>
    </div>
    <div style="display: none;" class="btn-group btn-group-toggle mb-5 center" data-toggle="buttons">
      <label class="btn change-cam-btn active">
        <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
      </label>
      <label class="btn change-cam-btn">
        <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
      </label>
    </div>
    <div class="center-btn">
      <button class="btn btn-small scan-btn">Scan Barcode</button>
    </div>
    <div style="display: none;" class="note">
      <p>Anda Memilih No. Urut <span id="result"></span> Sebagai Ketua Osis SMA 2 Gowa
        Selanjutnya.</p>
    </div>
    <div class="center-btn">
      <form action="save-vote.php" method="POST">
        <input type="hidden" name="dataValue" id="dataValue" value="">
        <button style="display: none;" name="confirm" class="btn btn-small konfirm-btn">Konfirmasi</button>
        <a style="display: none;" href="voting.php" class="btn btn-small konfirm-btn">Ubah Pilihan</a>
      </form>
    </div>
  </div>

  <script src="../js/app.js"></script>
  <script src="../js/ui.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/instascan.min.js"></script>
  <script>
    $('.scan-btn').click(function() {
      $('.preview').show('slow');
      $('.title-scan').show('slow');
      $('.btn-group').show('slow');
      $('.scan-btn').hide('1');
    });


    let scanner = new Instascan.Scanner({
      video: document.getElementById('preview'),
      mirror: false,
      scanPeriod: 1
    });

    $('.konfirm-btn').click(function() {
      const val = document.querySelector('#dataValue').value;
      console.log(val);
    })

    scanner.addListener('scan', function(content) {
      $("#result").text(content);
      $('#dataValue').val(content)
      $('.konfirm-btn').show('slow');
      $('.note').show('slow');
      $('.preview').hide('1');
      $('.title-scan').hide('1');
      $('.btn-group').hide('1');

    });

    Instascan.Camera.getCameras().then(function(cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
        $('[name="options"]').on('change', function() {
          if ($(this).val() == 1) {
            if (cameras[0] != "") {
              scanner.start(cameras[0]);
            } else {
              alert('No Front camera found!');
            }
          } else if ($(this).val() == 2) {
            if (cameras[1] != "") {
              scanner.start(cameras[1]);
            } else {
              alert('No Back camera found!');
            }
          }
        });
      } else {
        console.error('No cameras found.');
      }
    }).catch(function(e) {
      console.error(e);
    });
  </script>
</body>

</html>