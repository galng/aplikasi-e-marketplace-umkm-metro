<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                

                <div class="card-tools">
                  
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
                
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Pedagang</th>
                            <th>Nama Usaha</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            
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
                              <a href="https://api.whatsapp.com/send?phone=+62<?= $value->telepon ?>" class="btn btn-primary btn-sm"><i class="fa fa-paper-plane"></i> Kirim Pesan</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>
</div>
</div>

