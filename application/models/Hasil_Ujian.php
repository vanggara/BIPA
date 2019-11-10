<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_Ujian extends CI_Model {

    public function detail_hasil_ujian($id){
            $data['content'] = $this->db->query('SELECT * from hasil_ujian where id_user='.$id.';');
            $data['content2'] = $this->db->query('SELECT * from user where id='.$id.';');
            $data['content3'] = $this->db->query('SELECT * from score where id_user='.$id.';');
            $this->load->view('detail_hasil_ujian', $data);
    }
}
?>