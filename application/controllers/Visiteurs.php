<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiteurs extends CI_Controller {

    // function to display the default visitor page
    public function index(){
        $header = "header.php"; // not necessary
        $footer = "footer";
        $this->load->view('frontend/inc/'.$header);
        $this->load->view('frontend/main');
        $this->load->view('frontend/inc/'.$footer);
    }

    public function administrateurs(){
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/administrateur/main');
        $this->load->view('backend/inc/'.$footer);

    }
    public function formateurs(){
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/formateur/main');
        $this->load->view('backend/inc/'.$footer);

    }




}

?>