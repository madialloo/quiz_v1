<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiteurs extends CI_Controller {

    // function to display the default visitor page
    public function index(){
        $header = "header.php"; // may not be necessary
        $footer = "footer";
        $this->load->view('frontend/inc/'.$header);
        $this->load->view('frontend/main');
        $this->load->view('frontend/inc/'.$footer);
    }


}

?>