<?php
    class User_test extends CI_Model
    {

        function __construct()
        {
            parent::__construct();
            $this -> load -> database();
        }

        function u_insert($arr) {
            $this -> db -> insert('user', $arr);
        }

        function u_update($id, $arr) {
            $this -> db -> where('uid', $id);
            $this -> db -> update('user', $arr);
        }

        function u_del($id) {
            $this -> db -> where('uid', $id);
            $this -> db -> delete('user');
        }

        function u_select($name) {
            $this -> db -> where('uname', $name);
            $this -> db -> select('*');
            $query = $this -> db -> get('user');
            return $query -> result();
        }
    }
?>