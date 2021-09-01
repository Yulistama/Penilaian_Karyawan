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
                      <li><a href="<?= base_url('atasan/dataskp') ?>"><i class=" fa fa-arrow-left"></i> Kembali</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 2400px">
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('atasan/dataskp/add_data_skp')?>">Ubah</a></b></h5>
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('atasan/dataskp/add_cover')?>">Ubah</a></b></h5>
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('atasan/dataskp/add_formulir')?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">3/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                            <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                <form method="post" action="<?= base_url('atasan/dataskp/v_add_pengukuran')?>">

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Surat Masuk </b> 
                                        <input  type="text" id="kuant_surat_masuk" name="kuant_surat_masuk" class="form-control" placeholder="Kuant/Output"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" id="kual_surat_masuk" name="kual_surat_masuk" class="form-control" placeholder="Kual/Mutu" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu_surat_masuk" class="form-control" placeholder="Waktu"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya_surat_masuk" class="form-control" placeholder="Biaya"  required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kualitas_surat_masuk" class="form-control" placeholder="Kualitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kuantitas_surat_masuk" class="form-control" placeholder="Kuantitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan_surat_masuk" class="form-control" placeholder="Perhitungan" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp_surat_masuk" class="form-control" placeholder="Nilai Capaian SKP" readonly required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Kode Surat</b> 
                                        <input  type="text" name="kuant_kode_surat" class="form-control" placeholder="Kuant/Output"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual_kode_surat" class="form-control" placeholder="Kual/Mutu" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu_kode_surat" class="form-control" placeholder="Waktu"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya_kode_surat" class="form-control" placeholder="Biaya"  required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kualitas_kode_surat" class="form-control" placeholder="Kualitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kuantitas_kode_surat" class="form-control" placeholder="Kuantitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan_kode_surat" class="form-control" placeholder="Perhitungan" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp_kode_surat" class="form-control" placeholder="Nilai Capaian SKP" readonly required/>
                                    </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi No Agenda </b> 
                                        <input  type="text" name="kuant_no_agenda" class="form-control" placeholder="Kuant/Output"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual_no_agenda" class="form-control" placeholder="Kual/Mutu" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu_no_agenda" class="form-control" placeholder="Waktu"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya_no_agenda" class="form-control" placeholder="Biaya"  required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kualitas_no_agenda" class="form-control" placeholder="Kualitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kuantitas_no_agenda" class="form-control" placeholder="Kuantitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan_no_agenda" class="form-control" placeholder="Perhitungan" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp_no_agenda" class="form-control" placeholder="Nilai Capaian SKP" readonly required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi No Masuk </b> 
                                        <input  type="text" name="kuant_no_masuk" class="form-control" placeholder="Kuant/Output"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual_no_masuk" class="form-control" placeholder="Kual/Mutu" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu_no_masuk" class="form-control" placeholder="Waktu"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya_no_masuk" class="form-control" placeholder="Biaya"  required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kualitas_no_masuk" class="form-control" placeholder="Kualitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kuantitas_no_masuk" class="form-control" placeholder="Kuantitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan_no_masuk" class="form-control" placeholder="Perhitungan" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp_no_masuk" class="form-control" placeholder="Nilai Capaian SKP" readonly required/>
                                    </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                    <div class="col-md-3" style="font-size: small;">
                                        <b> Realisasi Mendistribusi Surat</b> 
                                        <input  type="text" name="kuant_distribusi_surat" class="form-control" placeholder="Kuant/Output"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual_distribusi_surat" class="form-control" placeholder="Kual/Mutu" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu_distribusi_surat" class="form-control" placeholder="Waktu"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya_distribusi_surat" class="form-control" placeholder="Biaya"  required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kualitas_distribusi_surat" class="form-control" placeholder="Kualitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kuantitas_distribusi_surat" class="form-control" placeholder="Kuantitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan_distribusi_surat" class="form-control" placeholder="Perhitungan" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp_distribusi_surat" class="form-control" placeholder="Nilai Capaian SKP" readonly required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Arsipan </b> 
                                        <input  type="text" name="kuant_arsipan" class="form-control" placeholder="Kuant/Output"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual_arsipan" class="form-control" placeholder="Kual/Mutu" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu_arsipan" class="form-control" placeholder="Waktu"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya_arsipan" class="form-control" placeholder="Biaya"  required/>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kualitas_arsipan" class="form-control" placeholder="Kualitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kuantitas_arsipan" class="form-control" placeholder="Kuantitas"  required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan_arsipan" class="form-control" placeholder="Perhitungan" readonly required/>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp_arsipan" class="form-control" placeholder="Nilai Capaian SKP" readonly required/>
                                    </div>
                                    </div>
                                    <br>
                                    
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Pemeriksaan Reguler </b> 
                                        <input  type="text" id="pemeriksaan_regular" name="pemeriksaan_regular" class="form-control" placeholder="Surat"  required/>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b> Tindak Lanjut </b> 
                                        <input  type="text" id="tindak_lanjut" name="tindak_lanjut" class="form-control" placeholder="Surat"  required/>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" id="total1" name="total1" class="form-control" placeholder="" readonly required/>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Operator Komputer </b> 
                                        <input  type="text" id="operator_komputer" name="operator_komputer" class="form-control" placeholder="Surat"  required/>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b> Kreatifitas </b> 
                                        <input  type="text" id="kreatifitas" name="kreatifitas" class="form-control" placeholder="Surat"  required/>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" id="total2" name="total2" class="form-control" placeholder="" readonly required/>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#kuant_surat_masuk').change(function(){ 
            $.ajax({
                url : "<?php echo base_url(); ?>atasan/dataskp/get_last_skp",
                method : "GET",
                async : true,
                dataType : 'json',
                success: function(data){
                     console.log('datas', data);
                    //  console.log('datas', JSON.parse(data.tblformulir[0].target_arsipan_surat));
                     let kuant_target = JSON.parse(data.tblformulir[0].target_menerima_surat_masuk);
                     let kuant_relasi = $('#kuant_surat_masuk').val();
                     $('#kual_surat_masuk').val(Number(kuant_relasi) + Number(kuant_target.kuant_surat_masuk) * 100);


                }
            });
            return false;
        });

        $('#kreatifitas').change(function(){
            var operator_komputer = $("#operator_komputer").val();
            var kreatifitas = $("#kreatifitas").val();
            $('#total2').val(Number(operator_komputer) + Number(kreatifitas));
        });

        $('#tindak_lanjut').change(function(){
            let pemeriksaan_regular = $("#pemeriksaan_regular").val();
            let tindak_lanjut = $("#tindak_lanjut").val();
            $('#total1').val(Number(pemeriksaan_regular) + Number(tindak_lanjut));
        });
    });
</script>