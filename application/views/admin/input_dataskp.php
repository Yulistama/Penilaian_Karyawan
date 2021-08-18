   <div id="page-wrapper">
    <div class="header"> 
      <h1 class="page-header"> Data SKP</h1>
    </div>
    
    <div class="container-fluid">
      <div class="card-body">
        <div class="card-body">
         <a class="btn btn-sm btn-success mb-3" href="<?= base_url('Dataskp/add_dataskp')?>"><i class="fas fa-plus"></i> Tambah Data </a>
       </div>
       <span id="flash" data-flash="<?= $this->session->flashdata('message')?>"></span>
       <div class="table-responsive">
        <table class="table table-hover table-bordered" id="example">
          <thead>
            <tr  class="table table-dark">
              <th class="text-center">No</th>
              <th class="text-center">Nama Yang Dinilai</th>
              <th class="text-center">NIP </th>
              <th class="text-center">Pangkat </th>
              <th class="text-center">Jabatan</th>
              <th class="text-center">Unit Kerja</th>
              <th class="text-center">Nama Pejabat Penilai</th>
              <th class="text-center">NIP </th>
              <th class="text-center">Pangkat</th>
              <th class="text-center">Jabatan</th>
              <th class="text-center">Unit Kerja</th>
              <th class="text-center">Nama Atasan Pejabat Penilai</th>
              <th class="text-center">NIP </th>
              <th class="text-center">Pangkat </th>
              <th class="text-center">Jabatan</th>
              <th class="text-center">Unit Kerja</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            $No = 1; 
            foreach($dataskp as $dataskp) : ?>

            <tr>
             <td class="text-center"><?= $No++; ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->nama_yd) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->nip_yd) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->pangkat_yd) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->jabatan_yd) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->unitkerja_yd) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->nama_pp) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->nip_pp) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->pangkat_pp) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->jabatan_pp) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->unitkerja_pp) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->nama_app) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->nip_app) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->pangkat_app) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->jabatan_app) ?></td>
             <td class="text-center"><?php echo ucfirst ($dataskp->unitkerja_app) ?></td>

             <td class="text-center">
              <a class="badge badge-primary" href="<?=base_url('Dataskp/edit/id_dataskp/id_dataskp')?>"> <i class="fa  fa-edit" > </i> Edit </a><br>

              <a class="badge badge-danger" id="btn-hapus" href="<?=base_url('Dataskp/hapus/id_dataskp')?>"> <i class="fa fa-trash"> </i> Delete </a>

            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



