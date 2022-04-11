<?php
include_once APPPATH.'libraries/Usuario.php';
class UserModel extends CI_Model{
    
	public function logar($email, $senha){
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("usuario")->row_array();
		return $usuario;
	}	
    
     public function gera_tabela(){
        $html ='';

        $pessoa = new Usuario();
        $data = $pessoa->lista();

        foreach ($data as $cliente) {
            $html .= '<tr>';
            $html .= '<td>'.$cliente['id'].'</td>';
            $html .= '<td><p href="'.base_url('index.php/cliente/detalhe/'.$cliente['id']).'">'.$cliente['nome'].'</p></td>';
            $html .= '<td><img class="img-thumbnail"
            style="width: 50px" ';
            $html .= 'src="';
            $html .= base_url('');
            $html .= 'uploads/'.$cliente['titulo_img'].'.jpg"';
            
            
            $html .=' alt="Imagem User"></td>';
            $html .= '<td>'.$cliente['email'].'</td>';
            $html .= '<td>'.$cliente['telefone'].'</td>';
            $html .= '<td>'.$cliente['nivel'].'</td>';

            if($cliente['nivel'] > 0){
            $html .= '<td>'.$this->action_buttons($cliente['id']).'</td>';
            }else{
                $html .= '<td>'.$this->action_buttons_ban($cliente['id']).'</td>';
            }

            $html .= '</tr>';   
        }
        return $html;
    }
    
     

    private function action_buttons($id){
        $html = '<a href="'.base_url('index.php/page/editar/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit text-warning mr-2"></i></i></a>';
        $html .= '<a href="'.base_url('index.php/page/deletar/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger"></i></i></a>';
        $html .= '<a href="'.base_url('index.php/page/gerenciar_usu/'.$id).'">';
        $html .= '<i title="Banir" class="fas fa-ban text-danger ml-2"></i></i></a>';
        return $html;
    }

    private function action_buttons_ban($id){
        $html = '<a href="'.base_url('index.php/page/editar/'.$id).'">';
        $html .= '<i title="Editar" class="far fa-edit text-warning mr-2"></i></i></a>';
        $html .= '<a href="'.base_url('index.php/page/deletar/'.$id).'">';
        $html .= '<i title="Deletar" class="fas fa-times-circle text-danger"></i></i></a>';
        $html .= '<a href="'.base_url('index.php/page/gerenciar_usu/'.$id).'">';
        $html .= '<i title="Desbanir" class="far fa-check-circle text-success ml-2"></i></i></a>';
        return $html;
    }

    
    public function deletar($id){
        $pessoa = new Usuario();
        $pessoa->delete($id);
    }

    
    public function edita_usuario($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $pessoa = new Usuario();
        $data['senha'] = md5($this->input->post('senha'));
        $pessoa->edita_usuario($data, $id);
        redirect('page/lista');
    }
    
    
    public function edita_perfil($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $pessoa = new Usuario();
        $data['senha'] = md5($this->input->post('senha'));
        $pessoa->edita_perfil($data, $id);
        redirect('../');
    }

    public function edita_perm($id){
        if(sizeof($_POST) == 0) return;
        $data = $this->input->post();
        $pessoa = new Usuario();
        $pessoa->edita_perm($data, $id);
        redirect('page/lista');
    }
    
    public function read($id){
        $pessoa = new Usuario();
        return $pessoa->user_data($id);
    }
    
}