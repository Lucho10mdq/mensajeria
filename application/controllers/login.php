<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model("usuario_model");
                //$this->load->library('session');
        }

        public function mostrar($vista="", $datos = array()) {
            $this->load->view('Temas/cabecera');
            $this->load->view($vista,$datos);
        }

        public function index() {
            $this->mostrar('login');
        }

        public function registrarse() {
            $this->mostrar('registrarse');
        }

        public function registrarUsuario(){
           
            $nombre = $this->input->post("nombre");
            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $datos = array("nombre" => $nombre,
                           "email" => $email,
                           "password" => $password 
            );

            if($this->usuario_model->insert($datos) == true)
            {
                echo "Se guardo con exito";
                $op["op"]="Se guardo con exito";
                $this->mostrar("login",$op); 
            }
            else {
                echo "Error al guardar";
            }
            redirect('login');
        }
        public function ingresar() {
        
            $email = $this->input->post("email");
            $password = $this->input->post("password");
           
           
            if($user = $this->usuario_model->checkinglogin($email,$password)) {
                $this->session->set_userdata("idUser",$user["idUser"]);
                $this->session->set_userdata("nombre",$user["nombre"]);
                redirect('main/main');
            } else {
                redirect('login');
            }
             
        }
    }
?>