<div class="table-responsive container mt-5 pt-5"><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">N#</th>
      <th scope="col">Serviço</th>
      <th scope="col">Imagem</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col"><a href="<?= base_url('index.php/page/form_serv/'); ?>"><i class="far fa-plus-square text-info fa-2x ml-2" title="Adicionar Serviço"></i></a></th>
    </tr>
  </thead>
    <tbody>
        <?= $tabela_servicos ?>
  </tbody>
</table>
</div>


