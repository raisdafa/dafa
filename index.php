<!DOCTYPE html>
<html>
<head>
	<title>UKK KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
	.bgc{
    background-color: rgba(215, 231, 255, 0.74);
}

</style>
<body>
	<div class="container"  style="margin-top:15%;">
		<div class="content">
			<div class="card bgc mt-5" >
				<div class="row">
					<div class="col-6">
						<div class="card-body">
							<p class="text-center mt-5">Silahkan Masukan Username dan Password</p>
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=="gagal"){
									echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
								}
							}
							?>
							<form method="post" action="cek_login.php">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password">	
								</div>
								<div class="form-group mt-3">
									<button class="btn form-control btn-outline-danger" type="submit">Login</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-6">
						<div class="card-body">
							<img src="assets/cashier.jpg" width="400">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
                body {
            background-image: url('./assets/nihon.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
                }
                    </style>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>