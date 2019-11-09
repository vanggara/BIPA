<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLatihan extends CI_Controller {

    public function page($id='')
	{
        $cek_jawaban=$this->db->query("SELECT * FROM hasil_latihan WHERE id_user = '$_SESSION[id_user]' AND id_soal = '$id'");
		if($cek_jawaban->num_rows() > 0 ){
                    $kunci =  $this->db->query('SELECT kunci AS knc from soal_latihan where id = "'.$id.'"')->row()->knc;
                    if(isset($_POST['jawaban'])){
                        if($kunci==$_POST['jawaban']){
                            $status = "1";
                        }else{
                            $status = "0";
                        }
                        $data = [
                            'jawaban' => $_POST['jawaban'],
                            'status_jawaban' => $status
                        ];
                        // var_dump($status);
                        $this->db->where('id_soal', $id);
                        $this->db->where('id_user', $_SESSION['id_user']);
                        $this->db->update('hasil_latihan', $data);
                    }
            $data['content'] = $this->db->query('SELECT * from soal_latihan where id = (select min(id) from soal_latihan where id > '.$id.')');
            $this->load->view('latihan', $data);
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
                        'id_user' => $_SESSION['id_user'],
                        'id_soal' => $id,
                        'jawaban' => $_POST['jawaban'],
                        'status_jawaban' => $status
                    ];
                    // var_dump($status);
                    $this->db->insert('hasil_latihan', $data);
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
                        'id_user' => $_SESSION['id_user'],
                        'id_soal' => $id,
                        'jawaban' => $_POST['jawaban'],
                        'status_jawaban' => $status
                    ];
                    $this->db->insert('hasil_latihan', $data);
                    $benar_pilgan = $this->db->query('SELECT * from hasil_latihan where id_soal <= 10 AND id_user = '.$_SESSION['id_user'].' AND status_jawaban = 1');
                    $benar_essay = $this->db->query('SELECT * from hasil_latihan where id_soal >= 11 AND id_user = '.$_SESSION['id_user'].' AND status_jawaban = 1');
                    $score_pilgan = $benar_pilgan->num_rows()*2.5;
                    $score_essay = $benar_essay->num_rows()*15;
                    $data['score'] =  $score_pilgan+$score_essay;
                    // var_dump($score_pilgan);
                    // var_dump($score_essay);
                    $this->load->view('latihan_selesai',$data);
        // redirect('selesai','refresh');
                }
        }
    }
    
    
    public function action_nama_latihan($id='')
	{
        if(isset($_POST['nama'])&&isset($_POST['asal'])){
                $data = [
                    'username' => $_POST['nama'],
                    'asal' => $_POST['asal'],
                    'role' => 2
                ];
                $this->db->insert('user', $data);
                $id_user =  $this->db->query('SELECT id AS usr from user where username = "'.$_POST['nama'].'" and asal = "'.$_POST['asal'].'"')->row()->usr;
                $_SESSION['id_user'] =$id_user;
                $data['content'] = $this->db->query('SELECT * from soal_latihan where id = (select min(id) from soal_latihan where id > '.$id.')');
                $this->load->view('latihan', $data);
        }else{
            redirect('Clatihan/action_nama_latihan/0','refresh');
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
