<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Stok Retur
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_Stok/Retur'); ?>">Data Stok Retur</a></li>
        <li class="active">Lihat Stok Retur</li>
      </ol>
    </section>
    <div class="box-body">
    <?php if ($this->session->flashdata('SUCCESS')) { ?>
       <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i> Success!</h5>
          Data berhasil di perbarui.
        </div>                 
      <?php } ?>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Stok Retur</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th rowspan="2" style="text-align: center;">No</th>
                  <th rowspan="2" style="text-align: center;">Id Barang</th>
                  <th rowspan="2" style="text-align: center;">Nama Barang</th>
                  <th rowspan="2" style="text-align: center;">Jenis Barang</th>
                  <th colspan="2" style="text-align: center;">Stok Retur</th>
                  <th colspan="2" style="text-align: center;">Konversi Retur</th>
                </tr>
                <tr>

                  <th style="text-align: center;">Stok</th>
                  <th style="text-align: center;">Satuan</th>
                  <th style="text-align: center;">Stok</th>
                  <th style="text-align: center;">Satuan</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($barang as $barang) { 

                    $qttk = $barang->qttkonversi;
                    $a = $barang->stokretur;
                    $b = $a/$qttk;?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $barang->id_barang; ?></td>
                  <td><?php echo $barang->barang;?></td>
                  <td><?php echo $barang->jenisbarang;?></td>
                  <td><?php echo number_format($b,2); ?></td>
                  <td><?php echo $barang->nama_satuan; ?></td>
                  <td><?php echo $barang->stokretur; ?></td>
                  <td><?php echo $barang->satuan_konversi; ?></td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>