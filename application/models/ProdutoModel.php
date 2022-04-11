<?php
include_once APPPATH.'libraries/ProdutoLib.php';
class ProdutoModel extends CI_Model{

    
    public function gera_tabela(){
        $html ='';

        $produtos = new ProdutoLib();
        $data = $produtos->lista();

        foreach ($data as $prod) {

            
            $html .= '<tr>';
            $html .= '<td>'.$prod['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$prod['id']).'">'.$prod['nome'].'</p></td>';
            $html .= '<td>'.$prod['descricao'].'</td>';
            $html .= '<td>'.$prod['preco'].'</td>';
            $html .= '<td>'.$this->action_buttons($prod['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }
    
    public function gera_tabela_produtos(){
        $html ='';

        $produtos = new ProdutoLib();
        $data = $produtos->lista();

        foreach ($data as $prod) {

           
            $html .= '<div class="col-md-4 mt-3">
            <div class=" text-center"><a href=""><img src="';
            $html .= base_url('uploads/');
            $html .= $prod['titulo_img'];
            $html .= '.jpg" class="img-fluid" alt="Produto 1"></a>';
            $html .= '
            <div class="text"><a href=""><p>Veja Mais</p></a>
            <h3><a href="">';
            $html .= '<strong class="text-warning">'.$prod['nome'].'</strong></a></h3>';
            $html .= '<td><p>'.$prod['descricao'].'</p></td>';
            
            $html .= '<span class="price mb-4">R$'.$prod['preco'].'</span>';
            $html .= '<td>'.$this->action_buttons($prod['id']).'</td>';
            $html .= '    
                </div>
            </div>
        </div>';   
        }
        return $html;
    }
    
    public function gera_tabela_produtos_v(){
        $html ='';

        $produtos = new ProdutoLib();
        $data = $produtos->lista();

        foreach ($data as $prod) {

           
            $html .= '<div class="col-md-4 mt-3">
            <div class=" text-center"><a href="';
            $html .= base_url('index.php/barbearia/#produtos');
            $html .= '"><img src="';
            $html .= base_url('uploads/');
            $html .= $prod['titulo_img'];
            $html .= '.jpg" class="img-fluid" alt="Produto 1"></a>';
            $html .= '
            <div class="text"><a href="';
            $html .= base_url('index.php/barbearia/#produtos');
            $html .= '"><p>Veja Mais</p></a>
            <h3>';
            $html .= '<strong class="text-warning">'.$prod['nome'].'</strong></h3>';
            
            $html .= '<span class="price mb-4">R$'.$prod['preco'].'</span>';
            $html .= '<td>'.$this->action_buttons($prod['id']).'</td>';
            $html .= '    
                </div>
            </div>
        </div>';   
        }
        return $html;
    }

    
    private function action_buttons($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/barbearia/editar_produto/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        $html .= '<a href="'.base_url('index.php/barbearia/deleta_produto/'.$id).'">';
        $html .= '<i title="Deletando" class="fas fa-times-circle text-danger mt-1 ml-2"></i></a>';
        return $html;}
    }


    public function insere_produ($produ){
        if(sizeof($_POST) == 0) return;
        
        $data['imagens'] = $this->imagem->salva();
        $this->db->insert('produtos', $produ);
        redirect('barbearia/#produtos');
    }

    public function edita_produto($id){
        if(sizeof($_POST) == 0) return;
        
        $data['imagens'] = $this->imagem->salva();
        $data = $this->input->post();
        $produto = new ProdutoLib();
        $produto->edita_produto($data, $id);
        redirect('barbearia/#produtos');
    }

    public function deleta_prod($id){
        $produto= new ProdutoLib();
        $produto->deleta($id);
    }
    
     

    public function read($id){
        $servicos = new ProdutoLib();
        return $servicos->service_data($id);
    }
    
}
