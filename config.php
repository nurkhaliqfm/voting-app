<?php
$server = "srv46.niagahoster.com";
$user = "u5023687_voting-app-users";
$password = "8BnStDDDXBrqcGB";
$nama_database = "u5023687_voting-app";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
