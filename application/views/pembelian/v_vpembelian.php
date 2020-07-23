<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pembelian
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_Pembelian'); ?>">Data Pembelian</a></li>
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
              <h3 class="box-title">Data Pembelian</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Nota Pembelian</th>
                  <th>Tgl Nota</th>
                  <th>Suplier</th>
                  <th>Jenis Pembayaran</th>
                  <th>Tgl Jatuh Tempo</th>
                  <th>Total Harga</th>
                  <th>Status Pembayaran</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($pembelian as $pembelian) { 
                    if($pembelian->status == "belum"){ ?>

                <tr style="color: red">

                    <?php } else { ?>
                      <tr>
                    <?php }
                    ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $pembelian->id_pembelian; ?></td>
                  <td><?php echo date('d-m-Y', strtotime($pembelian->tglnotapembelian));?></td>
                  <td><?php echo $pembelian->nama_toko;?></td>
                  <td><?php echo $pembelian->jenispembayaran; ?></td>
                  <td><?php echo date('d-m-Y', strtotime($pembelian->tgljatuhtempo)); ?></td>
                  <td>Rp. <?php echo number_format($pembelian->total,0,",","."); ?></td>
                  <td><?php echo $pembelian->status; ?></td>
                  
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('C_Pembelian/view/'.$pembelian->id_pembelian); ?>"><button type="button" class="btn btn-success">Lihat</button></a>
                      <a href="<?php echo site_url('C_Pembelian/edit/'.$pembelian->id_pembelian); ?>"><button type="button" class="btn btn-info">Cetak</button></a>
                      <a href="<?php echo site_url('C_Pembelian/retur/'.$pembelian->id_pembelian); ?>"><button type="button" class="btn btn-danger">Retur</button></a>
                      <?php if ($pembelian->status == 'belum') { ?>
                        
                      <a href="<?php echo site_url('C_Pembelian/bayar/'.$pembelian->id_pembelian); ?>"><button type="button" class="btn btn-primary">Bayar</button></a>
                      <?php } ?>
                    </div>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="<?php echo site_url('C_Pembelian/add'); ?>"><button type="button" class="btn btn-warning" >Tambah Data</button></a>
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