<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Medias extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function gallery(){
		$data['title'] = 'Gallery';
		$data['view'] = 'admin/medias/image-gallery';
		$this->load->view('layout', $data);
	}

	public function carousel(){
		$data['title'] = 'carousel';
		$data['view'] = 'admin/medias/carousel';
		$this->load->view('layout', $data);
	}
}

?>	