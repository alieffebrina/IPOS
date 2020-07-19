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
    <div class="box-body">
    <?php if ($this->session->flashdata('SUCCESS')) { ?>
       <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fa fa-check"></i> Success!</h5>
          Data berhasil di perbarui.
        </div>                 
      <?php } ?>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Stok Opname</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="border: 3">
                <thead>
                <tr>
                  <th rowspan="2" style="text-align: center;">No</th>
                  <th rowspan="2" style="text-align: center;">Tanggal</th>
                  <th rowspan="2" style="text-align: center;">Id Barang</th>
                  <th rowspan="2" style="text-align: center;">Nama Barang</th>
                  <th rowspan="2" style="text-align: center;">Jenis Barang</th>
                  <th colspan="3" style="text-align: center;">Barang Bagus</th>
                  <th colspan="2" style="text-align: center;">Barang Rusak</th>
                  <th rowspan="2" style="text-align: center;">Status</th>
                  <th rowspan="2" style="text-align: center;">Action</th>
                </tr>
                <tr>
                  <th style="text-align: center;">Stok Awal</th>
                  <th style="text-align: center;">Stok Opname</th>
                  <th style="text-align: center;">Satuan</th>
                  <th style="text-align: center;">Stok Retur</th>
                  <th style="text-align: center;">Satuan</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach ($barang as $barang) {  ?>
                <tr>

                <form class="form-horizontal" method="POST" action="<?php echo site_url('C_Stok/aproveso')?>">
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $barang->tgl_stokopname; ?></td>
                  <td><?php echo $barang->id_barang;?></td>
                  <td><?php echo $barang->barang;?></td>
                  <td><?php echo $barang->jenisbarang;?></td>
                  <td><?php echo $barang->stokawal; ?></td>
                  <td><?php echo $barang->stokskrg; ?></td>
                  <td><?php echo $barang->satuan_konversi; ?></td>
                  <td><?php echo $barang->stokreturopname; ?></td>
                  <td><?php echo $barang->satuanreturopname; ?></td>
                  <td><?php if($barang->status == '1'){ echo "aprove";} else {echo "pending"; }?></td>
                  <td><input type="hidden" name="qttkonversi" value="<?php echo $barang->qttkonversi; ?>">
                    <input type="hidden" name="idso" value="<?php echo $barang->id_stokopname ?>">
                    <input type="hidden" name="stokasli" value="<?php echo $barang->stok ?>">
                    <input type="hidden" name="barang" value="<?php echo $barang->id_barang ?>">
                    <input type="hidden" name="hasilkonversi" value="<?php echo $barang->stokskrg; ?>">
                    <input type="hidden" name="stokreturopname" value="<?php echo $barang->stokreturopname; ?>">
                    <input type="text" name="satuanreturopname" value="<?php echo $barang->satuanreturopname; ?>">
                    <input type="hidden" name="satuankonversi" value="<?php echo $barang->satuan_konversi; ?>">
                    <div class="btn-group">
                      <?php if($barang->status != "1"){?> 
                      <button type="submit" class="btn btn-success">Aprove</button>
                      <a href="<?php echo site_url('C_Stok/hapusso/'.$barang->id_stokopname)?>"><button type="button" class="btn btn-success">Hapus</button>
                    <?php } ?>
                    </div>
                  </td>
                </form>
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