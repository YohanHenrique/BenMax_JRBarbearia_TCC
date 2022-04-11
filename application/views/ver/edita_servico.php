<div class="container col-5 mt-5 pt-5 xl-auto">

<h2 class="text-center mt-5 pt-3">Editar serviço</h2>
<p class="text-center">Edite o serviço nos campos abaixo.</p>
<?php
$arquivo = ('uploads/'.$user['titulo_img'].'.jpg');

?>
<form method="post" enctype="multipart/form-data" class="text-center border p-5 mt-5 pt-3">
            
            <input type="" value="<?= isset($user) ? $user['nome'] : '' ?>" type="text" class="form-control" name="nome" placeholder="Nome do serviço" required>
            <input type="" value="<?= isset($user) ? $user['detalhe'] : '' ?>" type="text" class="form-control" name="detalhe" placeholder="Detalhes do serviço" required>
            <input type="number" value="<?= isset($user) ? $user['preco'] : '' ?>" type="" name="preco" class="form-control" placeholder="Preço do serviço (exemplo: 19,99)" required>
          
                     
                 <?php     
if (file_exists($arquivo)) {

    echo '<input type="hidden" value="' ;
    echo isset($user) ? $user['titulo_img'] : '' ;
    echo '" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />';

} else {
    
    echo '<input type="hidden" value="' ;
    echo date('dmY_His');
    echo '" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />';

}
                      ?>
                      <p class="mt-5">Selecione uma imagem <span>se desejar: </span></p>
                      <input type="file" name="userfile" id="userfile" class="form-control" placeholder="Selecione uma imagem"/>
                      <button class="btn btn-primary btn-md mt-4" value="Salvar" type="submit">Enviar</button>
                  </form>

</div>
