<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Helper extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Helper Classes';
		$data['view'] = 'admin/helper-classes';
		$this->load->view('layout', $data);
	}
}

?>	