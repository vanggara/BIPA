<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLatihan extends CI_Controller {

    public function page($id='')
	{
        
		if(!isset($_SESSION['nama'])){
			redirect('latihan_awal','refresh');
		}else{
            $max = $this->db->query('SELECT MAX(id) AS maxid FROM soal_latihan')->row()->maxid;
                if(isset($_POST['jawaban'])&&$id!=$max){
                    $kunci =  $this->db->query('SELECT kunci AS knc from soal_latihan where id = "'.$id.'"')->row()->knc;
                    if($kunci==$_POST['jawaban']){
                        $status = "1";
                    }else{
                        $status = "0";
                    }
                    $data = [
                        'nama' => $_SESSION['nama'],
                        'asal' => $_SESSION['asal'],
                        'nomor_soal' => $id,
                        'jawaban' => $_POST['jawaban'],
                        'status_jawaban' => $status
                    ];
                    // var_dump($status);
                    $this->db->insert('hasil_latihan', $data);
                    $data['content'] = $this->db->query('SELECT * from soal_latihan where id = (select min(id) from soal_latihan where id > "'.$id.'")');
                    $this->load->view('latihan', $data);
                }else if(!isset($_POST['jawaban'])&&$id!=$max){
                    $data['content'] = $this->db->query('SELECT * from soal_latihan where id = (select min(id) from soal_latihan where id > "'.$id.'")');
                    $this->load->view('latihan', $data);
                }else if($id==$max){      
                    $kunci =  $this->db->query('SELECT kunci AS knc from soal_latihan where id = "'.$id.'"')->row()->knc;
                    if($kunci==$_POST['jawaban']){
                        $status = "1";
                    }else{
                        $status = "0";
                    }
                    $data = [
                        'nama' => $_SESSION['nama'],
                        'asal' => $_SESSION['asal'],
                        'nomor_soal' => $id,
                        'jawaban' => $_POST['jawaban'],
                        'status_jawaban' => $status
                    ];
                    // var_dump($status);
                    $this->db->insert('hasil_latihan', $data);
                    redirect('selesai');
                }
        }
    }
    
    
    public function action_nama_latihan($id='')
	{
        if(isset($_POST['nama'])&&isset($_POST['asal'])){
            $_SESSION['nama'] =$_POST['nama'];
            $_SESSION['asal'] =$_POST['asal'];
            if(isset($_SESSION['nama'])&&isset($_SESSION['asal'])){
                $max = $this->db->query('SELECT MAX(id) AS maxid FROM soal_latihan')->row()->maxid;
                if($id!=$max){
                    $data['content'] = $this->db->query('SELECT * from soal_latihan where id = (select min(id) from soal_latihan where id > '.$id.')');
                    $this->load->view('latihan', $data);
                }else{
                    redirect('selesai');
                }
            }
        }
    }

    public function jawaban($id='')
	{
        redirect('Clatihan/page/'.$id);
    }
    
    public function selesai()
	{
        $this->load->view('latihan_selesai');
    }
}
