<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Pembelian extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->model('M_Pembelian');
        $this->load->model('M_Setting');
        $this->load->model('M_suplier');
        $this->load->model('M_barang');
    }

    function index()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);
        $data['pembelian'] = $this->M_Pembelian->getall();
        $this->load->view('pembelian/v_vpembelian',$data); 
        $this->load->view('template/footer');
    }

    function add()
    {
        $this->load->view('template/header');
        $id = $this->session->userdata('id_user');
        $data['menu'] = $this->M_Setting->getmenu1($id);
        $this->load->view('template/sidebar.php', $data);

        $modul = 'pembelian';
        $kode = $this->M_Setting->cekkode($modul);
        foreach ($kode as $modul) {
            $a = $modul->kodefinal;
            if (strpos($a, 'ggal') != false) {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                $a = str_replace("tanggal", $tgl, $a);
                $data = $this->M_Pembelian->cekpembeliantgl();
                $no = count($data) + 1;
                $kode2 = str_replace("no", $no, $a);
            } else {
                $data = $this->M_Pembelian->cekkodepembelian();
                foreach ($data as $id) {
                    $id = $id+1;
                    $kode2 = str_replace("no", $id, $a);
                }
            }
        }

        $data['kode'] = $kode2;
        $data['suplier'] = $this->M_suplier->getsuplier();
        $data['barang'] = $this->M_barang->getbarang();
        $this->load->view('pembelian/v_pembelian',$data); 
        $this->load->view('template/footer');
    }

    function tambah(){
        $id = $this->session->userdata('id_user');
        $hasil_kode = $this->M_Pembelian->tambah($id);

        // $tr = $this->input->post('tr'); 
        // // $id_pembelian = $_POST['no']; 
        $id_barang = $this->input->post('id_barang');
        // $diskon = $this->input->post('diskon');
        // $qtt = $this->input->post('qtt'); 
        // $harga = $this->input->post('harga');
        // $data = array();
        
        // $index = 0; // Set index array awal dengan 0
        // for ($index=0; $index=$tr ; $index++) { 
        //     array_push($data, array(
        //     // 'id_pembelian'=>$dataidpembelian,
        //     'id_barang'=>$id_barang[$index],  // Ambil dan set data nama sesuai index array dari $index
        //     'diskon'=>$diskon[$index],  // Ambil dan set data telepon sesuai index array dari $index
        //     'qtt'=>$qtt[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //     'harga'=>$harga[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //   ));
        // }
//         foreach($id_barang AS $key => $val){          
//              $data = array( 'id_barang'=>$_POST['id_barang'][$key],  // Ambil dan set data nama sesuai index array dari $index
//             'diskon'=>$_POST['diskon'][$key],  // Ambil dan set data telepon sesuai index array dari $index
//             'qtt'=>$_POST['qtt'][$key],  // Ambil dan set data alamat sesuai index array dari $index
//             'harga'=>$_POST['harga'][$key],
//            ),
//          }    
        // if(!empty($id_barang)) {
        // foreach ($id_barang as $id_barang) {
        //     array_push($data, array(
        //     'id_barang'=>$id_barang,  // Ambil dan set data nama sesuai index array dari $index
        //     // 'id_pembelian'=>$id_pembelian,
        //     'diskon'=>$diskon[$index],  // Ambil dan set data telepon sesuai index array dari $index
        //     'qtt'=>$qtt[$index],  // Ambil dan set data alamat sesuai index array dari $index
        //     'harga'=>$harga[$index]  // Ambil dan set data alamat sesuai index array dari $index
        //     ));
        //     $data[] = $mes;
        //   }
          // $ext['error'] 
          // var_dump($data);
        // echo $data['error'];
        // $sql = $this->M_Pembelian->save_batch($data); 
        //  if($sql){ // Jika sukses
        //       echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('index.php/C_Pembelian')."';</script>";
        //     }else{ // Jika gagal
        //       echo "<script>alert('Data gagal disimpan');window.location = '".base_url('index.php/C_Pembelian')."';</script>";
        //     }
            // echo $id_barang;
        // } else{
        // echo $id_barang;
    // }
    }
}

//   function create_package($package,$product){
//         $this->db->trans_start();
//             //INSERT TO PACKAGE
//             date_default_timezone_set("Asia/Bangkok");
//             $data  = array(
//                 'package_name' => $package,
//                 'package_created_at' => date('Y-m-d H:i:s') 
//             );
//             $this->db->insert('package', $data);
//             //GET ID PACKAGE
//             $package_id = $this->db->insert_id();
//             $result = array();
//                 foreach($product AS $key => $val){
//                      $result[] = array(
//                       'detail_package_id'   => $package_id,
//                       'detail_product_id'   => $_POST['product'][$key]
//                      );
//                 }      
//             //MULTIPLE INSERT TO DETAIL TABLE
//             $this->db->insert_batch('detail', $result);
//         $this->db->trans_complete();
//     }