<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Tambah Karyawan
        </h1>
        <div class="col-12" style="margin-top: 10px; background: white; min-height: 300px">
            <div class="row">
                <div class="col-md-12" style="margin-top: 50px; padding-left: 50px; padding-right:50px">
                    <form method="post" action="<?= base_url('atasan/masterkaryawan/v_add_karyawan')?>">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Nama</b>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" require></input>
                            </div>
                            <div class="col-md-4">
                                <b>NIP</b>
                                <input type="text" name="nip" class="form-control" placeholder="Masukan NIP" require></input>
                            </div>
                            <div class="col-md-4">
                                <b>Pangkat/Gol</b>
                                <select class="form-control" id="golongan" name="golongan">
                                    <?php foreach($golongan as $item) { ?>
                                        <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Jabatan </b>
                                <select class="form-control" id="jabatan" name="jabatan">
                                    <?php foreach($jabatan as $item) { ?>
                                        <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <b>Unit Kerja</b>
                                <input type="text" name="unit_kerja" class="form-control" placeholder="Masukan Unit Kerja" require></input>
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
                </div>
            </div>
        </div>
    </div>
</div>