<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_suplier extends CI_Model {

	function getsuplier(){
		$this->db->select('*');
        $this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_suplier.id_provinsi');
        $this->db->join('tb_kota', 'tb_kota.id_kota = tb_suplier.id_kota');
        $query = $this->db->get('tb_suplier');
    	return $query->result();
    }

    function getnama($ida){
        $where = array(
            'id_suplier' => $ida
        );
        return $this->db->get_where('tb_suplier',$where)->result();
    }

    function tambahdata(){
        $suplier = array(
            'nama_suplier' => $this->input->post('nama_suplier'),
            'alamat' => $this->input->post('alamat'),
            'id_kota' => $this->input->post('kota'),
            'id_provinsi' => $this->input->post('prov'),
            'tlp' => $this->input->post('tlp'),
            'email' => $this->input->post('email'),
            'website' => $this->input->post('website'),
            'norek' => $this->input->post('norek'),
            'bank' => $this->input->post('bank'),
            'anrek' => $this->input->post('anrek'),
        );
        
        $this->db->insert('tb_suplier', $suplier);
    }

    function cekkodesuplier(){
        $this->db->select_max('id_suplier');
        $idsuplier = $this->db->get('tb_suplier');
        return $idsuplier->row();
    }

    //function tambahakses($id){
    //    $total = $this->db->count_all_results('tb_submenu');

    //    for($i=0; $i<$total; $i++){
    //        $fungsi = array('id_submenu' => $i+1 , 
    //            'id_user' => $id);

    //        $this->db->insert('tb_akses', $fungsi);            
    //    }
    //}

    function getspek($id){
		$this->db->select('*');
        $this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_suplier.id_provinsi');
        $this->db->join('tb_kota', 'tb_kota.id_kota = tb_suplier.id_kota'); 
        $where = array(
            'id_suplier' => $id
        );
        $query = $this->db->get_where('tb_suplier', $where);
    	return $query->result();
    }

    function edit(){
        $suplier = array(

            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'id_kota' => $this->input->post('kota'),
            'id_provinsi' => $this->input->post('prov'),
            'tlp' => $this->input->post('tlp'),
            'email' => $this->input->post('email'),
            'website' => $this->input->post('website'),
            'norek' => $this->input->post('norek'),
            'bank' => $this->input->post('bank'),
            'anrek' => $this->input->post('anrek'),
        );

        $where = array(
            'id_suplier' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_suplier',$suplier);
    }

    
}