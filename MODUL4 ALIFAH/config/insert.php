<?php
require './connector.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO showroom_nama_table (nama_nobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pemabayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($connector, $sql)) {
    header("location: ../pages/List-Alifah.php?pesan=berhasil");
  } else {
    header("location: ../pages/List-Alifah.php?pesan=gagal");
  }
} else {
  header("location: ../pages/List-Alifah.php?pesan=gagal");
}