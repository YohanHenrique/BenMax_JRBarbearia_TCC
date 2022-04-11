<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class BlogLib extends CI_Object {

public function delete($id){
        $cond = array('id' => $id);
        $this->db->delete('posts', $cond); 
    }

public function delete_aviso($id){
        $cond = array('id' => $id);
        $this->db->delete('avisos', $cond); 
    }

public function delete_foto($id){
        $cond = array('id' => $id);
        $this->db->delete('galeria', $cond); 
    }

    public function lista_post(){
        $rs = $this->db->get_where('posts');
        $result = $rs->result_array();
        return $result;
    }

    public function lista_galeria(){
        $rs = $this->db->get_where('galeria');
        $result = $rs->result_array();
        return $result;
    }

    public function lista_aviso(){
        $rs = $this->db->get_where('avisos');
        $result = $rs->result_array();
        return $result;
    }

    public function edita_post($post, $id){
        $this->db->update('posts', $post, "id = $id");	
        			                             
    }

    public function edita_avisamento($post, $id){
        $this->db->update('avisos', $post, "id = $id");	
        			                             
    }
    
    public function user_data($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('posts', $cond);
        return $rs->row_array();
    }
    
    public function user_data_aviso($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('avisos', $cond);
        return $rs->row_array();
    }
    
    public function user_data_galeria($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('galeria', $cond);
        return $rs->row_array();
    }

}