<div class="hero-wrap" style="background-image: url('assets/img/.jpg');" data-stellar-background-ratio="0.5">
	   <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Área do Administrador</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url(); ?>">Home</a></span> <span>Área do Adm</span></p>
	          </div>
	        </div>
	      </div>
	    </div>
	    <section class="ftco-section">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-md-6 d-flex ftco-animate">
	    				<div class="img img-about align-self-stretch" style="background-image: url(<?= base_url('assets/img/adm_edit.png');?>); width: 100%;"></div>
	    			</div>
	    			<div class="col-md-6 pl-md-5 ftco-animate">
	    				<h2 class="mb-4">Bem Vindo a Área de Administrador do Website da JR Barbearia.</h2>
	    				
                        <h5 class="text-warning">E ai 
                        <?php echo $this->session->userdata('username'); ?> 
                        
                        , quer saber pra que serve essa área?
						</h5>
	    				<p>Essa área foi desenvolvida para que você <span>Administrador</span> possa gerenciar a página a sua maneira, caso deseje: adicionar cliente, deletar uma mensagem
                        desrespeitosa, apagar uma avaliação que esteja incomodando outros clientes, alterar preços, adicionar novos serviços esses são alguns de seus poderes como <span>Administrador
                        </span>.</p>
	    			</div>
	    		</div>
	    	</div>
        </section>
        <section>
        <div class="container mb-3 mt-5 ">
<div class="ftco-animate">
  <h2 class="h1-responsive text-center">Sobre o Administrador</h2>
  <p class="text-center w-responsive mx-auto mb-5">Está com duvidas sobre oque pode fazer ou de como fazer? Veja algumas informações úteis
  sobre a área do administrador nos textos abaixo.</p><br>
</div>
  <div class="row ftco-animate">

    <div class="col-lg-5 ftco-animate">

      <div class="view overlay rounded mb-lg-0 mb-4">
        <img class="img-fluid" src="<?= base_url('assets/img/duvida.png');?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <div class="col-lg-7 ftco-animate">

      <a href="#!" class="green-text">
        
      </a>
      <h3 class="mb-3 amber-text"><strong>O'que eu posso fazer?</strong></h3>
      <p>Como um administrador da JR barbearia você recebe acesso a área de administrador sempre que fizer login, nesta área você pode 
      gerenciar diversos dados e informações do sistema do site, tais coisas como:</p>

      <i class="far fa-plus-square text-info fa-2x ml-5" title="Adicionar"></i> Criar
      <i title="Editar" class="far fa-edit text-warning fa-2x ml-5"  title="Editar"></i> Editar
      <i title="Deletar" class="fas fa-times-circle text-danger fa-2x ml-5"  title="Deletar"></i> Deletar

      
    <ul><span>
      <li><a href="<?= base_url('index.php/page/admin');?>">Cadastrar Clientes ou Administradores novos.</a></li>
      <li><a href="<?= base_url('index.php/page/lista');?>">Gerenciar contas registradas (deletar/editar).</a></li>
      <li><a href="<?= base_url('index.php/page/mensagens');?>">Verificar Mensagens enviadas (podendo deletar após ler).</a></li>
      <li><a href="<?= base_url('index.php/page/avaliacoes');?>">Gerenciar Avaliações (exibir/ocultar/deletar).</a></li>
      <li><a href="<?= base_url('index.php/page/servicos');?>">Criar novos Serviços e Preços.</a></li>
      <li><a href="<?= base_url('index.php/page/servicos');?>">Alterar Serviços e Preços.</a></li>
      <li><a href="<?= base_url('index.php/page/blog');?>">Criar e Editar postagens.</a></li>
      <li><a href="<?= base_url('index.php/barbearia');?>">Informações Exibidas na Pagina.</a></li> 
      <li><a href="<?= base_url('index.php/barbearia/galeria');?>">Adicionar fotos a Galeria.</a></li> 
    </span></ul>
    <p>Obs: Você pode ver no navbar acima as devidas paginas ou clicar nos links acima para ser redirecionado para as paginas onde pode fazer as determinadas ações.</p>
    </div>
  </div>

  <hr class="my-5 ftco-animate">

  <div class="row ftco-animate">

    <div class="col-lg-7 ftco-animate">

      <a href="#!" class="pink-text">
        
      </a>
      <h3 class="mb-3 amber-text"><strong>Para que serve a área de Adm?</strong></h3>
      <p>Está área foi criada para que a página da JR Barbearia pudesse ser moldada ao gosto do Dono/Administrador 
      ela da poder para alterar informações do sistema, ela permite por exemplo: Tirar do site comentários indesejados, Atualizar 
      serviços e preços, Modificar horarios entre outras coisas. É uma área que da poder ao administrador de gerenciar o WebSite.</p>


    </div>
    <div class="col-lg-5 ftco-animate">

      <div class="view overlay rounded">
        <img class="img-fluid" src="<?= base_url('assets/img/engrenagem.png');?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
  </div>
  <hr class="my-5 ftco-animate">

  <div class="row ftco-animate">

    <div class="col-lg-5 ftco-animate">

      <div class="view overlay rounded mb-lg-0 mb-4">
        <img class="img-fluid" src="<?= base_url('assets/img/dicas.png');?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <div class="col-lg-7 ftco-animate">

      <a href="#!" class="indigo-text">
        
      </a>
      <h3 class="mb-3 amber-text"><strong>Extras:</strong></h3>

      <p>A área de Administrador é feita com segurança para que apenas os usuarios administradores possam ter acesso aos poderes 
      de modificar inforamações e dados do sistema, nenhum usuário ou não-usuario pode ter acesso a esta área a menos que seja um administrador
      , se você está lendo isto significa que você é um Administrador, então aqui vai uma dica nossa: Nós demos o poder de alterar coisas como informações dos Clientes 
      e as avaliações de tais, você pode fazer o'que desejar, mas lembre-se: <cite title="Tio Ben ;)">"Com grandes poderes vem grandes responsabilidades"</cite>.</p>

    </div>

  </div>
</div>
	  </section>