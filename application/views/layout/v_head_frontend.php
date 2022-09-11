<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul> 
    <div>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <?php $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). ' items' ?>
        <?php echo anchor('keranjang', $keranjang)?>
      </li>
    </ul>
    </div>


  </nav>
  </div>
</body>  
  <!-- /.navbar -->