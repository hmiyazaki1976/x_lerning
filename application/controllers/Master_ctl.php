<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_ctl extends CI_Controller {

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
		$postdata['accesskbn'] = $this->input->post('accesskbn');

		$this->load->model('menu_model');
		$data["results"] = $this->menu_model->get_testkbnList();
		$this->load->view('css_view');
		$this->load->view('header_view');

		switch ($postdata['accesskbn']) {
			case "profile":
				$this->load->view('profedit_view');
			break;
			case "askmaster":
				$this->load->view('askedit_view');
			break;
			case "sikenkbn":
				$this->load->view('sikenkbnedit_view');
			break;
		}
		$this->load->view('content_view');
		$this->load->view('footer_view');
	}
}
