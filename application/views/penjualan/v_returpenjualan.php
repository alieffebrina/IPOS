<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Retur Penjualan
        <!-- <small>Stok Opname</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Transaksi Penjualan</a></li>
        <li><a href="<?php echo site_url('C_returpenjualan/'); ?>">Data Retur Penjualan</a></li>>
        <li class="active">Lihat Data Retur Penjualan</li>
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
              <h3 class="box-title">Data Retur Penjualan</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Retur</th>
                  <th>Nota Penjualan</th>
                  <th>Id Barang</th>
                  <th>Nama Barang</th>
                  <th>Quantity</th>
                  <th>Quantity Retur</th>
                  <th>Harga</th>
                  <th>Total</th>
                  <th>Keterangan/th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($returpenjualan as $returpenjualan) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $returpenjualan->tanggal; ?></td>
                  <td><?php echo $returpenjualan->id_penjualan;?></td>
                  <td><?php echo $returpenjualan->id_barang;?></td>
                  <td><?php echo $returpenjualan->barang; ?></td>
                  <td><?php echo $returpenjualan->qtt; ?></td>
                  <td><?php echo $returpenjualan->qttretur; ?></td>
                  <td><?php echo $returpenjualan->harga; ?></td>
                  <td><?php echo $returpenjualan->total; ?></td>
                  <td><?php echo $returpenjualan->Keterangan; ?></td>
                  <td><?php if($preturpenjualan->status == '1'){ echo "Retur";} else {echo "Pending"; }?></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('C_returpenjualan/terkirimretur/'.$penjualan->id_returpenjualan.'/'.$penjualan->id_idpenjualan.'/'.$penjualan->id_barang.'/'.$penjualan->qttretur); ?>"><button type="button" class="btn btn-success">Terkirim</button></a>
                    </div>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="<?php echo site_url('C_returpenjualan/add'); ?>"><button type="button" class="btn btn-warning" >Tambah Barang</button></a>
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