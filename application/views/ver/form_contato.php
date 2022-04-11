<form method="POST" action="salva_mensagem.php">
    Nome: <input type="text" name="nome" placeholder="Nome Completo" required><br/><br/>    
    E-mail: <input type="email" name="email" placeholder="Seu melhor e-mail" required><br/><br/>
    Assunto: <input type="text" name="assunto" placeholder="Assunto do contato" required><br/><br/>
    Mensagem: <textarea name="mensagem"></textarea><br/><br/>   
    <input type="submit" value="Enviar">
</form>
<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d392.3058695548949!2d-46.56039142371128!3d-23.431014980218325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef45c1719f61f%3A0xee541fd8c01ee3b8!2sJr%20Barbearia!5e1!3m2!1spt-BR!2sbr!4v1568412965685!5m2!1spt-BR!2sbr" width="600" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Compromissos</h3>
	    			<form method="POST" action="salva_mensagem.php">
	    				<div class="d-md-flex">
		    				<div class="form-group">
							<input type="text" class="form-control" name="nome" maxlength="200" placeholder="Nome Completo" required>
		    				</div>
		    				<div class="form-group ml-md-4">
							<input type="email" name="email" maxlength="256" placeholder="Seu e-mail" required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		        <div class="icon"><span class="ion-md-calendar"></span></div>
		            		        <input type="text" name="assunto" maxlength="100" placeholder="Assunto do contato (Até 100 caracteres)" required>
	            		         </div>
		    		        </div>
	    				</div>
	    				<div class="form-group">
						  <textarea name="mensagem" cols="30" rows="3" class="form-control" maxlength="300" placeholder="Ditie sua Mensagem (Até 300 caracteres)"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Marcar" class="btn btn-primary py-3 px-4">
                        </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>