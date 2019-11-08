<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_Ujian extends CI_Model {

    public function detail_hasil_ujian($id){
        if ( !$this->db->query("SELECT * from hasil_ujian;"))
        {
                $error = $this->db->error(); // Has keys 'code' and 'message'
        }else{
            $data['content'] = $this->db->query("SELECT * from hasil_ujian where id='".$id."';");
            $this->load->view('detail_hasil_ujian', $data);
        }
    }
}
?>