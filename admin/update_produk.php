<?php 
include 'config.php';

if(isset($_POST['ubah'])){
	$id=$_POST['id'];
	$jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
	$nama=$_POST['nama'];
	$modal=$_POST['modal'];
	$harga=$_POST['harga'];
	$keterangan=$_POST['keterangan'];
	$active=$_POST['active'];

	$namafile = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	//jika foto dirubah
	if (!empty($file_tmp))
	{
		
		$det=mysql_query("SELECT * FROM produk WHERE id='$id'")or die(mysql_error());
		//menghapus gambar lama
		while($d=mysql_fetch_array($det))
		{
			//nama field gambar
			$foto=$d['foto'];
			//menghapus foto lama dari folder
			if (file_exists("../foto/$foto")) 
			{
				unlink("../foto/$foto");
			}
		//memasukkan foto baru dari folder
		move_uploaded_file($file_tmp, '../foto/'.$namafile);

		$query = mysql_query("UPDATE produk SET jenis='$jenis',merk='$merk',nama='$nama',modal='$modal',harga='$harga',foto='$namafile',keterangan='$keterangan',active='$active' WHERE id='$id'");
		}
		
	}
	//jika foto tidak dirubah
	else
	{
		$query = mysql_query("UPDATE produk SET jenis='$jenis',merk='$merk',nama='$nama',modal='$modal',harga='$harga',keterangan='$keterangan',active='$active' WHERE id='$id'");
	}

	header("location:produk.php");
} 

?>