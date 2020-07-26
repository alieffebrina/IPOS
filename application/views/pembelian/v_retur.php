n<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Retur Pembelian
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('C_Pembelian'); ?>">Retur Pembelian</a></li>
        <li class="active">Lihat Data</li>
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
              <h3 class="box-title">Retur Pembelian</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nota Retur Pembelian</th>
                  <th>No Nota Pembelian</th>
                  <th>Tgl Retur </th>
                  <th>Suplier</th>
                  <th>Type Retur</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  foreach ($retur as $retur) {
                    $statusdetail = $this->db->query("select count(statusdetail) as statusdetail from tb_detailreturpembelian where id_retur = '$retur->id_returpembelian' and statusdetail = 'belum'"); 
                  foreach ($statusdetail->result() as $statusdetail) { 
                    if ($statusdetail->statusdetail!=0) { 
                      $status = 'Retur belum dikembalikan'; 
                      $disable = 'enabled'; ?>
                <tr style="color: red">
                    <?php } else {
                      $status = 'Retur sudah dikembalikan';
                      $disable = 'disabled'; 
                     ?>
                      <tr>
                    <?php }
                  }
                    ?>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $retur->id_returpembelian; ?></td>
                  <td><?php echo $retur->notapembelian; ?></td>
                  <td><?php echo date('d-m-Y', strtotime($retur->tglretur));?></td>
                  <td><?php echo $retur->nama_toko;?></td>
                  <td><?php echo $retur->jenispengembalian; ?></td>
                  <td>Rp. <?php echo number_format($retur->totalretur,0,",","."); ?></td>
                  <td><?php echo $status; ?></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('C_Pembelian/vretur/'.$retur->id_returpembelian); ?>"><button type="button" class="btn btn-success">Lihat</button></a>
                      <a href="<?php echo site_url('C_Pembelian/edit/'.$retur->id_returpembelian); ?>"><button type="button" class="btn btn-info">Cetak</button></a>   
                     <!--  <?php if ($status == 'Retur belum dikembalikan'){ ?> <a href="<?php echo site_url('C_Pembelian/statusrubah/'.$retur->id_returpembelian); ?>"><button type="button" class="btn btn-danger" >Rubah Status</button></a> <?php } ?> -->                        
                    </div>
                  </td>
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