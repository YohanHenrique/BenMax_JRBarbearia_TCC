<section>
<div class="hero-wrap" style="background-image: url(<?= base_url('assets/images/b1-.jpg'); ?>);" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog <i class="fab fa-blogger"></i></h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="#">Home</a></span> <span>Blog</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-gallery">
	    	<div class="container">
	    		<div class="row justify-content-center mb-1">
                  <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nosso Blog</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">
<p>Veja abaixo alguns de nossas postagens, informações, avisos e etc..</p>
                  </div>
                </div>
	    	</div>

<div class="container">
<table class="table">
  <thead>
  
  
    <h1 class="text-center text-warning">
<br>
<?php
if($this->session->userdata('level')==='1'){
echo '<a class="text-info" href="cadastrar_post"><i class="fas fa-plus"></i> Postar no blog</a>
    <br><a class="text-info" href="cadastrar_aviso"><i class="fas fa-plus"></i> Postar aviso</a>
    </h1>';
}
if($this->session->userdata('level')==='3'){
echo '<a class="text-info" href="cadastrar_post"><i class="fas fa-plus"></i> Postar no blog</a>
    <br><a class="text-info" href="cadastrar_aviso"><i class="fas fa-plus"></i> Postar aviso</a>
    </h1>';
}


else{}
?>
    </div>
  </thead>
    <tbody>



 <div class="row text-center">
        
        <?= $tabela_aviso ?>

</div>
<div class="col-12 col-md-9 mx-auto">
            


            <?= $tabela ?>
            
            </div>

    




  </tbody>
</table>
</div>
</section>
