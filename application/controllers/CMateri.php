<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMateri extends CI_Controller {

    public function page($id='')
	{
        $data['content'] = $this->db->query("SELECT * from soal_ujian where id ='".$id."'");
        $this->load->view('materi_ujian', $data);
    }

    public function latihan($id='')
	{
        $data['content'] = $this->db->query("SELECT * from soal_latihan where id ='".$id."'");
        $this->load->view('materi_latihan', $data);
    }
}
