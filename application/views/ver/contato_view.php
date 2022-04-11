<div class="hero-wrap" style="background-image: url('<?= base_url('assets/images/barbearia8.jpg'); ?>');" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contate-Nos</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contate-nos</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
						<div class="col-md-4 contact-info ftco-animate">
							<div class="row">
								<div class="col-md-12 mb-4">
		              <h2 class="h4">Informação de Contato</h2>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Endereço:</span> <a href="https://goo.gl/maps/QZHjHkpbA1RyvmcG8">R. Glauco Antônio Galli, 620 - Jardim Palmira, Guarulhos - SP</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Telefone:</span> <a href="https://wa.me/5511980239587">+55 (11) 98023-9587</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Dono da JR:</span> <a href="https://wa.me/5511980239587">Junior de Macedo</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Desenvolvedora do site:</span> <a href="https://www.facebook.com/BenMax-104183664309041/">BenMax</a></p>
		            </div>
							</div>
						</div>
						<div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
			<form method="POST" action="<?= base_url('index.php/page/cadastrar_mensagem'); ?>">
              	<div class="row">
              		<div class="col-md-6">
		                <div class="form-group">
						<input type="text" class="form-control" name="nome" placeholder="Nome Completo" maxlength="100" required />		               
                        </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Seu e-mail" maxlength="200" required>
		                </div>
		                </div>
                </div>
                <div class="form-group">
				<input type="text" class="form-control" name="assunto" placeholder="Assunto do contato (max. 150 caracteres)" maxlength="150" required>
                </div>
                <div class="form-group">
				<textarea name="mensagem" cols="30" rows="4" class="form-control" placeholder="Mensagem (max. 300 caracteres)" maxlength="300" required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <div id="map"></div>