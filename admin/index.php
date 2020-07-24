<?php 
session_start();
include 'header.php';

if (!isset($_SESSION['admin'])) 
    {
        header("location:login.php");
        exit();
    }
?>

<div class="col-md-10">
	<h3>Selamat datang di</h3>	
    <h3>Halaman Administrator</h3>
    <h3>FRIENDLY COMPUTER</h3>
</div>

<?php 
include 'footer.php';
?>