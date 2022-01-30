 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column" style="background-image:url(assets/img/bg.jpg); background-size:cover; background-repeat:no-repeat;">

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

                     <div class="text-dark mt-4"> Management Analyst Data Agent
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
         <div class="container-fluid my-auto">

             <!-- Page Heading -->


             <h1 class="h5 mb-4 text-dark">Role Management - <?= $role['role']; ?></h1>
             <hr>
             <?= $this->session->flashdata('message'); ?>
             <div class="row ">
                 <div class="col-lg">
                     <div class="card-body">
                         <div class="table-responsive small">
                             <table class="table table-bordered text-dark text-center" id="dataTable" width="100%" cellspacing="">
                                 <thead>
                                     <tr>
                                         <th scope="col">No</th>
                                         <th scope="col">Menu</th>
                                         <th scope="col">Access</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($menu as $m) : ?>
                                         <tr>
                                             <th scope="row"><?= $i; ?></th>
                                             <td class="text-left"><?= $m['menu']; ?></td>
                                             <th>
                                                 <div class="form-check">
                                                     <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
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



     <!-- End of Main Content



     </div>