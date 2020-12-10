<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presos extends CI_Controller{

    public function index(){
        $this->load->model("Presos_model");
        $data['presos'] = $this->Presos_model->presoscadastrados();

        $this->load->view('entrada-presos-view', $data); // Carrega a view de presos
        //$data -> envia os dados para a 'agente-view'
    }

    public function cadastropresos(){ //Carrega a Função cadastroAgente que está no Agente_model
        $this->load->view("cadastro-presos-view");

    }
}