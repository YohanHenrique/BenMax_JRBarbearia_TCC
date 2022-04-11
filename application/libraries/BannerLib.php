<?php
include_once APPPATH.'libraries/util/CI_Object.php';

class BannerLib extends CI_Object {
    

    public function lista(){
        $rs = $this->db->get_where('banner');
        $result = $rs->result_array();
        return $result;
    }
    
    public function deleta($id){
        $cond = array('id' => $id);
        return $this->db->delete('produtos', $cond); 
    }
    
   
    public function edita_banner($data, $id){
        $this->db->update('banner', $data, "id = $id");
        $data['titulo'] = $this->input->post('titulo');
        $data['link'] = $this->input->post('link');
    }
    
    public function service_data($id){
        $cond = array('id' => $id);
        $rs = $this->db->get_where('banner', $cond);
        return $rs->row_array();
    }



}