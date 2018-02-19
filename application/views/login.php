<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Petugas</title>
	<!-- Memanggil Favicon -->
	<link rel="icon" type="image/ico" href="<?php echo base_url() ?>bootstrap/images/logo.png">
	<!-- Bootstrap -->
	<link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
	<style>
		body {
			background-color:#eee;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
			border-radius: 10px 10px 10px 10px;
		}
	</style>

</head>
<body>
	
	<div class="container">
		<div class="row">
			
			<div class="login">
				<img src="<?php echo base_url() ?>bootstrap/images/logo2.png" width="85" border="0">
				<h4 font color="gray">Login Petugas</h4>
				<br>
				<form role="form" method="post" action="<?php echo base_url()?>login/check">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="password" required autofocus />
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block" value="Masuk" />
					</div>
				</form>
			</div>
			<br>
			<?php echo $this->dataload->footer() ?>
		</div>
	</div>
</body>
</html>
