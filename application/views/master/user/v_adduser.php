 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
        <small>Add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i>Data Master</a></li>
        <li><a href="<?php echo site_url('C_User'); ?>">Data User</a></li>
        <li class="active">Tambah Data User</li>
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
              <h3 class="box-title">Tambah Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_User/tambah')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="namauser" name="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" onkeyup="cek_username()">
                  <span id="pesan"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"  maxlength="16" minlength="16" onkeypress="return Angkasaja(event)">
                  </div>
                </div> -->
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
                  <div class="col-sm-9">
                  <select class="form-control select2" id="prov" name="prov" style="width: 100%;">
                    <option>-Pilih-</option>
                    <?php foreach ($provinsi as $provinsi) { ?>
                    <option value="<?php echo $provinsi->id_provinsi ?>"><?php echo $provinsi->name_prov ?></option>
                    <?php } ?>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kota/Kabupaten</label>
                  <div class="col-sm-9">
                    <select class="form-control select2" id="kota" name="kota" style="width: 100%;">
                      <option value=''>Pilih</option>
                    </select>
                  </div>
                </div> -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info">Tambah Data</button>
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