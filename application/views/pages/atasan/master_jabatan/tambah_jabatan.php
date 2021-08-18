<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Tambah User
        </h1>
        <div class="col-12" style="margin-top: 10px; background: white; min-height: 200px">
            <div class="row">
                <div class="col-md-12" style="margin-top: 50px; padding-left: 50px; padding-right:50px">
                    <form method="post" action="<?= base_url('atasan/masterjabatan/v_add_jabatan')?>">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Jabatan</b>
                                <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" require></input>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12" style="text-align: center">
                                <button type="reset" class="btn btn-danger">
                                <i class=" fa fa-trash-alt"></i> <a href="<?= base_url('atasan/masterjabatan') ?>" style="text-decoration: none; color:white">Batal</a></button>
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