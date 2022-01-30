<div class="container-fluid my-auto">
    <div class="font-weight-bold text-white text-center">
        <p>
            <br><br>
        <H1>Hii <?= $user['name']; ?> </H1>
        <h4>Do You Want to Change Password ?</h4>
        </p>
        <br>
    </div>
    <div class="row">

        <div class="card bg-transparent my-5 mx-auto col-lg-4">
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('access'); ?>" method="POST">
                    <div class="form-group">
                        <label for="current_password" class="text-light">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password1" class="text-light">New Password</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password2" class="text-light">Repeat Password</label>
                        <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary text-light">
                            <i class="fas fa-fw fa-key text-light"></i> Change Password
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

</div>