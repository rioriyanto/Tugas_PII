<?php
include"koneksi.php";
mysqli_query($con,"delete from stok_penjualan where id_stok = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='index.php?page=data_stok'; </script>";

?>