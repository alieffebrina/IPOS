<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Konversi
        <small>Tambah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_konversi'); ?>">Data Konversi</a></li>>
        <li class="active">Tambah Data Konversi</li>
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
              <h3 class="box-title">Tambah Data Konversi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_konversi/tambah')?>">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Satuan Awal</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="id_satuan" name="id_satuan" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($satuan as $satuan_awal) { ?>
                      <option value="<?php echo $satuan_awal->id_satuan ?>"><?php echo $satuan_awal->satuan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity Awal</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="qttawal" name="qttawal" placeholder="Quantity Awal">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Satuan Konversi</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="satuan" name="satuan" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($satuan as $satuan_konversi) { ?>
                      <option value="<?php echo $satuan_konversi->id_satuan ?>"><?php echo $satuan_konversi->satuan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity Konversi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="qttkonversi" name="qttkonversi" placeholder="Quantity Konversi">
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