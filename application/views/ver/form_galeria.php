
<div class="container mt-5 pt-2"><br/><br/>
  <div class="text-center">
<a href="<?= base_url('index.php/barbearia/galeria'); ?>">  <i class="fas fa-long-arrow-alt-left fa-3x"></i></a>
            </div>
            <form method="post" enctype="multipart/form-data" class="text-center border border-light mt-3 p-5">
 



                <p class="h2">Adicionar nova Foto</p>
               <p>No campo abaixo faça upload da imagem que deseja postar e clique em enviar.</p>
                <div class="text-center">
          
            <img 
             src="<?= base_url('assets/images/galeria_env.png'); ?>" 
            class="img-fluid mt-3" style="width: 110px;"><br>
           <p>Logado com: <a href="<?= base_url('index.php/page/cliente/'); ?><?= $this->session->userdata('id');?>"><?= $this->session->userdata('username');?></a></p>
</div>


<input type="hidden" value="<?= $this->session->userdata('username'); ?>" type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
<input type="hidden" value="<?= $this->session->userdata('id'); ?>" type="text" class="form-control" name="id_usu" placeholder="Seu id" required>

                <input type="hidden" value="<?php echo date('dmY_His');?>_galeria" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
                
                <input type="file" name="userfile" id="userfile" class="form-control mb-4" placeholder="Selecione uma imagem" required/>
                <p> Imagens muito grandes não serão upadas, Somente imagens (jpg/png) são aceitas, caso a imagem demore a carregar continue aguardando, seu navegador pode demorar a atualizar coockies, ou tente upar outra imagem.</p>
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Enviar</button>
            </form>
        </div>
       
    </div>
</div><br>
</section>