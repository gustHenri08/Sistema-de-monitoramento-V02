<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edicao_sair extends CI_Controller{     
    public function __construct(){
        parent:: __construct();

    }



    public function index($id=2){

        
        $this->load->model('Edicao_sair_model');//carregando o model dos presos
        $this->db->where('id',$id);
        $data ['tbl_saidadetentos'] = $this->db->get('tbl_saidadetentos')->result();
        $this->load->view('editar_cadastro_sair_view',$data);   //Carrega a view de cadastro do agente



    }

    }

