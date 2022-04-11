<div class="row mx-auto col-12 mt-5 pt-5 xl-auto">

    <form method="POST" class="w-100 col-6">
      <p class="h4 text-center py-4 pt-5 mt-5">Fiz mais um(a) <?= isset($user) ? $user['nome'] : '' ?></p>
      <p class="text-center text-info">Quantidade de <?= isset($user) ? $user['nome'] : '' ?> feito(as): <?=$user['feito']?></p>
     <?php $total = $user['feito'] * $user['preco'] ?>
     <p class="text-center text-warning">Total lucrado até o momento: <?= $total ?> Reais </p>
      <div class="md-form">
        
        <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['nome'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="nome" placeholder="Nome do Serviço" required>
      </div>
      <div class="md-form">
       <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['detalhe'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="detalhe" placeholder="Descrição do Serviço" required>
      </div>
      <div class="md-form">
        <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['preco'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="preco" placeholder="Preço, exemplo '20,99'" required>
      </div>
      <div class="md-form">
       <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['feito'] + 1: '' ?>" class="w-100 text-white" type="hidden" type="text" name="feito" placeholder="Preço, exemplo '20,99'" required>
      </div>
      <div class="text-center Apy-4 mt-3">
        <button class="btn btn-amber" type="submit"><i class="fas fa-plus"></i></button>
      </div>
    </form>


    <form method="POST" class="w-100 col-6">
      <p class="h4 text-center py-4 pt-5 mt-5">Subtrair um(a) <?= isset($user) ? $user['nome'] : '' ?></p>
      <p class="text-center text-info">Quantidade de <?= isset($user) ? $user['nome'] : '' ?> feito(as): <?=$user['feito']?></p>
     <p class="text-center text-warning">Total lucrado até o momento: <?= $total ?> Reais </p>
      <div class="md-form">
        
        <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['nome'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="nome" placeholder="Nome do Serviço" required>
      </div>
      <div class="md-form">
       <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['detalhe'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="detalhe" placeholder="Descrição do Serviço" required>
      </div>
      <div class="md-form">
        <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['preco'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="preco" placeholder="Preço, exemplo '20,99'" required>
      </div>
      <div class="md-form">
       <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['feito'] - 1: '' ?>" class="w-100 text-white" type="hidden" type="text" name="feito" placeholder="Preço, exemplo '20,99'" required>
      </div>
      <div class="text-center Apy-4 mt-3">
        <button class="btn btn-amber" type="submit"><i class="fas fa-minus"></i></button>
      </div>
    </form>

    <form method="POST" class="w-100 col-6">
      <p class="h4 text-center py-4 pt-5 mt-5">Zerar <?= isset($user) ? $user['nome'] : '' ?></p>
      <p class="text-center text-info">Quantidade de <?= isset($user) ? $user['nome'] : '' ?> feito(as): <?=$user['feito']?></p>
     <p class="text-center text-warning">Total lucrado até o momento: <?= $total ?> Reais </p>
      <div class="md-form">
        
        <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['nome'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="nome" placeholder="Nome do Serviço" required>
      </div>
      <div class="md-form">
       <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['detalhe'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="detalhe" placeholder="Descrição do Serviço" required>
      </div>
      <div class="md-form">
        <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="<?= isset($user) ? $user['preco'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="preco" placeholder="Preço, exemplo '20,99'" required>
      </div>
      <div class="md-form">
       <div class="icon"><span class="ion-md-calendar"></span></div>
		    <input value="0" class="w-100 text-white" type="hidden" type="text" name="feito" placeholder="Preço, exemplo '20,99'" required>
      </div>
      <div class="text-center Apy-4 mt-3">
        <button class="btn btn-amber" type="submit">Zerar</button>
      </div>
    </form>


    <form method="POST" action="<?= base_url('index.php/page/cadastrar_feito') ?>" class="w-100 col-6">
  <p class="h4 text-center py-4 pt-5 mt-5">Registrar <?= isset($user) ? $user['nome'] : '' ?> feito(as) e data.</p>
  <p class="text-center text-info">Quantidade de <?= isset($user) ? $user['nome'] : '' ?> feito(as): <?=$user['feito']?></p>
     <p class="text-center text-warning">Total lucrado até o momento: <?= $total ?> Reais </p>
  <div class="md-form">
    
    <div class="icon"><span class="ion-md-calendar"></span></div>
        <input value="<?= isset($user) ? $user['nome'] : '' ?>" class="w-100 text-white" type="hidden" type="text" name="fnome" placeholder="Nome do Serviço" required>
  </div>
  <div class="md-form">
    <div class="icon"><span class="ion-md-calendar"></span></div>
        <input value="<?= $total ?>" class="w-100 text-white" type="hidden" type="text" name="fpreco" placeholder="Preço, exemplo '20,99'" required>
  </div>
  <div class="md-form">
   <div class="icon"><span class="ion-md-calendar"></span></div>
        <input value="<?= isset($user) ? $user['feito']: '' ?>" class="w-100 text-white" type="hidden" type="text" name="ffeitos" placeholder="Preço, exemplo '20,99'" required>
  </div>
   <div class="icon"><span class="ion-md-calendar"></span></div>
        <input value="<?php echo date('d-m-Y');?>" class="w-100 text-white" type="hidden" type="text" name="fdata" placeholder="" required>
  
  <div class="text-center Apy-4 mt-3">
        <button class="btn btn-amber" type="submit">Registrar</button>
      </div>
</form>

</div>
