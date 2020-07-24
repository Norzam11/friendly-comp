<?php 
include 'config.php';

		
if($_POST['save']){
	
	$jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
	$nama=$_POST['nama'];
	$modal=$_POST['modal'];
	$harga=$_POST['harga'];
	$keterangan=$_POST['keterangan'];
	$active=$_POST['active'];

	$namafile = $_FILES['foto']['name'];
	$file_tmp = $_FILES['foto']['tmp_name'];	

	move_uploaded_file($file_tmp, '../foto/'.$namafile);

	$query = mysql_query("INSERT INTO produk VALUES('','$jenis','$merk','$nama','$modal','$harga','$namafile','$keterangan','$active')");

	header("location:produk.php");
}

 ?>