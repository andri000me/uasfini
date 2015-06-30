<?php
include "koneksi.php";
?>
<html>
<head><title>Index Kategori </title>
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#66FFFF">
<a href = "index.php">Helaman Depan </a> |
<a href = "arsip_berita.php">Arsip Berita </a> |
<a href = "input_berita.php">Input Berita </a> |
<a href = "input_kategori.php">Input Kategori </a> |
<!--<a href = "index_kategori.php">Halaman Kategori </a>-->
<br><br>
<h2>Kategori Terbaru </h2>
	<?php
	$query = "SELECT A.id_kategori, A.nm_kategori, A.deskripsi
	FROM kategori A
	ORDER BY A.id_kategori DESC LIMIT 0,5";
	$sql = mysql_query ($query);
	while ($hasil = mysql_fetch_array ($sql)) {
	$id_kategori = $hasil['id_kategori'];
	$kategori = stripslashes ($hasil['nm_kategori']);
	$deskripsi = stripslashes ($hasil['deskripsi']);

	echo "<font size=4>$id_kategori</a></font><br>";
	echo "<b>$kategori</b>";
	echo "<p>$deskripsi</p>";
	echo "<hr>";
	}
	?>
</body>
</html>
