<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formateurs extends CI_Controller {

    // function to display the default visitor page
    public function formateurs(){
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/formateurs/main');
        $this->load->view('backend/inc/'.$footer);

    }




}

?>