<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class ProdutoLib extends CI_Object {
    
    public function cria_servico($data){
        $this->db->insert('servicos', $data);
    }

    public function lista(){
        $rs = $this->db->get_where('produtos');
        $result = $rs->result_array();
        return $result;
    }
    
    public function deleta($id){
        $cond = array('id' => $id);
        return $this->db->delete('produtos', $cond); 
    }
    
   
    public function edita_produto($data, $id){
        $this->db->update('produtos', $data, "id = $id");
        $data['nome'] = $this->input->post('nome');
        $data['descricao'] = $this->input->post('descricao');
        $data['preco'] = $this->input->post('preco');				                             
        $data['titulo_img'] = $this->input->post('titulo_img');
    }
    
    public function service_data($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('produtos', $cond);
        return $rs->row_array();
    }



}