  <div id="page-wrapper">
    <div class="header">
      <h2 class="page-header"> Tambah Data SKP</h2>
    </div>
    <div class="modal-body">
      <form method="post" action="<?= base_url('Dataskp/tambah_aksi'); ?>">

        <div class="row">
          <div class="col-md-4">
            <b>Nama yang dinilai </b>
            <input type="text" name="nama_yd" class="form-control" placeholder="Nama"></input>
            <?= form_error('nama_yd', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-4">
            <b>Nip </b>
            <input type="text" name="nip_yd" class="form-control" placeholder="Nip"></input>
            <?= form_error('nip_yd', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-4">
            <b>Pangkat / Golongan Ruang </b>
            <input type="text" name="pangkat_yd" class="form-control" placeholder="Pangkat / Golongan Ruang"></input>
            <?= form_error('pangkat_yd', ' <small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <b>Jabatan </b>
            <input type="text" name="jabatan_yd" class="form-control" placeholder="Jabatan"></input>
            <?= form_error('jabatan_yd', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-6">
            <b>Unit Kerja </b>
            <input type="text" name="unitkerja_yd" class="form-control" placeholder="Unit Kerja"></input>
            <?= form_error('unitkerja_yd', ' <small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <b>Nama Pejabat Penilai </b>
            <input type="text" name="nama_pp" class="form-control" placeholder="Nama"></input>
            <?= form_error('nama_pp', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-4">
            <b>Nip </b>
            <input type="text" name="nip_pp" class="form-control" placeholder="Nip"></input>
            <?= form_error('nip_pp', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-4">
            <b>Pangkat / Golongan Ruang </b>
            <input type="text" name="pangkat_pp" class="form-control" placeholder="Pangkat / Golongan Ruang"></input>
            <?= form_error('pangkat_pp', ' <small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <b>Jabatan </b>
            <input type="text" name="jabatan_pp" class="form-control" placeholder="Jabatan"></input>
            <?= form_error('jabatan_pp', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-6">
            <b>Unit Kerja </b>
            <input type="text" name="unitkerja_pp" class="form-control" placeholder="Unit Kerja"></input>
            <?= form_error('unitkerja_pp', ' <small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <b>Nama Atasan Pejabat Penilai </b>
            <input type="text" name="nama_app" class="form-control" placeholder="Nama"></input>
            <?= form_error('nama_app', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-4">
            <b>Nip </b>
            <input type="text" name="nip_app" class="form-control" placeholder="Nip"></input>
            <?= form_error('nip_app', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-4">
            <b>Pangkat / Golongan Ruang </b>
            <input type="text" name="pangkat_app" class="form-control" placeholder="Pangkat / Golongan Ruang"></input>
            <?= form_error('pangkat_app', ' <small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <b>Jabatan </b>
            <input type="text" name="jabatan_app" class="form-control" placeholder="Jabatan"></input>
            <?= form_error('jabatan_app', ' <small class="text-danger">', '</small>'); ?>
          </div>
          <div class="col-md-6">
            <b>Unit Kerja </b>
            <input type="text" name="unitkerja_app" class="form-control" placeholder="Unit Kerja"></input>
            <?= form_error('unitkerja_app', ' <small class="text-danger">', '</small>'); ?>
          </div>
        </div>
        <br>

        <button type="reset" class="btn btn-danger">
          <i class=" fa fa-trash-alt"></i> Reset </button>

        <button type="submit" class="btn btn-success">
          <i class=" fa fa-save"></i> Save </button>
    </div>
    </form>
  </div>
  </div>
  </div>
  </div>