<?php 
session_start();
include 'config.php';
if (isset($_POST['login'])) 
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$ambil=$query=mysql_query("SELECT * FROM admin WHERE uname='$uname' and pass='$pass'")or die(mysql_error());
	if(mysql_num_rows($ambil)==1)
	{
		$_SESSION['admin']=mysql_fetch_array($ambil);
		header("location:index.php");
	}
	else
	{
		header("location:login.php?pesan=gagal")or die(mysql_error());
		// mysql_error();
	}
}

// echo $pas;
 ?>