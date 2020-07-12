<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body style="background:white">
	<from name="from">
		<table border="10" width="100%">
			<tr style="background-color:orange">
				<td widht="50%"colspan="2"><H2 ALIGN="center">PENDAFTARAN MABA</H2>
				</td>
			</tr>
		</table>
		<from name="from">
			<table border="10" width="100%">
				<tr style="background-color:white">
					<td widht="50%"colspan="2"><H3 ALIGN="center">Selamat Datang Di Pendaftaran mahasiswa UAD</H3>
						<a><h4 align="center"><img src="gambar.jpg"></H4><h5 align="center">Contact Admin </h5></a>
							<a><h4 align="center"></H4><h5 align="center">Ifta Rutaillah</h5></a>
								<a><h4 align="center"></H4><h5 align="center">081215084007</h5></a>
						</td>
						
						<?php
	echo "<head><tittle>GUEST BOOK</head></little>";
	$fp = fopen("buku tamu.txt","a+");
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$status = $_POST['status'];
	$komentar = $_POST['komentar'];

	fputs($fp,"$nama|$email|$alamat|$status|$komentar\n");
	fclose($fp);
	echo "<center>";
	echo '<h1 class="h1">Terimakasih Atas Partisipasi Anda Mengisi Formulir Pendaftaran</h1><br>';
	echo '<a class="tombol" href=pembayaran.php> Upload Pembayaran</a>';
	echo "&nbsp";
	echo '<a class="tombol" href=Hal.php> Halaman Awal</a>';
	echo "</center>";
	?>

				</td>
				 <div id="ket-group" class="form-group">
				</tr>
			</table>
		</from>

</body>
</html>  