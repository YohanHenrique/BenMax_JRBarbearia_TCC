<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  function index(){
      if($this->session->userdata('level')==='1'){
        $this->load->view('template/navbar_cadastro');
        $this->load->view('template/header');
          $this->load->view('ver/admin_view');
          $this->load->view('template/footer');
          $this->load->view('template/rodape');
      }else{
        $this->load->view('template/header');
          redirect('login');
      }

  }

  function staff(){
    if($this->session->userdata('level')==='2'){
      $this->load->view('login/cliente');

    }else{
      redirect('login');
  }
  }

  function sub_administrador(){
    if($this->session->userdata('level')==='3'){
      $this->load->view('template/header');
      $this->load->view('template/navbar_sub');
      $this->load->view('ver/subadm_view');
      $this->load->view('template/footer');
      $this->load->view('template/rodape');
    }else{
      redirect('login');
  }
  }


public function admin(){
  if($this->session->userdata('level')==='1'){
    $this->db->select('*');
    $dados['usuarios'] = $this->db->get('usuario')->result();
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->view('ver/cadastro');
    $this->load->view('template/footer');
    $this->load->view('template/rodape');
    $this->load->view('ver/conexao');
  }else{
    $this->load->view('template/header');
    redirect('login');
  }
}

public function cadastrar_me(){
  
    $this->db->select('*');
    $dados['usuarios'] = $this->db->get('usuario')->result();
    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('ver/cadastro_livre');
    $this->load->view('template/footer');
    $this->load->view('template/rodape');
    $this->load->view('ver/conexao');
  
}


public function cliente($id){
  if($this->session->userdata('id')=== $id){
    $this->load->view('template/navbar');
		$this->load->view('template/header');
    $this->load->model('UserModel', 'model');
    $data['senha'] = md5($this->input->post('senha'));
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/perfil_cliente', $data);
    $this->model->edita_perfil($id);
		$this->load->view('template/footer');
		$this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');

  }

}





public function cadastrar(){

    $data['titulo_img'] = $this->input->post('titulo_img');
    $data['nome'] = $this->input->post('nome');
    $data['email'] = $this->input->post('email');
    $data['senha'] = md5($this->input->post('senha'));
    $data['telefone'] = $this->input->post('telefone');
    $data['nivel'] = $this->input->post('nivel');
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');

    if ($this->db->insert('usuario', $data)){
     
     
      if($this->session->userdata('level')==='1'){ redirect('page/lista');
      } else{ redirect('login');}
    
    
    }
  
}


public function cadastrar_servico(){
  if($this->session->userdata('level')==='1'){

    $this->load->helper('file');

    $this->load->model('ImagemModel', 'imagem');

   $data['imagens'] = $this->imagem->salva();

   $this->load->model('ServicoModel', 'model');
    $serv['nome'] = $this->input->post('nome');
    $serv['detalhe'] = $this->input->post('detalhe');
    $serv['preco'] = $this->input->post('preco');
    $serv['feito'] = $this->input->post('feito');
    $serv['titulo_img'] = $this->input->post('titulo_img');



    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');

    if ($this->model->cria_servico($serv, $data)){
      redirect('page/servicos');
    }
  }else{
    $this->load->view('template/header');
    redirect('login');
  }
}


public function mandar_feito($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('ServicoModel', 'model');
    $data['nome'] = $this->input->post('nome');
    $data['detalhe'] = $this->input->post('detalhe');
    $data['preco'] = $this->input->post('preco');
    $data['feito'] = $this->input->post('feito');
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_feito', $data);
    $this->model->edita_servicof($id);
    $this->load->view('template/footer');
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}


public function cadastrar_feito(){
  if($this->session->userdata('level')==='1'){
    $data['fnome'] = $this->input->post('fnome');
    $data['fpreco'] = $this->input->post('fpreco');
    $data['ffeitos'] = $this->input->post('ffeitos');
    $data['fdata'] = $this->input->post('fdata');
    $this->load->view('template/navbar');
    $this->load->view('template/header');

    if ($this->db->insert('feitos', $data)){
      redirect('page/servicos_registro');
    }
  }else{
    $this->load->view('template/header');
    redirect('login');
  }
}

public function cadastrar_avaliacao(){
  if($this->session->userdata('level')==='2'){
    $this->load->helper('file');

    $this->load->model('ImagemModel', 'imagem');

   $data['imagens'] = $this->imagem->salva();


    $this->load->model('AvaliacaoModel', 'model');
   
  $ava['nome'] = $this->input->post('nome');
  $ava['foto'] = $this->input->post('foto');
  $ava['email'] = $this->input->post('email');
  $ava['comentario'] = $this->input->post('comentario');
  $ava['visivel'] = $this->input->post('visivel');
  $ava['titulo_img'] = $this->input->post('titulo_img');
   
  $this->load->view('ver/form_avaliacao.php');
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');

    if ($this->model->insere_post($ava, $data)){
      redirect('#avaliações');
    }
  }else{
    $this->load->view('template/header');
    redirect('login');
  }
}

public function cadastrar_mensagem(){
    $data['nome'] = $this->input->post('nome');
    $data['email'] = $this->input->post('email');
    $data['assunto'] = $this->input->post('assunto');
    $data['mensagem'] = $this->input->post('mensagem');
    $this->load->view('template/navbar');
    $this->load->view('template/header');

    if ($this->db->insert('mensagens_contatos', $data)){
  echo '  
<div class="container text-center mt-5 pt-5">
<br><br><br><br>
<h3 class="">A JR Barbearia agradece seu feedback <strong class="amber-text">';
echo $data['nome'];
echo '</strong>, Obrigado ;D ! </h3>
<h3><a href="../">Voltar</a></h3>
<br>
  ';
   header("refresh: 3;../#contato");

   $this->load->view('template/footer');
    }
}

public function cadastrar_post(){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
    $this->load->model('BlogModel', 'model');
    $this->load->helper('file');
    $this->load->model('ImagemModel', 'imagem');
   
  $post['nome'] = $this->input->post('nome');
  $post['id_usu'] = $this->input->post('id_usu');
  $post['titulo_img'] = $this->input->post('titulo_img');
  $post['titulo_postagem'] = $this->input->post('titulo_postagem');
  $post['texto'] = $this->input->post('texto');
  $data['imagens'] = $this->imagem->salva();
   
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');

  $this->load->view('ver/form_blog.php');

  $this->load->view('template/footer');
    $this->load->view('template/rodape');

    if ($this->model->insere_post($post, $data)){
      redirect('#avaliações');
    }
  }
  else{
    $this->load->view('template/header');
    redirect('login');
  }
}


public function cadastrar_aviso(){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
    $this->load->model('BlogModel', 'model');
    
  $post['titulo_aviso'] = $this->input->post('titulo_aviso');
  $post['aviso'] = $this->input->post('aviso');
  $post['nome'] = $this->input->post('nome');
  $post['id_usu'] = $this->input->post('id_usu');
   
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->view('ver/form_aviso.php');
    $this->load->view('template/footer');
    $this->load->view('template/rodape');
    if ($this->model->insere_aviso($post)){
      redirect('#');
    }
  }else{
    $this->load->view('template/header');
    redirect('login');
  }
}


public function lista(){
      
      if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('UserModel', 'model');
    $data['tabela'] = $this->model->gera_tabela();
    $this->load->view('common/table.php', $data); 
    $this->load->view('template/rodape');

}else{
  $this->load->view('template/header');
  redirect('login');
}

}

public function mensagens(){
  if($this->session->userdata('level')==='1'){
  $this->load->view('template/navbar_cadastro');
  $this->load->view('template/header');
  $this->load->model('MensagemModel', 'model');
  $data['tabela_mensagens'] = $this->model->gera_tabela();
  $this->load->view('common/table_mensagens.php', $data);
  $this->load->view('template/rodape');

  }
  elseif($this->session->userdata('level')==='3'){
  $this->load->view('template/navbar_sub');
  $this->load->view('template/header');
  $this->load->model('MensagemModel', 'model');
  $data['tabela_mensagens'] = $this->model->gera_tabela();
  $this->load->view('common/table_mensagens.php', $data);
  $this->load->view('template/rodape');

  }
  else{
  $this->load->view('template/header');
  redirect('login');
}


  }  

  public function avaliacoes(){
    if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('AvaliacaoModel', 'model');
    $data['tabela_avaliacoes'] = $this->model->gera_tabela();
    $this->load->view('common/table_avaliacoes.php', $data);
    $this->load->view('template/rodape');
  
  }
    elseif($this->session->userdata('level')==='3'){
    $this->load->view('template/navbar_sub');
    $this->load->view('template/header');
    $this->load->model('AvaliacaoModel', 'model');
    $data['tabela_avaliacoes'] = $this->model->gera_tabela();
    $this->load->view('common/table_avaliacoes.php', $data);
    $this->load->view('template/rodape');
  
  }
 
  else{
    $this->load->view('template/header');
    redirect('login');
  }
  }

  
public function aprovar_avaliacao($id){

  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');

 $this->load->model('AvaliacaoModel', 'model');

    $data['visivel'] = $this->input->post('visivel');
    
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/aprova_ava', $data);
    $this->model->aprova_ava($id);
    $this->load->view('template/rodape');

  }
  elseif($this->session->userdata('level')==='3'){
    $this->load->view('template/navbar_sub');
    $this->load->view('template/header');

 $this->load->model('AvaliacaoModel', 'model');

    $data['visivel'] = $this->input->post('visivel');
    
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/aprova_ava', $data);
    $this->model->aprova_ava($id);
    $this->load->view('template/rodape');
  }
  
  else{
    $this->load->view('template/header');
    redirect('login');
  }

}


    public function form_ava(){
      if($this->session->userdata('level')==='1'){
      $this->load->view('template/navbar_cadastro');
      $this->load->view('template/header');
      $this->load->view('ver/form_avaliacao.php'); 
    
    }else{
      $this->load->view('template/header');
      redirect('login');
    }
    
      }

    public function blog(){

      $this->load->view('template/navbar');
      $this->load->view('template/header');
      
      $this->load->model('ImagemModel', 'imagem');
      $this->load->model('BlogModel', 'model');
      $data['imagens'] = $this->imagem->salva();
      $info['thumbnails'] = $this->imagem->lista();

      $data['tabela'] = $this->model->gera_tabela_post();
      $data['tabela_aviso'] = $this->model->gera_tabela_avisos();
      $this->load->view('common/table_post.php', $data);
      $this->load->view('template/footer');
      $this->load->view('template/rodape');

      }




  
public function servicos(){
    
    if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('ServicoModel', 'model');
    $data['tabela_servicos'] = $this->model->gera_tabela();
    $this->load->view('common/table_servicos.php', $data);
    $this->load->view('template/rodape');

}else{
  $this->load->view('template/header');
    redirect('login');
}

  }
  

  
public function fazer_servicos(){
    
    if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('ServicoModel', 'model');
    $data['tabela_servicos'] = $this->model->gera_tabela_fazer();
    $this->load->view('common/table_servicosf.php', $data);
    $this->load->view('template/rodape');

}else{
  $this->load->view('template/header');
    redirect('login');
}

  }
  
public function lista_produtos(){
  if($this->session->userdata('level')==='1'){
  $this->load->view('template/navbar_cadastro');
  $this->load->view('template/header');
  $this->load->model('ProdutoModel', 'model');
  $data['tabela_produtos'] = $this->model->gera_tabela();
  $this->load->view('common/table_produtos.php', $data);
  $this->load->view('template/rodape');

}else{
  $this->load->view('template/header');
    redirect('login');
}

  }
  
  
public function lista_informacoes(){
  if($this->session->userdata('level')==='1'){
  $this->load->view('template/navbar_cadastro');
  $this->load->view('template/header');
  $this->load->model('InfoModel', 'model');
  $data['tabela_informacoes'] = $this->model->gera_tabela();
  $this->load->view('common/table_informacoes.php', $data);
  $this->load->view('template/rodape');

}else{
  $this->load->view('template/header');
    redirect('login');
}

  }
  
public function form_serv(){
  if($this->session->userdata('level')==='1'){
  $this->load->view('template/navbar_cadastro');
  $this->load->view('template/header');
  $this->load->view('ver/form_servico.php'); 
  $this->load->view('template/footer');
  $this->load->view('template/rodape');
}else{
  $this->load->view('template/header');
    redirect('login');
}

  }


    


public function editar_perfil($id){
  if($this->session->userdata('id')=== $id){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('UserModel', 'model');

    $this->load->helper('file');
    
    $this->load->model('ImagemModel', 'imagem');
    $data['imagens'] = $this->imagem->salva();

   
    $data['senha'] = md5($this->input->post('senha'));
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_cadastro', $data);
    $this->model->edita_perfil($id);
    $this->load->view('template/footer');
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}


public function editar_post($id){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('BlogModel', 'model');

    $this->load->helper('file');
    
    $this->load->model('ImagemModel', 'imagem');
    $data['imagens'] = $this->imagem->salva();
    $data['nome'] = $this->input->post('nome');
    $data['titulo_img'] = $this->input->post('titulo_img');
  
    $data['titulo_postagem'] = $this->input->post('titulo_postagem');
    $data['texto'] = $this->input->post('texto');
   
    
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_post', $data);
    $this->model->edita_post($id);
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}

public function servicos_registro(){
    
  if($this->session->userdata('level')==='1'){
  $this->load->view('template/navbar_cadastro');
  $this->load->view('template/header');
  $this->load->model('ServicoModel', 'model');
  $data['tabela_feitos'] = $this->model->gera_tabela_feitosf();
  $this->load->view('common/table_feitosf.php', $data);
  $this->load->view('template/rodape');

}else{
$this->load->view('template/header');
  redirect('login');
}

}

public function ver_post($id){
  
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('BlogModel', 'model');

    $this->load->helper('file');
    
    $this->load->model('ImagemModel', 'imagem');
    $data['imagens'] = $this->imagem->salva();
    $data['nome'] = $this->input->post('nome');
    $data['titulo_img'] = $this->input->post('titulo_img');
  
    $data['titulo_postagem'] = $this->input->post('titulo_postagem');
    $data['texto'] = $this->input->post('texto');
   
    
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/view_post', $data);
    $this->load->view('template/footer');
    $this->load->view('template/rodape');


}


public function editar_aviso($id){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
    $this->load->view('template/navbar');
    $this->load->view('template/header');

 $this->load->model('BlogModel', 'model');
    
    $data['titulo_aviso'] = $this->input->post('titulo_aviso');
    $data['aviso'] = $this->input->post('aviso');
  
    
    $data['user'] = $this->model->read_aviso($id);
    $this->load->view('ver/edita_aviso', $data);
    $this->model->edita_aviso($id);
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}



public function editar($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('UserModel', 'model');



    $this->load->helper('file');
    
    $this->load->model('ImagemModel', 'imagem');
    $data['imagens'] = $this->imagem->salva();
    
    $data['titulo_img'] = $this->model->read($id);
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_cadastro', $data);
    $this->model->edita_usuario($id);

    $this->load->view('template/footer');
    $this->load->view('template/rodape');

  }else{
    
    $this->load->view('template/header');
    redirect('login');
  }

}

public function gerenciar_usu($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');
    $this->load->model('UserModel', 'model');


    $data['nivel'] = $this->input->post('nivel');


    $data['user'] = $this->model->read($id);
    $this->load->view('ver/gerencia_usu.php', $data);
    $this->model->edita_perm($id);
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}

public function editar_serv($id){
  if($this->session->userdata('level')==='1'){
    $this->load->view('template/navbar_cadastro');
    $this->load->view('template/header');


    $this->load->helper('file');

    $this->load->model('ImagemModel', 'imagem');

   $data['imagens'] = $this->imagem->salva();


    $this->load->model('ServicoModel', 'model');
    $data['nome'] = $this->input->post('nome');
    $data['detalhe'] = $this->input->post('detalhe');
    $data['preco'] = $this->input->post('preco');
    $data['user'] = $this->model->read($id);
    $this->load->view('ver/edita_servico', $data);
    $this->model->edita_servico($id);
    $this->load->view('template/rodape');

  }else{
    $this->load->view('template/header');
    redirect('login');
  }

}




public function deletar($id){
  if($this->session->userdata('level')==='1'){
  $this->load->model('UserModel', 'model');
  $this->model->deletar($id);
  redirect('page/lista');

}else{
  $this->load->view('template/header');
  redirect('login');
}

}

public function deletar_post($id){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
  $this->load->model('BlogModel', 'model');
  $this->model->deletar_post($id);
  redirect('page/blog');

}else{
  $this->load->view('template/header');
  redirect('login');
}

}

public function deletar_aviso($id){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
  $this->load->model('BlogModel', 'model');
  $this->model->deletar_aviso($id);
  redirect('page/blog');

}else{
  $this->load->view('template/header');
  redirect('login');
}

}

public function deletando($id){
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
  $this->load->model('MensagemModel', 'model');
  $this->model->deleta_msg($id);
  redirect('page/mensagens');

}


else{
  $this->load->view('template/header');
  redirect('login');
}

}

public function deleta_serv($id){
  if($this->session->userdata('level')==='1'){
  $this->load->model('ServicoModel', 'model');
  $this->model->deleta_svc($id);
  redirect('page/servicos');

}else{
  $this->load->view('template/header');
  redirect('login');
}

}


public function deleta_registro($id){
  if($this->session->userdata('level')==='1'){
  $this->load->model('ServicoModel', 'model');
  $this->model->deleta_reg($id);
  redirect('page/servicos_registro');

}else{
  $this->load->view('template/header');
  redirect('login');
}

}       

public function deleta_avaliacao($id){
  
  if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='3'){
  $this->load->model('AvaliacaoModel', 'model');
  $this->model->deleta_ava($id);
  redirect('page/avaliacoes');

}
else{
  $this->load->view('template/header');
  redirect('login');
}

}


public function senha(){
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('ver/senha');
}

public function redefinir_senha(){
    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('ver/redefinir_senha');
}






}
