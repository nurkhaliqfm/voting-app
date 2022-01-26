<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Voting App | by Codebreak;</title>
  <!-- materialize icons, css & js -->
  <link type="text/css" href="css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href="css/styles.css" rel="stylesheet">
  <link rel="manifest" href="manifest.json">
  <!-- IOS Support -->
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
  <meta name="theme-color" content="#FFE1C4">
  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="img/codebreak.png">
</head>

<body class="grey lighten-4">

  <!-- top nav -->
  <nav class="z-depth-0">
    <div class="nav-wrapper container">
      <a href="index.php">Voting<span>App</span></a>
      <span class="right grey-text text-darken-1">
        <i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
      </span>
    </div>
  </nav>

  <!-- side nav -->
  <ul id="side-menu" class="sidenav side-menu">
    <li><a class="subheader">VOTING<span style="font-weight: 900;">APP</span> </a></li>
    <li><a href="index.php" class="waves-effect">Home</a></li>
    <li><a href="pages/voting-result.php" class="waves-effect">Hasil Suara</a></li>
    <li><a href="pages/about.html" class="waves-effect">About</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a href="https://www.instagram.com/x000000exp/" class="waves-effect">
        Contact Me</a>
    </li>
  </ul>


  <!-- candidates -->
  <div class="candidates container grey-text text-darken-1">

    <!-- Notification -->
    <?php if ($_GET['status'] == 'sukses' || $_GET['status'] == 'gagal') { ?>
      <div class="notif <?= $_GET['status'] == 'sukses' ? 'notif-success' : 'notif-failed'; ?> show">
        <span class="<?= $_GET['status'] == 'sukses' ? 'notif-success' : 'notif-failed'; ?> info-icon">
          <i class="fas fa-check-circle"></i>
        </span>
        <span class="<?= $_GET['status'] == 'sukses' ? 'notif-success' : 'notif-failed'; ?> msg">
          <?= $_GET['status'] == 'sukses' ? 'Suara Anda Telah Diterima' : 'Suara Anda Gagal Diterima'; ?>
        </span>
        <span class="<?= $_GET['status'] == 'sukses' ? 'notif-success' : 'notif-failed'; ?> close-btn">
          <i class="fas fa-times"></i>
        </span>
      </div>
    <?php }; ?>

    <div class="panel-logo">
      <img src="img/School.png" alt="School Logo">
      <img src="img/OSIS.png" alt="OSIS Logo">
    </div>
    <div class="panel-title">
      <h2>Daftar Bakal Calon Ketua & Wakil Ketua SMA Negeri 2 Gowa</h2>
    </div>
    <div class="card-panel candidate white row">
      <img src="img/1.png" alt="candidate thumb">
      <div class="candidate-details">
        <div class="candidate-title">No. Urut 1</div>
        <div class="candidate-description">Calon Ketua : Maya Dwi Fani</div>
        <div class="candidate-description">Calon Wakil : Nurmusliana</div>
      </div>
    </div>

    <div class="card-panel candidate white row">
      <img src="img/2.png" alt="candidate thumb">
      <div class="candidate-details">
        <div class="candidate-title">No. Urut 2</div>
        <div class="candidate-description">Calon Ketua : Syamsul Al Adi Putra</div>
        <div class="candidate-description">Calon Wakil : Dhiwa Izzulhaqqi Ramadhana</div>
      </div>
    </div>

    <div class="card-panel candidate white row">
      <img src="img/3.png" alt="candidate thumb">
      <div class="candidate-details">
        <div class="candidate-title">No. Urut 3</div>
        <div class="candidate-description">Calon Ketua : Nur Akhwatilla Rafia</div>
        <div class="candidate-description">Calon Wakil : Nurul Satriani</div>
      </div>
    </div>

    <div class="card-panel candidate white row">
      <img src="img/4.png" alt="candidate thumb">
      <div class="candidate-details">
        <div class="candidate-title">No. Urut 4</div>
        <div class="candidate-description">Calon Ketua : Tefan Akbar</div>
        <div class="candidate-description">Calon Wakil : Naylafaiza Anandina</div>
      </div>
    </div>

    <div class="center">
      <a href="pages/pilih-voter.php" class="btn btn-small voting-btn">Voting</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/ui.js"></script>
    <script>
      $('.close-btn').click(function() {
        $('.notif').addClass("hide")
        $('.notif').removeClass("show")
      });

      setTimeout(() => {
        $('.notif').fadeOut('fast');
      }, 5000);
    </script>
</body>

</html>