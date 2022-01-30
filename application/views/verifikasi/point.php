<div class="container-fluid my-auto">
    <div class="row">
        <div class="col-lg-6 ">
        </div>
        <div class="col-lg-6 ">
            <div class="d-inline text-right font-weight-bold">
                <p> <a class="btn btn-sm text-danger" href="<?= base_url('user'); ?>"><i class="fas fa-door-open text-danger"></i> Exit</a> Point Reward<i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
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
                                    Point Reward</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
                            </div>
                        </div>

                        <!--form-->
                        <form class="user" method="post" action="<?= base_url('verifikasi/point'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 text-center text-light">
                                        <label>Nama Pengorder</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" nama_pengorder" id="nama_pengorder" value="<?= set_value('nama_pengorder'); ?>" class="form-control text-center" required>
                                        <?= form_error('nama_pengorder', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6 text-center text-light">
                                        <label>Source Data</label>
                                        <select class="form-control text-center" onchange="getsource()" placeholder="Source Data" name="source_data" id="source_data" required>
                                            <option value="<?= set_value('source_data'); ?>">-Select Status-</option>
                                            <option value="Bot">BOT</option>
                                            <option value="Posko_Poin">Posko Poin</option>
                                            <option value="Posko_MYIH">Posko MYIH</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4 text-center text-white">
                                        <label>Klasifikasi Judul</label>
                                        <select class="form-control text-center" name="klasifikasi_judul" onchange="getklas()" id="klasifikasi_judul" required>
                                            option value="<?= set_value('klasifikasi_judul'); ?>">-Select Status-</option>
                                            <option value="">-Select Detail-</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 text-center text-white">
                                        <label>Status</label>
                                        <select class="form-control text-center" name="status" id="status" required>
                                            <option value="">-Select Detail-</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 text-center text-light">
                                        <label>Status Chat</label>
                                        <select class="form-control text-center" name="status_chat" id="status_chat" required>
                                            <option value="<?= set_value('status_chat'); ?>">-Select status-</option>
                                            <option value="Resolved">Resolved</option>
                                            <option value="Waiting_On_Customer">Waiting On Customer</option>
                                            <option value="Waiting_Third_Party">Waiting Third Party</option>
                                            <option value="Open">Open</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-lg-4 text-center text-light">
                                    <label>No Tiket</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" no_tiket" id="no_tiket" value="<?= set_value('no_tiket'); ?>" class="form-control form-control-user text-center" required>
                                    <?= form_error('no_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-lg-4 text-center text-light">
                                    <label>Waktu Chat Masuk</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" waktu_chat" id="waktu_chat" value="<?= set_value('waktu_chat'); ?>" class="form-control form-control-user text-center" required>
                                    <?= form_error('waktu_chat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-lg-4 text-center text-light">
                                    <label>Keterangan</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" keterangan" id="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control form-control-user text-center" required>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
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
                    <div class="col-lg-4 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Bot</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $bmenu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-check fa-2x text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Posko Poin</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $pmenu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-times fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card border-left-primary bg-transparent">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                            Daily Posko MYIH</div>
                                        <div class="h5 mb-0 font-weight-bold text-white"><?= $ihmenu; ?></div>
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
                                        <th>Nama Pengorder</th>
                                        <th>Source Data</th>
                                        <th>Klasifikasi Judul</th>
                                        <th>Status</th>
                                        <th>No Tiket</th>
                                        <th>Status Chat</th>
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
                                            <th><?= $m['nama_pengorder']; ?></th>
                                            <th><?= $m['source_data']; ?></th>
                                            <th><?= $m['klasifikasi_judul']; ?></th>
                                            <th><?= $m['status']; ?></th>
                                            <th><?= $m['no_tiket']; ?></th>
                                            <th><?= $m['status_chat']; ?></th>
                                            <th><?= $m['waktu_chat']; ?></th>
                                            <th><?= $m['keterangan']; ?></th>
                                            <th>

                                                <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                    <a href="<?= site_url('verifikasi/deletepoint/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
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
        function getsource() {
            var source_data = $('[name=source_data]').val()
            $.ajax({
                url: '<?php echo base_url() ?>Verifikasi/getsource',
                type: 'get',
                data: {
                    'source_data': source_data
                },
                success: function(data) {
                    $('[name=klasifikasi_judul]').html(data)
                }
            })
        }
    </script>
    <script type="text/javascript">
        function getklas() {
            var klasifikasi_judul = $('[name=klasifikasi_judul]').val()
            $.ajax({
                url: '<?php echo base_url() ?>Verifikasi/getklas',
                type: 'get',
                data: {
                    'klasifikasi_judul': klasifikasi_judul
                },
                success: function(data) {
                    $('[name=status]').html(data)
                }
            })
        }
    </script>