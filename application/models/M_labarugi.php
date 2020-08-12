<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_labarugi extends CI_Model {

     function search(){
        if(isset($_POST) && !empty($_POST)){
            $tgl=explode(' - ', $_POST['tgl']);
            $tgl_mulai=explode('/', $tgl[0]);
            $tgl_sampai=explode('/', $tgl[1]);
        }
        $sql ='';
        if(!empty($tgl[0]) && !empty($tgl[1])){
        $sql = "SELECT a.jual,b.beli,c.kas,(a.jual-b.beli) laba_kotor, (a.jual-b.beli-c.kas) laba_bersih from (select 'laba_rugi' as report,sum(total) jual from tb_penjualan  where tglnota between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."') a join (select 'laba_rugi' as report,sum(total) beli from tb_pembelian  where tglnotapembelian between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."') b on a.report=b.report join (select 'laba_rugi' as report,sum(nominal) kas from tb_kas  where tglkas between '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."')c on c.report=a.report";
            $query = $this->db->query($sql);
            return $query->result(); 
        }else{
            return array();
	    }
    }

    function lbbeli($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

         $this->db->select('sum(total) as totalbulanini');

        if(!empty($tgl[0]) && !empty($tgl[1])){
        
        $this->db->where("tglnotapembelian BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_pembelian')->result();
    }

    function lbjual($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

         $this->db->select('sum(total) as totalbulanini');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglnota BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_penjualan')->result();
    }

    function lbkas($tgl){
        if(isset($tgl) && !empty($tgl)){
            $tgl=explode('-', $tgl);
            $tgl_mulai=explode('.', $tgl[0]);
            $tgl_sampai=explode('.', $tgl[1]);
        } 

        $this->db->select('sum(nominal) as totalbulanini');

        if(!empty($tgl[0]) && !empty($tgl[1])){

        $this->db->where("tglkas BETWEEN '".($tgl_mulai[2]."-".$tgl_mulai[1]."-".$tgl_mulai[0])."' and '".($tgl_sampai[2]."-".$tgl_sampai[1]."-".$tgl_sampai[0])."'");
        }

        return $this->db->get('tb_kas')->result();
    }

}