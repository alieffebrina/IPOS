<!-- Content Wrapper. Contains page content -->
<div id="data">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kas Keluar
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_Kas'); ?>">Data Kas</a></li>
        <li class="active">Data Kas Keluar</li>
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
              <h3 class="box-title">Data Kas Keluar</h3>
            </div>
            <div class="box-body" >
                <table class="table table-bordered">
                  <tbody>
                  <tr>
                   <form class="form-horizontal" method="POST" action="<?php echo site_url('C_Kas/excel')?>">
                    <td style="align-content: left;">Filter Data  &nbsp;  &nbsp; <input type="date" name="tglawal" id="tglawal" class="input-sm"> &nbsp; Sampai &nbsp; 
                      <input type="date" name="tglakhir" id="tglakhir" class="input-sm"> &nbsp;&nbsp;

                      <input type="button" name="searchkas" class="btn btn-primary" value="cari" id="searchkas">
                      <!-- <input type="button" id="search" name="search" class="btn btn-warning" onclick="search();" value="cari"> -->
                      <button id="excelkas" class="btn btn-warning" type="submit"  ><i class="fa fa-search"></i>  Excel</button></td>
                      </form>
                  </tr></tbody>
                </table>
          </div>
            <!-- /.box-header -->
              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Nominal</th>
                </tr>
                </thead>
                <tbody >
                  <?php 
                  $no=1;
                  if( ! empty($kas)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                  foreach ($kas as $kas) { ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($kas->tglkas));?></td>
                        <td><?php echo $kas->ket; ?></td>
                        <td><?php echo number_format($kas->nominal); ?></td>
                      </tr>
                    <?php }
                     }else{ 
                      echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                    } ?>
                </tbody>
              </table>
              <a href="<?php echo site_url('C_Kas/add'); ?>"><button type="submit" class="btn btn-default">Tambah Data</button></a>
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
</div>