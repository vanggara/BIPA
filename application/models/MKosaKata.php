<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKosaKata extends CI_Model {

    public function kosa_kata(){
        $data['content'] = $this->db->query("SELECT * from kosa_kata");
        $this->load->view('kosa_kata', $data);
    }
}
?>