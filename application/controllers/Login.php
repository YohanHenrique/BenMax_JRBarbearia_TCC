<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('LoginModel');
  }
  function index(){
    $this->load->view('template/header');
    $this->load->view('template/navbar');
      $this->load->view('ver/login_view');
    $this->load->view('template/footer');
    $this->load->view('template/rodape');
  }

  function auth(){$this->load->view('template/header');

    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->LoginModel->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id_cli  = $data['id'];
        $name  = $data['nome'];
        $titulo_img  = $data['titulo_img'];
        $email = $data['email'];
        $level = $data['nivel'];
        $sesdata = array(
            'username'  => $name,
            'titulo_img'  => $titulo_img,
            'email'     => $email,
            'level'     => $level,
            'id'        => $id_cli,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // accesso login do admin
        if($level === '1'){
            redirect('page/');

        // accesso login do cliente
        }elseif($level === '2'){
            redirect('barbearia');

        // accesso login do ajudante
        }elseif($level === '3'){
            redirect('page/sub_administrador');
        
        // usuario banido  
          }elseif($level === '0'){
            echo '<div class="container text-center mt-5 pt-5">
            <br><br>VOCE ESTA BANIDO ';
            echo $name;
            echo '<br><br>
            <img src="https://i.ytimg.com/vi/DP7S7pzoOAg/hqdefault.jpg">';
      }

    }else{
        echo $this->session->set_flashdata('msg','O Email ou Senha estão Incorretos.');
        redirect('login');
    }
  }

  function logout(){
      
    $this->session->sess_destroy();
    

    $this->load->view('template/header');  
    $this->load->view('template/navbar');

    $this->load->view('ver/ate_breve');
    
      header("refresh: 3;../login/");

		$this->load->view('template/footer');
		$this->load->view('template/rodape');
      
  }


}
