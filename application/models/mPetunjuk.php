<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mPetunjuk extends CI_Model {

    public function next_petunjuk($id=''){
        $max = $this->db->query('SELECT MAX(id) AS maxid FROM petunjuk')->row()->maxid;
            if($id!=$max){
                $data['content'] = $this->db->query("SELECT * from petunjuk where id = (select min(id) from petunjuk where id > '".$id."')");
                $this->load->view('petunjuk', $data);
            }else{
                redirect('home');
            }
    }

    public function prev_petunjuk($id=''){
        $min = $this->db->query('SELECT MIN(id) AS minid FROM petunjuk')->row()->minid;
            if($id!=$min){
                $data['content'] = $this->db->query("SELECT * from petunjuk where id = (select max(id) from petunjuk where id < '".$id."')");
                $this->load->view('petunjuk', $data);
            }else{
                redirect('home');
            }
    }
}
?>