<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pembeli</h3>

                <div class="card-tools">
                  <button data-toggle="modal" data-target="#add" type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  
              <?php 

                if ($this->session->flashdata('pesan')) {
                    echo ' <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</h5></div>';
                }
              ?>

                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th>NIK</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($cek_pembeli as $key => $value) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $value->nama?></td>
                            <td class="text-center"><?= $value->email ?></td>
                            <td class="text-center"><?= $value->password ?></td>
                            <td class="text-center"><?= $value->alamat ?></td>
                            <td class="text-center"><?= $value->NIK ?></td>
                            <td class="text-center"><?= $value->telepon ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_pembeli ?>"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_pembeli ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

<!-- ini Modal Add -->
<div class="modal fade" id="add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Pembeli</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <?php
                echo form_open('cek_pembeli/add');
              ?>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Pasword</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                
                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="NIK" class="form-control" placeholder="Nomor Induk Kependudukan" required>
                </div>
                
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon" required>
                </div>
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>

            <?php
                echo 
                form_close();
              ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <!-- ini Modal Edit -->
<?php foreach ($cek_pembeli as $key => $value) : ?>      
<div class="modal fade" id="edit<?= $value->id_pembeli ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Pembeli</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
                echo form_open('cek_pembeli/edit/' . $value->id_pembeli);
              ?>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= $value->nama ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?= $value->email ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pasword</label>
                    <input type="password" name="password" value="<?= $value->password ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control">
                </div> <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="NIK" value="<?= $value->NIK ?>" class="form-control">
                </div> <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" value="<?= $value->telepon ?>" class="form-control">
                </div>
               
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>

            <?php
                echo 
                form_close();
              ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php endforeach ?>

   <!-- ini Modal hapus -->
   <?php foreach ($cek_pembeli as $key => $value) : ?>      
<div class="modal fade" id="delete<?= $value->id_pembeli ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Apakah Anda Yakin Ingin Menghapus Data Ini</h5>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('cek_pembeli/delete/' . $value->id_pembeli) ?>" class="btn btn-primary">Delete</a>
            </div>

           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php endforeach ?>