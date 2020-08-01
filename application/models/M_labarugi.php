<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kas extends CI_Model {

     function search($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        }

        // BINGUNG KO ;-(

        $query = "SELECT * from tb_kas";
        if(!empty($tgl[0]) && !empty($tgl[1])){
            $query=$query." where tglkas between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'";
        }
        $query = $this->db->query($query);

        return $query->result(); 
	  }
}