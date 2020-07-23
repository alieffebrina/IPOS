  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaksi Penjualan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('C_penjualan'); ?>"><i class="fa fa-dashboard"></i> Penjualan</a></li>
        <li class="active"><a href="<?php echo site_url('C_penjualan'); ?>">Transaksi Penjualan</a></li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
       <form class="form-horizontal" method="POST" action="<?php echo site_url('C_penjualan/tambah')?>" id='formpenjualan'>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">No Nota</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nonota" name="nonota" value="<?php echo $kode; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo date('d-m-Y')?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Pelanggan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" id="nama" name="nama" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($pelanggan as $pelanggan) { ?>
                      <option value="<?php echo $pelanggan->id_pelanggan ?>"><?php echo $pelanggan->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="alamat" readonly></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Type Pembayaran</label>
                  <div class="col-sm-10">
                  <input type="radio" id="cash" name="pembayaran" value="cash" checked> Cash
                  <input type="radio" id="kredit" name="pembayaran" value="kredit"> Kredit
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Tanggal Jatuh Tempo</label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="limit" name='limit'>
                    <input type="date" class="form-control" id="tgljatuhtempo" name="tgljatuhtempo" disabled="disabled">
                  </div>
                </div> -->

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Limit / Tanggal Jatuh Tempo</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="limit" name='limit'disabled="disabled">
                    <input type="date" class="form-control" id="tgljatuhtempo" name="tgljatuhtempo" disabled="disabled">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <select class="form-control select2" id="nama_barang" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($barang as $barang) { ?>
                      <option value="<?php echo $barang->id_barang ?>"><?php echo $barang->barang ?></option>
                      <?php } ?>
                    </select>
                  </div><div id="namashow"></div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Qtt</label>

                  <div class="col-sm-10">
                    <div class="input-group">
                      <input type="text" class="form-control" id="qtt" value="" onkeyup='Calculate()'>
                      <span class="input-group-addon" id="tampilsatuan"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Harga</label>

                  <div class="col-sm-10" id = "tampilharga">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Diskon</label>
                  <div class="col-sm-10" id="nama">
                    <input type="text" class="form-control" id="diskon" onkeyup='Calculate()'>
                    <span id="nilaidiskon"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Sub Total</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subtotal" readonly>
                    <input type="hidden" class="form-control" id="subtotalrupiah">
                  </div>
                  <!-- <a class=""> -->
                  <button type='button' class="btn btn-primary" id="butsendpenjualan">add data</button>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </div>
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
                    <th>action</th>
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
              <p class="lead" style="text-align: center;"><b>Total :</b></p>
                  <div class="bg-maroon disable color-palette" ><h1 style="text-align: center;" id="totalfix"></h1></div></br >
              <p class="lead">Terbilang :</p>
              <h3 class="text-muted well well-sm no-shadow" id="terbilang" style="text-align: center;"></h3>
                <input type="hidden" name="total" id='total'>
                <a href="<?= site_url('C_penjualan');?>" class="btn btn-default pull-right">Cancel</a>
                <input type='submit' class="btn btn-info pull-right" value='Simpan'>
                <button type="button" class="btn btn-info pull-right">Cetak Nota</button>
            </div>

            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="col-xs-18">
              
              <p class="lead" style="text-align: center;"><b> Sub Total</b> </p>

              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Sub Total</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="subtotalbawah" readonly value="0">
                    <input type="hidden" class="form-control" name="subtotalbawahrupiah" id="subtotalbawahrupiah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Diskon</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="diskonbawah" name="diskonbawah" value=""  onkeyup="Calculate_total()">
                    <span id="nilaidiskonbawah"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Biaya Kirim</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="biayalain" name="biayalain" value=""  onkeyup="Calculate_total()">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
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
