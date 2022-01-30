<div class="container-fluid my-auto">
    <div class="row">
        <div class="col-lg-6 ">
        </div>
        <div class="col-lg-6 ">
            <div class="d-inline text-right font-weight-bold">
                <p> <a class="btn btn-sm text-danger" href="<?= base_url('user'); ?>"><i class="fas fa-door-open text-danger"></i> Exit</a> Verifikasi WPI New SF <i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
            </div>
        </div>
    </div>

    <div>
        <h1 class="h5 mb-4 text-white">Form Input Data</h1>
        <div class="row mt-2">
            <div class="col-lg-6 mb-3">
                <div class="card shadow bg-transparent">
                    <div class="card-body" style="opacity: 0.8;">
                        <div class="row">
                            <div class="col mr-2">

                                <div class="text-xL font-weight-bold text-white text-right mt-2 mr-0 text-uppercase mb-1">
                                    Verifikasi WPI New SF</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
                            </div>
                        </div>

                        <!--form-->
                        <form class="user" method="post" action="<?= base_url('verifikasi/wpi'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" id_sf" id="id_sf" value="<?= set_value('id_sf'); ?>" class="form-control form-control-user text-center" placeholder="ID Sales Force" required>
                                        <?= form_error('id_sf', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" nama_sf" id="nama_sf" value="<?= set_value('nama_sf'); ?>" class="form-control form-control-user text-center" placeholder="Nama Sales Force" required>
                                        <?= form_error('nama_sf', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 text-center text-light">
                                        <label>No HP Sales Force</label>
                                        <input maxlength="13" type="number" onkeyup="this.value = this.value.toUpperCase()" name=" no_hp" id="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control form-control-user text-center" required>
                                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-3 text-center text-light">
                                        <label>No KTP Sales Force</label>
                                        <input maxlength="16" type="number" onkeyup="this.value = this.value.toUpperCase()" name=" no_ktp" id="no_ktp" value="<?= set_value('no_ktp'); ?>" class="form-control form-control-user text-center" required>
                                        <?= form_error('no_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-3 text-center text-light">
                                        <label>Tempat Lahir</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" tempat_lahir" id="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>" class="form-control form-control-user text-center" required>
                                        <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-3 text-center text-light">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" class="form-control form-control-user text-center" required>
                                        <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 text-center text-white">
                                    <label>Regional</label>
                                    <select class="form-control text-center" name="regional" id="regional" onchange="getwitel()" required>
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
                                    <select class="form-control text-center" name="witel" id="witel" required>
                                        <option value="">-Select Witel-</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Status Call</label>
                                    <select class="form-control text-center" onchange="getvalid()" name="validation" id="validation" required>
                                        <option value="<?= set_value('validation'); ?>">-Select Status-</option>
                                        <option value="Contacted_sf">Contacted</option>
                                        <option value="Uncontacted_sf">Uncontacted</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Reason Call</label>
                                    <select class="form-control text-center" name="invalid" id="invalid" required>
                                        <option value="">-Select Detail-</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <!--end form-->
                            <button type="submit" class=" text-white btn btn-sm btn-outline-primary btn-block">SUBMT</button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Contacted</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $vmenu; ?></div>
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
                                            Daily Uncontacted</div>
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
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-0">
                                        <div class="col-auto text-center">
                                            <i class="fas fa-list-alt fa-1x text-white"></i>
                                        </div>
                                        <div class="text-xs font-weight-bold text-center text-white text-uppercase mb-1">
                                            Daily</div>
                                        <div class="h5 mb-0 font-weight-bold text-white text-center"><?= $smenu; ?></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-0">
                                        <div class="col-auto text-center">
                                            <i class="fas fa-calendar-check fa-1x text-white"></i>
                                        </div>
                                        <div class="text-xs font-weight-bold text-center text-white text-uppercase mb-1">
                                            Montlhy</div>
                                        <div class="h5 mb-0 font-weight-bold text-white text-center"><?= $mmenu; ?></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-0">
                                        <div class="col-auto text-center">
                                            <i class="fas fa-chart-bar fa-1x text-white"></i>
                                        </div>
                                        <div class="text-xs font-weight-bold text-center text-white text-uppercase mb-1">
                                            Yearly</div>
                                        <div class="h5 mb-0 font-weight-bold text-white text-center"><?= $ymenu; ?></div>
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
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>SF ID</th>
                                        <th>SF Name</th>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>No HP SF</th>
                                        <th>No KTP SF</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Status Call</th>
                                        <th>Reason Call</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <th><?= $m['date']; ?></th>
                                            <th><?= $m['time']; ?></th>
                                            <th><?= $m['id_sf']; ?></th>
                                            <th><?= $m['nama_sf']; ?></th>
                                            <th><?= $m['regional']; ?></th>
                                            <th><?= $m['witel']; ?></th>
                                            <th><?= $m['hp_sf']; ?></th>
                                            <th><?= $m['no_ktp_sf']; ?></th>
                                            <th><?= $m['tempat_lahir']; ?></th>
                                            <th><?= $m['tanggal_lahir']; ?></th>
                                            <th><?= $m['status_call']; ?></th>
                                            <th><?= $m['reason_call']; ?></th>
                                            <th>

                                                <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                    <a href="<?= site_url('verifikasi/deletewpi/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
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

    </div>




    <script type="text/javascript">
        function getwitel() {
            var regional = $('[name=regional]').val()
            $.ajax({
                url: '<?php echo base_url() ?>Verifikasi/getwitel',
                type: 'get',
                data: {
                    'regional': regional
                },
                success: function(data) {
                    $('[name=witel]').html(data)
                }
            })
        }
    </script>
    <script type="text/javascript">
        function getvalid() {
            var validation = $('[name=validation]').val()
            $.ajax({
                url: '<?php echo base_url() ?>Verifikasi/getvalid',
                type: 'get',
                data: {
                    'validation': validation
                },
                success: function(data) {
                    $('[name=invalid]').html(data)
                }
            })
        }
    </script>