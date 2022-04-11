<section class="ftco-animate">
<div class="container mt-5 pt-5 mx-auto"><br/><br/>
   
            <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5">
            
            <p class="h4 mb-4">Adicionar nova Informação</p>
               
            <p>Atualizar informações exibidas abaixo do banner nos campos abaixo:</p>
            
 
<input type="" value="<?= isset($user) ? $user['titulo'] : '' ?>" type="text" class="form-control" name="titulo" maxlength="30" placeholder="Titulo Informação (max. 30 caracteres)">

<input type="" value="<?= isset($user) ? $user['detalhes'] : '' ?>" type="text" class="form-control" name="detalhes" maxlength="40" placeholder="Detalhes da Informação (max. 40 caracteres)">

<label class="text-warning mt-3">Icone: </label><br>
                <select type="text" class="form-select" id="icone" name="icone"  required>
                <option value=''> Escolha um icone </option>
                <option value='<i class="fas fa-info-circle amber-text">'> Icone Info </option>
                <option value='<i class="fas fa-phone amber-text">'> Icone Telefone </option>
                <option value='<i class="fas fa-map-marked-alt amber-text">'> Icone Mapa </option>
                <option value='<i class="far fa-calendar-alt amber-text">'> Icone Calendario </option>
                <option value='<i class="fas fa-phone amber-text">'> Icone Telefone </option>
                <option value='<i class="fas fa-cut amber-text">'> Icone Tesoura </option>
                <option value='<i class="far fa-bell amber-text">'> Icone Sino </option>
                <option value='<i class="fas fa-star amber-text">'> Icone Estrela </option>
                <option value='<i class="fas fa-exclamation-circle amber-text">'> Icone Alerta </option>
                </select>

                <button class="btn btn-info btn-block my-4" value="Salvar" type="submit">Editar</button>
            </form>
        </div>
       
    </div>
</div>
</section>