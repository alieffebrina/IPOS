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
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_jenisbarang/tambah')?>">
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
                    <button type="reset" class="btn btn-default">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan Data</button>
                    <a href="<?php echo site_url('C_jenisbarang/view'); ?>"><button type="submit" class="btn btn-info">Lihat</button></a>
                  </div>
              </div>

              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>