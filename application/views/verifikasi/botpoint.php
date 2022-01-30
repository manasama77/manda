<div class="container-fluid my-auto">
    <div class="row">
        <div class="col-lg-6 ">
        </div>
        <div class="col-lg-6 ">
            <div class="d-inline text-right font-weight-bold">
                <p> <a class="btn btn-sm text-danger" href="<?= base_url('user'); ?>"><i class="fas fa-door-open text-danger"></i> Exit</a> Bot Point<i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
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
                                    Bot Point</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
                            </div>
                        </div>

                        <!--form-->
                        <form class="user" method="post" action="<?= base_url('verifikasi/botpoint'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-center text-light">
                                        <label>Kode Tiket</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" kode_tiket" id="kode_tiket" value="<?= set_value('kode_tiket'); ?>" class="form-control text-center" required>
                                        <?= form_error('kode_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-4 text-center text-light">
                                        <label>Track Order</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" track_order" id="track_order" value="<?= set_value('track_order'); ?>" class="form-control text-center" required>
                                        <?= form_error('track_order', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-4 text-center text-light">
                                        <label>Nama Pengorder</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" nama_pengorder" id="nama_pengorder" value="<?= set_value('nama_pengorder'); ?>" class="form-control text-center" required>
                                        <?= form_error('nama_pengorder', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4 text-center text-white">
                                        <label>Laporan Tiket</label>
                                        <select class="form-control text-center" name="laporan_tiket" onchange="getlaporantiket()" id="laporan_tiket" required>
                                            <option value="<?= set_value('laporan_tiket'); ?>">-Select Status-</option>
                                            <option value="BOTDigitalChannel">Bot Digital Channel</option>
                                            <option value="BOTPointReward">Bot Point Reward</option>
                                            <option value="DigitalChannelLOD">Digital Channel LOD</option>
                                            <option value="PointRewardLOD">Point Reward LOD</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 text-center text-white">
                                        <label>Source Data</label>
                                        <select class="form-control text-center" name="source_data" id="source_data" onchange="getsourcedata()" required>
                                            <option value="<?= set_value('source_data'); ?>">-Select Status-</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 text-center text-white">
                                        <label>Detail Tiket</label>
                                        <select class="form-control text-center" name="detail_tiket" id="detail_tiket" required>
                                            <option value="">-Select Detail-</option>
                                        </select>
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
                                <div class="col-lg-3 text-center text-light">
                                    <label>Status Tiket</label>
                                    <select class="form-control text-center" name="status_tiket" id="status_tiket" required>
                                        <option value="<?= set_value('status_tiket'); ?>">-Select status-</option>
                                        <option value="Resolved">Resolved</option>
                                        <option value="Waiting_On_Customer">Waiting On Customer</option>
                                        <option value="Waiting_Third_Party">Waiting Third Party</option>
                                        <option value="Open">Open</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 text-center text-light">
                                    <label>Waktu Chat</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" waktu_chat" id="waktu_chat" value="<?= set_value('waktu_chat'); ?>" class="form-control text-center" required>
                                    <?= form_error('waktu_chat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col text-light">
                                    <label>Keterangan</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" keterangan" id="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control text-center" required>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <hr>

                            <button type="submit" class=" text-white btn btn-sm btn-outline-primary btn-block">SUBMT</button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Bot Digital Channel</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $bdmenu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-check fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Bot Point Reward</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $bpmenu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-times fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Digital Channel LOD</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $dcmenu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-times fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Point Reward LOD</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $prmenu; ?></div>
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
                                        <th>Kode Tiket</th>
                                        <th>Track Order</th>
                                        <th>Nama Pengorder</th>
                                        <th>Laporan Tiket</th>
                                        <th>Source Data</th>
                                        <th>Detail Tiket</th>
                                        <th>Regional</th>
                                        <th>Witel</th>
                                        <th>Status Tiket</th>
                                        <th>Waktu Chat</th>
                                        <th>Keterangan</th>
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
                                            <th><?= $m['kode_tiket']; ?></th>
                                            <th><?= $m['track_order']; ?></th>
                                            <th><?= $m['nama_pengorder']; ?></th>
                                            <th><?= $m['laporan_tiket']; ?></th>
                                            <th><?= $m['source_data']; ?></th>
                                            <th><?= $m['detail_tiket']; ?></th>
                                            <th><?= $m['regional']; ?></th>
                                            <th><?= $m['witel']; ?></th>
                                            <th><?= $m['status_tiket']; ?></th>
                                            <th><?= $m['waktu_chat']; ?></th>
                                            <th><?= $m['keterangan']; ?></th>
                                            <th>

                                                <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                    <a href="<?= site_url('verifikasi/deletebotpoint/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
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
        function getlaporantiket() {
            var laporan_tiket = $('[name=laporan_tiket]').val()
            $.ajax({
                url: '<?php echo base_url() ?>Verifikasi/getlaporantiket',
                type: 'get',
                data: {
                    'laporan_tiket': laporan_tiket
                },
                success: function(data) {
                    $('[name=source_data]').html(data)
                }
            })
        }
    </script>
    <script type="text/javascript">
        function getsourcedata() {
            var source_data = $('[name=source_data]').val()
            $.ajax({
                url: '<?php echo base_url() ?>Verifikasi/getsourcedata',
                type: 'get',
                data: {
                    'source_data': source_data
                },
                success: function(data) {
                    $('[name=detail_tiket]').html(data)
                }
            })
        }
    </script>