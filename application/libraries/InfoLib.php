<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class InfoLib extends CI_Object {
    
    public function cria_servico($data){
        $this->db->insert('servicos', $data);
    }

    public function lista(){
        $rs = $this->db->get_where('informacoes');
        $result = $rs->result_array();
        return $result;
    }
    
    public function deleta($id){
        $cond = array('id' => $id);
        return $this->db->delete('produtos', $cond); 
    }
    
   
    public function edita_info($data, $id){
        $this->db->update('informacoes', $data, "id = $id");
        $data['titulo'] = $this->input->post('titulo');
        $data['detalhes'] = $this->input->post('detalhes');
        $data['icone'] = $this->input->post('icone');
    }
    
    public function service_data($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('informacoes', $cond);
        return $rs->row_array();
    }



}