<div class="container-fluid my-auto">
	<div class="row">
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">TOTAL DATA <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h1>
			<div class="card" style="opacity: 0.7;">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-4 mb-1">
							<div class="card border-left-danger bg-danger">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Daily</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= $distmenu; ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-list-alt fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 mb-1">
							<div class="card border-left-primary bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Monthly</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= $distmmenu; ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 mb-1">
							<div class="card border-left-success bg-success">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												Yearly</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white"><?= $distymenu; ?></div>
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
		<div class="col-lg-4">
			<h1 class="h5 mb-4 text-white">DAILY VALID</h1>
			<div class="card" style="opacity: 0.7;">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-danger bg-danger">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Valid</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= $valmenu; ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fas fa-user-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-primary">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												Invalid</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= $distmenu - $valmenu ?></div>
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
		<div class="col-lg-2">
			<h1 class="h5 mb-4 text-white">AGENT ONLINE</h1>
			<div class="card" style="opacity: 0.7;">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg mb-1">
							<div class="card border-left-info bg-info">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												ONLINE</div>
											<div class="h5 mb-0 font-weight-bold text-white">OGP</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-address-book fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>


	<div class="row text-xs" style="opacity: 0.85;">
		<div class="col-lg-6">
			<div class="row">
				<div class="col-sm-3 text-center text-white">
					<label>Start Date</label>
					<input class="form-control date text-center" type="date" name="date1" required>
				</div>
				<div class="col-sm-3 text-center text-white">
					<label>End Date</label>
					<input class="form-control date text-center" type="date" name="date2" required>
				</div>
				<div class="col-sm-3 text-center text-white">
					<label>Channel</label>
					<select class="form-control text-center" name="channel" id="channel" required>
						<option value="All Channel">All Channel</option>
						<option value="DIGITAL CHANEL">DIGITAL CHANEL</option>
						<option value="MYINDIHOME">MYINDIHOME</option>
						<option value="INDIHOMECOID">INDIHOMECOID</option>
						<option value="PARTNER">PARTNER</option>
						<option value="MYIH PARTNER">MYIH PARTNER</option>
						<option value="STARCLICK">STARCLICK</option>
						<option value="POIN OF SALES">POIN OF SALES</option>
					</select>
				</div>
				<div class="col-sm-3 text-center text-white">
					<label>Find Data</label>
					<input class="btn btn-outline-primary form-control " value="Search" id="filter" name="filter" href="" type="submit"> </input>
				</div>
			</div>



			<br>
			<div class="row">
				<?php error_reporting(0); ?>

				<table class="table table-striped table-dark mx-3 mr-3">
					<thead>
						<tr class="bg-warning text-dark">
							<th scope="col">No</th>
							<th scope="col">Regional</th>
							<th scope="col">Valid</th>
							<th scope="col">Invalid</th>
							<th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Treg-1</td>
							<td class="text-light"><?= $treg1; ?> / <?= ($treg1 == 0 || $treg1all) ? 0 : round(($treg1 / $treg1all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg1all - $treg1 ?> / <?= round((($treg1all - $treg1) / $treg1all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg1'); ?>" class="text-light"><?= $treg1all; ?></a></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Treg-2</td>
							<td class="text-light"><?= $treg2; ?> / <?= round(($treg2 / $treg2all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg2all - $treg2 ?> / <?= round((($treg2all - $treg2) / $treg2all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg2'); ?>" class="text-light"><?= $treg2all; ?></a></td>

						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Treg-3</td>
							<td class="text-light"><?= $treg3; ?> / <?= round(($treg3 / $treg3all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg3all - $treg3 ?> / <?= round((($treg3all - $treg3) / $treg3all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg3'); ?>" class="text-light"><?= $treg3all; ?></a></td>

						</tr>
						<tr>
							<th scope="row">4</th>
							<td>Treg-4</td>
							<td class="text-light"><?= $treg4; ?> / <?= round(($treg4 / $treg4all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg4all - $treg4 ?> / <?= round((($treg4all - $treg4) / $treg4all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg4'); ?>" class="text-light"><?= $treg4all; ?></a></td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>Treg-5</td>
							<td class="text-light"><?= $treg5; ?> / <?= round(($treg5 / $treg5all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg5all - $treg5 ?> / <?= round((($treg5all - $treg5) / $treg5all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg5'); ?>" class="text-light"><?= $treg5all; ?></a></td>
						</tr>
						<tr>
							<th scope="row">6</th>
							<td>Treg-6</td>
							<td class="text-light"><?= $treg6; ?> / <?= round(($treg6 / $treg6all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg6all - $treg6 ?> / <?= round((($treg6all - $treg6) / $treg6all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg6'); ?>" class="text-light"><?= $treg6all; ?></a></td>
						</tr>
						<tr>
							<th scope="row">7</th>
							<td>Treg-7</td>
							<td class="text-light"><?= $treg7; ?> / <?= round(($treg7 / $treg7all) * 100, 1); ?> %</td>
							<td class="text-light"><?= $treg7all - $treg7 ?> / <?= round((($treg7all - $treg7) / $treg7all) * 100, 1) ?> %</td>
							<td><a href="<?= base_url('admin/treg7'); ?>" class="text-light"><?= $treg7all; ?></a></td>
						</tr>
						<tr class="bg-warning text-dark font-weight-bold">
							<th scope="row"></th>
							<td>Total</td>
							<td><?= $valmenu; ?> / <?= round(($valmenu / $distmenu) * 100, 1); ?> %</td>
							<td><?= ($distmenu - $valmenu); ?> / <?= round((($distmenu - $valmenu) / $distmenu) * 100, 1); ?> %</td>
							<td><?= $distmenu; ?></td>

						</tr>

					</tbody>
				</table>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="row">
				<div class="col-sm-3 text-center text-white">
					<label>Start Date</label>
					<input class="form-control date text-center" type="date" name="date1" required>
				</div>
				<div class="col-sm-3 text-center text-white">
					<label>End Date</label>
					<input class="form-control date text-center" type="date" name="date2" required>
				</div>
				<div class="col-sm-3 text-center text-white">
					<label>Channel</label>
					<select class="form-control text-center" name="chanel" id="chanel" required>
						<option value="All Channel">All Channel</option>
						<option value="DIGITAL CHANEL">DIGITAL CHANEL</option>
						<option value="MYINDIHOME">MYINDIHOME</option>
						<option value="INDIHOMECOID">INDIHOMECOID</option>
						<option value="PARTNER">PARTNER</option>
						<option value="MYIH PARTNER">MYIH PARTNER</option>
						<option value="STARCLICK">STARCLICK</option>
						<option value="POIN OF SALES">POIN OF SALES</option>
					</select>
				</div>
				<div class="col-sm-3 text-center text-white">
					<label>Find Data</label>
					<input class="btn btn-outline-primary form-control " value="Search" id="filter" name="filter" href="" type="submit"> </input>
				</div>
			</div>



			<br>
			<div class="row">

				<table class="table table-striped table-dark mx-3 mr-3">
					<thead>
						<tr class="bg-warning text-dark">
							<th scope="col">Time Interval</th>
							<th scope="col">Data</th>
							<th scope="col">AO</th>
							<th scope="col">Time Interval</th>
							<th scope="col">Data</th>
							<th scope="col">AO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>06:00 - 07:00</td>
							<td><?= $interval1; ?></td>
							<td><?= $ao1; ?></td>
							<td>14:00 - 15:00</td>
							<td><?= $interval9; ?></td>
							<td><?= $ao9; ?></td>
						</tr>
						<tr>
							<td>07:00 - 08:00</td>
							<td><?= $interval2; ?></td>
							<td><?= $ao2; ?></td>
							<td>15:00 - 16:00</td>
							<td><?= $interval10; ?></td>
							<td><?= $ao10; ?></td>
						</tr>
						<tr>
							<td>08:00 - 09:00</td>
							<td><?= $interval3; ?></td>
							<td><?= $ao3; ?></td>
							<td>16:00 - 17:00</td>
							<td><?= $interval11; ?></td>
							<td><?= $ao11; ?></td>
						</tr>
						<tr>
							<td>09:00 - 10:00</td>
							<td><?= $interval4; ?></td>
							<td><?= $ao4; ?></td>
							<td>17:00 - 18:00</td>
							<td><?= $interval12; ?></td>
							<td><?= $ao12; ?></td>
						</tr>
						<tr>
							<td>10:00 - 11:00</td>
							<td><?= $interval5; ?></td>
							<td><?= $ao5; ?></td>
							<td>18:00 - 19:00</td>
							<td><?= $interval13; ?></td>
							<td><?= $ao13; ?></td>
						</tr>
						<tr>
							<td>11:00 - 12:00</td>
							<td><?= $interval6; ?></td>
							<td><?= $ao6; ?></td>
							<td>19:00 - 20:00</td>
							<td><?= $interval14; ?></td>
							<td><?= $ao14; ?></td>
						</tr>
						<tr>
							<td>12:00 - 13:00</td>
							<td><?= $interval7; ?></td>
							<td><?= $ao7; ?></td>
							<td>20:00 - 21:00</td>
							<td><?= $interval15; ?></td>
							<td><?= $ao15; ?></td>
						</tr>
						<tr>
							<td>13:00 - 14:00</td>
							<td><?= $interval8; ?></td>
							<td><?= $ao8; ?></td>
							<td>21:00 - 22:00</td>
							<td><?= $interval16; ?></td>
							<td><?= $ao16; ?></td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
