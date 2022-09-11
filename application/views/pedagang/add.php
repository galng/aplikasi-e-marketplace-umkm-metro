<!-- general form elements disabled -->
<div class="col-md-12">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form add stok</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php 
                  //notifikasi form kosobng
                  

                  echo form_open_multipart('stok_barang/edit/'.$stok_barang->id_barang) ?>
                  <div class="form-group">
                  <label>Kode Barang</label>
                        <input name="kode_barang" disabled class="form-control" placeholder="Kode Barang" value="<?= $stok_barang->kode_barang ?>">
                  
                  </div>
                  <div class="form-group">
                        <label>Nama Barang</label>
                        <input name="nama_barang" disabled class="form-control" placeholder="Nama Barang" value="<?= $stok_barang->nama_barang ?>">
                      </div>
                  
                  <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input name="jumlah_barang" type="number" class="form-control" placeholder="Jumlah Barang" value="<?= $stok_barang->jumlah_barang ?>">
                      </div>
                    
                      <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input name="harga" disabled class="form-control" placeholder="harga" value="<?= $stok_barang->harga?>">
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Toko </label>
                        <input name="nama_usaha" disabled class="form-control" value="<?= $stok_barang->nama_usaha ?>">
                      </div>

                  <div class="form-group">
                        <label>Alamat Toko</label>
                        <input name="alamat_toko" disabled class="form-control" placeholder="alamat toko" value="<?= $stok_barang->alamat_toko ?>">
                      </div>
                  
                  <div class="form-group">
                        <label>Telepon</label>
                        <input name="telepon" disabled class="form-control" placeholder="telepon" value="<?= $stok_barang->telepon ?>">
                      </div>
                
                    <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <textarea name="deskripsi" disabled class="form-control" cols="30" placeholder="Deskripsi" rows="10"><?= $stok_barang->deskripsi ?></textarea>
                      </div>
                      
                      <div class="row">
                      <div class="form-group">
                        <label>Ganti Gambar</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <img src="<?= base_url('assets/gambar/'.$stok_barang->gambar) ?>" id="gambar_load" width="400px">
                    </div>
                      
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('stok_barang') ?>" class="btn btn-success btn-sm">Kembali</a>
                    </div>
                  </div>



                  <?php echo form_close() ?>
              </div>
    </div>
</div>

<script>
  function bacaGambar(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#gambar_load') .attr ('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $('#review_gambar').change(function () {
    bacaGambar(this);
  })
</script>

