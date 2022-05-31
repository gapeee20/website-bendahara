<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Changelogs extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Changelogs';
		$data['view'] = 'admin/changelogs';
		$this->load->view('layout', $data);
	}
}

?>	