<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class ServicoLib extends CI_Object {
    
    public function cria_servico($data){
        $this->db->insert('servicos', $data);
    }

    public function lista(){
        $rs = $this->db->get_where('servicos');
        $result = $rs->result_array();
        return $result;
    }

    public function lista_f(){
        $rs = $this->db->get_where('feitos');
        $result = $rs->result_array();
        return $result;
    }
    
    public function deleta($id){
        $cond = array('id' => $id);
        return $this->db->delete('servicos', $cond); 
    }
    
    public function deleta_r($id){
        $cond = array('id' => $id);
        return $this->db->delete('feitos', $cond); 
    }
    
   
    public function edita_servico($data, $id){
        $this->db->update('servicos', $data, "id = $id");
        $data['nome'] = $this->input->post('nome');
        $data['detalhe'] = $this->input->post('detalhe');
        $data['preco'] = $this->input->post('preco');				                             
    }
    
    public function service_data($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('servicos', $cond);
        return $rs->row_array();
    }



}