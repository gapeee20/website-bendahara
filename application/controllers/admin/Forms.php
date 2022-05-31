<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Forms extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function basic(){
		$data['title'] = 'basic form';
		$data['view'] = 'admin/forms/basic-form-elements';
		$this->load->view('layout', $data);
	}

	public function advanced(){
		$data['title'] = 'advance form';
		$data['view'] = 'admin/forms/advanced-form-elements';
		$this->load->view('layout', $data);
	}

	public function examples(){
		$data['title'] = 'form examples';
		$data['view'] = 'admin/forms/form-examples';
		$this->load->view('layout', $data);
	}

	public function validation(){
		$data['title'] = 'form validation';
		$data['view'] = 'admin/forms/form-validation';
		$this->load->view('layout', $data);
	}

	public function wizard(){
		$data['title'] = 'wizard';
		$data['view'] = 'admin/forms/form-wizard';
		$this->load->view('layout', $data);
	}

	public function editors(){
		$data['title'] = 'editors';
		$data['view'] = 'admin/forms/editors';
		$this->load->view('layout', $data);
	}
}

?>	