<?php
include_once APPPATH.'controllers/Login.php';
$arquivo = ('uploads/'.$user['titulo_img'].'.jpg');
?>

<section class="ftco-animate">
    <div class="container mt-5 pt-3"><br/><br/>
        <div class="row text-center">

            <div class="col-md-12 col-12 mx-auto text-center">
            
            <div class="text-center mt-5">
                <a href="<?= base_url('#serviço'); ?>">  <i class="fas fa-long-arrow-alt-left fa-3x"></i></a>
                    <br>
                <form method="post" enctype="multipart/form-data" class="text-center border border-light p-5 mt-3">

    <div class="col-12 text-center mt-5">
    <span>Deseja <?= isset($user) ? $user['nome'] : '' ?>? Venha para  <a href="<?= base_url('index.php/barbearia/#contato') ?>">nosso estabelecimento.</a><span>
    <br>
    </div>

    <div class="col-12 text-center mt-5">
    <?php
                if (file_exists($arquivo)) {

            
                    echo '<img src="';
                echo base_url('uploads/');
                echo $user['titulo_img'];
                
                echo '.jpg" class="img-fluid" style="width: 200px">';
                

                } else {
                echo	'<a href=""><img src="';
                echo base_url('assets/img/jr_logo.png');
                echo '"
    class="img-fluid"  title="Temos Experiencia no Serviço " alt="Certificado Qualidade"  style="width: 200px"></a>';
                }
            

                ?>





    
        </div>
    <div class="col-md-12 mt-5 mx-auto ftco-animate">
                        <div class="text-center">
                            <div class="text">
                                <h2><strong class="text-warning"><?= isset($user) ? $user['nome'] : '' ?></strong></h2>
                                <p><?= isset($user) ? $user['detalhe'] : '' ?></p>						
                                <h5>R$: <?= isset($user) ? $user['preco'] : '' ?></h5>

                            </div>
                        </div>
                    </div>
    <?php if($this->session->userdata('level')==='1'){
    echo '<h5>';
    echo '<a class="text-danger mr-2" href="';
    echo base_url('index.php/page/deleta_serv/');
    echo isset($user) ? $user['id'] : '' ;
    echo '">
    <i title="Deletar" class="fas fa-times-circle text-danger"></i> Deletar Serviço</a>';
    echo '<a class="text-info ml-2" href="';
    echo base_url('index.php/page/editar_serv/');
    echo isset($user) ? $user['id'] : '' ;
    echo '">
    <i title="Deletar" class="fas fa-edit text-info"></i> Editar Serviço</a>
    </h5>';
    }
    ?>
    <h5 class="mt-5">
    <a href="https://api.whatsapp.com/send?phone=555511980239587&text=Oi%20Junior%2C%20estou%20interessado%20em%3A%20
    <?= isset($user) ? $user['nome'] : '' ?>%20%2Cquando%20eu%20posso%20ir%20a%20JR%20%3F">
    <button type="button" class="btn-outline-warning btn-rounded waves-effect px-5 py-2">
    Marcar um horario <i class="fab fa-whatsapp text-success"></i></h5></button></a>

                </div>
            </div>   
        </form>
    </div>
</div> 
</section>