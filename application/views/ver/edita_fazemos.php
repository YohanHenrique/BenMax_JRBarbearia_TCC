<section class="ftco-animate">
<div class="container mt-5 pt-5 mx-auto"><br/><br/>

            <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
 
            <p class="h4">Editar Icone de Serviço</p>
               <p>Atualizar informações exibidas nos serviços que são feitos nos campos abaixo:</p>


  <input type="" value="<?= isset($user) ? $user['titulo'] : '' ?>" type="text" class="form-control" name="titulo" maxlength="45" placeholder="Nome do Serviço (max. 45 caracteres)">

  <input type="" value="<?= isset($user) ? $user['detalhes'] : '' ?>" type="text" class="form-control" name="detalhes" maxlength="100" placeholder="Detalhes do Serviço (max. 100 caracteres)">

  <label class="text-warning">Icone: </label><br>
                  <select type="text" class="form-select" id="icone" name="icone"  required>
                  <option value=''> Selecione um icone </option>
                  <option value='<i class="fab fa-jenkins amber-text fa-3x animated pulse infinite">'> Icone Homem de Bigode </option>
                  <option value='<i class="fab fa-keybase amber-text fa-3x animated pulse infinite">'> Icone Criança </option>
                  <option value='<i class="fas fa-mortar-pestle amber-text fa-3x animated pulse infinite">'> Icone Mistura </option>
                  <option value='<i class="fas fa-spray-can amber-text fa-3x animated pulse infinite">'> Icone Spray </option>
                  <option value='<i class="fas fa-info-circle amber-text fa-3x animated pulse infinite">'> Icone Info </option>
                  <option value='<i class="fas fa-grin-beam amber-text fa-3x animated pulse infinite">'> Icone Sorrindo </option>
                  <option value='<i class="fas fa-heart amber-text fa-3x animated pulse infinite">'> Icone Coração </option>
                  <option value='<i class="fas fa-cut amber-text fa-3x animated pulse infinite">'> Icone Tesoura </option>
                  <option value='<i class="fas fa-bell amber-text fa-3x animated pulse infinite">'> Icone Sino </option>
                  <option value='<i class="fas fa-exclamation-circle amber-text fa-3x animated pulse infinite">'> Icone Alerta </option>
                  </select>
                  <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Editar</button>
            </form>
        </div>
       
    </div>
</div>
</section>