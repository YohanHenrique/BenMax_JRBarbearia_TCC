<div class="container mt-5 pt-5">
    <div class="row pt-4 mt-4">
        <div class="col-lg-6 mx-auto border border-warning">
        <h1 class="mr-2 text-center mt-5"> <a href="#"> Gerenciar Usuário </a></h1>
        <?php if($this->session->userdata('id')===$user['id']){
           
           echo '<div class="container text-center">';
            echo '<p>Atualize as informações sobre você nos campos abaixo</p>';
            echo '</div>';
        }
        ?>
        <div class="container mt-5"><br/><br/>
    <div class="row text-center">
        <div class="col-md-11 mx-auto text-center">
          
               
                <div class="text-center">
          
            <img 
             src="<?= base_url(); ?>uploads/<?= isset($user) ? $user['titulo_img'] : '' ?>.jpg" 
            class="img-fluid ">
           
</div>

        </div>
       
    </div>
</div>
            <form  method="POST" class="w-100" >

<?php
if($user['nivel'] > (0)){
echo '<input value="0" type="hidden" class="w-100" id="telefone" name="nivel" size="35" maxlength="12" placeholder="Digite um numero de celular" required><br><br>';
echo '<p class="h4 text-center mb-4">Banir <strong class="text-danger">';
echo $user['nome'];
echo '</strong> ?</p>
<div class="mx-auto text-center">
                    <input type="submit" class="btn btn-blue px-4 py-3 text-center" value="Banir">
                </div>
';

}
else{
echo '<input value="2" type="hidden" class="w-100" id="telefone" name="nivel" size="35" maxlength="12" placeholder="Digite um numero de celular" required><br><br>';
echo '<p class="h4 text-center mb-4">Desbanir <strong class="text-success">';
echo $user['nome'];
echo '</strong> ?</p>
<div class="mx-auto text-center">
                    <input type="submit" class="btn btn-blue px-4 py-3 text-center" value="Desbanir">
                </div>
';
}

?>
                    
            </form>
        </div>    
    </div>
</div>
<br>