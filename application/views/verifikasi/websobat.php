<div class="container-fluid my-auto">
    <div class="row">
        <div class="col-lg-6 ">
        </div>
        <div class="col-lg-6 ">
            <div class="d-inline text-right font-weight-bold">
                <p> <a class="btn btn-sm text-danger" href="<?= base_url('user'); ?>"><i class="fas fa-door-open text-danger"></i> Exit</a> Web Sobat IndiHome<i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
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
                                    Web Sobat IndiHome</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300 mb-3"></i>
                            </div>
                        </div>

                        <!--form-->
                        <form class="user" method="post" action="<?= base_url('verifikasi/websobat'); ?>">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 text-center text-light">
                                        <label>ID Tiket</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" id_tiket" id="id_tiket" value="<?= set_value('id_tiket'); ?>" class="form-control text-center" required>
                                        <?= form_error('id_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-6 text-center text-light">
                                        <label>Judul Tiket</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" judul_tiket" id="judul_tiket" value="<?= set_value('judul_tiket'); ?>" class="form-control text-center" required>
                                        <?= form_error('judul_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-center text-light">
                                        <label>Nomor Tlp Alternatif</label>
                                        <input type="number" onkeyup="this.value = this.value.toUpperCase()" name="no_alternatif" id="no_alternatif" value="<?= set_value('no_alternatif'); ?>" class="form-control text-center" required>
                                        <?= form_error('no_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-4 text-center text-light">
                                        <label>ID Sobat</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" id_sobat" id="id_sobat" value="<?= set_value('id_sobat'); ?>" class="form-control text-center" required>
                                        <?= form_error('id_sobat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-lg-4 text-center text-light">
                                        <label>Create Tiket</label>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name="create_tiket" id="create_tiket" value="<?= set_value('create_tiket'); ?>" class="form-control text-center" required>
                                        <?= form_error('create_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-center text-light">
                                    <label>Update Tiket</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" update_tiket" id="update_tiket" value="<?= set_value('update_tiket'); ?>" class="form-control form-control-user text-center" required>
                                    <?= form_error('update_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-lg-4 text-center text-light">
                                    <label>Klasifikasi</label>
                                    <select class="form-control text-center" name="klasifikasi" id="klasifikasi" required>
                                        <option value="<?= set_value('klasifikasi'); ?>">-Select status-</option>
                                        <option value="Proses Refund">Proses Refund</option>
                                        <option value="Delete Akun Sobat Indihome">Delete Akun Sobat Indihome</option>
                                        <option value="Cancel Order">Cancel Order</option>
                                        <option value="Reset Nomer HP Sobat Indihome">Reset Nomer HP Sobat Indihome</option>
                                        <option value="Daftar Downline">Daftar Downline</option>
                                        <option value="Kirim Ulang Upload KTP">Kirim Ulang Upload KTP</option>
                                        <option value="Kirim Kode OTP">Kirim Kode OTP</option>
                                        <option value="Push PSB">Push PSB</option>
                                        <option value="Reset ID Sobat Indihome">Reset ID Sobat Indihome</option>
                                        <option value="Kirim Link Pembayaran Deposit">Kirim Link Pembayaran Deposit</option>
                                        <option value="Reset Email Sobat Indihome">Reset Email Sobat Indihome</option>
                                        <option value="Tes Data">Tes Data</option>
                                        <option value="Verifikasi KTP">Verifikasi KTP</option>
                                        <option value="Progres Aktivasi Sobat Indihome">Progres Aktivasi Sobat Indihome</option>
                                        <option value="Kendala Gangguan Indihome">Kendala Gangguan Indihome</option>
                                        <option value="Push SCBE">Push SCBE</option>
                                        <option value="T-Money">T-Money</option>
                                        <option value="Verifikasi Call">Verifikasi Call</option>
                                        <option value="Point Reward">Point Reward</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 text-center text-light">
                                    <label>Status</label>
                                    <select class="form-control text-center" name="status" id="status" required>
                                        <option value="<?= set_value('status'); ?>">-Select status-</option>
                                        <option value="Resolved">Resolved</option>
                                        <option value="Waiting On Customer">Waiting On Customer</option>
                                        <option value="Waiting Third Party">Waiting Third Party</option>
                                        <option value="Open">Open</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg text-center text-light">
                                    <label>Keterangan</label>
                                    <input type="text" onkeyup="this.value = this.value.toUpperCase()" name=" keterangan" id="keterangan" value="<?= set_value('keterangan'); ?>" class="form-control form-control-user text-center" required>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
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

            <div class="col-lg-6 mb-3">
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
                                        <th>ID Tiket</th>
                                        <th>Judul Tiket</th>
                                        <th>No Tlp Alternatif</th>
                                        <th>ID Sobat</th>
                                        <th>Create Tiket</th>
                                        <th>Update Tiket</th>
                                        <th>Klasifikasi</th>
                                        <th>Status</th>
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
                                            <th><?= $m['id_tiket']; ?></th>
                                            <th><?= $m['judul_tiket']; ?></th>
                                            <th><?= $m['no_alternatif']; ?></th>
                                            <th><?= $m['id_sobat']; ?></th>
                                            <th><?= $m['create_tiket']; ?></th>
                                            <th><?= $m['update_tiket']; ?></th>
                                            <th><?= $m['klasifikasi']; ?></th>
                                            <th><?= $m['status']; ?></th>
                                            <th><?= $m['keterangan']; ?></th>
                                            <th>

                                                <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                    <a href="<?= site_url('verifikasi/deletewebsobat/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-edit"></i> Delete</a>
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