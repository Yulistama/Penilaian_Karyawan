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
                <div class="col-12" style="margin-top: 50px; padding-top: 50px; background: white; min-height: 2400px">
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
                                <form method="post" action="<?= base_url('atasan/dataskp/add_prilaku_kerja')?>">

                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b>Kode Jangka Waktu Penilaian </b> 
                                        <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Jangka Waktu Penilaian </b> 
                                        <input  type="text" name="jangka" class="form-control" placeholder="Jangka Waktu Penilaian" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Tahun </b> 
                                        <input  type="text" name="tahun" class="form-control" placeholder="Tahun" readonly="" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Kode Formulir </b> 
                                        <input  type="text" name="kdformulir" class="form-control" placeholder="Kode"></input>
                                    </div>
                                    </div>
                                    <br> -->

                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b> Target Menerima Surat Masuk </b> 
                                        <input  type="text" name="kuant1" class="form-control" placeholder="Kuant/Output" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual1" class="form-control" placeholder="Kual/Mutu" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu1" class="form-control" placeholder="Waktu" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya1" class="form-control" placeholder="Biaya" readonly=""></input>
                                    </div>
                                    </div>

                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Surat Masuk </b> 
                                        <input  type="text" name="kuant1r" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual1r" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu1r" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya1r" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pwaktu1" class="form-control" placeholder="Persen Waktu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pbiaya1" class="form-control" placeholder="Persen Biaya" readonly></input>
                                    </div> -->
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu1x" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya1x" class="form-control" placeholder="Biaya" ></input>
                                    </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kuantitas1" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kualitas1" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan1" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp1" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>

                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b>Target Kode Surat </b> 
                                        <input  type="text" name="kuant2" class="form-control" placeholder="Kuant/Output" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual2" class="form-control" placeholder="Kual/Mutu" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu2" class="form-control" placeholder="Waktu" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya2" class="form-control" placeholder="Biaya" readonly=""></input>
                                    </div>
                                    </div>
                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Kode Surat</b> 
                                        <input  type="text" name="kuant2r" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual2r" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu2r" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya2r" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pwaktu2" class="form-control" placeholder="Persen Waktu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pbiaya2" class="form-control" placeholder="Persen Biaya" readonly></input>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu2x" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya2x" class="form-control" placeholder="Biaya" ></input>
                                    </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kuantitas2" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kualitas2" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan2" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp2" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>

                                    <br>
                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b>Target Memberi No Agenda </b> 
                                        <input  type="text" name="kuant3" class="form-control" placeholder="Kuant/Output" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual3" class="form-control" placeholder="Kual/Mutu" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu3" class="form-control" placeholder="Waktu" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya3" class="form-control" placeholder="Biaya" readonly="" ></input>
                                    </div>
                                    </div>
                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi No Agenda </b> 
                                        <input  type="text" name="kuant3r" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual3r" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu3r" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya3r" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pwaktu3" class="form-control" placeholder="Persen Waktu" readonly ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pbiaya3" class="form-control" placeholder="Persen Biaya" readonly ></input>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu3x" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya3x" class="form-control" placeholder="Biaya" ></input>
                                    </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kuantitas3" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kualitas3" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan3" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp3" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>

                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b>Target Memberi No Surat </b> 
                                        <input  type="text" name="kuant4" class="form-control" placeholder="Kuant/Output" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual4" class="form-control" placeholder="Kual/Mutu" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu4" class="form-control" placeholder="Waktu" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya4" class="form-control" placeholder="Biaya" readonly=""></input>
                                    </div>
                                    </div>
                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi No Masuk </b> 
                                        <input  type="text" name="kuant4r" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual4r" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu4r" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya4r" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pwaktu4" class="form-control" placeholder="Persen Waktu" readonly ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pbiaya4" class="form-control" placeholder="Persen Biaya" readonly ></input>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu4x" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya4x" class="form-control" placeholder="Biaya" ></input>
                                    </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kuantitas4" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kualitas4" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan4" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp4" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>

                                    <br>
                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b>Target Mendistribusikan Surat </b> 
                                        <input  type="text" name="kuant5" class="form-control" placeholder="Kuant/Output" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual5" class="form-control" placeholder="Kual/Mutu" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu5" class="form-control" placeholder="Waktu" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya5" class="form-control" placeholder="Biaya" readonly=""></input>
                                    </div>
                                    </div>
                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3" style="font-size: small;">
                                        <b> Realisasi Mendistribusi Surat</b> 
                                        <input  type="text" name="kuant5r" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual5r" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu5r" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya5r" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pwaktu5" class="form-control" placeholder="Persen Waktu" readonly ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pbiaya5" class="form-control" placeholder="Persen Biaya" readonly ></input>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu5x" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya5x" class="form-control" placeholder="Biaya" ></input>
                                    </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kuantitas5" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kualitas5" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan5" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp5" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>

                                    <!-- <div class="row">
                                    <div class="col-md-3">
                                        <b>Target Arsipan Surat </b> 
                                        <input  type="text" name="kuant6" class="form-control" placeholder="Kuant/Output" readonly="" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b><br> </b> 
                                        <input  type="text" name="kual6" class="form-control" placeholder="Kual/Mutu" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu6" class="form-control" placeholder="Waktu" readonly=""></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya6" class="form-control" placeholder="Biaya" readonly=""></input>
                                    </div>
                                    </div>
                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Realisasi Arsipan </b> 
                                        <input  type="text" name="kuant6r" class="form-control" placeholder="Kuant/Output" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kual6r" class="form-control" placeholder="Kual/Mutu" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu6r" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya6r" class="form-control" placeholder="Biaya" ></input>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pwaktu6" class="form-control" placeholder="Persen Waktu" readonly ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="pbiaya6" class="form-control" placeholder="Persen Biaya" readonly ></input>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="waktu16x" class="form-control" placeholder="Waktu" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="biaya6x" class="form-control" placeholder="Biaya" ></input>
                                    </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> <br> </b> 
                                        <input  type="text" name="kuantitas6" class="form-control" placeholder="Kualitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> <br></b> 
                                        <input  type="text" name="kualitas6" class="form-control" placeholder="Kuantitas" ></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Perhitungan</b> 
                                        <input  type="text" name="perhitungan6" class="form-control" placeholder="Perhitungan" readonly></input>
                                    </div>
                                    <div class="col-md-3">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaiskp6" class="form-control" placeholder="Nilai Capaian SKP" readonly></input>
                                    </div>
                                    </div>
                                    <br>
                                    <!-- <div class="row">
                                    <div class="col-md-4">
                                        <b> Kode Pengukuran </b> 
                                        <input  type="text" name="kdpengukuran" class="form-control" placeholder="Kode" ></input>
                                    </div>
                                    <div class="col-md-4">
                                        <b> Nilai Capaian SKP</b> 
                                        <input  type="text" name="nilaicapaianskp" class="form-control" placeholder="Nilai Capaian SKP" readonlyreadonly=""></input>
                                    </div>
                                    <div class="col-md-4">
                                        <b> <br></b> 
                                        <input  type="text" name="pnilaicapaianskp" class="form-control" placeholder="" ></input>
                                    </div>
                                    </div>
                                    <br> -->
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Pemeriksaan Reguler </b> 
                                        <input  type="text" name="tt1" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="kk1" class="form-control" placeholder="Surat" ></input>
                                    </div> -->
                                    <div class="col-md-3">
                                        <b> Tindak Lanjut </b> 
                                        <input  type="text" name="tt2" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="kk2" class="form-control" placeholder="Surat" ></input>
                                    </div> -->
                                    <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="ttk1" class="form-control" placeholder="" readonly></input>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <b> Operator Komputer </b> 
                                        <input  type="text" name="tt3" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="kk3" class="form-control" placeholder="Surat" ></input>
                                    </div> -->
                                    <div class="col-md-3">
                                        <b> Kreatifitas </b> 
                                        <input  type="text" name="tt4" class="form-control" placeholder="Surat" ></input>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="kk4" class="form-control" placeholder="Surat" ></input>
                                    </div> -->
                                    <div class="col-md-2">
                                        <b> <br></b> 
                                        <input  type="text" name="ttk2" class="form-control" placeholder="" readonly></input>
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