<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ui extends UR_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function alerts(){
		$data['title'] = 'Alerts';
		$data['view'] = 'user/ui/alerts';
		$this->load->view('layout', $data);
	}

	public function animations(){
		$data['title'] = 'Animations';
		$data['view'] = 'user/ui/animations';
		$this->load->view('layout', $data);
	}

	public function badges(){
		$data['title'] = 'Badges';
		$data['view'] = 'user/ui/badges';
		$this->load->view('layout', $data);
	}

	public function breadcrumbs(){
		$data['title'] = 'Breadcrumbs';
		$data['view'] = 'user/ui/breadcrumbs';
		$this->load->view('layout', $data);
	}

	public function buttons(){
		$data['title'] = 'Buttons';
		$data['view'] = 'user/ui/buttons';
		$this->load->view('layout', $data);
	}

	public function collapse(){
		$data['title'] = 'Collapse';
		$data['view'] = 'user/ui/collapse';
		$this->load->view('layout', $data);
	}

	public function colors(){
		$data['title'] = 'Colors';
		$data['view'] = 'user/ui/colors';
		$this->load->view('layout', $data);
	}

	public function dialogs(){
		$data['title'] = 'Dialogs';
		$data['view'] = 'user/ui/dialogs';
		$this->load->view('layout', $data);
	}

	public function icons(){
		$data['title'] = 'icons';
		$data['view'] = 'user/ui/icons';
		$this->load->view('layout', $data);
	}

	public function labels(){
		$data['title'] = 'labels';
		$data['view'] = 'user/ui/labels';
		$this->load->view('layout', $data);
	}

	public function list_group(){
		$data['title'] = 'list group';
		$data['view'] = 'user/ui/list-group';
		$this->load->view('layout', $data);
	}

	public function media_object(){
		$data['title'] = 'media object';
		$data['view'] = 'user/ui/media-object';
		$this->load->view('layout', $data);
	}

	public function modals(){
		$data['title'] = 'modals';
		$data['view'] = 'user/ui/modals';
		$this->load->view('layout', $data);
	}

	public function notifications(){
		$data['title'] = 'notifications';
		$data['view'] = 'user/ui/notifications';
		$this->load->view('layout', $data);
	}

	public function pagination(){
		$data['title'] = 'pagination';
		$data['view'] = 'user/ui/pagination';
		$this->load->view('layout', $data);
	}

	public function preloaders(){
		$data['title'] = 'preloaders';
		$data['view'] = 'user/ui/preloaders';
		$this->load->view('layout', $data);
	}

	public function progressbars(){
		$data['title'] = 'progressbars';
		$data['view'] = 'user/ui/progressbars';
		$this->load->view('layout', $data);
	}

	public function range_sliders(){
		$data['title'] = 'range sliders';
		$data['view'] = 'user/ui/range-sliders';
		$this->load->view('layout', $data);
	}

	public function sortable_nestable(){
		$data['title'] = 'sortable nestable';
		$data['view'] = 'user/ui/sortable-nestable';
		$this->load->view('layout', $data);
	}

	public function tabs(){
		$data['title'] = 'tabs';
		$data['view'] = 'user/ui/tabs';
		$this->load->view('layout', $data);
	}

	public function thumbnails(){
		$data['title'] = 'thumbnails';
		$data['view'] = 'user/ui/thumbnails';
		$this->load->view('layout', $data);
	}

	public function tooltips_popovers(){
		$data['title'] = 'tooltips popovers';
		$data['view'] = 'user/ui/tooltips-popovers';
		$this->load->view('layout', $data);
	}

	public function waves(){
		$data['title'] = 'waves';
		$data['view'] = 'user/ui/waves';
		$this->load->view('layout', $data);
	}


}

?>	