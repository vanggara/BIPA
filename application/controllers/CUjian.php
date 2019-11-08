<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CUjian extends CI_Controller {

  	public function action_ujian_nama()
  	{
        if(isset($_POST['nama'])&&isset($_POST['asal'])){
            $_SESSION['nama'] =$_POST['nama'];
            $_SESSION['asal'] =$_POST['asal'];
            if(isset($_SESSION['nama'])&&isset($_SESSION['asal'])){
                $data = [
                    'nama' => $_SESSION['nama'],
                    'asal' => $_SESSION['asal']
                ];
                $this->db->insert('hasil_ujian', $data);
                redirect('ujian','refresh');
            }
        }
      }
      
    public function ujian($id='')
    {
		if(!isset($_SESSION['nama'])){
			redirect('ujian_nama','refresh');
		}else{
            $max = $this->db->query('SELECT MAX(id) AS maxid FROM soal_ujian')->row()->maxid;
                if(isset($_POST['jawaban'])&&$id!=$max){
                    $upd = [
                        'j'.$id => $_POST['jawaban']
                    ];
                    $this->db->where('nama', $_SESSION['nama']);
                    $this->db->update('hasil_ujian', $upd);
                    $data['content'] = $this->db->query('SELECT * from soal_ujian where id = (select min(id) from soal_ujian where id > "'.$id.'")');
                    $this->load->view('ujian', $data);
                }else if(!isset($_POST['jawaban'])&&$id!=$max){
                    $data['content'] = $this->db->query('SELECT * from soal_ujian where id = (select min(id) from soal_ujian where id > "'.$id.'")');
                    $this->load->view('ujian', $data);
                }else if($id==$max){      
                    $upd = [
                        'j'.$id => $_POST['jawaban']
                    ];
                    $this->db->where('nama', $_SESSION['nama']);
                    $this->db->update('hasil_ujian', $upd);
                    redirect('selesai');
                }
        }
    }
    
    public function selesai()
	{
        $this->load->view('latihan_selesai');
    }
}