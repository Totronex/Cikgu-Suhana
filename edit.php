<?php
//Panggil Fail Sambung Ke Pangkalan Data
include_once("config.php");

if (isset($_POST['update'])) 
{
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];


//Kemaskini Data Dengan Rekod Baru
	$result = mysqli_query($mysqli, "UPDATE produk SET nama = '$nama',harga = '$harga' WHERE id = $id");

echo "<script>alert('Kemaskini maklumat berjaya');"
		"window.location='index.php'</script>";
}
?>
<?php

//Dapatkan ID Dari URL
$id = $_GET['id'];

//Pilih Data Berdasarkan Pada ID Rekod
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id = $id");

while($res = mysqli_fetch_array($result))
{
	$nama = $res['nama'];
	$harga = $res['harga'];
}
?>

<html>
<head>
	<title>Kemaskini Maklumat</title>
</head>
<body>
	<center> <h2>Kemaskini Maklumat Barangan Dan Harga </h2>
<fieldset>
<form name="form1" method="post" action="edit.php">
	<table border="0">
		<tr>
			<td>Nama produk</td>
			<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
		</tr>
	</table>
	</form>
		<a href="index.php">Home</a>
	</center>

</fieldset>

</body>
</html>