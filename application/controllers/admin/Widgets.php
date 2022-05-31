<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Widgets extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function basic(){
		$data['title'] = 'Basic Card';
		$data['view'] = 'admin/widgets/cards/basic';
		$this->load->view('layout', $data);
	}

	public function colored(){
		$data['title'] = 'Colored Card';
		$data['view'] = 'admin/widgets/cards/colored';
		$this->load->view('layout', $data);
	}

	public function no_header(){
		$data['title'] = 'No Header Card';
		$data['view'] = 'admin/widgets/cards/no-header';
		$this->load->view('layout', $data);
	}

	public function infobox_1(){
		$data['title'] = 'Infobox 1';
		$data['view'] = 'admin/widgets/infobox/infobox-1';
		$this->load->view('layout', $data);
	}

	public function infobox_2(){
		$data['title'] = 'Infobox 2';
		$data['view'] = 'admin/widgets/infobox/infobox-2';
		$this->load->view('layout', $data);
	}

	public function infobox_3(){
		$data['title'] = 'Infobox 3';
		$data['view'] = 'admin/widgets/infobox/infobox-3';
		$this->load->view('layout', $data);
	}

	public function infobox_4(){
		$data['title'] = 'Infobox 4';
		$data['view'] = 'admin/widgets/infobox/infobox-4';
		$this->load->view('layout', $data);
	}

	public function infobox_5(){
		$data['title'] = 'Infobox 5';
		$data['view'] = 'admin/widgets/infobox/infobox-5';
		$this->load->view('layout', $data);
	}
}

?>	