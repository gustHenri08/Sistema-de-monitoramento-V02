<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroPresos extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Presos_model');//carregando o model dos presos
    }

    public function index(){
      $this->load->view('cadastrar-presos-view');
    }

    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->Presos_model->cadastroPresos();
        redirect('Presos');

    }

    public function editPresos($idpresos){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['detentos'] = $this->Presos_model->showpresos($idpresos);


        $this->load->view('cadastrar-presos-view', $edit);
    }

    public function updatepresos($idpresos){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
        $atualizar = $_POST;
        $this->Presos_model->updatepresos($idpresos, $atualizar);
        redirect('Presos');

    }


}
