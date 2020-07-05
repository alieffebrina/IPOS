<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_barang extends CI_Model {

	function getbarang(){
		$this->db->select('*');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $query = $this->db->get('tb_barang');
    	return $query->result();
    }

    function getnama($ida){
        $where = array(
            'id_barang' => $ida
        );
        return $this->db->get_where('tb_barang',$where)->result();
    }

    function tambahdata(){
        $barang = array(
            'nama' => $this->input->post('nama'),
            'id_satuan' => $this->input->post('satuan'),
            'id_jenisbarang' => $this->input->post('jenisbarang'),
            'merk' => $this->input->post('merk'),
        );
        
        $this->db->insert('tb_barang', $barang);
    }

    function cekkodebarang(){
        $this->db->select_max('id_barang');
        $idbarang = $this->db->get('tb_barang');
        return $idbarang->row();
    }

    //function tambahakses($id){
    //    $total = $this->db->count_all_results('tb_submenu');

    //    for($i=0; $i<$total; $i++){
    //        $fungsi = array('id_submenu' => $i+1 , 
    //            'id_user' => $id);

    //        $this->db->insert('tb_akses', $fungsi);            
    //    }
    //}

    function getspek($idbarang){
		$this->db->select('*');
        $this->db->join('tb_satuan', 'tb_satuan.id_satuan = tb_barang.id_satuan');
        $this->db->join('tb_jenisbarang', 'tb_jenisbarang.id_jenisbarang = tb_barang.id_jenisbarang'); 
        $where = array(
            'id_barang' => $idbarang
        );
        $query = $this->db->get_where('tb_barang', $where);
    	return $query->result();
    }

    function edit(){
        $barang = array(
            'nama' => $this->input->post('nama'),
            'id_satuan' => $this->input->post('satuan'),
            'id_jenisbarang' => $this->input->post('jenisbarang'),
            'merk' => $this->input->post('merk')
        );

        $where = array(
            'id_barang' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_barang',$barang);
    }

    
}