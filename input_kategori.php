<?php
include "koneksi.php";
if (isset($_POST['Input'])) {
	$kategori = addslashes (strip_tags ($_POST['kategori']));
	$deskripsi = addslashes (strip_tags ($_POST['deskripsi']));
	$query = "INSERT INTO kategori 
	VALUES('','$kategori','$deskripsi')";
	$sql = mysql_query($query);
	if($sql) {
	echo "<h2> <font color=blue>Kategori telah berhasil ditambahkan</font></h2>";
	}else{
	echo "<h2><font color=red>Kategori gagal ditambahkan </font></h2>";
	}
	}
?>
<html>
<center>
<head><title>Input Kategori </title>
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#66FFFF">
<a href = "index.php">Helaman Depan </a> |
<a href = "arsip_berita.php">Arsip Berita </a> |
<a href = "input_berita.php">Input Berita </a> |
<a href = "input_kategori.php">Input Kategori </a> |
<!--<a href = "index_kategori.php">Halaman Kategori </a>-->
<br><br>
<form action ="" method="POST" name="input">
<table cellpadding="0" cellspacing="0" border="0" width="700">
<tr>
	<td colspan="2"><h2>Input Kategori</h2></td>
</tr>
<tr>
	<td width="200"> Nama Kategori</td>
	<td>: <input type="text" name="kategori" size="30"></td>
</tr>
<tr>
	<td>Deskripsi</td>
	<td> : <textarea name="deskripsi" cols="50" rows="4"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Input" value="Input Kategori">
<input type="reset" name="reset" value="Cancel">
</td>
</tr>
</table>
</form>
</body>
</center>
</html>
