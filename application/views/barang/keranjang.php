

<div class="container-fluid">
    
    
    <h4>
        <?php echo form_open('keranjang/update') ?>
        <table class="table table boardered table-striped table-hover">
             <tr>
                 <th>Qty</th>
                 <th>Nama Barang</th>
                 <th style="text-align:right">Harga</th>
                 <th style="text-align:right">Sub-Total</th>
                 <th style="text-align:center">Action</th>
             </tr>

             <?php $i=1; ?>
             <?php foreach ($this->cart->contents() as $items) : ?>
                <tr>
                    <td><?php echo form_input(array(
                        'name' => $i. '[qty]',
                        'value' => $items['qty'],
                        'maxlength'=> '3',
                        'min'=> '0',
                        'size' => '5',
                        'type' => 'text',
                        'class'=> 'form-control'
                    )
                    ); ?></td>
                    <td><?= $items['name'] ?></td>
                    <td style="text-align:right">Rp. <?= number_format($items['price'],0) ?></td>
                    <td style="text-align:right">Rp. <?= number_format($items['subtotal'], 0,',','.') ?></td>
                    <td style="text-align:center">
                    <a href="<?= base_url('keranjang/delete/' .$items['rowid']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
              
             <?php endforeach; ?>
             
                <tr>
                    <td colspan="3"></td>
                    <td style="text-align:right">Rp. <?= number_format($this->cart->total(), 0,',','.' ) ?></td>
                </tr>
        </table>
    </h4>
    <br>
    <a href="<?= base_url('barang') ?>" class="btn btn-warning"><i class="fas fa-backward "></i> Kembali Belanja</a>
    <!-- <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Update</button> -->
    <a href="<?= base_url('checkout')?>" class="btn btn-success btn-flat"><i class="fa fa-check"></i> Check Out</a>
    
    <?php echo form_close() ?>
</div>