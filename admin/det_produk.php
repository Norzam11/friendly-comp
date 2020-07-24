<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Produk</h3>
<a class="btn" href="produk.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysql_real_escape_string($_GET['id']);


$det=mysql_query("SELECT * FROM produk WHERE id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table table-bordered">
		<tr>
			<td>Jenis</td>
			<td><?php echo $d['jenis'] ?></td>
		</tr>
		<tr>
			<td>Merk</td>
			<td><?php echo $d['merk'] ?></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>Harga Modal</td>
			<td>Rp.<?php echo number_format($d['modal']); ?>,-</td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td>Rp.<?php echo number_format($d['harga']) ?>,-</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><img src="../foto/<?php echo $d['foto'] ?>" width=200></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><?php echo $d['keterangan'] ?></td>
		</tr>
		<tr>
			<td>Active</td>
			<td><?php echo $d['active'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>