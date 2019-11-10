<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Model {

    public function login()
	{
        // session_start();
        error_reporting(0);
        // $_SESSION['login']='login';
        if($_POST['login']){
                $username=$_POST['username'];
                $password=md5($_POST['password']);
        
                if ( !$this->db->query("SELECT * from user where username = '".$username."' AND password = '".$password."';"))
                {
                        $error = $this->db->error(); // Has keys 'code' and 'message'
                }else{
                    $query = $this->db->query("SELECT * from user where username = '".$username."' AND password = '".$password."';");

                    if($query->num_rows() == 1)
                    {
                        // echo "ok3";
                        // echo "oke2\n";
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password; 
                        $_SESSION['login']='login';
                        $this->load->model('Sign');
                        $this->Sign->hasil_ujian();
                    } 
                    else{
                        // echo "ok4";
                        // echo "oke3";
                        echo "<script>alert('Password atau username salah!');</script>";
                        redirect ('admin','refresh');
                    }
                }
        }
    }

    public function hasil_ujian(){
        if(isset($_SESSION['login'])){
            if ( !$this->db->query("SELECT DISTINCT user.username, user.asal, hasil_ujian.id_user FROM hasil_ujian join user on hasil_ujian.id_user = user.id"))
            {
                    $error = $this->db->error(); // Has keys 'code' and 'message'
            }else{
                $data['content'] = $this->db->query("SELECT DISTINCT user.username, user.asal, hasil_ujian.id_user FROM hasil_ujian join user on hasil_ujian.id_user = user.id");
                $this->load->view('hasil_ujian', $data);
            }
        }else{
            redirect('admin','refresh');
        }
    }
    
    public function logout()
    {
        error_reporting(0);
        session_unset();
        session_destroy();
        redirect('admin','refresh');
    }
}
?>