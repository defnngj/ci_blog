<?php

class Signin extends CI_Controller {
	
	
	
	public function index()
	{	$this->load->view("templates/header");
		$this->load->view('news/signin');
		$this->load->view('templates/footer');
	}
	
	function regist() {
		$this->load->library('encrypt'); //出始化加密类
		
        $this->load->model('user_test'); //载入我们之前创建的User_test模型，首字母不用大小
		
		$pawd = $this->encrypt->encode($_POST['password']);  //对密码进行加密
        
		$arr = array('uname'=>$_POST['username'],
					 'upawd'=>$pawd,
					 'phone'=>$_POST['phone'],
					 'email'=>$_POST['email'],
					 );
        $this->user_test->u_insert($arr); //调用user_test的u_insert方法插入数据
		echo'
			<script language="javascript"> 
				alert("Regist success!");
				window.location.href="http://localhost/CI_blog/index.php/signin/"; 
			</script> ';
    }
	
	// 密码加密测试
	function pwdtest(){
		$this->load->library('encrypt');//在控制器里面调用加密类
		
		/*加密过程*/
		//第一种方法
		$a = 'My secret message';
		$aa = $this->encrypt->encode($a);
		echo $aa;
		echo "<br />";
		//第二种方法
		$b = 'My secret message';
		$b1 = 'super-secret-key';
		$bb = $this->encrypt->encode($b, $b1);
		echo $bb;
		echo "<br />";
		/*解密过程*/
		//第一种方法
		$c = $aa;
		$cc = $this->encrypt->decode($c);
		echo $cc;
		echo "<br />";
		//第二种方法
		$d = $bb;
		$d2 = 'super-secret-key';
		$dd = $this->encrypt->decode($d, $d2);
		echo $dd;
	}

}