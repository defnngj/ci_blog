<?php


class Signin extends CI_Controller {


	public function index()
	{
		$this->load->view('news/signin');
		
	}
	
	function regist() {
        $this->load->model('user_test'); //载入我们之前创建的User_test模型，首字母不用大小
        $arr = array('uname'=>$_POST['username'], 'upawd'=>$_POST['password']);
        $this->user_test->u_insert($arr); //调用user_test的u_insert方法插入数据
    }

}