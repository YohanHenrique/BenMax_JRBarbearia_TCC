<div class="container">
    		<div class="row col-12 mx-auto justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-12 col-md-12 mx-auto heading-section text-center ftco-animate">
            <h2 class="mb-4">Serviços &amp; Preços</h2>
            <p class="flip"><i class="fas fa-angle-left mr-2"></i><i class="fas fa-cut amber-text"></i><i class="fas fa-angle-right ml-2"></i></p>
            

            <?php if($this->session->userdata('level')==='1'){
echo ' <h3><a href="';
echo base_url('index.php/page/form_serv');
echo '">  Adicionar serviço <i class="far fa-plus-square text-info"></i></a></h3>';
}else{}?>
            
          
            
            <p class="mt-5">Serviços exclusivamente para o público masculino.</p>
         
</div> </div>
        </div>
<table>
  <thead>
    <tr>
      
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
    <tbody class="">
    <div class="container ftco-animate mx-auto">
        <?= $tabela ?>
        </div>
  </tbody>
</table>
<!-- Icone de divisão
<div class="col-md-12  heading-section ftco-animate text-center">         
<p class="flip mt-3"><i class="fas fa-angle-left mr-2"></i><i class="fas fa-cut amber-text"></i><i class="fas fa-angle-right ml-2"></i></p>
</div>
-->
