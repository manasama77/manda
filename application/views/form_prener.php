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
				<div class="alert bg-danger text-center" role="alert">
					<i class="text-warning fas fa-exclamation-triangle fa-3x mb-3"></i>
					<br />
					<strong class="text-white">Sebelum mengakses halaman Dashboard silahkan lengkapi data-data berikut</strong>
				</div>
				<form id="form_prener" action="<?= base_url('auth/store_prener'); ?>" method="POST">
					<div class="card text-left bg-dark">
						<div class="card-body">
							<div class="form-group">
								<label for="id_prener" class="text-white col-form-label">ID PRENER</label>
								<input type="text" class="form-control" id="id_prener" name="id_prener" minlength="6" maxlength="6" placeholder="Masukan ID Prener" required autofocus />
							</div>
							<div class="form-group">
								<label for="user_telegram" class="text-white col-form-label">USER TELEGRAM</label>
								<input type="text" class="form-control" id="user_telegram" name="user_telegram" minlength="5" maxlength="10" placeholder="Masukan User Telegram" required />
							</div>
							<div class="form-group">
								<label for="id_telegram" class="text-white col-form-label">ID TELEGRAM</label>
								<input type="text" class="form-control" id="id_telegram" name="id_telegram" minlength="5" maxlength="10" placeholder="Masukan ID Telegram" required />
							</div>
							<div class="form-group">
								<label for="no_hp" class="text-white col-form-label">NO HANDPHONE</label>
								<input type="text" class="form-control" id="no_hp" name="no_hp" minlenght="6" maxlength="15" placeholder="Masukan No Handphone" required />
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

<script>
	$(document).ready(() => {
		setInputFilter(document.getElementById("id_prener"), function(value) {
			return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
		});

		setInputFilter(document.getElementById("no_hp"), function(value) {
			return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
		});
	})

	// Restricts input for the given textbox to the given inputFilter function.
	function setInputFilter(textbox, inputFilter) {
		["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
			textbox.addEventListener(event, function() {
				if (inputFilter(this.value)) {
					this.oldValue = this.value;
					this.oldSelectionStart = this.selectionStart;
					this.oldSelectionEnd = this.selectionEnd;
				} else if (this.hasOwnProperty("oldValue")) {
					this.value = this.oldValue;
					this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
				} else {
					this.value = "";
				}
			});
		});
	}
</script>
