<!-- Begin Page Content -->
<div class="container-fluid my-auto">

    <div class=" row">
        <div class="col-lg-6 ">
        </div>
        <div class="col-lg-6 ">
            <div class="d-inline text-right font-weight-bold">
                <p> <a class="btn btn-sm text-danger" href="<?= base_url('support'); ?>"><i class="fas fa-door-open text-danger"></i> Exit</a> Report Point Reward<i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-white">REKAPITULASI VERIFIKASI POINT REWARD</h1>
    <div class="card col-lg" style="opacity: 0.8;">
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
                                    <div class="h5 mb-0 text-left font-weight-bold text-white"><?= $tmenu; ?></div>
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
                        <form id="formRekap8">
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
                                <button id="btnFilter8" class="btn btn-primary form-control">Search</button>
                            </div>

                            <div class="col-md-2 mb-3">
                                <button class="btn btn-danger form-control" id="btnExportExcell8"><i class="fas fa-file-download"></i> Download</button>
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
                                                        <th>Name</th>
                                                        <th>Tanggal</th>
                                                        <th>Waktu</th>
                                                        <th>Nama Pengorder</th>
                                                        <th>Source Data</th>
                                                        <th>Klasifikasi Judul</th>
                                                        <th>Status</th>
                                                        <th>No Tiket</th>
                                                        <th>Status Chat</th>
                                                        <th>Waktu Chat</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php
                                                    // echo $getData;
                                                    // exit;
                                                    foreach ($menu as $m) { ?>
                                                        <tr>
                                                            <th scope="row"><?= $i; ?></th>
                                                            <th><?= $m->user ?></th>
                                                            <th><?= $m->date ?></th>
                                                            <th><?= $m->time ?></th>
                                                            <th><?= $m->nama_pengorder ?></th>
                                                            <th><?= $m->source_data ?></th>
                                                            <th><?= $m->klasifikasi_judul ?></th>
                                                            <th><?= $m->status ?></th>
                                                            <th><?= $m->no_tiket ?></th>
                                                            <th><?= $m->status_chat ?></th>
                                                            <th><?= $m->waktu_chat ?></th>
                                                            <th><?= $m->keterangan ?></th>
                                                            </th>
                                                        </tr>
                                                    <?php } ?>
                                                    <?php $i++; ?>
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