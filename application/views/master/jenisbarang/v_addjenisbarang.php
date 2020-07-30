<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jenis Barang
        <small>Tambah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_jenisbarang'); ?>">Data Jenis Barang</a></li>>
        <li class="active">Tambah Data Jenis Barang</li>
      </ol>
    </section>

    <div class="box-body">
    <?php if ($this->session->flashdata('Sukses')) { ?>
       <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i> Sukses!</h5>
          Data Berhasil Ditambahkan.
        </div>                 
      <?php } ?>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Jenis Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_jenisbarang/tambah')?>"  id='formjenisbarang'>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="jenisbarang" name="jenisbarang" placeholder="Nama Jenis Barang">
                  </div>
                </div>
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <a href="<?php echo site_url('C_barang/index'); ?>" class="btn btn-default">Batal</a>
                    <button type="submit" class="btn btn-info">Simpan Data</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>


      <div class="row">
         <form class="form-horizontal" method="POST" action="<?php echo site_url('C_jenisbarang')?>">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis Barang</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($jenisbarang as $jenisbarang) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $jenisbarang->jenisbarang; ?></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('C_jenisbarang/view/'.$jenisbarang->id_jenisbarang); ?>"><button type="button" class="btn btn-success">Lihat</button></a>
                      <a href="<?php echo site_url('C_jenisbarang/edit/'.$jenisbarang->id_jenisbarang); ?>"><button type="button" class="btn btn-info">Edit</button></a>
                      <a href="<?php echo site_url('C_jenisbarang/hapus/'.$jenisbarang->id_jenisbarang); ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                    </div>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- <a href="<?php echo site_url('C_barang/view'); ?>"><button type="submit" class="btn btn-default">Kembali</button></a>
              <!--<a href="<?php echo site_url('C_jenisbarang/add'); ?>"><button type="button" class="btn btn-warning" >Tambah Data</button></a>--> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </form>
      <!-- /.row -->
    </section>
      <!-- /.row -->
    <!-- </section> -->
    <!-- /.content -->
  </div>