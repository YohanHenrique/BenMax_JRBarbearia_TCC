<div class="container col-5 mt-5 pt-5 xl-auto">
<h2 class="text-center mt-5 pt-3">Criar Serviço</h2>
<p>Crie um serviço preenchendo os campos abaixo e clicando em enviar.</p>
<form method="post" action="<?= base_url() ?>index.php/page/cadastrar_servico" enctype="multipart/form-data" class="text-center border border-light p-5 mt-2">
            
            <input type="" value="" type="text" class="form-control" name="nome" placeholder="Nome do serviço" required>
            <input type="" value="" type="text" class="form-control" name="detalhe" placeholder="Detalhes do serviço" required>
            <input type="number" value="" type="text" name="preco" class="form-control" placeholder="Preço do serviço (exemplo: 19,99)" required>
            <input type="hidden" value="0" type="text" name="feito" class="form-control" placeholder="feitos" required>
          
                      <input type="hidden" value="<?php echo date('dmY_His');?>" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
                      <p class="mt-5">Selecione uma imagem <span>se desejar: </span></p>
                      <input type="file" name="userfile" id="userfile" class="form-control" placeholder="Selecione uma imagem"/>
                      <button class="btn btn-primary btn-md mt-4" value="Salvar" type="submit">Enviar</button>
                  </form>

</div>
