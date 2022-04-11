<?php
include_once APPPATH.'libraries/BannerLib.php';
class BannerModel extends CI_Model{

    
    public function gera_tabela(){
        $html ='';

        $fazemos = new FazemosLib();
        $data = $fazemos->lista();

        foreach ($data as $faze) {

            
            $html .= '<tr>';
            $html .= '<td>'.$faze['titulo'].'</td>';
            $html .= '<td>'.$faze['link'].'</td>';
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


    public function edita_banner($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $banner = new BannerLib();
        $banner->edita_banner($data, $id);
        redirect('#');
    }

    

    public function read($id){
        $banne = new BannerLib();
        return $banne->service_data($id);
    }
    
}
