<?php
include_once APPPATH.'controllers/Login.php';
?>
  </div>
    <div class="d-md-flex flex-md-fill mt-4 px-1">
    <section>
        </div>
        
    <div class="container mt-5"><br/><br/>
        <div class="row text-center">

            <div class="col-md-12 col-12 mx-auto text-center">
            Logado com: <?= $this->session->userdata('username'); ?><img class="card-img-100 z-depth-1 mb-4" src="<?= base_url('uploads/') ?><?= $this->session->userdata('titulo_img');?>.jpg"
        style="widht: 40px " alt="avatar">  
                <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">Edite a postagem nos campos abaixo.
                    <p class="h4 mb-4">Adicione nova Imagem se quiser</p>
                    <div class="text-center">
                <img 
                src="<?= base_url(); ?>uploads/<?= isset($user) ? $user['titulo_img'] : '' ?>.jpg" 
                class="img-fluid ">
            
    </div>


    <input type="hidden" value="<?= $this->session->userdata('username'); ?>" type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
    <input type="" value="<?= isset($user) ? $user['titulo_postagem'] : '' ?>" type="text" class="form-control" name="titulo_postagem" placeholder="titulo postagi">
    <input type="" value="<?= isset($user) ? $user['texto'] : '' ?>" class="form-control pl-3 pt-3" name="texto" id="exampleFormControlTextarea1" rows="6" placeholder="Escreva algo aqui..."></textarea>
    <input type="hidden"  value="<?= isset($user) ? $user['titulo_img'] : '' ?>" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
    <input type="file" name="userfile" id="userfile" class="form-control mb-4" placeholder="Selecione uma imagem"/>
            <p> Somente imagens (jpg/png) são aceitas, caso a imagem demore a carregar continue aguardando, seu navegador pode demorar a atualizar coockies.</p>
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Enviar</button>
                </form>
            </div>
    </div>
    </section>