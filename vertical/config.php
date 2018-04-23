<?php
error_reporting(0);
$db_user = "root";
$db_passwd  = "";
$db_name  = "forum";
$db_host = "localhost";

$koneksi = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

$kategori = $_POST['kategori'];
$judul = $_POST['judul'];
$tag = $_POST['tag'];
$deskripsi = $_POST['konten'];
$gambar = $_POST['gambar'];
$tanggal = date("Y.m.d");
$penulis = $_POST['penulis'];
$komentar = $_POST['komentar'];

//// HACK:  id_user;kategori;judul_publikasi;tag;deskripsi;gambar;tanggal_upload;penulis;komentar
  $simpan = mysqli_query($koneksi,"INSERT INTO publikasi VALUES('','$kategori','$judul','$tag','$deskripsi','$gambar','$tanggal','$penulis','$komentar')");

if ($simpan) {?>
  <meta http-equiv="refresh" content="0; url=view.php"/>
  <?php echo "sukses";
  die();
}
else {
  echo "not sukses";
}


  ?>
