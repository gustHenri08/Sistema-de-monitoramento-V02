
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edicao_sair_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function atualizar(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'datasaida'=> $this->input->post('datasaida'),
            'numprocesso'=> $this->input->post('numprocesso'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'mae'=> $this->input->post('mae'),
            'pai'=> $this->input->post('pai'),
            'motivo'=> $this->input->post('motivo'),
            'origem'=> $this->input->post('origem'),
            'documentacao'=> $this->input->post('documentacao'),
            'crimerepercurssao'=> $this->input->post('crimerepercurssao'),
            'obs'=> $this->input->post('obs')
        );
        $this->db->where('id',$id);
        $this->db->update('tbl_saidadetentos', $data);

    }

    
}