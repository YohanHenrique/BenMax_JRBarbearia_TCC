
<div class="container mt-5 pt-5 mx-auto"><br/><br/>
            <form method="post" action="<?= base_url() ?>index.php/barbearia/cadastrar_produto" enctype="multipart/form-data" class="text-center border border-light p-5">
     
                <p class="h4">Adicionar novo Produto</p>
               Adicione um produto preenchendo suas informações nos campos abaixo e enviando.
                <div class="text-center mt-5">
           
</div>


<input type="" value="" type="text" class="form-control" name="nome" placeholder="Nome do Produto" required>

<input type="" type="text" class="form-control" name="preco" placeholder="Preço ex.'20,99'">

<textarea class="form-control pl-3 pt-3" name="descricao" id="exampleFormControlTextarea1" rows="6" placeholder="Escreva descrição do produto aqui..."></textarea>

                <input type="" value="<?php echo date('dmY_His');?>" name="titulo_img" id="titulo_img" placeholder="Titulo da imagem" class="form-control mb-4" />
                <input type="file" name="userfile" id="userfile" class="form-control mb-4" placeholder="Selecione uma imagem"/>
                <p> Somente imagens (de extensão .jpg/.png) são aceitas, caso a imagem demore a carregar continue aguardando, seu navegador pode demorar a atualizar coockies.</p>
                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Enviar</button>
            </form>
        </div>
       
    </div>
</div>