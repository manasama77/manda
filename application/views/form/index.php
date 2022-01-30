<!-- Begin Page Content -->
<div class="container-fluid my-auto">

	<!-- Page Heading -->
	<div>
		<h1 class="h5 mb-4 text-white">Form Input Data</h1>
		<div class="row mt-2">
			<div class="col-lg-6 mb-3">
				<div class="card shadow bg-transparent">
					<div class="card-body" style="opacity: 0.8;">
						<div class="row">
							<div class="col mr-2">
								<div class="text-xL font-weight-bold text-white text-right mt-2 mr-0 text-uppercase mb-1">
									INPUT MIE</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
							</div>
						</div>

						<!--form-->
						<form class="user" method="post" action="<?= base_url('form'); ?>">
							<?php error_reporting(0); ?>
							<div class="form-group">
								<input type="text" name="trackid" id="trackid" value="<?= set_value('trackid'); ?>" class="form-control form-control-user text-center" placeholder="TrackID" required>
								<?= form_error('trackid', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-3 text-center text-white">
									<label>Data Type</label>
									<select class="form-control text-center select2" name="type_data" id="type_data" data-placeholder="Pilih Data Type" title="Pilih Data Type" required>
										<option value=""></option>
										<option value="Fresh">Fresh</option>
										<option value="Reupload">Reupload</option>
									</select>
								</div>

								<div class="col-sm-3 text-center text-white">
									<label>Regional</label>
									<select class="form-control text-center select2" name="regional" id="regional" data-placeholder="Pilih Regional" onchange="getwitel()" required>
										<option value="<?= set_value('regional'); ?>">-Select Regional-</option>
										<option value="Treg-1">Treg-1</option>
										<option value="Treg-2">Treg-2</option>
										<option value="Treg-3">Treg-3</option>
										<option value="Treg-4">Treg-4</option>
										<option value="Treg-5">Treg-5</option>
										<option value="Treg-6">Treg-6</option>
										<option value="Treg-7">Treg-7</option>
										<option value="-">-</option>
									</select>
								</div>
								<div class="col-sm-3 text-center text-white">
									<label>Witel</label>
									<select class="form-control text-center select2" name="witel" id="witel" data-placeholder="Pilih Witel" required>
										<option value="">-Select Witel-</option>
									</select>
								</div>
								<div class="col-sm-3 text-center text-white">
									<label>Chanel</label>
									<select class="form-control text-center select2" name="chanel" id="chanel" data-placeholder="Pilih Chanel" required>
										<option value="<?= set_value('chanel'); ?>">-Select Chanel-</option>
										<option value="PARTNER_MYIP">PARTNER_MYIP</option>
										<option value="STARCLICK">STARCLICK</option>
										<option value="DIGITAL_LPC">DIGITAL_LPC</option>
										<option value="DIGITAL_SOBAT">DIGITAL_SOBAT</option>
										<option value="POIN OF SALES">POIN OF SALES</option>
										<option value="Digital_MYIHCust">Digital_MYIHCust</option>
										<option value="LPTR-1">LPTR-1</option>
										<option value="LPTR-2">LPTR-2</option>
										<option value="LPTR-3">LPTR-3</option>
										<option value="LPTR-4">LPTR-4</option>
										<option value="LPTR-5">LPTR-5</option>
										<option value="LPTR-6">LPTR-6</option>
										<option value="LPTR-7">LPTR-7</option>
										<option value="DIGITAL_BUKALAPAK">DIGITAL_BUKALAPAK</option>
										<option value="DIGITAL_INDIHOMECOID">DIGITAL_INDIHOMECOID</option>
										<option value="DIGITAL_IRMA147">DIGITAL_IRMA147</option>
										<option value="DIGITAL_KIOSK">DIGITAL_KIOSK</option>
										<option value="DIGITAL_KIOSQR">DIGITAL_KIOSQR</option>
										<option value="DIGITAL_MKTAPC">DIGITAL_MKTAPC</option>
										<option value="DIGITAL_MKTLFH">DIGITAL_MKTLFH</option>
										<option value="DIGITAL_MKTLPC">DIGITAL_MKTLPC</option>
										<option value="DIGITAL_MKTPAKETGURU">DIGITAL_MKTPAKETGURU</option>
										<option value="DIGITAL_SHOPEE_OMNI">DIGITAL_SHOPEE_OMNI</option>
										<option value="DIGITAL_SMOCA">DIGITAL_SMOCA</option>
										<option value="DIGITAL_TOKOPEDIA_OMNI">DIGITAL_TOKOPEDIA_OMNI</option>
										<option value="DIGITAL_CSA">DIGITAL_CSA</option>
										<option value="DIGITAL_CSA250">DIGITAL_CSA250</option>
										<option value="DIGITAL_LIVEPERSON">DIGITAL_LIVEPERSON</option>
										<option value="DIGITAL_LP-SMB">DIGITAL_LP-SMB</option>
										<option value="DIGITAL_SOCMED">DIGITAL_SOCMED</option>
										<option value="DIGITAL_PENSIUNAN_KARYAWAN">DIGITAL_PENSIUNAN_KARYAWAN</option>
										<option value="DIGITAL_PAKET_GURU">DIGITAL_PAKET_GURU</option>
										<option value="DIGITAL_RUMAH_IBADAH">DIGITAL_RUMAH_IBADAH</option>
										<option value="DIGITAL_APC">DIGITAL_APC</option>
										<option value="DIGITAL_BUMN">DIGITAL_BUMN</option>
										<option value="DIGITAL_LPGIG">DIGITAL_LPGIG</option>
										<option value="DIGITAL_KARTANU">DIGITAL_KARTANU</option>
										<option value="DIGITAL_LP250">DIGITAL_LP250</option>
										<option value="DIGITAL_LPBALI">DIGITAL_LPBALI</option>
										<option value="DIGITAL_LPCVS">DIGITAL_LPCVS</option>
									</select>
								</div>
							</div>

							<div class="form-group row" id="validqc" style="display: none;">
								<!--<div class="col-sm-6 text-center text-white">-->
								<!--    <label>Validation</label>-->
								<!--    <select class="form-control text-center" name="validation" id="validation" required>-->
								<!--        <option value="<?= set_value('validation'); ?>">-Select Status-</option>-->
								<!--        <option value="Valid">Valid</option>-->
								<!--        <option value="Invalid">Invalid</option>-->
								<!--    </select>-->
								<!--</div>-->
								<!--<div class="col-sm-6 text-center text-white">-->
								<!--    <label>Detail Invalid</label>-->
								<!--    <select class="form-control text-center" name="invalid" id="invalid" required>-->
								<!--        <option value="<?= set_value('validation'); ?>">-Select Detail-</option>-->
								<!--        <option value="-">-</option>-->
								<!--        <option value="Jarak kurang dari 5 M">Jarak < 5 M</option>-->
								<!--        <option value="Jarak lebih dari 250 M">Jarak > 250 M</option>-->
								<!--        <option value="Bukan Foto Rumah">Bukan Foto Rumah</option>-->
								<!--        <option value="Jarak kurang dari 5 M dan Bukan Foto Rumah">Jarak < 5 M & Bukan Foto Rumah</option>-->
								<!--        <option value="Jarak lebih dari 250 M dan Bukan Foto Rumah">Jarak > 250 M & Bukan Foto Rumah</option>-->
								<!--    </select>-->
								<!--</div>-->
								<div class="col-sm-6 text-center text-white">
									<label>Validation</label>
									<select class="form-control text-center" name="validation" id="validation" onchange="getvalid()">
										<option value="<?= set_value('validation'); ?>">-Select Validation-</option>
										<option value="Valid">Valid</option>
										<option value="Invalid">Invalid</option>
									</select>
								</div>
								<div class="col-sm-6 text-center text-white">
									<label>Detail Invalid</label>
									<select class="form-control text-center" name="invalid" id="invalid">
										<option value="">-Select Detail-</option>
									</select>
								</div>
							</div>
							<div class="form-group row" style="display: none;" id="ktp">
								<div class="col-sm-6 text-center text-white">
									<label>Validation Identity</label>
									<select class="form-control text-center select2" name="ktp_validation" id="ktp_validation" data-placeholder="Pilih Validation Identity" onchange="getidentity()">
										<option value="<?= set_value('ktp_validation'); ?>">-Select Validation Identity-</option>
										<option value="Valid_Identity">Valid Identity</option>
										<option value="Invalid_Identity">Invalid Identity</option>
										<option value="Pelanggan_Blacklist">Pelanggan Blacklist</option>
									</select>
								</div>
								<div class="col-sm-6 text-center text-white">
									<label>Detail Identity</label>
									<select class="form-control text-center select2" name="detail_ktp" id="detail_ktp" data-placeholder="Pilih Detail Identity">
										<option value="">-Select Detail-</option>
									</select>
								</div>
							</div>
							<div class="form-group row" id="invalidcall" style="display: none;">

								<div class="col-sm-4 text-center text-white">
									<label>Dial To</label>
									<input type="text" name="dialto" id="dialto" value="<?= set_value('dialto'); ?>" class="form-control text-center">
									<?= form_error('trackid', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-4 text-center text-white">
									<label>Status Call</label>
									<select class="form-control text-center" name="statuscall" id="statuscall" onchange="getcall()">
										<option value="<?= set_value('statuscall'); ?>">-Status Call-</option>
										<option value="Contacted">Contacted</option>
										<option value="Uncontacted">Uncontacted</option>
										<option value="Not_Call_Melebihi_Max_Call">Not Call Melebihi Max Call</option>
										<option value="Not_Call_Perbedaan_Zona_Waktu">Not Call Perbedaan Zona Waktu</option>
										<option value="Not_Call_Kendala_Eyebeam">Not Call Kendala Eyebeam</option>
										<option value="Not_Call_Double_Order">Not Call Double Order</option>
										<option value="Not_Call_Resend_Link">Not Call Resend Link</option>

									</select>
								</div>
								<div class="col-sm-4 text-center text-white">
									<label>Detail Identity</label>
									<select class="form-control text-center" name="reasoncall" id="reasoncall">
										<option value="">-Select Detail-</option>
									</select>
								</div>
							</div>
							<hr>
							<!--end form-->
							<button type="submit" class=" text-white btn btn-sm btn-primary btn-block">SUBMIT</button>
						</form>
						<hr>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mb-3">
				<div class="row">
					<div class="col-lg-6 mb-3">
						<div class="card border-left-warning bg-transparent">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
											Daily Valid</div>
										<div class="h5 mb-0 font-weight-bold text-white"><?= $vmenu + $dmenu ?></div>
									</div>
									<div class="col-auto">
										<i class="fas fa-user-check fa-2x text-warning"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3">
						<div class="card border-left-primary bg-transparent">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
											Daily Invalid</div>
										<div class="h5 mb-0 font-weight-bold text-white"><?= $imenu; ?></div>
									</div>
									<div class="col-auto">
										<i class="fas fa-user-times fa-2x text-primary"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 mb-3">
						<div class="card border-left-danger bg-danger">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-0">
										<div class="col-auto text-center">
											<i class="fas fa-list-alt fa-1x text-white"></i>
										</div>
										<div class="text-xs font-weight-bold text-center text-white text-uppercase mb-1">
											Daily</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?= $smenu; ?></div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-3">
						<div class="card border-left-primary bg-primary">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-0">
										<div class="col-auto text-center">
											<i class="fas fa-calendar-check fa-1x text-white"></i>
										</div>
										<div class="text-xs font-weight-bold text-center text-white text-uppercase mb-1">
											Montlhy</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?= $mmenu; ?></div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-3">
						<div class="card border-left-warning bg-warning">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-0">
										<div class="col-auto text-center">
											<i class="fas fa-chart-bar fa-1x text-white"></i>
										</div>
										<div class="text-xs font-weight-bold text-center text-white text-uppercase mb-1">
											Yearly</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800 text-center"><?= $ymenu; ?></div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg mb-3">
						<div class="h6 mb-0 font-weight-bold alert-success text-center" style="opacity: 0.6;"> <?= $this->session->flashdata('message'); ?></div>
					</div>
					<div class="text-light">
						<marquee behavior="scroll" scrollamount="4  " direction="left" width="800">
							<p class="text-light"> NOTES : "Data Regional 6 jarak 250 s/d 350 meter masih dianggap valid"</p>
						</marquee>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.8;">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-dark text-center">Daily Consume [<?= date('d-m-Y G:i:s'); ?>]</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive small">
							<table class="table table-bordered text-white text-center" id="dataTable" width="100%" cellspacing="">
								<thead>
									<tr>
										<th>#</th>
										<th>Date</th>
										<th>Time</th>
										<th>Type Data</th>
										<th>TrackID</th>
										<th>Chanel</th>
										<th>Regional</th>
										<th>Witel</th>
										<th>Validatin</th>
										<th>Detail Invalid</th>
										<th>Validation Identity</th>
										<th>Detail Identity</th>
										<th>Dial To</th>
										<th>Status Call</th>
										<th>Reason Call</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php error_reporting(0); ?>
									<?php foreach ($menu as $m) : ?>
										<tr>
											<th scope="row"><?= $i; ?></th>
											<th><?= $m['date']; ?></th>
											<th><?= $m['time']; ?></th>
											<th><?= $m['data_type']; ?></th>
											<th><?= $m['trackid']; ?></th>
											<th><?= $m['chanel']; ?></th>
											<th><?= $m['regional']; ?></th>
											<th><?= $m['witel']; ?></th>
											<th><?= $m['validation']; ?></th>
											<th><?= $m['detail_invalid']; ?></th>
											<th><?= $m['ktp_validation']; ?></th>
											<th><?= $m['detail_ktp']; ?></th>
											<th><?= $m['dial_to']; ?></th>
											<th><?= $m['status_call']; ?></th>
											<th><?= $m['reason_call']; ?></th>
											<th>

												<div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
													<a href="<?= site_url('form/delete/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
												</div>


											</th>
										</tr>
										<?php $i++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Edit -->
		<!--<div class=" modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">-->
		<!--    <div class="modal-dialog" role="document">-->
		<!--        <div class="modal-content">-->
		<!--            <div class="modal-header">-->
		<!--                <h5 class="modal-title" id="editModalLabel">Edit Data <i class="fas fa-edit"></i> </h5>-->
		<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
		<!--                    <span ario-hidden="true">&times;</span>-->
		<!--                </button>-->
		<!--            </div>-->
		<!--            <form class="user">-->
		<!--                <div class="modal-body">-->
		<!--                    <input type="hidden" class="form-control form-control-user" id="idEdit" name="idEdit">-->
		<!--                    <div class="form-group ">-->
		<!--                        <input type="text" class="form-control text-xs" id="trackidEdit" name="trackidEdit">-->
		<!--                    </div>-->
		<!--                    <select class="custom-select custom-select-lg mb-3 text-xs" id="channelEdit">-->
		<!--                        <option>Channel</option>-->
		<!--                        <option value="DIGITAL CHANEL">DIGITAL CHANEL</option>-->
		<!--                        <option value="PARTNER">PARTNER</option>-->
		<!--                        <option value="MYINDIHOME">MYINDIHOME</option>-->
		<!--                        <option value="INDIHOMECOID">INDIHOMECOID</option>-->
		<!--                        <option value="PARTNER_MYIP">PARTNER_MYIP</option>-->
		<!--                        <option value="POINT OF SALES">POINT OF SALES</option>-->
		<!--                        <option value="STARCLICK">STARCLICK</option>-->
		<!--                    </select>-->

		<!--                    <select class="custom-select custom-select-lg mb-3 text-xs" id="regionalEdit">-->
		<!--                        <option>Regional</option>-->
		<!--                        <option value="Treg-1">Treg-1</option>-->
		<!--                        <option value="Treg-2">Treg-2</option>-->
		<!--                        <option value="Treg-3">Treg-3</option>-->
		<!--                        <option value="Treg-4">Treg-4</option>-->
		<!--                        <option value="Treg-5">Treg-5</option>-->
		<!--                        <option value="Treg-6">Treg-6</option>-->
		<!--                        <option value="Treg-7">Treg-7</option>-->
		<!--                    </select>-->

		<!--                    <select class="custom-select custom-select-lg mb-3 text-xs" id="witelEdit">-->
		<!--                        <option value="<?= set_value('witel'); ?>"></option>-->
		<!--                        <?php foreach ($menwit as $mw) : ?>-->
		<!--                            <option value="<?= $mw['witel']; ?>"><?= $mw['witel']; ?></option>-->
		<!--                        <?php endforeach ?>-->
		<!--                    </select>-->


		<!--                    <select class="custom-select custom-select-lg mb-3 text-xs" id="validasiEdit">-->
		<!--                        <option>Validasi</option>-->
		<!--                        <option value="Valid">Valid</option>-->
		<!--                        <option value="Invalid">Invalid</option>-->
		<!--                    </select>-->

		<!--                    <div class="row">-->
		<!--                        <div class="col-sm-6">-->
		<!--                            <button type="button" class="btn btn-primary btn-user btn-block" data-dismiss="modal">Close</button>-->
		<!--                        </div>-->
		<!--                        <div class="col-sm-6">-->
		<!--                            <button type="button" class="btn btn-primary btn-user btn-block" id="buttonEdit">-->
		<!--                                Submit Edit-->
		<!--                            </button>-->
		<!--                        </div>-->
		<!--                    </div>-->
		<!--                    <hr>-->
		<!--                </div>-->
		<!--            </form>-->


		<!--        </div>-->
		<!--    </div>-->

		<!--</div>-->
	</div>
	<!-- End of Main Content
