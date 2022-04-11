<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(''); ?>">JR Administração / <i class="fas fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="container mx-auto">
    <div class="collapse navbar-collapse" id="ftco-nav">

      <ul class="navbar-nav ml-auto"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends text-warning fa-2x"></i> Clientes/Usuários
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/page/admin'); ?>">Cadastrar clientes</a>
          <a class="dropdown-item" href="<?= base_url('index.php/page/lista'); ?>">Meus clientes</a>
        </div>
      </li>
      <ul class="navbar-nav"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-dollar-sign text-warning fa-2x"></i> Serviços/Produtos
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/page/servicos'); ?>">Serviços</a>
          <a class="dropdown-item" href="<?= base_url('index.php/page/lista_produtos'); ?>">Produtos</a>
        </div>
      </li>
      <ul class="navbar-nav"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-comments text-warning fa-2x"></i> Mensagens/Avaliações
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/page/mensagens'); ?>">Mensagens</a>
          <a class="dropdown-item" href="<?= base_url('index.php/page/avaliacoes'); ?>">Avaliações</a>
        </div>
      </li>
      <ul class="navbar-nav"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="far fa-images text-warning fa-2x"></i> Postar
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/page/blog'); ?>">Blog</a>
          <a class="dropdown-item" href="<?= base_url('index.php/barbearia/galeria'); ?>">Galeria</a>
        </div>
      </li>
      <ul class="navbar-nav"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt text-warning fa-2x"></i> Atualizar
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/page/lista_informacoes'); ?>">Informações do Negócio</a>
          <a class="dropdown-item" href="<?= base_url(''); ?>">informações da Home</a>
        </div>
      </li>
      <ul class="navbar-nav"><li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-toolbox text-warning fa-2x"></i> Gerenciar
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/page/fazer_servicos'); ?>">Gerenciar Serviços</a>
          <a class="dropdown-item" href="<?= base_url('index.php/page/servicos_registro'); ?>">Registros do Negócio</a>
        </div>
      </li>
        <li class="nav-item btn-danger text-center"><a href="<?php echo site_url('login/logout');?>" class="nav-link"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>