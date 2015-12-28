<?php
include_once('News.php');

class Login extends News {


	public function index()
	{
		//echo "blog login";
		$this->load->view('templates/header');
		$this->load->view('news/login');
		$this->load->view('templates/footer');
		
	}
	function check() {
        $this -> load -> model('user_test');
        $user = $this -> user_test -> u_select($_POST['u_name']);
		$pawd = $this -> user_test -> u_select($_POST['u_pawd']);
        if ($user) {
            if ($user[0] -> upawd == $_POST['u_pawd']) {
                //echo 'pw right';
				echo "<script>window.location.href='".site_url('news/')."'</script>";
                $this -> load -> library('session');
                $arr = array('s_id' => $user[0] -> uid);
                $this -> session -> set_userdata($arr);
            } else {
                echo 'pw wrong';
            }
        } else {
            echo 'name wrong';
        }
    }

    function is_login() {
        $this -> load -> library('session');
        if ($this -> session -> userdata('s_id')) {
            echo "logined";
        } else {
            echo "no login";
        }
    }

    function logout() {
        $this -> load -> library('session');
        $this -> session -> unset_userdata('s_id');
    }

}