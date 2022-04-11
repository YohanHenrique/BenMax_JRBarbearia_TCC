<!-- Reply section (logged in user) -->
<?php
include_once APPPATH.'controllers/Login.php';
?>
<section class=" ftco-section ftco-bg-dark ftco-animate">

  <div class="text-center">
  <div class="container">
      </form>
      <form method="post" action="<?= base_url() ?>index.php/page/cadastrar_avaliacao" enctype="multipart/form-data" class="text-center">
            
      <input type="hidden" value="<?= $this->session->userdata('username'); ?>" type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
      <input type="hidden" value="<?= $this->session->userdata('titulo_img'); ?>" type="text" class="form-control" name="foto" placeholder="Imagem" required>
      <input type="hidden" value="<?= $this->session->userdata('email'); ?>" type="email" name="email" class="form-control" placeholder="Seu e-mail" required>
      <input type="hidden" value="0" name="visivel" class="form-control" placeholder="" required>
    
    
  <div class="card-header border-0 font-weight-bold">Deixe sua Avaliação (Logado como:  
<a href="<?= base_url('index.php/page/cliente/');?><?= $this->session->userdata('id');?>"><?php
  
    echo $this->session->userdata('username');
    
  
?>
  </a>)
  
  
  
  </div> <div class="d-flex justify-content-center mr-md-5">
      <img class="card-img-100 z-depth-1 mb-4 mr-5" src="<?= base_url('uploads/') ?><?= $this->session->userdata('titulo_img');?>.jpg"
        alt="avatar">
   
    <textarea type="" value="" name="comentario" class="form-control" rows="6" maxlength="150" placeholder="Digite aqui sua avaliação... (max. 150 caracteres)" required></textarea>
    </div>
     



                <input type="hidden" value="<?php echo date('dmY_His');?>" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
                <p class="mt-3">Selecione uma imagem <span>se desejar: </span></p>
                <input type="file" name="userfile" id="userfile" class="form-control" placeholder="Selecione uma imagem"/>
                <button class="btn btn-primary btn-md mt-4" value="Salvar" type="submit">Enviar</button>
            </form>


      </div>
</section>
<!-- Reply section (logged in user) -->