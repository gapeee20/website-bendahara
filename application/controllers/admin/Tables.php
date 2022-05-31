<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Tables extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function normal(){
		$data['title'] = 'Normal Table';
		$data['view'] = 'admin/tables/normal-tables';
		$this->load->view('layout', $data);
	}

	public function jquery(){
		$data['title'] = 'jquery table';
		$data['view'] = 'admin/tables/jquery-datatable';
		$this->load->view('layout', $data);
	}

	public function editable(){
		$data['title'] = 'editable table';
		$data['view'] = 'admin/tables/editable-table';
		$this->load->view('layout', $data);
	}
}

?>	