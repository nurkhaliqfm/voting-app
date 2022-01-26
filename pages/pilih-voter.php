<!DOCTYPE html>
<html lang="en">

<?php
include("../config.php");
$sql = "SELECT * FROM voter";
$query = mysqli_query($db, $sql);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting App | by Codebreak;</title>
    <!-- materialize icons, css & js -->
    <link type="text/css" href="../css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" href="../css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href="../css/select2.min.css" rel="stylesheet">
    <link type="text/css" href="../css/select2-bootstrap4.min.css" rel="stylesheet">
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
        <!-- Notification -->
        <?php if ($_GET['status'] == 'gagal') { ?>
            <div class="notif voter-failed show">
                <span class="voter-failed info-icon">
                    <i class="fas fa-check-circle"></i>
                </span>
                <span class="voter-failed msg">Data Pemilih Tidak Ditemukan</span>
                <span class="voter-failed close-btn">
                    <i class="fas fa-times"></i>
                </span>
            </div>
        <?php }; ?>

        <h5 class="title-scan center">Cari Nama Anda</h5>
        <form action="cek-voter.php" method="POST">
            <div class="input-field col s12">
                <select id="siswaNISN" type="text" name="siswaNISN">
                    <option value=""></option>
                    <?php while ($voter = mysqli_fetch_array($query)) { ?>
                        <?php if ($voter['status_voter'] == '0') { ?>
                            <option value="<?= $voter['nisn']; ?>"><?= $voter['nisn'] . ' - ' . $voter['nama']; ?></option>
                        <?php }; ?>
                    <?php }; ?>
                </select>
            </div>
            <div class="center-btn">
                <button name=cekBtn class="btn btn-small scan-btn">Mulai Memilih</button>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/select2.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../js/ui.js"></script>

    <script>
        $("#siswaNISN").select2({
            theme: 'bootstrap4',
            placeholder: "Masukkan NISN Siswa",
            minimumInputLength: 4,
        });
    </script>
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