<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Changelogs extends UR_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Changelogs';
		$data['view'] = 'user/changelogs';
		$this->load->view('layout', $data);
	}
}

?>	