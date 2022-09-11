

<?php  if ($this->session->userdata('level_user') == '1' )  { ?>

<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total_pedagang ?></h3>

                <p>Cek Data Pedagang</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= base_url('pedagang') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_pembeli?></h3>

                <p>Cek Data Pembeli</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= base_url('cek_pembeli') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $total_user?></h3>

                <p>Cek User</p>
              </div>
              <div class="icon">
                <i class="fas fa-comment"></i>
              </div>
              <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $total_pembeli?></h3>

                <p>Cek Data Konfirmasi</p>
              </div>
              <div class="icon">
                <i class="fas fa-list"></i>
              </div>
              <a href="<?= base_url('cek_pembeli') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        <?php } ?>