<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Maps extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function google(){
		$data['title'] = 'google';
		$data['view'] = 'admin/maps/google';
		$this->load->view('layout', $data);
	}

	public function yandex(){
		$data['title'] = 'yandex';
		$data['view'] = 'admin/maps/yandex';
		$this->load->view('layout', $data);
	}

	public function jvector(){
		$data['title'] = 'jvector';
		$data['view'] = 'admin/maps/jvectormap';
		$this->load->view('layout', $data);
	}
}

?>	