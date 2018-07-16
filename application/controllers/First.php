<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

    public function index()
    {
        $this->load->view('hello_view');
    }

    function about($id){
        $data = [
            'name' => 'Sasha',
            'surname' => 'Tarasyan'
        ];
        $this->load->view('about_view', $data);

        if($id == 12){
            echo "Параметер";
        }
    }

    function articles(){

        $this->load->library("pagination");
        $this->load->model('articles_model');

        $config["base_url"] = base_url()."index.php/first/articles";
        $config["total_rows"] = $this->articles_model->count_posts();
        $config["per_page"] = 2;

        $config["full_tag_open"] = '<p style="text-align: center; color: red;">';
        $config["full_tag_close"] = '</p>';

        $this->pagination->initialize($config);


        // number 3 shows the index of url segment, in our case that is 3
        $data['articles'] = $this->articles_model->get_articles($config["per_page"], $this->uri->segment(3));
        $data["pagination"] = $this->pagination->create_links();

        $this->load->view('articles_view', $data);
    }

    function add_article(){

        $data['title'] = 'Fifth Article';
        $data['text'] = 'An article is a word that is used with a noun to specify grammatical definiteness of the noun, and in some languages extending to volume or numerical scope.';
        $data['date'] = '2018-07-20';

        $this->load->model('articles_model');
        $this->articles_model->add_article($data);

    }

    function edit_article(){

        $data['title'] = 'Edit Fifth Article';
        $data['text'] = 'An article is a word that is used with a noun to specify grammatical definiteness of the noun, and in some languages extending to volume or numerical scope.';
        $data['date'] = '2018-08-08';

        $this->load->model('articles_model');
        $this->articles_model->edit_article($data);
    }

    function delete_article($id){
        $this->load->model('articles_model');
        $this->articles_model->delete_article($id);
    }
}
