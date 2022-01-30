 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">


             <!-- Sidebar Toggle (Topbar) -->
             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>

             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item dropdown no-arrow mx-1">

                     <div class="text-   mt-4"> Management Analyst Data Agent
                     </div>
                 </li>

                 <div class="topbar-divider d-none d-sm-block"></div>

                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="mr-2 d-none d-lg-inline text-dark"><?= $user['name']; ?></span>
                         <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="#">
                             <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                             My Profile
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                             <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                             Logout
                         </a>
                     </div>
                 </li>

             </ul>

         </nav>
         <!-- End of Topbar -->
         <!-- Begin Page Content -->
         <div class="container-fluid my-auto">
             <div class=" row">
                 <div class="col-lg-6 ">
                     <div class="d-inline">
                         <a class="btn btn-outline-primary btn-sm mb-3" href="<?= base_url('admin'); ?>"><i class="fas fa-door-open"></i> Exit</a>
                     </div>
                     <div class="d-inline">
                         <a href="" class="btn btn-outline-danger btn-sm mb-3"><i class="fas fa-download"></i> Download</a>
                     </div>
                 </div>
                 <div class="col-lg-6 ">
                     <div class="d-inline text-right font-weight-bold">
                         <p>All Regional <i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
                     </div>
                 </div>
             </div>


             <div class="col-lg mb-3">
                 <div class="row">
                     <div class="col-lg-4 mb-3">
                         <div class="card border-left-primary bg-transparent">
                             <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                     <div class="col mr-2">
                                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                             Daily Valid</div>
                                         <div class="h5 mb-0 font-weight-bold text-gray-800">111</div>
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
                                         <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                             Daily Invalid</div>
                                         <div class="h5 mb-0 font-weight-bold text-gray-800">111</div>
                                     </div>
                                     <div class="col-auto">
                                         <i class="fas fa-user-times fa-2x text-danger"></i>
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
                                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Total Data</div>
                                         <div class="h5 mb-0 font-weight-bold text-gray-800">111</div>
                                     </div>
                                     <div class="col-auto">
                                         <i class="fas fa-user-times fa-2x text-primary"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="row">
                 <div class="col-sm">
                     <div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.8;">

                         <div class="card-body">
                             <div class="table-responsive small">
                                 <table class="table table-bordered text-white text-center" id="dataTable" width="100%" cellspacing="">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>Date</th>
                                             <th>Time</th>
                                             <th>TrackID</th>
                                             <th>Chanel</th>
                                             <th>Witel</th>
                                             <th>Validation</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php $i = 1; ?>
                                         <!-- <?php foreach ($menu as $m) : ?> -->
                                         <tr>
                                             <th scope="row"><?= $i; ?></th>
                                             <th></th>
                                             <th></th>
                                             <th></th>
                                             <th></th>
                                             <th></th>
                                             <th></th>
                                         </tr>
                                         <?php $i++; ?>
                                         <!-- <?php endforeach; ?> -->
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>



         </div>
     </div>


 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content