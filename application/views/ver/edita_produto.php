<!-- Reply section (logged in user) -->
<?php
include_once APPPATH.'controllers/Login.php';
?>
  
  </div>
<br><br><br><br>
  <div class="d-md-flex flex-md-fill mt-4 px-1">
    <div class="d-flex justify-content-center mr-md-5">
    </div>
    
 <!--   -->
    <!--<form method="POST" action="<?= base_url() ?>index.php/page/cadastrar_post">

                          <input type="" value="<?= $this->session->userdata('username'); ?>" type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
                   Reply section (logged in user) -->


<div class="container mt-5"><br/><br/>
    <div class="row text-center">
        <div class="col-md-12 mx-auto text-center">
            <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
            <p>Edite o produto nos campos abaixo</p>
 



                <p class="h4 mb-4">Editar produto</p>
               
                <div class="text-center">
          
            <img 
             src="<?= base_url(); ?>uploads/<?= isset($user) ? $user['titulo_img'] : '' ?>.jpg" 
            class="img-fluid ">
           
</div>


<input type="" value="<?= isset($user) ? $user['nome'] : '' ?>" type="text" class="form-control" name="nome" placeholder="Nome Completo">

<input type="" value="<?= isset($user) ? $user['preco'] : '' ?>" type="text" class="form-control" name="preco" placeholder="preco">

<input class="form-control pl-3 pt-3" value="<?= isset($user) ? $user['descricao'] : '' ?>" name="descricao" id="exampleFormControlTextarea1" rows="6" placeholder="Escreva algo sobre aqui...">

                <input type="hidden" value="<?= isset($user) ? $user['titulo_img'] : '' ?>" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
                
                <input type="file" name="userfile" id="userfile" class="form-control mb-4" placeholder="Selecione uma imagem"/>
                <p> Somente imagens (jpg/png) são aceitas, caso a imagem demore a carregar continue aguardando, seu navegador pode demorar a atualizar coockies.</p>
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Enviar</button>
            </form>
        </div>
       
        </div>
       
    </div>
</div>
</section>