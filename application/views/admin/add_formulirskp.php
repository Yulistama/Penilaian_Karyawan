  <div id="page-wrapper">
      <div class="header"> 
            <h2 class="page-header">
                           Tambah Formulir SKP
                        </h2>  
    </div>
    <div class="container-fluid">

  <div class="card shadow mb-4 border-left-primary" >
   <div class="card-header py-3">

    <div class="modal-body">
      <form method="post" action="<?= base_url('Formulirskp/tambah_aksi') ;?>">

    <div class="row">
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
        <input  type="text" name="pangkat_yd" class="form-control" placeholder="Pangkat / Golongan Ruang" readonly=""></input>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-md-6">
        <b>Jabatan </b> 
        <input  type="text" name="jabatan_yd" class="form-control" placeholder="Jabatan" readonly=""></input>
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
      <div class="col-md-4">
        <b>Jabatan </b> 
        <input  type="text" name="jabatan_pp" class="form-control" placeholder="Jabatan" readonly=""></input>
      </div>
      <div class="col-md-4">
        <b>Unit Kerja </b> 
        <input  type="text" name="unit_pp" class="form-control" placeholder="Unit Kerja" readonly="
        "></input>
      </div>
      <div class="col-md-4">
        <b>Kode Formulir </b> 
        <input  type="text" name="kdformulir" class="form-control" placeholder="Kode"></input>
      </div>
      </div>
      <br>
      <div class="row">
      <div class="col-md-3">
        <b> Target Menerima Surat Masuk </b> 
        <input  type="text" name="kuant1" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual1" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu1" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya1" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b>Target Kode Surat </b> 
        <input  type="text" name="kuant2" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
    <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual2" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu2" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya2" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>

      <br>
      <div class="row">
      <div class="col-md-3">
        <b>Target Memberi No Agenda </b> 
        <input  type="text" name="kuant3" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual3" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu3" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya3" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b>Target Memberi No Surat </b> 
        <input  type="text" name="kuant4" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
    <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual4" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu4" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya4" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>

      <br>
      <div class="row">
      <div class="col-md-3">
        <b>Target Mendistribusikan Surat </b> 
        <input  type="text" name="kuant5" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual5" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu5" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya5" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b>Target Arsipan Surat </b> 
        <input  type="text" name="kuant6" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
    <div class="col-md-3">
        <b><br> </b> 
        <input  type="text" name="kual6" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu6" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya6" class="form-control" placeholder="Biaya" ></input>
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
