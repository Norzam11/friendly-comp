<!DOCTYPE html>
<html>
<head>

	<?php 
	include 'config.php';
	?>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Friendly Computer</title>
	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="shortcut icon" href="img/logo.png">
</head>
<body>
	<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                 <a href="index.php"><img class="img-responsive" src="img/logo.png"></a>
            </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="index.php" class="active"><i class="glyphicon glyphicon-home" aria-hidden="true"></i>&nbsp Beranda</a>
                        <a href="produk.php"><i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>&nbsp Data Produk</a>
                        <a href="logout.php"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>&nbsp Logout</a>
                    </li>
                </ul>
        </nav>


            <!-- Page Content Holder -->
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
                        </div>  
                        <div class="navbar-header navbar-right">
                            <h2>Halaman Administrator</h2>
                        </div>
                    </div>
                </nav>
                <div class="main-content">




	