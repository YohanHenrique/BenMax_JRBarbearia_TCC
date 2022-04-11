<section>

<div class="hero-wrap" style="background-image: url('<?= base_url('assets/images/barbearia2.jpg'); ?>');'" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Galeria <i class="fas fa-images"></i></h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url(); ?>">Home</a></span> <span>Galeria</span></p>
	          </div>
	        </div>
	      </div>
	    </div>
	    <section class="ftco-gallery">
	    	<div class="container">
	    		<div class="row justify-content-center mb-5 pb-3">
                  <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nossa Galeria</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">
<p>Veja abaixo alguns de nossos trabalhos, o nosso ambiente de trabalho entre outras imagens relacionadas a JR Barbearia..</p>
                  </div>
                </div>
	    	</div>


<div class="container text-center ftco-animate">

   
</strong></h1>
<p></p>

<h3>
<?php
if($this->session->userdata('level')==='1'){
echo '<a class="text-info" href="enviar_foto"><i class="far fa-plus-square"></i> Enviar nova foto</a>
   ';
}
elseif($this->session->userdata('level')==='3'){
echo '<a class="text-info" href="enviar_foto"><i class="far fa-plus-square"></i> Enviar nova foto</a>
   ';
}

else{}
?>
</h3>
<br>

<div class="row">
<table class="table">
  <thead>
  
  
    </div>
  </thead>
    <tbody>


        <div class="row justify-content-center">
    <div class="col-md-12 mt-3">
        <div class="row">

        <?= $tabela_galeria ?>
        

    <br></div>
</div>
   <script>

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
    </div>

  </div>
</div>
        </div>
</div>
 


</div>

  </tbody>
</table>
</div>
</section>
