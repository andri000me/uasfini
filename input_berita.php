<?php
include "koneksi.php";
if (isset($_POST['Input'])) {
	$judul = addslashes (strip_tags ($_POST['judul']));
	$kategori = $_POST['kategori'];
	$headline = addslashes (strip_tags ($_POST['headline']));
	$isi_berita = addslashes (strip_tags ($_POST['isi']));
	$pengirim = addslashes (strip_tags ($_POST['pengirim']));
	$query = "INSERT INTO berita 
	VALUES('','$kategori','$judul','$headline','$isi_berita','$pengirim',now())";
	$sql = mysql_query($query);
	if($sql) {
	echo "<h2> <font color=blue>Berita telah berhasil ditambahkan</font></h2>";
	}else{
	echo "<h2><font color=red>Berita gagal ditambahkan </font></h2>";
	}
	}
?>
<html>
<center>
<head><title>Input Berita </title>
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
	<td colspan="2"><h2>Input Berita</h2></td>
</tr>
<tr>
	<td width="200"> Judul Berita</td>
	<td>: <input type="text" name="judul" size="30"></td>
</tr>
<tr>
	<td>Kategori</td>
	<td>: <select name="kategori">
	<?php
	$query = "SELECT id_kategori,nm_kategori FROM kategori
			  ORDER BY nm_kategori";
	$sql = mysql_query($query);
	while ($hasil = mysql_fetch_array($sql)){
	echo "<option value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
	}
	?>
</select></td>
</tr>
<tr>
	<td>Headline</td>
	<td> : <textarea name="headline" cols="50" rows="4"></textarea></td>
</tr>
<tr>
	<td>Isi Berita</td>
	<td> : <textarea name="isi" cols="50" rows="10"></textarea></td>
</tr>
<tr>
	<td width="200"> Pengirim</td>
	<td>: <input type="text" name="pengirim" size="20"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Input" value="Input Berita">
<input type="reset" name="reset" value="Cancel">
</td>
</tr>
</table>
</form>
</body>
</center>
</html>
