<nav class="navbar navbar-expand-lg navbar-white ftco_navbar bg-white ftco-navbar-light" id="ftco-navbar">  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>">JR Barbearia.</a>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=5511980239587&text=Olá Júnior, você está aberto?" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;z-index:1000;" target="_blank">
        <i style="margin-top:16px" class="fab fa-whatsapp"></i>
       </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?= base_url('index.php/barbearia'); ?>" class="nav-link">Início</a></li>
        <li class="nav-item "><a href="<?= base_url('#serviço'); ?>" class="nav-link">Serviços</a></li>
        <li class="nav-item"><a href="<?= base_url('#avaliações'); ?>" class="nav-link">Avaliações</a></li>
        <li class="nav-item"><a href="<?= base_url('#produtos'); ?>" class="nav-link">Produtos</a></li>
        <li class="nav-item"><a href="<?= base_url('index.php/barbearia/galeria'); ?>" class="nav-link">Galeria</a></li>
        <li class="nav-item"><a href="<?= base_url('index.php/page/blog'); ?>" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="<?= base_url('#contato'); ?>" class="nav-link">Contato</a></li>


<?php
        if($this->session->userdata('level')==='2'){
         
          echo '
          <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="';

          echo base_url('uploads/') ;
          echo $this->session->userdata('titulo_img');
          echo '.jpg';
          echo '" class="rounded-circle z-depth-0" style="width: 20px"
              alt="avatar image">
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">';
          echo '<a class="dropdown-item" href="';

          
          echo base_url();
          echo 'index.php/page/cliente/';
          echo $this->session->userdata('id');
          
          
          echo '">';
          echo $this->session->userdata('username');
          echo ' <i class="fas fa-user"></i>';
          echo '</a>';
          echo'<a class="dropdown-item" href="';
          echo base_url();
          echo 'index.php/login/logout';
          echo '">Deslogar <i class="fas fa-sign-out-alt"></i></a>';
          echo '</div>
      </li>';

      }   
      
      elseif($this->session->userdata('level')==='3'){
         
        echo '
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-tools"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">';
          echo '<a class="dropdown-item" href="';
  
          
          echo base_url();
          echo 'index.php/page/cliente/';
          echo $this->session->userdata('id');
          
          
          echo '">';
          echo $this->session->userdata('username');
          echo ' <i class="fas fa-user"></i>';
          echo '</a>';
        
          echo '<a class="dropdown-item" href="';
          echo base_url();
          echo 'index.php/page/sub_administrador';
          echo '">Pagina do Sub-Adm <i class="fas fa-hammer"></i>';
          echo '</a>';
          echo'<a class="dropdown-item" href="';
          echo base_url();
          echo 'index.php/login/logout';
          echo '">Deslogar <i class="fas fa-sign-out-alt"></i></a>';
          echo '</div>
      </li>';

    }
      
      
      elseif($this->session->userdata('level')==='1'){
         
        echo '
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-tools"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-default"
        aria-labelledby="navbarDropdownMenuLink-333">';
        echo '<a class="dropdown-item" href="';

        
        echo base_url();
        echo 'index.php/page/cliente/';
        echo $this->session->userdata('id');
        
        
        echo '">';
        echo $this->session->userdata('username');
        echo ' <i class="fas fa-user"></i>';
        echo '</a>';
      
        echo '<a class="dropdown-item" href="';
        echo base_url();
        echo 'index.php/page/';
        echo '">Pagina de Adm <i class="fas fa-hammer"></i>';
        echo '</a>';
        echo'<a class="dropdown-item" href="';
        echo base_url();
        echo 'index.php/login/logout';
        echo '">Deslogar <i class="fas fa-sign-out-alt"></i></a>';
        echo '</div>
    </li>';

    }

    else{
          echo '<li class="nav-item"><a href="';
          echo  base_url('index.php/login');
          echo '" class="nav-link"><i class="far fa-user"></i></a></li>';
      }

?>

      </ul>
      
    </div>
  </div>
</nav>