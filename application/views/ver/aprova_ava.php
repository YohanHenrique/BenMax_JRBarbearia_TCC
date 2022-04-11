<?php
include_once APPPATH.'controllers/Login.php';
?>
  
  </div>
  <div class="d-md-flex flex-md-fill mt-4 px-1">

<section>
    </div>
    
<div class="container mt-5 pt-5"><br/><br/>
    <div class="row text-center">

        <div class="col-12 mx-auto text-center">
            <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">

                <div class="text-center staff">
          
           
<p class="h4 text-warning"><?= isset($user) ? $user['nome'] : '' ?></p>
<p><?= isset($user) ? $user['comentario'] : '' ?></p>

</div>


<div class="text-center">
<?php if($user['visivel'] == (0)){
echo '

<p class="h4 mt-3">Exibir avaliação na Home?</p>

<input type="hidden" name="visivel" value="1" id="exampleForm2" class="form-control">
   
</div>
';} ?>

<?php if($user['visivel'] == (1)){
echo '

<p class="h4 mt-3">Ocultar avaliação na Home?</p>

<input type="hidden" name="visivel" value="0" id="exampleForm2" class="form-control">

</div>
';} ?>


<?php if($user['visivel'] == (0)){
echo '
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Aprovar Exibição</button>
            ';
} ?>

<?php if($user['visivel'] == (1)){
echo '
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Ocultar</button>
            ';
} ?>
      </div>      
            
            </div>
        </div>
       </form>
    
</div>
</section>