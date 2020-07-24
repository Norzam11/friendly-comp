<!DOCTYPE html>
<html>
<head>
	<title>Friendly Computer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'config.php'; ?>
	<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>
<body>	
	<div class="container">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
		<div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Friendly Computer Administrator : Login</h2>
                 <br />
            </div>
        </div>
        <div class="row ">
        	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">	
        		<div class="panel panel-default">
                    <div class="panel-heading"><strong>Masukkan Username dan Password Anda</strong></div>
                        <div class="panel-body">
                        	<form action="login_act.php" method="post">
								<br />
								<div class="form-group input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" class="form-control" placeholder="Username" name="uname">
								</div>
								<div class="form-group input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input type="password" class="form-control" placeholder="Password" name="pass">
								</div>
								<div class="input-group">			
									<input type="submit" class="btn btn-primary" name="login" value="Login">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
</body>
</html>