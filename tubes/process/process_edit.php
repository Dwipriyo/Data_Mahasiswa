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

$id = $_POST['id'];

if (empty($nama) || empty($noid) || empty($nim) || empty($email) || empty($alamat)|| empty($Jurusan) || empty($Status) ) {
    header("location: " . 'http://tubes.com/dashboard.php?page=edit&id=' . $id . '&emptyform=true');
} else {
    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', noid = '$noid', email='$email', NIM = '$nim',alamat = '$alamat', Jurusan = '$Jurusan', Status = '$Status' WHERE id='$id'");
    header("location: " . 'http://tubes.com/dashboard.php?page=home&process=success');
}
