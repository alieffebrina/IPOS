<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_barang'); ?>">Data Barang</a></li>
        <li class="active">Lihat Data Barang</li>
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
              <h3 class="box-title">Lihat Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_barang/editbarang')?>">
              <div class="box-body">
                <?php foreach ($barang as $barang) { ?>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $barang->id_barang ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $barang->barang ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="satuan" name="satuan" style="width: 100%;">
                      <option value="<?php echo $barang->id_satuan ?>"><?php echo $barang->satuan ?></option>
                      <?php foreach ($satuan as $satuan) { ?>
                      <option value="<?php echo $satuan->id_satuan ?>"><?php echo $satuan->satuan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Barang</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="jenisbarang" name="jenisbarang" style="width: 100%;">
                      <option value="<?php echo $barang->id_jenisbarang ?>"><?php echo $barang->jenisbarang ?></option>
                      <?php foreach ($jenisbarang as $jenisbarang) { ?>
                      <option value="<?php echo $jenisbarang->id_jenisbarang ?>"><?php echo $jenisbarang->jenisbarang ?></option>
                      <?php } ?>
                    </select>
                </div>
              </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Merk Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk Barang" value="<?php echo $barang->merk ?>">
                  <span id="pesan"></span>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info">Simpan Data</button>
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