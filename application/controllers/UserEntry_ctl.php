<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserEntry_ctl extends CI_Controller {

	public function __construct(){
   parent::__construct();
	 $this->load->model('Userentry_model');
  }

	public function index()
	{
		$this->load->view('userentry_view');
	}

	public function entry_validate() {
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['name'] = $this->input->post('name');
		$data['fastname'] = $this->input->post('fastname');
		$data['lastname'] = $this->input->post('lastname');

		// データ重複のチェックなどバリデーションロジックを入れよう
		$validFlg = TRUE;
		$data['validflg'] = $validFlg;
		if ($validFlg) {
			$this->Userentry_model->set_User($data);
			$newdata = array(
			        'logged_in'  => TRUE,
			        'loginName'  => $data['name'],
			        'fastName'   => $data['fastname'],
							'lastName'   => $data['lastname']
			);

			$this->session->set_userdata($newdata);

			$this->load->view('userentry_complete_view', $data);
		} else {
			$this->load->view('userentry_view', $data);
		}
	}
}
