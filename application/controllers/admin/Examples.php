<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Examples extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function signin(){
		$this->load->view('admin/examples/sign-in');
	}

	public function signup(){
		$this->load->view('admin/examples/sign-up');
	}

	public function forgot_password(){		
		$this->load->view('admin/examples/forgot-password');
	}

	public function blank(){	
		$data['title'] = 'Blank Page';
		$data['view'] = 'admin/examples/blank';
		$this->load->view('layout', $data);
	}

	public function page_404(){		
		$this->load->view('admin/examples/404');
	}

	public function page_500(){		
		$this->load->view('admin/examples/500');
	}
}

?>	