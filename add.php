<?php
//Panggil Fail Sambung Ke Pangkalan Data
include_once("config.php");

if(isset($_POST['Submit'])) {
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];

//Tambah Rekod Ke Pangkalan Data
	$result = mysqli_query($mysqli, "INSERT INTO produk (nama,harga)
		VALUES ('$nama','$harga')");

//Papar Mesej Jika Tambah Rekod Berjaya
echo "<script>alert('Tambah maklumat berjaya'); "
	. "window.location='index.php'</script>";
}
else
{
echo "<script>alert('Tambah maklumat gagal'); "
	. "window.location='error404.php'</script>";

?>

<html>
<head>
<title> Tambah Rekod</title>
	</head>
	<body>
	<center> <h2> Tambah Rekod Barangan Dan Harga </h2>
		<fieldset>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

<br><a href="index.php"> Kembali Ke Laman Utama</a>
	</fieldset>
	</center>
<?php
}
?>

</body>

</html>
