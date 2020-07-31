<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kas Keluar
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_Kas'); ?>">Data Kas</a></li>
        <li class="active">Data Kas Keluar</li>
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
              <h3 class="box-title">Lihat Kas Keluar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <?php foreach ($kas as $kas) {?> 
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-9">
                    <input type="date" name="tgl" id="tgl" class="form-control" value="<?php echo $kas->tglkas ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-9">
                    <textarea name="ket" class="form-control" readonly><?php echo $kas->ket ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nominal</label>
                  <div class="col-sm-9">
                    <input type="text" name="rupiah" id="rupiah" class="form-control" value="<?php  echo number_format($kas->nominal) ?>" readonly>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <a href="<?php echo site_url('C_Kas'); ?>"><button type="button" class="btn btn-default">Batal</button></a>
                    <!-- <button type="submit" class="btn btn-info">Simpan Data</button> -->
                  </div>
              </div>
            <?php } ?>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>