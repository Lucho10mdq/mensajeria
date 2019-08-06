<?php
    class Main extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->model("usuario_model");
                $this->load->model("mensaje_model");
        }
        public function mostrar($vista="", $datos = array()) {
            $this->load->view('Temas/cabecera');
            $this->load->view($vista,$datos);
        }

        public function index() {
            $this->mostrar('main');
        }

        public function enviarMensaje(){
            $usuarios = array();
            $usuarios["usuarios"] = $this->usuario_model->listUser();
         
            $this->mostrar('enviar_mensaje',$usuarios);
        }

        public function listUser(){
          
            $usuarios["usuarios"] = $this->usuario_model->listUser();
           
            $this->mostrar('enviar_mensaje',$usuarios);
        }

        public function guardarMensaje(){
            $enviado = $this->session->userdata("idUser");
            $idUser = $this->input->post("select");
            $asunto = $this->input->post("asunto");
            $recibidos = $this->input->post("recibidos");
            $datos = array(
                "idUser" => $idUser,
                "asunto" => $asunto,
                "recibidos" => $recibidos,
                "enviado" => $enviado
            );
            if($this->mensaje_model->insert($datos) == true){
                echo "se guardo con exito";
            }
        }

        public function listarMails(){

            $idUser = $this->session->userdata("idUser");
            $listaMails["listaMails"] = $this->mensaje_model->listMails($idUser);
            $this->mostrar('bandeja_entrada',$listaMails);
        }

        public function buscarMail($idMensaje = ""){
           
            if(intval($idMensaje)){
                $listaMails["listaMails"] = $this->mensaje_model->buscarMensaje($idMensaje);
              
                $this->mostrar('mensaje',$listaMails);
            }
           
        }

        public function eliminarMail($idMensaje =""){
            if(intval($idMensaje)){
                $this->mensaje_model->eliminarMail($idMensaje);
            }
            $idUser = $this->session->userdata("idUser");
            $listaMails["listaMails"] = $this->mensaje_model->listMails($idUser);
            $this->mostrar('bandeja_entrada',$listaMails);
           
        }
    }
?>