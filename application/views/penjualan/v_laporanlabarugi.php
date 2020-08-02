<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Laba Rugi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_labarugi'); ?>">Laporan Laba Rugi</a></li>
        <li class="active">Laporan Laba Rugi</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class='col-lg-12'>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Filter</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <form action='<?= site_url("C_labarugi")?>' method='POST'>
                <div class='row'>
                  <div class="col-lg-12">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-4">
                        <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="tanggalan form-control" id="tgl" name="tgl" value="<?php echo date('d-m-Y')?>">
                          </div>
                      </div>
                  </div>
                </div><br>
                <div class='row'>
                  <div class='col-lg-12'>
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-3">
                      <button type="submit" name="btn_submit" class="btn btn-primary">Tampilkan</button>
                      <button type="submit" name="excel" id="btn_print" value="excel" class="btn btn-warning">Cetak Excel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan Laba Rugi</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Total Penjualan</th>
                  <th>Total Pembelian</th>
                  <th>Total Kas Keluar</th>
                  <th>Laba/Rugi Kotor<br>(Total Jual-Total Beli)</th>
                  <th>Laba/Rugi Bersih<br>(Total Jual-Total Beli-Total Kas Keluar)</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($laporanlabarugi as $value_labarugi) {?>
                    
                  <td><?php echo $no++; ?></td>
                  <td>Rp. <?php echo number_format($value_labarugi->jual,0,",","."); ?></td>
                  <td>Rp. <?php echo number_format($value_labarugi->beli,0,",","."); ?></td>
                  <td>Rp. <?php echo number_format($value_labarugi->kas,0,",","."); ?></td>
                  <td>Rp. <?php echo number_format($value_labarugi->laba_kotor,0,",","."); ?></td>
                  <td>Rp. <?php echo number_format($value_labarugi->laba_bersih,0,",","."); ?></td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>