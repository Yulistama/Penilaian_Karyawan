<link hreef="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Data SKP
        </h1>
        <div class="col-md-12">
            <div class="row" style="background: white; padding: 10px">
                <div class="col" style="margin-bottom: 20px; margin-top:10px"><a class="btn btn-sm btn-success mb-3" href="<?= base_url('atasan/dataskp/add_data_skp')?>" style="padding: 10px 15px"><i class="fa fa-plus"></i> Tambah Data </a></div>
                <div class="col">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Pangkat/Gol</th>
                                <th>Jabatan</th>
                                <th>Unit Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach($data_skp as $item){ 
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $item->nama_dinilai ?></td>
                            <td><?php echo $item->nip_dinilai ?></td>
                            <td><?php echo $item->pangkat_dinilai ?></td>
                            <td><?php echo $item->jabatan_dinilai ?></td>
                            <td><?php echo $item->unit_kerja_dinilai ?></td>
                            
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/w/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/datatables.min.js"></script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>