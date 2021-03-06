<?php $this->load->view('header') ?>
<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url('produk')?>">Produk</a></li>
        </ol>
    </div>
</div>

<div class="products-gallery">
<div class="shop-grid">
    <div class="container">

        <?php ;if (!empty($produk)) {
          foreach ($produk as $key => $p) {
            echo '
            <div class="col-md-4 grid-stn simpleCart_shelfItem">
              <div class="ih-item square effect3 bottom_to_top">
                  <div class="bottom-2-top">
                  
                      <div class="img"><img src="'.base_url('upload/'.$p->gambar).'" alt="/" height="200" width="300"></div>
                  <div class="info">
                      <div class="pull-left styl-hdn">
                          <h3>'.$p->nama_produk.'</h3>
                      </div>
                      <div class="pull-right styl-price">
                        <p><a  href="#" class="item_add"><span class=" item_price">'.$this->all_model->format_harga($p->harga).'</span></a></p>
                      </div>
                      <div class="clearfix"></div>
                  </div></div>
              </div>
              <div class="quick-view">
                  <a href="'.base_url('produk/detail/'.$p->produk_id).'">Detail</a>
              </div>
            </div>';
          }
        } ?>
        <div class="clearfix"></div>
    </div>
    <br>
</div>
  <div class="clearfix"></div>
  </div>

   </div>
</div>

<?php $this->load->view('footer') ?>
