<!DOCTYPE html>
<html>
<head>
	<title></title>
<body>
<?php
	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file = $_FILES['fupload']['name'];
	$deskripsi = $_POST['deskripsi'];
	$direktori = "C:/xampp/htdocs/tppweb/upload/$nama_file";

	if (move_upload_file($lokasi_file,$direktori))
	{
		echo "Nama file      : <b>$nama_file</b> berhasil ter-upload<br>";
		echo "Deskripsi file : <br>$deskripsi";
	}
	else{
		echo "file berhasil di upload";
	}
		echo '<a class="tombol" href=hal.php>home</a>';
?>
</body>
</html>
</head>