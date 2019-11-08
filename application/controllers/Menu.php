<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function tujuan()
	{
		$this->load->view('tujuan');
	}
	
	public function splash()
	{
	  $this->load->view('splash_screen');
	}

	public function informasi()
	{
	  $this->load->view('informasi');
	}

	public function next_petunjuk($id='')
	{
        $this->load->model('mPetunjuk');
        $this->mPetunjuk->next_petunjuk($id);
	}
	  
	public function prev_petunjuk($id='')
	{
        $this->load->model('mPetunjuk');
        $this->mPetunjuk->prev_petunjuk($id);
  	}

	public function materi()
	{
		$this->load->view('materi');
	}
  	
	public function home()
	{
		$this->load->view('home');
  	}

	public function youtube()
	{
		$this->load->view('youtube');
  	}

  	public function kamus()
	{
		$this->load->view('kamus');
  	}
  
  	public function ujian_nama()
	{
		$this->load->view('ujian-input-nama');
	}
	  
  	public function tata_bahasa()
	{
		$this->load->view('tata-bahasa');
	  }
	  
  	public function profil()
	{
		$this->load->view('profil');
	  }
	  
  	public function latihan()
	{
		$this->load->view('latihan_awal');
  	}
}