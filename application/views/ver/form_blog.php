<?php
include_once APPPATH.'controllers/Login.php';
?>
  
  </div>
<br><br><br><br>
  <div class="d-md-flex flex-md-fill px-1">
    <div class="d-flex justify-content-center ">

    </div>
    
<div class="container mt-5"><br/><br/>
    <div class="row text-center">
        <div class="col-md-12 mx-auto text-center">
            <form method="post" action="<?= base_url('index.php/page/cadastrar_post') ?>" enctype="multipart/form-data" class="text-center border border-light p-5">

                <p class="h4 mb-4">Adicionar nova Postagem <i class="fas fa-blog text-warning"></i></p>
               
                <div class="text-center">
          
            <img 
             src="<?= base_url('assets/images/blog_form.png'); ?>" 
            class="img-fluid " style="width: 310px;">
            <p>Logado com: <a href="<?= base_url('index.php/page/cliente/'); ?><?= $this->session->userdata('id');?>"><?= $this->session->userdata('username');?></a></p>
</div>


<input type="hidden" value="<?= $this->session->userdata('username'); ?>" type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
<input type="hidden" value="<?= $this->session->userdata('id'); ?>" type="text" class="form-control" name="id_usu" placeholder="id" required>
<input type="" type="text" class="form-control" name="titulo_postagem" placeholder="Titulo da Postagem">

<textarea class="form-control pl-3 pt-3" name="texto" id="exampleFormControlTextarea1" rows="6" placeholder="Escreva algo sobre aqui..."></textarea>

                <input type="hidden" value="<?php echo date('dmY_His');?>" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
                
                <input type="file" name="userfile" id="userfile" class="form-control mb-4" placeholder="Selecione uma imagem" required/>
                <p> Imagens Grandes demais não serão upadas, Somente imagens (jpg/png) são aceitas, caso a imagem demore a carregar continue aguardando, seu navegador pode demorar a atualizar coockies.</p>
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Enviar</button>
            </form>
        </div>
       
    </div>
</div>
</div>
</section>