we  <div id="page-wrapper">
      <div class="header"> 
            <h2 class="page-header">
                           Tambah Buku Catatan Perilaku Kerja PNS
                        </h2>  
    </div>
    <div class="container-fluid">

  <div class="card shadow mb-4 border-left-primary" >
   <div class="card-header py-3">

    <div class="modal-body">
      <form method="post" action="<?= base_url('Perilakukerja/tambah_aksi') ;?>">

   <div class="row">
    <div class="col-md-4">
        <b>Kode Jangka Waktu Penilaian </b> 
        <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
      </div>
      <div class="col-md-4">
        <b>Jangka Waktu Penilaian </b> 
        <input  type="text" name="jangka" class="form-control" placeholder="Jangka Waktu Penilaian" readonly="" ></input>
      </div>
      <div class="col-md-4">
        <b>Tahun </b> 
        <input  type="text" name="tahun" class="form-control" placeholder="Tahun" readonly=""></input>
      </div>
      </div>
      <br> 
    <div class="row">
      <div class="col-md-6">
        <b>Nama yang dinilai </b> 
        <input  type="text" name="nm_yd" class="form-control" placeholder="Nama" ></input>
      </div>
      <div class="col-md-6">
        <b>Nip </b> 
        <input  type="text" name="nip_yd" class="form-control" placeholder="Nip" readonly=""></input>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-md-6">
        <b>Kode Pengukuran </b> 
        <input  type="text" name="kdpengukuran" class="form-control" placeholder="Kode" ></input>
      </div>
      <div class="col-md-6">
        <b>Nilai Capaian SKP </b> 
        <input  type="text" name="nilaicapaianskp" class="form-control" placeholder="Nilai Capaian SKP " readonly="" ></input>
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
        <input  type="text" name="integritas" class="form-control" placeholder="Integritas" readonly="" ></input>
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
        <input  type="text" name="kepemimpinan" class="form-control" placeholder="Kepemimpinan" readonly=""></input>
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
        <b> <br></b> 
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
      <div class="col-md-4">
        <b>Nama Pejabat Penilai </b> 
        <input  type="text" name="nm_pp" class="form-control" placeholder="Nama Pejabat Penilai" readonly="" ></input>
      </div>
      <div class="col-md-4">
        <b> Nip<br></b> 
        <input  type="text" name="nip_pp" class="form-control" placeholder="Nip" readonly=""></input>
      </div>
      <div class="col-md-4">
        <b>Jabatan </b> 
        <input  type="text" name="jabatan_pp" class="form-control" placeholder="Jabatan" readonly=""></input>
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
