<?php
include_once APPPATH.'libraries/BlogLib.php';
class BlogModel extends CI_Model{

public function gera_tabela_post(){
        $html ='';

        $pessoa = new BlogLib();
        $data = $pessoa->lista_post();

        foreach ($data as $post) {  
    

            $html .= '
            ';
            $html .= '<div class="card ftco-animate mt-5 card-cascade wider reverse">
          
                <div class="view view-cascade overlay">';
           
            $html .= '<img class="card-img-top mt-1"
            style="" ';
            $html .= 'src="';
            $html .= base_url('');
            $html .= 'uploads/'.$post['titulo_img'].'.jpg"';
            
            
            $html .= ' alt="Imagem User"><a href="';
            $html .= base_url('index.php/page/ver_post/');
            $html .= $post['id'];
            
            $html .= '
            "><p class="text-center"> Veja Mais..</p>
            <div class="mask rgba-white-slight"></div>
          
        </div>';
            $html .= '   <div class="card-body card-body-cascade text-center">
            <h2 class="font-weight-bold text-danger">';
        $html .= $post['titulo_postagem'];
        $html .= '</h2></a>';
            $html .= '<p>Postado por <a><strong>'.$post['nome'].'</strong></a><br> Enviado As: '.$post['created'].'</p>';
            $html .= '  <div class="social-counters">
                    
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
            <span class="counter"></span>
            <div class="fb-share-button" data-href="http://hospedagem.ifspguarulhos.edu.br/~gu180040x/barbearia/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhospedagem.ifspguarulhos.edu.br%2F%7Egu180040x%2Fbarbearia%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>



            <!-- Twitter -->
            <a class="btn btn-tw whatsapp-share-button" href="https://api.whatsapp.com/send?text=[http://hospedagem.ifspguarulhos.edu.br/~gu180040x/barbearia/]">
              <i class="fab text-success fa-whatsapp fa-2x"></i>
              <span class="clearfix d-none d-md-inline-block"></span>
            </a>
            <span class="counter"></span>
            <!-- Google+ -->
            
            
            <a href="http://twitter.com/share" class="twitter-share-button" 
            data-url="http://hospedagem.ifspguarulhos.edu.br/~gu180040x/barbearia/" data-text="Venha visitar a JR Barbearia" data-count="horizontal" data-via="JRBarbearia" data-lang="pt">Tweetar
            </a>
            
            <script type="text/javascript" src="http://platform.twitter.com/widgets.js">
            </script>

            <span class="counter"></span>
            <!-- Comments 
            <a class="btn btn-default">
              <i class="far fa-comments pr-2"></i>
              <span class="clearfix d-none d-md-inline-block">Comments</span>
            </a>
            <span class="counter"></span>-->
          </div>
          <!-- Social shares -->
  
        </div>';
       
        if($this->session->userdata('id')===($post['id_usu'])||$this->session->userdata('level')==='1'){
      $html .= '<hr class="mb-1">';
      $html .= '<div class="text-center">';
     
      $html .= $this->action_buttons_post($post['id']);
      $html .= '</div>';
           }
        $html .= '</div>';
        }
        return $html;
    }

public function gera_tabela_avisos(){
        $html ='';

        $pessoa = new BlogLib();
        $data = $pessoa->lista_aviso();

        foreach ($data as $post) {  
    
 
            $html .= '
          <div class="card ftco-animate card-cascade text-center wider col-3 mx-auto mt-5">

          <div class="view view-cascade">
          
            <h2 class="card-header-title text-info mt-3 mb-3">';

            $html .= $post['titulo_aviso'];
            
            $html .= '</h2>
            <p class="mb-0 text-warning"><i class="fas fa-calendar mr-2"></i>';

            $html .= $post['created'];

            $html .= '</p>Enviado por: ';
            $html .= $post['nome'];
            $html .= '</div><div class="card-body card-body-cascade text-center">';
            
            if($this->session->userdata('level')==='1'||$this->session->userdata('id')===($post['id_usu'])){
            $html .= $this->action_buttons_aviso($post['id']);
            }

            $html .= '
              <p class="card-text">';
              $html .= $post['aviso'];
              $html .= '  </p>
              </div></div>';
   
        }
        return $html;
    }

public function gera_tabela_galeria(){
        $html ='';

        $pessoa = new BlogLib();
        $data = $pessoa->lista_galeria();

        foreach ($data as $fotinha) {  
    
            $html .= '<a href="';
            $html .= base_url('index.php/barbearia/ver_foto/');
            $html .= $fotinha['id'];
            $html .= '" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="';
          
            $html .= base_url('uploads/');

            $html .= $fotinha['titulo_img'];
            
            $html .= '.jpg" class="img-fluid mt-2" style="height: 300px;" title="Enviado por: ';
            $html .= $fotinha['nome'];
            $html .=  '">';
            

            $html .= '</a>';
            
   
        }
        return $html;
    }

   
        
        
    private function action_buttons_post($id){
        
        if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
        $html = '<a class="mr-2" href="'.base_url('index.php/page/editar_post/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit text-warning"></i></i> Editar Post</a>';
        $html .= '<a class="ml-2" href="'.base_url('index.php/page/deletar_post/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger"></i></i> Deletar Post</a>';
        return $html;
    }
    else{}
    }

    private function action_buttons_aviso($id){
        if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
        $html = '<a class="mr-2" href="'.base_url('index.php/page/editar_aviso/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit text-warning"></i></i> Editar</a>';
        $html .= '<a class="ml-2" href="'.base_url('index.php/page/deletar_aviso/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger"></i></i> Deletar</a>';
        return $html;
    }else{}
    }

    private function action_buttons_galeria($id){if($this->session->userdata('level')==='1'){
        $html = '<a class="ml-2" href="'.base_url('index.php/barbearia/deletar_foto/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger"></i></i> Deletar</a>';
        return $html;
    }else{}
    }
 
    
    public function deletar_post($id){
        $pessoa = new BlogLib();
        $pessoa->delete($id);
    }
    
    public function deletar_aviso($id){
        $pessoa = new BlogLib();
        $pessoa->delete_aviso($id);
    }
    
    public function deletar_foto($id){
        $pessoa = new BlogLib();
        $pessoa->delete_foto($id);
    }

    
    public function edita_post($id){
        if(sizeof($_POST) == 0) return;
        $post = $this->input->post();
        $postagem = new BlogLib();
        $postagem->edita_post($post, $id);
        redirect('page/blog');
    }

    public function edita_aviso($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $postagem = new BlogLib();
        $postagem->edita_avisamento($data, $id);
        redirect('page/blog');
    }
    
    
    public function insere_post($post){
        if(sizeof($_POST) == 0) return;
        
        $data['imagens'] = $this->imagem->salva();
        $this->db->insert('posts', $post);
        redirect('page/blog');
    }
    
    public function insere_foto($post){
        if(sizeof($_POST) == 0) return;
        
        $data['imagens'] = $this->imagem->salva();
        $this->db->insert('galeria', $post);
        redirect('barbearia/galeria');
    }
    
    public function insere_aviso($post){
        if(sizeof($_POST) == 0) return;
        
        $this->db->insert('avisos', $post);
        redirect('page/blog');
    }

    public function read($id){
        $pessoa = new BlogLib();
        return $pessoa->user_data($id);
    }

    public function read_aviso($id){
        $pessoa = new BlogLib();
        return $pessoa->user_data_aviso($id);
    }

    public function read_galeria($id){
        $pessoa = new BlogLib();
        return $pessoa->user_data_galeria($id);
    }
}