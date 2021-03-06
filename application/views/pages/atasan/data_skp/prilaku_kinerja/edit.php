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
                <div class="col-12">
                    <h1 class="page-header">
                        Edit SKP
                    </h1>
                    <ol class="breadcrumb">
                      <li><a href="#"><i class=" fa fa-arrow-left"></i> Kembali</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 1250px">
                    <div class="row">

                        <div class="col-md-12">
                            <ul class="progressbar" style="">
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10000">Data SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 1000">Cover</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 100">Formulir SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10">Pengukuran Capa SKP</li>
                                <li class="active" style="width:14%; list-style-type: none;">Prilaku Kerja PNS</li>
                                <li class="" style="width:14%; list-style-type: none;">Penilaian Prestasi Kerja PNS</li>
                                <li class="" style="width:14%; list-style-type: none;">SPT DP3 Horinzon</li>
                            </ul>
                        </div>

                        <div class="col-md-12" style="margin-top: 50px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-12" style="border: solid 1px black; padding:5px 5px 5px 5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Data SKP</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_data_skp/<?php echo $id; ?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">1/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Cover</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_cover/<?php echo $id; ?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">2/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Fromulir SKP</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_formulir/<?php echo $id; ?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">3/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Pengukuran Capa SKP</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_pengukuran/<?php echo $id; ?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">4/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <?php foreach($data_prilakukerja as $item) {?>
                                    <form method="post" action="<?= base_url('atasan/dataskp/update_prilaku_kerja')?>">
                                        <input type="hidden" name="id_skp" value="<?php echo $id?>"/>
                                        <input type="hidden" name="id_prilaku_kerja" value="<?php echo $item->id_prilaku_kerja?>"/>

                                    <div class="row">
                                        <div class="col-md-12" style="border: 1px solid black; padding: 20px;">
                                            <span><b>KETERANGAN</b></span>
                                            <li>(lebih kecil atau sama dengan ) <= 50 (Buruk)</li>
                                            <li>(lebih kecil atau sama dengan ) <= 60 (Kurang)</li>
                                            <li>(lebih kecil atau sama dengan ) <= 75 (Cukup)</li>
                                            <li>(lebih kecil atau sama dengan ) <= 90,99 (Baik)</li>
                                            <li>(lebih kecil atau sama dengan ) <= 100 (Sangat Baik)</li>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row" style="margin-top: 20px">
                                        <div class="col-md-3">
                                            <b>Orientasi Pelayanan </b> 
                                            <input  type="text" value="<?php echo $item->orientasi_pelayanan?>" name="orientasi" class="form-control" placeholder="Orientasi Pelayanan" =""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> Integritas</b> 
                                            <input  type="text" value="<?php echo $item->integritas?>" name="integritas" class="form-control" placeholder="Integritas" ="" ></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b>Komitmen </b> 
                                            <input  type="text" value="<?php echo $item->komitmen?>" name="komitmen" class="form-control" placeholder="Komitmen" =""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> Disiplin</b> 
                                            <input  type="text" value="<?php echo $item->disiplin?>" name="disiplin" class="form-control" placeholder="Disiplin" =""></input>
                                        </div>
                                        
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <b>Kerjasama </b> 
                                            <input  type="text" value="<?php echo $item->kerjasama?>" name="kerjasama" class="form-control" placeholder="Kerjasama" =""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> Kepemimpinan</b> 
                                            <input  type="text" value="<?php echo $item->kepemimpinan?>" name="kepemimpinan" class="form-control" placeholder="Kepemimpinan" =""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b>Jumlah </b> 
                                            <input  type="text" value="<?php echo $item->jumlah_perilaku?>" name="jumlahperilaku" class="form-control" placeholder="Jumlah" =""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> Nilai Rata-rata</b> 
                                            <input  type="text" value="<?php echo $item->nilai_rata_perilaku?>" name="nilairataperilaku" class="form-control" placeholder="Nilai Rata-rata" =""></input>
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
                                <?php } ?>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Penilaian Prestasi Kerja PNS</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_penilaian_kerja/<?php echo $id; ?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">6/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>SPT DP3 Horizon</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_spt/<?php echo $id; ?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">7/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>