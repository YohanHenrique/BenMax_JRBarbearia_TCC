<?php
include_once APPPATH.'libraries/AvaliacaoLib.php';
class AvaliacaoModel extends CI_Model{

     public function gera_tabela(){
        $html ='';

        $avaliacoes = new AvaliacaoLib();
        $data = $avaliacoes->lista();

        foreach ($data as $coment) {
            
            $html .= '<tr>';
            $html .= '<td>'.$coment['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$coment['id']).'">'.$coment['nome'].'</p></td>';


            $arquivo = ('uploads/'.$coment['titulo_img'].'.jpg');

            if (file_exists($arquivo)) {

                $html .= '<td>';
                $html .= '<img src="';
            $html .= base_url('uploads/');
            $html .= $coment['titulo_img'];
            
            $html .= '.jpg" class="img-thumbnail" style="width: 80px">';

                $html .= '</td>';

            } else {
                $html .= '<td>Sem Imagem</td>';
            }




            $html .= '<td>'.$coment['email'].'</td>';
            $html .= '<td>'.$coment['comentario'].'</td>';
            $html .= '<td>'.$coment['created'].'</td>';
            if($coment['visivel'] == (0)){$html .= '<td>'.$this->action_buttons($coment['id']).'</td>';} 
            if($coment['visivel'] == (1)){$html .= '<td>'.$this->action_buttons_ocult($coment['id']).'</td>';} 
            $html .= '</tr>';  
        }
        return $html;
    }

     public function gera_ava(){
        $html ='';

        $avaliacoes = new AvaliacaoLib();
        $data = $avaliacoes->lista();

        foreach ($data as $coment) {
            $html .= '<tr>';
            $html .= '<td>'.$coment['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$coment['id']).'">'.$coment['nome'].'</p></td>';
            $html .= '<td>'.$coment['email'].'</td>';
            $html .= '<td>'.$coment['comentario'].'</td>';
            $html .= '<td>'.$coment['created'].'</td>';
            $html .= '<td>'.$this->action_buttons($coment['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }

    private function action_buttons($id){

        $html = '<a href="'.base_url('index.php/page/aprovar_avaliacao/'.$id).'">';
        $html .= '<i title="Aprovar" class="far fa-check-circle text-success ml-3"></i></a>';
        
        $html .= '<a href="'.base_url('index.php/page/deleta_avaliacao/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger ml-3"></i></a>';
        return $html;
    }



    private function action_buttons_ocult($id){

        $html = '<a href="'.base_url('index.php/page/aprovar_avaliacao/'.$id).'">';
        $html .= '<i title="Ocultar" class="fas fa-ban text-info ml-3"></i></a>';
        
        $html .= '<a href="'.base_url('index.php/page/deleta_avaliacao/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger ml-3"></i></a>';
        return $html;
    }

    
    public function insere_post($ava, $data){
        if(sizeof($_POST) == 0) return;
        $data['imagens'] = $this->imagem->salva();
        $this->db->insert('avaliacoes', $ava);
        redirect('#avaliações');
    }

    public function deleta_ava($id){
        $avaliacoes= new AvaliacaoLib();
        $avaliacoes->deleta($id);
    }
    
    public function read($id){
        $avaliacoes = new AvaliacaoLib();
        return $avaliacoes->user_data($id);
    }

      
    public function aprova_ava($id){
        if(sizeof($_POST) == 0) return;
        $post = $this->input->post();
        $postagem = new AvaliacaoLib();
        $postagem->aprova_ava($post, $id);
        redirect('page/avaliacoes');
    }

    
}