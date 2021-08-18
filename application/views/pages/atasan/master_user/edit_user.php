<div id="page-wrapper">
	<div class="header"> 
        <h1 class="page-header">
            Tambah User
        </h1>
        <!-- <div class="col-md-12">
            <div class="row"> -->
                <div class="col-12" style="margin-top: 10px; background: white; min-height: 350px">
                <div class="row">
                <div class="col-md-12" style="margin-top: 50px; padding-left: 50px; padding-right:50px">
                    <?php foreach($user as $u){ ?>
                        <form method="post" action="<?= base_url('atasan/masteruser/update')?>">
                            <input type="hidden" value="<?php echo $u->id?>" name="id"/>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Nama</b>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $u->name?>" placeholder="Masukan Nama" require></input>
                                </div>
                                <div class="col-md-4">
                                    <b>Username </b>
                                    <input type="text" value="<?php echo $u->username?>" name="username" class="form-control" placeholder="Masukan Username"></input>
                                </div>
                                <div class="col-md-4">
                                    <b>password</b>
                                    <input type="text" name="pass" class="form-control" placeholder="Masukan Password"></input>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>Nip </b>
                                    <input type="text" value="<?php echo $u->nip?>" name="nip" class="form-control" placeholder="Masukan Nip"></input>
                                </div>
                                <div class="col-md-4">
                                    <b>Golongan </b>
                                    <select class="form-control" id="golongan" name="golongan">
                                        <?php foreach($golongan as $item) { ?>
                                            <option value="<?php echo $item->id ?>" <?php if($item->name == $u->id_golongan){?> selected<?php }?>><?php echo $item->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <b>Jabatan </b>
                                    <select class="form-control" id="jabatan" name="jabatan">
                                        <?php foreach($jabatan as $item) { ?>
                                            <option value="<?php echo $item->id ?>" <?php if($item->id == $u->id_jabatan){?> selected<?php }?>><?php echo $item->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <b>email</b>
                                    <input type="text" name="email" value="<?php echo $u->email?>" class="form-control" placeholder="Masukan Email"></input>
                                </div>
                                
                                <div class="col-md-4">
                                    <b>No Hp</b>
                                    <input type="text" name="no_hp" value="<?php echo $u->no_hp?>" class="form-control" placeholder="Masukan No Hp"></input>
                                </div>
                                <div class="col-md-4">
                                    <b>Role</b>
                                    <select class="form-control" id="role" name="role">
                                        <?php foreach($role as $item) { ?>
                                            <option value="<?php echo $item->name ?>" <?php if($item->name == $u->role){?> selected<?php }?> ><?php echo $item->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            
                            <div class="row">
                                <div class="col-12" style="text-align: center">
                                    <button type="reset" class="btn btn-danger">
                                    <i class=" fa fa-trash-alt"></i> <a href="<?= base_url('atasan/masteruser') ?>" style="text-decoration: none; color:white">Batal</a> </button>
                                    <button type="submit" class="btn btn-success">
                                    <i class=" fa fa-save"></i> Save </button>
                                </div>
                            </div>
                        </form>
                    <?php }?>
                    </div>
                </div>
                </div>
            <!-- </div>
        </div> -->
    </div>
</div>