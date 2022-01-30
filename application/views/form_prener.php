<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?= base_url('assets/img/icon_manda.png'); ?>" type="image/x-icon">
	<title>Form Perner Manda</title>

	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-4 offset-lg-4 col-sm-12">
				<form id="form_prener" action="<?= base_url('auth/store_prener'); ?>" method="POST">
					<div class="card text-left bg-dark">
						<div class="card-body">
							<div class="form-group">
								<label for="id_prener" class="text-white">ID PRENER</label>
								<input type="number" class="form-control" id="id_prener" name="id_prener" min="10000" maxlength="999999" placeholder="Masukan ID Prener" required autofocus />
							</div>
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>


<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
