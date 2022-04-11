<div class="container mt-5 pt-5">
    <div class="row pt-4 mt-4">
        <div class="col-lg-8 mx-auto border border-warning mt-2">
        <h1 class="mr-2 text-center mt-5"> <a href="#"> Editar Usuário: <strong class="text-warning"><?= $user['nome'];?></strong></a></h1>
        <?php 
if($this->session->userdata('level')==='1'){
  echo '
<p class="text-center">Atualize o nivel do usuario no campo abaixo e clique em Salvar.</p>';
            echo '<div class="container text-center mx-auto"><img 
             src="';
             echo base_url();
             echo 'uploads/';
             echo $user['titulo_img'];
             echo '.jpg" 
            class="img-fluid" style="width: 250px;"></div>';
}

         if($this->session->userdata('id')===$user['id']){
           
           echo '
        <div class="container"><br/><br/>
    <div class="row text-center"><div class="container text-center">';
            echo '<p>Atualize as informações sobre você nos campos abaixo</p>';
            echo '</div>';
            echo ' <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5"><!-- Post não precisa ser maiúsculo (pode ser post ou POST) -->
            
 



                <p class="h4 mb-4">Adicionar nova Foto de Perfil</p>
               
                <div class="text-center">
          
            <img 
             src="';
             echo base_url(); 
             echo 'uploads/';
             echo isset($user) ? $user['titulo_img'] : '' ;
             echo '.jpg" 
            class="img-fluid ">
           
</div>';

            echo '<input type="hidden" value="';
            echo isset($user) ? $user['id'] : '' ;
            echo '_img" name="titulo_img" id="titulo_img" class="form-control mb-4" />
                <input type="file" name="userfile" id="userfile" class="form-control mb-4" placeholder="Selecione uma imagem"/>
                <p> Somente imagens (jpg/png) são aceitas, caso a imagem demore a carregar após apertar em enviar continue aguardando, seu navegador pode demorar a atualizar coockies.</p>
                <button class="btn btn-info btn-block my-4" type="submit">Enviar</button>
            </form> </div>
       
    </div>
    <form  method="POST" class="w-100" >

    <label class="pt-2"> Nome: </label><br>
    <input value="';
     echo isset($user) ? $user['nome'] : '' ;
     echo '" type="text" class="w-100" id="nome" name="nome" size="35" maxlength="60"  placeholder="Digite seu nome completo" required><br><br>';
    echo '<label>E-mail: </label><br>';
    echo '<input value="';
    echo isset($user) ? $user['email'] : '' ;
    echo '" type="email" class="w-100" id="email" name="email" size="35" maxlength="60" placeholder="Digite um e-mail válido" required><br><br>';
    
        echo '<label>Senha: </label><br>';
        echo '<input value="';
        echo '" type="password" class="w-100" id="senha" name="senha" size="35" maxlength="60" placeholder="Digite a sua senha aqui" required><br><br>';
        echo '

    <label>Telefone: </label><br>
    <input value="';
    echo isset($user) ? $user['telefone'] : '' ;
    echo '" type="text" class="w-100" id="telefone" name="telefone" size="35" maxlength="12" placeholder="Digite um numero de celular" required><br><br>';
    }
    
        ?>
        <div class="col-md-11 mx-auto mt-3 text-center">
           
       

           
                <?php
                  if($this->session->userdata('level')==='1'){
                    echo '
                    <form  method="POST" class="w-100" >';
                    
                   echo ' <label>Nível: </label><br>
                <select type="text" class="form-select" id="nivel" name="nivel"  required>
                <option value=""> Selecione o Nivel </option>
                <option value="1"> Administrador </option>
                <option value="3"> Sub-Administrador </option>
                <option value="2"> Cliente </option>
                <option value="0"> Banido </option>';
                  }
                  ?>
                    </div>
                </select>
                <div class="mx-auto text-center">
                    <input type="submit" class="btn btn-blue px-4 py-3 mt-4 text-center" value="Salvar">
                </div><br>
            </form>
        </div>    
    </div>
</div>
<br>