<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px">
<div style="margin-left:20px"></div>

<p>&nbsp;</p>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td><div align="center"><font size="7">Coffe Shop</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jl. Pegajahan, Kamp. Mandalangan No.87 , Kota Cirebon - No. Telp : 081224511561</font></div></td>
	</tr>
</table><hr>

<label><font size="5"><u><center>Laporan Data Stok</center></u></font></label>

<p>&nbsp;</p>

<table style="border: 1px solid gray;" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<th style="border-right: 1px solid gray">No.</th>
		<th style="border-right: 1px solid gray">Tanggal Masuk</th>
		<th style="border-right: 1px solid gray">Kode Produk</th>
		<th style="border-right: 1px solid gray">Nama</th>
		<th style="border-right: 1px solid gray">Stok</th>
		<th style="border-right: 1px solid gray">Suplier</th>
	</tr>

	<?php
		include"koneksi.php";
		$no=1;
		$sqls = mysqli_query($con,"Select * from stok_penjualan");
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$no"; ?></td>

			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[tgl_masuk]"; ?></td>

			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[kd_produk]"; ?></td>

			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[nama]"; ?></td>

			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[stok]"; ?></td>

			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[suplier]"; ?></td>
		</tr>
	<?php $no++;	}
	?>
</table>

<p>&nbsp;</p>

<table align="left" cellpadding="0" cellspacing="0">
	<tr><td>Cirebon, <?php echo date("d F Y") ?></td></tr>
	<tr><td>Owner Coffe Shop
	<p><img src="Image/ttd.JPG" width="20%"></p>
	<u>Rio Riyanto</u>
	</td></tr>
</table>




</body>