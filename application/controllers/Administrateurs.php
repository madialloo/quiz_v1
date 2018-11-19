<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        // if session is not started already , go back to login page which redirect to the appropriate page
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
        $this->load->model('Administrateurs_model');
    }
    // function to display the default visitor page
    public function index(){
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/administrateurs/main');
        $this->load->view('backend/inc/'.$footer);

    }
    // function to display the default admin page whenn logged in
    public function home(){
        $this->load->view('backend/administrateurs/home');
    }

    // function to display the logged in admin info
    public function display_Auser(){
        $cpt_pseudo = $this->session->userdata('cpt_pseudo');
        $result = $this->Administrateurs_model->get_Auser($cpt_pseudo);
        $data['users']  = $result->result_array();
        // print the data to see if it contain the expected result
        // print_r($data['users']);
        $this->load->view('backend/administrateurs/display_Auser',$data);
    }
    // function to display all admins info
    public function display_Ausers(){
        $cpt_type = $this->session->userdata('cpt_type');
        $result = $this->Administrateurs_model->get_Ausers($cpt_type);
        $data['users']  = $result->result_array();
        // print the data to see if it contain the expected result
        //  print_r($data['users']);
        $this->load->view('backend/administrateurs/display_Ausers',$data);
    }
    // function to display all admins info
    public function update_Auser(){
        $cpt_pseudo = $this->session->userdata('cpt_pseudo');
        $result = $this->Administrateurs_model->get_Auser($cpt_pseudo);
        $data['users']  = $result->result_array();
        // print the data to see if it contain the expected result
        //  print_r($data['users']);
        $this->load->view('backend/administrateurs/display_Ausers',$data);
    }
    // load the view that creates a new administrateur
    public function create_user() {
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/inc/'.$header);
        $this->load->view('backend/administrateurs/create_user');
        $this->load->view('backend/inc/'.$footer);
    }
    // gets the data from the view to creates a new administrateur
  
    // creating a userAdministrateur -> to Model Comptes
    public function register_user(){
        // if the button having name 'save_administrateur' is selected
        if($this->input->post('save_user')){
            // make the salt
            $salt = "Ilyade5chose5-en-ce-monde-quil-vaut-mieux_ignorer";
            // make and array of data from the form 'create_formateur'
                $CPT_PSEUDO  = $this->input->post('CPT_PSEUDO');
                $CPT_MOTDEPASSE  = hash('sha256',$this->input->post('CPT_MOTDEPASSE').$salt);
                $CPT_CONFMOTDEPASSE  = hash('sha256',$this->input->post('CPT_CONFMOTDEPASSE').$salt);
                $CPT_NOM  = $this->input->post('CPT_NOM');
                $CPT_PRENOM  = $this->input->post('CPT_PRENOM');
                $CPT_TYPE  = $this->input->post('CPT_TYPE');
                $CPT_ACTIF  = $this->input->post('CPT_ACTIF');
                // make the array 
                 $data = array($CPT_PSEUDO,$CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM,$CPT_TYPE,$CPT_ACTIF);
            // check the matching of the passwords : if KO reload the form + display error
            if($CPT_MOTDEPASSE != $CPT_CONFMOTDEPASSE){
                $data['error'] = "Mot de passe non identiques.";
                $this->load->view('backend/administrateurs/create_user',@$data);
            }
            // select * from t_compte_cpt where cpt_pseudo == input cpt_pseudo
            $que=$this->db->query("select * from t_compte_cpt where cpt_pseudo='$CPT_PSEUDO'");
            // get the number of rows found by the previous query
            $row = $que->num_rows();
            // if $row > 0 then send an error message , else...
            if(count($row)>0){
                $data['error']="<h3 style='color:red'>CPT_PSEUDO  already exists</h3>";
            } else {
                // send data array to the model
                $this->Administrateurs->insert_user($data);
                // display successfull message ? 
                $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
                // load the confirmation view with the entered data
                $this->load->view('backend/administrateurs/create_user',@$data);	
            }
        }
               
    }
    public function getAdministrateurs(){
        // if the button having name 'save_administrateur' is selected
        if($this->input->post('save_administrateur')){
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
                $this->Comptes->createAdministrateur($data);
                // display successfull message ? 
                $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
                // load the confirmation view with the entered data
                $this->load->view('backend/administrateurs/create_user',@$data);	
            }
        }
               
    }
    

}