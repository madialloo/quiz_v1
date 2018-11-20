<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualites extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Actualites_model');
        $this->load->helper('directory'); //load directory helper
    }
    // function to display the default visitor page
    public function index(){
        // get the data 'actualites' from 'get_actualites' method of the model 
        $result = $this->Actualites_model->get_actualites();
        $data['acts'] = $result->result_array();
        // print_r($data['acts']);
        $this->load->view('frontend/actualites/inc/header');
        $this->load->view('frontend/actualites/home',$data);
        $this->load->view('frontend/actualites/inc/footer');
    }
    public function upload(){
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */

    }
              

}

?>