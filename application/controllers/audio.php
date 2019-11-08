<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class audio extends CI_Controller {

    public function play($id='')
	{
        $data['content'] = $this->db->query('SELECT audio FROM latihan where id='.$id.'');
        header("Content-type: audio/mp3");
        header("Content-transfer-encoding:binary");
        header("Accept-Ranges:bytes");
        $this->load->view('latihan_first', $data);
    }
}
