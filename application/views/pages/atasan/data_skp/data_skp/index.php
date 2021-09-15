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
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 1350px">
                    <div class="row">

                        <div class="col-md-12">
                            <ul class="progressbar">
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
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <div class="row">
                                        <form method="post" action="<?= base_url('atasan/dataskp/v_add_dataskp')?>">
                                            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id') ?>"/>
                                            <input type="hidden" id="id_karyawan" name="id_karyawan" value=""/>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama yang dinilai </b>
                                                    <select class="form-control" id="nama" name="nama" required>
                                                        <option value="" >--Pilih--</option>
                                                        <?php foreach($karyawan as $item) { ?>
                                                            <option data-valuea="<?php echo $item->id ?>" value="<?php echo $item->name ?>"><?php echo $item->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"></input> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" id="nip" name="nip" class="form-control" placeholder="Masukan Nip" readonly required/>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" id="golongan" name="golongan" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Masukan Jabatan" readonly></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" value="" id="unitkerja" name="unitkerja" class="form-control" placeholder="Masukan Unit Kerja" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama Pejabat Penilai </b>
                                                    <select class="form-control" id="nama_pp" name="nama_pp" required>
                                                        <option value="" >--Pilih--</option>
                                                        <?php foreach($penilai as $item) { ?>
                                                            <option data-valuea="<?php echo $item->id ?>" value="<?php echo $item->name ?>"><?php echo $item->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" name="nama_pp" class="form-control" placeholder="Masukan Nama"></input> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" id="nip_pp" name="nip_pp" class="form-control" placeholder="Masukan Nip" readonly></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" id="pangkat_pp" name="pangkat_pp" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" id="jabatan_pp" name="jabatan_pp" class="form-control" placeholder="Masukan Jabatan" readonly></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" id="unitkerja_pp" name="unitkerja_pp" class="form-control" placeholder="Masukan Unit Kerja" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama Atasan Pejabat Penilai </b>
                                                    <select class="form-control" id="nama_app" name="nama_app" required>
                                                        <option value="" >--Pilih--</option>
                                                        <?php foreach($atasan as $item) { ?>
                                                            <option data-valuea="<?php echo $item->id ?>" value="<?php echo $item->name ?>"><?php echo $item->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" name="nama_app" class="form-control" placeholder="Masukan Nama"></input> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" id="nip_app" name="nip_app" class="form-control" placeholder="Masukan Nip" readonly></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" id="pangkat_app" name="pangkat_app" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" id="jabatan_app" name="jabatan_app" class="form-control" placeholder="Masukan Jabatan" readonly></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" id="unitkerja_app" name="unitkerja_app" class="form-control" placeholder="Masukan Unit Kerja" readonly></input>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#nama').change(function(){ 
            var id = $('#nama option:selected').data('valuea');
            $.ajax({
                url : "<?php echo base_url(); ?>atasan/dataskp/get_detail_karyawan/",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                    $('#nip').val(data.karyawan[0].nip);
                    $('#unitkerja').val(data.karyawan[0].unit_kerja);
                    $('#golongan').val(data.golongan[0].name);
                    $('#jabatan').val(data.jabatan[0].name);
                    $('#jabatan').val(data.jabatan[0].name);
                    $('#id_karyawan').val(id);
                }
            });
            return false;
        }); 
        
        $('#nama_pp').change(function(){ 
            var id = $('#nama_pp option:selected').data('valuea');
            $.ajax({
                url : "<?php echo base_url(); ?>atasan/dataskp/get_detail_penilai/",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                     $('#nip_pp').val(data.karyawan[0].nip);
                     $('#unitkerja_pp').val(data.karyawan[0].unit_kerja);
                     $('#pangkat_pp').val(data.golongan[0].name);
                     $('#jabatan_pp').val(data.jabatan[0].name);
                }
            });
            return false;
        }); 
        
        $('#nama_app').change(function(){ 
            var id = $('#nama_app option:selected').data('valuea');
            $.ajax({
                url : "<?php echo base_url(); ?>atasan/dataskp/get_detail_atasan/",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                     $('#nip_app').val(data.karyawan[0].nip);
                     $('#unitkerja_app').val(data.karyawan[0].unit_kerja);
                     $('#pangkat_app').val(data.golongan[0].name);
                     $('#jabatan_app').val(data.jabatan[0].name);
                }
            });
            return false;
        }); 
         
    });
</script>