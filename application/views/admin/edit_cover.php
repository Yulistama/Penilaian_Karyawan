 <div id="page-wrapper">
      <div class="header"> 
            <h2 class="page-header">
                           Edit Cover
                        </h2>  
    </div>
    <div class="container-fluid">

  <div class="card shadow mb-4 border-left-primary" >
   <div class="card-header py-3">

    <div class="modal-body">
      <form method="post" action="<?= base_url('Cover/update') ;?>">

    
   <div class="row">
    <div class="col-md-4">
        <b>Kode Jangka Waktu Penilaian </b> 
        <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
      </div>
      <div class="col-md-4">
        <b>Jangka Waktu Penilaian </b> 
        <input  type="text" name="jangka" class="form-control" placeholder="Jangka Waktu Penilaian" ></input>
      </div>
      <div class="col-md-4">
        <b>Tahun </b> 
        <input  type="text" name="tahun" class="form-control" placeholder="Tahun" ></input>
      </div>
      </div>
      <br>

    <div class="row">
      <div class="col-md-4">
        <b>Nama yang dinilai </b> 
        <input  type="text" name="nm_yd" class="form-control" placeholder="Nama" ></input>
      </div>
      <div class="col-md-4">
        <b>Nip </b> 
        <input  type="text" name="nip_yd" class="form-control" placeholder="Nip" readonly="" ></input>
      </div>
      <div class="col-md-4">
        <b>Pangkat / Golongan Ruang </b> 
        <input  type="text" name="pangkat_yd" class="form-control" placeholder="Pangkat / Golongan Ruang" readonly=""></input>
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
        <input  type="text" name="unit_yd" class="form-control" placeholder="Unit Kerja" readonly="" ></input>
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
