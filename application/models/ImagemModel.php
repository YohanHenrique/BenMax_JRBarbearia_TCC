<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImagemModel extends CI_Model{
    public function salva(){
        $img_name = $this->input->post('titulo_img');
        
         $config['upload_path']          = './uploads/';
         $config['allowed_types']        = 'jpg|png';
         $config['max_size']             = 4096;
         $config['file_name']           = $img_name.'.jpg';
         $config['overwrite']           = true;  
        $this->load->library('upload', $config);

        $this->upload->do_upload('userfile');

       
        return $this->image_card('.jpg');

    }

    private function image_card($img){
       $html = '<div class="card">
            <img class="card-img-top img-thumbnails" src="'.base_url('uploads/'.$img).'">
        </div>';
        return $html;
    }

    public function lista(){
    }
}