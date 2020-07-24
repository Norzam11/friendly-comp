<?php include 'header.php'; 
	   
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Produk</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
<br/>
<br/>

<?php 
$jumlah_record=mysql_query("SELECT * from produk");
$jum=mysql_num_rows($jumlah_record);
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
	</table>
</div>
<br/>
<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Jenis</th>
		<th>Nama Barang</th>
		<th>Harga Jual</th>
		<th>Foto</th>
		<th>Opsi</th>
	</tr>
	<?php $no=1; ?>
	<?php $brg=mysql_query("SELECT * FROM produk") ?>
	<?php while($b=mysql_fetch_array($brg)){ ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $b['jenis'] ?></td>
		<td><?php echo $b['nama'] ?></td>
		<td>Rp.<?php echo number_format($b['harga']) ?>,-</td>
		<td>
			<img src="../foto/<?php echo $b['foto'] ?>" width=100>
		</td>
		<td>
			<a href="det_produk.php?id=<?php echo $b['id']; ?>" class="btn btn-success">Detail</a>
			<a href="edit_produk.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
			<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_produk.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
		</td>
	</tr>		
	<?php 
	}
	?>
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Produk Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_produk.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Jenis</label>
						<select name="jenis" class="form-control">
						<option value="">None</option>
						<option value="Flashdisk">Flashdisk</option>
						<option value="Keyboard">Keyboard</option>
						<option value="Laptop">Laptop</option>
						<option value="Mouse">Mouse</option>
						</select>
					</div>
					<div class="form-group">
						<label>Merk</label>
						<select name="merk" class="form-control">
						<option value="">None</option>
						<option value="Acer">Acer</option>
						<option value="Asus">Asus</option>
						<option value="HP">HP</option>
						<option value="Lenovo">Lenovo</option>
						<option value="Samsung">Samsung</option>
						<option value="Sandisk">Sandisk</option>
						<option value="Logitech">Logitech</option>
						<option value="MSI">MSI</option>
						<option value="Cougar">Cougar</option>
						<option value="Aula">Aula</option>
						<option value="1stPlayer">1stPlayer</option>
						<option value="Logitech">Logitech</option>
						<option value="MSI">MSI</option>
						<option value="Cougar">Cougar</option>
						<option value="Gamdias">Gamdias</option>
						<option value="Roccat">Roccat</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Barang ..">
					</div>
					<div class="form-group">
						<label>Harga Modal (Rp)</label>
						<input name="modal" type="number" class="form-control" placeholder="Modal per unit">
					</div>	
					<div class="form-group">
						<label>Harga Jual (Rp)</label>
						<input name="harga" type="number" class="form-control" placeholder="Harga Jual per unit">
					</div>	
					<div class="form-group">
						<label>Foto</label>
						<input name="foto" type="file">
					</div>	
					<div class="form-group">
						<label>Keterangan</label><br>
						<select name="keterangan" class="form-control">
						<option value="">None</option>
						<option value="Promo">Promo</option>
						<option value="Trending">Trending</option>
					</div>																	
					<div class="form-group">
						<label>Active</label>
						<input name="active" type="text" class="form-control">
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" name="save" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>