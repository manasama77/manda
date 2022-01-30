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
                                    Verifikasi PDA BNA GNO</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
                            </div>
                        </div>

                        <!--form-->
                        <form class="user" method="post" action="<?= base_url('nonpsb'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        <input type="text" maxlength="11" minlength="11" onkeyup="this.value = this.value.toUpperCase()" name="scid" id="scid" value="<?= set_value('scid'); ?>" class="form-control form-control-user text-center" placeholder="SC ID" required>
                                        <?= form_error('scid', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                    <label>Source Data</label>
                                    <select class="form-control text-center" name="source_data" id="source_data" required>
                                        <option value="<?= set_value('source_data'); ?>">-Select Status-</option>
                                        <option value="Telkom_147">Telkom 147</option>
                                        <option value="Socmed">Socmed</option>
                                        <option value="Plaza">Plaza</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Jenis Transaksi</label>
                                    <select class="form-control text-center" name="jenis_transaksi" id="jenis_transaksi" required>
                                        <option value="<?= set_value('jenis_transaksi'); ?>">-Select Status-</option>
                                        <option value="PDA">PDA</option>
                                        <option value="BNA">BNA</option>
                                        <option value="GNO">GNO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 text-center text-white">
                                    <label>CP Diaplikasi</label>
                                    <input type="number" name="cpaplikasi" id="cpaplikasi" value="<?= set_value('cpaplikasi'); ?>" class="form-control text-center" placeholder="CP Diaplikasi" required>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>CP Terhubung</label>
                                    <input type="number" name="cpterhubung" id="cpterhubung" value="<?= set_value('cpterhubung'); ?>" class="form-control text-center" placeholder="CP Terhubung" required>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Validasi</label>
                                    <select class="form-control text-center" name="validasi_id" id="validasi_id" onchange="getval()" required>
                                        <option value="<?= set_value('validasi_id'); ?>">-Select Validasi-</option>
                                        <option value="Valid_ID">Valid</option>
                                        <option value="Invalid_ID">Invalid</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Detail Validasi</label>
                                    <select class="form-control text-center" name="detailvalidasi" id="detailvalidasi">
                                        <option value="">-Select Detail-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="invalididentitas" style="display: none;">
                                <div class="col-sm-3 text-center text-white">
                                    <label>PIC</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name="pic" id="pic" value="<?= set_value('pic'); ?>" class="form-control text-center" placeholder="PIC" required>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>PIC Terhubung</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name="picterhubung" id="picterhubung" value="<?= set_value('picterhubung'); ?>" class="form-control text-center" placeholder="PIC Terhubung" required>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Status Call</label>
                                    <select class="form-control text-center" name="statuscall" id="statuscall" onchange="getcall()" required>
                                        <option value="<?= set_value('statuscall'); ?>">-Select Status-</option>
                                        <option value="Contacted-Call">Contacted</option>
                                        <option value="Uncontacted-Call">Uncontacted</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center text-white">
                                    <label>Detail Call</label>
                                    <select class="form-control text-center" name="detailcall" id="detailcall">
                                        <option value="">-Select Detail-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="keteranganinvalidid" style="display: none;">
                                <div class="row">
                                    <div class="col mt-3">
                                        <select class="form-control text-center" name="ketinvalid" id="ketinvalid" required>
                                            <option value="<?= set_value('ketinvalid'); ?>">-Select Keterangan-</option>
                                            <option value="Bersedia_Upload_Ulang">Bersedia Upload Ulang</option>
                                            <option value="Tidak_Bersedia_Upload_ulang">Tidak Bersedia Upload Ulang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="keteranganvalidid" style="display: none;">
                                <div class="row">
                                    <div class="col mt-3">
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name="keteranganvalid" id="keteranganvalid" value="<?= set_value('keteranganvalid'); ?>" class="form-control text-center" placeholder="Keterangan Valid">
                                        <?= form_error('keteranganvalid', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
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
                                            Daily Valid</div>
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
                                            Daily Invalid</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $ivmenu; ?></div>
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
                    <div class="col-lg-6 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Source Data (147/Socmed/Plaza)</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $telkom; ?> / <?= $socmed; ?> / <?= $plaza; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-filter fa-2x text-light"></i>
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
                                            Jenis Transaksi (PDA/BNA/GNO)</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $pda; ?> / <?= $bna; ?> / <?= $gno; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-filter fa-2x text-light"></i>
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
                                        <th>SCID</th>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>Source Data</th>
                                        <th>Jenis Transaksi</th>
                                        <th>CP Diaplikasi</th>
                                        <th>CP Terhubung</th>
                                        <th>Validasi</th>
                                        <th>Detail Validasi</th>
                                        <th>PIC</th>
                                        <th>PIC Terhubung</th>
                                        <th>Status Call</th>
                                        <th>Detail Call</th>
                                        <th>Keterangan Valid</th>
                                        <th>Keterangan Invalid</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <th><?= $m['tanggal']; ?></th>
                                            <th><?= $m['waktu']; ?></th>
                                            <th><?= $m['scid']; ?></th>
                                            <th><?= $m['regional']; ?></th>
                                            <th><?= $m['witel']; ?></th>
                                            <th><?= $m['source_data']; ?></th>
                                            <th><?= $m['jenis_transaksi']; ?></th>
                                            <th><?= $m['cp_diaplikasi']; ?></th>
                                            <th><?= $m['cp_terhubung']; ?></th>
                                            <th><?= $m['validasi']; ?></th>
                                            <th><?= $m['detail_validasi']; ?></th>
                                            <th><?= $m['pic']; ?></th>
                                            <th><?= $m['pic_terhubung']; ?></th>
                                            <th><?= $m['status_call']; ?></th>
                                            <th><?= $m['detail_call']; ?></th>
                                            <th><?= $m['keterangan_valid']; ?></th>
                                            <th><?= $m['keterangan_invalid']; ?></th>

                                            <th>

                                                <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                    <a href="<?= site_url('nonpsb/delete/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
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
                    url: '<?php echo base_url() ?>nonpsb/getwitel',
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
            function getval() {
                var validasi_id = $('[name=validasi_id]').val()
                $.ajax({
                    url: '<?php echo base_url() ?>nonpsb/getval',
                    type: 'get',
                    data: {
                        'validasi_id': validasi_id
                    },
                    success: function(data) {
                        $('[name=detailvalidasi]').html(data)
                    }
                })
            }
        </script>
        <script type="text/javascript">
            function getcall() {
                var statuscall = $('[name=statuscall]').val()
                $.ajax({
                    url: '<?php echo base_url() ?>nonpsb/getcall',
                    type: 'get',
                    data: {
                        'statuscall': statuscall
                    },
                    success: function(data) {
                        $('[name=detailcall]').html(data)
                    }
                })
            }
        </script>

        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function() {
                $("#validasi_id").change(function() {
                    if ($("#validasi_id").val() == "Valid_ID") {
                        ($("#keteranganvalidid").show().find(':input').attr('required', true) && $("#invalididentitas").show().find(':input').attr('required', false) && $("#keteranganinvalidid").hide().find(':input').attr('required', false));
                    }
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function() {
                $("#validasi_id").change(function() {
                    if ($("#validasi_id").val() == "Invalid_ID") {
                        ($("#keteranganvalidid").hide().find(':input').attr('required', false) && $("#invalididentitas").show().find(':input').attr('required', true) && $("#keteranganinvalidid").show().find(':input').attr('required', true));
                    }
                });
            });
        </script>




        <!-- End of Main Content