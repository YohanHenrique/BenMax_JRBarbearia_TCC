<?php
include_once APPPATH.'libraries/MensagemLib.php';
class MensagemModel extends CI_Model{

     public function gera_tabela(){
        $html ='';

        $mensagens = new MensagemLib();
        $data = $mensagens->lista();

        foreach ($data as $assunto) {
            $html .= '<tr>';
            $html .= '<td>'.$assunto['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$assunto['id']).'">'.$assunto['nome'].'</p></td>';
            $html .= '<td>'.$assunto['email'].'</td>';
            $html .= '<td>'.$assunto['assunto'].'</td>';
            $html .= '<td>'.$assunto['mensagem'].'</td>';
            $html .= '<td>'.$assunto['created'].'</td>';
            $html .= '<td>'.$this->action_buttons($assunto['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }

    private function action_buttons($id){
        $html = '<a href="'.base_url('index.php/page/deletando/'.$id).'">';
        $html .= '<i title="Deletando" class="fas fa-times-circle text-danger ml-2"></i></a>';
        return $html;
    }

    public function deleta_msg($id){
        $mensagens= new MensagemLib();
        $mensagens->deleta($id);
    }
    
    public function read($id){
        $mensagens = new MensagemLib();
        return $mensagens->user_data($id);
    }
    
}