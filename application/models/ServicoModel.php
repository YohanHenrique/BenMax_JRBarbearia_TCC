<?php
include_once APPPATH.'libraries/ServicoLib.php';
include_once APPPATH.'libraries/BlogLib.php';
class ServicoModel extends CI_Model{

     public function gera_tabela(){
        $html ='';

        $servicos = new ServicoLib();
        $data = $servicos->lista();

        foreach ($data as $serv) {

            
            $html .= '<tr>';
            $html .= '<td>'.$serv['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$serv['id']).'">'.$serv['nome'].'</p></td>';


            $arquivo = ('uploads/'.$serv['titulo_img'].'.jpg');

            if (file_exists($arquivo)) {

                $html .= '<td>';
                $html .= '<img src="';
            $html .= base_url('uploads/');
            $html .= $serv['titulo_img'];
            
            $html .= '.jpg" class="img-thumbnail" style="width: 80px">';

                $html .= '</td>';

            } else {
                $html .= '<td>Sem Imagem</td>';
            }



            $html .= '<td>'.$serv['detalhe'].'</td>';
            $html .= '<td>'.$serv['preco'].'</td>';
            $html .= '<td>'.$this->action_buttons($serv['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }

     public function gera_tabela_fazer(){
        $html ='';

        $servicos = new ServicoLib();
        $data = $servicos->lista();

        foreach ($data as $serv) {

            
            $html .= '<tr>';
            $html .= '<td>'.$serv['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$serv['id']).'">'.$serv['nome'].'</p></td>';


            $arquivo = ('uploads/'.$serv['titulo_img'].'.jpg');

            if (file_exists($arquivo)) {

                $html .= '<td>';
                $html .= '<img src="';
            $html .= base_url('uploads/');
            $html .= $serv['titulo_img'];
            
            $html .= '.jpg" class="img-thumbnail" style="width: 80px">';

                $html .= '</td>';

            } else {
                $html .= '<td>Sem Imagem</td>';
            }



            $html .= '<td>'.$serv['detalhe'].'</td>';
            $html .= '<td>'.$serv['preco'].'</td>';
            $html .= '<td>'.$this->action_buttonsf($serv['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }


     public function gera_tabela_serv(){
        $html ='';

        $servicos = new ServicoLib();
        $data = $servicos->lista();

        foreach ($data as $serv) {

       
            $html .= '<div class="view overlay ">';
            $html .= '<div class=" staff text-center">';
            $html .= '';
            $html .= $this->action_buttons($serv['id']);
            $html .= '<h3><span class="text-warning">'.$serv['nome'].'</span></h3>';
            $html .= '<p>'.$serv['detalhe'].'.</p>';
            $html .= '<h5 class="price text-white">R$: '.$serv['preco'].'</h5><br>';
            $html .= '<a href="';
            $html .= base_url('index.php/barbearia/ver_servico/');;
            $html .= $serv['id'];
            $html .= '"<p>Clique para saber mais...</p>';
            $html .= '<div class="mask flex-center rgba-black-light mt-1"><i class="far fa-eye text-white fa-4x"></i></div>';
            $html .= '  </a></div>
</div><br>';
            
            
        }
        return $html;
    }


    public function gera_tabela_feitosf(){
        $html ='';

        $servicos = new ServicoLib();
        $data = $servicos->lista_f();

        foreach ($data as $serv) {

            
            $html .= '<tr>';
            $html .= '<td>'.$serv['id'].'</td>';
            $html .= '<td class="text-warning">'.$serv['fnome'].'</td>';
            $html .= '<td>R$: '.$serv['fpreco'].'</td>';
            $html .= '<td class="text-warning">'.$serv['ffeitos'].'</td>';
            $html .= '<td>'.$serv['fdata'].'</td>';
            $html .= '<td>'.$this->action_buttons_feitosf($serv['id']).'</td>';
            $html .= '</tr>';   
        }
        return $html;
    }


    public function gera_tabela_galeria(){
        $html ='';

        $pessoa = new BlogLib();
        $data = $pessoa->lista_galeria();

        foreach ($data as $fotinha) {  
    

            $html .= '<div class="carousel-item text-center">';
            $html .= '<img class="z-depth-0" style="width: 350px" src="';
            
            $html .= base_url('uploads/');

            $html .= $fotinha['titulo_img'];
            $html .= '.jpg"  alt="Second slide">';
            $html .=  '</div>';
            

            
   
        }
        return $html;
    }



    private function action_buttons($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/page/editar_serv/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit amber-text mt-1 ml-2"></i></a>';
        $html .= '<a href="'.base_url('index.php/page/deleta_serv/'.$id).'">';
        $html .= '<i title="Deletando" class="fas fa-times-circle text-danger mt-1 ml-2"></i></a>';
        return $html;}
    }

    private function action_buttonsf($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/page/mandar_feito/'.$id).'">';
        $html .= '<i title="Editar" class="fas fa-plus text-success ml-4"></i></a>';
        return $html;}
    }

    private function action_buttons_feitosf($id){
        if($this->session->userdata('level')==='1'){
        $html = '<a href="'.base_url('index.php/page/deleta_registro/'.$id).'">';
        $html .= '<i title="Deletando" class="fas fa-times-circle text-danger mt-1 ml-2"></i></a>';
        return $html;}
    }

    public function cria_servico($serv, $data){
        if(sizeof($_POST) == 0) return;
        $data['imagens'] = $this->imagem->salva();
        $this->db->insert('servicos', $serv);
        redirect('page/servicos');
    }

    public function edita_servico($id){
        if(sizeof($_POST) == 0) return;
        $data['imagens'] = $this->imagem->salva();
        $data = $this->input->post();
        $servico = new ServicoLib();
        $servico->edita_servico($data, $id);
        redirect('page/servicos');
    }

    public function edita_servicof($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $servico = new ServicoLib();
        $servico->edita_servico($data, $id);
        header("Refresh: 0");
    }

    public function deleta_svc($id){
        $servicos= new ServicoLib();
        $servicos->deleta($id);
    }

    public function deleta_reg($id){
        $servicos= new ServicoLib();
        $servicos->deleta_r($id);
    }
    

    public function read($id){
        $servicos = new ServicoLib();
        return $servicos->service_data($id);
    }
    
}