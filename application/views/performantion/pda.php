<div class="container-fluid my-auto">
    <div class=" row">
        <div class="col-lg-6 ">
        </div>
        <div class="col-lg-6 ">
            <div class="d-inline text-right font-weight-bold">
                <p> <a class="btn btn-sm text-danger" href="<?= base_url('performantion'); ?>"><i class="fas fa-door-open text-danger"></i> Exit</a> Performantion PDA-BNA-GNO <i class="text-xs text-warning"><?= date('d-m-Y H:i:s'); ?></i></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg table-responsive small">
            <label class="text-light">YEARLY CONSUME</label>
            <?php error_reporting(0); ?>
            <table class="table table-bordered  text-center xs">
                <thead>
                    <tr class="bg-gradient-dark text-white">
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
                    <tr class="text-light">
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
                    <tr class="text-light">
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
                    <tr>
                        <th colspan="13" class="bg-success text-light" style="opacity: 0.8;">TYPE TRANSACTION (UNIQ)</th>
                    </tr>
                    <tr class="text-light">
                        <th>PDA</th>
                        <th><?= $uniqpdajan; ?></th>
                        <th><?= $uniqpdafeb; ?></th>
                        <th><?= $uniqpdamar; ?></th>
                        <th><?= $uniqpdaapr; ?></th>
                        <th><?= $uniqpdamei; ?></th>
                        <th><?= $uniqpdajun; ?></th>
                        <th><?= $uniqpdajul; ?></th>
                        <th><?= $uniqpdaagu; ?></th>
                        <th><?= $uniqpdasep; ?></th>
                        <th><?= $uniqpdaokt; ?></th>
                        <th><?= $uniqpdanov; ?></th>
                        <th><?= $uniqpdades; ?></th>

                    </tr>
                    <tr class="text-light">
                        <th>BNA</th>
                        <th><?= $uniqbnajan; ?></th>
                        <th><?= $uniqbnafeb; ?></th>
                        <th><?= $uniqbnamar; ?></th>
                        <th><?= $uniqbnaapr; ?></th>
                        <th><?= $uniqbnamei; ?></th>
                        <th><?= $uniqbnajun; ?></th>
                        <th><?= $uniqbnajul; ?></th>
                        <th><?= $uniqbnaagu; ?></th>
                        <th><?= $uniqbnasep; ?></th>
                        <th><?= $uniqbnaokt; ?></th>
                        <th><?= $uniqbnanov; ?></th>
                        <th><?= $uniqbnades; ?></th>
                    </tr>
                    <tr class="text-light">
                        <th>GNO</th>
                        <th><?= $uniqgnojan; ?></th>
                        <th><?= $uniqgnofeb; ?></th>
                        <th><?= $uniqgnomar; ?></th>
                        <th><?= $uniqgnoapr; ?></th>
                        <th><?= $uniqgnomei; ?></th>
                        <th><?= $uniqgnojun; ?></th>
                        <th><?= $uniqgnojul; ?></th>
                        <th><?= $uniqgnoagu; ?></th>
                        <th><?= $uniqgnosep; ?></th>
                        <th><?= $uniqgnookt; ?></th>
                        <th><?= $uniqgnonov; ?></th>
                        <th><?= $uniqgnodes; ?></th>
                    </tr>
                    <tr>
                        <th colspan="13" class="bg-success text-light" style="opacity: 0.8;">SOURCE DATA (UNIQ)</th>
                    </tr>
                    <tr class="text-light">
                        <th>TELKOM 147</th>
                        <th><?= $uniq147jan; ?></th>
                        <th><?= $uniq147feb; ?></th>
                        <th><?= $uniq147mar; ?></th>
                        <th><?= $uniq147apr; ?></th>
                        <th><?= $uniq147mei; ?></th>
                        <th><?= $uniq147jun; ?></th>
                        <th><?= $uniq147jul; ?></th>
                        <th><?= $uniq147agu; ?></th>
                        <th><?= $uniq147sep; ?></th>
                        <th><?= $uniq147okt; ?></th>
                        <th><?= $uniq147nov; ?></th>
                        <th><?= $uniq147des; ?></th>
                    </tr>
                    <tr class="text-light">
                        <th>SOCMED</th>
                        <th><?= $uniqsocmedjan; ?></th>
                        <th><?= $uniqsocmedfeb; ?></th>
                        <th><?= $uniqsocmedmar; ?></th>
                        <th><?= $uniqsocmedapr; ?></th>
                        <th><?= $uniqsocmedmei; ?></th>
                        <th><?= $uniqsocmedjun; ?></th>
                        <th><?= $uniqsocmedjul; ?></th>
                        <th><?= $uniqsocmedagu; ?></th>
                        <th><?= $uniqsocmedsep; ?></th>
                        <th><?= $uniqsocmedokt; ?></th>
                        <th><?= $uniqsocmednov; ?></th>
                        <th><?= $uniqsocmeddes; ?></th>
                    </tr>
                    <tr class="text-light">
                        <th>PLAZA</th>
                        <th><?= $uniqplazajan; ?></th>
                        <th><?= $uniqplazafeb; ?></th>
                        <th><?= $uniqplazamar; ?></th>
                        <th><?= $uniqplazaapr; ?></th>
                        <th><?= $uniqplazamei; ?></th>
                        <th><?= $uniqplazajun; ?></th>
                        <th><?= $uniqplazajul; ?></th>
                        <th><?= $uniqplazaagu; ?></th>
                        <th><?= $uniqplazasep; ?></th>
                        <th><?= $uniqplazaokt; ?></th>
                        <th><?= $uniqplazanov; ?></th>
                        <th><?= $uniqplazades; ?></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg table-responsive small">
            <label class="text-light">MONTHLY</label>
            <table class="table table-bordered text-center xs">
                <thead>
                    <tr class="bg-gradient-dark text-white">
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
                        <th colspan="32" class="bg-success text-light" style="opacity: 0.8;">MONTHLY CONSUME</th>
                    </tr>
                    <tr class="text-light">
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
                        <th colspan="32" class="bg-success text-light" style="opacity: 0.8;">MONTHLY UNIQ</th>
                    </tr>
                    <tr class="text-light">
                        <th>Valid</th>
                        <th><?= $satuva; ?></th>
                        <th><?= $duava; ?></th>
                        <th><?= $tigava; ?></th>
                        <th><?= $empatva; ?></th>
                        <th><?= $limava; ?></th>
                        <th><?= $enamva; ?></th>
                        <th><?= $tujuhva; ?></th>
                        <th><?= $delapanva; ?></th>
                        <th><?= $sembilanva; ?></th>
                        <th><?= $sepuluhva; ?></th>
                        <th><?= $sebelasva; ?></th>
                        <th><?= $duabelasva; ?></th>
                        <th><?= $tigabelasva; ?></th>
                        <th><?= $empatbelasva; ?></th>
                        <th><?= $limabelasva; ?></th>
                        <th><?= $enambelasva; ?></th>
                        <th><?= $tujuhbelasva; ?></th>
                        <th><?= $delapanbelasva; ?></th>
                        <th><?= $sembilanbelasva; ?></th>
                        <th><?= $duapuluhva; ?></th>
                        <th><?= $duapuluhsatuva; ?></th>
                        <th><?= $duapuluhduava; ?></th>
                        <th><?= $duapuluhtigava; ?></th>
                        <th><?= $duapuluhempatva; ?></th>
                        <th><?= $duapuluhlimava; ?></th>
                        <th><?= $duapuluhenamva; ?></th>
                        <th><?= $duapuluhtujuhva; ?></th>
                        <th><?= $duapuluhdelapanva; ?></th>
                        <th><?= $duapuluhsembilanva; ?></th>
                        <th><?= $tigapuluhva; ?></th>
                        <th><?= $tigapuluhsatuva; ?></th>
                    </tr>
                    <tr class="text-light">
                        <th>Invalid</th>
                        <th><?= ($satuto - $satuva); ?></th>
                        <th><?= ($duato - $duava); ?></th>
                        <th><?= ($tigato - $tigava); ?></th>
                        <th><?= ($empatto - $empatva); ?></th>
                        <th><?= ($limato - $limava); ?></th>
                        <th><?= ($enamto - $enamva); ?></th>
                        <th><?= ($tujuhto - $tujuhva); ?></th>
                        <th><?= ($delapanto - $delapanva); ?></th>
                        <th><?= ($sembilanto - $sembilanva); ?></th>
                        <th><?= ($sepuluhto - $sepuluhva); ?></th>
                        <th><?= ($sebelasto - $sebelasva); ?></th>
                        <th><?= ($duabelasto - $duabelasva); ?></th>
                        <th><?= ($tigabelasto - $tigabelasva); ?></th>
                        <th><?= ($empatbelasto - $empatbelasva); ?></th>
                        <th><?= ($limabelasto - $limabelasva); ?></th>
                        <th><?= ($enambelasto - $enambelasva); ?></th>
                        <th><?= ($tujuhbelasto - $tujuhbelasva); ?></th>
                        <th><?= ($delapanbelasto - $delapanbelasva); ?></th>
                        <th><?= ($sembilanbelasto - $sembilanbelasva); ?></th>
                        <th><?= ($duapuluhto - $duapuluhva); ?></th>
                        <th><?= ($duapuluhsatuto - $duapuluhsatuva); ?></th>
                        <th><?= ($duapuluhduato - $duapuluhduava); ?></th>
                        <th><?= ($duapuluhtigato - $duapuluhtigava); ?></th>
                        <th><?= ($duapuluhempatto - $duapuluhempatva); ?></th>
                        <th><?= ($duapuluhlimato - $duapuluhlimava); ?></th>
                        <th><?= ($duapuluhenamto - $duapuluhenamva); ?></th>
                        <th><?= ($duapuluhtujuhto - $duapuluhtujuhva); ?></th>
                        <th><?= ($duapuluhdelapanto - $duapuluhdelapanva); ?></th>
                        <th><?= ($duapuluhsembilanto - $duapuluhsembilanva); ?></th>
                        <th><?= ($tigapuluhto - $tigapuluhva); ?></th>
                        <th><?= ($tigapuluhsatuto - $tigapuluhsatuva); ?></th>

                    </tr>
                    <tr class="text-light">
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
                        <th colspan="32" class="bg-success text-light" style="opacity: 0.8;">PERCENTAGE UNIQ TO CONSUME</th>
                    </tr>
                    <tr class="text-light">
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