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

		
		if (!empty($_GET['key'])) {
			$key = $_GET['key'];
			$w = " title like '%$key%'";

		}else{
			$w=1;
			
		}

		
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/CI_blog/index.php/news/index/';
		$config['total_rows'] = $this->db->count_all('myblog');  //获得表中的所有行
		//echo $config['total_rows'];
		//$config['total_rows'] = 9;
		$config['per_page'] = 5;
		
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';

		$this->pagination->initialize($config);
		
		$this->load->model('books_model');
		$data['results'] = $this->books_model->get_books($config['per_page'],$this->uri->segment(3));
		
		
		$data['page_list'] = $this->pagination->create_links();
		echo $this->pagination->create_links();
		
		$data['blogs'] = $this->news_model->blogs($w);
		$data['title'] = 'News archive';
		
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
		$data['blogs'] = $this->news_model->blogs();
		
		//echo "<script>alert('delete success!');</script>";
		//通过js跳回原页面
		echo'
			<script language="javascript"> 
				alert("create success!"); 
				window.location.href="http://localhost/CI_blog/index.php/news/create"; 
			</script> ';		
		/*
		echo'
		<script language="javascript"> 
			alert("delete success!"); 
			window.history.back(-1); 
		</script> ';
		*/
		
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