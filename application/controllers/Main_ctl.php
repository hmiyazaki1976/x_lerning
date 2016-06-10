<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctl extends CI_Controller {

	public function index()	{
		$loggedFlg = $_session['logged_in'];
		if (is_null($loggedFlg) ) {
			redirect( "http://localhost/x_lerning/login_ctl" );
		} else {
			$this->load->model('menu_model');
			$data["results"] = $this->menu_model->get_testkbnList();
			$this->load->view('header_view');
			$this->load->view('sidemenu_view', $data);
			$this->load->view('potal_view');
			$this->load->view('footer_view');
		}
	}

	public function members() {
		$this->load->view('potal_view');
	}

	public function login() {
		$this->load->view('login_view');
	}

	public function login_validation(){
		$this->load->library("form_validation");	//フォームバリデーションライブラリを読み込む。
		//利用頻度の高いライブラリ（HTMLヘルパー、URLヘルパーなど）はオートロード設定をしますが、
		//フォームバリデーションライブラリはログインバリデーションライブラリ内のみで読み込みます。

		$this->form_validation->set_rules("email", "メール", "required|trim|xss_clean");
		$this->form_validation->set_rules("password", "パスワード", "required|md5|trim");
		if($this->form_validation->run()){	//バリデーションエラーがなかった場合の処理
			redirect("potal_ctl/members");
		}else{							//バリデーションエラーがあった場合の処理
			$this->load->view("login");
		}
	}
}
