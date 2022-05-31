<?php
class User_model extends CI_Model
{

	//--------------------------------------------------------------------
	public function get_user_detail()
	{
		$id = $this->session->userdata('user_id');
		$query = $this->db->get_where('ci_users', array('id' => $id));
		return $result = $query->row_array();
	}
	//--------------------------------------------------------------------
	public function update_user($data)
	{
		$id = $this->session->userdata('user_id');
		$this->db->where('id', $id);
		$this->db->update('ci_users', $data);
		return true;
	}
	//--------------------------------------------------------------------
	public function change_pwd($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('ci_users', $data);
		return true;
	}
	//---------------------------------------------------
	// upload new transaction
	public function upload_transaction($data)
	{
		$query = $this->db->insert('transaction_table', $data);
		return true;
	}
	public function get_transaction_list()
	{
		$id = $this->session->userdata('user_id');
		$query = $this->db->get_where('transaction_table', array('user_id' => $id))->result_array();
		return $query;
	}
}
