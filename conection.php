<?php

$host = "localhost";
$user = "KodokLoncat";
$pass = "JambulmuMumbalMumbul";
$db   = "pbw";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die('Koneksi Gagal: ' . mysqli_connect_error());
}
