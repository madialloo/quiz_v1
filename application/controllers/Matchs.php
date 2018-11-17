<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matchs extends CI_Controller {

    // function to display the default visitor page
    public function index(){
        $header = "header.php"; // not necessary
        $footer = "footer";
        $this->load->view('frontend/inc/'.$header);
        $this->load->view('frontend/matchs/main');
        $this->load->view('frontend/inc/'.$footer);
    }
}

?>