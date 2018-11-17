<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs extends CI_Controller {

    // function to display the default visitor page
    public function index(){
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/administrateurs/main');
        $this->load->view('backend/inc/'.$footer);

    }
    public function formateurs(){
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/formateur/main');
        $this->load->view('backend/inc/'.$footer);

    }




}

?>