<?php 
include 'config.php';

$id_brg=mysql_real_escape_string($_GET['id']);
$det=mysql_query("SELECT * FROM produk WHERE id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	$foto=$d['foto'];
	if (file_exists("../foto/$foto"))
	{
		unlink("../foto/$foto");
	}

	mysql_query("DELETE FROM produk WHERE id='$id_brg'") or die(mysql_error());

	header("location:produk.php");
}
?>
