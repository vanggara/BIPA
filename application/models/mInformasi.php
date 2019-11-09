<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mInformasi extends CI_Model {

    public function maps(){
        $data['content'] = $this->db->query("SELECT * from kuliner");
        $this->load->view('informasi', $data);
    }
}
?>