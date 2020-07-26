<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_penjualan extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_penjualan');
        $this->load->model('M_Setting');
        $this->load->model('M_pelanggan');
        $this->load->model('M_barang');
        if(!$this->session->userdata('id_user')){
            redirect('C_Login');
        }
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['penjualan'] = $this->M_penjualan->getall();
        $this->load->view('penjualan/v_vpenjualan',$data); 
        $this->load->view('template/footer');
    }

    function tambah(){
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_penjualan->tambahdata($id);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_penjualan');

    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'penjualan';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_penjualan->cekpenjualantgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_penjualan->cekkodepenjualan();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $data['kode'] = $kode2;
        $data['pelanggan'] = $this->M_pelanggan->getpelanggan();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('penjualan/v_penjualan',$data); 
        $this->load->view('template/footer');
    }

    function view($ida)
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['penjualan'] = $this->M_penjualan->getdetail($ida);
        $data['dtlpenjualan'] = $this->M_penjualan->getdetailpenjualan($ida);

        //$data['penjualan'] = $this->M_penjualan->getretur($ida);
        //$data['returpenjualan'] = $this->M_penjualan->getreturpenjualan($ida);

        $this->load->view('penjualan/v_viewpenjualan',$data); 
        $this->load->view('template/footer');
    }

    // function retur()
    // {
    //     $this->load->view('template/header');
    //     $id = $this->session->userdata('id_user');
    //     $data['menu'] = $this->M_Setting->getmenu1($id);
    //     $this->load->view('template/sidebar.php', $data);
    //     $data['penjualan'] = $this->M_penjualan->getreturpenjualan();
    //     $this->load->view('penjualan/v_retur',$data); 
    //     $this->load->view('template/footer');
    // }

    function piutang()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['penjualan'] = $this->M_penjualan->getpiutang();
        $this->load->view('penjualan/v_vpenjualan',$data); 
        $this->load->view('template/footer');
    }

    function laporan()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['penjualan'] = $this->M_penjualan->getlaporan();
        $this->load->view('penjualan/v_laporanpenjualan',$data); 
        $this->load->view('template/footer');
    }

    function get_info_penjualan(){// Ambil data ID Provinsi yang dikirim via ajax post
            $id_penjualan = $this->input->post('id_penjualan');
            $type = $this->input->post('type');
            if($id_penjualan!=''){
            $data['penjualan'] = $this->M_penjualan->getdetail($id_penjualan);
            $data['dtlpenjualan'] = $this->M_penjualan->getdetailpenjualan($id_penjualan);
            
            $no=1; $table='';
            if($type=='retur'){
                foreach ($data['dtlpenjualan'] as $key=>$dtl) {
                       $table.="<tr id='".$key."'>
                        <td><input type='hidden' name='id_detailpenjualan[]' value='".$dtl->id_detailpenjualan."'>". $no++ ."</td>
                        <td><input type='hidden' name='id_barang[]' value='".$dtl->id_barang."'>". $dtl->barang ."</td>
                        <td><input type='hidden' name='satuan[]' value='".$dtl->satuan."'>". $dtl->satuan ."</td>
                        <td>". $dtl->jenisbarang ."</td>
                        <td><input type='hidden' id='qtt_".$key."' value='".$dtl->qtt."'>". $dtl->qtt ."</td>
                        <td><input type='text' name='jumlahretur[]' value='' onkeyup='check_retur(this);'></td>
                        <td><input type='hidden' name='harga[]' value='".$dtl->harga."'>". number_format($dtl->harga) ."</td>
                      </tr>";
                  } 
            }else{
                foreach ($data['dtlpenjualan'] as $dtl) {
                       $table.="<tr>
                        <td>". $no++ ."</td>
                        <td>". $dtl->barang ."</td>
                        <td>". $dtl->qtt ."</td>
                        <td>". $dtl->satuan ."</td>
                        <td>". number_format($dtl->harga) ."</td>
                        <td>". number_format($dtl->diskon) ."</td>
                        <td>". number_format($dtl->subtotal) ."</td>
                      </tr>";
                  } 
            }
                
            // $lists = " <input type='text' class='form-control' id='nama_suplier' name='nama_suplier' value='".$hasil_kode."' readonly>";

            $callback = array('id_pelanggan'=>$data['penjualan'][0]->id_pelanggan,'nama'=>$data['penjualan'][0]->nama, 'alamat'=>$data['penjualan'][0]->alamat, 'detail_penjualan' =>$table); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            echo json_encode($callback); 
        }

    }

     function bayar($ida)
    {   
        // $id = $this->session->userdata('id_user');
        $this->M_penjualan->edit($ida);
        $this->session->set_flashdata('SUCCESS', "Record Added Successfully!!");
        redirect('C_Penjualan');
    }

}