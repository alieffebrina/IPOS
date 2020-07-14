<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_satuan extends CI_Model {

    function getsatuan(){
        $this->db->select('*');
        //$this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_pelanggan.id_provinsi');
        //$this->db->join('tb_kota', 'tb_kota.id_kota = tb_pelanggan.id_kota');
        $query = $this->db->get('tb_satuan');
        return $query->result();
    }

    function getnama($ida){
        $where = array(
            'id_satuan' => $ida
        );
        return $this->db->get_where('tb_satuan',$where)->result();
    }

    function tambahdata($id){
        //$harga = $this->input->post('rupiah');
        //$harga_str = preg_replace("/[^0-9]/", "", $harga);

        $satuan = array(
            'id_user' => $id,
            'satuan' => $this->input->post('satuan'),
            //'alamat' => $this->input->post('alamat'),
            //'id_kota' => $this->input->post('kota'),
            //'id_provinsi' => $this->input->post('prov'),
            //'tlp' => $this->input->post('tlp'),
            //'limit' => $harga_str,
            'tgl_update' => date('Y-m-d')
        );
        
        $this->db->insert('tb_satuan', $satuan);
    }

    // function cekkodepelanggan(){
    //     $this->db->select_max('id_pelanggan');
    //     $idpelanggan = $this->db->get('tb_pelanggan');
    //     return $idpelanggan->row();
    // }

    //function tambahakses($id){
    //    $total = $this->db->count_all_results('tb_submenu');

    //    for($i=0; $i<$total; $i++){
    //        $fungsi = array('id_submenu' => $i+1 , 
    //            'id_user' => $id);

    //        $this->db->insert('tb_akses', $fungsi);            
    //    }
    //}

    function getspek($iduser){
        $this->db->select('*');
        //$this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_pelanggan.id_provinsi');
        //$this->db->join('tb_kota', 'tb_kota.id_kota = tb_pelanggan.id_kota'); 
        $where = array(
            'id_satuan' => $iduser
        );
        $query = $this->db->get_where('tb_satuan', $where);
        return $query->result();
    }

    function edit($id){
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);
        $satuan = array(

            'id_user' => $id,
            'satuan' => $this->input->post('satuan'),
            //'alamat' => $this->input->post('alamat'),
            //'id_kota' => $this->input->post('kota'),
            //'id_provinsi' => $this->input->post('prov'),
            //'tlp' => $this->input->post('tlp'),
            //'limit' => $harga_str,
            'tgl_update' => date('Y-m-d')
        );

        $where = array(
            'id_satuan' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_satuan',$satuan);
    }

    
}