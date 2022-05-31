<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends UR_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->model('user/user_model', 'user_model');
	}

	//-------------------------------------------------------------------------

	public function index()
	{
		$transaction = $this->user_model->get_transaction_list();
		$this->session->set_userdata('transaction', json_encode($transaction, JSON_UNESCAPED_SLASHES));
		if ($this->input->post('submit')) {
			//Chech validation
			$this->form_validation->set_rules('notes', 'notes', 'trim');
			if (empty($_FILES['userfile']['name'])) {
				$this->form_validation->set_rules('userfile', 'Document', 'required');
			}
			if ($this->form_validation->run() == TRUE) {

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
					redirect(base_url('user/profile'), 'refresh');
				} else {
					//if upload success
					$data2 = array('upload_data' => $this->upload->data());
					$img_url = '/uploads/' . $data2['upload_data']['file_name'];
					$data = array(
						'user_id' => intval($user_id),
						'month' => $this->input->post('month'),
						'notes' => $this->input->post('notes'),
						'transaction_type' => 'income',
						'date' => date('Y-m-d h:m:s'),
						'image_url ' => $img_url,
						'status ' => "Pending"
					);
					$data = $this->security->xss_clean($data);
					$this->user_model->upload_transaction($data);
					$result = true;
				}
			} else {
				$this->session->set_flashdata('error', "File is required");
				redirect(base_url('user/profile'), 'refresh');
			}
			if ($result) {
				$this->session->set_flashdata('msg', 'Upload Success!');
				redirect(base_url('user/profile'), 'refresh');
			} else {
				redirect(base_url('user/profile'), 'refresh');
			}
		} else {

			$data['user'] = $this->user_model->get_user_detail();

			$data['title'] = 'User Profile';

			$data['view'] = 'user/profile';

			$this->load->view('layout', $data);
		}
	}

	//-------------------------------------------------------------------------

	public function change_pwd()
	{

		$id = $this->session->userdata('user_id');

		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('new_pwd', 'Password', 'trim|required');

			$this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'trim|required|matches[new_pwd]');

			if ($this->form_validation->run() == FALSE) {

				$data['user'] = $this->user_model->get_user_detail();

				$data['view'] = 'user/profile';

				$this->load->view('layout', $data);
			} else {

				$data = array(

					'password' => password_hash($this->input->post('new_pwd'), PASSWORD_BCRYPT)

				);

				$data = $this->security->xss_clean($data);

				$result = $this->user_model->change_pwd($data, $id);
				//$result = true;

				if ($result) {

					$this->session->set_flashdata('msg', 'Password Successfuly Changed!');

					redirect(base_url('user/profile'));
				}
			}
		} else {

			$data['user'] = $this->user_model->get_user_detail();

			$data['title'] = 'Change Password';

			$data['view'] = 'user/profile';

			$this->load->view('layout', $data);
		}
	}
}
