<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "wisata_semarang";


$koneksi = mysqli_connect($host, $username, $password, $dbname);


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>