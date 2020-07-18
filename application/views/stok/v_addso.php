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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Data  Stok Opname</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_Stok/tambahso')?>">
              <div class="box-body">
                <?php foreach ($barang as $barang) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="idbarang" name="idbarang" value="<?php echo $barang->id_barang ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barang" name="barang" value="<?php echo $barang->barang ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="jenisbarang" name="jenisbarang" value="<?php echo $barang->jenisbarang ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok Awal</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $barang->stok.'/'.$barang->nama_satuan ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok Konversi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stokkonversi" name="stokkonversi" value="<?php echo $barang->stok*$barang->qttkonversi.'/'.$barang->satuan_konversi ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok saat ini</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="stokskrg" name="stokskrg" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <select name="satuan_konversi" class="form-control">
                      <option value="<?php echo $barang->satuanawal ?>"><?php echo $barang->nama_satuan ?></option>
                      <option value="<?php echo $barang->satuankon ?>"><?php echo $barang->satuan_konversi ?></option>
                    </select>
                  </div>
                </div>
              <?php } ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-9">
                    <textarea name="ket" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="col-sm-10">
                    <button type="reset" class="btn btn-default">Batal</button>
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