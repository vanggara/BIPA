<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllererror extends CI_Controller {

	public function index()
	{
		$this->load->view('404');
  }

}
