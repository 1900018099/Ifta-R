<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body style="background:white">
	<from name="from">
		<table border="10" width="100%">
			<tr style="background-color:orange">
				<td widht="50%"colspan="2"><H1 ALIGN="center">PENDAFTARAN MAHASISWA BARU UNIVERSITAS AHMAD DAHLAN</H1>
				</td>
			</tr>
		</table>
	</from>
		<from name="from">
			<table border="10" width="100%">
				<tr style="background-color:white">
					<td widht="50%"colspan="2"><H2 ALIGN="center">Selamat Datang Di Pendaftaran MABA</H2>
						<a><h4 align="center"><img src="gambar.jpg"></H4><h3 align="center">Silahkan Klik tombol pendaftaran jika anda ingin melakukan pendaftaran </h3></a></td>
					</tr>
				</tbody>
			</table>
			<center>
				<button class="tombol"><a align="center" href="pendaftaran.html" >Pendaftaran</a></button>
				<button class="tombol"><a align="center" href="lihat.php" >Lihat Pengunjung</a></button>
				<button class="tombol"><a align="center" href="pembayaranmaba.php" >Upload pembayaran</a></button>
				<br><br>
			</center>
<?php
echo("<br>");
$filecounter="counter.txt";
$f1=fopen($filecounter,"r+");
$hit=fread($f1,filesize($filecounter));
echo("<table widht=250 align=center border=1 cellspacing=0 cellpadding=0
	bordercolor=aFFF80C><tr>");
echo("<td widht=250 valign=middle align=center>"); 
echo("<font face=verdana size=2 color#ffffff><b>");
echo("Anda pengunjung yang ke :");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("<tr></table>");
fclose($f1);
$f1=fopen($filecounter,"wt");
	$hit=$hit+1;
	fwrite($f1,$hit,strlen($hit));
	fclose($f1);
	?>

	  <from name="from">
		<table border="10" width="100%">
			<tr style="background-color:gray">
				<td><a href="pesan.html"></a></td>
				<td><a href="logout.html"></a></td>
				
			</td>
			</tr>
		</table>
	</from>
				</tr>
			</table>
		</from>

</body>
</html>  
