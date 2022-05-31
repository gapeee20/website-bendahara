<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Tables extends UR_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function normal(){
		$data['title'] = 'Normal Table';
		$data['view'] = 'user/tables/normal-tables';
		$this->load->view('layout', $data);
	}

	public function jquery(){
		$data['title'] = 'jquery table';
		$data['view'] = 'user/tables/jquery-datatable';
		$this->load->view('layout', $data);
	}

	public function editable(){
		$data['title'] = 'editable table';
		$data['view'] = 'user/tables/editable-table';
		$this->load->view('layout', $data);
	}
}

?>	