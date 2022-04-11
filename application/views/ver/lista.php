<!--   Sem uso no momento    -->

<div class="container">
        <div class="row pt-5 mx-auto text-center">
        <h1 class="mr-5 pt-5"> <a href="#"> Seus clientes </a></h1>
        <div class="col-md-12">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Nivel</th>
                    <th></th>
                    <th></th>
                </tr>
            <?php 
                $html = '';
                foreach($usuarios as $usu) {
                    $html = '<tr>';
                    $html .= '<td>'.$usu[0]->idUsuario.'</td>';
                    $html .= '<td>'.$usu[0]->nome.'</td>';
                    $html .= '<td>'.$usu[0]->email.'</td>';
                    $html .= '<td>'.$usu[0]->telefone.'</td>';
                    $html .= '<td><a class="btn btn-primary" href=">'.base_url('usuario/atualizar/'.$usu->idUsuario).'<" /a></td>';
                    $html .= '<td><a class="btn btn-primary" href=">'.base_url('usuario/excluir/'.$usu->idUsuario).'<" /a></td>';
                    $html .= "</tr>";
                }
                return $html;
            ?>
            </table>
        </div>
   </div>
</div>