<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cek Konfirmasi</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
  

                <table class="table table-bordered" id="example1">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>No Order</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($cek_konfirmasi as $key => $value) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $value->no_order?></td>
                            <td class="text-center"><?= $value->id_barang ?></td>
                            <td class="text-center"><?= $value->qty ?></td>
                            
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

