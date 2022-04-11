<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class AvaliacaoLib extends CI_Object {
    
    public function cria_comentario($ava){
        $this->db->insert('avaliacoes', $ava);
    }

    public function lista(){
        $rs = $this->db->get_where('avaliacoes');
        $result = $rs->result_array();
        return $result;
    }
    

    public function deleta($id){
        $cond = array('id' => $id);
        return $this->db->delete('avaliacoes', $cond); 
    }
     
    public function user_data($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('avaliacoes', $cond);
        return $rs->row_array();
    }

    public function aprova_ava($post, $id){
        $this->db->update('avaliacoes', $post, "id = $id");	
        			                             
    }
    
}