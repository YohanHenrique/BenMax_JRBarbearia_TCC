<?php
include_once APPPATH.'controllers/Login.php';
?>
 


<section class="ftco-animate">

<div class="container mt-5"><br/><br/>
    <div class="row text-center">

        <div class="col-12 mx-auto text-center">
         
            <form method="post" enctype="multipart/form-data" class="text-center border mt-3 border-light p-5">
<div class="col-12 text-center mt-5">
<span>Deseja comprar? Venha para a  <a href="<?= base_url('index.php/barbearia/contato') ?>">nossa loja fisica.</a><span>
</div>

<div class="col-md-8 mx-auto ftco-animate">
    				<div class="text-center">
					<div class="zoom">
    					<img src="<?= base_url(); ?>uploads/<?= isset($user) ? $user['titulo_img'] : '' ?>.jpg" class="img-fluid" 
						title="<?= isset($user) ? $user['nome'] : '' ?>" alt="Produto">
    					</div>
						<div class="text">
    						<h3><a href="loja.php?id=3"><strong class="text-warning h1"><?= isset($user) ? $user['nome'] : '' ?></strong></a></h3>
    						<span class="price h5 mb-4">R$: <?= isset($user) ? $user['preco'] : '' ?></span>
    					<p><?= isset($user) ? $user['descricao'] : '' ?></p>
    					</div>
    				</div>
    			</div>
<?php if($this->session->userdata('level')==='1'){
echo '<h5>';
echo '<a class="text-danger mr-2" href="';
echo base_url('index.php/barbearia/deletar_produto/');
echo isset($user) ? $user['id'] : '' ;
echo '">
<i title="Deletar" class="fas fa-times-circle text-danger"></i> Deletar produto</a>';
echo '<a class="text-info ml-2" href="';
echo base_url('index.php/barbearia/editar_produto/');
echo isset($user) ? $user['id'] : '' ;
echo '">
<i title="Deletar" class="fas fa-edit text-info"></i> Editar produto</a>
</h5>';
}
?>
</div>

</form>
        </div>
       
    
</div>
		
</section>