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
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 1450px">
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
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <?php foreach($data_formulir as $item) {?>
                                    <form method="post" action="<?= base_url('atasan/dataskp/update_formulir')?>">
                                        <input type="hidden" name="id_skp" value="<?php echo $id?>"/>
                                        <input type="hidden" name="id_formulir" value="<?php echo $item->id_formulir?>"/>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Kode Formulir </b> 
                                                <input  type="text" name="kode_formulir" value="<?php echo $item->kode_formulir?>" class="form-control" placeholder="Kode" required/>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3" style="font-size: small;">
                                                <b> Target Menerima Surat Masuk </b> 
                                                <input  type="text" value="<?php echo $surat_masuk->kuant_surat_masuk?>" name="kuant_surat_masuk" class="form-control" placeholder="Kuant/Output"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $surat_masuk->kual_surat_masuk?>" name="kual_surat_masuk" class="form-control" placeholder="Kual/Mutu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $surat_masuk->waktu_surat_masuk?>" name="waktu_surat_masuk" class="form-control" placeholder="Waktu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $surat_masuk->biaya_surat_masuk?>" name="biaya_surat_masuk" class="form-control" placeholder="Biaya"  required/>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-3" style="font-size: small;">
                                                <b>Target Mendistribusikan Surat </b> 
                                                <input  type="text" value="<?php echo $distribusi_surat->kuant_distribusi_surat?>" name="kuant_distribusi_surat" class="form-control" placeholder="Kuant/Output"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $distribusi_surat->kual_distribusi_surat?>" name="kual_distribusi_surat" class="form-control" placeholder="Kual/Mutu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $distribusi_surat->waktu_distribusi_surat?>" name="waktu_distribusi_surat" class="form-control" placeholder="Waktu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $distribusi_surat->biaya_distribusi_surat?>" name="biaya_distribusi_surat" class="form-control" placeholder="Biaya"  required/>
                                            </div>
                                        </div>
                                        <br>


                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Kode Surat </b> 
                                                <input  type="text" value="<?php echo $kode_surat->kuant_kode_surat?>" name="kuant_kode_surat" class="form-control" placeholder="Kuant/Output"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $kode_surat->kual_kode_surat?>" name="kual_kode_surat" class="form-control" placeholder="Kual/Mutu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $kode_surat->waktu_kode_surat?>" name="waktu_kode_surat" class="form-control" placeholder="Waktu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $kode_surat->biaya_kode_surat?>" name="biaya_kode_surat" class="form-control" placeholder="Biaya"  required/>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Memberi No Agenda </b> 
                                                <input  type="text" value="<?php echo $no_agenda->kuant_no_agenda?>" name="kuant_no_agenda" class="form-control" placeholder="Kuant/Output"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $no_agenda->kual_no_agenda?>" name="kual_no_agenda" class="form-control" placeholder="Kual/Mutu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $no_agenda->waktu_no_agenda?>" name="waktu_no_agenda" class="form-control" placeholder="Waktu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $no_agenda->biaya_no_agenda?>" name="biaya_no_agenda" class="form-control" placeholder="Biaya"  required/>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Memberi No Surat </b> 
                                                <input  type="text" value="<?php echo $no_surat->kuant_no_surat?>" name="kuant_no_surat" class="form-control" placeholder="Kuant/Output"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $no_surat->kual_no_surat?>" name="kual_no_surat" class="form-control" placeholder="Kual/Mutu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $no_surat->waktu_no_surat?>" name="waktu_no_surat" class="form-control" placeholder="Waktu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $no_surat->biaya_no_surat?>" name="biaya_no_surat" class="form-control" placeholder="Biaya"  required/>
                                            </div>
                                        </div>

                                        
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <b>Target Arsipan Surat </b> 
                                                <input  type="text" value="<?php echo $arsip->kuant_arsip_surat?>" name="kuant_arsip_surat" class="form-control" placeholder="Kuant/Output"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b><br> </b> 
                                                <input  type="text" value="<?php echo $arsip->kual_arsip_surat?>" name="kual_arsip_surat" class="form-control" placeholder="Kual/Mutu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $arsip->waktu_arsip_surat?>" name="waktu_arsip_surat" class="form-control" placeholder="Waktu"  required/>
                                            </div>
                                            <div class="col-md-3">
                                                <b> <br></b> 
                                                <input  type="text" value="<?php echo $arsip->biaya_arsip_surat?>" name="biaya_arsip_surat" class="form-control" placeholder="Biaya"  required/>
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
                                        </form>
                                        <?php } ?>
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
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Prilaku Kerja PNS</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_prilaku_kerja/<?php echo $id; ?>>">Ubah</a></b></h5>
                                            <h4 style="display:inline">5/7</h4>
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