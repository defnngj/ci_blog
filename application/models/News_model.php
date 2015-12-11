<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	//获取所有blog
	public function blogs($w = FALSE)
	{
		$offset = $this->uri->segment(3); // 本例中，偏移量位于uri的第三段
		echo "================================";
		echo $offset;
		echo "================================";
		//$this->db->limit($config['per_page'], $offset); // limit(每页显示数量，偏移量)
		

		if($w == 1)
		{
			$query = $this->db->query("select * from myblog where $w order by id desc limit 5;");
			return $query->result_array();
		
		}elseif(strpos($w,"title like"))
		{
			$query = $this->db->query("select * from myblog where $w order by id desc limit 5;");
			return $query->result_array();
		
		}else{
			//$query = $this->db->get("myblog");
			//return $query->result_array();
			$query=$this->db->get('myblog',5,$this->uri->segment(3));
			$data['list'] = $this->db->get("myblog")->result_array();
			return $data['list'];
			
		}
		
	}
	
	//查看一篇blog
	public function up_blogs($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('myblog');
			return $query->result_array();
		}
		//更新点击数
		$this->db->query("update myblog set hits=hits+1 where id='$id';");

		$query = $this->db->get_where('myblog', array('id' => $id));
		return $query->row_array();
	}
	
	//添加一篇blog
	public function add_blogs()
	{
		$this->load->helper('url');

		//$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$d = date("Y-m-d");

		$data = array(
			'title' => $this->input->post('title'),
			'dates' => $d,
			'contents' => $this->input->post('text')
		);

		return $this->db->insert('myblog', $data);
	}
	//删除一篇blog
	public function del_blogs($id = FALSE){
		
		$this->load->helper('url');
		
		if ($id === FALSE)
		{
			$query = $this->db->get('myblog');
			return $query->result_array();
		}

		$array = array(
			'id' => $id
		);

		return $this->db->delete("myblog",$array);
		
	}
}