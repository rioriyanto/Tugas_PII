<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from stok_penjualan where id_stok = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA MASUK STOK</h3>
</div>
	<div class="form-group">
	<label>Tanggal Masuk :</label>
	<input type="date" name="tgl_masuk" class="form-control" value="<?php echo"$rs[tgl_masuk]" ?>">
	</div>

	<div class="form-group">
	<label>Kode Produk :</label>
	<input type="hidden" name="id_stok" class="form-control" value="<?php echo"$rs[id_stok]" ?>">
	<input type="text" name="kd_produk" class="form-control" value="<?php echo"$rs[kd_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Nama :</label>
	<input type="text" name="nama" class="form-control" value="<?php echo"$rs[nama]" ?>">
	</div>

	<div class="form-group">
	<label>Stok (Gram):</label>
	<input type="text" name="stok" class="form-control" value="<?php echo"$rs[stok]" ?>">
	</div>

	<div class="form-group">
	<label>Suplies :</label>
	<input type="text" name="suplier" class="form-control" value="<?php echo"$rs[suplier]" ?>">
	</div>

    <div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update stok_penjualan set tgl_masuk='$_POST[tgl_masuk]', kd_produk='$_POST[kd_produk]', nama='$_POST[nama]', stok='$_POST[stok]', suplier='$_POST[suplier]' where id_stok='$_POST[id_stok]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_stok'; </script>";
}
?>



<?php
}
?>


<?php 
function Input_data(){
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">INPUT DATA STOK MASUK</h3>
</div>
	<div class="form-group">
	<label>Tanggal Masuk :</label>
	<input type="date" name="tgl_masuk" class="form-control"
	value="<?php echo"$rs[tgl_masuk]" ?>">
	</div>

	<div class="form-group">
	<label>Kode Produk :</label>
	<input type="hidden" name="id_stok" class="form-control" value="<?php echo"$rs[id_stok]" ?>">
	<input type="text" name="kd_produk" class="form-control"
	value="<?php echo"$rs[kd_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Nama :</label>
	<input type="text" name="nama" class="form-control"
	value="<?php echo"$rs[nama]" ?>">
	</div>

	<div class="form-group">
	<label>Stok (Gram):</label>
	<input type="text" name="stok" class="form-control"
	value="<?php echo"$rs[stok]" ?>">
	</div>

	<div class="form-group">
	<label>Suplier :</label>
	<input type="text" name="suplier" class="form-control"
	value="<?php echo"$rs[suplier]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into stok_penjualan (tgl_masuk, kd_produk, nama, stok, suplier) values ('$_POST[tgl_masuk]', '$_POST[kd_produk]','$_POST[nama]','$_POST[stok]','$_POST[suplier]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_stok'; </script>";
}
?>
<?php
}
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_GET['id'];
if($id == "update"){
	Update_data();
}else{
	Input_data();
}
?>

