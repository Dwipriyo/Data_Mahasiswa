<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$noid = $_POST['noid'];
$nim = $_POST['NIM'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$Jurusan = $_POST['Jurusan'];
$Status = $_POST['Status'];

// Pengecekan kelengkapan data
if (empty($nama) || empty($noid) || empty($nim) || empty($email) || empty($alamat)|| empty($Jurusan) || empty($Status) ) {
    header("location: " . 'http://tubes.com/dashboard.php?page=create&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO pegawai(nama, noid, NIM, email, alamat, Jurusan, Status) VALUES ('$nama', '$noid', '$nim', '$email', '$alamat', '$Jurusan', '$Status')");
    header("location: " . 'http://tubes.com/dashboard.php?page=home&process=success');
}
