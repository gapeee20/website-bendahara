<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Charts extends UR_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function morris(){
		$data['title'] = 'Morris Chart';
		$data['view'] = 'user/charts/morris';
		$this->load->view('layout', $data);
	}

	public function flot(){
		$data['title'] = 'Flot Chart';
		$data['view'] = 'user/charts/flot';
		$this->load->view('layout', $data);
	}

	public function chartjs(){
		$data['title'] = 'ChartJS';
		$data['view'] = 'user/charts/chartjs';
		$this->load->view('layout', $data);
	}

	public function sparkline(){
		$data['title'] = 'Sparkline Chart';
		$data['view'] = 'user/charts/sparkline';
		$this->load->view('layout', $data);
	}

	public function jquery_knob(){
		$data['title'] = 'Jquery Knob';
		$data['view'] = 'user/charts/jquery-knob';
		$this->load->view('layout', $data);
	}
}

?>	