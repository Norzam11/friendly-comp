<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Produk</h3>
<a class="btn" href="produk.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysql_real_escape_string($_GET['id']);
$det=mysql_query("SELECT * FROM produk WHERE id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update_produk.php" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td><select name="jenis" class="form-control">
						<option value="<?php echo $d['jenis']; ?>"><?php echo $d['jenis']; ?></option>
						<option value="Flashdisk">Flashdisk</option>
						<option value="Keyboard">Keyboard</option>
						<option value="Laptop">Laptop</option>
						<option value="Mouse">Mouse</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Merk</td>
				<td><select name="merk" class="form-control">
						<option value="<?php echo $d['merk']; ?>"><?php echo $d['merk']; ?></option>
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
				</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Harga Modal (Rp)</td>
				<td><input type="number" class="form-control" name="modal" value="<?php echo $d['modal'] ?>"></td>
			</tr>
			<tr>
				<td>Harga Jual (Rp)</td>
				<td><input type="number" class="form-control" name="harga" value="<?php echo $d['harga'] ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><img src="../foto/<?php echo $d['foto'] ?>" width=200><br>
				<input type="file" name="foto"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><select name="keterangan" class="form-control">
						<option value="<?php echo $d['keterangan']; ?>"><?php echo $d['keterangan']; ?></option>
						<option value="">None</option>
						<option value="Promo">Promo</option>
						<option value="Trending">Trending</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Active</td>
				<td><input type="text" class="form-control" name="active" value="<?php echo $d['active'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="ubah" value="Ubah"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>