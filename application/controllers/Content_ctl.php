<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_ctl extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (isset($_SESSION['logged_in'])) {
			$loggedFlg = $_SESSION['logged_in'];
		} else {
			$loggedFlg = FALSE;
		}
		if (!$loggedFlg) {
			redirect( "http://localhost/x_lerning/login_ctl" );
		}
	}


	public function index()	{
		$this->load->model('menu_model');
		$data["results"] = $this->menu_model->get_testkbnList();
		$this->load->view('css_view');
		$this->load->view('header_view');
		$this->load->view('sidemenu_view', $data);
		$this->load->view('content_view');
		$this->load->view('footer_view');
	}
}
