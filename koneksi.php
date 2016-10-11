<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "belajar";

$koneksi = mysqli_connect($host,$user,$pass) or die (mysqli_error());
$database=mysqli_select_db($koneksi,$db) or die (mysqli_error());


?>