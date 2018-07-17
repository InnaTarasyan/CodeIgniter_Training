<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model
{
   public $add_rules = array(
       array(
          'field' => 'title',
          'label' => 'Название Статьи',
          'rules' => 'required|xss_clean|min_length[5]|max_length[50]|trim'
       ),
       array(
           'field' => 'text',
           'label' => 'Текст Статьи',
           'rules' => 'required|xss_clean|max_length[2000]|trim'
       ),
//       array(
//           'field' => 'date',
//           'label' => 'Дата Статьи',
//           'rules' => 'required|xss_clean|exact_length[10]|trim'
//       )
   );
}