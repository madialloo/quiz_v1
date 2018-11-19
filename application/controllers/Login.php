<?php 
// controller load the model Comptes for the data retrieved from the table T_COMPTE_CPT
class Login extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Comptes');
  }
  // loads the Authentification page
  public function index(){
    $this->load->view('backend/inc/header');
    $this->load->view('backend/main');
    $this->load->view('backend/inc/footer');
  }
  // function to check the type of user : check the input -> make array with data to be used for the session-> redirect accordingly//
  public function auth(){
    $cpt_pseudo    = $this->input->post('CPT_PSEUDO',TRUE);
    // hash the password end compare it to the one retrieve by Comptes 'model'
    $cpt_motdepasse = hash('sha256',$this->input->post('CPT_MOTDEPASSE',TRUE)); 
    $validate = $this->Comptes->validateCompte($cpt_pseudo,$cpt_motdepasse);
    
    if($validate->num_rows() > 0){
        // retrieve data
        $data  = $validate->row_array();
        $cpt_pseudo  = $data['CPT_PSEUDO'];
        $cpt_type = $data['CPT_TYPE']; 
        // create a session array with data
        $sesdata = array(
            'cpt_pseudo'  => $cpt_pseudo,
            'cpt_type'     => $cpt_type,
            'logged_in' => TRUE
        );
        // comparaison of data
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($cpt_type === 'Administrateur'){
            redirect('Comptes/administrateurs');
        // access login for Formateur
        } elseif($cpt_type === 'Formateur'){
            redirect('Comptes/formateurs');
        // access login for else ...
        } else {
            redirect('Visiteurs');
        }
    } else {
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  public function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}