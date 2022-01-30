<body style="background-image:url(assets/img/bg4.jpg); background-size:cover; background-repeat:no-repeat;">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 ">

                <div class="card o-hidden bg-transparent border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 shadow-lg p-5 text-center">
                                <br><br><br>
                                <img src="assets/img/logo1.png" width="280" height="80" class="mt-3">
                                <div class="text-center my-0 mx-0 text-lg text-primary">DIGITAL ENVIRONMENT</div>
                            </div>
                            <div class="col-lg-6    ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-light mb-4 text-danger"><img src="assets/img/icon_manda.png" width="80" height="30">Login Page</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" action="<?= base_url('auth'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Enter email address..." value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class=" form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-outline-danger btn-user btn-block">LOGIN</button>
                                    </form>

                                    <hr>
                                    <div class="text-center small text-light">
                                        By. Quality Control 1 - Digital Environment | 2021 - <?= date('Y') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>