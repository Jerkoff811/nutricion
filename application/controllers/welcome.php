<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data["contenido"] = $this->load->view('base',null,true);
		$this->load->view('template',$data);
	}

	public function controlpanel()
	{
		$this->load->view('controlpanel');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */