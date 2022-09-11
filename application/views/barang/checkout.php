 <!-- Main content -->
 <div class="container-fluid">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-shopping-cart"></i>Check Out
                    <small class="float-right">Date: <?= date('d-m-Y') ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
               
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Nama Barang</th>
                      <th>Harga</th>
                      <th>Total Harga</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                        <?php foreach ($this->cart->contents() as $items) : ?>
                    <tr>
                    <td><?= $items['qty'] ?></td>
                    <td><?= $items['name'] ?></td>
                    <td >Rp. <?= number_format($items['price'],0) ?></td>
                    <td >Rp. <?= number_format($items['subtotal'], 0,',','.') ?></td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <?php
                 //notifikasi form kosobng
                 echo validation_errors('<div class="alert alert-info alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h5><i class="icon fas fa-info"></i>','</h5></div>');

                ?>
              
              <?php echo form_open('checkout');
              $no_order= date('Ymd') . strtoupper(random_string('alnum',8));
             
               ?>
              
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-sm-7 invoice-col">
                    
                  <b>Tujuan : </b>
                  <p>
                    <div class="col-sm-10">
                         <div class="form-group">
                         <label>Alamat</label>
                             <input  name="alamat" class="form-control" required>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group">
                             <label>Nama Penerima</label>
                             <input name="penerima" class="form-control" required>
                         </div>
                     </div>
                    <div class="col-sm-6">
                         <div class="form-group">
                             <label>Telepon Penerima</label>
                             <input name="telepon_penerima" class="form-control" required>
                         </div>
                     </div>
                     </p>
                 
                </div>
              
                <!-- /.col -->
                <div class="col-4">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <br>
                      <tr >
                        <th>Total Bayar :</th>
                        <td>Rp. <?= number_format($this->cart->total(), 0,',','.' ) ?></td>
                      </tr>
                      
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Simpan Transaksi -->
              <input name="no_order" value="<?= $no_order ?>" hidden>
              <input name="total_bayar" value="<?= $this->cart->total() ?>" hidden>

              <!-- Simpan rinci Transaksi -->
              <?php
              $i=1;
              foreach ($this->cart->contents() as $items) {
                echo form_hidden('qty'.$i++,$items['qty']);
              }
              ?>
              <div class="row no-print">
                <div class="col-10">
                  <a href="<?= base_url('keranjang') ?>" class="btn btn-warning"><i class="fas fa-backward "></i> Kembali Ke Keranjang</a>
                  
                  <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-shopping-cart"></i> Proses Checkout
                  </button>
                </div>
              </div>
              <?php echo form_close() ?>
            </div>