<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Typography extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Typography';
		$data['view'] = 'admin/typography';
		$this->load->view('layout', $data);
	}
}

?>	