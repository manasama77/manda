<!-- Begin Page Content -->
<div class="container-fluid my-auto">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-white"></h1>
    <div class="card" style="opacity: 0.7;">
        <div class="card-body">
            <div class="row my-auto">
                <div class="col-lg-4 mb-1">
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
                <div class="col-lg-4 mb-1">
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
                <div class="col-lg-4 mb-1">
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
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm">
            <div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.6;">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark text-center">Rekapitulasi Data</h6>
                </div>


                <div class="card-body">
                    <div class="table-responsive small">
                        <form method="post" action=<?php echo site_url('Quality'); ?>>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group text-white text-center">
                                        <label>Start Date</label>
                                        <input class="form-control date text-center" type="date" name="date1" required>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <div class="form-group text-white text-center">
                                        <label>End Date</label>
                                        <input class="form-control date text-center" type="date" name="date2" required>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <div class="form-group text-white text-center">
                                        <label>Agent Name</label>
                                        <select name="agent_name" id="agent_name" class="form-control text-sm text-center">
                                            <option value="">Select Agent</option>
                                            <?php foreach ($drmenu as $dr) : ?>
                                                <option value="<?= $dr['name']; ?>"><?= $dr['name']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 text-center">
                                    <label><i class="fas fa-edit"></i></label>
                                    <input class="btn btn-primary form-control " value="Search" id="filter" name="filter" href="" type="submit"> </input>
                                </div>
                            </div>
                        </form>


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
                                                        <th>TrackID</th>
                                                        <th>Chanel</th>
                                                        <th>Regional</th>
                                                        <th>Witel</th>
                                                        <th>Validation</th>
                                                        <th>Action</th>
                                                        <th>QC Validation</th>

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
                                                            <th><?= $value->trackid ?></th>
                                                            <th><?= $value->chanel ?></th>
                                                            <th><?= $value->regional ?></th>
                                                            <th><?= $value->witel ?></th>
                                                            <th><?= $value->validation ?></th>
                                                            <th>
                                                                <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Validasi</a>

                                                            </th>
                                                            <th></th>

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

            <!-- <!-- End of Main Content -->
            <div class=" modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title" id="newMenuModalLabel">Validasi QC </h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span ario-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="user" method="post" action="<?= base_url('menu'); ?>">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg">

                                        <h8 class="modal-title text-sm font-weight-bold " id="newMenuModalLabel">SOLUSI LAYANAN</h8>
                                        <br>

                                        <div class="form-group">
                                            <label class="text-xs">Kesesuaian menjawab pertanyaan jarak ODP</label>
                                            <input type="text" class="form-control text-xs text-center" id="name" name="name" placeholder="Point (max 20)" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group text-center">
                                            <label class="text-xs text-center">Foto tampak depan</label>
                                            <input type="text" class="form-control text-xs" id="name" name="name" placeholder="Point (max 5)" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group text-center">

                                            <label class="text-xs text-center">Foto tampak utuh</label>
                                            <input type="text" class="form-control text-xs" id="name" name="name" placeholder="Point (max 5)" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group text-center">

                                            <label class="text-xs text-center">Bukan foto google</label>
                                            <input type="text" class="form-control text-xs" id="name" name="name" placeholder="Point (max 5)" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group text-center">

                                            <label class="text-xs text-center">Foto spesifik</label>
                                            <input type="text" class="form-control text-xs" id="name" name="name" placeholder="Point (max 5)" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg">

                                        <h8 class="modal-title text-sm font-weight-bold " id="newMenuModalLabel">PROSES LAYANAN</h8>
                                        <br>

                                        <div class="form-group">
                                            <label class="text-xs">Pencatatan pada aplikasi dan template rekapan</label>
                                            <input type="text" class="form-control text-xs text-center" id="name" name="name" placeholder="Point (max 10)" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-outline-primary btn-user btn-block" data-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-outline-primary btn-user btn-block">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                        </form>


                    </div>
                </div>

            </div>