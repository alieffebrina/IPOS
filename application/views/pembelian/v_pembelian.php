  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaksi Pembelian
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('C_Pembelian'); ?>"><i class="fa fa-dashboard"></i> Pembelian</a></li>
        <li class="active"><a href="<?php echo site_url('C_Pembelian'); ?>">Transaksi Pembelian</a></li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Suplier</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
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
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Toko</label>

                  <div class="col-sm-10">
                    <select class="form-control select2" id="nama_toko" name="nama_toko" style="width: 100%;">
                      <option value="">--Pilih--</option>
                      <?php foreach ($suplier as $suplier) { ?>
                      <option value="<?php echo $suplier->id_suplier ?>"><?php echo $suplier->nama_toko ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Suplier</label>
                  <div class="col-sm-10" id="nama_suplier">
                    <input type="text" class="form-control" name="nama_suplier">
                    <!-- <span id="nama_suplier"></span> -->
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
                  <input type="radio" id="cash" name="pembayaran" value="cash"> Cash
                  <input type="radio" id="kredit" name="pembayaran" value="kredit"> Kredit
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Tanggal Jatuh Tempo</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgljatuhtempo" name="tgljatuhtempo" disabled="disabled">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="row">
              <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
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
                  <tr>
                    <td>1</td>
                    <td>
                      <select class="form-control select2" id="nama_barang" name="nama_barang" style="width: 100%;">
                        <option value="">--Pilih--</option>
                        <?php foreach ($barang as $barang) { ?>
                        <option value="<?php echo $barang->id_barang ?>"><?php echo $barang->barang ?></option>
                        <?php } ?>
                      </select>
                    </td>
                    <td><input type="text" class="form-control" id="qtt" name="qtt"  onfocus="startCalculate()" onblur="stopCalc()" ></td>
                    <td><span id="satuan"></span></td>
                    <td id="tampilharga"></td>
                    <td><input type="text" class="form-control" id="diskon" name="diskon" onfocus="startCalculate()" onblur="stopCalc()" ></td>
                    <td><input type="text" class="form-control" name="subtotal" id="subtotal" readonly></td>
                    <th>Tambah | Hapus</th>
                  </tr>
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
                  <div class="bg-maroon disable color-palette"><h1 style="text-align: center;">Rp. 1000.000</h1></div></br >
              <p class="lead">Terbilang :</p>
              <p class="text-muted well well-sm no-shadow">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. :</p>

                <button type="submit" class="btn btn-default pull-right">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
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
                    <input type="text" class="form-control"  name="subtotalbawah" id="subtotalbawah" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Diskon</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" value="Rp. 1.000.000,-">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Biaya Lain Lain</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" value="Rp. 1.000.000,-">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
