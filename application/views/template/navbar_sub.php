<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(''); ?>">JR Administração / <i class="fas fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="container mx-auto">
    <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?= base_url('index.php/barbearia'); ?>" class="nav-link">Início</a></li>
        <li class="nav-item "><a href="<?= base_url('index.php/page/mensagens'); ?>" class="nav-link">Mensagens</a></li>
        <li class="nav-item"><a href="<?= base_url('index.php/page/avaliacoes'); ?>" class="nav-link">Avaliações</a></li>
        <li class="nav-item"><a href="<?= base_url('index.php/barbearia/galeria'); ?>" class="nav-link">Postar na Galeria</a></li>
        <li class="nav-item"><a href="<?= base_url('index.php/page/blog'); ?>" class="nav-link">Postar no Blog</a></li>
        <li class="nav-item btn-danger text-center"><a href="<?php echo site_url('login/logout');?>" class="nav-link"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>