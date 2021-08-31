<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Edit Karyawan
        </h1>
        <div class="col-12" style="margin-top: 10px; background: white; min-height: 350px">
            <div class="row">
                <div class="col-md-12" style="margin-top: 50px; padding-left: 50px; padding-right:50px">
                    <?php foreach($karyawan as $item) {?>    
                    <form method="post" action="<?= base_url('atasan/masterkaryawan/update')?>">
                        <input type="hidden" value="<?php echo $item->id?>" name="id"/>
                        <div class="row">
                            <div class="col-md-6">
                                <b>Nama</b>
                                <input type="text" name="nama" value="<?php echo $item->name?>" class="form-control"  placeholder="Masukan Nama" require></input>
                            </div>
                            <div class="col-md-6">
                                <b>NIP</b>
                                <input type="text" name="nip" class="form-control" value="<?php echo $item->nip ?>" placeholder="Masukan NIP" require></input>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <b>Unit Kerja</b>
                                <input type="text" name="unit_kerja" class="form-control" value="<?php echo $item->unit_kerja ?>" placeholder="Masukan Unit Kerja"></input>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <b>Jabatan </b>
                                <select class="form-control" id="jabatan" name="jabatan">
                                    <?php foreach($jabatan as $jab) { ?>
                                        <option value="<?php echo $jab->id ?>" <?php if($item->id_jabatan == $jab->id){?> selected<?php }?>><?php echo $jab->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <b>Pangkat/Gol</b>
                                <select class="form-control" id="golongan" name="golongan">
                                    <?php foreach($golongan as $gol) { ?>
                                        <option value="<?php echo $gol->id ?>" <?php if($item->id_golongan == $gol->id){?> selected<?php }?>><?php echo $gol->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-12" style="text-align: center">
                                <button type="reset" class="btn btn-danger">
                                <i class=" fa fa-trash-alt"></i> <a href="<?= base_url('atasan/masterkaryawan') ?>" style="text-decoration: none; color:white">Batal</a></button>
                                <button type="submit" class="btn btn-success">
                                <i class=" fa fa-save"></i> Save </button>
                            </div>
                        </div>
                    </form>
                <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>