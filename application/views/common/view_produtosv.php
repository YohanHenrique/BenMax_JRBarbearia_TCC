
<section class="ftco-section" id="produtos" >


<div class="container">
    <div class="row justify-content-center mb-0 pb-0">
  <div class="col-md-7 heading-section ftco-animate text-center">
   <?php if($this->session->userdata('level')==='1'){
echo ' <a href="';
echo base_url('index.php/barbearia/cadastrar_produto');
echo '">    <h2 class="text-info"> Adicionar produto <i class="far fa-plus-square"></i></h2>
    </a>';
}else{}?>
   
    
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
