<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Suplier
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Master</a></li>
        <li><a href="<?php echo site_url('C_suplier'); ?>">Data Suplier</a></li>>
        <li class="active">Lihat Data Suplier</li>
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
              <h3 class="box-title">Lihat Data Suplier</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_suplier/editsuplier')?>">
              <div class="box-body">
                <?php foreach ($suplier as $suplier) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" value="<?php echo $suplier->nama_suplier ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php _echo $suplier->id_suplier ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="alamat" name="alamat"><?php echo $suplier->alamat ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota/Kabupaten</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="kota" name="kota" style="width: 100%;">
                      <option value="<?php echo $suplier->id_kota ?>"><?php echo $suplier->name_kota ?></option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="prov" name="prov" style="width: 100%;">
                      <option value="<?php echo $suplier->id_provinsi ?>"><?php echo $suplier->name_prov ?></option>
                      <?php foreach ($provinsi as $provinsi) { ?>
                      <option value="<?php echo $provinsi->id_provinsi ?>"><?php echo $provinsi->name_prov ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Telepon"  maxlength="12" minlength="12" value="<?php echo $suplier->tlp ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $suplier->email ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $suplier->id_suplier ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Website</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="website" name="website" value="<?php echo $suplier->website ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $suplier->id_suplier ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No. Rekening</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="norek" name="norek" placeholder="No. Rekening"  maxlength="20" minlength="20" value="<?php echo $suplier->norek ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Bank</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="bank" name="bank" value="<?php echo $suplier->bank ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $suplier->id_suplier ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">A.N Rekening</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="anrek" name="anrek" value="<?php echo $suplier->anrek ?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $suplier->id_suplier ?>">
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