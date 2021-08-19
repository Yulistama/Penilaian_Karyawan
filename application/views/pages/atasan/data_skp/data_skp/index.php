<style>
        .progressbar {
            width: 100%;
            counter-reset: step;
        }
        .progressbar li {
            float: left;
            position: relative;
            text-align: center;
        }
        .progressbar li:before {
            content:counter(step);
            counter-increment: step;
            width: 30px;
            height: 30px;
            border: 2px solid #E6E7F4;
            background-color: #E6E7F4;
            display: block;
            margin: 0 auto 10px auto;
            border-radius: 50%;
            line-height: 27px;
            background: #E6E7F4;
            color: black;
            text-align: center;
            font-weight: bold;
            z-index: 1;
        }
        .progressbar li:after{
            content: '';
            position: absolute;
            width:100%;
            height: 3px;
            background: #2B388F;
            opacity: .1;
            top: 15px;
            left: -50%;
        }
        .progressbar li:first-child:after{
            left: 0%;
            width: 50%;
            z-index: -1;
        }
        .progressbar li:last-child:after{
            width: 150%;
            z-index: 1;
        }
        .progressbar li.active:after{
            background: #2B388F;
            opacity: 1;
            z-index: -99;
           
        }
        .progressbar li.active {
            color: #2B388F;
            z-index: 1;
        }
        .progressbar li.active:before {
            border-color: #F36A5A;
            background: #F36A5A;
            color: white;
            z-index: 1;
        } 
</style>

<div id="page-wrapper">
    <div class="header">
        <div class="col-12">
            <div class="row">
                <div class="col-12" style="margin-top: 50px; padding-top: 50px; background: white; min-height: 1350px">
                    <div class="row">

                        <div class="col-md-12">
                            <ul class="progressbar" style="">
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10000">Data SKP</li>
                                <li class="" style="width:14%; list-style-type: none; z-index: 1000">Cover</li>
                                <li class="" style="width:14%; list-style-type: none;">Formulir SKP</li>
                                <li class="" style="width:14%; list-style-type: none;">Pengukuran Capa SKP</li>
                                <li class="" style="width:14%; list-style-type: none;">Prilaku Kerja PNS</li>
                                <li class="" style="width:14%; list-style-type: none;">Penilaian Prestasi Kerja PNS</li>
                                <li class="" style="width:14%; list-style-type: none;">SPT DP3 Horinzon</li>
                            </ul>
                        </div>

                        <div class="col-md-12" style="margin-top: 50px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <?php var_dump($sessionskp)?>
                                <?php var_dump($session_dataskp)?>
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <div class="row">
                                        <form method="post" action="<?= base_url('atasan/dataskp/v_add_dataskp')?>">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama yang dinilai </b>
                                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" name="nip" class="form-control" placeholder="Masukan Nip"></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" name="golongan" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang"></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan"></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" name="unitkerja" class="form-control" placeholder="Masukan Unit Kerja"></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama Pejabat Penilai </b>
                                                    <input type="text" name="nama_pp" class="form-control" placeholder="Masukan Nama"></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" name="nip_pp" class="form-control" placeholder="Masukan Nip"></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" name="pangkat_pp" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang"></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" name="jabatan_pp" class="form-control" placeholder="Masukan Jabatan"></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" name="unitkerja_pp" class="form-control" placeholder="Masukan Unit Kerja"></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama Atasan Pejabat Penilai </b>
                                                    <input type="text" name="nama_app" class="form-control" placeholder="Masukan Nama"></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" name="nip_app" class="form-control" placeholder="Masukan Nip"></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" name="pangkat_app" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang"></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" name="jabatan_app" class="form-control" placeholder="Masukan Jabatan"></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" name="unitkerja_app" class="form-control" placeholder="Masukan Unit Kerja"></input>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-12" style="text-align: center">
                                                    <button type="reset" class="btn btn-danger">
                                                    <i class=" fa fa-trash-alt"></i> Reset </button>
                                                    <button type="submit" class="btn btn-success">
                                                    <i class=" fa fa-save"></i> Save </button>

                                                </div>
                                            </div>
                                            </form>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-left: solid 1px black; padding:5px 5px 5px 30px">
                                    <h4><b>Cover</b></h4>
                                </div>
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; padding:5px 50px 5px 5px; text-align: right">
                                    <h4>2/7</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-left: solid 1px black; padding:5px 5px 5px 30px">
                                    <h4><b>Fromulir SKP</b></h4>
                                </div>
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; padding:5px 50px 5px 5px; text-align: right">
                                    <h4>3/7</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-left: solid 1px black; padding:5px 5px 5px 30px">
                                    <h4><b>Pengukuran Capa SKP</b></h4>
                                </div>
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; padding:5px 50px 5px 5px ; text-align: right">
                                    <h4>4/7</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-left: solid 1px black; padding:5px 5px 5px 30px">
                                    <h4><b>Prilaku Kerja PNS</b></h4>
                                </div>
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; padding:5px 50px 5px 5px; text-align: right">
                                    <h4>5/7</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-left: solid 1px black; padding:5px 5px 5px 30px">
                                    <h4><b>Penilaian Prestasi Kerja PNS</b></h4>
                                </div>
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; padding:5px 50px 5px 5px; text-align: right">
                                    <h4>6/7</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-left: solid 1px black; padding:5px 5px 5px 30px">
                                    <h4><b>SPT DP3 Horizon</b></h4>
                                </div>
                                <div class="col-md-6" style="border-top: solid 1px black; border-bottom: solid 1px black; border-right: solid 1px black; padding:5px 50px 5px 5px; text-align: right">
                                    <h4>7/7</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>