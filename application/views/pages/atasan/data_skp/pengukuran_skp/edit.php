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
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 1950px">
                    <div class="row">

                        <div class="col-md-12">
                            <ul class="progressbar" style="">
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10000">Data SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 1000">Cover</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 100">Formulir SKP</li>
                                <li class="active" style="width:14%; list-style-type: none;">Pengukuran Capa SKP</li>
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
                        <!-- <?php foreach($data_pengukuran as $item){?> <?php var_dump($item) ?> <?php } ?> -->
                            <div class="row">
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">

                                    <?php foreach($data_pengukuran as $item) { ?>
                                    <form method="post" action="<?= base_url('atasan/dataskp/v_add_pengukuran')?>">

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Surat Masuk </b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->kuant_surat_masuk ?>" name="kuant_surat_masuk" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->kual_surat_masuk ?>" name="kual_surat_masuk" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->waktu_surat_masuk ?>" name="waktu_surat_masuk" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->biaya_surat_masuk ?>" name="biaya_surat_masuk" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->kualitas_surat_masuk ?>" name="kualitas_surat_masuk" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->kuantitas_surat_masuk ?>" name="kuantitas_surat_masuk" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->perhitungan_surat_masuk ?>" name="perhitungan_surat_masuk" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" value="<?php echo $realisasi_surat_masuk->nilaiskp_surat_masuk ?>" name="nilaiskp_surat_masuk" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Kode Surat</b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->kuant_kode_surat ?>" name="kuant_kode_surat" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->kual_kode_surat ?>" name="kual_kode_surat" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->waktu_kode_surat ?>" name="waktu_kode_surat" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->biaya_kode_surat ?>" name="biaya_kode_surat" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->kualitas_kode_surat ?>" name="kualitas_kode_surat" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->kuantitas_kode_surat ?>" name="kuantitas_kode_surat" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->perhitungan_kode_surat ?>" name="perhitungan_kode_surat" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" value="<?php echo $realisasi_kode_surat->nilaiskp_kode_surat ?>" name="nilaiskp_kode_surat" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi No Agenda </b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->kuant_no_agenda ?>" name="kuant_no_agenda" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->kual_no_agenda ?>" name="kual_no_agenda" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->waktu_no_agenda ?>" name="waktu_no_agenda" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->biaya_no_agenda ?>" name="biaya_no_agenda" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->kualitas_no_agenda ?>" name="kualitas_no_agenda" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->kuantitas_no_agenda ?>" name="kuantitas_no_agenda" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->perhitungan_no_agenda ?>" name="perhitungan_no_agenda" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" value="<?php echo $realisasi_no_agenda->nilaiskp_no_agend ?>" name="nilaiskp_no_agenda" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi No Masuk </b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->kuant_no_surat ?>" name="kuant_no_masuk" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->kual_no_surat ?>" name="kual_no_masuk" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->waktu_no_surat ?>" name="waktu_no_masuk" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->biaya_no_surat ?>" name="biaya_no_masuk" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->kualitas_no_surat ?>" name="kualitas_no_masuk" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->kuantitas_no_surat ?>" name="kuantitas_no_masuk" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->perhitungan_no_surat ?>" name="perhitungan_no_masuk" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" value="<?php echo $realisasi_no_masuk->nilaiskp_no_surat ?>" name="nilaiskp_no_masuk" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                    <div class="col-md-3" style="font-size: small;">
                                        <b> Realisasi Mendistribusi Surat</b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->kuant_distribusi_surat ?>" name="kuant_distribusi_surat" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->kual_distribusi_surat ?>" name="kual_distribusi_surat" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->waktu_distribusi_surat ?>" name="waktu_distribusi_surat" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->biaya_distribusi_surat ?>" name="biaya_distribusi_surat" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->kualitas_distribusi_surat ?>" name="kualitas_distribusi_surat" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->kuantitas_distribusi_surat ?>" name="kuantitas_distribusi_surat" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->perhitungan_distribusi_surat ?>" name="perhitungan_distribusi_surat" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" value="<?php echo $realisasi_mendistribusi_surat->nilaiskp_distribusi_surat ?>" name="nilaiskp_distribusi_surat" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Arsipan </b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->kuant_arsipan ?>" name="kuant_arsipan" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->kual_arsipan ?>" name="kual_arsipan" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->waktu_arsipan ?>" name="waktu_arsipan" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->biaya_arsipan ?>" name="biaya_arsipan" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->kualitas_arsipan ?>" name="kualitas_arsipan" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->kuantitas_arsipan ?>" name="kuantitas_arsipan" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->perhitungan_arsipan ?>" name="perhitungan_arsipan" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" value="<?php echo $realisasi_arsipan->nilaiskp_arsipan ?>" name="nilaiskp_arsipan" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Pemeriksaan Reguler </b> 
                                        <input  type="text" value="<?php echo $item->pemeriksaan_reguler?>" name="pemeriksaan_regular" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b> Tindak Lanjut </b> 
                                        <input  type="text" value="<?php echo $item->tindak_lanjut?>" name="tindak_lanjut" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" value="<?php echo $item->tindak_lanjut?>" name="total1" class="form-control" placeholder="" readonly></input>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Operator Komputer </b> 
                                        <input  type="text" value="<?php echo $item->operator_komputer?>" name="operator_komputer" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b> Kreatifitas </b> 
                                        <input  type="text" value="<?php echo $item->kreatifitas?>" name="kreatifitas" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="total2" class="form-control" placeholder="" readonly></input>
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
                                            <h4><b>Prilaku Kerja PNS</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?php echo base_url(); ?>atasan/dataskp/edit_prilaku_kerja/<?php echo $id; ?>">Ubah</a></b></h5>
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