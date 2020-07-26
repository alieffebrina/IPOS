  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Retur Pembelian
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('C_Pembelian'); ?>"><i class="fa fa-dashboard"></i> Pembelian</a></li>
        <li><a href="<?php echo site_url('C_Pembelian/mretur'); ?>">Retur Pembelian</a></li>
        <li class="active"><a href="<?php echo site_url('C_Pembelian'); ?>">Detail Retur Pembelian</a></li>
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
            <div class="form-horizontal">
              <div class="box-body">
            <?php foreach ($retur as $key) { ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">No Retur Pembelian</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="noretur" name="noretur" value="<?php echo $key->id_returpembelian ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">No Nota Pembelian</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nonota" name="nonota" value="<?php echo $key->notapembelian; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $key->tglretur?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Toko</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_toko" name="nama_toko" value="<?php echo $key->nama_toko; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label">Nama Suplier</label>
                  <div class="col-sm-10" id="nama_suplier">
                    
                    <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" value="<?php echo $key->nama_suplier; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="alamat" readonly><?php echo $key->alamat ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Type Retur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pembayaran" name="pembayaran" value="<?php echo $key->jenispengembalian; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-1 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="ket" id="ket" readonly><?php echo $key->ket; ?></textarea>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </div>
          </div>

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
                    <th>Qtt Retur</th>
                    <th>Satuan Retur</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; 
                      $sub = 0;
                    foreach ($dtlretur as $dtl) { ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $dtl->barang ?> / <?php echo $dtl->jenisbarang ?></td>
                        <td><?php echo $dtl->qtt; ?></td>
                        <td><?php echo $dtl->satuanretur ?></td>
                        <td><?php echo number_format($dtl->hargabeli); ?></td>
                        <td><?php if($dtl->statusdetail == 'belum'){ ?><a href="<?php echo site_url('C_Pembelian/statusrubah/'.$dtl->id_barang.'/'.$dtl->id_detailreturbeli); ?>"><button type="button" class="btn btn-primary">Retur</button></a><?php } else { echo '-'; } ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <a href="<?php echo site_url('C_Pembelian/mretur'); ?>"><button type="button" class="btn btn-success">Kembali</button></a>
        </div>

        <?php $this->load->view('master/setting/terbilang'); ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
