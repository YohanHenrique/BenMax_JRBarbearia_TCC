<!-- Reply section (logged in user) -->
<?php
include_once APPPATH.'controllers/Login.php';
?>
  
<br><br><br><br>
  

<section>

<div class="container mt-5"><br/><br/>
    <div class="row text-center">
        <div class="col-md-7 mx-auto text-center">
         
            <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
            
            <h1>Edite a postagem nos campos abaixo</h1>
 


<input type="" value="<?= isset($user) ? $user['titulo_aviso'] : '' ?>" type="text" class="form-control" name="titulo_aviso" placeholder="Adicione o novo Titulo" required>

<input class="form-control" value="<?= isset($user) ? $user['aviso'] : '' ?>" name="aviso" id="exampleFormControlTextarea1" rows="6" placeholder="Escreva o novo aviso...">

                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Enviar</button>
            </form>
       
       </div>
    </div>
</div>
</section>