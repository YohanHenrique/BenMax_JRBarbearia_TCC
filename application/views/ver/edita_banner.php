<section class="ftco-animate">
    <div class="container mt-5 pt-5"><br/><br/>
        <div class="row text-center">
            <div class="col-md-12 mx-auto text-center">
                <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
                  <h3 class="text-warning">Edite abaixo o'que será exibido no banner da pagina inicial do site.</h3>
                    <p class="h5 mt-5"><i class="fas fa-align-center amber-text"></i> Texto do Banner: </p>
                      <input type="" value="<?= isset($user) ? $user['titulo'] : '' ?>" type="text" maxlength="65" class="form-control text-center" name="titulo" placeholder="Texto do banner (max. 65 caracteres)">
                    <label class="h5 mt-3"><i class="fas fa-link amber-text"></i> Link do Texto: </label><br>
                    <select type="text" class="form-select" id="link" name="link"  required>
                      <option value=''> Escolha um link </option>
                      <option value='#serviço'> Serviços </option>
                      <option value='#galeria'> Galeria </option>
                      <option value='#contato'> Contato </option>
                      <option value='#avaliações'> Avaliações </option>
                      <option value='#contato'> Contato </option>
                      <option value='<?= base_url('index.php/page/blog') ?>'> Blog </option>
                      <option value='<?= base_url('index.php/login') ?>'> Login </option>
                      </select>
                  <p class="mt-5"> O texto será visto por todos assim que entrarem no WebSite.</p>
                  <button class="btn btn-info btn-block my-2" value="Salvar" type="submit"> Editar</button>
                  </form>
            </div>
        </div>
    </div>
</section>