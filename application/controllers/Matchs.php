<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matchs extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Matchs_model');
    }
    // function to display the default visitor page
    public function all_matchs(){
        $this->load->view('frontend/matchs/inc/header');
        $this->load->view('frontend/matchs/home');
        $this->load->view('frontend/matchs/inc/footer');
    }
    // function to get result from 'matchs_model' and display it info
    public function display_match(){
            $mat_code = $this->input->post('mat_code');
            $result_match = $this->Matchs_model->get_match($mat_code);
            $data['matchs']  = $result_match->result_array();
            // print the data to see if it contain the expected result
            print_r($data['matchs']);
            // get the number of rows found by the previous query
            $row = $result_match->num_rows();
            // if $row > 1 then send an error message , else...
            if(count($row) > 0){
                $data['error']="<h3 style='color:red'>MAT_CODE doesn't exists</h3>";
                $this->load->view('frontend/actualites/inc/header');
                $this->load->view('frontend/actualites/home',@$data);
                $this->load->view('frontend/actualites/inc/footer');
            } else {                                
                $data['error']="<h3 style='color:red'>MAT_CODE doesn't exists</h3>";
                $this->load->view('frontend/actualites/inc/header');
                $this->load->view('frontend/actualites/home',@$data);
                $this->load->view('frontend/actualites/inc/footer');
                }

                $cpt_pseudo    = $this->input->post('CPT_PSEUDO',TRUE);
                // hash the password end compare it to the one retrieve by Comptes 'model'
                $cpt_motdepasse = hash('sha256',$this->input->post('CPT_MOTDEPASSE',TRUE)); 
                $validate = $this->Comptes->validateCompte($cpt_pseudo,$cpt_motdepasse);
                
                if($validate->num_rows() > 0){
            }
    }        

    public function afficher_match($code){
        $result_match = $this->Matchs_model->get_match($code);
        $data['matchs']  = $result_match->result_array();
        // print the data to see if it contain the expected result
        print_r($data['matchs']);
        // get the number of rows found by the previous query
        $row = $data['matchs']->num_row();
        // if $row > 1 then send an error message , else...
        if(count($row) > 0){
            $data['error']="<h3 style='color:red'>MAT_CODE doesn't exists</h3>";
            $this->load->view('frontend/actualites/inc/header');
            $this->load->view('frontend/actualites/home',@$data);
            $this->load->view('frontend/actualites/inc/footer');
        } else {                                
            $data['error']="<h3 style='color:red'>MAT_CODE doesn't exists</h3>";
            $this->load->view('frontend/actualites/inc/header');
            $this->load->view('frontend/actualites/home',@$data);
            $this->load->view('frontend/actualites/inc/footer');
            }

            $cpt_pseudo    = $this->input->post('CPT_PSEUDO',TRUE);
            // hash the password end compare it to the one retrieve by Comptes 'model'
            $cpt_motdepasse = hash('sha256',$this->input->post('CPT_MOTDEPASSE',TRUE)); 
            $validate = $this->Comptes->validateCompte($cpt_pseudo,$cpt_motdepasse);
            
}     
