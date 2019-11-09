<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTebak extends CI_Controller {

    public function page($id='')
	{
        $cek_jawaban=$this->db->query("SELECT * FROM hasil_tebak_kata WHERE id_user = '$_SESSION[id_user]' AND id_soal = '$id'");
		if($cek_jawaban->num_rows() > 0 ){
                    $kunci =  $this->db->query('SELECT kunci AS knc from tebak_kata where id = "'.$id.'"')->row()->knc;
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
                        $this->db->update('hasil_tebak_kata', $data);
                    }
            $data['content'] = $this->db->query('SELECT * from tebak_kata where id = (select min(id) from tebak_kata where id > '.$id.')');
            $this->load->view('tebak_kata', $data);
		}else{
            $max = $this->db->query('SELECT MAX(id) AS maxid FROM tebak_kata')->row()->maxid;
                if(isset($_POST['jawaban'])&&$id!=$max){
                    $kunci =  $this->db->query('SELECT kunci AS knc from tebak_kata where id = "'.$id.'"')->row()->knc;
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
                    $this->db->insert('hasil_tebak_kata', $data);
                    $data['content'] = $this->db->query('SELECT * from tebak_kata where id = (select min(id) from tebak_kata where id > "'.$id.'")');
                    $this->load->view('tebak_kata', $data);
                }else if($id==$max){      
                    $kunci =  $this->db->query('SELECT kunci AS knc from tebak_kata where id = "'.$id.'"')->row()->knc;
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
                    $this->db->insert('hasil_tebak_kata', $data);
                    $benar_pilgan = $this->db->query('SELECT * from hasil_tebak_kata where id_soal <= 20 AND id_user = '.$_SESSION['id_user'].' AND status_jawaban = 1');
                    $benar_essay = $this->db->query('SELECT * from hasil_tebak_kata where id_soal >= 21 AND id_user = '.$_SESSION['id_user'].' AND status_jawaban = 1');
                    $score_pilgan = $benar_pilgan->num_rows()*2.5;
                    $score_essay = $benar_essay->num_rows()*10;
                    $data['score'] =  $score_pilgan+$score_essay;
                    $skor = $score_pilgan+$score_essay;
                    $add = [
                        'id_user' => $_SESSION['id_user'],
                        'score' => $skor
                    ];
                    $this->db->insert('score', $add);
                    // var_dump($score_pilgan);
                    // var_dump($score_essay);
                    $this->load->view('tebak_kata_selesai',$data);
        // redirect('selesai','refresh');
                }
        }
    }
    
    
    public function action_nama_tebak_kata($id='')
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
                $data['content'] = $this->db->query('SELECT * from tebak_kata where id = (select min(id) from tebak_kata where id > '.$id.')');
                $this->load->view('tebak_kata', $data);
        }else{
            $this->load->view('tebak_kata_awal');
        }
    }

    public function jawaban($id='')
	{
        redirect('CTebak/page/'.$id);
    }
    
    public function selesai()
	{
        $this->load->view('tebak_kata_selesai');
    }
}
