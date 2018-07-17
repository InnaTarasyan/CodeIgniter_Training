<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helper extends CI_Controller
{
   function all_helpers(){
      $this->load->helper('html');
      $this->load->helper('text');
      $this->load->helper('string');

      $this->load->helper('captcha');

       $vals = array(
           'word'          => random_string('alpha_dash', 7),
           'img_path'      => './img/captcha/',
           'img_url'       =>  base_url().'img/captcha/',
//           'font_path'     => './path/to/fonts/texb.ttf',
           'font_path'     => 'C:\Users\Alexsandr\Desktop\codeigniter\texb.ttf',
           'img_width'     => '450',
           'img_height'    => 30,
           'expiration'    => 7200,
           'word_length'   => 8,
           'font_size'     => 16,
           'img_id'        => 'Imageid',
           'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

           // Белый фон и бодер, черный текст и красная сетка
           'colors'        => array(
               'background' => array(255, 255, 255),
               'border' => array(255, 255, 255),
               'text' => array(0, 0, 0),
               'grid' => array(255, 40, 40)
           )
       );

       $cap = create_captcha($vals);
       echo $cap['image'];

      $this->load->view('helpers_view');
   }
}