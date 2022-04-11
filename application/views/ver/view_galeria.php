<?php
include_once APPPATH.'controllers/Login.php';
?>
 


<section class="ftco-animate">
<div class="container mt-5"><br/><br/>
    <div class="row text-center">

        <div class="col-md-12 col-12 mx-auto text-center">
         


               
                <div class="text-center mt-5">
              <a href="<?= base_url('index.php/barbearia/galeria'); ?>">  <i class="fas fa-long-arrow-alt-left fa-3x"></i></a>
                <br>

            <img 
             src="<?= base_url(); ?>uploads/<?= isset($user) ? $user['titulo_img'] : '' ?>.jpg" 
            class="img-fluid mt-2">
           
</div>
<div class="container mx-auto mt-5">

<h2 class="text-warning ml-2 mb-4">Enviado por: <?= isset($user) ? $user['nome'] : '' ?></h2>

<?php 
if($this->session->userdata('level')==='1'){
echo '<h2>';
echo '<a class="text-danger" href="';
echo base_url('index.php/barbearia/deletar_foto/');
echo isset($user) ? $user['id'] : '' ;
echo '">
<i title="Deletar" class="fas fa-times-circle text-danger"></i> Deletar foto</a>
</h2>';
}
elseif($this->session->userdata('id')===($user['id_usu'])){
echo '<h2>';
echo '<a class="text-danger" href="';
echo base_url('index.php/barbearia/deletar_foto/');
echo isset($user) ? $user['id'] : '' ;
echo '">
<i title="Deletar" class="fas fa-times-circle text-danger"></i> Deletar foto</a>
</h2>';
}
?>
</div>

        </div>
       
    
</div>
</section>