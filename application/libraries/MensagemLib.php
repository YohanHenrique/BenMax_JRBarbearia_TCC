<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class MensagemLib extends CI_Object {
    

    public function lista(){
        $rs = $this->db->get_where('mensagens_contatos');
        $result = $rs->result_array();
        return $result;
    }
    
    public function deleta($id){
        $cond = array('id' => $id);
        return $this->db->delete('mensagens_contatos', $cond); 
    }
    
}