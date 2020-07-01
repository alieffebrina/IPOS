 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Gudang
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_Gudang'); ?>">Data Gudang</a></li>
        <li class="active">Edit Data Gudang</li>
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
              <h3 class="box-title">Edit Data Gudang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_Gudang/editgudang')?>">
              <div class="box-body">
                <?php foreach ($gudang as $gudang) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="gudang" name="gudang" value="<?php echo $gudang->gudang ?>" readonly>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $gudang->id_gudang ?>" readonly>
                  </div>
                  <span id="pesan"></span>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">status</label>
                  <div class="radio col-sm-9">
                    <label><input type="radio" name="status" id="status" value="1" <?php if($gudang->status == '1'){ echo "checked"; } ?> >Aktif</label>
                    <label><input type="radio" name="status" id="status" value="0" <?php if($gudang->status == '0'){ echo "checked"; } ?> >Tidak Aktif</label>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <button type="reset" class="btn btn-default">Kembali</button>
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