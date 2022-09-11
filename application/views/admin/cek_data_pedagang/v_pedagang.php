<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pedagang</h3>

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
                            <th>Nama Pedagang</th>
                            <th>Nama Usaha</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($pedagang as $key => $value) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $value->nama_pedagang ?></td>
                            
                            <td class="text-center"><?= $value->nama_usaha ?></td>
                            <td class="text-center"><?= $value->alamat?></td>
                            <td class="text-center"><?= $value->telepon?></td>
                            
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_pedagang ?>"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_pedagang ?>"><i class="fas fa-trash"></i></button>
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
              <h4 class="modal-title">Add Pedagang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <?php
                echo form_open('pedagang/add');
              ?>

                <div class="form-group">
                    <label>Nama Pedagang</label>
                    <input type="text" name="nama_pedagang" class="form-control" placeholder="Nama Pedagang" required>
                </div>
                <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama_usaha" class="form-control" placeholder="nama_usaha" required>
                </div>
                <div class="form-group">
                    <label>Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" class="form-control" placeholder="jenis_usaha" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>
                
                <div class="form-group">
                    <label>telepon</label>
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
<?php foreach ($pedagang as $key => $value) : ?>      
<div class="modal fade" id="edit<?= $value->id_pedagang ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Pedagang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <?php
                echo form_open('pedagang/edit/' . $value->id_pedagang);
              ?>

                <div class="form-group">
                    <label>Nama Pedagang</label>
                    <input type="text" name="nama_pedagang" value="<?= $value->nama_pedagang ?>" class="form-control" placeholder="Nama Pedagang" >
                </div>
                <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama_usaha" value="<?= $value->nama_usaha ?>" class="form-control" placeholder="Nama Usaha" >
                </div>
                <div class="form-group">
                    <label>Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" value="<?= $value->jenis_usaha ?>" class="form-control" placeholder="Jenis Usaha" >
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" placeholder="Alamat" >
                </div>
               
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" value="<?= $value->telepon ?>" class="form-control" placeholder="telepon" >
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
   <?php foreach ($pedagang as $key => $value) : ?>      
<div class="modal fade" id="delete<?= $value->id_pedagang ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama_pedagang ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Apakah Anda Yakin Ingin Menghapus Data Ini</h5>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('pedagang/delete/' . $value->id_pedagang) ?>" class="btn btn-primary">Delete</a>
            </div>

           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php endforeach ?>