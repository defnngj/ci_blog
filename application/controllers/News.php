<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
		parse_str($_SERVER['QUERY_STRING'], $_GET);

		$this->load->library('pagination');//加载分页类
		$this->load->model('news_model');//加载books模型
		$res = $this->db->get('myblog');//进行一次查询            
		$config['base_url'] = base_url().'index.php/news/index';//设置分页的url路径              
		$config['total_rows'] = $res->num_rows();//得到数据库中的记录的总条数             
		$config['per_page'] = '3';//每页记录数
		$config['prev_link'] = 'Previous ';
		$config['next_link'] = ' Next';
		
		$this->pagination->initialize($config);//分页的初始化
		
		if (!empty($_GET['key'])) {
			$key = $_GET['key'];
			$w = " title like '%$key%'";
			
		}else{
			$w=1;
			
		}
		
		$data['blogs'] = $this->news_model->blogs($w,$config['per_page'],$this->uri->segment(3));//得到数据库记录
		
		$this->load->view('templates/header');
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
		
    }

    public function view($id = NULL)
	{

		$data['blogs_item'] = $this->news_model->up_blogs($id);

		if (empty($data['blogs_item']))
		{
			show_404();
		}

		$data['title'] = $data['blogs_item']['title'];

		$this->load->view('templates/header');
		$this->load->view('./news/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function del($id = NULL)
	{
		$this->news_model->del_blogs($id);

		//通过js跳回原页面
		echo'
			<script language="javascript"> 
				alert("create success!"); 
				window.location.href="http://localhost/CI_blog/index.php/news/"; 
			</script> ';		
	}
	
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->news_model->add_blogs();
			
			//跳回blog添加页面
			echo'
			<script language="javascript"> 
				alert("create success!"); 
				window.location.href="http://localhost/CI_blog/index.php/news/create"; 
			</script> ';
			
			//$this->load->view('news');
		}
	}
}