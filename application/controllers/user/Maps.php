<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Maps extends UR_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function google(){
		$data['title'] = 'google';
		$data['view'] = 'user/maps/google';
		$this->load->view('layout', $data);
	}

	public function yandex(){
		$data['title'] = 'yandex';
		$data['view'] = 'user/maps/yandex';
		$this->load->view('layout', $data);
	}

	public function jvector(){
		$data['title'] = 'jvector';
		$data['view'] = 'user/maps/jvectormap';
		$this->load->view('layout', $data);
	}
}

?>	