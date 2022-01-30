<!-- Begin Page Content -->
<div class="container-fluid my-auto">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-white">REKAPITULASI DATA QC1</h1>
    <div class="card bg-gradient-info col-lg" style="opacity: 0.8;">
        <div class="card-body">
            <div class="row my-auto">
                <div class="col-lg-3 mb-1">
                    <div class="card border-left-danger bg-danger">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Daily Consume</div>
                                    <div class="h5 mb-0 font-weight-bold text-white"><?= $hmenu; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-list-alt fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-1">
                    <div class="card border-left-primary bg-primary">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Monthly Consume</div>
                                    <div class="h5 mb-0 font-weight-bold text-white"><?= $bmenu; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar-check fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-1">
                    <div class="card border-left-success bg-success">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
                                        Yearly Consume</div>
                                    <div class="h5 mb-0 text-left font-weight-bold text-white"><?= $tmenu; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-bar fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-1">
                    <div class="card border-left-warning bg-warning">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs text-left font-weight-bold text-white text-uppercase mb-1">
                                        PPA</div>
                                    <div class="h5 mb-0 text-left font-weight-bold text-white"><?= round( ($hmenu/$order),1); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-line fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--rekap agent-->
    <div class="row mt-3">
        <div class="col-sm">
            <div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.8;">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark text-center">Rekapitulasi Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <form id="formRekap">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <div class="form-group text-white text-center">
                                        <label>Start Date</label>
                                        <input class="form-control date text-center" type="date" name="date1" id="date1" required>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <div class="form-group text-white text-center">
                                        <label>End Date</label>
                                        <input class="form-control date text-center" type="date" name="date2" id="date2" required>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-2 mb-3">
                                <button id="btnFilter" class="btn btn-primary form-control">Search</button>
                            </div>

                            <div class="col-md-2 mb-3">
                                <button class="btn btn-danger form-control" id="btnExportExcell"><i class="fas fa-file-download"></i> Download</button>
                            </div>
                        </div>



                        <div class=" row">
                            <div class="col-sm">
                                <div class="card bg-gradient-dark shadow mb-4 text-white">

                                    <div class="card-body">
                                        <div class="table-responsive small">
                                            <table class="table table-bordered text-white text-center" id="dataTable" width="100%" cellspacing="">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Name</th>
                                                     <th>Type Data</th>
                                                        <th>TrackID</th>
                                                        <th>Chanel</th>
                                                        <th>Regional</th>
                                                        <th>Witel</th>
                                                        <th>Validation</th>
                                                        <th>Detail Invalid</th>
                                                         <th>Validation Identity</th>
                                                        <th>Detail Identity</th>
                                                    	<th>Dial To</th>
                                                        <th>Status Call</th>
                                                        <th>Reason Call</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    // echo $getData;
                                                    // exit;
                                                    foreach ($getData as $value) { ?>

                                                        <tr>
                                                            <th><?= $value->date ?></th>
                                                            <th><?= $value->time ?></th>
                                                            <th class="text-left"><?= $value->name ?></th>
                                                         <th><?= $value->data_type ?></th>
                                                            <th><?= $value->trackid ?></th>
                                                            <th><?= $value->chanel ?></th>
                                                            <th><?= $value->regional ?></th>
                                                            <th><?= $value->witel ?></th>
                                                            <th><?= $value->validation ?></th>
                                                            <th><?= $value->detail_invalid ?></th>
                                                            <th><?= $value->ktp_validation ?></th>
                                                            <th><?= $value->detail_ktp ?></th>
                                                        	<th><?= $value->dial_to ?></th>
                                                            <th><?= $value->status_call ?></th>
                                                            <th><?= $value->reason_call ?></th>

                                                        </tr>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

            <!-- End of Main Content