<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Stok Barang</h3>
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

                <table class="table table-bordered" id="">
                    <thead class="text-center">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga</th>
                            <th>Nama Toko</th>
                            <th>Alamat Toko</th>
                            <th>Telepon</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($stok_barang as $key => $value) : ?>
                        <tr>
                            <td class="text-center" hidden><?= $no++; ?></td>
                            <td class="text-center"><?= $value->kode_barang ?></td>
                            <td><?= $value->nama_barang ?></td>
                            <td class="text-center"><?= $value->jumlah_barang ?></td>
                            <td class="text-center">Rp.<?= number_format($value->harga,0)  ?></td>
                            <td><?= $value->nama_usaha ?></td>
                            <td><?= $value->alamat_toko ?></td>
                            <td><?= $value->telepon ?></td>
                            <td class="text-center"><img src="<?= base_url('assets/gambar/'. $value->gambar) ?>" width="150px" alt=""></td>
                            <td><?= $value->deskripsi ?></td>
                            <td>
                               <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_barang ?>"><i class="fas fa-pen"></i></button>
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
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">tambah barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
               
              <?php
                echo form_open('stok_barang/add');
              ?>

                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
                </div>
                <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang" required>
                </div>
                <div class="form-group">
                    <label>harga</label>
                    <input type="text" name="harga" class="form-control" placeholder="harga" required>
                </div>
                <div class="form-group">
                    <label>Nama Toko</label>
                    <input type="text" name="nama_usaha" class="form-control" placeholder="nama toko" required>
                </div>
                <div class="form-group">
                    <label>Alamat Toko</label>
                    <input type="text" name="alamat_toko" class="form-control" placeholder="Alamat Toko" required>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon" required>
                </div>

                <div class="row">
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="preview_gambar" required>
                      </div>
                      </div>
                    </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" required>
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

  
         



 <!-- ini Modal Add -->
 <?php foreach ($stok_barang as $key => $value) : ?> 
<div class="modal fade" id="edit<?= $value->id_barang ?>">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Stok Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <?php
                echo form_open('stok_barang/edit/'.$value->id_barang);
              ?>
                <div class="form-group">
                  <label>Kode Barang</label>
                        <input name="kode_barang" disabled class="form-control" placeholder="Kode Barang" value="<?= $value->kode_barang ?>">
                  
                  </div>
                  <div class="form-group">
                        <label>Nama Barang</label>
                        <input name="nama_barang" disabled class="form-control" placeholder="Nama Barang" value="<?= $value->nama_barang ?>">
                      </div>
                  
                  <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input name="jumlah_barang" type="number" class="form-control" placeholder="Jumlah Barang" value="<?= $value->jumlah_barang ?>">
                      </div>
                    
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input name="harga" disabled class="form-control" placeholder="harga" value="<?= $value->harga?>">
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Toko </label>
                        <input name="nama_usaha" disabled class="form-control" value="<?= $value->nama_usaha ?>">
                      </div>

                  <div class="form-group">
                        <label>Alamat Toko</label>
                        <input name="alamat_toko" disabled class="form-control" placeholder="alamat toko" value="<?= $value->alamat_toko ?>">
                      </div>
                  
                  <div class="form-group">
                        <label>Telepon</label>
                        <input name="telepon" disabled class="form-control" placeholder="telepon" value="<?= $value->telepon ?>">
                      </div>
                
                    <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <input name="deskripsi" disabled class="form-control" placeholder="Deskripsi" value="<?= $value->deskripsi ?>">
                      </div>
                      
                      <div class="row">
                      <div class="form-group">
                        <label>Gambar</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <img src="<?= base_url('assets/gambar/'.$value->gambar) ?>" id="gambar_load" width="400px">
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

