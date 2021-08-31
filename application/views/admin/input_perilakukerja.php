   <div id="page-wrapper">
      <div class="header"> 
                        <h1 class="page-header">
                            Perilaku Kerja PNS
                        </h1>
                  
    </div>
    <div class="container-fluid">

             <div class="card-body">
        <div class="card-body">
         <a class="btn btn-sm btn-success mb-3" href="<?= base_url('Perilakukerja/add_perilakukerja')?>"><i class="fas fa-plus"></i> Tambah Data </a>
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
        <th class="text-center">Nilai Capai SKP </th>
        <th class="text-center">Orientasi Pelayanan</th>
        <th class="text-center">Orientasi Pelayanan</th>
        <th class="text-center">Integritas</th>
        <th class="text-center">Integritas</th>
        <th class="text-center">Komunitas</th>
        <th class="text-center">Komunitas</th>
        <th class="text-center">Disiplin</th>
        <th class="text-center">Disiplin</th>
        <th class="text-center">Kerjasama</th>
        <th class="text-center">Kerjasama</th>
        <th class="text-center">Kepemimpinan</th>
        <th class="text-center">Kepemimpinan</th>
        <th class="text-center">Jumlah</th>
        <th class="text-center">Jumlah</th>
        <th class="text-center">Niali Rata-rata</th>
        <th class="text-center">Niali Rata-rata</th>
        <th class="text-center">Nama Pejabat Penilai</th>
        <th class="text-center">NIP </th>
        <th class="text-center">Jabatan</th>
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
      <td class="text-center">89,02</td>
      <td class="text-center">78,00</td>
      <td class="text-center">Baik</td>
      <td class="text-center">76,00</td>
      <td class="text-center">Baik</td>
      <td class="text-center">77,00</td>
      <td class="text-center">Baik</td>
      <td class="text-center">78,00</td>
      <td class="text-center">Baik</td>
      <td class="text-center">77,00</td>
      <td class="text-center">Baik</td>
      <td class="text-center">0</td>
      <td class="text-center">-</td>
      <td class="text-center">386</td>
      <td class="text-center">-</td>
      <td class="text-center">77,20</td>
      <td class="text-center">Baik</td>
      <td class="text-center">Samsirman,SE</td>
      <td class="text-center">00000000000000000</td>
      <td class="text-center">Ka.Sub Bag. Adm Umum & Kepegawaian</td>
      
      <td class="text-center">
        <a class="badge badge-primary" href="<?=base_url('Perilakukerja/edit')?>"> <i class="fa  fa-edit" > </i> Edit </a><br>

        <a class="badge badge-danger" id="btn-hapus" href="<?=base_url('Perilakukerja/hapus')?>"> <i class="fa fa-trash"> </i> Delete </a><br>

        <a class="badge badge-success" target="_blank" href="<?=base_url('Perilakukerja/pdf/')?>"> <i class="fa  fa-file-pdf" > </i> Cetak </a>

      </td>
    </tr> 
  </tbody>
</thead>
</table>
</div>
</div>
</div>
