   <div id="page-wrapper">
      <div class="header"> 
                        <h1 class="page-header">
                            Perngukuran Capaian SKP
                        </h1>
                  
    </div>
    <div class="container-fluid">

             <div class="card-body">
        <div class="card-body">
         <a class="btn btn-sm btn-success mb-3" href="<?= base_url('Pengukuran/add_pengukuran')?>"><i class="fas fa-plus"></i> Tambah Data </a>
       </div>
       <span id="flash" data-flash="<?= $this->session->flashdata('message')?>"></span>
       <div class="table-responsive">
        <table class="table table-hover table-bordered" id="example">
        

     <thead>
      <tr class="table table-dark">s
        <th class="text-center">No</th>
        <th class="text-center">Target Menerima Surat (kuant/output) </th>
        <th class="text-center">Target Menerima Surat (kual/mutu) </th>
        <th class="text-center">Target Menerima Surat (waktu) </th>
        <th class="text-center">Target Menerima Surat (biaya) </th>
        <th class="text-center">Realisasi Menerima Surat (kuant/output) </th>
        <th class="text-center">Realisasi Menerima Surat (kual/mutu) </th>
        <th class="text-center">Realisasi Menerima Surat (waktu) </th>
        <th class="text-center">Realisasi Menerima Surat (biaya) </th>
        <th class="text-center">Perhitungan Menerima Surat </th>
        <th class="text-center">Nilai Capaian SKP Menerima Surat</th>

        <th class="text-center">Target Kode Surat (kuant/output) </th>
        <th class="text-center">Target Kode Surat (kual/mutu) </th>
        <th class="text-center">Target Kode Surat (waktu) </th>
        <th class="text-center">Target Kode Surat (biaya) </th>
        <th class="text-center">Realisasi Kode Surat (kuant/output) </th>
        <th class="text-center">Realisasi Kode Surat (kual/mutu) </th>
        <th class="text-center">Realisasi Kode Surat (waktu) </th>
        <th class="text-center">Realisasi Kode Surat (biaya) </th>
        <th class="text-center">Perhitungan Kode Surat </th>
        <th class="text-center">Nilai Capaian SKP Kode Surat </th>

        <th class="text-center">Target Memberi No Agenda  (kuant/output) </th>
        <th class="text-center">Target Memberi No Agenda (kual/mutu) </th>
        <th class="text-center">Target Memberi No Agenda (waktu) </th>
        <th class="text-center">Target Memberi No Agenda (biaya) </th>
        <th class="text-center">Realisasi Memberi No Agenda  (kuant/output) </th>
        <th class="text-center">Realisasi Memberi No Agenda (kual/mutu) </th>
        <th class="text-center">Realisasi Memberi No Agenda (waktu) </th>
        <th class="text-center">Realisasi Memberi No Agenda (biaya) </th>
        <th class="text-center">Perhitungan Memberi No Agenda </th>
        <th class="text-center">Nilai Capian SKP Memberi No Agenda </th>

        <th class="text-center">Target Memberi No Surat (kuant/output) </th>
        <th class="text-center">Target Memberi No Surat (kual/mutu) </th>
        <th class="text-center">Target Memberi No Surat (waktu) </th>
        <th class="text-center">Target Memberi No Surat (biaya) </th>
        <th class="text-center">Realisasi Memberi No Surat (kuant/output) </th>
        <th class="text-center">Realisasi Memberi No Surat (kual/mutu) </th>
        <th class="text-center">Realisasi Memberi No Surat (waktu) </th>
        <th class="text-center">Realisasi Memberi No Surat (biaya) </th>
        <th class="text-center">Perhitungan Memberi No Surat </th>
        <th class="text-center">Nilai Capaian SKP Memberi No Surat </th>

        <th class="text-center">Target Mendistribusikan Surat (kuant/output) </th>
        <th class="text-center">Target Mendistribusikan Surat (kual/mutu) </th>
        <th class="text-center">Target Mendistribusikan Surat (waktu) </th>
        <th class="text-center">Target Mendistribusikan Surat (biaya) </th>
        <th class="text-center">Realisasi Mendistribusikan Surat (kuant/output) </th>
        <th class="text-center">Realisasi Mendistribusikan Surat (kual/mutu) </th>
        <th class="text-center">Realisasi Mendistribusikan Surat (waktu) </th>
        <th class="text-center">Realisasi Mendistribusikan Surat (biaya) </th>
        <th class="text-center">Perhitungan Mendistribusikan Surat </th>
        <th class="text-center">Nilai Capian SKP Mendistribusikan Surat  </th>

        <th class="text-center">Target Arsipan Surat (kuant/output) </th>
        <th class="text-center">Target Arsipan Surat (kual/mutu) </th>
        <th class="text-center">Target Arsipan Surat (waktu) </th>
        <th class="text-center">Target Arispan Surat (biaya) </th>
        <th class="text-center">Realisasi Arsipan Surat (kuant/output) </th>
        <th class="text-center">Realisasi Arsipan Surat (kual/mutu) </th>
        <th class="text-center">Realisasi Arsipan Surat (waktu) </th>
        <th class="text-center">Realisasi Arispan Surat (biaya) </th>
        <th class="text-center">Perhitungan Arsipan Surat </th>
        <th class="text-center">Nilai Capaian SKP Arispan Surat </th>

        <th class="text-center">Nilai Capaian SKP </th>
        <th class="text-center">Nilai Capaian SKP </th>

        <th class="text-center">Mengikuti Pemeriksaan Reguler</th>
        <th class="text-center">Mengikuti Pemeriksaan Reguler</th>
        <th class="text-center">Tindak Lanjut Pemeriksaan Reguler</th>
        <th class="text-center">Tindak Lanjut Pemeriksaan Reguler</th>
        <th class="text-center">Mengikuti Pemeriksaan Reguler</th>

        <th class="text-center">Operator Komputer Tim SPIP</th>
        <th class="text-center">Operator Komputer Tim SPIP</th>
        <th class="text-center">Orientasi</th>
        <th class="text-center">Orientasi</th>
        <th class="text-center">Operator Komputer Tim SPIP</th>

        <th class="text-center">Actions</th>
      </tr>
      
    <tbody>
<?php $i = 1; ?>
     <tr >
      <td class="text-center"><?= $i; ?></td>
      <td class="text-center">1200</td>
      <td class="text-center">100</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">1090</td>
      <td class="text-center">90,83</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">258</td>
      <td class="text-center">85,89</td>

      <td class="text-center">1200</td>
      <td class="text-center">100</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">1080</td>
      <td class="text-center">90,00</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">256</td>
      <td class="text-center">85,33</td>

      <td class="text-center">600</td>
      <td class="text-center">100</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">455</td>
      <td class="text-center">75,83</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">228</td>
      <td class="text-center">75,89</td>

      <td class="text-center">1500</td>
      <td class="text-center">100</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">1152</td>
      <td class="text-center">76,80</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">230</td>
      <td class="text-center">76,53</td>

      <td class="text-center">1200</td>
      <td class="text-center">100</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">1065</td>
      <td class="text-center">88,75</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">254</td>
      <td class="text-center">84,50</td>

      <td class="text-center">500</td>
      <td class="text-center">100</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">440</td>
      <td class="text-center">88,00</td>
      <td class="text-center">12</td>
      <td class="text-center">-</td>
      <td class="text-center">252</td>
      <td class="text-center">84,00</td>

      <td class="text-center">89,02</td>
      <td class="text-center">baik</td>

      <td class="text-center">3</td>
      <td class="text-center">3</td>
      <td class="text-center">3</td>
      <td class="text-center">3</td>
      <td class="text-center">6</td>

      <td class="text-center">1</td>
      <td class="text-center">1</td>
      <td class="text-center">-</td>
      <td class="text-center">-</td>
      <td class="text-center">1</td>

      <td class="text-center">
        <a class="badge badge-primary" href="<?=base_url('Pengukuran/edit')?>"> <i class="fa  fa-edit" > </i> Edit </a><br>

        <a class="badge badge-danger" id="btn-hapus" href="<?=base_url('Pengukuran/hapus')?>"> <i class="fa fa-trash"> </i> Delete </a><br>

        <a class="badge badge-success" target="_blank" href="<?=base_url('Pengukuran/pdf/')?>"> <i class="fa  fa-file-pdf" > </i> Cetak </a>

      </td>
    </tr> 
  </tbody>
</thead>
</table>
</div>
</div>
</div>
