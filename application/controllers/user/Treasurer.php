<?php defined('BASEPATH') or exit('No direct script access allowed');

class Treasurer extends UR_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->model('admin/user_model', 'user_model');
	}

	//-------------------------------------------------------------------------

	public function index()
	{
		$transaction = $this->user_model->get_transaction_list();
		$this->session->set_userdata('transaction', json_encode($transaction, JSON_UNESCAPED_SLASHES));
		$data['user'] = $this->user_model->get_user_detail();
		//Set Title
		$data['title'] = 'Treasurer';
		$data['view'] = 'user/treasurer';
		// create ggrocery crud object
		$crud = new grocery_CRUD();
		// table to use
		$crud->set_theme('datatables');
		$crud->set_table('transaction_table')
			->set_subject('transaction_id')
			->columns('user_id','month','date','transaction_type','value','notes','image_url','status');
		//$crud->unset_delete();
		$crud->unset_add();
		$crud->unset_clone();
		$crud->set_rules('value', 'Value', 'numeric');
		$crud->callback_column('image_url', array($this, '_callback_webpage_url'));
		$crud->callback_column('user_id', array($this, '_callback_username'));
		$crud->callback_field('image_url',array($this,'_callback_webpage_url'));
		$crud->callback_field('user_id',array($this,'_callback_username'));

		$crud->field_type(
			'status',
			'dropdown',
			array('Approved' => 'Approved', 'Pending' => 'Pending')
		);
		$crud->display_as('user_id', 'Name');
		$crud->display_as('transaction_type', 'Type');
		$crud->display_as('transaction_id', 'Transaction');

		$crud->field_type('date', 'readonly');
		$crud->field_type('user_id', 'readonly');
		$crud->edit_fields(
			'user_id',
			'month',
			'date',
			'notes',
			'value',
			'transaction_type',
			'status'
		);
		// save result in output
		$data['output'] = $crud->render();
		//get cash status
		$cash_status = $this->user_model->get_cash_status();
		$income = 0;
		$spend = 0;
		//get total income
		foreach ($cash_status['income'] as $income_array) {
			$income += floatval($income_array['value']);
		}
		//get total spend
		foreach ($cash_status['spend'] as $spend_array) {
			$spend += floatval($spend_array['value']);
		}
		$data['income'] = $income;
		$data['spend'] = $spend;

		if ($this->input->post('submit')) {
			//Check validation
			$this->form_validation->set_rules('notes', 'notes', 'trim');
			if (empty($_FILES['userfile']['name'])) {
				$this->form_validation->set_rules('userfile', 'Document', 'required');
			}
			if ($this->form_validation->run() == TRUE) {
				$result = $this->image_upload($this->input->post());
			} else {
				$this->session->set_flashdata('error', "File is required");
				redirect(base_url('user/treasurer'), 'refresh');
			}
			if ($result){
				$this->session->set_flashdata('msg', 'Upload Success!');
				//var_dump($this->db->error()); 
				redirect(base_url('user/treasurer'), 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Upload Failed');
				redirect(base_url('user/treasurer'), 'refresh');
			}
		} else {
			$this->load->view('layout', $data);
		}
	}


	//-------------------------------------------------------------------------

	public function change_pwd()
	{

		$id = $this->session->userdata('user_id');

		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('new_pwd', 'Password', 'trim|required');

			$this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'trim|required|matches[password]');

			if ($this->form_validation->run() == FALSE) {

				$data['user'] = $this->user_model->get_user_detail();

				$data['view'] = 'user/treasurer';

				$this->load->view('layout', $data);
			} else {

				$data = array(

					'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)

				);

				$data = $this->security->xss_clean($data);

				$result = $this->user_model->change_pwd($data, $id);
				//$result = true;

				if ($result) {

					$this->session->set_flashdata('msg', 'Password Successfuly Changed!');

					redirect(base_url('user/treasurer'));
				}
			}
		} else {

			$data['user'] = $this->user_model->get_user_detail();

			$data['title'] = 'Change Password';

			$data['view'] = 'user/treasurer';

			$this->load->view('layout', $data);
		}
	}
	//-------------------------------------------------------------------------
	//Upload Function
	//-------------------------------------------------------------------------
	public function image_upload($upload)
	{
		$user_id = $this->session->userdata('user_id');
		$date_now = date("Y-m-d_h-i-sa_");
		$new_name = $date_now. $user_id;
		//configure file upload
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name']        = $new_name;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('userfile')) {
			//if upload not success
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', $error["error"]);
			return false;
		} else {
			//if upload success
			$data2 = array('upload_data' => $this->upload->data());
			$img_url = '/uploads/transaction' . $data2['upload_data']['file_name'];
			$data_upload = array(
				'user_id' => intval($user_id),
				'month' => $this->input->post('month'),
				'notes' => $this->input->post('notes'),
				'value' => $this->input->post('value'),
				'transaction_type' => $this->input->post('transaction_type'),
				'date' => date('Y-m-d h:m:s'),
				'image_url ' => $img_url,
				'status ' => "Pending"
			);
			$data_upload = $this->security->xss_clean($data_upload);
			$this->user_model->upload_transaction($data_upload);
			//var_dump($data_upload);
			return true;
		}
	}
	//-------------------------------------------------------------------------
	//Callback webpage Function for grocery CRUD
	//-------------------------------------------------------------------------
	public function _callback_webpage_url($value, $row)
	{
		return "<a href='" . base_url($value) . "'> Image </a>";
	}
	//-------------------------------------------------------------------------
	//Callback user Function for grocery CRUD
	//-------------------------------------------------------------------------
	public function _callback_username($value, $row)
	{
		$query = $this->db->get_where('ci_users', array('id' => $value))->row_array();
		return $query['firstname'] . " " .  $query['lastname'];
	}
}
