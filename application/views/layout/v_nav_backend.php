<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
   
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_lengkap') ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <?php
               if ($this->session->userdata('level_user') == '1' )  { ?>
                 
                <li class="nav-item">
                <a href="<?= base_url('admin') ?>" class="nav-link  
                  <?php 
                      if ($this->uri->segment(1) == 'admin'
                    ) {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
         
                <li class="nav-item">
                  <a href="<?= base_url('pedagang') ?>" class="nav-link 
                  <?php 
                      if ($this->uri->segment(1) == 'pedagang'
                    ) {
                        echo 'active';
                    } ?>">
                    
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                       Data Pedagang
                    </p>
                  </a>
                </li>
              
         
                <li class="nav-item">
                  <a href="<?= base_url('cek_pembeli') ?>" class="nav-link 
                  <?php 
                      if ($this->uri->segment(1) == 'cek_pembeli'
                    ) {
                        echo 'active';
                    } ?>">
                    
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                       Data Pembeli
                    </p>
                  </a>
                </li>
              
                <li class="nav-item">
                  <a href="<?= base_url('user') ?>" class="nav-link <?php 
                      if ($this->uri->segment(1) == 'user'
                    ) {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Data User
                    </p>
                  </a>
                </li>
               
               
                
                <li class="nav-item">
                  <a href="<?= base_url('cek_konfirmasi') ?>" class="nav-link  
                  <?php 
                      if ($this->uri->segment(1) == 'cek_konfirmasi'
                    ) {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fas fa-inbox"></i>
                    <p>
                      Data Konfirmasi
                    </p>
                  </a>
                </li>

              <?php } 
               ?>

              <?php
               if ($this->session->userdata('level_user') == '2' )  { ?>
                 
                <li class="nav-item">
                <a href="<?= base_url('pedagng') ?>" class="nav-link  
                  <?php 
                      if ($this->uri->segment(1) == 'pedagng'
                    ) {
                        echo 'active';
                    } ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                <a href="<?= base_url('stok_barang') ?>" class="nav-link  
                <?php 
                    if ($this->uri->segment(1) == 'stok_barang'
                  ) {
                      echo 'active';
                  } ?>">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>
                    Stok Barang
                  </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?= base_url('konfirmasi') ?>" class="nav-link  
                <?php 
                    if ($this->uri->segment(1) == 'konfirmasi'
                  ) {
                      echo 'active';
                  } ?>">
                  <i class="nav-icon fas fa-download"></i>
                  <p>
                    Konfirmasi
                  </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?= base_url('chat_realtime') ?>" class="nav-link  
                <?php 
                    if ($this->uri->segment(1) == 'chat_realtime'
                  ) {
                      echo 'active';
                  } ?>">
                  <i class="nav-icon fas fa-comment"></i>
                  <p>
                    Chat
                  </p>
                </a>
              </li>

              <?php }
              ?>

               
        
          
          <li class="nav-item">
            <a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                 Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">


        