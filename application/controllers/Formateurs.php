<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formateurs extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Formateurs_model');
            // check if the 
            if($this->session->userdata('logged_in') !== TRUE){
              redirect('formateurs/index');
            }
        }

        // display the default formateur page
        public function index(){
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/inc/'.$header);
            $this->load->view('backend/formateurs/main');
            $this->load->view('backend/inc/'.$footer);
        }

        // function to display the default control  page
        public function home(){
            $this->load->view('backend/formateurs/home');
        }

        // function to display the logged in admin info
        public function display_Fuser(){
            $cpt_pseudo = $this->session->userdata('cpt_pseudo');
            $result = $this->Formateurs_model->get_Fuser($cpt_pseudo);
            $data['users']  = $result->result_array();
            // print the data to see if it contain the expected result
            // print_r($data['users']);
            $this->load->view('backend/formateurs/display_Fuser',$data);
        }

        // function to display all admins info
        public function display_Fusers(){
            $cpt_type = "Formateur";
            $result = $this->Formateurs_model->get_Fusers($cpt_type);
            $data['users']  = $result->result_array();
            // print the data to see if it contain the expected result
            //  print_r($data['users']);
            $this->load->view('backend/formateurs/display_Fusers',$data);
        }

       // load the view that creates a new formateur
        public function create_user() {
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/inc/'.$header);
            $this->load->view('backend/administrateurs/create_Fuser');
            $this->load->view('backend/inc/'.$footer);
        }

        // creating a userFormateur -> to Model Comptes
        public function getFormateurs(){
        // if the button having name 'save_formateur' is selected
        if($this->input->post('save_formateur')){
            // make and array of data from the form 'create_formateur'
                $CPT_PSEUDO  = $this->input->post('CPT_PSEUDO');
                $CPT_MOTDEPASSE  = hash('sha256',$this->input->post('CPT_MOTDEPASSE'));
                $CPT_CONFMOTDEPASSE  = hash('sha256',$this->input->post('CPT_CONFMOTDEPASSE'));
                // check the matching of the passwords : if KO reload the form + display error
                if($CPT_MOTDEPASSE != $CPT_CONFMOTDEPASSE){
                    $data['error'] = "Mot de passe non identiques.";
                    $this->load->view('backend/formateurs/create_formateur',@$data);
                }
                $CPT_NOM  = $this->input->post('CPT_NOM');
                $CPT_PRENOM  = $this->input->post('CPT_PRENOM');
                $CPT_TYPE  = $this->input->post('CPT_TYPE');
                $CPT_ACTIF  = $this->input->post('CPT_ACTIF');
                $data = $data = array($CPT_PSEUDO,$CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM,$CPT_TYPE,$CPT_ACTIF);
            // select * from t_compte_cpt where cpt_pseudo == input cpt_pseudo
            $que=$this->db->query("select * from t_compte_cpt where cpt_pseudo=$CPT_PSEUDO");
            // get the number of rows found by the previous query
            $row = $que->num_rows();
            // if $row > 0 then send an error message , else...
            if(count($row)>0){
                $data['error']="<h3 style='color:red'>CPT_PSEUDO  already exists</h3>";
            } else {
                // send data array to the model
                $this->Comptes->createFormateur($data);
                // display successfull message ? 
                $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
                // load the confirmation view with the entered data
                $this->load->view('backend/formateurs/create_formateur',@$data);	
            }
        }
                   
        }
}