
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><strong>Dinas PUPR</strong></a>
        
    <div id="sideNav" href="">
    <i class="fa fa-bars icon"></i> 
    </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <?php if($this->session->userdata('role') == 'atasan'){ ?>
                        <!-- <?php var_dump($id); ?> -->
                        <li>
                            <a class="<?= current_url() == base_url('atasan/dashboard') ? 'active-menu' : ''?>" href="<?= base_url('atasan/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a class="<?php if((current_url() == base_url('atasan/dataskp')) || (current_url() == base_url('atasan/dataskp/add_data_skp')) || (current_url() == base_url('atasan/dataskp/add_cover')) || (current_url() == base_url('atasan/dataskp/add_formulir')) || (current_url() == base_url('atasan/dataskp/add_pengukuran_capa')) || (current_url() == base_url('atasan/dataskp/add_prilaku_kerja')) || (current_url() == base_url('atasan/dataskp/add_penilaian_kerja')) || (current_url() == base_url('atasan/dataskp/add_spt')) ){ ?> active-menu <?php } ?>" href="<?= base_url('atasan/dataskp') ?>"><i class="fa fa-edit"></i> Data SKP</a>
                        </li>
                        <li>
                            <a class="<?= current_url() == base_url('atasan/useraktif') ? 'active-menu' : ''?>" href="<?= base_url('atasan/useraktif') ?>"><i class="fa fa-user"></i> User Aktif</a>
                        </li>
                        <li class="<?php if( (current_url() == base_url('atasan/masteruser'))           || 
                                             (current_url() == base_url('atasan/mastergolongan'))        || 
                                             (current_url() == base_url('atasan/masterjabatan'))         || 
                                             (current_url() == base_url('atasan/masterkaryawan'))        || 
                                             (current_url() == base_url('atasan/masteruser/add_user'))   ||
                                             (current_url() == base_url("atasan/masteruser/edit_user/$id")) 
                                            ) 
                                            {?> active <?php } ?>">
                            <a href="#"><i class="fa fa-sitemap"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="<?php if((current_url() == base_url('atasan/masteruser')) || (current_url() == base_url('atasan/masteruser/add_user')) || (current_url() == base_url("atasan/masteruser/edit_user/$id")) ){ ?> active-menu <?php } ?>" href="<?= base_url('atasan/masteruser') ?>"><i class="fa fa-plus-square"></i>User</a>
                                </li>
                                <li>
                                    <a class="<?= current_url() == base_url('atasan/mastergolongan') ? 'active-menu' : ''?>" href="<?= base_url('atasan/mastergolongan') ?>"><i class="fa fa-plus-square"></i>Golongan</a>
                                </li>
                                <li>
                                    <a class="<?= current_url() == base_url('atasan/masterjabatan') ? 'active-menu' : ''?>" href="<?= base_url('atasan/masterjabatan') ?>"><i class="fa fa-plus-square"></i>Jabatan</a>
                                </li>
                                <li>
                                    <a class="<?= current_url() == base_url('atasan/masterkaryawan') ? 'active-menu' : ''?>" href="<?= base_url('atasan/masterkaryawan') ?>"><i class="fa fa-plus-square"></i>Karyawan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="<?= current_url() == base_url('auth/logout') ? 'active-menu' : ''?>" href="<?= base_url('auth/logout')  ?>"><i class="fa fa-arrow-down"></i> Logout </a>
                        </li>
                    <?php } ?>

                    <?php if($this->session->userdata('role') == 'penilai'){ ?>
                        <li>
                            <a class="<?= current_url() == base_url('penilai/dashboard') ? 'active-menu' : ''?>" href="<?= base_url('penilai/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a class="<?= current_url() == base_url('penilai/dataskp') ? 'active-menu' : ''?>" href="<?= base_url('penilai/dataskp') ?>"><i class="fa fa-edit"></i> Data SKP</a>
                        </li> 
                        <li>
                            <a class="<?= current_url() == base_url('auth/logout') ? 'active-menu' : ''?>" href="<?= base_url('auth/logout')  ?>"><i class="fa fa-arrow-down"></i> Logout </a>
                        </li>
                    <?php } ?>
                    
                    <?php if($this->session->userdata('role') == 'pegawai'){ ?>
                        <li>
                            <a class="<?= current_url() == base_url('pegawai/dashboard') ? 'active-menu' : ''?>" href="<?= base_url('pegawai/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a class="<?= current_url() == base_url('auth/logout') ? 'active-menu' : ''?>" href="<?= base_url('auth/logout')  ?>"><i class="fa fa-arrow-down"></i> Logout </a>
                        </li>
                    <?php } ?>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->