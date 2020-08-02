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
            <?php echo form_open("C_Pembelian/tambah", array('enctype'=>'multipart/form-data')); ?>
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Suplier</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
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
                  <input type="radio" id="belicash" name="pembayaran" value="cash" required="required"> Cash
                  <input type="radio" id="belikredit" name="pembayaran" value="kredit"> Kredit
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Sisa Limit</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="limit" name='limit' disabled="disabled" >
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
            </div>
          </div>


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
                      <option value="<?php echo $barang->id_barang ?>"><?php echo $barang->barang.' / '.$barang->jenisbarang ?></option>
                      <?php } ?>
                    </select>
                  </div><div id="namashow"></div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Qtt</label>

                  <div class="col-sm-10">
                    <div class="input-group">
                      <input type="number" class="form-control" id="qtt" value="" onfocus="startCalculate();" onblur="stopCalc();">
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
                  <div class="col-sm-10" id="nama_suplier">
                    <input type="text" class="form-control" id="diskon" onfocus="startCalculate();" onblur="stopCalc();">
                    <span id="nilaidiskon"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Sub Total</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subtotal" readonly>
                    <input type="hidden" class="form-control" id="subtotalrupiah">
                    <input type="hidden" class="form-control" id="jenisbarang">
                  </div>
                  <!-- <a class=""> -->
                    <!-- <input type="submit" class="btn btn-primary"> -->
                  <input type="submit" name="send" class="btn btn-primary" value="Tambah data" id="butsend">
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </div>
            <!-- </form> -->
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
                    <th>Jenis Barang</th>
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
                  <input type="text" id="total" name="total" onchange="ceklimitbeforesubmit();">
                <!-- <input type="hidden" name="total" id='total'> -->
              <p class="lead">Terbilang :</p>
              <h3 class="text-muted well well-sm no-shadow" id="terbilang" style="text-align: center;"></h3>
                    <input type="submit" class="btn btn-primary" id="submit">
                <!-- <input type="submit" name="save" class="btn btn-primary pull-right" id="butsave" value="Simpan data"> -->
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

                    <input type="hidden" class="form-control"  name="barangall" id="barangall" readonly>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="subtotalbawah" id="subtotalbawah" readonly>
                    <input type="hidden" class="form-control" name="subtotalbawahrupiah" id="subtotalbawahrupiah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Diskon</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="diskonbawah" name="diskonbawah" value=""  onfocus="startCalculatetotal();" onblur="stopCalctotal();">
                    <span id="nilaidiskonbawah"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Biaya Lain Lain</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="biayalain" name="biayalain" value="" onfocus="startCalculatetotal();" onblur="stopCalctotal();">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <!--/.col (right) -->
      <?php echo form_close(); ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
