   <div id="page-wrapper">
      <div class="header"> 
                        <h1 class="page-header">
                            Cover
                        </h1>
                  
    </div>
    <div class="container-fluid">

             <div class="card-body">
        <div class="card-body">
         <a class="btn btn-sm btn-success mb-3" href="<?= base_url('Cover/add_cover')?>"><i class="fas fa-plus"></i> Tambah Data </a>
       </div>
       <span id="flash" data-flash="<?= $this->session->flashdata('message')?>"></span>
       <div class="table-responsive">
        <table class="table table-hover table-bordered" id="example">
        

     <thead>
      <tr class="table table-dark">
        <th class="text-center">No</th>
        <th class="text-center">Jangka Waktu Penilaian</th>
        <th class="text-center">Tahun </th>
        <th class="text-center">Nama Yang Dinilai</th>
        <th class="text-center">NIP </th>
        <th class="text-center">Pangkat </th>
        <th class="text-center">Jabatan</th>
        <th class="text-center">Unit Kerja</th>
        <th class="text-center">Actions</th>
      </tr>
      
    <tbody>
<?php $i = 1; ?>
     <tr >
      <td class="text-center"><?= $i; ?></td>
      <td class="text-center">Januari s/d Desember</td>
      <td class="text-center">2017</td>
      <td class="text-center">Samsoen,A.Ma</td>
      <td class="text-center">000000000000000000</td>
      <td class="text-center">Pengatur Muda II/a</td>
      <td class="text-center">Pengadministrasi Surat</td>
      <td class="text-center">Inspektorat Daerah Kabupaten OKU</td>
      
      <td class="text-center">
        <a class="badge badge-primary" href="<?=base_url('Cover/edit')?>"> <i class="fa  fa-edit" > </i> Edit </a><br>

        <a class="badge badge-danger" id="btn-hapus" href="<?=base_url('Cover/hapus')?>"> <i class="fa fa-trash"> </i> Delete </a><br>

        <a class="badge badge-success" target="_blank" href="<?=base_url('Cover/pdf/')?>"> <i class="fa  fa-file-pdf" > </i> Cetak </a>

      </td>
    </tr> 
  </tbody>
</thead>
</table>
</div>
</div>
</div>
