<?php defined('BASEPATH') OR exit('No direct script acces allowed');
    class Mensaje_model extends CI_Model {
        function __construct()
        {
            parent:: __construct();
        }

        public function insert($datos){
            $this->db->insert("mensajes",$datos);
            if($this->db->affected_rows > 0 ){
                return true;
            }
            else {
                return false;
            }
        }

        public function listMails($idUser){

             $this->db->where("idUser",$idUser);
                     
             $listaMails = $this->db->get("mensajes");
           
            return $listaMails->result_array();

        }

        public function buscarMensaje($idMensaje){
            $this->db->where("idMensaje",$idMensaje);
            $listaMensaje = $this->db->get("mensajes");
            return $listaMensaje->result_array();
        }

        public function eliminarMail($idMensaje){
            $this->db->where("idMensaje",$idMensaje);
            $this->db->delete("mensajes");
        }
    }
    /*
$listaMails= $this->db->select("email,asunto,recibidos")
                     ->from("mensajes")
                     ->join("users","users.idUser = mensajes.idUser")
                     ->where("idUser",$idUser)
                     ->get();
           
            return $listaMails->result_array();*/
?>


