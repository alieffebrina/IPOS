<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_jenisbarang extends CI_Model {

    function getjenisbarang(){
        $this->db->select('*');
        //$this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_pelanggan.id_provinsi');
        //$this->db->join('tb_kota', 'tb_kota.id_kota = tb_pelanggan.id_kota');
        $query = $this->db->get('tb_jenisbarang');
        return $query->result();
    }

    function getnama($ida){
        $where = array(
            'id_jenisbarang' => $ida
        );
        return $this->db->get_where('tb_jenisbarang',$where)->result();
    }

    function tambahdata($id){
        $st=$this->input->post('jenisbarang');
        $query = $this->db->query("SELECT jenisbarang FROM tb_jenisbarang where jenisbarang='".$st."'");
        if($query->num_rows()>0){
            return false;
        }else{
            $jenisbarang = array(
                'id_user' => $id,
                'jenisbarang' => $st,
                'tgl_update' => date('Y-m-d')
            );
            
            $this->db->insert('tb_jenisbarang', $jenisbarang);
            return true;
        }
    }

    function getspek($iduser){
        $this->db->select('*');
        //$this->db->join('tb_provinsi', 'tb_provinsi.id_provinsi = tb_pelanggan.id_provinsi');
        //$this->db->join('tb_kota', 'tb_kota.id_kota = tb_pelanggan.id_kota'); 
        $where = array(
            'id_jenisbarang' => $iduser
        );
        $query = $this->db->get_where('tb_jenisbarang', $where);
        return $query->result();
    }

    function edit($id){
        //$harga = $this->input->post('rupiah');
        //$harga_str = preg_replace("/[^0-9]/", "", $harga);
        $jenisbarang = array(

            'id_user' => $id,
            'jenisbarang' => $this->input->post('jenisbarang'),
            //'alamat' => $this->input->post('alamat'),
            //'id_kota' => $this->input->post('kota'),
            //'id_provinsi' => $this->input->post('prov'),
            //'tlp' => $this->input->post('tlp'),
            //'limit' => $harga_str,
            'tgl_update' => date('Y-m-d')
        );

        $where = array(
            'id_jenisbarang' =>  $this->input->post('id'),
        );
        
        $this->db->where($where);
        $this->db->update('tb_jenisbarang',$jenisbarang);
    }

    
}