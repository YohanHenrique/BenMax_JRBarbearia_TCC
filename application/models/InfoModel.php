<?php
include_once APPPATH.'libraries/InfoLib.php';
class InfoModel extends CI_Model{

    
    public function gera_tabela(){
        $html ='';

        $informa = new InfoLib();
        $data = $informa->lista();

        foreach ($data as $infor) {

            
            $html .= '<tr>';
            $html .= '<td>'.$infor['icone'].'</i></td>';
            $html .= '<td>'.$infor['titulo'].'</td>';
            $html .= '<td>'.$infor['detalhes'].'</td>';
            $html .= '<td>'.$this->action_buttons($infor['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }
    
    
    private function action_buttons($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/barbearia/editar_info/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        return $html;}
    }


    public function edita_info($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $informa = new InfoLib();
        $informa->edita_info($data, $id);
        redirect('#');
    }

    

    public function read($id){
        $informa = new InfoLib();
        return $informa->service_data($id);
    }
    
}
