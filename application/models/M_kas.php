<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kas extends CI_Model {

    function getall(){
        $this->db->select('*');
        $this->db->order_by('tglkas', 'ASC');
        $query = $this->db->get('tb_kas');
        return $query->result();
    }

     function search($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        }

        $query = "SELECT * from tb_kas";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $query=$query." where tglkas between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $query = $this->db->query($query);

        return $query->result(); 
	  }

     function tambahdata($id){
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);

        $kas = array(
            'id_user' => $id,
            'ket' => $this->input->post('ket'),
            'nominal' => $harga_str,
            'tglkas' => $this->input->post('tgl')
        );
        
        $this->db->insert('tb_kas', $kas);
    }

    function getspek($ida){
        $this->db->select('*');
        $where = array(
            'id_kas' => $ida
        );
        $query = $this->db->get_where('tb_kas', $where);
        return $query->result();
    }

    function edit($id){
        
        $harga = $this->input->post('rupiah');
        $harga_str = preg_replace("/[^0-9]/", "", $harga);
        $barang = array(

            'id_user' => $id,
            'tglkas' => $this->input->post('tgl'),
            'nominal' => $harga_str
        );

        $where = array(
            'id_kas' =>  $this->input->post('idkas'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_kas',$barang);
    }

}