<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Charts extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function morris(){
		$data['title'] = 'Morris Chart';
		$data['view'] = 'admin/charts/morris';
		$this->load->view('layout', $data);
	}

	public function flot(){
		$data['title'] = 'Flot Chart';
		$data['view'] = 'admin/charts/flot';
		$this->load->view('layout', $data);
	}

	public function chartjs(){
		$data['title'] = 'ChartJS';
		$data['view'] = 'admin/charts/chartjs';
		$this->load->view('layout', $data);
	}

	public function sparkline(){
		$data['title'] = 'Sparkline Chart';
		$data['view'] = 'admin/charts/sparkline';
		$this->load->view('layout', $data);
	}

	public function jquery_knob(){
		$data['title'] = 'Jquery Knob';
		$data['view'] = 'admin/charts/jquery-knob';
		$this->load->view('layout', $data);
	}
}

?>	