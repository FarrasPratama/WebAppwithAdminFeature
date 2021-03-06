<?php $this->load->view('header') ?>
<div class="head-bread">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="<?php echo base_url('produk') ?>">Produk</a></li>
      <li class="active">Sewa</li>
    </ol>
  </div>
</div>
<div class="container">
<?php echo $this->session->flashdata('msg'); ?>
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Data Jasa
      </div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Sewa</th>
              <th>Waktu</th>
              <th>tanggal Tanggal</th>
              <th>Subtotal</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = $this->cart->contents();
            if (!empty($data)) {
              $no = 1;
              foreach ($data as $k) {
                if ($k['waktu'] ==1) {
                  $nilai = "08.00 - 10.00";
                } elseif ($k['waktu'] ==2) {
                  $nilai = "10.00 - 12.00";
                } elseif ($k['waktu'] ==3) {
                  $nilai = "13.00 - 15.00";
                } elseif ($k['waktu'] ==4) {
                  $nilai = "15.00 - 17.00";
                } else {
                  $nilai = "19.00 - 21.00";
                }
                echo '<tr>';
                echo '<td>' . $no . '</td>';
                echo '<td>' . $k['name'] . '</td>';
                echo '<td>' . $nilai . '</td>';
                echo '<td>' . $k['tanggal'] . '</td>';
                echo '<td>' . $this->all_model->format_harga($k['subtotal']) . '</td>';
                echo '<td><a href="' . base_url('sewa/hapus/' . $k['rowid']) . '">Hapus</a></td>';
                echo '</tr>';
                $no++;
              }
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Total</th>
              <th><?php echo $this->all_model->format_harga($this->cart->total()); ?></th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="panel-footer">
        <a href="<?php echo base_url('sewa/simpan_sewa') ?>" class="btn btn-info pull-right">Selesai</a>
        <br><br>
        <!-- <a href="<?php echo base_url('produk') ?>" class="btn btn-primary">Sewa Lagi</a> -->

      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer') ?>