<html>
<head>
<title>Validasi Angka PHP</title>
<meta content="validasi angka php" name="description">
<meta content="validasi,angka,php" name="keyword">
<head>
	<body style="background:pink">
	<br>	
	<center> <h1>	
	<form>
		<table border="0" >	
		<tr><td>Nama</td><td>:<input type="text" name="nama"></td></tr>	
		<tr><td>Alamat<td>:<textarea style="width: 200px;height: 20px" placeholder="Alamat lengkap"></textarea></td> </tr>
		<tr><td>jenis kelamin</td> 
		<td>:<input type="checkbox" name="pria">pria
		<input type="checkbox" name="wanita">wanita </td> </tr>	
		<tr><td>Agama</td>
			<td>:
			<select>
			<option>Islam</option>
			<option>Kristen</option>
			<option>Hindu</option>
			<option>Budha</option>
			<option>Konghuchu</option>
			</select></td ></tr>
		<tr><td><td><input type="submit" name="submit" value="Daftar"></td></td></tr>
		</table>
	</h1>	
	</form>
	</center>
	
<center>
<h3>DEMO VALIDASI ANGKA PHP</h3>
<form action="" method="POST">
NOMOR HP
<input type="text" name="nomor_hp">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
 if(empty($_POST['nomor_hp'])) {
 $hp = 'NO HP tidak boleh kosong';
 } else if(!is_numeric($_POST['nomor_hp'])) {
 $hp = 'NO HP harus angka';
 } else if(strlen($_POST['nomor_hp']) != 12) {
 $hp = 'NO HP harus berjumlah 12 angka';
 } else {
 $hp = 'NO HP berhasil di input';
 }
 echo $hp;
}
?>
</center>
</body>
</html>
