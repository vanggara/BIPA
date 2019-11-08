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
                    // echo "ok";
                        $error = $this->db->error(); // Has keys 'code' and 'message'
                }else{
                    // echo "ok2";
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
            if ( !$this->db->query("SELECT * from hasil_ujian;"))
            {
                    $error = $this->db->error(); // Has keys 'code' and 'message'
            }else{
                $data['content'] = $this->db->query("SELECT * from hasil_ujian;");
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