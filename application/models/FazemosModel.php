<?php
include_once APPPATH.'libraries/FazemosLib.php';
class FazemosModel extends CI_Model{

    
    public function gera_tabela(){
        $html ='';

        $fazemos = new FazemosLib();
        $data = $fazemos->lista();

        foreach ($data as $faze) {

            
            $html .= '<tr>';
            $html .= '<td>'.$faze['icone'].'</i></td>';
            $html .= '<td>'.$faze['titulo'].'</td>';
            $html .= '<td>'.$faze['detalhes'].'</td>';
            $html .= '<td>'.$this->action_buttons($faze['id']).'</td>';
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


    public function edita_faze($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $fazemos = new FazemosLib();
        $fazemos->edita_fazemos($data, $id);
        redirect('#');
    }

    

    public function read($id){
        $informa = new FazemosLib();
        return $informa->service_data($id);
    }
    
}
