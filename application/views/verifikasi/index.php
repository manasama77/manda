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
                                    Verifikasi Teknisi</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
                            </div>
                        </div>

                        <!--form-->
                        <form class="user" method="post" action="<?= base_url('verifikasi'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" laborcode" id="laborcode" value="<?= set_value('laborcode'); ?>" class="form-control form-control-user text-center" placeholder="Laborcode" required>
                                        <?= form_error('laborcode', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" nama_teknisi" id="nama_teknisi" value="<?= set_value('nama_teknisi'); ?>" class="form-control form-control-user text-center" placeholder="Nama Teknisi" required>
                                        <?= form_error('nama_teknisi', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                    <label>Status Verifikasi</label>
                                    <select class="form-control text-center" onchange="getvalid()" name="validation" id="validation" required>
                                        <option value="<?= set_value('validation'); ?>">-Select Status-</option>
                                        <option value="Verified">Verified</option>
                                        <option value="Unverified">Unverified</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Detail Invalid</label>
                                    <select class="form-control text-center" name="invalid" id="invalid" required>
                                        <option value="">-Select Detail-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" another_reason" id="another_reason" value="<?= set_value('another_reason'); ?>" class="form-control form-control-user text-center" placeholder="Keterangan Tambahan" s>
                                        <?= form_error('another_reason', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="invalidcall" style="display: none;">
                                <div class=" col-sm-4 text-center text-white">
                                    <label>Dial To</label>
                                    <input type="text" name="dialto" id="dialto" value="<?= set_value('dialto'); ?>" class="form-control text-center">
                                    <?= form_error('trackid', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-4 text-center text-white">
                                    <label>Status Call</label>
                                    <select class="form-control text-center" name="statuscall" id="statuscall" onchange="getcall()">
                                        <option value="<?= set_value('statuscall'); ?>">-Status Call-</option>
                                        <option value="Contacted_Call">Contacted</option>
                                        <option value="Uncontacted_Call">Uncontacted</option>
                                    <option value="Not_Call">Not Call</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 text-center text-white">
                                    <label>Reason Call</label>
                                    <select class="form-control text-center" name="reasoncall" id="reasoncall">
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
                                            Daily Verified</div>
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
                                            Daily Unverified</div>
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
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Labor Code</th>
                                        <th>Nama Teknisi</th>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>Status Verifikasi</th>
                                        <th>Detail Verifikasi</th>
                                        <th>Keterangan</th>
                                        <th>Dial to</th>
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
                                            <th><?= $m['labor_code']; ?></th>
                                            <th><?= $m['nama_teknisi']; ?></th>
                                            <th><?= $m['regional']; ?></th>
                                            <th><?= $m['witel']; ?></th>
                                            <th><?= $m['status_verifikasi']; ?></th>
                                            <th><?= $m['detail_invalid']; ?></th>
                                            <th><?= $m['keterangan']; ?></th>
                                            <th><?= $m['dialto']; ?></th>
                                            <th><?= $m['status_call']; ?></th>
                                            <th><?= $m['reason_call']; ?></th>
                                            <th>

                                                <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                    <a href="<?= site_url('verifikasi/delete/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
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
        <script type="text/javascript">
            function getcall() {
                var statuscall = $('[name=statuscall]').val()
                $.ajax({
                    url: '<?php echo base_url() ?>verifikasi/getcall',
                    type: 'get',
                    data: {
                        'statuscall': statuscall
                    },
                    success: function(data) {
                        $('[name=reasoncall]').html(data)
                    }
                })
            }
        </script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function() {
                $("#validation").change(function() {
                    if ($("#validation").val() == "Unverified") {
                        $("#invalidcall").show().find(':input').attr('required', true);
                    } else {
                        $("#invalidcall").hide().find(':input').attr('required', false);
                    }
                });
            });
        </script>




        <!-- End of Main Content