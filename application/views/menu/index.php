<!-- Begin Page Content -->

<div class="container-fluid my-auto">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-white">MENU MANAGEMENT</h1>


    <hr>
    <div>
        <div class="row">
            <div class="col-lg-3 mb-3">
                <div class="card border-left-primary bg-transparent">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase">
                                    Activated User</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $amenu1; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-check fa-2x text-white"></i>
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
                                <div class="text-xs font-weight-bold text-white text-uppercase">
                                    Nonactivated User</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $amenu2; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-times fa-2x text-white"></i>
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
                                <div class="text-xs font-weight-bold text-white text-uppercase">
                                    Administrator</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $rmenu1; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-folder-open fa-2x text-white"></i>
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
                                <div class="text-xs font-weight-bold text-white text-uppercase">
                                    Member</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $rmenu2; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-folder fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-lg">

            <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New User</a>

            <div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.8;">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark text-center">User Activated & Nonactivated [<?= date('d-m-Y G:i:s'); ?>]</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-bordered text-white text-center" id="dataTable" width="100%" cellspacing="">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Level User</th>
                                 <th>Layanan</th>
                                    <th>Email</th>
                                    <th>Role_ID</th>
                                    <th>Activated</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td class="text-left"><?= $m['name']; ?></td>
                                        <td class="text-left"><?= $m['level_user']; ?></td>
                                    <td class="text-left"><?= $m['layanan']; ?></td>
                                        <td class="text-left"><?= $m['email']; ?></td>
                                        <td class="text-center"><?= $m['role_id']; ?></td>
                                        <td class="text-center"><?= $m['is_active']; ?></td>
                                        <td class="text-center"><?= $m['date_create']; ?></td>
                                        <th>
                                            <a class=" btn btn-sm btn-outline-primary" style="height: 30px;" href=""><i class="fas fa-edit"></i> edit</a>
                                            <div class="d-inline" onclick="javascript: return confirm('Are you sure want to delete this data ?')">
                                                <a href="<?= site_url('menu/delete/' . $m['id']) ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
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

    </>

</div>

</>
<!-- End of Main Content

<-- Modal -->
<div class=" modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span ario-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" method="post" action="<?= base_url('menu'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-xs">User Manage</label>
                            <select class="form-control text-center" name="role_id" id="role_id" required>
                                <option value="<?= set_value('role_id'); ?>"></option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                                <option value="3">Support</option>
                                <option value="4">Quality</option>
                            </select>
                            <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     <div class="col-sm-3 mb-3 mb-sm-0">
                            <label class="text-xs">Layanan</label>
                            <select class="form-control text-center" name="layanan" id="layanan" required>
                                <option value="<?= set_value('layanan'); ?>"></option>
                                <option value="DE">DE</option>
                                <option value="SALPER">SALPER</option>
                                <option value="OFFERING">OFFERING</option>
                                <option value="FCC">FCC</option>
                            </select>
                            <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-3">
                            <label class="text-xs">User Activated</label>
                            <select class="form-control text-center" name="is_active" id="is_active" required>
                                <option value="<?= set_value('is_active'); ?>"></option>
                                <option value="0">Nonactivated</option>
                                <option value="1">Activated</option>
                            </select>
                            <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-3">
                            <label class="text-xs">User Level</label>
                            <select class="form-control text-center" name="level_user" id="level_user" required>

                                <option value="<?= set_value('level_user'); ?>"></option>
                                <option value="Team Leader">Team Leader</option>
                                <option value="Support">Support</option>
                                <option value="Quality">Quality</option>
                                <option value="Agent">Agent</option>
                            </select>
                            <?= form_error('level_user', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-primary btn-user btn-block" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </div>
                    </div>
                    <hr>
            </form>
        </div>
    </div>

</div>