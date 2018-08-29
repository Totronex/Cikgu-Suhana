<?php
//Panggil Fail Sambung Ke Pangkalan Data
include ("config.php");
//Dapatkan ID Dari URL
$id = $_GET['id'];

//Hapuskan Rekod Dari Jadual
$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id = $id");
//Papar Makluman
echo "<script> alert('Hapus maklumat berjaya');"
		"window.location='index.php'</script>";
