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
                         <p>Data Treg-1 <i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
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
                                         <div class="h5 mb-0 font-weight-bold text-light"><?= $treg1; ?></div>
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
                                         <div class="h5 mb-0 font-weight-bold text-light"><?= ($treg1all - $treg1); ?></div>
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
                                         <div class="h5 mb-0 font-weight-bold text-light"><?= $treg1all; ?></div>
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
                                             <th class="text-left">ACEH</th>
                                             <th><?= $aceh; ?> / <?= round(($aceh / $acehtotal) * 100, 2); ?> %</th>
                                             <th><?= ($acehtotal - $aceh); ?> / <?= round((($acehtotal - $aceh) / $acehtotal) * 100, 2); ?> %</th>
                                             <th><?= $acehtotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>2</th>
                                             <th class="text-left">BABEL</th>
                                             <th><?= $babel; ?> / <?= round(($babel / $babeltotal) * 100, 2); ?> %</th>
                                             <th><?= ($babeltotal - $babel); ?> / <?= round((($babeltotal - $babel) / $babeltotal) * 100, 2); ?> %</th>
                                             <th><?= $babeltotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>3</th>
                                             <th class="text-left">BENGKULU</th>
                                             <th><?= $bengkulu; ?> / <?= round(($bengkulu / $bengkulutotal) * 100, 2); ?> %</th>
                                             <th><?= ($bengkulutotal - $bengkulu); ?> / <?= round((($bengkulutotal - $bengkulu) / $bengkulutotal) * 100, 2); ?> %</th>
                                             <th><?= $bengkulutotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>4</th>
                                             <th class="text-left">JAMBI</th>
                                             <th><?= $jambi; ?> / <?= round(($jambi / $jambitotal) * 100, 2); ?> %</th>
                                             <th><?= ($jambitotal - $jambi); ?> / <?= round((($jambitotal - $jambi) / $jambitotal) * 100, 2); ?> %</th>
                                             <th><?= $jambitotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>5</th>
                                             <th class="text-left">LAMPUNG</th>
                                             <th><?= $lampung; ?> / <?= round(($lampung / $lampungtotal) * 100, 2); ?> %</th>
                                             <th><?= ($lampungtotal - $lampung); ?> / <?= round((($lampungtotal - $lampung) / $lampungtotal) * 100, 2); ?> %</th>
                                             <th><?= $lampungtotal; ?></th>
                                         </tr>
                                         </tr>
                                         <tr>
                                             <th>6</th>
                                             <th class="text-left">MEDAN</th>
                                             <th><?= $medan; ?> / <?= round(($medan / $medantotal) * 100, 2); ?> %</th>
                                             <th><?= ($medantotal - $medan); ?> / <?= round((($medantotal - $medan) / $medantotal) * 100, 2); ?> %</th>
                                             <th><?= $medantotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>7</th>
                                             <th class="text-left">RIDAR</th>
                                             <th><?= $ridar; ?> / <?= round(($ridar / $ridartotal) * 100, 2); ?> %</th>
                                             <th><?= ($ridartotal - $ridar); ?> / <?= round((($ridartotal - $ridar) / $ridartotal) * 100, 2); ?> %</th>
                                             <th><?= $ridartotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>8</th>
                                             <th class="text-left">RIKEP</th>
                                             <th><?= $rikep; ?> / <?= round(($rikep / $rikeptotal) * 100, 2); ?> %</th>
                                             <th><?= ($rikeptotal - $rikep); ?> / <?= round((($rikeptotal - $rikep) / $rikeptotal) * 100, 2); ?> %</th>
                                             <th><?= $rikeptotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>9</th>
                                             <th class="text-left">SUMBAR</th>
                                             <th><?= $sumbar; ?> / <?= round(($sumbar / $sumbartotal) * 100, 2); ?> %</th>
                                             <th><?= ($sumbartotal - $sumbar); ?> / <?= round((($sumbartotal - $sumbar) / $sumbartotal) * 100, 2); ?> %</th>
                                             <th><?= $sumbartotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>10</th>
                                             <th class="text-left">SUMSEL</th>
                                             <th><?= $sumsel; ?> / <?= round(($sumsel / $sumseltotal) * 100, 2); ?> %</th>
                                             <th><?= ($sumseltotal - $sumsel); ?> / <?= round((($sumseltotal - $sumsel) / $sumseltotal) * 100, 2); ?> %</th>
                                             <th><?= $sumseltotal; ?></th>
                                         </tr>
                                         <tr>
                                             <th>11</th>
                                             <th class="text-left">SUMUT</th>
                                             <th><?= $sumut; ?> / <?= round(($sumut / $sumuttotal) * 100, 2); ?> %</th>
                                             <th><?= ($sumuttotal - $sumut); ?> / <?= round((($sumuttotal - $sumut) / $sumuttotal) * 100, 2); ?> %</th>
                                             <th><?= $sumuttotal; ?></th>
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