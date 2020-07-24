<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Retur Penjualan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_returpenjualan'); ?>">Data Retur Penjualan</a></li>
        <li class="active">Lihat Data</li>
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

            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nota Retur</th>
                  <th>Nota Penjualan</th>
                  <th>Tanggal Retur</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat</th>
                  <th>Barang</th>
                  <th>Satuan</th>
                  <th>Jenis Barang</th>
                  <th>Qtt Jual</th>
                  <th>Qtt Retur</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($returpenjualan as $returpenjualan) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $returpenjualan->id_returpenjualan ?></td>
                  <td><?php echo $returpenjualan->id_penjualan;?></td>
                  <td><?php echo $returpenjualan->tanggalretur;?></td>
                  <td><?php echo $returpenjualan->nama; ?></td>
                  <td><?php echo $returpenjualan->alamat;?></td>
                  <td><?php echo $returpenjualan->barang;?></td>
                  <td><?php echo $returpenjualan->satuan; ?></td>
                  <td><?php echo $returpenjualan->jenisbarang;?></td>
                  <td><?php echo $returpenjualan->qtt;?></td>
                  <td><?php echo $returpenjualan->jumlahretur; ?></td>
                  <td><?php echo $returpenjualan->ketretur;?></td>
                  
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('C_returpenjualan/view/'.$returpenjualan->id_returpenjualan); ?>"><button type="button" class="btn btn-success">Lihat</button></a>
                      <a href="<?php echo site_url('C_returpenjualan/edit/'.$returpenjualan->id_returpenjualan); ?>"><button type="button" class="btn btn-info">Cetak</button></a>
                      <!-- <a href="<?php echo site_url('C_returpenjualan/hapus/'.$pembelian->id_suratjalan); ?>"><button type="button" class="btn btn-danger">Retur</button></a> -->
                    </div>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="<?php echo site_url('C_returpenjualan/add'); ?>"><button type="button" class="btn btn-warning" >Tambah Data</button></a>
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