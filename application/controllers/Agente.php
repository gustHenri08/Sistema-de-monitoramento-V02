<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agente extends CI_Controller{

    public function index(){
        $this->load->model("Agente_model");
        $data['agent'] = $this->Agente_model->cadastrados();

        $this->load->view('agente-view', $data); // Carrega a view de login
        //$data -> envia os dados para a 'agente-view'
    }

    public function cadastro(){ //Carrega a Função cadastroAgente que está no Agente_model
        $this->load->view("cadastro-agente-view");

    }

    /*public function carregar()//{
        $this->load->model("Agente_model");
        $data = $this->Agente_model->cadastrados();
    }*/
}