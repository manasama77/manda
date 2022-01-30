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
             <h1 class="h5 mb-4 text-dark">Role Management</h1>


             <hr>
             <div class="row ">
                 <div class="col-lg">

                     <a href="" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
                     <div class="card-body">
                         <div class="table-responsive small">
                             <table class="table table-bordered text-dark text-center" id="dataTable" width="100%" cellspacing="">
                                 <thead>
                                     <tr>
                                         <th scope="col">No</th>
                                         <th scope="col">Name</th>
                                         <th scope="col">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i = 1; ?>
                                     <?php foreach ($role as $r) : ?>
                                         <tr>
                                             <th scope="row"><?= $i; ?></th>
                                             <td class="text-left"><?= $r['role']; ?></td>
                                             <th>
                                                 <a class=" btn btn-sm btn-outline-warning" style="height: 30px;" href="<?= base_url('menu/roleaccess/') . $r['id']; ?>">Access</a>
                                                 <a class=" btn btn-sm btn-outline-primary" style="height: 30px;" href="">edit</a>
                                                 <a class="btn btn-sm btn-outline-danger " style="height: 30px;" href="">delete</a>
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

         </di>

     </div>

     <!-- End of Main Content

<-- Modal -->
     <div class=" modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span ario-hidden="true">&times;</span>
                     </button>
                 </div>
                 <form class="user" method="post" action="<?= base_url('admin/role'); ?>">
                     <div class="modal-body">
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="role" name="role" placeholder="Role name">
                             <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>

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