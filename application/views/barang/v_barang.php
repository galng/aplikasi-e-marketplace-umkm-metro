
   
        <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">

        
          <?php foreach ($barang as $key => $value) : ?>
            
          <div class="col-12 col-sm-4 col-md-4 d-flex align-items-stretch" >
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                <h3><b><?= $value->nama_barang ?></b></h3>
               
                <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <?= $value->nama_usaha ?> 
                              
                              </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg"></i></span><b>Stok Barang :</b> <?= $value->jumlah_barang ?></li>
                       </ul> 
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                  
                    <div class="col-12 col-sm-4 col-md-4 d-flex align-items-stretch">
                      <img src="<?= base_url('assets/gambar/'.$value->gambar) ?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                
                        
                <div class="card-footer">
                  <div class="row">
                    <div class="col sm-6">
                     <div class="text-left">
                     <span class="btn btn-sm btn-warning"><b>Rp.<?= number_format($value->harga,0)  ?></b> </span>
                      </div>
                       </div>
              
                        <a href="https://api.whatsapp.com/send?phone=+62<?= $value->telepon ?>" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"> </i> Pesan</a>  
                      
                <div class="col sm-6">

                  <?php echo anchor('barang/add_keranjang/'.$value->id_barang,'
                    <div class="text-right">
                    <button class="btn btn-primary btn-sm" >
                      <i class="fas fa-cart-plus"> Add</i>
                    </button>
                  </div>
                  ') ?>
                    
                  </div>
                  </div>
                
                </div>
              </div>
            </div>
            
            <?php endforeach ?>
          </div>
        </div>
      </div>
            
      <!-- <script src="template/plugins/sweetalert2/sweetalert2.min.js"></script>
      <script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Barang Berhasil Ditambahkan ke Keranjang..'
      })
    });
  });
    </script>

  -->