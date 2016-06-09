<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserEntry_ctl extends CI_Controller {

	public function index()
	{
		$this->load->view('userentry_view');
	}
}
