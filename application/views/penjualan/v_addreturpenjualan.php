<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Retur Penjualan
        <!-- <small>Stok Opname</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Data Transaksi Penjualan</a></li>
        <li><a href="<?php echo site_url('C_returpenjualan/returpenjualan'); ?>">Data  Retur Penjualan</a></li>>
        <li class="active">Lihat Data Retur Penjualan</li>
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
              <h3 class="box-title">Lihat Data Retur Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo site_url('C_returpenjualan/tambahreturpenjualan')?>">
              <div class="box-body">
                <?php foreach ($penjualan as $penjualan) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nota Penjualan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_penjualan" name="id_penjualan" value="<?php echo $penjualan->id_penjualan ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Tanggal Retur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('d-m-Y')?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="barang" name="barang" value="<?php echo $penjualan->barang ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="qtt" name="qtt" value="<?php echo $penjualan->qtt ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $penjualan->harga ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="total" name="total" value="<?php echo $penjualan->total ?>" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity Retur</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="qttretur" name="qttretur" >
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-9">
                    <select name="satuan" class="form-control">
                      <option value="<?php echo $barang->satuanawal ?>"><?php echo $barang->nama_satuan ?></option>
                      <option value="<?php echo $barang->satuankon ?>"><?php echo $barang->satuan_konversi ?></option>
                    </select>
                  </div>
                </div> -->
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