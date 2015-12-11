<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 计算控制器，类名首字母必须大写，所有的控制器必须继承自CI_Controller类
 */
class Calculate extends CI_Controller {
        // 构造方法
        function __construct() {
                parent::__construct();
        }
        
        // 默认方法
        function index() {
                // 加载calculate_view视图
                $this->load->view('calculate_view');
        }
}

/* End of file calculate.php */
/* Location: ./application/controllers/calculate.php */