  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Jalan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('C_suratjalan'); ?>"><i class="fa fa-dashboard"></i> Surat Jalan</a></li>
        <li class="active"><a href="<?php echo site_url('C_penjualan'); ?>">Transaksi Sura Jalan</a></li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
       <form class="form-horizontal" method="POST" action="<?php echo site_url('C_suratjalan/tambah')?>">
      <input type="hidden" id="type" value='surat_jalan'>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Surat Jalan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">No Surat Jalan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="id_suratjalan" name="id_suratjalan" value="<?php echo $kode; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Tanggal Kirim</label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="datepicker form-control" id="tgl" name="tgl" value="<?php echo date('d-m-Y')?>">
                    </div>
                    
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nota Penjualan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" id="id_penjualan" name="id_penjualan" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($penjualan as $penjualan) { ?>
                      <option value="<?php echo $penjualan->id_penjualan ?>"><?php echo $penjualan->id_penjualan ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Nama Pelanggan</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_pelanggan" id="id_pelanggan">
                    <input type="text" name="nama" class="form-control" id="nama" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="alamat" readonly></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Pengirim</label>
                  <div class="col-sm-10" id="namapengirim">
                    <input type="text" class="form-control" name="namapengirim" name="namapengirim">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Pengiriman</label>
                  <div class="col-sm-10">
                  <input type="radio" id="Dikirim" name="pengiriman" value="Dikirim"> Dikirim
                  <input type="radio" id="Diambil" name="pengiriman" value="Belum" checked> Belum dikirim
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">List Barang</h3>
            </div>
            <div class="row">
              <div class="col-xs-12 table-responsive">
                <table class="table table-striped" id="tabelku">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Qtt</th>
                    <th>Satuan</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Sub Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- left column -->

        <div class="col-md-6">
          <div class="box box-danger">
            <div class="col-xs-12">
                <button type="button" class="btn btn-default pull-right">Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Simpan">
                <button type="button" class="btn btn-info pull-right">Cetak Nota</button>
            </div>
          </div>
        </div>
        <!--/.col (right) -->
      </div>

            </form>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
