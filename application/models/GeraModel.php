<?php
include_once APPPATH.'libraries/ServicoLib.php';
include_once APPPATH.'libraries/AvaliacaoLib.php';
include_once APPPATH.'libraries/ProdutoLib.php';
include_once APPPATH.'libraries/InfoLib.php';
include_once APPPATH.'libraries/BannerLib.php';
include_once APPPATH.'libraries/FazemosLib.php';
//essa model está gerando algumas tabelas para o index do controller barbearia
//as tabelas cujas quais estão sendo geradas tem suas libraries incluidas acima.

class GeraModel extends CI_Model{

     public function gera_tabela_serv(){
        $html ='';

        $servicos = new ServicoLib();
        $data = $servicos->lista();

        foreach ($data as $serv) {

       
            $html .= '<div class="view overlay ">';
            $html .= '<div class=" staff text-center">';
            $html .= '';
            $html .= '<h3><span class="text-warning">'.$serv['nome'].'</span></h3>';
           $html .= '<p>'.$serv['detalhe'].'.</p>';
            $html .= '<h5 class="price text-white">R$: '.$serv['preco'].'</h5><br>';
            
            $html .= '<a href="';
            $html .= base_url('index.php/barbearia/ver_servico/');;
            $html .= $serv['id'];
            $html .= '"<p>Clique para saber mais...</p>';
            $html .= '<div class="mask flex-center rgba-black-light mt-1">';
            $html .= '<i class="far fa-eye text-warning fa-4x"></i><h2 class="">';
            
            $html .= $this->action_buttons($serv['id']);
            $html .= '  </h2></div></a></div>
</div><br>';
            
            
        }
        return $html;
    }

    
    public function gera_tabela_ava(){
        $html ='';

        $avaliacoes = new AvaliacaoLib();
        $data = $avaliacoes->lista();

        foreach ($data as $coment) {

            if($coment['visivel'] == (1)){
            $html .= '<div class="carousel-item text-center">';
            
            
            $html .= '<img src="';
            $html .= base_url('uploads/');
            $html .= $coment['foto'];
            
            $html .= '.jpg" class="rounded-circle z-depth-0" style="width: 60px">';

            $arquivo = ('uploads/'.$coment['titulo_img'].'.jpg');

            if (file_exists($arquivo)) {

                $html .= '<div class="container">';
                $html .= '<img src="';
            $html .= base_url('uploads/');
            $html .= $coment['titulo_img'];
            
            $html .= '.jpg" class="z-depth-0 mb-2 mt-3" style="width: 300px">';

                $html .= '</div>';

            } else {
            }

          
            $html .= '<p class="text-warning">'.$coment['nome'].' Comentou:</p>';
            $html .= '<h5><i class="fas fa-quote-left"></i> '.$coment['comentario'].'</h5>';
            $html .= '<p>Enviado em: '.$coment['created'].'</p>';
            $html .= $this->action_buttons_ava($coment['id']);
            $html .= '</div>';   
            }
        }
        return $html;
    }

    
    public function gera_tabela_produtos(){
        $html ='';

        $produtos = new ProdutoLib();
        $data = $produtos->lista();

        foreach ($data as $prod) {

           
            $html .= '<div class="col-md-4 mt-3">
            <div class=" text-center"><a href="';
            
            $html .= base_url('index.php/barbearia/ver_produto/');
            $html .= $prod['id'];
            
            $html .= '"><img src="';
            $html .= base_url('uploads/');
            $html .= $prod['titulo_img'];
            $html .= '.jpg" class="img-fluid" alt="Produto 1"></a>';
            $html .= '
            <div class="text"><a href="';
            $html .= base_url('index.php/barbearia/ver_produto/');
            $html .= $prod['id'];

            $html .= '"><p>Veja Mais</p></a>
            <h3><a href="';
            $html .= base_url('index.php/barbearia/ver_produto/');
            $html .= $prod['id'];
            $html .= '">';
            $html .= '<strong class="text-warning">'.$prod['nome'].'</strong></a></h3>';
            
            $html .= '<span class="price mb-4">R$'.$prod['preco'].'</span>';
            $html .= '<td>'.$this->action_buttons_prod($prod['id']).'</td>';
            $html .= '    
                </div>
            </div>
        </div>';   
        }
        return $html;
    }
    
    public function gera_tabela_informacoes(){
        $html ='';

        $informacoes = new InfoLib();
        $data = $informacoes->lista();

        foreach ($data as $infor) {


            $html .= '<div class="col-md-4 d-flex ftco-animate">
            <div class="icon ml-5">';
            $html .= $infor['icone'];
            $html .= '</i></div>
            <div class="text ml-3"><h5>';
            $html .= $infor['titulo'];
           
            $html .= '</h5>
                <p>';

           
            $html .= $infor['detalhes'];
            
            $html .= $this->action_buttons_info($infor['id']);
            $html .= '</p>';

            $html .= '</div>
        </div>';   
            
        }
        return $html;
    }
    
    public function gera_tabela_fazemos(){
        $html ='';

        $fazemos = new FazemosLib();
        $data = $fazemos->lista();

        foreach ($data as $faze) {


             

            $html .= '
            <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="justify-content-center align-items-center mb-4"><a href="';
            $html .= base_url('index.php/barbearia/servicos');
            $html .= '">';

            $html .= $faze['icone'];
            $html .= '</i></a></div>
            <div class="media-body">
                <h3 class="heading">';
            $html .= $faze['titulo'];
           
            $html .= '</h3>
                <p>';

           
            $html .= $faze['detalhes'];
            
            $html .= $this->action_buttons_faze($faze['id']);
            $html .= '</p>';

            $html .= '</div>
        </div>
        </div>';   
            
        }
        return $html;
    }

    public function gera_tabela_banner(){
        $html ='';

        $banner = new BannerLib();
        $data = $banner->lista();

        foreach ($data as $ban) {


            $html .= '<div class="carousel-item mt-2">
                        <h1 class="mt-5 mb-5 text-center" >
                            <a class="white-text" href="
                        ';
            $html .= base_url('index.php/barbearia/');
            $html .= $ban['link'];
            $html .= '">';
            $html .= $ban['titulo'];
            $html .= $this->action_buttons_banne($ban['id']);
            $html .= ' </a></h1><br><br>';
            $html .= '</div>';   
            
        }
        return $html;
    }

    
    private function action_buttons_prod($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/barbearia/editar_produto/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        $html .= '<a href="'.base_url('index.php/barbearia/deleta_produto/'.$id).'">';
        $html .= '<i title="Deletando" class="fas fa-times-circle text-danger mt-1 ml-2"></i></a>';
        return $html;}
    }
    
    private function action_buttons_banne($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/barbearia/editar_banner/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        return $html;}
    }
    
    private function action_buttons_info($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/barbearia/editar_info/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        return $html;}
    }
    
    private function action_buttons_faze($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/barbearia/editar_faze/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        return $html;}
    }

    private function action_buttons_ava($id){
        if($this->session->userdata('level')==='1'){

        $html = '<a href="'.base_url('index.php/page/aprovar_avaliacao/'.$id).'">';
        $html .= '<i title="Ocultar" class="fas fa-ban text-info mr-2"></i></a>';
        $html .= '<a href="'.base_url('index.php/page/deleta_avaliacao/'.$id).'">';
        $html .= '<i title="Deletar Avaliação" class="fas fa-times-circle text-danger ml-2"></i></a>';
        return $html;}
    }


    private function action_buttons($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/page/deleta_serv/'.$id).'">';
        $html .= '<i title="Deletar Serviço" class="fas fa-times-circle text-danger mt-1 ml-2"></i></a>';
        $html .= '<a href="'.base_url('index.php/page/editar_serv/'.$id).'">';
        $html .= '<i title="Editar Serviço" class="far fa-edit text-info mt-1 ml-2"></i></a>';
        return $html;}
    }

}