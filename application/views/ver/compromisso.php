<section class="ftco-appointment" id="contato">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d457.60185838545095!2d-46.56054362334823!3d-23.431053925356085!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee541fd8c01ee3b8!2sJr%20Barbearia!5e0!3m2!1spt-BR!2sbr!4v1575431780962!5m2!1spt-BR!2sbr" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Mande sua Mensagem</h3>
	    			<form method="POST" action="<?= base_url('index.php/page/cadastrar_mensagem'); ?>">
	    				<div class="d-md-flex">
		    				<div class="form-group">
							<input type="text" class="form-control" name="nome" placeholder="Nome Completo" maxlength="100" required>
		    				</div>
		    				<div class="form-group ml-md-4">
							<input type="email" class="form-control" name="email" placeholder="Seu e-mail" min="10" maxlength="200" required>
		    				</div>
	    				</div>
		    				<div class="form-group ml-md-12">
							<input type="text" class="form-control" name="assunto" placeholder="Assunto do contato" maxlength="150" required>
		    				</div>
	    				

	    				<div class="form-group">
						<textarea name="mensagem" cols="30" rows="5" class="form-control" placeholder="Digite sua Mensagem.. (Max. 300 carácteres)" maxlength="300" required ></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-primary py-3 px-4">
						</div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>