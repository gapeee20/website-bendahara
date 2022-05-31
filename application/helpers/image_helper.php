<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function image_upload($upload)
{
	var_dump($upload);
	//configure file upload
	$config['upload_path']          = './uploads/';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['encrypt_name']        = TRUE;

	$this->load->library('upload', $config);
	if (!$this->upload->do_upload('userfile')) {
		//if upload not success
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('error', $error["error"]);
		//return false;
	} else {
		//if upload success
		$data2 = array('upload_data' => $this->upload->data());
		$img_url = '/uploads/transaction' . $data2['upload_data']['file_name'];
		$data_upload = array(
			'user_id' => $this->session->userdata('user_id'),
			'month' => $this->input->post('month'),
			'notes' => $this->input->post('notes'),
			'value' => $this->input->post('value'),
			'transaction_type' => $this->input->post('transaction_type'),
			'date' => date('Y-m-d : h:m:s'),
			'image_url ' => $img_url,
			'status ' => "Pending"
		);
		$data_upload = $this->security->xss_clean($data_upload);
		$this->user_model->upload_transaction($data_upload);
		//	return true;
	}
}
