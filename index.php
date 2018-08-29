<?php
//Panggil Fail Sambung ke Pangkalan Data
include_once("config.php");

//Memaparkan Data Mengikut Susunan Data Terbaru Dimasukkan

$result = mysqli_query($mysqli, "SELECT * FROM produk Order By id DESC");
?>
<html>
	<head>
		<title> Senarai Barangan </title>
	</head>
	<body>
	<center>
	<h2>Senarai Barangan Dan Harga</h2>
	<fieldset>
	<table width='80%' border = 0>
		<tr bgcolor = '#CCCCCC'>
			<td> Bil.</td>
			<td> Nama Produk</td>
			<td> Harga</td>
			<td> Tindakan</td>
		</tr>

<?php
		$no=1;//Nilai Pemula Pembilang

//Memaparkan Data ke Dalam Jadual Yang Dibina
	while($res = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$no;
		echo "<td>".$res['nama']."</td>";
		echo "<td>".RM.$res['harga']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\"> Kemaskini </a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Adakah anda pasti?')\">hapus</a></td>";
		$no++;//Bilangan Increment
		}
			?>
		</table>
			<br><a href="add.php">Daftar Barang Baru</a>
			<button><a href="error404.php"> Error </button>
		</center>
			</fieldset>
		</body>
	<html>
