<?php
include('../config.php');

if (isset($_POST['confirm'])) {
    $vote = $_POST['dataValue'];
    $nisn = $_POST['voterId'];

    $sql = "INSERT INTO result (pilihan) VALUE ('$vote')";
    $query = mysqli_query($db, $sql);

    $sql1 = "UPDATE voter SET status_voter = '1' WHERE nisn=$nisn";
    $query1 = mysqli_query($db, $sql1);

    if ($query && $query1) {
        header("Location: ../index.php?status=sukses");
    } else {
        header("Location: ../index.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
};
