<?php
include_once APPPATH.'controllers/Login.php';
?>
  
  </div>
<br><br><br><br>

<section class=" text-center">

        <div class="col-md-8 mt-5 text-center mx-auto text-center">
          <div class="text-center">
            <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
            <h2>Postar um Aviso ao Clientes</h2>
            <p>Dê um Titulo e Digite seu aviso nos campos abaixo, seu aviso será postado na pagina blog do Site ;)</p>
            
 


<input type="" value="" type="text" class="form-control" name="titulo_aviso" placeholder="Titulo do Aviso" required>
<input type="hidden" value="<?= $this->session->userdata('username'); ?>" class="form-control" name="nome" placeholder="Titulo do Aviso" required>
<input type="hidden" value="<?= $this->session->userdata('id'); ?>" class="form-control" name="id_usu" placeholder="Titulo do Aviso" required>

<textarea class="form-control pl-3 pt-3" name="aviso" id="exampleFormControlTextarea1" rows="6" placeholder="Escreva seu aviso aqui..." required></textarea>

                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Postar</button>
            </form>
        </div>
       </div>
</div>
</section>