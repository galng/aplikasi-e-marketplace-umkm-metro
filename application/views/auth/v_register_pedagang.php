<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Pedagang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Registrasi Pedagang</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Silahkan Isi Form Registrasi</p>

      
      
      <?php 
      
      echo validation_errors('<div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>', '</div>');
      if ($this->session->flashdata('pesan')) {
        echo ' <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>';
        echo $this->session->flashdata('pesan');
        echo '</h5></div>';
    }
      
      echo form_open('pembeli/register'); ?>
        <div class="input-group mb-3">
          <input type="text" name="nama_pedagang" value="<?php set_value('nama_pedagang') ?>" class="form-control" placeholder="nama lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="nama_usaha" value="<?php set_value('nama_usaha') ?>" class="form-control" placeholder="Nama usaha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="jenis_usaha" value="<?php set_value('jenis_usaha') ?>" class="form-control" placeholder="Jenis usaha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="alamat" value="<?php set_value('alamat') ?>" class="form-control" placeholder="alamat">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="tel" maxlength="12" name="telepon" value="<?php set_value('telepon') ?>" class="form-control" placeholder="telepon">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
       
       
        
        </div>
        <div class="row">
          <div class="col-8">
          <p class="mb-3">
               <a href="login_user" class="text-center">Sudah Punya Akun</a>
          </p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close()  ?>
     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
<script>
  window.setTimeout(function() {$(".alert").fadeTo(500,0).slideUp(500,function () {$(this). remove();});},1000)
</script>
</body>
</html>