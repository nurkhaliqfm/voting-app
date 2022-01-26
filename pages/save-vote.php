<?php
include('../config.php');

if (isset($_POST['confirm'])) {
    $vote = $_POST['dataValue'];

    $sql = "INSERT INTO result (pilihan) VALUE ('$vote')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.html?status=sukses');
    } else {
        header('Location: ../index.html?status=gagal');
    }
} else {
    die("Akses dilarang...");
};
