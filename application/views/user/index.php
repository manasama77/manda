<div class="container-fluid my-auto">
	<div class="font-weight-bold text-white text-center">
		<p>
			<br><br>
		<H1>Welcomes <?= $user['name']; ?> </H1>
		<H3>- Have you done for jasmine today ? -</H3>
		</p>
		<br>
	</div>
	<?php error_reporting(0); ?>
	<!-- row identitas start -->
	<div class="row">
		<div class="col-12">

			<?php if ($this->session->userdata('success')) { ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong><?= $this->session->userdata('success'); ?></strong>
				</div>
			<?php } ?>

			<?php if ($this->session->userdata('error')) { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong><?= $this->session->userdata('error'); ?></strong>
				</div>
			<?php } ?>

			<h5 class="text-white">IDENTITAS</h5>
			<div id="jam" class="text-white"></div>
		</div>
		<div class="col-lg-4 col-sm-12">
			<table class="table table-bordered text-white small">
				<tbody>
					<tr>
						<th>NAMA</th>
						<th><?= $user['name']; ?></th>
					</tr>
					<tr>
						<th>PRENER</th>
						<th><?= $user['id_prener']; ?></th>
					</tr>
					<tr>
						<th>USER TELEGRAM</th>
						<th><?= $user['user_telegram']; ?></th>
					</tr>
					<tr>
						<th>ID TELEGRAM</th>
						<th><?= $user['id_telegram']; ?></th>
					</tr>
					<tr>
						<th>E-MAIL</th>
						<th><?= $user['email']; ?></th>
					</tr>
				</tbody>
			</table>
			<button type="button" class="btn btn-warning btn-block" onclick="editProfile()">
				<i class="fas fa-pencil-alt fa-fw"></i> Edit Identitas
			</button>
		</div>
	</div>
	<!-- row identitas end -->

	<div class="row">
		<div class="col-12 mt-2 mb-4">
			<hr class="border-white" />
		</div>
	</div>

	<!-- row qc1, qm score, daily consume start -->
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="text-white">TOTAL DATA QC1 <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h5>
					<div class="row mt-4">
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white">
												<?= $average_data_qc_1; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white">
												<?= $sum_data_qc_1; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-chart-bar fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="mb-4 text-white">QM SCORE</h5>
					<div class="row my-auto">
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Yesterday</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fas fa-user-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">This Month</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user-times fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mt-4">
			<div class="card bg-dark">
				<div class="card-body text-left">
					<h5 class="card-title text-white">DAILY CONSUME</h5>
					<div class="table-responsive">
						<table class="table table-bordered text-white text-center small">
							<thead>
								<tr class="bg-gradient-dark">
									<th>Date</th>
									<?php
									foreach ($data_qc_1 as $key => $value) {
										echo "<th>" . $key . "</th>";
									}
									?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Consume</th>
									<?php
									foreach ($data_qc_1 as $key => $value) {
										echo "<th>" . $value . "</th>";
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row qc1, qm score, daily consume end -->

	<div class="row">
		<div class="col-12 mt-2 mb-5">
			<hr class="border-white" />
		</div>
	</div>

	<!-- row verifikasi teknisi, qm score, daily consume start -->
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="text-white">TOTAL DATA VERIFIKASI TEKNISI <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h5>
					<div class="row mt-4">
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white">
												<?= $average_data_teknisi; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white">
												<?= $sum_data_teknisi; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-chart-bar fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="mb-4 text-white">QM SCORE</h5>
					<div class="row my-auto">
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Yesterday</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fas fa-user-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">This Month</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user-times fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mt-4">
			<div class="card bg-dark">
				<div class="card-body text-left">
					<h5 class="card-title text-white">DAILY CONSUME</h5>
					<div class="table-responsive">
						<table class="table table-bordered text-white text-center small">
							<thead>
								<tr class="bg-gradient-dark">
									<th>Date</th>
									<?php
									foreach ($data_teknisi as $key => $value) {
										echo "<th>" . $key . "</th>";
									}
									?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Consume</th>
									<?php
									foreach ($data_teknisi as $key => $value) {
										echo "<th>" . $value . "</th>";
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row verifikasi teknisi, qm score, daily consume end -->

	<div class="row">
		<div class="col-12 mt-2 mb-5">
			<hr class="border-white" />
		</div>
	</div>

	<!-- row sobat indihome, qm score, daily consume start -->
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="text-white">TOTAL DATA SOBAT INDIHOME <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h5>
					<div class="row mt-4">
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white">
												<?= $average_data_sobat_indihome; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white">
												<?= $sum_data_sobat_indihome; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-chart-bar fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="mb-4 text-white">QM SCORE</h5>
					<div class="row my-auto">
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Yesterday</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fas fa-user-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">This Month</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user-times fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mt-4">
			<div class="card bg-dark">
				<div class="card-body text-left">
					<h5 class="card-title text-white">DAILY CONSUME</h5>
					<div class="table-responsive">
						<table class="table table-bordered text-white text-center small">
							<thead>
								<tr class="bg-gradient-dark">
									<th>Date</th>
									<?php
									foreach ($data_sobat_indihome as $key => $value) {
										echo "<th>" . $key . "</th>";
									}
									?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Consume</th>
									<?php
									foreach ($data_sobat_indihome as $key => $value) {
										echo "<th>" . $value . "</th>";
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row sobat indihome, qm score, daily consume start -->

	<div class="row">
		<div class="col-12 mt-2 mb-5">
			<hr class="border-white" />
		</div>
	</div>

	<!-- row warrior indihome, qm score, daily consume start -->
	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="text-white">TOTAL DATA WARRIOR INDIHOME <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h5>
					<div class="row mt-4">
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white">
												<?= $average_data_warrior_indihome; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white">
												<?= $sum_data_warrior_indihome; ?>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-chart-bar fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div class="card bg-dark">
				<div class="card-body">
					<h5 class="mb-4 text-white">QM SCORE</h5>
					<div class="row my-auto">
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Yesterday</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fas fa-user-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">This Month</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-user-times fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mt-4">
			<div class="card bg-dark">
				<div class="card-body text-left">
					<h5 class="card-title text-white">DAILY CONSUME</h5>
					<div class="table-responsive">
						<table class="table table-bordered text-white text-center small">
							<thead>
								<tr class="bg-gradient-dark">
									<th>Date</th>
									<?php
									foreach ($data_warrior_indihome as $key => $value) {
										echo "<th>" . $key . "</th>";
									}
									?>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Consume</th>
									<?php
									foreach ($data_warrior_indihome as $key => $value) {
										echo "<th>" . $value . "</th>";
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row warrior indihome, qm score, daily consume start -->

	<!-- Modal -->
	<form id="form_edit_identitas" action="<?= base_url('user/update'); ?>" method="post">
		<div class="modal fade" id="modal_edit_identitas" tabindex="-1" role="dialog" data-backdrop="static"">
			<div class=" modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-info">
					<h5 class="modal-title text-white">Edit Identitas</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-dark">
					<div class="container-fluid">
						<div class="form-group">
							<label for="id_prener" class="text-white col-form-label">ID PRENER</label>
							<input type="text" class="form-control" id="id_prener" name="id_prener" minlength="6" maxlength="6" placeholder="Masukan ID Prener" required />
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
					</div>
				</div>
				<div class="modal-footer bg-dark">
					<button type="submit" class="btn btn-primary btn-block">Update</button>
					<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
</form>
