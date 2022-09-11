<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('pembeli') ?>" class="brand-link">
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('') ?>template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="nav-link" class="d-block"><?= $this->session->userdata('nama') ?></a>
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

          
              
                 
                <li class="nav-item">
                <a href="<?= base_url('pembeli') ?>" class="nav-link  
                  <?php 
                      if ($this->uri->segment(1) == 'pembeli'
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
                 <a href="<?= base_url('barang') ?>" class="nav-link  
                 <?php 
                if ($this->uri->segment(1) == 'barang'
                ) {
                  echo 'active';
                } ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Daftar Barang
              </p>
            </a>
          </li>
          
               <li class="nav-item">
                 <a href="<?= base_url('keranjang') ?>" class="nav-link  
                 <?php 
                if ($this->uri->segment(1) == 'keranjang'
                ) {
                  echo 'active';
                } ?>">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Keranjang Belanja
              </p>
            </a>
          </li>
          
           
          
          <li class="nav-item ">
            
                 <a href="<?= base_url('checkout') ?>" class="nav-link  
                 <?php 
                if ($this->uri->segment(1) == 'checkout'
                ) {
                  echo 'active';
                } ?>">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                CheckOut
              </p>
            </a>

          </li>

          <li class="nav-item ">
            
                 <a href="<?= base_url('pesanan_saya') ?>" class="nav-link  
                 <?php 
                if ($this->uri->segment(1) == 'pesanan_saya'
                ) {
                  echo 'active';
                } ?>">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Pesanan Saya
              </p>
            </a>

          </li>
          
      
          <li class="nav-item">
            <a href="<?= base_url('pembeli/logout') ?>" class="nav-link">
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
            <h1 class="m-0"></h1>
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


        