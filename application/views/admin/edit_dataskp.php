  <div id="page-wrapper">
      <div class="header"> 
            <h2 class="page-header"> Edit Data SKP</h2> 
       </div>
    <div class="modal-body">
       <?php foreach($dataskp as $dataskp ) { ?>
      <form method="post" action="<?= base_url().'Dataskp/update' ;?>">

    <div class="row">
      <div class="col-md-4">
        <b>Nama yang dinilai </b> 
        <input type="hidden" name="id_dataskp" class="form-control"  value="<?= $dataskp->id_dataskp ?>">
        <input  type="text" name="nama_yd" class="form-control" placeholder="Nama" ></input>
      </div>
      <div class="col-md-4">
        <b>Nip </b> 
        <input  type="text" name="nip_yd" class="form-control" placeholder="Nip" value="<?= $dataskp->nip_yd ?>" ></input>
      </div>
      <div class="col-md-4">
        <b>Pangkat / Golongan Ruang </b> 
        <input  type="text" name="pangkat_yd" class="form-control" placeholder="Pangkat / Golongan Ruang" value="<?= $dataskp->pangkat_yd ?>"></input>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-md-6">
        <b>Jabatan </b> 
        <input  type="text" name="jabatan_yd" class="form-control" placeholder="Jabatan" value="<?= $dataskp->jabatan_yd ?>"></input>
      </div>
      <div class="col-md-6">
        <b>Unit Kerja </b> 
        <input  type="text" name="unitkerja_yd" class="form-control" placeholder="Unit Kerja" value="<?= $dataskp->unitkerja_yd ?>"></input>
      </div>
      </div>
      <br>
   <div class="row">
      <div class="col-md-4">
        <b>Nama Pejabat Penilai </b> 
        <input  type="text" name="nama_pp" class="form-control" placeholder="Nama" value="<?= $dataskp->nama_pp ?>"></input>
      </div>
      <div class="col-md-4">
        <b>Nip </b> 
        <input  type="text" name="nip_pp" class="form-control" placeholder="Nip" value="<?= $dataskp->nip_pp ?>"></input>
      </div>
      <div class="col-md-4">
        <b>Pangkat / Golongan Ruang </b> 
        <input  type="text" name="pangkat_pp" class="form-control" placeholder="Pangkat / Golongan Ruang" value="<?= $dataskp->pangkat_pp ?>"></input>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-md-6">
        <b>Jabatan </b> 
        <input  type="text" name="jabatan_pp" class="form-control" placeholder="Jabatan" value="<?= $dataskp->jabatan_pp?>"></input>
      </div>
      <div class="col-md-6">
        <b>Unit Kerja </b> 
        <input  type="text" name="unitkerja_pp" class="form-control" placeholder="Unit Kerja" value="<?= $dataskp->unitkerja_pp ?>"></input>
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col-md-4">
        <b>Nama Atasan Pejabat Penilai </b> 
        <input  type="text" name="nama_app" class="form-control" placeholder="Nama" value="<?= $dataskp->nama_app ?>"></input>
      </div>
      <div class="col-md-4">
        <b>Nip </b> 
        <input  type="text" name="nip_app" class="form-control" placeholder="Nip" value="<?= $dataskp->nip_app ?>"></input>
      </div>
      <div class="col-md-4">
        <b>Pangkat / Golongan Ruang </b> 
        <input  type="text" name="pangkat_app" class="form-control" placeholder="Pangkat / Golongan Ruang" value="<?= $dataskp->pangkat_app ?>"></input>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-md-6">
        <b>Jabatan </b> 
        <input  type="text" name="jabatan_app" class="form-control" placeholder="Jabatan" value="<?= $dataskp->jabatan_app ?>"></input>
      </div>
      <div class="col-md-6">
        <b>Unit Kerja </b> 
        <input  type="text" name="unitkerja_app" class="form-control" placeholder="Unit Kerja" value="<?= $dataskp->unitkerja_app ?>"></input>
      </div>
      </div>
      <br>

<button type="reset" class="btn btn-danger">
<i class=" fa fa-trash-alt"></i> Reset </button>

<button type="submit" class="btn btn-success">
 <i class=" fa fa-save"></i> Save </button>
</div>
</form>

  <?php } ?>
</div>
</div>
</div>
</div>