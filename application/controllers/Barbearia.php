<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barbearia extends CI_Controller{

	public function index(){

		$this->load->view('template/header');
    $this->load->view('template/navbar');

    $this->load->model('GeraModel', 'model');

      $data['ver_banner'] = $this->model->gera_tabela_banner();
      $this->load->view('common/table_banner.php', $data);

      $data['ver_infos'] = $this->model->gera_tabela_informacoes();
      $this->load->view('common/view_informacoes.php', $data); 

      $this->load->view('ver/welcome');

      $data['ver_fazem'] = $this->model->gera_tabela_fazemos();
      $this->load->view('common/view_fazemos.php', $data); 

      $this->load->model('ServicoModel', 'model');
      $data['tabela'] = $this->model->gera_tabela_serv();
      $this->load->view('common/table_precos.php', $data);
        
      $data['tabela_avaliacoes'] = $this->model->gera_tabela_ava();
      $this->load->view('common/carousel_avaliacoes.php', $data);

        if($this->session->userdata('level')==='2'){
            $this->load->view('ver/form_avaliacao.php'); 
        }
      
      $this->load->view('ver/barbeiro');
        
      $data['ver_produtos'] = $this->model->gera_tabela_produtos();
      $this->load->view('common/view_produtos.php', $data); 
      
      $this->load->view('ver/galeria');

      $this->load->view('ver/compromisso');

        
		$this->load->view('template/footer');
		$this->load->view('template/rodape');
    }

    public function servicos(){
		$this->load->view('template/header');
    $this->load->view('template/navbar');
        
        $this->load->model('GeraModel', 'model');
        
        $this->load->view('ver/servicos_view');

        $data['ver_fazem'] = $this->model->gera_tabela_fazemos();
        $this->load->view('common/view_fazemos.php', $data); 
       
        $data['tabela'] = $this->model->gera_tabela_serv();
        $this->load->view('common/table_precos.php', $data);

        $this->load->view('ver/servico_marque');
        $this->load->view('ver/compromisso');

		$this->load->view('template/footer');
		$this->load->view('template/rodape');
    }

  
public function cadastrar_produto(){
  if($this->session->userdata('level')==='1'){
    $this->load->helper('file');

    $this->load->model('ImagemModel', 'imagem');

   $data['imagens'] = $this->imagem->salva();

   
    $this->load->model('ProdutoModel', 'model');

  $produ['nome'] = $this->input->post('nome');
  $produ['titulo_img'] = $this->input->post('titulo_img');
  $produ['preco'] = $this->input->post('preco');
  $produ['descricao'] = $this->input->post('descricao');
  
   
  
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->view('ver/form_produto.php');

        if ($this->model->insere_produ($produ, $data)){
          redirect('#produtos');
        }
      }else{
        $this->load->view('template/header');
          redirect('login');
      }
}


public function ver_produto($id){
  
  $this->load->view('template/navbar');
  $this->load->view('template/header');

$this->load->model('ProdutoModel', 'model');

    $this->load->helper('file');
    
    $this->load->model('ImagemModel', 'imagem');
    $data['imagens'] = $this->imagem->salva();
    $data['nome'] = $this->input->post('nome');
    $data['titulo_img'] = $this->input->post('titulo_img');

    $data['preco'] = $this->input->post('preco');
    $data['descricao'] = $this->input->post('descricao');
  
    
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/view_produtos', $data);
    
    $data['ver_produtos'] = $this->model->gera_tabela_produtos_v();
    $this->load->view('common/view_produtosv.php', $data);

  $this->load->view('template/footer');
  $this->load->view('template/rodape');


}

public function ver_servico($id){
  
  $this->load->view('template/navbar');
  $this->load->view('template/header');

$this->load->model('ServicoModel', 'model');

    $data['nome'] = $this->input->post('nome');
    $data['preco'] = $this->input->post('preco');
    $data['detalhe'] = $this->input->post('descricao');
    $data['titulo_img'] = $this->input->post('titulo_img');
  
    
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/view_servico', $data);
  
    $data['tabela_galeria'] = $this->model->gera_tabela_galeria();
    $this->load->view('common/table_galeriaserv.php', $data);

  $this->load->view('template/footer');
  $this->load->view('template/rodape');


}


public function editar_produto($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('ProdutoModel', 'model');

        $this->load->helper('file');
        
        $this->load->model('ImagemModel', 'imagem');
        $data['imagens'] = $this->imagem->salva();
        $data['nome'] = $this->input->post('nome');
        $data['titulo_img'] = $this->input->post('titulo_img');
        $data['preco'] = $this->input->post('preco');
        $data['descricao'] = $this->input->post('descricao');
      
        
        $data['user'] = $this->model->read($id);
        $this->load->view('ver/edita_produto', $data);
        $this->model->edita_produto($id);
        $this->load->view('template/footer');
        $this->load->view('template/rodape');

      }else{
        $this->load->view('template/header');
        redirect('login');
      }

}

public function editar_info($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('InfoModel', 'model');

      $data['titulo'] = $this->input->post('titulo');
      $data['detalhes'] = $this->input->post('detalhes');
      $data['icone'] = $this->input->post('icone');
    
      $data['user'] = $this->model->read($id);
      $this->load->view('ver/edita_info', $data);
      $this->model->edita_info($id);
      $this->load->view('template/rodape');

    }else{
      $this->load->view('template/header');
      redirect('login');
    }

}

public function editar_faze($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('FazemosModel', 'model');

    $data['titulo'] = $this->input->post('titulo');
    $data['detalhes'] = $this->input->post('detalhes');
    $data['icone'] = $this->input->post('icone');
   
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_fazemos', $data);
    $this->model->edita_faze($id);
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}

public function editar_banner($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('BannerModel', 'model');

    $data['titulo'] = $this->input->post('titulo');
    $data['link'] = $this->input->post('link');
   
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_banner', $data);
    $this->model->edita_banner($id);
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}

public function deleta_produto($id){
  if($this->session->userdata('level')==='1'){
  $this->load->model('ProdutoModel', 'model');
  $this->model->deleta_prod($id);
  redirect('barbearia/#produtos');

}else{
  $this->load->view('template/header');
  redirect('login');
}
}   

    public function contato()
	{
		$this->load->view('template/header');
    $this->load->view('template/navbar');
        
        $this->load->view('ver/contato_view');

		$this->load->view('template/footer');
		$this->load->view('template/rodape');
    }

    
public function enviar_foto(){
  
    if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
      $this->load->model('BlogModel', 'model');
      $this->load->helper('file');
      $this->load->model('ImagemModel', 'imagem');
     
        $post['nome'] = $this->input->post('nome');
        $post['titulo_img'] = $this->input->post('titulo_img');
        $post['id_usu'] = $this->input->post('id_usu');
        $data['imagens'] = $this->imagem->salva();
        
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('ver/form_galeria.php');
      $this->load->view('template/footer');
      $this->load->view('template/rodape');
  
  
      if ($this->model->insere_foto($post, $data)){
        redirect('barbearia/galeria');
      }
    }
    
    else{
      $this->load->view('template/header');
      redirect('login');
    }
  }

  
  public function galeria(){

    $this->load->view('template/navbar');
    $this->load->view('template/header');
    
    $this->load->model('ImagemModel', 'imagem');
    $this->load->model('BlogModel', 'model');
        $data['imagens'] = $this->imagem->salva();
        $info['thumbnails'] = $this->imagem->lista();

        $data['tabela_galeria'] = $this->model->gera_tabela_galeria();
        $this->load->view('common/table_galeria.php', $data);
    $this->load->view('template/footer');
    $this->load->view('template/rodape');
    
    }


    
public function deletar_foto($id){
    if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
    $this->load->model('BlogModel', 'model');
    $this->model->deletar_foto($id);
    redirect('barbearia/galeria');
  
  }
  
  else{
    $this->load->view('template/header');
    redirect('login');
  }
  
  }


  public function ver_foto($id){
  
    $this->load->view('template/navbar');
    $this->load->view('template/header');

    $this->load->model('BlogModel', 'model');

      $this->load->helper('file');
      
      $this->load->model('ImagemModel', 'imagem');
      $data['imagens'] = $this->imagem->salva();
      $data['nome'] = $this->input->post('nome');
      $data['titulo_img'] = $this->input->post('titulo_img');
      
      $data['user'] = $this->model->read_galeria($id);
      $this->load->view('ver/view_galeria', $data);
    $this->load->view('template/footer');
    $this->load->view('template/rodape');


}

}