<?php
include('../config.php');

if (isset($_POST['cekBtn'])) {
    $nisn = $_POST['siswaNISN'];
    var_dump($nisn);

    $sql = "SELECT * FROM voter WHERE nisn = $nisn";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: voting.php?voter=$nisn");
    } else {
        header("Location: pilih-voter.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
};
