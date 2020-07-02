
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">&nbsp;
          <img src="<?php echo base_url() ?>assets/images/administrator.jpg" class="img-circle" alt="User Image">
        </div>
        <p>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div></p>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Data Master</span>1
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('C_User'); ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Jenis Customer </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Jenis Pembayaran </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Jenis Barang </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Satuan </a></li>
            <li><a href="<?php echo site_url('C_Gudang'); ?>"><i class="fa fa-circle-o"></i> Data Gudang </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Barang </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Customer </a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Data Suplier </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Penjualan</span>2
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>Sales Order</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Delivery Order</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Invoice</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Retur</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Pembelian</span>3
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>Purchase Order</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Nota Pembayaran</span>4
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>assets/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Pembayaran Purchase Order</a></li>
            <li><a href="<?php echo base_url() ?>assets/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Pembayaran Invoice</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Gudang</span>5
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Stok</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Transfer Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Accounting</span>6
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Hutang</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Piutang</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Pendapatan</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Setting</span>7
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Hak Akses Login</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Data Kode</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>