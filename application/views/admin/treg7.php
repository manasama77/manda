 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column bg-gradient-dark">

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

                     <div class="text-white mt-4"> Management Analyst Data Agent
                     </div>
                 </li>

                 <div class="topbar-divider d-none d-sm-block"></div>

                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="mr-2 d-none d-lg-inline text-light"><?= $user['name']; ?></span>
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
                         <a class="btn btn-outline-light btn-sm mb-3" href="<?= base_url('admin'); ?>"><i class="fas fa-door-open"></i> Exit</a>
                     </div>
                     <div class="d-inline">
                         <a href="" class="btn btn-outline-warning btn-sm mb-3"><i class="fas fa-download"></i> Download</a>
                     </div>
                 </div>
                 <div class="col-lg-6 ">
                     <div class="d-inline text-right font-weight-bold text-light">
                         <p>Data Treg-7 <i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
                     </div>
                 </div>
             </div>


             <div class="col-lg mb-3">
                 <div class="row">
                     <div class="col-lg-4 mb-3">
                         <div class="card border-left-light bg-transparent">
                             <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                     <div class="col mr-2">
                                         <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                             Daily Valid</div>
                                         <div class="h5 mb-0 font-weight-bold text-light"><?= $treg7; ?></div>
                                     </div>
                                     <div class="col-auto">
                                         <i class="fas fa-user-check fa-2x text-light"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 mb-3">
                         <div class="card border-left-light bg-transparent">
                             <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                     <div class="col mr-2">
                                         <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                             Daily Invalid</div>
                                         <div class="h5 mb-0 font-weight-bold text-light"><?= ($treg7all - $treg7); ?></div>
                                     </div>
                                     <div class="col-auto">
                                         <i class="fas fa-user-times fa-2x text-light"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 mb-3">
                         <div class="card border-left-light bg-transparent">
                             <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                     <div class="col mr-2">
                                         <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                             Total Data</div>
                                         <div class="h5 mb-0 font-weight-bold text-light"><?= $treg7all; ?></div>
                                     </div>
                                     <div class="col-auto">
                                         <i class="fas fa-user-times fa-2x text-light"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="row">
                 <div class="col-lg">
                     <div class="card shadow mb-4 text-white" style="opacity: 0.8;">

                         <div class="card-body">
                             <?php error_reporting(0); ?>
                             <div class="table-responsive">
                                 <table class="table table-bordered text-center" width="100%" cellspacing="">
                                     <thead class="bg-gradient-dark font-weight-bold">
                                         <tr class="text-white ">
                                             <th>No</th>
                                             <th>Witel</th>
                                             <th>Valid</th>
                                             <th>Invalid</th>
                                             <th>Total</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <th>1</th>
                                             <th class="text-left">GORONTALO</th>
                                             <th><?= $gorontalo; ?> / <?= round(($gorontalo / $gorontalototal) * 100, 2); ?> %</th>
                                             <th><?= ($gorontalototal - $gorontalo); ?> / <?= round((($gorontalototal - $gorontalo) / $gorontalototal) * 100, 2); ?> %</th>
                                             <th><?= $gorontalototal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>2</th>
                                             <th class="text-left">MAKASSAR</th>
                                             <th><?= $makassar; ?> / <?= round(($makassar / $makassartotal) * 100, 2); ?> %</th>
                                             <th><?= ($makassartotal - $makassar); ?> / <?= round((($makassartotal - $makassar) / $makassartotal) * 100, 2); ?> %</th>
                                             <th><?= $makassartotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>3</th>
                                             <th class="text-left">MALUKU</th>
                                             <th><?= $maluku; ?> / <?= round(($maluku / $malukutotal) * 100, 2); ?> %</th>
                                             <th><?= ($malukutotal - $maluku); ?> / <?= round((($malukutotal - $maluku) / $malukutotal) * 100, 2); ?> %</th>
                                             <th><?= $malukutotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>4</th>
                                             <th class="text-left">PAPUA</th>
                                             <th><?= $papua; ?> / <?= round(($papua / $papuatotal) * 100, 2); ?> %</th>
                                             <th><?= ($papuatotal - $papua); ?> / <?= round((($papuatotal - $papua) / $papuatotal) * 100, 2); ?> %</th>
                                             <th><?= $papuatotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>5</th>
                                             <th class="text-left">PAPUA BARAT</th>
                                             <th><?= $papuabarat; ?> / <?= round(($papuabarat / $papuabarattotal) * 100, 2); ?> %</th>
                                             <th><?= ($papuabarattotal - $papuabarat); ?> / <?= round((($papuabarattotal - $papuabarat) / $papuabarattotal) * 100, 2); ?> %</th>
                                             <th><?= $papuabarattotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>6</th>
                                             <th class="text-left">SULSELBAR</th>
                                             <th><?= $sulselbar; ?> / <?= round(($sulselbar / $sulselbartotal) * 100, 2); ?> %</th>
                                             <th><?= ($sulselbartotal - $sulselbar); ?> / <?= round((($sulselbartotal - $sulselbar) / $sulselbartotal) * 100, 2); ?> %</th>
                                             <th><?= $sulselbartotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>7</th>
                                             <th class="text-left">SULTENG</th>
                                             <th><?= $sulteng; ?> / <?= round(($sulteng / $sultengtotal) * 100, 2); ?> %</th>
                                             <th><?= ($sultengtotal - $sulteng); ?> / <?= round((($sultengtotal - $sulteng) / $sultengtotal) * 100, 2); ?> %</th>
                                             <th><?= $sultengtotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>8</th>
                                             <th class="text-left">SULTRA</th>
                                             <th><?= $sultra; ?> / <?= round(($sultra / $sultratotal) * 100, 2); ?> %</th>
                                             <th><?= ($sultratotal - $sultra); ?> / <?= round((($sultratotal - $sultra) / $sultratotal) * 100, 2); ?> %</th>
                                             <th><?= $sultratotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>9</th>
                                             <th class="text-left">SULUT-MALUT</th>
                                             <th><?= $sulutmalut; ?> / <?= round(($sulutmalut / $sulutmaluttotal) * 100, 2); ?> %</th>
                                             <th><?= ($sulutmaluttotal - $sulutmalut); ?> / <?= round((($sulutmaluttotal - $sulutmalut) / $sulutmaluttotal) * 100, 2); ?> %</th>
                                             <th><?= $sulutmaluttotal; ?></th>
                                         </tr>
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