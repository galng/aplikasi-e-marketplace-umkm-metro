<div class="row">
  <div class="col-sm-6">
   <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Nomer Rekening Toko</h3>
          </div>
          <div class="form-group">
                    <p>Silahkan Transfer Uang Ke Nomer Rekening Di Bawah Ini Sebesar :<h1 class="text-primary">Rp. <?= number_format($pesanan->total_bayar, 0,',','.') ?></h1></p><br>
                  <table class="table">
                    <tr>
                      <th>Bank</th>
                      <th>No Rekening</th>
                      <th>Atas Nama</th>
                    </tr>
                    <?php foreach ($rekening as $key => $value) : ?>
                      <tr>
                        <td><?= $value->nama_bank ?></td>
                        <td><?= $value->no_rek ?></td>
                        <td><?= $value->atas_nama ?></td>
                    </tr>
                    <?php endforeach ?>
                  
                  </table>
                  </div>
          <div class="card-body">
          </div>
    </div>
  </div>
        <div class="col-sm-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Bukti Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('pesanan_saya/bayar/'.$pesanan->id_transaksi) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Atas Nama</label>
                    <input name="atas_nama" class="form-control" placeholder="Atas Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bank</label>
                    <input name="nama_bank" class="form-control" placeholder="Nama Bank" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Rek</label>
                    <input name="no_rek" class="form-control" placeholder="Nomer Rekening" required>
                  </div>
                  <div class="form-group">
                    <label >Bukti Bayar</label>
                        <input type="file" name="bukti_bayar" class="form-control" required>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             <?php echo form_close() ?>

            </div>
  </div>
  
</div>