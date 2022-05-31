<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ui extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function alerts(){
		$data['title'] = 'Alerts';
		$data['view'] = 'admin/ui/alerts';
		$this->load->view('layout', $data);
	}

	public function animations(){
		$data['title'] = 'Animations';
		$data['view'] = 'admin/ui/animations';
		$this->load->view('layout', $data);
	}

	public function badges(){
		$data['title'] = 'Badges';
		$data['view'] = 'admin/ui/badges';
		$this->load->view('layout', $data);
	}

	public function breadcrumbs(){
		$data['title'] = 'Breadcrumbs';
		$data['view'] = 'admin/ui/breadcrumbs';
		$this->load->view('layout', $data);
	}

	public function buttons(){
		$data['title'] = 'Buttons';
		$data['view'] = 'admin/ui/buttons';
		$this->load->view('layout', $data);
	}

	public function collapse(){
		$data['title'] = 'Collapse';
		$data['view'] = 'admin/ui/collapse';
		$this->load->view('layout', $data);
	}

	public function colors(){
		$data['title'] = 'Colors';
		$data['view'] = 'admin/ui/colors';
		$this->load->view('layout', $data);
	}

	public function dialogs(){
		$data['title'] = 'Dialogs';
		$data['view'] = 'admin/ui/dialogs';
		$this->load->view('layout', $data);
	}

	public function icons(){
		$data['title'] = 'icons';
		$data['view'] = 'admin/ui/icons';
		$this->load->view('layout', $data);
	}

	public function labels(){
		$data['title'] = 'labels';
		$data['view'] = 'admin/ui/labels';
		$this->load->view('layout', $data);
	}

	public function list_group(){
		$data['title'] = 'list group';
		$data['view'] = 'admin/ui/list-group';
		$this->load->view('layout', $data);
	}

	public function media_object(){
		$data['title'] = 'media object';
		$data['view'] = 'admin/ui/media-object';
		$this->load->view('layout', $data);
	}

	public function modals(){
		$data['title'] = 'modals';
		$data['view'] = 'admin/ui/modals';
		$this->load->view('layout', $data);
	}

	public function notifications(){
		$data['title'] = 'notifications';
		$data['view'] = 'admin/ui/notifications';
		$this->load->view('layout', $data);
	}

	public function pagination(){
		$data['title'] = 'pagination';
		$data['view'] = 'admin/ui/pagination';
		$this->load->view('layout', $data);
	}

	public function preloaders(){
		$data['title'] = 'preloaders';
		$data['view'] = 'admin/ui/preloaders';
		$this->load->view('layout', $data);
	}

	public function progressbars(){
		$data['title'] = 'progressbars';
		$data['view'] = 'admin/ui/progressbars';
		$this->load->view('layout', $data);
	}

	public function range_sliders(){
		$data['title'] = 'range sliders';
		$data['view'] = 'admin/ui/range-sliders';
		$this->load->view('layout', $data);
	}

	public function sortable_nestable(){
		$data['title'] = 'sortable nestable';
		$data['view'] = 'admin/ui/sortable-nestable';
		$this->load->view('layout', $data);
	}

	public function tabs(){
		$data['title'] = 'tabs';
		$data['view'] = 'admin/ui/tabs';
		$this->load->view('layout', $data);
	}

	public function thumbnails(){
		$data['title'] = 'thumbnails';
		$data['view'] = 'admin/ui/thumbnails';
		$this->load->view('layout', $data);
	}

	public function tooltips_popovers(){
		$data['title'] = 'tooltips popovers';
		$data['view'] = 'admin/ui/tooltips-popovers';
		$this->load->view('layout', $data);
	}

	public function waves(){
		$data['title'] = 'waves';
		$data['view'] = 'admin/ui/waves';
		$this->load->view('layout', $data);
	}


}

?>	