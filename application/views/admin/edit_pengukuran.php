  <div id="page-wrapper">
      <div class="header"> 
            <h2 class="page-header">
                           Edit Pengukuran Capian SKP
                        </h2>  
    </div>
    <div class="container-fluid">

  <div class="card shadow mb-4 border-left-primary" >
   <div class="card-header py-3">

    <div class="modal-body">
      <form method="post" action="<?= base_url('Pengukuran/update') ;?>">

    <div class="row">
    <div class="col-md-3">
        <b>Kode Jangka Waktu Penilaian </b> 
        <input  type="text" name="kd_cover" class="form-control" placeholder="Kode" ></input>
      </div>
      <div class="col-md-3">
        <b>Jangka Waktu Penilaian </b> 
        <input  type="text" name="jangka" class="form-control" placeholder="Jangka Waktu Penilaian" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b>Tahun </b> 
        <input  type="text" name="tahun" class="form-control" placeholder="Tahun" readonly="" ></input>
      </div>
      <div class="col-md-3">
        <b>Kode Formulir </b> 
        <input  type="text" name="kdformulir" class="form-control" placeholder="Kode"></input>
      </div>
      </div>
      <br>

      <div class="row">
      <div class="col-md-3">
        <b> Target Menerima Surat Masuk </b> 
        <input  type="text" name="kuant1" class="form-control" placeholder="Kuant/Output" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual1" class="form-control" placeholder="Kual/Mutu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu1" class="form-control" placeholder="Waktu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya1" class="form-control" placeholder="Biaya" readonly=""></input>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3">
        <b> Realisasi Surat Masuk </b> 
        <input  type="text" name="kuant1r" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual1r" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu1r" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya1r" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pwaktu1" class="form-control" placeholder="Persen Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pbiaya1" class="form-control" placeholder="Persen Biaya" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu1x" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya1x" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> <br> </b> 
        <input  type="text" name="kuantitas1" class="form-control" placeholder="Kualitas" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kualitas1" class="form-control" placeholder="Kuantitas" ></input>
      </div>
      <div class="col-md-3">
        <b> Perhitungan</b> 
        <input  type="text" name="perhitungan1" class="form-control" placeholder="Perhitungan" ></input>
      </div>
      <div class="col-md-3">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaiskp1" class="form-control" placeholder="Nilai Capaian SKP" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b>Target Kode Surat </b> 
        <input  type="text" name="kuant2" class="form-control" placeholder="Kuant/Output" readonly=""></input>
      </div>
    <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual2" class="form-control" placeholder="Kual/Mutu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu2" class="form-control" placeholder="Waktu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya2" class="form-control" placeholder="Biaya" readonly=""></input>
      </div>
    </div>
<br>
<div class="row">
      <div class="col-md-3">
        <b> Realisasi Kode Surat</b> 
        <input  type="text" name="kuant2r" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual2r" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu2r" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya2r" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pwaktu2" class="form-control" placeholder="Persen Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pbiaya2" class="form-control" placeholder="Persen Biaya" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu2x" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya2x" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> <br> </b> 
        <input  type="text" name="kuantitas2" class="form-control" placeholder="Kualitas" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kualitas2" class="form-control" placeholder="Kuantitas" ></input>
      </div>
      <div class="col-md-3">
        <b> Perhitungan</b> 
        <input  type="text" name="perhitungan2" class="form-control" placeholder="Perhitungan" ></input>
      </div>
      <div class="col-md-3">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaiskp2" class="form-control" placeholder="Nilai Capaian SKP" ></input>
      </div>
    </div>

      <br>
      <div class="row">
      <div class="col-md-3">
        <b>Target Memberi No Agenda </b> 
        <input  type="text" name="kuant3" class="form-control" placeholder="Kuant/Output" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual3" class="form-control" placeholder="Kual/Mutu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu3" class="form-control" placeholder="Waktu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya3" class="form-control" placeholder="Biaya" readonly="" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> Realisasi No Agenda </b> 
        <input  type="text" name="kuant3r" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual3r" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu3r" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya3r" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pwaktu3" class="form-control" placeholder="Persen Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pbiaya3" class="form-control" placeholder="Persen Biaya" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu3x" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya3x" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> <br> </b> 
        <input  type="text" name="kuantitas3" class="form-control" placeholder="Kualitas" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kualitas3" class="form-control" placeholder="Kuantitas" ></input>
      </div>
      <div class="col-md-3">
        <b> Perhitungan</b> 
        <input  type="text" name="perhitungan3" class="form-control" placeholder="Perhitungan" ></input>
      </div>
      <div class="col-md-3">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaiskp3" class="form-control" placeholder="Nilai Capaian SKP" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b>Target Memberi No Surat </b> 
        <input  type="text" name="kuant4" class="form-control" placeholder="Kuant/Output" readonly=""></input>
      </div>
    <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual4" class="form-control" placeholder="Kual/Mutu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu4" class="form-control" placeholder="Waktu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya4" class="form-control" placeholder="Biaya" readonly=""></input>
      </div>
    </div>
    <br>
<div class="row">
      <div class="col-md-3">
        <b> Realisasi No Masuk </b> 
        <input  type="text" name="kuant4r" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual4r" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu4r" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya4r" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pwaktu4" class="form-control" placeholder="Persen Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pbiaya4" class="form-control" placeholder="Persen Biaya" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu4x" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya4x" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> <br> </b> 
        <input  type="text" name="kuantitas4" class="form-control" placeholder="Kualitas" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kualitas4" class="form-control" placeholder="Kuantitas" ></input>
      </div>
      <div class="col-md-3">
        <b> Perhitungan</b> 
        <input  type="text" name="perhitungan4" class="form-control" placeholder="Perhitungan" ></input>
      </div>
      <div class="col-md-3">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaiskp4" class="form-control" placeholder="Nilai Capaian SKP" ></input>
      </div>
    </div>
  
      <br>
      <div class="row">
      <div class="col-md-3">
        <b>Target Mendistribusikan Surat </b> 
        <input  type="text" name="kuant5" class="form-control" placeholder="Kuant/Output" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual5" class="form-control" placeholder="Kual/Mutu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu5" class="form-control" placeholder="Waktu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya5" class="form-control" placeholder="Biaya" readonly=""></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> Realisasi Mendistribusi Surat</b> 
        <input  type="text" name="kuant5r" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual5r" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu5r" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya5r" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pwaktu5" class="form-control" placeholder="Persen Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pbiaya5" class="form-control" placeholder="Persen Biaya" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu5x" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya5x" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> <br> </b> 
        <input  type="text" name="kuantitas5" class="form-control" placeholder="Kualitas" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kualitas5" class="form-control" placeholder="Kuantitas" ></input>
      </div>
      <div class="col-md-3">
        <b> Perhitungan</b> 
        <input  type="text" name="perhitungan5" class="form-control" placeholder="Perhitungan" ></input>
      </div>
      <div class="col-md-3">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaiskp5" class="form-control" placeholder="Nilai Capaian SKP" ></input>
      </div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-md-3">
        <b>Target Arsipan Surat </b> 
        <input  type="text" name="kuant6" class="form-control" placeholder="Kuant/Output" readonly="" ></input>
      </div>
    <div class="col-md-3">
        <b><br> </b> 
        <input  type="text" name="kual6" class="form-control" placeholder="Kual/Mutu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu6" class="form-control" placeholder="Waktu" readonly=""></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya6" class="form-control" placeholder="Biaya" readonly=""></input>
      </div>
    </div>
      <br>
      <div class="row">
      <div class="col-md-3">
        <b> Realisasi Arsipan </b> 
        <input  type="text" name="kuant6r" class="form-control" placeholder="Kuant/Output" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kual6r" class="form-control" placeholder="Kual/Mutu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu6r" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya6r" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pwaktu6" class="form-control" placeholder="Persen Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="pbiaya6" class="form-control" placeholder="Persen Biaya" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="waktu16x" class="form-control" placeholder="Waktu" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="biaya6x" class="form-control" placeholder="Biaya" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> <br> </b> 
        <input  type="text" name="kuantitas6" class="form-control" placeholder="Kualitas" ></input>
      </div>
      <div class="col-md-3">
        <b> <br></b> 
        <input  type="text" name="kualitas6" class="form-control" placeholder="Kuantitas" ></input>
      </div>
      <div class="col-md-3">
        <b> Perhitungan</b> 
        <input  type="text" name="perhitungan6" class="form-control" placeholder="Perhitungan" ></input>
      </div>
      <div class="col-md-3">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaiskp6" class="form-control" placeholder="Nilai Capaian SKP" ></input>
      </div>
    </div>
    <br>
<div class="row">
      <div class="col-md-4">
        <b> Kode Pengukuran </b> 
        <input  type="text" name="kdpengukuran" class="form-control" placeholder="Kode" ></input>
      </div>
      <div class="col-md-4">
        <b> Nilai Capaian SKP</b> 
        <input  type="text" name="nilaicapaianskp" class="form-control" placeholder="Nilai Capaian SKP" readonly=""></input>
      </div>
      <div class="col-md-4">
        <b> <br></b> 
        <input  type="text" name="pnilaicapaianskp" class="form-control" placeholder="" ></input>
      </div>
    </div>
    <br>
<div class="row">
      <div class="col-md-3">
        <b> Pemeriksaan Reguler </b> 
        <input  type="text" name="tt1" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-2">
        <b> <br></b> 
        <input  type="text" name="kk1" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-3">
        <b> Tindak Lanjut </b> 
        <input  type="text" name="tt2" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-2">
        <b> <br></b> 
        <input  type="text" name="kk2" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-2">
        <b> <br></b> 
        <input  type="text" name="ttk1" class="form-control" placeholder="" ></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <b> Operator Komputer </b> 
        <input  type="text" name="tt3" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-2">
        <b> <br></b> 
        <input  type="text" name="kk3" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-3">
        <b> Kreatifitas </b> 
        <input  type="text" name="tt4" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-2">
        <b> <br></b> 
        <input  type="text" name="kk4" class="form-control" placeholder="Surat" ></input>
      </div>
      <div class="col-md-2">
        <b> <br></b> 
        <input  type="text" name="ttk2" class="form-control" placeholder="" ></input>
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
