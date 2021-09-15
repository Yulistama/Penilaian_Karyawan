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
                <div class="col-12" style="margin-top: 0px; padding-top: 50px; background: white; min-height: 1350px">
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
                                <div class="col-md-12" style="border: solid 1px gray; padding:50px">
                                    <div class="row">
                                        <?php foreach($data_skp as $item) {?> 
                                        <form method="post" action="<?= base_url('atasan/dataskp/update_data_skp')?>">
                                            <input type="hidden" name="id_skp" value="<?php echo $id?>"/>
                                            <input type="hidden" name="id_dataskp" value="<?php echo $item->id_dataskp?>"/>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama yang dinilai </b>
                                                    <select class="form-control" id="nama" name="nama" required>
                                                        <option value="" >--Pilih--</option>
                                                        <?php foreach($karyawan as $kar) { ?>
                                                            <option data-valuea="<?php echo $kar->id ?>" value="<?php echo $kar->name ?>" <?php if($kar->name === $item->nama_dinilai){?> selected<?php }?>><?php echo $kar->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" name="nama" value="<?php echo $item->nama_dinilai?>" class="form-control" placeholder="Masukan Nama"></input> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" id="nip" name="nip" value="<?php echo $item->nip_dinilai?>" class="form-control" placeholder="Masukan Nip" readonly></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" id="golongan" name="golongan" value="<?php echo $item->pangkat_dinilai?>" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" id="jabatan" name="jabatan" value="<?php echo $item->jabatan_dinilai?>" class="form-control" placeholder="Masukan Jabatan" readonly></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" id="unitkerja" name="unitkerja" value="<?php echo $item->unit_kerja_dinilai?>" class="form-control" placeholder="Masukan Unit Kerja" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama Pejabat Penilai </b>
                                                    <select class="form-control" id="nama_pp" name="nama_pp" required>
                                                        <option value="" >--Pilih--</option>
                                                        <?php foreach($penilai as $pen) { ?>
                                                            <option data-valuea="<?php echo $pen->id ?>" value="<?php echo $pen->name ?>" <?php if($pen->name === $item->nama_penilai){?> selected<?php }?>><?php echo $pen->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" id="nama_pp" name="nama_pp" value="<?php echo $item->nama_penilai?>" class="form-control" placeholder="Masukan Nama" readonly></input> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" id="nip_pp" name="nip_pp" value="<?php echo $item->nip_penilai?>" class="form-control" placeholder="Masukan Nip" readonly></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" id="pangkat_pp" name="pangkat_pp" value="<?php echo $item->pangkat_penilai?>" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" id="jabatan_pp" name="jabatan_pp" value="<?php echo $item->jabatan_penilai?>" class="form-control" placeholder="Masukan Jabatan" readonly></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" id="unitkerja_pp" name="unitkerja_pp" value="<?php echo $item->unit_kerja_penilai?>" class="form-control" placeholder="Masukan Unit Kerja" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <b>Nama Atasan Pejabat Penilai </b>
                                                    <select class="form-control" id="nama_app" name="nama_app" required>
                                                        <option value="" >--Pilih--</option>
                                                        <?php foreach($atasan as $atas) { ?>
                                                            <option data-valuea="<?php echo $atas->id ?>" value="<?php echo $atas->name ?>" <?php if($atas->name === $item->nama_atasan){?> selected<?php }?>><?php echo $atas->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!-- <input type="text" name="nama_app" value="<?php echo $item->nama_atasan?>" class="form-control" placeholder="Masukan Nama"></input> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Nip </b>
                                                    <input type="text" id="nip_app" name="nip_app" value="<?php echo $item->nip_atasan?>" class="form-control" placeholder="Masukan Nip" readonly></input>
                                                </div>
                                                <div class="col-md-4">
                                                    <b>Pangkat / Golongan Ruang </b>
                                                    <input type="text" id="pangkat_app" name="pangkat_app" value="<?php echo $item->pangkat_atasan?>" class="form-control" placeholder="Masukan Pangkat / Golongan Ruang" readonly></input>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <b>Jabatan </b>
                                                    <input type="text" id="jabatan_app" name="jabatan_app" value="<?php echo $item->jabatan_atasan?>" class="form-control" placeholder="Masukan Jabatan" readonly></input>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Unit Kerja </b>
                                                    <input type="text" id="unitkerja_app" name="unitkerja_app" value="<?php echo $item->unit_kerja_atasan?>" class="form-control" placeholder="Masukan Unit Kerja" readonly></input>
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
                                            <?php } ?>

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