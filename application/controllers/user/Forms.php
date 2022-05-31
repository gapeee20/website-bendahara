<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Forms extends UR_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function basic(){
		$data['title'] = 'basic form';
		$data['view'] = 'user/forms/basic-form-elements';
		$this->load->view('layout', $data);
	}

	public function advanced(){
		$data['title'] = 'advance form';
		$data['view'] = 'user/forms/advanced-form-elements';
		$this->load->view('layout', $data);
	}

	public function examples(){
		$data['title'] = 'form examples';
		$data['view'] = 'user/forms/form-examples';
		$this->load->view('layout', $data);
	}

	public function validation(){
		$data['title'] = 'form validation';
		$data['view'] = 'user/forms/form-validation';
		$this->load->view('layout', $data);
	}

	public function wizard(){
		$data['title'] = 'wizard';
		$data['view'] = 'user/forms/form-wizard';
		$this->load->view('layout', $data);
	}

	public function editors(){
		$data['title'] = 'editors';
		$data['view'] = 'user/forms/editors';
		$this->load->view('layout', $data);
	}
}

?>	