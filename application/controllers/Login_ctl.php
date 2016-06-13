<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctl extends CI_Controller {

	public function index()
	{
			$data['flg'] = $this->input->post('flg');
			if ($data['flg'] == 0) {
				$array_items = array('logged_in');
				$this->session->unset_userdata($array_items);
				$this->load->view('login_view');
			} else {
				$this->load->view('login_view');
			}
	}
}
