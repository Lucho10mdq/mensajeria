<?php
    class Usuario_model extends CI_Model
    {
        function __construct()
		{
			parent:: __construct();
        }
        
        public function checkinglogin($email,$password) {
           
            $this->db->where("email",$email);
            $this->db->where("password",$password);
            //$this->limit(1);
            return $res=$this->db->get("users")->row_array();
        }

        public function insert($datos){
            $this->db->insert("users",$datos);
            if($this->db->affected_rows > 0) {
                return true;
            }
            else {
                return false;
            }
        }

        public function listUser(){
            //$this->db->select("*");
            $res = $this->db->get("users");
            return $res->result_array();
        }
    }
    
?>