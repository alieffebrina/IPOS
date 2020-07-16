<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Stok Opname
        <!-- <small>Stok Opname</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_Stok/so'); ?>">Data  Stok Opname</a></li>>
        <li class="active">Lihat Data  Stok Opname</li>
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
              <h3 class="box-title">Data Stok Opname</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Stok Opname</th>
                  <th>Id Barang</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Stok Awal</th>
                  <th>Satuan</th>
                  <th>Stok Opname</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($barang as $barang) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $barang->tgl_stokopname; ?></td>
                  <td><?php echo $barang->id_barang;?></td>
                  <td><?php echo $barang->barang;?></td>
                  <td><?php echo $barang->jenisbarang;?></td>
                  <td><?php echo $barang->stok; ?></td>
                  <td><?php echo $barang->nama_satuan; ?></td>
                  <td><?php echo $barang->stokskrg; ?></td>
                  <td><?php if($barang->status == '1'){ echo "aprove";} else {echo "pending"; }?></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('C_Stok/aproveso/'.$barang->id_stokopname.'/'.$barang->id_barang.'/'.$barang->stokskrg); ?>"><button type="button" class="btn btn-success">Aprove</button></a>
                    </div>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
              <a href="<?php echo site_url('C_barang/add'); ?>"><button type="button" class="btn btn-warning" >Tambah Barang</button></a>
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