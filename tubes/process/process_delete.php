<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');
// include '../function/helper.php';
// include '../function/koneksi.php';

$id = $_GET['id'];
// var_dump($idS);

mysqli_query($koneksi, "DELETE pegawai WHERE id = '$id'");
header("location:" . "http://tubes.com/dashboard.php?page=home&status=success");
 
?>