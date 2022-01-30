<!-- Begin Page Content -->

<div class="container-fluid my-auto">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-white">PERFORMANTION</h1>
<div class="row mt-3">
        <div class="col-sm">
            <div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.8;">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark text-center">Tracking Order</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <form method="post" action=<?php echo site_url('performantion'); ?>>
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class=" col-md-3">
                                    <div class="form-group text-dark text-center">
                                        <input value="<?= set_value('track'); ?>" name="track" id="track" class="form-control text-sm text-center">
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <input class="btn btn-primary form-control " value="Search" id="filter" name="filter" href="" type="submit"> </input>
                                </div>
                            </div>
                        </form>



                        <div class=" row">
                            <div class="col-sm">
                                <div class="card bg-gradient-dark shadow mb-4 text-white">

                                    <div class="card-body">
                                        <div class="table-responsive small">
                                            <table class="table table-bordered text-white text-center" id="dataTable" width="100%" cellspacing="">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Name</th>
                                                        <th>TrackID</th>
                                                        <th>Chanel</th>
                                                        <th>Regional</th>
                                                        <th>Witel</th>
                                                        <th>Validation</th>
                                                        <th>Detail Invalid</th>
                                                        <th>Validation Identity</th>
                                                        <th>Detail Identity</th>
                                                        <th>Dial To</th>
                                                        <th>Status Call</th>
                                                        <th>Reason Call</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($trackid as $td) : ?>

                                                        <tr>
                                                            <th><?= $td['date']; ?></th>
                                                            <th><?= $td['time']; ?></th>
                                                            <th class="text-left"><?= $td['name']; ?></th>
                                                            <th><?= $td['trackid']; ?></th>
                                                            <th><?= $td['chanel']; ?></th>
                                                            <th><?= $td['regional']; ?></th>
                                                            <th><?= $td['witel']; ?></th>
                                                            <th><?= $td['validation']; ?></th>
                                                            <th><?= $td['detail_invalid']; ?></th>
                                                            <th><?= $td['ktp_validation']; ?></th>
                                                            <th><?= $td['detail_ktp']; ?></th>
                                                            <th><?= $td['dial_to']; ?></th>
                                                            <th><?= $td['status_call']; ?></th>
                                                            <th><?= $td['reason_call']; ?></th>

                                                        </tr>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
    <div class="row">
        <div class="col-lg table-responsive small">
            <label class="text-white">YEARLY CONSUME</label>
            <?php error_reporting(0); ?>
            <table class="table table-bordered text-white text-center xs">
                <thead>
                    <tr class="bg-gradient-dark">
                        <th>Month</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>Mei</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Ags</th>
                        <th>Sep</th>
                        <th>Okt</th>
                        <th>Nov</th>
                        <th>Des</th>

                    </tr>
                    <tr>
                        <th>Consume</th>
                        <th><?= $jan; ?></th>
                        <th><?= $feb; ?></th>
                        <th><?= $mar; ?></th>
                        <th><?= $apr; ?></th>
                        <th><?= $mei; ?></th>
                        <th><?= $jun; ?></th>
                        <th><?= $jul; ?></th>
                        <th><?= $ags; ?></th>
                        <th><?= $sep; ?></th>
                        <th><?= $okt; ?></th>
                        <th><?= $nov; ?></th>
                        <th><?= $des; ?></th>
                    </tr>
                    <tr>
                        <th>Avg Daily Consume</th>
                        <th><?= round(($jan / $totaluniqjan), 2); ?></th>
                        <th><?= round(($feb / $totaluniqfeb), 2); ?></th>
                        <th><?= round(($mar / $totaluniqmar), 2); ?></th>
                        <th><?= round(($apr / $totaluniqapr), 2); ?></th>
                        <th><?= round(($mei / $totaluniqmei), 2); ?></th>
                        <th><?= round(($jun / $totaluniqjun), 2); ?></th>
                        <th><?= round(($jul / $totaluniqjul), 2); ?></th>
                        <th><?= round(($ags / $totaluniqags), 2); ?></th>
                        <th><?= round(($sep / $totaluniqsep), 2); ?></th>
                        <th><?= round(($okt / $totaluniqokt), 2); ?></th>
                        <th><?= round(($nov / $totaluniqnov), 2); ?></th>
                        <th><?= round(($des / $totaluniqdes), 2); ?></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
 <div class="card-header mt-3">
        <form method="post" action=<?php echo site_url('performantion'); ?>>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class=" col-md-3">
                    <div class="form-group text-dark text-center">
                        <select name="month" id="month" class="form-control text-sm text-center">
                            <option value="<? set_value('month'); ?>">Select Month</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 mb-3 text-center">
                    <input class="btn btn-primary form-control " value="Search" id="filter" name="filter" href="" type="submit"> </input>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-3">
        <div class="col-lg table-responsive small">
            <label class="text-white">MONTHLY <?php foreach ($month as $m) : ?> <?= $m['witel']; ?> <?php endforeach; ?> </label>
            <table class="table table-bordered text-white text-center xs">
                <thead>
                    <tr class="bg-gradient-dark">
                        <th>Date</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>

                    </tr>
                    <tr>
                        <th colspan="32" class="bg-light text-dark" style="opacity: 0.8;">MONTHLY CONSUME</th>
                    </tr>
                    <tr>
                        <th>Consume</th>
                        <th><?= $satu; ?></th>
                        <th><?= $dua; ?></th>
                        <th><?= $tiga; ?></th>
                        <th><?= $empat; ?></th>
                        <th><?= $lima; ?></th>
                        <th><?= $enam; ?></th>
                        <th><?= $tujuh; ?></th>
                        <th><?= $delapan; ?></th>
                        <th><?= $sembilan; ?></th>
                        <th><?= $sepuluh; ?></th>
                        <th><?= $sebelas; ?></th>
                        <th><?= $duabelas; ?></th>
                        <th><?= $tigabelas; ?></th>
                        <th><?= $empatbelas; ?></th>
                        <th><?= $limabelas; ?></th>
                        <th><?= $enambelas; ?></th>
                        <th><?= $tujuhbelas; ?></th>
                        <th><?= $delapanbelas; ?></th>
                        <th><?= $sembilanbelas; ?></th>
                        <th><?= $duapuluh; ?></th>
                        <th><?= $duapuluhsatu; ?></th>
                        <th><?= $duapuluhdua; ?></th>
                        <th><?= $duapuluhtiga; ?></th>
                        <th><?= $duapuluhempat; ?></th>
                        <th><?= $duapuluhlima; ?></th>
                        <th><?= $duapuluhenam; ?></th>
                        <th><?= $duapuluhtujuh; ?></th>
                        <th><?= $duapuluhdelapan; ?></th>
                        <th><?= $duapuluhsembilan; ?></th>
                        <th><?= $tigapuluh; ?></th>
                        <th><?= $tigapuluhsatu; ?></th>
                    </tr>
                 <tr>
                                <th>Fresh</th>
                                <th><?= $satufresh; ?></th>
                                <th><?= $duafresh; ?></th>
                                <th><?= $tigafresh; ?></th>
                                <th><?= $empatfresh; ?></th>
                                <th><?= $limafresh; ?></th>
                                <th><?= $enamfresh; ?></th>
                                <th><?= $tujuhfresh; ?></th>
                                <th><?= $delapanfresh; ?></th>
                                <th><?= $sembilanfresh; ?></th>
                                <th><?= $sepuluhfresh; ?></th>
                                <th><?= $sebelasfresh; ?></th>
                                <th><?= $duabelasfresh; ?></th>
                                <th><?= $tigabelasfresh; ?></th>
                                <th><?= $empatbelasfresh; ?></th>
                                <th><?= $limabelasfresh; ?></th>
                                <th><?= $enambelasfresh; ?></th>
                                <th><?= $tujuhbelasfresh; ?></th>
                                <th><?= $delapanbelasfresh; ?></th>
                                <th><?= $sembilanbelasfresh; ?></th>
                                <th><?= $duapuluhfresh; ?></th>
                                <th><?= $duapuluhsatufresh; ?></th>
                                <th><?= $duapuluhduafresh; ?></th>
                                <th><?= $duapuluhtigafresh; ?></th>
                                <th><?= $duapuluhempatfresh; ?></th>
                                <th><?= $duapuluhlimafresh; ?></th>
                                <th><?= $duapuluhenamfresh; ?></th>
                                <th><?= $duapuluhtujuhfresh; ?></th>
                                <th><?= $duapuluhdelapanfresh; ?></th>
                                <th><?= $duapuluhsembilanfresh; ?></th>
                                <th><?= $tigapuluhfresh; ?></th>
                                <th><?= $tigapuluhsatufresh; ?></th>
                            </tr>
                            <tr>
                                <th>Reupload</th>
                                <th><?= $satureupload; ?></th>
                                <th><?= $duareupload; ?></th>
                                <th><?= $tigareupload; ?></th>
                                <th><?= $empatreupload; ?></th>
                                <th><?= $limareupload; ?></th>
                                <th><?= $enamreupload; ?></th>
                                <th><?= $tujuhreupload; ?></th>
                                <th><?= $delapanreupload; ?></th>
                                <th><?= $sembilanreupload; ?></th>
                                <th><?= $sepuluhreupload; ?></th>
                                <th><?= $sebelasreupload; ?></th>
                                <th><?= $duabelasreupload; ?></th>
                                <th><?= $tigabelasreupload; ?></th>
                                <th><?= $empatbelasreupload; ?></th>
                                <th><?= $limabelasreupload; ?></th>
                                <th><?= $enambelasreupload; ?></th>
                                <th><?= $tujuhbelasreupload; ?></th>
                                <th><?= $delapanbelasreupload; ?></th>
                                <th><?= $sembilanbelasreupload; ?></th>
                                <th><?= $duapuluhreupload; ?></th>
                                <th><?= $duapuluhsatureupload; ?></th>
                                <th><?= $duapuluhduareupload; ?></th>
                                <th><?= $duapuluhtigareupload; ?></th>
                                <th><?= $duapuluhempatreupload; ?></th>
                                <th><?= $duapuluhlimareupload; ?></th>
                                <th><?= $duapuluhenamreupload; ?></th>
                                <th><?= $duapuluhtujuhreupload; ?></th>
                                <th><?= $duapuluhdelapanreupload; ?></th>
                                <th><?= $duapuluhsembilanreupload; ?></th>
                                <th><?= $tigapuluhreupload; ?></th>
                                <th><?= $tigapuluhsatureupload; ?></th>
                            </tr>
                    <tr>
                        <th colspan="32" class="bg-light text-dark" style="opacity: 0.8;">MONTHLY UNIQ</th>
                    </tr>
                    <tr>
                        <th>Valid</th>
                        <th><?= $satuva + $satudi ?></th>
                        <th><?= $duava + $duadi ?></th>
                        <th><?= $tigava + $tigadi ?></th>
                        <th><?= $empatva + $empatdi ?></th>
                        <th><?= $limava + $limadi ?></th>
                        <th><?= $enamva + $enamdi ?></th>
                        <th><?= $tujuhva + $tujuhdi ?></th>
                        <th><?= $delapanva + $delapandi ?></th>
                        <th><?= $sembilanva + $sembilandi ?></th>
                        <th><?= $sepuluhva + $sepuluhdi ?></th>
                        <th><?= $sebelasva + $sebelasdi ?></th>
                        <th><?= $duabelasva + $duabelasdi ?></th>
                        <th><?= $tigabelasva + $tigabelasdi ?></th>
                        <th><?= $empatbelasva + $empatbelasdi ?></th>
                        <th><?= $limabelasva + $limabelasdi ?></th>
                        <th><?= $enambelasva + $enambelasdi ?></th>
                        <th><?= $tujuhbelasva + $tujuhbelasdi ?></th>
                        <th><?= $delapanbelasva + $delapanbelasdi ?></th>
                        <th><?= $sembilanbelasva + $sembilanbelasdi ?></th>
                        <th><?= $duapuluhva + $duapuluhdi ?></th>
                        <th><?= $duapuluhsatuva + $duapuluhsatudi ?></th>
                        <th><?= $duapuluhduava + $duapuluhduadi ?></th>
                        <th><?= $duapuluhtigava + $duapuluhtigadi ?></th>
                        <th><?= $duapuluhempatva + $duapuluhempatdi ?></th>
                        <th><?= $duapuluhlimava + $duapuluhlimadi ?></th>
                        <th><?= $duapuluhenamva + $duapuluhenamdi ?></th>
                        <th><?= $duapuluhtujuhva + $duapuluhtujuhdi ?></th>
                        <th><?= $duapuluhdelapanva + $duapuluhdelapandi ?></th>
                        <th><?= $duapuluhsembilanva + $duapuluhsembilandi ?></th>
                        <th><?= $tigapuluhva + $tigapuluhdi ?></th>
                        <th><?= $tigapuluhsatuva + $tigapuluhsatudi ?></th>
                    </tr>
                    <tr class="text-warning">
                        <th class="text-left"> > Valid ID</th>
                        <th><?= $satuid; ?></th>
                        <th><?= $duaid; ?></th>
                        <th><?= $tigaid; ?></th>
                        <th><?= $empatid; ?></th>
                        <th><?= $limaid; ?></th>
                        <th><?= $enamid; ?></th>
                        <th><?= $tujuhid; ?></th>
                        <th><?= $delapanid; ?></th>
                        <th><?= $sembilanid; ?></th>
                        <th><?= $sepuluhid; ?></th>
                        <th><?= $sebelasid; ?></th>
                        <th><?= $duabelasid; ?></th>
                        <th><?= $tigabelasid; ?></th>
                        <th><?= $empatbelasid; ?></th>
                        <th><?= $limabelasid; ?></th>
                        <th><?= $enambelasid; ?></th>
                        <th><?= $tujuhbelasid; ?></th>
                        <th><?= $delapanbelasid; ?></th>
                        <th><?= $sembilanbelasid; ?></th>
                        <th><?= $duapuluhid; ?></th>
                        <th><?= $duapuluhsatuid; ?></th>
                        <th><?= $duapuluhduaid; ?></th>
                        <th><?= $duapuluhtigaid; ?></th>
                        <th><?= $duapuluhempatid; ?></th>
                        <th><?= $duapuluhlimaid; ?></th>
                        <th><?= $duapuluhenamid; ?></th>
                        <th><?= $duapuluhtujuhid; ?></th>
                        <th><?= $duapuluhdelapanid; ?></th>
                        <th><?= $duapuluhsembilanid; ?></th>
                        <th><?= $tigapuluhid; ?></th>
                        <th><?= $tigapuluhsatuid; ?></th>
                    </tr>
                    <tr class="text-warning">
                        <th class="text-left"> > Invalid ID</th>
                        <th><?= (($satuva + $satudi) - ($satuid + $satubl)); ?></th>
                        <th><?= (($duava + $duadi) - ($duaid + $duabl)); ?></th>
                        <th><?= (($tigava + $tigadi) - ($tigaid + $tigabl)); ?></th>
                        <th><?= (($empatva + $empatdi) - ($empatid + $empatbl)); ?></th>
                        <th><?= (($limava + $limadi) - ($limaid + $limabl)); ?></th>
                        <th><?= (($enamva + $enamdi) - ($enamid + $enambl)); ?></th>
                        <th><?= (($tujuhva + $tujuhdi) - ($tujuhid + $tujuhbl)); ?></th>
                        <th><?= (($delapanva + $delapandi) - ($delapanid + $delapanbl)); ?></th>
                        <th><?= (($sembilanva + $sembilandi) - ($sembilanid + $sembilanbl)); ?></th>
                        <th><?= (($sepuluhva + $sepuluhdi) - ($sepuluhid + $sepuluhbl)); ?></th>
                        <th><?= (($sebelasva + $sebelasdi) - ($sebelasid + $sebelasbl)); ?></th>
                        <th><?= (($duabelasva + $duabelasdi) - ($duabelasid + $duabelasbl)); ?></th>
                        <th><?= (($tigabelasva + $tigabelasdi) - ($tigabelasid + $tigabelasbl)); ?></th>
                        <th><?= (($empatbelasva + $empatbelasdi) - ($empatbelasid + $empatbelasbl)); ?></th>
                        <th><?= (($limabelasva + $limabelasdi) - ($limabelasid + $limabelasbl)); ?></th>
                        <th><?= (($enambelasva + $enambelasdi) - ($enambelasid + $enambelasbl)); ?></th>
                        <th><?= (($tujuhbelasva + $tujuhbelasdi) - ($tujuhbelasid + $tujuhbelasbl)); ?></th>
                        <th><?= (($delapanbelasva + $delapanbelasdi) - ($delapanbelasid + $delapanbelasbl)); ?></th>
                        <th><?= (($sembilanbelasva + $sembilanbelasdi) - ($sembilanbelasid + $sembilanbelasbl)); ?></th>
                        <th><?= (($duapuluhva + $duapuluhdi) - ($duapuluhid + $duapuluhbl)); ?></th>
                        <th><?= (($duapuluhsatuva + $duapuluhsatudi) - ($duapuluhsatuid + $duapuluhsatubl)); ?></th>
                        <th><?= (($duapuluhduava + $duapuluhduadi) - ($duapuluhduaid + $duapuluhduabl)); ?></th>
                        <th><?= (($duapuluhtigava + $duapuluhtigadi) - ($duapuluhtigaid + $duapuluhtigabl)); ?></th>
                        <th><?= (($duapuluhempatva + $duapuluhempatdi) - ($duapuluhempatid + $duapuluhempatbl)); ?></th>
                        <th><?= (($duapuluhlimava + $duapuluhlimadi) - ($duapuluhlimaid + $duapuluhlimabl)); ?></th>
                        <th><?= (($duapuluhenamva + $duapuluhenamdi) - ($duapuluhenamid + $duapuluhenambl)); ?></th>
                        <th><?= (($duapuluhtujuhva + $duapuluhtujuhdi) - ($duapuluhtujuhid + $duapuluhtujuhbl)); ?></th>
                        <th><?= (($duapuluhdelapanva + $duapuluhdelapandi) - ($duapuluhdelapanid + $duapuluhdelapanbl)); ?></th>
                        <th><?= (($duapuluhsembilanva + $duapuluhsembilandi) - ($duapuluhsembilanid + $duapuluhsembilanbl)); ?></th>
                        <th><?= (($tigapuluhva + $tigapuluhdi) - ($tigapuluhid + $tigapuluhbl)); ?></th>
                        <th><?= (($tigapuluhsatuva + $tigapuluhsatudi) - ($tigapuluhsatuid + $tigapuluhsatubl)); ?></th>

                    </tr>
                    <tr class="text-warning">
                        <th class="text-left"> > Blacklist</th>
                        <th><?= $satubl; ?></th>
                        <th><?= $duabl; ?></th>
                        <th><?= $tigabl; ?></th>
                        <th><?= $empatbl; ?></th>
                        <th><?= $limabl; ?></th>
                        <th><?= $enambl; ?></th>
                        <th><?= $tujuhbl; ?></th>
                        <th><?= $delapanbl; ?></th>
                        <th><?= $sembilanbl; ?></th>
                        <th><?= $sepuluhbl; ?></th>
                        <th><?= $sebelasbl; ?></th>
                        <th><?= $duabelasbl; ?></th>
                        <th><?= $tigabelasbl; ?></th>
                        <th><?= $empatbelasbl; ?></th>
                        <th><?= $limabelasbl; ?></th>
                        <th><?= $enambelasbl; ?></th>
                        <th><?= $tujuhbelasbl; ?></th>
                        <th><?= $delapanbelasbl; ?></th>
                        <th><?= $sembilanbelasbl; ?></th>
                        <th><?= $duapuluhbl; ?></th>
                        <th><?= $duapuluhsatubl; ?></th>
                        <th><?= $duapuluhduabl; ?></th>
                        <th><?= $duapuluhtigabl; ?></th>
                        <th><?= $duapuluhempatbl; ?></th>
                        <th><?= $duapuluhlimabl; ?></th>
                        <th><?= $duapuluhenambl; ?></th>
                        <th><?= $duapuluhtujuhbl; ?></th>
                        <th><?= $duapuluhdelapanbl; ?></th>
                        <th><?= $duapuluhsembilanbl; ?></th>
                        <th><?= $tigapuluhbl; ?></th>
                        <th><?= $tigapuluhsatubl; ?></th>
                    </tr>
                    <tr>
                        <th>Invalid</th>
                        <th><?= ($satuto - ($satuva + $satudi)) ?></th>
                        <th><?= ($duato - ($duava + $duadi)) ?></th>
                        <th><?= ($tigato - ($tigava + $tigadi)) ?></th>
                        <th><?= ($empatto - ($empatva + $empatdi)) ?></th>
                        <th><?= ($limato - ($limava + $limadi)) ?></th>
                        <th><?= ($enamto - ($enamva + $enamdi)) ?></th>
                        <th><?= ($tujuhto - ($tujuhva + $tujuhdi)) ?></th>
                        <th><?= ($delapanto - ($delapanva + $delapandi)) ?></th>
                        <th><?= ($sembilanto - ($sembilanva + $sembilandi)) ?></th>
                        <th><?= ($sepuluhto - ($sepuluhva + $sepuluhdi)) ?></th>
                        <th><?= ($sebelasto - ($sebelasva + $sebelasdi)) ?></th>
                        <th><?= ($duabelasto - ($duabelasva + $duabelasdi)) ?></th>
                        <th><?= ($tigabelasto - ($tigabelasva + $tigabelasdi)) ?></th>
                        <th><?= ($empatbelasto - ($empatbelasva + $empatbelasdi)) ?></th>
                        <th><?= ($limabelasto - ($limabelasva + $limabelasdi)) ?></th>
                        <th><?= ($enambelasto - ($enambelasva + $enambelasdi)) ?></th>
                        <th><?= ($tujuhbelasto - ($tujuhbelasva + $tujuhbelasdi)) ?></th>
                        <th><?= ($delapanbelasto - ($delapanbelasva + $delapanbelasdi)) ?></th>
                        <th><?= ($sembilanbelasto - ($sembilanbelasva + $sembilanbelasdi)) ?></th>
                        <th><?= ($duapuluhto - ($duapuluhva + $duapuluhdi)) ?></th>
                        <th><?= ($duapuluhsatuto - ($duapuluhsatuva + $duapuluhsatudi)) ?></th>
                        <th><?= ($duapuluhduato - ($duapuluhduava + $duapuluhduadi)) ?></th>
                        <th><?= ($duapuluhtigato - ($duapuluhtigava + $duapuluhtigadi)) ?></th>
                        <th><?= ($duapuluhempatto - ($duapuluhempatva + $duapuluhempatdi)) ?></th>
                        <th><?= ($duapuluhlimato - ($duapuluhlimava + $duapuluhlimadi)) ?></th>
                        <th><?= ($duapuluhenamto - ($duapuluhenamva + $duapuluhenamdi)) ?></th>
                        <th><?= ($duapuluhtujuhto - ($duapuluhtujuhva + $duapuluhtujuhdi)) ?></th>
                        <th><?= ($duapuluhdelapanto - ($duapuluhdelapanva + $duapuluhdelapandi)) ?></th>
                        <th><?= ($duapuluhsembilanto - ($duapuluhsembilanva + $duapuluhsembilandi)) ?></th>
                        <th><?= ($tigapuluhto - ($tigapuluhva + $tigapuluhdi)) ?></th>
                        <th><?= ($tigapuluhsatuto - ($tigapuluhsatuva + $tigapuluhsatudi)) ?></th>

                    </tr>
                    <tr>
                        <th>Total</th>
                        <th><?= $satuto; ?></th>
                        <th><?= $duato; ?></th>
                        <th><?= $tigato; ?></th>
                        <th><?= $empatto; ?></th>
                        <th><?= $limato; ?></th>
                        <th><?= $enamto; ?></th>
                        <th><?= $tujuhto; ?></th>
                        <th><?= $delapanto; ?></th>
                        <th><?= $sembilanto; ?></th>
                        <th><?= $sepuluhto; ?></th>
                        <th><?= $sebelasto; ?></th>
                        <th><?= $duabelasto; ?></th>
                        <th><?= $tigabelasto; ?></th>
                        <th><?= $empatbelasto; ?></th>
                        <th><?= $limabelasto; ?></th>
                        <th><?= $enambelasto; ?></th>
                        <th><?= $tujuhbelasto; ?></th>
                        <th><?= $delapanbelasto; ?></th>
                        <th><?= $sembilanbelasto; ?></th>
                        <th><?= $duapuluhto; ?></th>
                        <th><?= $duapuluhsatuto; ?></th>
                        <th><?= $duapuluhduato; ?></th>
                        <th><?= $duapuluhtigato; ?></th>
                        <th><?= $duapuluhempatto; ?></th>
                        <th><?= $duapuluhlimato; ?></th>
                        <th><?= $duapuluhenamto; ?></th>
                        <th><?= $duapuluhtujuhto; ?></th>
                        <th><?= $duapuluhdelapanto; ?></th>
                        <th><?= $duapuluhsembilanto; ?></th>
                        <th><?= $tigapuluhto; ?></th>
                        <th><?= $tigapuluhsatuto; ?></th>
                    </tr>
                    <tr>
                        <th colspan="32" class="bg-light text-dark" style="opacity: 0.8;">PERCENTAGE UNIQ TO CONSUME</th>
                    </tr>
                    <tr>
                        <th>%</th>
                        <th><?= round(($satuto / $satu) * 100, 2); ?></th>
                        <th><?= round(($duato / $dua) * 100, 2); ?></th>
                        <th><?= round(($tigato / $tiga) * 100, 2); ?></th>
                        <th><?= round(($empatto / $empat) * 100, 2); ?></th>
                        <th><?= round(($limato / $lima) * 100, 2); ?></th>
                        <th><?= round(($enamto / $enam) * 100, 2); ?></th>
                        <th><?= round(($tujuhto / $tujuh) * 100, 2); ?></th>
                        <th><?= round(($delapanto / $delapan) * 100, 2); ?></th>
                        <th><?= round(($sembilanto / $sembilan) * 100, 2); ?></th>
                        <th><?= round(($sepuluhto / $sepuluh) * 100, 2); ?></th>
                        <th><?= round(($sebelasto / $sebelas) * 100, 2); ?></th>
                        <th><?= round(($duabelasto / $duabelas) * 100, 2); ?></th>
                        <th><?= round(($tigabelasto / $tigabelas) * 100, 2); ?></th>
                        <th><?= round(($empatbelasto / $empatbelas) * 100, 2); ?></th>
                        <th><?= round(($limabelasto / $limabelas) * 100, 2); ?></th>
                        <th><?= round(($enambelasto / $enambelas) * 100, 2); ?></th>
                        <th><?= round(($tujuhbelasto / $tujuhbelas) * 100, 2); ?></th>
                        <th><?= round(($delapanbelasto / $delapanbelas) * 100, 2); ?></th>
                        <th><?= round(($sembilanbelasto / $sembilanbelas) * 100, 2); ?></th>
                        <th><?= round(($duapuluhto / $duapuluh) * 100, 2); ?></th>
                        <th><?= round(($duapuluhsatuto / $duapuluhsatu) * 100, 2); ?></th>
                        <th><?= round(($duapuluhduato / $duapuluhdua) * 100, 2); ?></th>
                        <th><?= round(($duapuluhtigato / $duapuluhtiga) * 100, 2); ?></th>
                        <th><?= round(($duapuluhempatto / $duapuluhempat) * 100, 2); ?></th>
                        <th><?= round(($duapuluhlimato / $duapuluhlima) * 100, 2); ?></th>
                        <th><?= round(($duapuluhenamto / $duapuluhenam) * 100, 2); ?></th>
                        <th><?= round(($duapuluhtujuhto / $duapuluhtujuh) * 100, 2); ?></th>
                        <th><?= round(($duapuluhdelapanto / $duapuluhdelapan) * 100, 2); ?></th>
                        <th><?= round(($duapuluhsembilanto / $duapuluhsembilan) * 100, 2); ?></th>
                        <th><?= round(($tigapuluhto / $tigapuluh) * 100, 2); ?></th>
                        <th><?= round(($tigapuluhsatuto / $tigapuluhsatu) * 100, 2); ?></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
<!--     <div class="row ">
        <div class="col-lg">
            <label class="text-white small">DAILY CONSUME</label>
            <div class="card bg-gradient-dark shadow mb-4 text-white" style="opacity: 0.8;">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-dark text-center">DAILY CONSUME [<?= date('d-m-Y G:i:s'); ?>]</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-bordered text-white text-center" id="dataTable" width="100%" cellspacing="">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Valid</th>
                                    <th>Invalid</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left" value>Ade Taufiq Fitrah Ramadhan</td>
                                    <td class="text-center"><?= $adeva; ?></td>
                                    <td class="text-center"><?= $adein; ?></td>
                                    <td class="text-center"><?= ($adeva + $adein); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Annida Halim</td>
                                    <td class="text-center"><?= $annidava; ?></td>
                                    <td class="text-center"><?= $annidain; ?></td>
                                    <td class="text-center"><?= ($annidava + $annidain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Arafiq Fuadillah</td>
                                    <td class="text-center"><?= $arafiqva; ?></td>
                                    <td class="text-center"><?= $arafiqin; ?></td>
                                    <td class="text-center"><?= ($arafiqva + $arafiqin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Ayi Hidayatul Alim</td>
                                    <td class="text-center"><?= $ayiva; ?></td>
                                    <td class="text-center"><?= $ayiin; ?></td>
                                    <td class="text-center"><?= ($ayiva + $ayiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Ayu Nurmawanti</td>
                                    <td class="text-center"><?= $ayuva; ?></td>
                                    <td class="text-center"><?= $ayuin; ?></td>
                                    <td class="text-center"><?= ($ayuva + $ayuin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Bayu Wibisono</td>
                                    <td class="text-center"><?= $bayuva; ?></td>
                                    <td class="text-center"><?= $bayuin; ?></td>
                                    <td class="text-center"><?= ($bayuva + $bayuin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Canigia Erlangga</td>
                                    <td class="text-center"><?= $canva; ?></td>
                                    <td class="text-center"><?= $canin; ?></td>
                                    <td class="text-center"><?= ($canva + $canin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Dea Ananda</td>
                                    <td class="text-center"><?= $deava; ?></td>
                                    <td class="text-center"><?= $deain; ?></td>
                                    <td class="text-center"><?= ($deava + $deain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Deni</td>
                                    <td class="text-center"><?= $deniva; ?></td>
                                    <td class="text-center"><?= $deniin; ?></td>
                                    <td class="text-center"><?= ($deniva + $deniin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Deviana Dewi</td>
                                    <td class="text-center"><?= $deviva; ?></td>
                                    <td class="text-center"><?= $deviin; ?></td>
                                    <td class="text-center"><?= ($deviva + $deviin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Dhyas Lestari</td>
                                    <td class="text-center"><?= $dyasva; ?></td>
                                    <td class="text-center"><?= $dyasin; ?></td>
                                    <td class="text-center"><?= ($dyasva + $dyasin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Diah Kumalasari</td>
                                    <td class="text-center"><?= $diahva; ?></td>
                                    <td class="text-center"><?= $diahin; ?></td>
                                    <td class="text-center"><?= ($diahva + $diahin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Eka Marina</td>
                                    <td class="text-center"><?= $ekava; ?></td>
                                    <td class="text-center"><?= $ekain; ?></td>
                                    <td class="text-center"><?= ($ekava + $ekain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Elisa Yanti</td>
                                    <td class="text-center"><?= $elisava; ?></td>
                                    <td class="text-center"><?= $elisain; ?></td>
                                    <td class="text-center"><?= ($elisava + $elisain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Farhan Putera Prasetiyo</td>
                                    <td class="text-center"><?= $farhanva; ?></td>
                                    <td class="text-center"><?= $farhanin; ?></td>
                                    <td class="text-center"><?= ($farhanva + $farhanin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Ficksy Rahayu</td>
                                    <td class="text-center"><?= $fiksiva; ?></td>
                                    <td class="text-center"><?= $fiksiin; ?></td>
                                    <td class="text-center"><?= ($fiksiva + $fiksiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Idrus Dirgantara</td>
                                    <td class="text-center"><?= $idrusva; ?></td>
                                    <td class="text-center"><?= $idrusin; ?></td>
                                    <td class="text-center"><?= ($idrusva + $idrusin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Indah Nuraini</td>
                                    <td class="text-center"><?= $indahva; ?></td>
                                    <td class="text-center"><?= $indahin; ?></td>
                                    <td class="text-center"><?= ($indahva + $indahin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Kireina Dwi Faraumina</td>
                                    <td class="text-center"><?= $kireiva; ?></td>
                                    <td class="text-center"><?= $kereiin; ?></td>
                                    <td class="text-center"><?= ($kireiva + $kereiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Lathifa Utami Dewi</td>
                                    <td class="text-center"><?= $tifava; ?></td>
                                    <td class="text-center"><?= $tifain; ?></td>
                                    <td class="text-center"><?= ($tifava + $tifain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Lika Novelia</td>
                                    <td class="text-center"><?= $likava; ?></td>
                                    <td class="text-center"><?= $likain; ?></td>
                                    <td class="text-center"><?= ($likava + $likain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Marta Puji Astuti</td>
                                    <td class="text-center"><?= $martava; ?></td>
                                    <td class="text-center"><?= $martain; ?></td>
                                    <td class="text-center"><?= ($martava + $martain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Muhamad Rifaldi</td>
                                    <td class="text-center"><?= $valdiva; ?></td>
                                    <td class="text-center"><?= $valdiin; ?></td>
                                    <td class="text-center"><?= ($valdiva + $valdiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Muhammad Enjoy</td>
                                    <td class="text-center"><?= $enjoyva; ?></td>
                                    <td class="text-center"><?= $enjoyin; ?></td>
                                    <td class="text-center"><?= ($enjoyva + $enjoyin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Muhammad Habibi Nurhayat</td>
                                    <td class="text-center"><?= $habibiva; ?></td>
                                    <td class="text-center"><?= $habibiin; ?></td>
                                    <td class="text-center"><?= ($habibiva + $habibiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Nissa Azmi Diana</td>
                                    <td class="text-center"><?= $nissava; ?></td>
                                    <td class="text-center"><?= $nissain; ?></td>
                                    <td class="text-center"><?= ($nissava + $nissain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Nurul Afifah</td>
                                    <td class="text-center"><?= $nurulva; ?></td>
                                    <td class="text-center"><?= $nurulin; ?></td>
                                    <td class="text-center"><?= ($nurulva + $nurulin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Putri Restu Hermawati</td>
                                    <td class="text-center"><?= $putriva; ?></td>
                                    <td class="text-center"><?= $putriin; ?></td>
                                    <td class="text-center"><?= ($putriva + $putriin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Rahmawati</td>
                                    <td class="text-center"><?= $rahmava; ?></td>
                                    <td class="text-center"><?= $rahmain; ?></td>
                                    <td class="text-center"><?= ($rahmava + $rahmain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Riski Fazriyawan</td>
                                    <td class="text-center"><?= $riskiva; ?></td>
                                    <td class="text-center"><?= $riskiin; ?></td>
                                    <td class="text-center"><?= ($riskiva + $riskiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Rosalina Rahail</td>
                                    <td class="text-center"><?= $rosava; ?></td>
                                    <td class="text-center"><?= $rosain; ?></td>
                                    <td class="text-center"><?= ($rosava + $rosain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Siti Alfidah</td>
                                    <td class="text-center"><?= $sitiva; ?></td>
                                    <td class="text-center"><?= $sitiin; ?></td>
                                    <td class="text-center"><?= ($sitiva + $sitiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Syuhada</td>
                                    <td class="text-center"><?= $syuhadava; ?></td>
                                    <td class="text-center"><?= $syuhadain; ?></td>
                                    <td class="text-center"><?= ($syuhadava + $syuhadain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Waode Nur Oktavianiansyah</td>
                                    <td class="text-center"><?= $waodeva; ?></td>
                                    <td class="text-center"><?= $waodein; ?></td>
                                    <td class="text-center"><?= ($waodeva + $waodein); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Yogi Maulana Fatahillah</td>
                                    <td class="text-center"><?= $yogiva; ?></td>
                                    <td class="text-center"><?= $yogiin; ?></td>
                                    <td class="text-center"><?= ($yogiva + $yogiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Meta Yunita Kusuma</td>
                                    <td class="text-center"><?= $metava; ?></td>
                                    <td class="text-center"><?= $metain; ?></td>
                                    <td class="text-center"><?= ($metava + $metain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Maya Pitaloka</td>
                                    <td class="text-center"><?= $mayava; ?></td>
                                    <td class="text-center"><?= $mayain; ?></td>
                                    <td class="text-center"><?= ($mayava + $mayain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Sonia Istiqomah</td>
                                    <td class="text-center"><?= $soniava; ?></td>
                                    <td class="text-center"><?= $soniain; ?></td>
                                    <td class="text-center"><?= ($soniava + $soniain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Sumiyati</td>
                                    <td class="text-center"><?= $sumiyativa; ?></td>
                                    <td class="text-center"><?= $sumiyatiin; ?></td>
                                    <td class="text-center"><?= ($sumiyativa + $sumiyatiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Luthfi Setyiawan</td>
                                    <td class="text-center"><?= $luthfiva; ?></td>
                                    <td class="text-center"><?= $luthfiin; ?></td>
                                    <td class="text-center"><?= ($luthfiva + $luthfiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Anita Rahmawati</td>
                                    <td class="text-center"><?= $anitava; ?></td>
                                    <td class="text-center"><?= $anitain; ?></td>
                                    <td class="text-center"><?= ($anitava + $anitain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Uji Pazilawati</td>
                                    <td class="text-center"><?= $ujiva; ?></td>
                                    <td class="text-center"><?= $ujiin; ?></td>
                                    <td class="text-center"><?= ($ujiva + $ujiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Nimas Dewi</td>
                                    <td class="text-center"><?= $nimasva; ?></td>
                                    <td class="text-center"><?= $nimasin; ?></td>
                                    <td class="text-center"><?= ($nimasva + $nimasin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Ira Aprianti</td>
                                    <td class="text-center"><?= $irava; ?></td>
                                    <td class="text-center"><?= $irain; ?></td>
                                    <td class="text-center"><?= ($irava + $irain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Datty Yurinzha A</td>
                                    <td class="text-center"><?= $dattyva; ?></td>
                                    <td class="text-center"><?= $dattyin; ?></td>
                                    <td class="text-center"><?= ($dattyva + $dattyin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Brilia Gebita Sugoro Putri</td>
                                    <td class="text-center"><?= $briliava; ?></td>
                                    <td class="text-center"><?= $briliain; ?></td>
                                    <td class="text-center"><?= ($briliava + $briliain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Andini Catur Pratiwi</td>
                                    <td class="text-center"><?= $andiniva; ?></td>
                                    <td class="text-center"><?= $andiniin; ?></td>
                                    <td class="text-center"><?= ($andiniva + $andiniin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Shintia Futri Firanti</td>
                                    <td class="text-center"><?= $shintiava; ?></td>
                                    <td class="text-center"><?= $shintiain; ?></td>
                                    <td class="text-center"><?= ($shintiava + $shintiain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Dewi Mustika Jayanti</td>
                                    <td class="text-center"><?= $dewiva; ?></td>
                                    <td class="text-center"><?= $dewiin; ?></td>
                                    <td class="text-center"><?= ($dewiva + $dewiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Santi pertiwi</td>
                                    <td class="text-center"><?= $santiva; ?></td>
                                    <td class="text-center"><?= $santiin; ?></td>
                                    <td class="text-center"><?= ($santiva + $santiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Lisna sugandi</td>
                                    <td class="text-center"><?= $lisnava; ?></td>
                                    <td class="text-center"><?= $lisnain; ?></td>
                                    <td class="text-center"><?= ($lisnava + $lisnain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Kevin Haidil putra</td>
                                    <td class="text-center"><?= $kevinva; ?></td>
                                    <td class="text-center"><?= $kevinin; ?></td>
                                    <td class="text-center"><?= ($kevinva + $kevinin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Ria Chandra Dyanti</td>
                                    <td class="text-center"><?= $riava; ?></td>
                                    <td class="text-center"><?= $riain; ?></td>
                                    <td class="text-center"><?= ($riava + $riain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Sony Chandra</td>
                                    <td class="text-center"><?= $sonyva; ?></td>
                                    <td class="text-center"><?= $sonyin; ?></td>
                                    <td class="text-center"><?= ($sonyva + $sonyin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Muklas Gugun Gumelar</td>
                                    <td class="text-center"><?= $muklasva; ?></td>
                                    <td class="text-center"><?= $muklasin; ?></td>
                                    <td class="text-center"><?= ($muklasva + $muklasin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Dhia Aidha Wahyuningtyas</td>
                                    <td class="text-center"><?= $dhiava; ?></td>
                                    <td class="text-center"><?= $dhiain; ?></td>
                                    <td class="text-center"><?= ($dhiava + $dhiain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Nonny Nur'Alma Mardhatilla</td>
                                    <td class="text-center"><?= $nonnyva; ?></td>
                                    <td class="text-center"><?= $nonnyin; ?></td>
                                    <td class="text-center"><?= ($nonnyva + $nonnyin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Isniawati Agristi</td>
                                    <td class="text-center"><?= $isniawativa; ?></td>
                                    <td class="text-center"><?= $isniawatiin; ?></td>
                                    <td class="text-center"><?= ($isniawativa + $isniawatiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Muhamad Ravif Hexel Pratama</td>
                                    <td class="text-center"><?= $hexelva; ?></td>
                                    <td class="text-center"><?= $hexelin; ?></td>
                                    <td class="text-center"><?= ($hexelva + $hexelin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Resy Arini</td>
                                    <td class="text-center"><?= $resyva; ?></td>
                                    <td class="text-center"><?= $resyin; ?></td>
                                    <td class="text-center"><?= ($resyva + $resyin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Farah Dianing Sekarsari</td>
                                    <td class="text-center"><?= $farahva; ?></td>
                                    <td class="text-center"><?= $farahin; ?></td>
                                    <td class="text-center"><?= ($farahva + $farahin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Anisa Febriana</td>
                                    <td class="text-center"><?= $anisava; ?></td>
                                    <td class="text-center"><?= $anisain; ?></td>
                                    <td class="text-center"><?= ($anisava + $anisain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Anysha Agresya</td>
                                    <td class="text-center"><?= $anyshava; ?></td>
                                    <td class="text-center"><?= $anyshain; ?></td>
                                    <td class="text-center"><?= ($anyshava + $anyshain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Meta Risqi Briliarti</td>
                                    <td class="text-center"><?= $briliartiva; ?></td>
                                    <td class="text-center"><?= $briliartiin; ?></td>
                                    <td class="text-center"><?= ($briliartiva + $briliartiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Rahmawati cco</td>
                                    <td class="text-center"><?= $wativa; ?></td>
                                    <td class="text-center"><?= $watiin; ?></td>
                                    <td class="text-center"><?= ($wativa + $watiin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Nurul Fauziah</td>
                                    <td class="text-center"><?= $fauziahva; ?></td>
                                    <td class="text-center"><?= $fauziahin; ?></td>
                                    <td class="text-center"><?= ($fauziahva + $fauziahin); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Rima Yulianti</td>
                                    <td class="text-center"><?= $rimava; ?></td>
                                    <td class="text-center"><?= $rimain; ?></td>
                                    <td class="text-center"><?= ($rimava + $rimain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Rosanika</td>
                                    <td class="text-center"><?= $rosanikava; ?></td>
                                    <td class="text-center"><?= $rosanikain; ?></td>
                                    <td class="text-center"><?= ($rosanikava + $rosanikain); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Gunawan</td>
                                    <td class="text-center"><?= $gunawanva; ?></td>
                                    <td class="text-center"><?= $gunawanin; ?></td>
                                    <td class="text-center"><?= ($gunawanva + $gunawanin); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


</div>

<!-- End of Main Content