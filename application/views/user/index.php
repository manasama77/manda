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
	<div class="row">
		<div class="col-12">
			<h5 class="text-white">IDENTITASAAA</h5>
		</div>
		<div class="col-lg-4 col-sm-12">
			<table class="table table-bordered text-white small">
				<tbody>
					<tr>
						<th>NAMA</th>
						<th><?= $user['name']; ?></th>
					</tr>
					<tr>
						<th>PERNER</th>
						<th><?= $user['id_perner']; ?></th>
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
		</div>
	</div>
	<div class="row">
		<div class="col-12 mt-2 mb-4">
			<hr class="border-white" />
		</div>
	</div>
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

	<div class="row">
		<div class="col-12 mt-2 mb-5">
			<hr class="border-white" />
		</div>
	</div>

	<div class=" row">
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">TOTAL DATA VERIFIKASI TEKNISI <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h1>
			<div class="card border-left-primary bg-transparent">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= round((($satuteknisi + $duateknisi + $tigateknisi + $empatteknisi + $limateknisi + $enamteknisi + $tujuhteknisi + $delapanteknisi + $sembilanteknisi + $sepuluhteknisi + $sebelasteknisi + $duabelasteknisi + $tigabelasteknisi + $empatbelasteknisi + $limabelasteknisi + $enambelasteknisi + $tujuhbelasteknisi + $sembilanbelasteknisi + $duapuluhteknisi + $duapuluhsatuteknisi + $duapuluhduateknisi + $duapuluhtigateknisi + $duapuluhempatteknisi + $duapuluhlimateknisi + $duapuluhenamteknisi + $duapuluhtujuhteknisi + $duapuluhdelapanteknisi + $duapuluhsembilanteknisi + $tigapuluhteknisi + $tigapuluhsatuteknisi) / $totaluniqteknisi), 2); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white"><?= $mmenuteknisi; ?></div>
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
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">QM SCORE</h1>
			<div class="card border-left-primary bg-transparent">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
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
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
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
	</div>
	<div class="row">
		<div class="col-lg table-responsive small mt-4">
			<label class="text-white">DAILY CONSUME</label>
			<table class="table table-bordered text-white text-center xs">
				<thead>
					<tr class="bg-gradient-dark">
						<th>Date</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
						<th>15</th>
						<th>16</th>
						<th>17</th>
						<th>18</th>
						<th>19</th>
						<th>20</th>
						<th>21</th>
						<th>22</th>
						<th>23</th>
						<th>24</th>
						<th>25</th>
						<th>26</th>
						<th>27</th>
						<th>28</th>
						<th>29</th>
						<th>30</th>
						<th>31</th>

					</tr>
					<tr>
						<th>Consume</th>
						<th><?= $satuteknisi; ?></th>
						<th><?= $duateknisi; ?></th>
						<th><?= $tigateknisi; ?></th>
						<th><?= $empatteknisi; ?></th>
						<th><?= $limateknisi; ?></th>
						<th><?= $enamteknisi; ?></th>
						<th><?= $tujuhteknisi; ?></th>
						<th><?= $delapanteknisi; ?></th>
						<th><?= $sembilanteknisi; ?></th>
						<th><?= $sepuluhteknisi; ?></th>
						<th><?= $sebelasteknisi; ?></th>
						<th><?= $duabelasteknisi; ?></th>
						<th><?= $tigabelasteknisi; ?></th>
						<th><?= $empatbelasteknisi; ?></th>
						<th><?= $limabelasteknisi; ?></th>
						<th><?= $enambelasteknisi; ?></th>
						<th><?= $tujuhbelasteknisi; ?></th>
						<th><?= $delapanbelasteknisi; ?></th>
						<th><?= $sembilanbelasteknisi; ?></th>
						<th><?= $duapuluhteknisi; ?></th>
						<th><?= $duapuluhsatuteknisi; ?></th>
						<th><?= $duapuluhduateknisi; ?></th>
						<th><?= $duapuluhtigateknisi; ?></th>
						<th><?= $duapuluhempatteknisi; ?></th>
						<th><?= $duapuluhlimateknisi; ?></th>
						<th><?= $duapuluhenamteknisi; ?></th>
						<th><?= $duapuluhtujuhteknisi; ?></th>
						<th><?= $duapuluhdelapanteknisi; ?></th>
						<th><?= $duapuluhsembilanteknisi; ?></th>
						<th><?= $tigapuluhteknisi; ?></th>
						<th><?= $tigapuluhsatuteknisi; ?></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-12 mt-2 mb-5">
			<hr class="border-white" />
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">TOTAL DATA SOBAT INDIHOME <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h1>
			<div class="card border-left-primary bg-transparent">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= round((($satusobat + $duasobat + $tigasobat + $empatsobat + $limasobat + $enamsobat + $tujuhsobat + $delapansobat + $sembilansobat + $sepuluhsobat + $sebelassobat + $duabelassobat + $tigabelassobat + $empatbelassobat + $limabelassobat + $enambelassobat + $tujuhbelassobat + $sembilanbelassobat + $duapuluhsobat + $duapuluhsatusobat + $duapuluhduasobat + $duapuluhtigasobat + $duapuluhempatsobat + $duapuluhlimasobat + $duapuluhenamsobat + $duapuluhtujuhsobat + $duapuluhdelapansobat + $duapuluhsembilansobat + $tigapuluhsobat + $tigapuluhsatusobat) / $totaluniqsobat), 2); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white"><?= $mmenusobat; ?></div>
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
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">QM SCORE</h1>
			<div class="card border-left-primary bg-transparent">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
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
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
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
	</div>
	<div class="row">
		<div class="col-lg table-responsive small mt-4">
			<label class="text-white">DAILY CONSUME</label>
			<table class="table table-bordered text-white text-center xs">
				<thead>
					<tr class="bg-gradient-dark">
						<th>Date</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
						<th>15</th>
						<th>16</th>
						<th>17</th>
						<th>18</th>
						<th>19</th>
						<th>20</th>
						<th>21</th>
						<th>22</th>
						<th>23</th>
						<th>24</th>
						<th>25</th>
						<th>26</th>
						<th>27</th>
						<th>28</th>
						<th>29</th>
						<th>30</th>
						<th>31</th>

					</tr>
					<tr>
						<th>Consume</th>
						<th><?= $satusobat; ?></th>
						<th><?= $duasobat; ?></th>
						<th><?= $tigasobat; ?></th>
						<th><?= $empatsobat; ?></th>
						<th><?= $limasobat; ?></th>
						<th><?= $enamsobat; ?></th>
						<th><?= $tujuhsobat; ?></th>
						<th><?= $delapansobat; ?></th>
						<th><?= $sembilansobat; ?></th>
						<th><?= $sepuluhsobat; ?></th>
						<th><?= $sebelassobat; ?></th>
						<th><?= $duabelassobat; ?></th>
						<th><?= $tigabelassobat; ?></th>
						<th><?= $empatbelassobat; ?></th>
						<th><?= $limabelassobat; ?></th>
						<th><?= $enambelassobat; ?></th>
						<th><?= $tujuhbelassobat; ?></th>
						<th><?= $delapanbelassobat; ?></th>
						<th><?= $sembilanbelassobat; ?></th>
						<th><?= $duapuluhsobat; ?></th>
						<th><?= $duapuluhsatusobat; ?></th>
						<th><?= $duapuluhduasobat; ?></th>
						<th><?= $duapuluhtigasobat; ?></th>
						<th><?= $duapuluhempatsobat; ?></th>
						<th><?= $duapuluhlimasobat; ?></th>
						<th><?= $duapuluhenamsobat; ?></th>
						<th><?= $duapuluhtujuhsobat; ?></th>
						<th><?= $duapuluhdelapansobat; ?></th>
						<th><?= $duapuluhsembilansobat; ?></th>
						<th><?= $tigapuluhsobat; ?></th>
						<th><?= $tigapuluhsatusobat; ?></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-12 mt-2 mb-5">
			<hr class="border-white" />
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">TOTAL DATA WARRIOR INDIHOME <i class="text-warning text-xs"><?= date('d-m-Y H:i:s'); ?></i></h1>
			<div class="card border-left-primary bg-transparent">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">Average</div>
											<div class="h5 mb-0 font-weight-bold text-white"><?= round((($satuwarrior + $duawarrior + $tigawarrior + $empatwarrior + $limawarrior + $enamwarrior + $tujuhwarrior + $delapanwarrior + $sembilanwarrior + $sepuluhwarrior + $sebelaswarrior + $duabelaswarrior + $tigabelaswarrior + $empatbelaswarrior + $limabelaswarrior + $enambelaswarrior + $tujuhbelaswarrior + $sembilanbelaswarrior + $duapuluhwarrior + $duapuluhsatuwarrior + $duapuluhduawarrior + $duapuluhtigawarrior + $duapuluhempatwarrior + $duapuluhlimawarrior + $duapuluhenamwarrior + $duapuluhtujuhwarrior + $duapuluhdelapanwarrior + $duapuluhsembilanwarrior + $tigapuluhwarrior + $tigapuluhsatuwarrior) / $totaluniqwarrior), 2); ?></div>
										</div>
										<div class="col-auto">
											<i class="fas fa-calendar-check fa-2x text-white"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
											<div class="h5 mb-0 text-left font-weight-bold text-white"><?= $mmenuwarrior; ?></div>
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
		<div class="col-lg-6">
			<h1 class="h5 mb-4 text-white">QM SCORE</h1>
			<div class="card border-left-primary bg-transparent">
				<div class="card-body">
					<div class="row my-auto">
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
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
						<div class="col-lg-6 mb-1">
							<div class="card border-left-primary bg-transparent">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-white text-uppercase mb-1">
												This Month</div>
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
	</div>
	<div class="row">
		<div class="col-lg table-responsive small mt-4">
			<label class="text-white">DAILY CONSUME</label>
			<table class="table table-bordered text-white text-center xs">
				<thead>
					<tr class="bg-gradient-dark">
						<th>Date</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
						<th>15</th>
						<th>16</th>
						<th>17</th>
						<th>18</th>
						<th>19</th>
						<th>20</th>
						<th>21</th>
						<th>22</th>
						<th>23</th>
						<th>24</th>
						<th>25</th>
						<th>26</th>
						<th>27</th>
						<th>28</th>
						<th>29</th>
						<th>30</th>
						<th>31</th>

					</tr>
					<tr>
						<th>Consume</th>
						<th><?= $satuwarrior; ?></th>
						<th><?= $duawarrior; ?></th>
						<th><?= $tigawarrior; ?></th>
						<th><?= $empatwarrior; ?></th>
						<th><?= $limawarrior; ?></th>
						<th><?= $enamwarrior; ?></th>
						<th><?= $tujuhwarrior; ?></th>
						<th><?= $delapanwarrior; ?></th>
						<th><?= $sembilanwarrior; ?></th>
						<th><?= $sepuluhwarrior; ?></th>
						<th><?= $sebelaswarrior; ?></th>
						<th><?= $duabelaswarrior; ?></th>
						<th><?= $tigabelaswarrior; ?></th>
						<th><?= $empatbelaswarrior; ?></th>
						<th><?= $limabelaswarrior; ?></th>
						<th><?= $enambelaswarrior; ?></th>
						<th><?= $tujuhbelaswarrior; ?></th>
						<th><?= $delapanbelaswarrior; ?></th>
						<th><?= $sembilanbelaswarrior; ?></th>
						<th><?= $duapuluhwarrior; ?></th>
						<th><?= $duapuluhsatuwarrior; ?></th>
						<th><?= $duapuluhduawarrior; ?></th>
						<th><?= $duapuluhtigawarrior; ?></th>
						<th><?= $duapuluhempatwarrior; ?></th>
						<th><?= $duapuluhlimawarrior; ?></th>
						<th><?= $duapuluhenamwarrior; ?></th>
						<th><?= $duapuluhtujuhwarrior; ?></th>
						<th><?= $duapuluhdelapanwarrior; ?></th>
						<th><?= $duapuluhsembilanwarrior; ?></th>
						<th><?= $tigapuluhwarrior; ?></th>
						<th><?= $tigapuluhsatuwarrior; ?></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
