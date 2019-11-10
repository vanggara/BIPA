<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function hasil_ujian()
	{
    $this->load->model('Sign');
    $this->Sign->hasil_ujian();
  }
	public function admin_login()
	{
    if(!isset($_SESSION['login'])){
      $this->load->view('admin_login');
    }else{
      $this->load->model('Sign');
      $this->Sign->hasil_ujian();
    }
  }
  public function action_admin_login()
	{
    if(isset($_POST['login'])){
      // echo "1ok";
      $this->load->model('Sign');
      $this->Sign->login();
    }else if(isset($_SESSION['login'])){
      // echo "2ok";
      $this->load->model('Sign');
      $this->Sign->login();
    }else{
      // echo "3ok";
      $this->load->view('admin_login');
    }
  }

  public function detail_hasil_ujian($id='')
	{
        $this->load->model('Hasil_Ujian');
        $this->Hasil_Ujian->detail_hasil_ujian($id);
  }

  
	public function hapus_hasil($id='')
	{
		
		if(!isset($_SESSION['login'])){
			redirect('admin','refresh');
		}else{
			$this->db->where('id', $id);
			$this->db->delete('hasil_ujian');

			redirect("hasil_ujian","refresh");
		}
	}

  public function logout()
	{
    $this->load->model('Sign');
    $this->Sign->logout();
	}
}
