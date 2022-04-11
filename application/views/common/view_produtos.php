
<section class="ftco-section ftco-bg-dark" id="produtos" >


    	<div class="container">
    		<div class="row justify-content-center mb-0 pb-0">
          <div class="col-md-7 heading-section ftco-animate mt-5 text-center">
            <h2 class="mb-4">Nossa Loja</h2>
           <?php if($this->session->userdata('level')==='1'){
echo ' <a href="';
echo base_url('index.php/barbearia/cadastrar_produto');
echo '">    <h2 class="text-info"> Adicionar produto <i class="far fa-plus-square"></i></h2>
            </a>';
}else{}?>
           
            
            <p class="flip"><i class="fas fa-angle-left amber-text mr-2"></i><i class="fas fa-cut amber-text"></i><i class="fas fa-angle-right amber-text ml-2"></i></p>
            <p class="mt-0">Confira aqui alguns dos produtos que são vendidos na loja para que você possa cuidar do seu visual sem gastar muito.</p>
          </div>
        </div>
    		<div class="row ftco-animate">
  <thead>
  </thead>
    <tbody>
        <?= $ver_produtos ?>
  </tbody>
</table>
</div>
</div>
</section>
