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
                        Tambah SKP
                    </h1>
                    <ol class="breadcrumb">
                      <li><a href="<?= base_url('penilai/dataskp') ?>"><i class=" fa fa-arrow-left"></i> Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 1400px">
                    <div class="row">

                        <div class="col-md-12">
                            <ul class="progressbar" style="">
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10000">Data SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 1000">Cover</li>
                                <li class="active" style="width:14%; list-style-type: none;">Formulir SKP</li>
                                <li class="" style="width:14%; list-style-type: none;">Pengukuran Capa SKP</li>
                                <li class="" style="width:14%; list-style-type: none;">Prilaku Kerja PNS</li>
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('penilai/dataskp/add_data_skp')?>">Ubah</a></b></h5>
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('penilai/dataskp/add_cover')?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">2/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <form method="post" action="<?= base_url('penilai/dataskp/v_add_formulir')?>">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Kode Formulir </b> 
                                                <input  type="text" name="kode_formulir" class="form-control" placeholder="Kode"required/>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3" style="font-size: small;">
                                                <b> Target Menerima Surat Masuk </b> 
                                                <input  type="text" name="kuant_surat_masuk" class="form-control" placeholder="Kuant/Output" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="kual_surat_masuk" class="form-control" placeholder="Kual/Mutu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="waktu_surat_masuk" class="form-control" placeholder="Waktu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="biaya_surat_masuk" class="form-control" placeholder="Biaya" required/>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-3" style="font-size: small;">
                                                <b>Target Mendistribusikan Surat </b> 
                                                <input  type="text" name="kuant_distribusi_surat" class="form-control" placeholder="Kuant/Output" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="kual_distribusi_surat" class="form-control" placeholder="Kual/Mutu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="waktu_distribusi_surat" class="form-control" placeholder="Waktu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="biaya_distribusi_surat" class="form-control" placeholder="Biaya" required/>
                                            </div>
                                        </div>
                                        <br>


                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Kode Surat </b> 
                                                <input  type="text" name="kuant_kode_surat" class="form-control" placeholder="Kuant/Output" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="kual_kode_surat" class="form-control" placeholder="Kual/Mutu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="waktu_kode_surat" class="form-control" placeholder="Waktu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="biaya_kode_surat" class="form-control" placeholder="Biaya" required/>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Memberi No Agenda </b> 
                                                <input  type="text" name="kuant_no_agenda" class="form-control" placeholder="Kuant/Output" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="kual_no_agenda" class="form-control" placeholder="Kual/Mutu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="waktu_no_agenda" class="form-control" placeholder="Waktu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="biaya_no_agenda" class="form-control" placeholder="Biaya" required/>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Memberi No Surat </b> 
                                                <input  type="text" name="kuant_no_surat" class="form-control" placeholder="Kuant/Output" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="kual_no_surat" class="form-control" placeholder="Kual/Mutu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="waktu_no_surat" class="form-control" placeholder="Waktu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="biaya_no_surat" class="form-control" placeholder="Biaya" required/>
                                            </div>
                                        </div>

                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Arsipan Surat </b> 
                                                <input  type="text" name="kuant_arsip_surat" class="form-control" placeholder="Kuant/Output" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b><br> </b> 
                                                <input  type="text" name="kual_arsip_surat" class="form-control" placeholder="Kual/Mutu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="waktu_arsip_surat" class="form-control" placeholder="Waktu" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" name="biaya_arsip_surat" class="form-control" placeholder="Biaya" required/>
                                            </div>
                                        </div>
                                        <br>

                                            <div class="row">
                                                <div class="col-12" style="text-align: center">
                                                <!-- <button type="reset" class="btn btn-danger">
                                                <i class=" fa fa-trash-alt"></i> Reset </button> -->
        
                                                <button type="submit" class="btn btn-success btn-lg">
                                                <i class=" fa fa-save"></i> Save </button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
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