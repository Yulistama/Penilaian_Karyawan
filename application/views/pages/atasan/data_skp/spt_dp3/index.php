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
                <div class="col-12" style="margin-top: 50px; padding-top: 50px; background: white; min-height: 1000px">
                    <div class="row">

                        <div class="col-md-12">
                            <ul class="progressbar" style="">
                                <li class="active" style="width:14%; list-style-type: none; z-index: 1000000">Data SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 100000">Cover</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10000">Formulir SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 1000">Pengukuran Capa SKP</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 100">Prilaku Kerja PNS</li>
                                <li class="active" style="width:14%; list-style-type: none; z-index: 10">Penilaian Prestasi Kerja PNS</li>
                                <li class="active" style="width:14%; list-style-type: none;">SPT DP3 Horinzon</li>
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
                                <div class="col-12" style="border: solid 1px black; padding:5px">
                                    <div class="row">
                                        <div class="col-md-6" style="padding-left:30px">
                                            <h4><b>Pengukuran Capa SKP</b></h4>
                                        </div>
                                        <div class="col-md-6" style="text-align: right; margin-top:20px; padding-right:50px">
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('atasan/dataskp/add_pengukuran_capa')?>">Ubah</a></b></h5>
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('atasan/dataskp/add_prilaku_kerja')?>">Ubah</a></b></h5>
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
                                            <h5 style="display:inline; margin-right:10px"><b><a style="text-decoration: none; color: green;" href="<?= base_url('atasan/dataskp/add_penilaian_kerja')?>">Ubah</a></b></h5>
                                            <h4 style="display:inline">6/7</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="col-md-12" style="margin-top: 30px; padding-left: 50px; padding-right:50px">
                            <div class="row">
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <form method="post" action="#">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Tanggal Pembuatan</b> 
                                                <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Tanggal Diterima pegawai</b> 
                                                <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Tanggal Diterima Atasan Pejabat</b> 
                                                <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <b>Jangka Waktu Penilaian </b> 
                                                <input  type="text" name="jangka" class="form-control" placeholder="Jangka Waktu Penilaian" readonly=""></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Tahun </b> 
                                                <input  type="text" name="tahun" class="form-control" placeholder="Tahun" readonly=""></input>
                                            </div> -->
                                        </div>
                                        <br>

                                        <!-- <div class="row">
                                            <div class="col-md-4">
                                                <b>Nama yang dinilai </b> 
                                                <input  type="text" name="nm_yd" class="form-control" placeholder="Nama" ></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Nip </b> 
                                                <input  type="text" name="nip_yd" class="form-control" placeholder="Nip" readonly=""></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Pangkat / Golongan Ruang </b> 
                                                <input  type="text" name="pangkat_yd" class="form-control" placeholder="Pangkat / Golongan Ruang" readonly="" ></input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b>Jabatan </b> 
                                                <input  type="text" name="jabatan_yd" class="form-control" placeholder="Jabatan" readonly="" ></input>
                                            </div>
                                            <div class="col-md-6">
                                                <b>Unit Kerja </b> 
                                                <input  type="text" name="unit_yd" class="form-control" placeholder="Unit Kerja" readonly=""></input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Nama Pejabat Penilai </b> 
                                                <input  type="text" name="nm_pp" class="form-control" placeholder="Nama" readonly=""></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Nip </b> 
                                                <input  type="text" name="nip_pp" class="form-control" placeholder="Nip" readonly=""></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Pangkat / Golongan Ruang </b> 
                                                <input  type="text" name="pangkat_pp" class="form-control" placeholder="Pangkat / Golongan Ruang" readonly=""></input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b>Jabatan </b> 
                                                <input  type="text" name="jabatan_pp" class="form-control" placeholder="Jabatan" readonly=""></input>
                                            </div>
                                            <div class="col-md-6">
                                                <b>Unit Kerja </b> 
                                                <input  type="text" name="unit_pp" class="form-control" placeholder="Unit Kerja" readonly=""></input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Nama Atasan Pejabat Penilai </b> 
                                                <input  type="text" name="nm_app" class="form-control" placeholder="Nama" readonly=""></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Nip </b> 
                                                <input  type="text" name="nip_app" class="form-control" placeholder="Nip" readonly=""></input>
                                            </div>
                                            <div class="col-md-4">
                                                <b>Pangkat / Golongan Ruang </b> 
                                                <input  type="text" name="pangkat_app" class="form-control" placeholder="Pangkat / Golongan Ruang" readonly=""></input>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b>Jabatan </b> 
                                                <input  type="text" name="jabatan_app" class="form-control" placeholder="Jabatan" readonly="" ></input>
                                            </div>
                                            <div class="col-md-6">
                                                <b>Unit Kerja </b> 
                                                <input  type="text" name="unit_app" class="form-control" placeholder="Unit Kerja" readonly="" ></input>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                            <b>Kode Penilaian </b> 
                                            <input  type="text" name="kd_perilaku" class="form-control" placeholder="Kode" ></input>
                                        </div>
                                        <div class="col-md-4">
                                            <b>Kode Pengukuran </b> 
                                            <input  type="text" name="kdpengukuran" class="form-control" placeholder="Kode" ></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b>Nilai Capaian SKP </b> 
                                            <input  type="text" name="nilaicapaianskp" class="form-control" placeholder="Nilai Capaian SKP " readonly="" ></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b>Persen SKP </b> 
                                            <input  type="text" name="persenpengukuran" class="form-control" placeholder="Persen SKP" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b>Jumlah SKP </b> 
                                            <input  type="text" name="jmlhpersenpengukuran" class="form-control" placeholder="Jumlah SKP" readonly=""></input>
                                        </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                            <b> Kode Perilaku<br></b> 
                                            <input  type="text" name="kdperilaku" class="form-control" placeholder="Kode" ></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b>Orientasi Pelayanan </b> 
                                            <input  type="text" name="orientas" class="form-control" placeholder="Orientasi Pelayanan" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b><br> </b> 
                                            <input  type="text" name="porientas" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b> Integritas</b> 
                                            <input  type="text" name="integritas" class="form-control" placeholder="Integritas" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b> <br></b> 
                                            <input  type="text" name="pintegritas" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                        <div class="col-md-2">
                                            <b>Komitmen </b> 
                                            <input  type="text" name="komitmen" class="form-control" placeholder="Komitmen" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b><br> </b> 
                                            <input  type="text" name="pkomitmen" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b> Disiplin</b> 
                                            <input  type="text" name="disiplin" class="form-control" placeholder="Disiplin" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b> <br></b> 
                                            <input  type="text" name="pdisiplin" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b>Kerjasama </b> 
                                            <input  type="text" name="kerjasama" class="form-control" placeholder="Kerjasama" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b><br> </b> 
                                            <input  type="text" name="pkerjasama" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                        <div class="col-md-2">
                                            <b> Kepemimpinan</b> 
                                            <input  type="text" name="kepemimpinan" class="form-control" placeholder="Kepemimpinan" readonly="" ></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b><br></b> 
                                            <input  type="text" name="pkepemimpinan" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b>Jumlah </b> 
                                            <input  type="text" name="jumlahperilaku" class="form-control" placeholder="Jumlah" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b><br> </b> 
                                            <input  type="text" name="pjumlahperilaku" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b> Nilai Rata-rata</b> 
                                            <input  type="text" name="nilairataperilaku" class="form-control" placeholder="Nilai Rata-rata" readonly=""></input>
                                        </div>
                                        <div class="col-md-2">
                                            <b> <br></b> 
                                            <input  type="text" name="pnilairataperilaku" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                        <div class="col-md-3">
                                            <b> Persen Perilaku Kerja</b> 
                                            <input  type="text" name="persenperilaku" class="form-control" placeholder="Persen Perilaku Kerja" readonly="" ></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> Jumlah Perilaku Kerja</b> 
                                            <input  type="text" name="jumlahpersenperilaku" class="form-control" placeholder="Jumlah Perilaku Kerja" readonly=""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> Nilai Prestasi Kerja</b> 
                                            <input  type="text" name="nilaiprestasi" class="form-control" placeholder="Nilai Prestasi Kerja" readonly=""></input>
                                        </div>
                                        <div class="col-md-3">
                                            <b> <br></b> 
                                            <input  type="text" name="pnilaiprestasi" class="form-control" placeholder="" readonly=""></input>
                                        </div>
                                        </div>
                                        <br> -->
                                        <!-- <div class="row">

                                            <div class="col-md-3">
                                            <b> Dibuat Pejabat Penilai  </b>
                                            <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="date" name="tgl_pp" class="form-control"  required="" ></inpit>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b> Diterima PNS yang Dinilai </b>
                                            <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="date" name="tgl_yd" class="form-control"  required="" ></inpit>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b> Diterima Atasan Pejabat Penilai  </b>
                                            <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                            </div>
                                            <input type="date" name="tgl_app" class="form-control"  required="" ></inpit>
                                            </div>
                                        </div>

                                        </div>
                                        <br> -->

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
                </div>


            </div>
        </div>
    </div>
</div>